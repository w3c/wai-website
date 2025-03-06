---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".
title: "Plan"
nav_title: "Plan"
lang: en  # Change "en" to the translated-language shortcode
last_updated: 2025-03-06  # Keep the date of the English version
first_published: "October 2002"
title_icon: /content-images/planning-managing/icons.svg#plan
order: 2

# translators: # remove from the beginning of this line and the lines below: "# " (the hash sign and the space)
# - name: "Translator Name Here" # Add one -name: line for every translator
# - name: "Jan Doe"   # Replace Jan Doe with translator name
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple translators
# contributors:
# - name: "Jan Doe"   # Replace Jan Doe with contributor name, or delete this line if none
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple contributors

github:
  label: wai-planning-managing

permalink: /planning-and-managing/plan/  # Add the language shortcode to the end, with no slash at end, for example: /link/to/page/fr
ref: /planning-and-managing/plan/  # Do not change this

resource:
  ref: /planning-and-managing/

changelog: /planning-and-managing/changelog/ # Do not change this
acknowledgements: /planning-and-managing/acknowledgements/ # Do not change this

# In the footer below:
# Do not change ACKNOWLEDGEMENTS and the dates
# Translate the other words below, including "Date:" and "Editors:"
# Translate the Working Group and projects names. Leave the Working Group and projects acronyms in English.
footer: >
  <p><strong>Editors:</strong> <a href="https://www.w3.org/People/kevin">Kevin White</a>, <a href="https://www.w3.org/People/shadi">Shadi Abou-Zahra</a>, and <a href="https://www.w3.org/People/Shawn">Shawn Lawton Henry</a>. ACKNOWLEDGEMENTS includes information on previous versions and editors.</p>
  <p>Developed by the Education and Outreach Working Group (<a href="https://www.w3.org/WAI/EO/">EOWG</a>). Updated with support from the <a href="https://www.w3.org/WAI/DEV/">WAI-DEV Project</a> and the <a href="https://www.w3.org/WAI/ACT/">WAI-ACT Project</a>, co-funded by the European Commission <abbr title="Information Society Technologies">IST</abbr> Programme.</p>
---

Careful planning is critical to effective implementation of any accessibility effort. It ensures a clear assessment of the required work, distribution of tasks, and continual follow-up on progress.

{% include excol.html type="all" %}
{% include excol.html type="start" id="" %}

