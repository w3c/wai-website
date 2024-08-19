---
title: ARIA Working Group Work Flow
permalink: /about/groups/ariawg/workflow/
ref: /about/groups/ariawg/workflow/
lang: en
github:
  label: wai-groups
---

## Introduction

Historically, the ARIA Working Group placed its primary focus on defining all of the features intended for authors, leaving platform accessibility API mappings, implementations, testing, and authoring guidance as tasks to be completed after those features had been defined and the associated specification entered Candidate Recommendation. This approach proved problematic:

- Discovering disconnects between what the feature developers want and what implementors want after the specification(s) had entered Candidate Recommendation.
- Discovering critical bugs blocking implementation after the specification(s) had entered Candidate Recommendation.
- Discovering mapping errors after the specification(s) had entered Candidate Recommendation.
- Failing to achieve the milestones defined in the Working Group's charter.
- Failing to ensure the Working Group has "buy in" from all stakeholders, including authors, user agent implementors, and assistive technology developers.

In order to minimize the occurrence of such problems in the future, the ARIA Working Group agreed to adopt a work flow proposed at TPAC 2017 designed to see each proposed feature through to completion, with ARIA features, mappings, implementation, testing, and authoring guidance happening together. That agreed-upon work flow is described in this document.

## Work flow

For each ARIA feature:

1. Create / modify a single ARIA feature in a working branch of the specification repository.
2. Obtain platform mappings for that feature from platform mapping maintainers and add in a working branch of the mappings repository.
3. Create test file(s) for that feature and add to the [web-platform-tests repository](https://github.com/w3c/web-platform-tests).
4. Execute tests and obtain test results for that feature and add to the [test-results repository](https://github.com/w3c/test-results).
5. If tests report failures, double-check that the mapping, test file, and test methodology are correct. If so, file bugs against user agents for that feature and track progress via periodic retesting.
6. Solicit assistive technology implementations for that feature.
7. Write authoring guidance for that feature in a working branch of the authoring practices repository.
8. When a feature meets the [criteria for readiness](#criteria-for-readiness-of-an-aria-feature), merge working branch related to the feature into the stable branch of the respective repositories.

## Criteria for "Readiness" of an ARIA Feature

- Positive confirmation of acceptance by a sufficient number of user agent implementors in the form of a passing test result or a comment in a public issue tracker that they intend to implement as described in the specifications. "Sufficient" will depend on the anticipated exit criteria of the associated specification(s).
- Positive confirmation of acceptance by multiple assistive technology vendors in the form of implementing support, or a comment in a public issue tracker that they intend to implement support.
- Confirmation by the Authoring Practices task force that there are no unanticipated problems with the feature.

## Implications of the Work Flow on Drafts and Branches

Specifications and Notes should, as a general rule, follow this approach to including features and maintaining branches:

- Features still in development with respect solely to the document in which they are contained should be committed to a feature-specific branch in the repository for that document.
- Features which are complete with respect solely to the document in which they are contained should be committed to the "master" branch in the repository for that document. The "master" branch serves as the source for Editor's Draft snapshots.
- Features which are "ready" (as defined above) should be cherry-picked from the "master" branch to the "stable" branch in each of the relevant repositories (e.g. ARIA, Accessibility API Mappings, and Authoring Practices). The "stable" branch serves as the source for publishing Working Draft revisions.
- When a given document becomes feature frozen due to entering Candidate Recommendation or becoming a Note, a branch for the version (e.g. "1.1") should be created so that work can continue on the next dot release of that document.

## Version Completion and Advancement to Candidate Recommendation

- The specification is ready to transition to Candidate Recommendation when all in-scope features have been completed OR a target milestone deadline has been reached.
- The Candidate Recommendation will contain all features that have been incorporated into the stable branch at the time of transition.
- Unless implementation problems are discovered during the Candidate Recommendation that were not caught in the initial development and testing workflow, the group will request transition to Proposed Recommendation after approximately 45 days.