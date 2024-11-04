import axios from "axios";
import { readFileSync } from "fs";
import { readFile, writeFile } from "fs/promises";
import { join } from "path";

// All known channels referenced across the website's various minutes files
const groupedChannels = {
  gl: ["ag", "wai-wcag"],
  coga: ["coga"],
  "conformance-testing": ["wcag-act"],
  "low-vision-a11y-tf": ["low-vision", "lvtf"],
  matf: ["mobile-a11y"],
  silver: ["silver"],
  wcag2ict: ["wcag2ict"],
  wcag3: [
    "silver",
    "silver-conf",
    "silver-functional",
    "silver-plan",
    "silver-protocols",
    "silver-reliability",
    "wcag3",
    "wcag3-conf",
    "wcag3-equity",
    "wcag3-protocols",
    "wcag3-reliability",
    "wcag3-scoping",
    "wcag3-scoring",
    "wcag3-supported",
  ],
  apa: ["apa", "pf", "pf-ftf"],
  "apa-adapt": ["adapt", "personalization"],
  "apa-css-a11y": ["css-a11y"],
  "apa-maturity-model": ["maturity"],
  "apa-pronunciation": ["pronunciation"],
  "apa-research-questions": ["rqtf"],
  aria: ["aria", "aria-dive"],
  "aria-editors": ["aria-editors"],
  "aria-practices": ["aria-apg"],
};
const channels = Array.from(new Set(Object.values(groupedChannels).flat()));

const getDataPath = (channelId) =>
  join("_data", "minutes", `${channelId}.json`);

// Find most recent date among all minutes data files
const startDate = channels.reduce((latestDate, channelId) => {
  try {
    const [year, month, day] = JSON.parse(
      readFileSync(getDataPath(channelId), "utf8")
    )[0].date.split("-");
    const lastDate = new Date(year, month, day);
    return lastDate > latestDate ? lastDate : latestDate;
  } catch {
    return latestDate;
  }
  // TODO: replace below when done testing
}, new Date(2024, 3, 1));
// }, new Date(1998, 11, 1));

// TODO: update when done testing
const baseUrl = "http://kgf.localhost/WWW/2022/01/minutes/Json.php";
// const baseUrl = "https://w3.org/2022/01/minutes/Json.php";

const { data } = await axios.get(
  `${baseUrl}?channel_id=${channels.join(",")}&start_date=${startDate
    .toISOString()
    .slice(0, 10)}`
);

for (const [groupId, channelIds] of Object.entries(groupedChannels)) {
  const existingMinutes = JSON.parse(
    await readFile(getDataPath(groupId), "utf8").catch(() => "{}")
  );
  const newMinutes = [];
  for (const channelId of channelIds) {
    if (data[channelId]) {
      for (const [date, details] of Object.entries(data[channelId])) {
        // Push with extra fields, to be used for sorting then removed
        newMinutes.push({ ...details, channelId, date });
      }
    }
  }
  newMinutes.sort((a, b) => {
    const aDate = new Date(a.date);
    const bDate = new Date(b.date);
    // Sort descending by date
    if (aDate > bDate) return -1;
    if (aDate < bDate) return 1;
    // Tie-break ascending by channel
    if (a.channelid < b.channelId) return -1;
    if (a.channelid > b.channelId) return -1;
    return 0;
  });
  const minutes = newMinutes.reduce((map, details) => {
    const key = `${details.date}-${details.channelId}`;
    delete details.channelId;
    delete details.date;
    map[key] = details;
    return map;
  }, {});
  for (const [key, details] of Object.entries(existingMinutes)) {
    // Keep newer data from startDate in case it supersedes old
    if (key in minutes) continue;
    minutes[key] = details;
  }
  await writeFile(getDataPath(groupId), JSON.stringify(minutes, null, "  "));
}
