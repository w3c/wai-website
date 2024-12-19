---
title: "How to Translate Images"
nav_title: Images
lang: en
last_updated: 2024-04-09
description: Help make the Web accessible to people with disabilities around the world. We appreciate your contributions to translating W3C WAI accessibility resources.

permalink: /about/translating/resources/images/
ref: /about/translating/resources/images/
redirect_from:
  - /about/translating/guides/images/

github:
  label: wai-translation-guidance

image: /content-images/about/social-translations.png
feedbackmail: wai@w3.org

footer: |
  <p><strong>Editor:</strong> Rémi Bétin.</p>
---

{::nomarkdown}
{% include box.html type="start" h="2" title="Summary" class="full" %}
{:/}

This page guides you through the technical steps to translate images from the Web Accessibility Initiative (WAI) website.

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::options toc_levels="2" /}
{::nomarkdown}
{% include_cached toc.html type="start" title="Page Contents" class="simple" %}
{:/}

-   TOC is created automatically.
{:toc}

{::nomarkdown}
{% include toc.html type="end" %}
{:/}

{::nomarkdown}
{% include box.html type="start" class="highlighted" %}
{:/}
W3C staff temporarily has limited availability to support WAI translations.

We expect to be back to full support by mid-February 2025. Thank you very much for your patience, if we are not able to reply to you until then. We greatly appreciate contributions and look forward to supporting you as soon as possible.

{::nomarkdown}
{% include box.html type="end" %}
{:/}

## Overview

There are 3 steps to create translated versions of our resources' images:

1. **[Translate the SVG source file](#translate-svg)**

2. **[Export the translated image as a PNG](#export-png)**

3. **[Commit your changes and open a Pull Request](#commit-changes)**

## Initial step: Declare your intent

In accordance with the WAI Translations process, please always [declare your intent](/about/translating/resources/#intent) and wait for reply from WAI team _before_ starting a translation.

## Step 1: Translate the SVG source file {#translate-svg}

When an image from our website can be translated, it is usually provided with an SVG source file.

In general:
- PNG images are located in the `content-images/` folder of the repository
- SVG source files are located in the `content-images/source/` folder of the repository.

**What you will need:**
- An SVG editor. The following instructions apply to the [Inkscape](https://inkscape.org/) editor that have been used by some volunteers.
- The ["Noto Sans" font family](https://fonts.google.com/noto/specimen/Noto+Sans), including the _Regular_ and _Bold_ weights, installed on your computer.

**Translating the SVG source file:**

{::nomarkdown}
<ol>
<li>
{:/}

Duplicate the SVG file and add your language tag in the filename. Example: `bridge.fr.svg`

{::nomarkdown}
</li>
<li>
{:/}

Open the SVG file in your SVG editor.

{::nomarkdown}
</li>
<li>
{:/}

In Inkscape, select the "Text Tool" on the lateral toolbar (or use the keyboard shortcut <kbd>T</kbd>)

{% include showhidebutton.html showtext="Show screenshot" hidetext="Hide screenshot" target=".text-tool" %}
<figure class="text-tool screenshot">
   {% include image.html src="about/translating/inkscape-text-tool.jpg" alt="" %}
</figure>

{::nomarkdown}
</li>
<li>
{:/}

Select the text objects and translate them. If necessary, you can slightly adjust the font size to prevent the text from going beyond the frame.

{::nomarkdown}
</li>
<li>
{:/}

Change the language (`dc:language`) value of the file, with your language tag. For example: `fr` instead of `en`.

In Inkscape, you can go to `File > Document Properties…`. Then, in the "Metadata" tab, change the value of the "Language" field.

{% include showhidebutton.html showtext="Show screenshot" hidetext="Hide screenshot" target=".language-subtag" %}
<figure class="language-subtag screenshot">
   {% include image.html src="about/translating/inkscape-language-subtag.jpg" alt="" %}
</figure>

{::nomarkdown}
</li>
<li>
{:/}

Save the SVG file.

{::nomarkdown}
</li>
</ol>
{:/}

## Step 2: Export the translated image as a PNG {#export-png}

{::nomarkdown}
<ol>
<li>
{:/}
Export the file as a PNG image, with your language tag in the middle. Example: `bridge.fr.png`.\

In Inkscape, go to `File > Export…` and make sure:
- the Export area is "Page" (not "Document")
- "PNG" is the selected export format. 

Then click on the "Export" button.

{% include showhidebutton.html showtext="Show screenshot" hidetext="Hide screenshot" target=".export-png" %}
<figure class="export-png screenshot">
   {% include image.html src="about/translating/inkscape-export-png.jpg" alt="" %}
</figure>

{::nomarkdown}
</li>
<li>
{:/}

Move the PNG file in the same location as the English version (generally at the root of the `content-images/` folder) 

{::nomarkdown}
</li>
</ol>
{:/}

## Step 3: Commit your changes and open a Pull Request {#commit-changes}

Include the PNG and the SVG source file.


{::nomarkdown}
{% include box.html type="start" title="Disclaimer" %}
{:/}

W3C does not endorse specific products. Inclusion of products in this resource does not indicate endorsement by W3C.

{::nomarkdown}
{% include box.html type="end" title="Disclaimer" %}
{:/}