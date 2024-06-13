---
title: "How to Use GitHub to Translate WAI Resources"
nav_title: Using GitHub
lang: en
last_updated: 2024-04-09
description: Help make the Web accessible to people with disabilities around the world. We appreciate your contributions to translating W3C WAI accessibility resources.

permalink: /about/translating/resources/using-github/
ref: /about/translating/resources/using-github/
redirect_from:
  - /about/translating/guides/using-github/

image: /content-images/about/social-translations.png
feedbackmail: wai@w3.org

footer: |
  <p><strong>Date:</strong> Updated 9 April 2024.</p>
  <p><strong>Editors:</strong> Rémi Bétin and <a href="https://www.w3.org/People/Shawn/">Shawn Lawton Henry</a>.</p>
  <p>Developed as part of the <a href="https://www.w3.org/WAI/about/projects/wai-coop/">WAI-CooP project</a>, co-funded by the European Commission.</p>

inline_css: |
   figure.screenshot {
      margin-block-start: 1em;   
   }
   
   figure.screenshot img {
      box-shadow: 3px 3px 3px #ddd;
   }

---
{::nomarkdown}
{% include box.html type="start" h="2" title="Summary" class="full" %}
{:/}

This page guide you through the steps to translate WAI resources using GitHub.

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::options toc_levels="2,3" /}
{::nomarkdown}
{% include toc.html type="start" title="Page Contents" %}
{:/}

-   TOC is created automatically.
{:toc}

{::nomarkdown}
{% include toc.html type="end" %}
{:/}

{% include showhidebutton.html showtext="Show all screenshots" hidetext="Hide all screenshots" target=".screenshot" %}

## Initial step: Declare your intent

