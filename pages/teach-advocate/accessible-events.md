---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after #.
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "How to Make Your Presentations and Meetings Accessible to All"
nav_title: "Make Presentations and Meetings Accessible"   # A short title that is used in the navigation

lang: en   # Change "en" to the translated language shortcode from https://www.iana.org/assignments/language-subtag-registry/language-subtag-registry
last_updated: 2022-08-@@   # Put the date of this translation YYYY-MM-DD (with month in the middle)

# translators:    # remove from the beginning of this line and the lines below: "# " (the hash sign and the space)
# - name: "Jan Doe"   # Replace Jan Doe with translator name
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple translators
# contributors:
# - name: "Jan Doe"   # Replace Jan Doe with contributor name, or delete this line if none
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple contributors

github:
  repository: w3c/wai-presentations2all
  path: content/index.md   # Add the language shortcode to the middle of the filename, for example content/index.fr.md
permalink: /teach-advocate/accessible-presentations/   # Add the language shortcode to the end, with no slash at end, for example /teach-advocate/accessible-presentations/fr

ref: /teach-advocate/accessible-presentations/   # Translators, do not change this
layout: default

description: Helps make your presentations and meetings accessible to people with disabilities. Addresses in-person, remote, and hybrid events.  # translate the description

footer: >   # Translate words below, including "Date:" and "Editor:" Translate the Working Group name. Leave the Working Group acronym in English. Do *not* change the dates in the footer below.
  <p><strong>Date:</strong> Updated @@ Month 2022. First published May 2010. <strong>Note:</strong> We are updating and expanding this resource in July and August 2022.</p>
  <p><strong>Editor:</strong> <a href="http://www.w3.org/People/Shawn">Shawn Lawton Henry</a>. Contributors: Shadi Abou-Zahra and <a href="https://www.w3.org/groups/wg/eowg/participants">EOWG Participants</a>.</p>
  <p>Developed by the Education and Outreach Working Group (<a href="http://www.w3.org/WAI/EO/">EOWG</a>). Developed with staff of the <a href="http://www.w3.org/WAI/WAI-AGE/">WAI-AGE Project</a> funded by the European Commission under the 6th Framework.</p>

# Check for any Translations Notes specifically for this resource at https://github.com/w3c/wai-presentations2all/blob/master/README.md
# end of translation instructions

inline_css: |
  .forwhich {
    color: #3b3b3b;
    font-style: italic;
    font-weight: normal;
  }

---

{::nomarkdown}
{% include box.html type="start" h="2" title="Summary" class="full" %}
{:/}

This page helps you make your presentations, meetings, conferences, and training more accessible to everyone, particularly people with disabilities. Considerations address in-person, remote, and hybrid events of all sizes.

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::options toc_levels="2" /}

{::nomarkdown}
{% include_cached toc.html type="start" title="Page Contents" class="full" %}
{:/}

-  TOC is created automatically.
{:toc}

{::nomarkdown}
{% include_cached toc.html type="end" %}
{:/}

{% include_cached excol.html type="all" %}

{% include_cached excol.html type="start" id="overview" %}
## Overview
{% include_cached excol.html type="middle" %}

Be aware that some of your audience might not be able to:
-  **see** well or at all,
-  **hear** well or at all,
-  **move** well or at all,
-  **speak** well or at all, or
-  **understand** information presented in certain ways well or at all.

This means being prepared to provide an accessible experience. Notably, events that are accessible to people with disabilities are also **inclusive** to many more audiences and help create more usable content. 

For instance, a live presentation with slides is recorded and later made available in an audio podcast:

-  The presenter describes the important visual information in the slides during the presentation. That provides key information for attendees who are blind or cannot see the slides well. Then later, people listening to the podcast can more easily follow along even though they don’t have video.
-  Also during the presentation, a professional captioner types what is being said as text. Attendees use these during the meeting including those who are deaf, hard of hearing, and better comprehend written text. Then later, the captioning output is used to develop a text transcript which provides easy-to-reference content on the page and search engine optimization (SEO) for the presentation, the podcast, and the website.

