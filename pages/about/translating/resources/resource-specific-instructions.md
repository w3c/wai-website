---
title: "Resource-Specific Translation Instructions"
nav_title: Resource-Specific Instructions
lang: en
last_updated: 2024-05-27
description: Help make the Web accessible to people with disabilities around the world. We appreciate your contributions to translating W3C WAI accessibility resources.

permalink: /about/translating/resources/resource-specific-instructions/
ref: /about/translating/resources/resource-specific-instructions/

github:
  label: wai-translation-guidance

image: /content-images/about/social-translations.png
feedbackmail: wai@w3.org

footer: |
  <p><strong>Editors:</strong> <a href="https://www.w3.org/People/Shawn/">Shawn Lawton Henry</a> and Rémi Bétin.</p>
  <p>Developed as part of the <a href="https://www.w3.org/WAI/about/projects/wai-coop/">WAI-CooP project</a>, co-funded by the European Commission.</p>
---

{::nomarkdown}
{% include box.html type="start" h="2" title="Summary" class="full" %}
{:/}

This page provides specific translation instructions for some WAI resources.

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::options toc_levels="2" /}
{::nomarkdown}
{% include toc.html type="start" title="Page Contents" %}
{:/}

-   TOC is created automatically.
{:toc}

{::nomarkdown}
{% include toc.html type="end" %}
{:/}

{::nomarkdown}
{% include excol.html type="all" %}
{:/}


{::nomarkdown}
{% include excol.html type="start" id="video-introduction" %}
{:/}
## Video Introduction to Web Accessibility and W3C Standards
{::nomarkdown}
{% include excol.html type="middle" %}
{:/}

Check if the [player is available in your translated language {% include_cached external.html %}](https://github.com/ableplayer/ableplayer/blob/master/README.md#user-content-supported-languages).

Then, translate the ["Translations" section](/videos/standards-and-benefits/#translations) of the page accordingly:
1. **If the player _is_ available in the translated language**:
   * Translate the following words from the video player interface:
     * "Captions"
     * "Show transcript"
     * "Language"
   * Update the image per the instructions below.\
   _If you are not able to update the image, let us know at [group-wai-translations@w3.org](mailto:group-wai-translations@w3.org)._
     * Make a new image to replace [show-language.png](https://www.w3.org/WAI/content-images/wai-video-standards-and-benefits/show-language.png). The circle is 7px #eed009 / rgb(238,208,9).
     * Name it `show-language.[language tag].png`\
     For example: `show-language.fr.png`
     * Upload it to the [content-images folder](https://github.com/w3c/wai-video-standards-and-benefits/tree/master/content-images/wai-video-standards-and-benefits)
   * In your translation, add the language tag to the image path.
2. **If the player is _not_ available in the translated language**:
   * Do not translate the following words from the video player interface; leave them in English:
      * "Captions"
      * "Show transcript"
      * "Language"
   * Mark up the English words with the lang attribute:\
   `<span lang="en">Captions</span>`.

{::nomarkdown}
{% include excol.html type="end" %}
{:/}

{::nomarkdown}
{% include excol.html type="start" id="perspective-videos" %}
{:/}
## Web Accessibility Perspectives Videos
{::nomarkdown}
{% include excol.html type="middle" %}
{:/}

The ["Web Accessibility Perspective Videos"](/perspective-videos/) page points to the resource sub-pages. Once you have translated a sub-page, add your language tag to the end of the corresponding URL in the index page.

{::nomarkdown}
{% include box.html type="start" title="Example for a French translation:" %}
{:/}
```markdown
{% raw %}- [![](img/thumbnails/keyboard.jpg)<br>Compatibilité avec le clavier]({{ "/perspective-videos/keyboard/fr" | relative_url }}) {% endraw %}
```
{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include excol.html type="end" %}
{:/}

{::nomarkdown}
{% include excol.html type="start" id="people-use-web" %}
{:/}
## How People with Disabilities Use the Web
{::nomarkdown}
{% include excol.html type="middle" %}
{:/}

The title "How People with Disabilities Use the Web" is **not a question**: it is a statement. For translation, it might help to think of it as **a shorter version of** "An Introduction to How People with Disabilities Use the Web" or "Description of How People with Disabilities Use the Web".

{::nomarkdown}
{% include excol.html type="end" %}
{:/}

{::nomarkdown}
{% include excol.html type="start" id="wcag-glance" %}
{:/}
## WCAG 2 at a Glance
{::nomarkdown}
{% include excol.html type="middle" %}
{:/}

For the [Guidelines](/standards-guidelines/wcag/glance/#guidelines) section:
- **Please consider the wording in the [WCAG 2.2](https://www.w3.org/TR/WCAG/) success criteria.** If there is a [translation of WCAG 2](/standards-guidelines/wcag/translations/) in your language, review it thoughtfully.
- **This text is not the same as the success criteria wording** &mdash; it is a paraphrased summary that is intended to be easier to understand and accurate – yet it does not need to be comprehensive.
- Please collaborate with others who are familiar with WCAG to refine this wording in your language.

{::nomarkdown}
{% include excol.html type="end" %}
{:/}

{::nomarkdown}
{% include excol.html type="start" id="tutorials" %}
{:/}
## Tutorials (including An <code>alt</code> Decision Tree)
{::nomarkdown}
{% include excol.html type="middle" %}
{:/}

Tutorials resources use a dynamic footer, using specific metadata set in the "front matter" of each page.

{::nomarkdown}
{% include box.html type="start" title="Example:" %}
{:/}
```yaml
metafooter: true
editors:
  - Eric Eggert: "https://www.w3.org/People/yatil/"
  - Shadi Abou-Zahra: "https://www.w3.org/People/shadi/"
update_editors:
  - Brian Elton
contributing_participants:
  - see <a href="/WAI/tutorials/acknowledgements/">Acknowledgements</a>
support: Developed by the Education and Outreach Working Group (<a href="https://www.w3.org/groups/wg/eowg">EOWG</a>). Developed with support from the <a href="https://www.w3.org/WAI/ACT/">WAI-ACT project</a>, co-funded by the <strong>European Commission <abbr title="Information Society Technologies">IST</abbr> Programme</strong>.
```
{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

1. Translate content in `editors`, `update_editors`, `contributing_participants` and `support`.\
2. Translate the Working Group name and leave the Working Group acronym in English.
3. Add translations for the following terms, used by the footer, in the [translations.yml file {% include_cached external.html %}](https://github.com/w3c/wai-website-data/blob/master/translations.yml) located in [the `wai-website-data` repository {% include_cached external.html %}](https://github.com/w3c/wai-website-data/):
- "Editors:"
- "Update Editor:"
- "Status"
- "Updated"
- "first published"

{::nomarkdown}
{% include excol.html type="end" %}
{:/}