Create accessibility policy {#create-accessibility-policy}
---------------------------

Document the accessibility goals, scope, and responsibilities important to your organization.

{% include excol.html type="middle" %}

A web accessibility policy captures your goals and targets. Policies vary across organizations but at a minimum establishes what web accessibility standard you aim to conform to and by when. For example, your policy might only state that your website will meet all criteria specified in WCAG 2.1 Level AA within one year. A policy may cover other topics such as roles and responsibilities, content preparation processes, quality assurance, infrastructure, and reporting.

Ensure the policy has approval and backing from management. This will help all implementation activities, ensuring that resources are available and activities are prioritized.

### For more information

-   [Developing Organizational Policies on Web Accessibility](/planning/org-policies/) – Provides information on what needs to be considered when creating your policy.

{% include excol.html type="end" %}
{% include excol.html type="start" id="" %}

Assign responsibilities {#assign-responsibilities}
-----------------------

Understand what roles are needed to ensure all tasks are covered.

{% include excol.html type="middle" %}

Responsibility for delivering accessibility needs to be assigned to specific individuals and incorporated into their job description. Formalizing the responsibility helps ensure that the individual has time for the work and can receive training. Clear identification also helps communicate who is responsible for accessibility and that it is being prioritized.

It is important to recognize that implementing accessibility is not only a concern for developers, but for the whole team. Spreading responsibilities throughout your project and organization increases awareness and reduces the risk of the activities overwhelming an individual or team. Some example responsibilities include:

-   **Marketing** – Embed accessibility within brand or design guidelines.
-   **Quality assurance** – Test for and track accessibility issues within the code.
-   **Development** – Maintain code libraries with accessible components.
-   **Purchasing** – Ensure that organizational accessibility policy is incorporated within procurement processes.
-   **Acceptance testing** – Ensure that any agency-delivered website or component meets your desired level of accessibility.
-   **Recruitment** – Incorporate accessibility skills within recruitment profiles.

### For more information

- [Accessibility Roles and Responsibilities Mapping (ARRM)](/planning/arrm/) — provides an approach you can use to define roles, tasks, and responsibilities in your team for meeting Web Content Accessibility Guidelines (WCAG).

{% include excol.html type="end" %}
{% include excol.html type="start" id="" %}

Determine budget and resources {#determine-budget-and-resources}
------------------------------

Ensure resources, including budgets, are clarified and secured for accessibility activities. This includes necessary reviews, training, audits, and testing with users.

{% include excol.html type="middle" %}

Your budget and resource needs depend on your accessibility goals and the extent of the work required to achieve them. For all activities consider what resources will be required and ensure that they are available. Some things that need to be considered include:

-   **Accessibility evaluations** – Consider how frequently they need to occur and how extensive they need to be.
-   **Evaluation with people** – Consider what opportunities exist to involve users with disabilities in evaluations.
-   **Reviews of policies and procedures** – Time required to determine which policies need to be change, time required to make the changes, and time required to implement the changes.
-   **Recruitment** – Organizations and teams may benefit from recruiting accessibility specialists or coordinators.
-   **Staff training** – General awareness raising as well as specific training targeted on the needs of particular activities, such as website development or content writing.
-   **Tooling** – Adaptation or possible replacement of content authoring tools, such as the content management system (CMS), or acquiring accessibility evaluation tools.
-   **Experienced support** – Additional external support may be necessary while staff skills and knowledge improves.

Once the budget is determined, ensure that you have sufficient approval. Your business case helps to secure budget, and you should ensure that the final budget is supported by estimates of how changes impact on previously set objectives and targets, and what return on investment could be expected. This might include better website performance, reduction in maintenance costs, higher sales, improved visitor statistics, or improved corporate social responsibility.

### Related activities

-   Initiate: [Develop business case](/planning-and-managing/initiate/#develop-business-case)

### For more information

-   [Financial Factors in Developing a Web Accessibility Business Case : Cost Considerations](/WAI/business-case/archive/fin#invest) – Provides information on personnel costs, capital expenditure, and on-going costs to consider.
-   [Involving Users in Web Projects for Better, Easier Accessibility](/planning/involving-users/) – Provides information on the benefits of involving users and how to do it.

{% include excol.html type="end" %}
{% include excol.html type="start" id="" %}

Review environment {#review-environment}
------------------

Consider resources, processes, and tools in your organization that may impact accessibility efforts.

{% include excol.html type="middle" %}

The environment in which your websites are created and maintained has an equally significant impact on their accessibility. Also review these surrounding aspects, including:

-   How well authoring tools support you in creating and maintaining accessible content; for example, does the content management system (CMS) support your accessibility commitments?
-   What is the level of accessibility knowledge and expertise of the staff creating and maintaining your websites? How well is training support provided to improve the situation?
-   Do staff have access to appropriate tools to assist in testing accessibility?
-   Can accessibility be improved in design and development guidelines and specifications, shared templates and coding libraries, common authoring practices, and other centralized resources?
-   Does any quality assurance plan include specific accessibility checks?
-   How well do the existing policies and processes support your undertaking; for example, are there procurement policies to ensure purchasing of accessible tools and content?

Having clear understanding of the issues will help you better address them. For example, you may identify that by improving the content management system (CMS) or with training, you can achieve your accessibility objectives much more effectively.

### For more information

-   [Selecting Web Accessibility Evaluation Tools](/test-evaluate/tools/selecting/) – Provides guidance on choosing which evaluation tools to use to help.
-   [Web Accessibility Evaluation Tools List](/WAI/ER/tools/) – List of vendor provided tools that help support accessibility evaluations.
-   [ATAG Overview](/standards-guidelines/atag/) – Provides information on Authoring Tools Accessibility Guidelines (ATAG), how it is structured, and how best to use it.

{% include excol.html type="end" %}
{% include excol.html type="start" id="" %}

Review websites {#review-websites}
---------------

Identify issues to be fixed or avoided in existing websites.

{% include excol.html type="middle" %}

Perform a detailed accessibility review of websites in the scope of your objectives. This can create a baseline for future work, identify where training or additional expertise is needed, and help clarify how big a problem exists. The review may highlight instances of good practice, which identifies staff or suppliers who have critical skills to build on.

Review results are helpful to identify problems to be avoided in future work, even if the objectives involve completely replacing an existing website. Results are also helpful in stakeholder reporting activities. Highlight existing problems and their impact so that later on, the impact of positive change can be put into context. 

Accessibility checks can be performed at all stages of the process, not only when the website is completed. For example, color choices can be checked on mocked-up website designs. By starting early and checking throughout the project you reduce the risk of being constrained by early design decisions that become expensive to change later on. Expert assistance may be required if your available resources do not have the skills and experience needed to undertake a thorough review.

### For more information

-   [Identify the Issues](/planning/interim-repairs/#explore) in Web Accessibility First Aid: Approaches for Interim Repairs – Links to resources to help evaluate your website.
-   [WCAG-EM Overview](/test-evaluate/conformance/) – Introduces a methodology for determining how well a website conforms to WCAG.
-   [Involving Users in Web Projects for Better, Easier Accessibility](/planning/involving-users/) – Describes the benefits of involving users in projects and how to go about it.

{% include excol.html type="end" %}
{% include excol.html type="start" id="" %}

Establish monitoring framework {#establish-monitoring-framework}
------------------------------

Create a standard way of monitoring and reporting findings, in order to track and progress.

{% include excol.html type="middle" %}

Defined milestones help you measure your progress. Ensure that each milestone has specific and measurable criteria to indicate what progress has occurred.

Some example criteria include:

-   Number of WCAG Success Criteria passed, and their level.
-   Number of complaints received related to accessibility.
-   Calls handled from people who were unable to process their application online.
-   Positive social media comments on accessibility of service.
-   Training sessions on accessibility delivered to the staff.

Ensure that accessibility progress is part of standard reporting for all parts of your organization that have been assigned any accessibility responsibility.

It is valuable to develop a standard report structure to capture the measure of accessibility for websites or tools. This allows for comparisons between different websites and also between different versions of the same website.

For long-term or ongoing goals you need to plan regular monitoring to ensure that achieved goals do not slip. For example, updates to content and website maintenance work may introduce new accessibility barriers or new staff may not have the necessary skills. Plan for regular reviews to monitor progress over time. Ensure that responsibility is assigned for the checks and there are clear escalation paths for identified issues.

### Related activities

-   Initiate: [Set objectives](/planning-and-managing/initiate/#set-objectives)
-   Implement: [Evaluate early and regularly](/planning-and-managing/implement/#evaluate-early-and-regularly)

{% include excol.html type="end" %}
{% include excol.html type="start" id="" %}

Engage with stakeholders {#engage-with-stakeholders}
------------------------

Maintain long-term support through regular communication with management and other stakeholders.

{% include excol.html type="middle" %}

Engage with your stakeholders to bring them on board and to identify how they can help you meet your accessibility goals. This includes internal stakeholders such as project teams, marketing, and management, as well as external stakeholders such as suppliers, advocacy groups, and customers. For example:

-   Introduce accessibility aspects in marketing campaigns.
-   Report progress to management.
-   Negotiate with suppliers to better support you with accessibility.
-   Find out the latest accessibility trends for advocates and champions.
-   Provide feedback channels to engage with your customers and end-users.

Communicate your efforts publicly to help set expectations and increase internal commitment for accessibility. A public accessibility statement that identifies parts of your websites that work well and less well, explains accessibility improvements to come, and provides contact options for customers to report problems can help you overcome the transition period and gather feedback to prioritize repairs.

{% include excol.html type="end" %}

{% include excol.html type="all" %}
