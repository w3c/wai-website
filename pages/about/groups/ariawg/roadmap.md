---
title: ARIA Working Group Road Map
permalink: /about/groups/ariawg/roadmap/
ref: /about/groups/ariawg/roadmap/
lang: en
---

## Introduction

This road map describes the current and planned work to be accomplished by the ARIA Working Group. The targets found herein are based on the version of the relevant specification. In order to determine the intended delivery date, please see the [ARIA Project Plan](/about/groups/ariawg/planning/).

## Achieve Parity with Native Host Language Semantics

There is currently not complete parity between ARIA modules and native host languages used on the web. Where this parity is lacking, authors find it quite challenging to _efficiently_ create the accessible experience afforded by the native host language sementics. Because some authors prefer to create their own custom interfaces rather than use the corresponding host language, the ARIA Working Group believes it is important to address this need. Work in this area will also be needed to implement accessibility support for custom elements. Parity between the native host language and ARIA also makes it possible for the associated native host language's Accessibility API Mappings specification to map its attributes to those from ARIA. This in turn leads to a more consistent experience for end users, for whom the underlying native host language is largely (if not entirely) irrelevant.

- Add new roles to achieve parity with HTML elements (Target: ARIA 1.2)
- Add new states and properties to achieve parity with HTML attributes (Target: ARIA 1.3)
- Evaluate the need for parity with additional host languages and implement as appropriate (Target: Ongoing)

## Provide Support for the Accessibility Object Model

The [Accessibility Object Model](https://wicg.github.io/aom/) (AOM) is a JavaScript API to allow developers to interact with the accessibility tree associated with web content. As stated in the [Explainer](https://wicg.github.io/aom/explainer.html): "This API is will be primarily of interest to the relatively small number of developers who create and maintain the JavaScript frameworks and widget libraries that power the vast majority of web apps... This API is also aimed at developers of large flagship web apps that push the boundaries of the web platform. These apps tend to have large development teams who look for unique opportunities to improve performance using low-level APIs like Canvas."

The ARIA Working Group agreed at TPAC 2017 to support this effort by adding features to ARIA needed by AOM. This support will include:

- Add ARIA property string reflection on Element (Target: ARIA 1.2)
- Other items to be determined as work on AOM progresses (Target: Ongoing)

## Develop and Maintain Additional ARIA Features for Authors and End Users

In addition to the work described above, the ARIA Working Group will continue developing, maintaining, and documenting ARIA features authors can use to make their content more accessible to end users. Much of this work will be done on an ad-hoc basis based on feedback from authors and implementors. As such, work in this area will not be itemized here unless it entails a significant amount of effort. Generally speaking, however, the Working Group will:

- Add and/or modify ARIA features based on feedback from authors (Target: Ongoing)
- Map new and modified features to platform accessibility APIs (Target: Ongoing)
- Update platform accessibility API mappings specifications maintained by this Working Group when the platform APIs change (Target: Ongoing)
- Write authoring guidance for new and modified features (Target: Ongoing)
- Collaborate with user agent implementors and assistive technology developers to maximize interoperability (Target: Ongoing)

Specific items that the Working Group plans to accomplish, which will entail a non-trivial amount of effort include:

- Develop an alternative solution to replace the now-deprecated ARIA drag-and-drop features (Target: 1.4)
- Add support for annotations (Target: 1.4)
- Add control patterns that enable programmatic declaration of interaction methods supported by a widget. (Target: 2.0)
- Create means to set ARIA attribute values through platform accessibility APIs (Target: 2.0)

## Ensure Consistency in Platform Accessibility API Mappings

The Working Group believes a consistent (host-language-independent) user experience is desirable. The simplest way to achieve that is to ensure elements are exposed to assistive technologies in a consistent fashion regardless of the native host language chosen by the author. Exposure to assistive technologies is defined in the platform Accessibility API Mappings specifications, not all of which are developed and maintained by the ARIA Working Group. In order to maximize the likelihood of a consistent user experience, the Working Group will:

- Review Accessibility API Mapping specifications produced by other Working Groups (Target: Ongoing)
- Create and maintain solutions for automated accessibility API-based testing of the exposure of roles, states, and properties of elements in native host languages (Target: Ongoing)
- Identify host languages for which there are no associated Accessibility API Mappings specification and collaborate with the Working Group that maintains that language to determine what solution, if any, is appropriate (Target: Ongoing)