(If you want to learn about more benefits of accessible media, see [Benefits to Organizations and Individuals, in Making Audio and Video Media Accessible](/media/av/#benefits) and [benefits of transcripts {% include_cached external.html %}](http://www.uiaccess.com/transcripts/transcripts_on_the_web.html).)

Meeting organizers and speakers can do a lot to provide accessibility including:
-  ensure the facility & conference software are accessible
-  speak clearly into microphones
-  describe important visual information
-  and other considerations listed on this page.

**Don’t assume accessibility needs are only by request.** Instead, events should proactively include accessibility considerations at the onset. Proper planning can help attendees with disabilities know they will be able to attend and enjoy your event, and you will be able to integrate accessibility needs seamlessly and thoughtfully so all attendees feel welcomed and included. Review the list below for considerations at each stage of planning and execution.

{% include_cached excol.html type="end" %}

{% include_cached excol.html type="start" id="arrange" %}
## Planning the Event
{% include_cached excol.html type="middle" %}

### Ensure the in-person venue is accessible to speakers and participants

Ensure event spaces meet accessibility standards including the building entrance, meeting rooms, presentation stages, and bathrooms. This also applies to event-sponsored hotels and social events. Additionally, consider the transportation options available for navigating to and from the meeting and sponsored social events. Where possible, let speakers and participants with disabilities check out the rooms in advance to suggest optimum positioning of the speaker, screen, seating, etc. Use online checklists to help ensure a facility is accessible, such as [Accessibility Checklist for Existing Facilities {% include_cached external.html %}](http://uiaccess.com/facilities.html). 

### Ensure the remote meeting platform is accessible

Ensure the software platform itself meets accessibility standards (such as WCAG) and allows for including necessary features such as captioning and viewing interpreters. This also includes offering multiple participant connection options (e.g., via telephone, computer, or mobile app). For more, review the W3C resource <cite>Accessibility of Remote Meetings</cite>, specifically the section on [selecting an accessible remote meeting platform](https://www.w3.org/TR/remote-meetings/#selection).

### Provide meeting information via accessible communications

Ensure all communications such as meeting invitations, email correspondence, registration forms, and event websites conform to accessibility standards. (For more, see XYZ resource...)

### Ask speakers and participants if they have accessibility requirements

Provide a method for attendees to request accessibility needs, such as within a question on a conference registration form or sending an email to a designated event coordinator. Invite participants to include specific requests and be prepared to address them. Note this may include considerations for attendants who will accompany speakers and participants.

### Arrange for captioners, interpreters, and assistive listening devices (ALD) (e.g., hearing loops), as needed

*([Captioners](#captions){:.termref}), [interpreters](#terps){:.termref}, and assistive listening devices ([ALDs](#ald){:.termref}) are explained in the [Terminology](#terms) section.)* 

Coordinate this with facilities managers and meeting software providers as needed. For smaller meetings and events, these are generally provided upon request (though captions have significant benefits to a large portion of the population and should be considered a default provision). For larger meetings and conferences, plan to include these by default; for instance, provide interpreters in the primary language of the conference for all major keynote conference sessions. Ensure it is clear how to implement these functions within the event set-up ahead of time; for example, a remote captioner can hear the audio clearly, a screen is provided for in-person participants to read the captions, and a presenter’s microphones and computer sound output are connected to the ALD system in session rooms.

### Provide event details related to accessibility

Provide accessibility information as early as possible, such as within an FAQ event website page. Provide details important for assessing the ability to attend an event, for example, the accessible routes between in-person meeting rooms, the agenda (or general event activities), meeting times and breaks, food allergies accounted for, and what accommodations will be provided versus need to be requested. 

{% include_cached excol.html type="end" %}

{% include_cached excol.html type="start" id="setup" %}
## Event Set-up
{% include_cached excol.html type="middle" %}

### Consider accessibility when planning the schedule

Schedule sufficient breaks to account for more time needed for navigation, taking care of medical needs, and more time to generally process the information heard before moving to the next topics. Provide the schedule as early as possible so attendees can properly plan. Then keep to the schedule as much as possible, and inform participants ahead of time of any changes.

### Arrange for good Internet connection

For in-person events, Internet is important for attendees using screen readers or other [assistive technologies](#terms){:.termref} for tasks such as following along with provided materials. Presenters may also need it to share alternative formats of materials during the presentation. For remote [captioning](#captions){:.termref}, you will need enough bandwidth for transferring audio. For remote events, strong Internet connections are vital for speakers to come through clearly.

### Arrange for good visibility of speakers and [interpreters](#terps){:.termref} & adequate sound systems

Have good lighting on everyone's face and upper body. Avoid distracting backgrounds, such as bright sunlight or flashing light. Ensure everyone speaking has microphones (preferably lapel microphones for in-person speakers who may move around). Provide microphones for in-person audience questions, including access for interpreters who may be speaking questions for deaf attendees.

### Minimize distractions in meeting set-up

Speaker surroundings and backgrounds should include minimal, non-moving objects. Background music should be turned off when people are talking, including background music during in-person networking events. Do not use flashing lights or content (these can cause seizures), and generally eliminate any noises or motion not necessary for the primary presentation or event focus.

### Provide speakers with accessibility requirements and guidance

Tell speakers that you expect their material and presentations to be accessible to people with disabilities. Consider including accessibility requirements in any contracts. Consider including the link to this page (www.w3.org/WAI/training/accessible) in speaker guidelines, e-mails, web pages, etc.

### Provide material ahead of time to attendees & [interpreters](#terps){:.termref} and [captioners](#captions){:.termref}

When possible, provide accessible slides, handouts, and other material to participants prior to the sessions. Among other benefits, it helps attendees prepare their questions ahead of time and ensure remote attendees can access content that's screen shared. (More about [providing accessible material](#material) is below.)

Provide material to [interpreters](#terps){:.termref} and [captioners](#captions){:.termref} as well and work with them to answer questions and explain acronyms, terms, names, etc. This will help them be more prepared to provide accurate content.

### Ensure audio and video are accessible, during the meeting and in recordings aftewards

For example, provide [captions](#captions){:.termref} _(called “intralingual subtitles” in some areas)_ and/or transcripts for audio, and provide narration and not just visuals in video content. For guidance on creating accessible media, **see [[Making Audio and Video Media Accessible]](/media/av/)**.

{% include_cached excol.html type="end" %}
{% include_cached excol.html type="start" id="presentations" %}
## Presenter Guidance
{% include_cached excol.html type="middle" %}

### Use variety in your presentation for different learning styles

Keep in mind that people understand information differently -- some prefer verbally, others with pictures and diagrams, and others with text. Attempt to help everyone follow along by providing a variety of communication types in your presentation.

### Consider accessibility for participant activities

Interacting with your audience is encouraged, but be mindful to check for potential accessibility issues ahead of time. For example, will everyone be able to use a polling feature, arrange sticky notes (on a virtual or physical board), speak up quickly in a group setting, etc.? In general, provide a variety of ways to collect attendee input and also give notice ahead of time that participants should come prepared to engage (such as in talk descriptions).

### Be clearly visible and use a microphone

Be visible and in good light, being mindful not to face away from the audience to read projected material. Also use a microphone, even in a small room or when connecting remotely. Ensure that all relevant sound is audible through the sound system ahead of time.

### Speak as slowly and clearly as possible

This helps participants and interpreters best understand you and keep up.

### Use simple language

Even for technical talks, avoid or explain jargon, acronyms, and idioms. For example, expressions such as "raising the bar" can be interpreted literally by some people with cognitive disabilities and can be confusing.

### Give people time to process information

Pause between topics. When you ask if anyone has questions, some people with cognitive disabilities will need extra time to form their thoughts into words.

### Provide audio and video in text form for deaf and hard of hearing participants

When presenting audio or video, ensure it is also available as text, for example, videos are captioned ahead of time and turned on while playing. If you are relying on the live captioner for this, ensure the organizer and/or captioner knows this ahead of time.

### Speak aloud visual information for blind participants

Say all of the pertinent information that on each slide; you do not need to read the slide exactly as it is shown, but do cover the key displayed information in what you say. This includes describing pertinent parts of graphics, videos, and other visuals (but disregard purely decorative images). Describe other key visual information to help people follow along; for example, if you ask people to raise their hand for something, describe the outcome as in: "About half of you raised your hand".

### Help attendees follow along with conversations

If the audience doesn't have a microphone or types a question in chat, repeat their questions and comments before replying.

{% include_cached excol.html type="end" %}
{% include_cached excol.html type="start" id="slides" %}
## Accessible Slides and Projected Material
{% include_cached excol.html type="middle" %}

### Limit the amount of text on each slide {#slide-text}

Avoid putting lots of text or other content on slides. Otherwise, people won't know whether to read or listen to you (most people cannot/will not do both). If you want to provide additional information, you could put it in a handout or in slides with notes separate from the presentation. Also remember to use [simple language](#simple-language).

### Avoid small text and visuals (??)

What is this referring to?? >> Ensure graphics, videos, posters, and other non-electronic material are big enough to be read even from the back of a room.

### Use easy-to-read fonts

Simple fonts with consistent thickness are often easier to read from a distance. Fonts where parts of the letters are thin are harder to read. Avoid fancy fonts that are difficult to read.

### Have sufficient contrast between colors ("luminance contrast")

Ensure colors are easy to see by paying attention to the background that text sits on (that is, the contrast between them) and colors next to each other within graphs. There are guidelines for web pages that you can use to help determine sufficient contrast &mdash; even though the medium is different. See [Understanding contrast guidance](https://www.w3.org/WAI/WCAG21/Understanding/contrast-enhanced) and [contrast evaluation tools](https://www.w3.org/WAI/WCAG21/Understanding/contrast-enhanced#resources).
Consider optimal background and text colors for the presentation. For instance, some suggest when presenting in a light room, to display dark text on a light background; and when presenting in a darkened room, to display light text on a dark background.
What does this mean?? >> Ensure that the weight of text is sufficient (for example, bold).

### Consider how to use motion or animations

Certain types of motion can be extremely distracting for some people, and can make some people ill; this includes effects like text flying into slides.  Use motion primarily to helps people better understand your content (versus simply for decorative effect), and keep the motion effects minimal. Avoid blinking or flashing that could cause seizures; for more on that, see [Understanding Guideline 2.3: Seizures and Physical Reactions](https://www.w3.org/WAI/WCAG21/Understanding/seizures-and-physical-reactions).

### Make provided material accessible {#expres} & available for alternative formats

If you are giving participants material such as your slides or handouts, make them accessible. For instance, ensure content has headings/titles, text descriptions for images, and actual bulleted lists (versus text simply formatted as a list). Keeping files in their original form, as in word processing formats, are often the most flexible to meet different people's needs, including converting to large print or Braille. If provided electronically in advance, participants may not need hard copies. An [example of presentation material provided in both presentation format and web format (HTML and CSS)](http://www.w3.org/WAI/presentations/WCAG20_benefits/) is linked from the top of the page after "The Benefits of WCAG 2 presentation is available in 3 formats:".

{% include_cached excol.html type="end" %}

{% include_cached excol.html type="start" id="fyi" %}
## For More Information
{% include_cached excol.html type="middle" %}
This resource primarily addresses in-person presentations and overlapping issues with remote meetings. There are additional considerations for remote and hybrid sessions. See also:

-  **[Accessibility of Remote Meetings](https://www.w3.org/TR/remote-meetings/)** for details on [meeting platform accessibility](https://w3c.github.io/remote-meetings/#meeting-platform-selection-and-development), [hybrid meetings](https://w3c.github.io/remote-meetings/#holding-accessible-hybrid-meetings), and more.
-  **[[Making Audio and Video Media Accessible]](/media/av/)** for detailed guidance on making multimedia accessible

**Details on how to make material that you give to participants accessible is beyond the scope of this document.**

There are resources online that provide related guidance, such as:

-  [ADOD Project {% include_cached external.html %}](http://adod.idrc.ocad.ca/) links to Authoring Techniques for Accessible Office Documents, including for word processing and presentation applications
-  [Planning an Accessible Conference {% include_cached external.html %}](http://www.sigaccess.org/community/accessible_conference/), [Accessible Virtual Conferences {% include_cached external.html %}](https://www.sigaccess.org/accessible-virtual-conferences/)
-  [Interacting with People with Disabilities {% include_cached external.html %}](http://www.uiaccess.com/accessucd/interact.html)

Information on web accessibility:

-  [[Introduction to Web Accessibility]](/fundamentals/accessibility-intro/) - briefly introduces web accessibility and links to more resources.
-  [[Web Content Accessibility Guidelines (WCAG) Overview]](/standards-guidelines/wcag/) - introduces guidelines for making web content accessible. This includes presentation material, online learning, and other material provided in web formats.
-  [Web Accessibility Initiative (WAI) home page](https://www.w3.org/WAI/) - links to guidelines/standards and a wide range of [support material](http://www.w3.org/WAI/yourWAI).


{% include_cached excol.html type="end" %}
{% include_cached excol.html type="start" id="terms" %}
## Terminology <span class="forwhich">(appendix)</span>
{% include_cached excol.html type="middle" %}

<span id="at">assistive technologies</span>
:  Assistive technologies are software or equipment that people with disabilities use to improve interaction with the web, such as
  **screen readers** that read aloud web pages for people who cannot read text, **screen magnifiers** for people with some types of low vision, and **voice recognition software** and **selection switches** for people who cannot use a keyboard or mouse.

<span id="ald">ALDs, hearing loops, induction loops</span>
:  Assistive listening devices (ALDs), hearing loops, and induction loops amplify sound from the speaker's microphone for people who are hard of hearing.

<span id="captions">captions, captioner</span>
:  _Captions (called “intralingual subtitles” in some areas)_ are a text version of speech and important non-speech audio. Live captioning in different areas is called different things, such as CART (Computer Aided Real–Time Captioning or Communication Access Realtime Translation), or real-time intralingual subtitling.<br>A _captioner_ (or “live subtitler”) is a professional who provides what is being said verbatim so that people can read the text output.<br>More information is in [Captions/Subtitles, in Making Audio and Video Media Accessible](/media/av/captions/).

<span id="terps">interpreters</span>
:  In this resource, “interpreters” includes sign language interpreters, cued speech transliterators, and others. Note that sign languages are different from spoken languages and there is not a one-to-one translation.

{% include_cached excol.html type="end" %}

{% include_cached excol.html type="all" %}