In accordance with the WAI Translations process, please always [declare your intent](/about/translating/resources/#intent) and wait for reply from WAI team _before_ starting a translation.

## Create the translation file

<ol>
   <li>
   Near the bottom of each page on the WAI website, there is a "Help improve this page" box.<br />
   The middle button is "Fork & Edit in GitHub". That gets you to the GitHub repository.
   {% include showhidebutton.html showtext="Show screenshot" hidetext="Hide screenshot" target=".fork-edit-link" %}
   <figure class="fork-edit-link screenshot">
      {% include image.html src="about/translating/fork-edit-link.jpg" alt="Screenshot of the “Help improve this page” box. The “Fork & Edit in Github” middle button is outlined in dark orange." %}
   </figure>
   </li>
   <li>
   From there, you will be asked to “Fork the repository” – that is, creating a copy of the repository so you can make changes without affecting the original one.
   {% include showhidebutton.html showtext="Show screenshot" hidetext="Hide screenshot" target=".fork-repo" %}
   <figure class="fork-repo screenshot">
      {% include image.html src="about/translating/fork-repo.jpg" alt="Screenshot of a page in GitHub, stating “You need to fork this repository to propose changes”. The “Fork this repository” button is outlined in dark orange." %}
   </figure>
   </li>
   <li>
   On the next screen, select all the original file code and copy it to your clipboard (<kbd><kbd>Ctrl</kbd>+<kbd>C</kbd></kbd> or <kbd><kbd>⌘</kbd>+<kbd>C</kbd></kbd>).
   </li>
   <li>
   Click on the expand icon, next to the editor breadcrumb, to show the repository file tree.
   {% include showhidebutton.html showtext="Show screenshot" hidetext="Hide screenshot" target=".expand-file-tree" %}
   <figure class="expand-file-tree screenshot">
      {% include image.html src="about/translating/expand-file-tree.jpg" alt="Screenshot of the edit view in GitHub: the Expand icon, next to the secondary breadcrumb, is outlined in dark orange." %}
   </figure>
   </li>
   <li>
   Click on the "+" or "Add file" button to create a new file.
   {% include showhidebutton.html showtext="Show screenshot" hidetext="Hide screenshot" target=".new-file" %}
   <figure class="new-file screenshot">
      {% include image.html src="about/translating/new-file.jpg" alt="Screenshot of the edit view in GitHub, with the file tree expanded. The “+” or “Add file” button is outlined in dark orange." %}
   </figure>
   </li>
   <li>Name the new file according to instructions on <a href="/WAI/about/translating/resources/technical-steps/#create-file">Creating a New Translation</a> page.
   {% include showhidebutton.html showtext="Show screenshot" hidetext="Hide screenshot" target=".name-new-file" %}
   <figure class="name-new-file screenshot">
      {% include image.html src="about/translating/name-new-file.jpg" alt="Screenshot of the edit view in GitHub. The “File name” field, at the end of the secondary breadcrumb, is outlined in dark orange." %}
   </figure>
   </li>
   <li>
   <p>Paste the original content that you copied in step 2 into the editor (<kbd><kbd>Ctrl</kbd>+<kbd>V</kbd></kbd> or <kbd><kbd>⌘</kbd>+<kbd>V</kbd></kbd>).</p>
   <p>&#127881; <strong>Congrats! You have now created the translation file to work with.</strong></p>
   </li>
</ol>

## Work on your translation

<ol start="8">
   <li>
   Edit the content to translate the file, following guidance from <a href="/WAI/about/translating/resources/technical-steps/">Creating a New Translation</a> page.
   </li>
   <li>
   When you are happy with your work, click on "Commit changes..." to save the changes.
   {% include showhidebutton.html showtext="Show screenshot" hidetext="Hide screenshot" target=".commit-changes" %}
   <figure class="commit-changes screenshot">
      {% include image.html src="about/translating/commit-changes.jpg" alt="Screenshot of the edit view in GitHub. The “Commit changes...” button, next to the “Cancel changes” button, is outlined in dark orange." %}
   </figure>
   </li>
   <li>
   <p>In the appearing "Propose changes" modal window, you can rename your commit message to better reflect what you have changed. Then, click on "Propose changes".
   {% include showhidebutton.html showtext="Show screenshot" hidetext="Hide screenshot" target=".propose-changes" %}</p>
   <figure class="propose-changes screenshot">
      {% include image.html src="about/translating/propose-changes.jpg" alt="Screenshot of the “Propose changes” modal window in GitHub. The “Commit message” field says “Create french translation for Tips in Designing page”. The “Propose changes” button, next to the “Cancel” button, is outlined in dark orange." %}
   </figure>
   <p>&#127881; <strong>Congrats! You have now commited your changes!</strong></p>
   </li>
</ol>

## Prepare your draft Pull Request

<ol start="11">
   <li>
   <p>You are now in the "Comparing changes" view, between the "base" repository (the original W3C repository, beginning with w3c) and the "head" repository (your forked repository, beginning with your username).</p>
   <p>Click on "Create pull request", meaning that you propose to apply your changes to the official repository. If the button does not appear, you may need to refresh the page.    {% include showhidebutton.html showtext="Show screenshot" hidetext="Hide screenshot" target=".compare-changes" %}</p>
   <figure class="compare-changes screenshot">
      {% include image.html src="about/translating/compare-changes.jpg" alt="Screenshot of the “Comparing changes” view in GitHub. The “Create pull request” button is outlined in dark orange." %}
   </figure>
   </li>
   <li><p>Set the title of the Pull request using the following format: <strong>[IN-PROGRESS] Language - Resource Title.</strong></p>
   <p>Then, in the "Create pull request" button, select the drop-down arrow and select "Create draft pull request in the drop-down options. {% include showhidebutton.html showtext="Show screenshot" hidetext="Hide screenshot" target=".create-draft-pull-request" %}
</p>
   <figure class="create-draft-pull-request screenshot">
      {% include image.html src="about/translating/create-draft-pull-request.jpg" alt="Screenshot of the “Open a pull request” form in GitHub. The pull request title is “[IN-PROGRESS] French - Tips for Designing”. The drop-down arrow in the “Create pull request” button is selected: the second option “Create draft pull request” is visible." %}
   </figure>
   </li>
   <li><p>Click on the "Draft pull request" button to confirm the submission of the pull request.
   {% include showhidebutton.html showtext="Show screenshot" hidetext="Hide screenshot" target=".draft-button" %}</p>
   <figure class="draft-button screenshot">
      {% include image.html src="about/translating/draft-button.jpg" alt="Screenshot showing the main button of the form is now “Draft pull request”." %}
   </figure>
   <p>&#127881; <strong>Congrats! Your draft pull request is now created!</strong></p>
   </li>
</ol>

## Preview your changes

<ol start="14">
   <li>After you submit the pull request, it will create a preview so you can check your file and make edits. At first, a notification comment will say <strong>"👷 Deploy Preview for <em>wai-repo-name</em> processing."</strong>
   {% include showhidebutton.html showtext="Show screenshot" hidetext="Hide screenshot" target=".preview-processing" %}
   <figure class="preview-processing screenshot">
      {% include image.html src="about/translating/preview-processing.jpg" alt="Screenshot of the Pull request view in GitHub. A comment created by netlify starts with “👷 Deploy Preview for wai-quick-start processing.”" %}
   </figure>
   </li>
   <li><p>After a few minutes, the notification comment will change to <strong>“✅ Deploy Preview for <em>wai-repo-name</em> ready!”</strong>.</p>
   <p>To see your preview, click on the "Deploy Preview" link. {% include showhidebutton.html showtext="Show screenshot" hidetext="Hide screenshot" target=".preview-ready" %}</p>
   <figure class="preview-ready screenshot">
      {% include image.html src="about/translating/preview-ready.jpg" alt="Screenshot of the Pull request view in GitHub. The netlify comment now starts with “✅ Deploy Preview for wai-quick-start ready!”. A Deploy Preview link is visible, outlined in dark orange." %}
   </figure>
   </li>
</ol>

## Mark your Pull request as ready for review

<ol start="16">
<li><p>When you have done all your checks and edits, click on the "Edit" button at the top of the Pull request view, to change the title prefix "[IN-PROGRESS]" to <strong>"[Ready for Review]"</strong></p>
   <p>Then, click on the "Ready for review" button, at the bottom of the Pull request view. {% include showhidebutton.html showtext="Show screenshot" hidetext="Hide screenshot" target=".ready-for-review-button" %}</p>
   <figure class="ready-for-review-button screenshot">
      {% include image.html src="about/translating/ready-for-review-button.jpg" alt="Screenshot of a section of the Pull request view. Next to “This pull request is still a work in progress”, the “Ready for review” button is outlined in orange." %}
   </figure>
   </li>
   <li><p>&#127881; <strong>Congratulations, your pull request is now ready for review!</strong></p>
   <p>You can see it is marked as "Open" with a green label at the top of the Pull request view.
   {% include showhidebutton.html showtext="Show screenshot" hidetext="Hide screenshot" target=".ready-for-review-state" %}</p>
   <figure class="ready-for-review-state screenshot">
      {% include image.html src="about/translating/ready-for-review-state.jpg" alt="Screenshot of an open pull request in GitHub. The title of the pull request is “[Ready for review] French - Tips for Designing”. A green label “Open” is present below the title." %}
   </figure>
   </li>
</ol>
