---
title: Caption Formats
nav_title: Caption formats
order: 3
status: review-draft
wcag_success_criteria:
  - 1.2.2
wcag_techniques:
  - G87
  - H95
editors:
  - Geoff Freed
  - Judy Brewer
contributors:
  - The Education and Outreach Working Group (<a href="https://www.w3.org/WAI/EO/">EOWG</a>)
support: Developed with support from the <a href="https://www.w3.org/WAI/WCAGTA/">U.S. Access Board, WCAG TA Project</a>
---

Nearly all modern browsers and media players support the display of closed captions.  However, they do not all support the same caption-file formats. The most commonly used formats used for online media are:

-   [Web Video Text Tracks (WebVTT)](https://w3c.github.io/webvtt/)
-   [Timed Text Markup Language
    (TTML)](https://www.w3.org/TR/ttaf1-dfxp/)
-   [SRT](https://matroska.org/technical/specs/subtitles/srt.html)

Standalone players typically support WebVTT and/or TTML.  Streaming media services typically use TTML to convey captions to users.

WebVTT and TTML contain a full array of markup for styling, timing and placement options.  SRT is a bare-bones format that displays unstyled text only, although some user agents may support basic styling commands (such as bold or italic text) if they are present in the caption file.

Web browsers support various caption formats, as shown in the table below.

<table>
	<tr>
		<th scope="col">Browser</th>
		<th scope="col">OS</th>
		<th scope="col">Supported caption format(s)</th>
	</tr>
	<tr>
		<th scope="row">Firefox</th>
		<td>Windows, OS X, Android, iOS</td>
		<td>WebVTT</td>
	</tr>
	<tr>
		<th scope="row">IE 10, 11; Edge</th>
		<td>Windows</td>
		<td>TTML, WebVTT</td>
	</tr>
	<tr>
		<th scope="row">Safari</th>
		<td>OS X; iOS</td>
		<td>WebVTT</td>
	</tr>
	<tr>
		<th scope="row">Chrome</th>
		<td>Windows, OS X, Chrome OS, Android, iOS</td>
		<td>WebVTT</td>
	</tr>
</table>

SRT is not supported natively by any browser, but is supported by most
other types of media players including those provided by popular
video-hosting services, some social-media platforms and by custom
players.

WebVTT, TTML and SRT are "sidecar" files, which is to say they are
transmitted separately from their corresponding video files (riding
alongside the video data in the delivery stream, rather than being
embedded directly into the video file), and are synchronized and
displayed by the user agent at the time of playback.

## Distributing captions

Captions are distributed to viewers using HTML5's `track` element, which
was created specifically for carrying text tracks, such as captions,
subtitles and [text-based audio descriptions]({% link _media-intro/production-audio-description.md %}). `track` is used as a child element of the `video` element:

{::nomarkdown}
{% include box.html type="start" title="Code" class="example" %}
{:/}

~~~html
<video controls>
    <source src="myvideo.mp4" type="video/mp4" />
        <track kind="captions" src="myvideo_captions.vtt" srclang="en" label="Captions" default />
</video>
~~~

{::nomarkdown}
{% include box.html type="end" %}
{:/}

In the example above, the `kind` attribute is set to "captions" to identify what type of text track it is.  The `label` attribute is set to "Caption," which is the visible text (or label) that the user agent will display to identify the track to the user. [Learn more about attributes for the `track` element](https://www.w3.org/TR/2016/REC-html51-20161101/semantics-embedded-content.html#the-track-element).
