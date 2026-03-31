/**
 * WCAG Success Criteria filtering script
 * Provides functionality to filter criteria based on conformance level and rule status
 * Default: Level AAA criteria and deprecated rules are hidden, proposed rules are shown
 */
(() => {
  const ALL_REQUIREMENTS_HIDDEN_CLASS = 'all-requirements-hidden';
  const FILTER_CONTROLS_ID = 'filter-controls';
  const FILTERED_CLASS = 'filtered-out';
  const FILTERED_LEVEL_CLASS = 'filtered-level';
  const NO_RULES_CLASS = 'no-rules';
  const RULE_CLASS = 'act-rule';
  const RULE_LIST_CLASS = 'act-rule-list';
  const RULES_CONTAINER_CLASS = 'rules-container';
  const RULES_ITEM_CLASS = 'rules-item';
  
  const filterControls = document.getElementById(FILTER_CONTROLS_ID);
  const checkboxes = [...filterControls.querySelectorAll(`input[type="checkbox"]`)];
  const main = document.querySelector('main');
  const pageContents = [...document.querySelectorAll(`.sidebar a`)];
  const requirements = [...document.getElementsByClassName(RULES_ITEM_CLASS)];
  const rules = [...document.getElementsByClassName(RULE_CLASS)];
  const ruleLists = [...document.getElementsByClassName(RULE_LIST_CLASS)];
  const ruleContainers = [...document.getElementsByClassName(RULES_CONTAINER_CLASS)];
  const showAria = document.getElementById('show-aria');
  const statusBar = {
    wcagRuleCount: document.getElementById('wcag-rule-count'),
    criteriaWithRulesCount: document.getElementById('criteria-with-rules-count'),
    totalSelectedCriteriaCount: document.getElementById('total-selected-criteria-count'),
    ariaRuleCount: document.getElementById('aria-rule-count'),
    ariaStatusPart: document.getElementById('aria-status-part')
  };

  const filterOut = (element) => element.classList.add(FILTERED_CLASS);
  const isFilteredOut = (element) => element.classList.contains(FILTERED_CLASS);
  const resetVisibility = () =>
      [...document.getElementsByClassName(FILTERED_CLASS)].forEach((filteredItem) => filteredItem.classList.remove(FILTERED_CLASS, FILTERED_LEVEL_CLASS));

  const filterRules = () => {
    const selectedFilters = {};
    checkboxes.forEach((checkbox) => {
      const { name, id, checked, value } = checkbox;

      // keep a record of which filters are active, so that if only one filter is active for a given type, we can disable it to prevent hiding all rules
      if (!selectedFilters[name]) {
        selectedFilters[name] = [];
      }
      if (checked) {
        selectedFilters[name].push(value);
      }
      // reset all checkboxes
      checkbox.disabled = false;
    });

    // iterate through each rule one by one to decide if we should filter it out
    rules.forEach((rule) => {
      // we only fliter rules out based on status and implementation type
      const status = rule.dataset.status;
      const implementionTypes = rule.dataset.implement.split(/\s+/);
      if (!selectedFilters.status.includes(status) || !selectedFilters.implement.find((type) => implementionTypes.includes(type))) {
        filterOut(rule);
      }
    });

    // now iterate over requirements (WCAG success criterion and ARIA rules)
    requirements.forEach((requirement) => {
      // filter out each requirement if it's not part of the requirement selection
      if (!selectedFilters.requirements.includes(requirement.dataset.level)) {
        filterOut(requirement);
        // add a special class to let us know we filtered it out becuase of the requirement level
        // this will let us count the WCAG success criterion for the status bar, even if a requirement
        // was filtered out later because it didn't contain any rules
        requirement.classList.add(FILTERED_LEVEL_CLASS);
      }
    });

    // if only one filter is active for a given type, disable it to prevent hiding all rules
    for (const name in selectedFilters) {
      const values = selectedFilters[name];
      if (values.length === 1 && checkboxes.filter((checkbox) => checkbox.name === name).length > 1) {
        checkboxes.find((checkbox) => checkbox.name === name && checkbox.value === values[0]).disabled = true;
      }
    }

    return selectedFilters;
  };

  const detectEmptyRuleLists = () => {
    ruleLists.forEach((ruleList) => {
      const ruleListItems = ruleList.getElementsByClassName(RULE_CLASS);
      if (ruleListItems.length > 0 && ruleListItems.length > ruleList.querySelectorAll(`.${RULE_CLASS}.${FILTERED_CLASS}`).length) {
        ruleList.classList.remove(NO_RULES_CLASS);
      } else {
        ruleList.classList.add(NO_RULES_CLASS);
      }
    });
  };

  const filterRequirementsWithoutRules = () => {
    requirements.forEach((rulesItem) => {
      const ruleList = rulesItem.querySelector(`.${RULE_LIST_CLASS}`);
      if (!ruleList || ruleList.classList.contains(NO_RULES_CLASS)) {
        filterOut(rulesItem);
      }
    });
  };

  const filterContainersWithoutRequirements = () => {
    ruleContainers.forEach((rulesContainer) => {
      if (![...rulesContainer.getElementsByClassName(RULES_ITEM_CLASS)].find(rulesItem => !isFilteredOut(rulesItem))) {
        filterOut(rulesContainer);
      }
    });
  };

  const detectEmptyFindings = () => {
    if (ruleContainers.find((rulesContainer) => !isFilteredOut(rulesContainer))) {
      main.classList.remove(ALL_REQUIREMENTS_HIDDEN_CLASS);
    } else {
      main.classList.add(ALL_REQUIREMENTS_HIDDEN_CLASS);
    }
  };

  const updatePageContents = () => {
    ruleContainers.forEach((ruleContainer) => {
      const heading = ruleContainer.querySelector('h2[id]');
      const pageContentsLink = pageContents.find((link) => link.getAttribute('href') === `#${heading.id}`);
      if (isFilteredOut(ruleContainer)) {
        pageContentsLink.setAttribute('aria-disabled', 'true');
        pageContentsLink.setAttribute('tabindex', '-1');
      } else {
        pageContentsLink.removeAttribute('aria-disabled');
        pageContentsLink.removeAttribute('tabindex');          
      }
    });
  };

  const updateVisibility = () => {
    resetVisibility();
    const selectedFilters = filterRules();

    const showEmptyRules = selectedFilters.display.length > 0;
    detectEmptyRuleLists();

    // filter out empty WCAG success criterion and ARIA rules only if the user selected this option
    if (!showEmptyRules) {
      filterRequirementsWithoutRules();
    }
    filterContainersWithoutRequirements();
    detectEmptyFindings();
    updatePageContents();

    return selectedFilters;
  };

  const updateUrlWithFilters = (data) => {
    const query = '?' + Object.entries(data).map(([key, value]) => `${key}=${value.join()}`).join('&');
    const newUrl = window.location.pathname + query + window.location.hash;
    window.history.replaceState({}, '', newUrl);
  };

  const updateFiltersWithUrl = () => {
    const queryParams = new URLSearchParams(window.location.search);
    queryParams.forEach((values, name) => {
      const checkedValues = values.split(',');
      checkboxes.filter((checkbox) => checkbox.name === name).forEach((checkbox) => {
        checkbox.checked = checkedValues.includes(checkbox.value);
      });
    });
  };

  const updateStatusBar = () => {
    const ruleToRequirement = new Map();
    rules.forEach((rule) => ruleToRequirement.set(rule, rule.closest(`.${RULES_ITEM_CLASS}`)));
    const visibleRequirements = requirements.filter((requirement) => !isFilteredOut(requirement));
    const visibleRules = rules.filter((rule) => !isFilteredOut(rule) && visibleRequirements.includes(ruleToRequirement.get(rule)));

    // check if this is a WCAG success criteria by looking to see if the level is "a", "aa", or "aaa"
    const isWcagRequirement = (requirement) => Boolean(requirement.dataset.level.match(/^a+$/));
    
    // use a set to count so that we can quickly dedupe repeated values
    const wcagRules = new Set();
    const ariaRules = new Set();
    const uniqueWcagRequirements = new Set();

    // place each rule into one of our sets
    visibleRules.forEach((rule) => {
      const requirement = ruleToRequirement.get(rule);
      // look for a link that is the immediate child of this node and get the link
      const { href } = rule.querySelector(':scope > a');

      if (isWcagRequirement(requirement)) {
        wcagRules.add(href);
        uniqueWcagRequirements.add(requirement);
      } else {
        ariaRules.add(href);
      }
    });

    // update the status bar
    statusBar.wcagRuleCount.textContent = wcagRules.size;
    statusBar.criteriaWithRulesCount.textContent = uniqueWcagRequirements.size;
    statusBar.totalSelectedCriteriaCount.textContent = requirements.filter((requirement) => !requirement.classList.contains(FILTERED_LEVEL_CLASS) && isWcagRequirement(requirement)).length;
    statusBar.ariaRuleCount.textContent = ariaRules.size;

    // hide aria details if ARIA rules are hidden
    if (showAria.checked) {
      statusBar.ariaStatusPart.removeAttribute('hidden');
    } else {
      statusBar.ariaStatusPart.setAttribute('hidden', '');
    }
  };

  // start here
  updateFiltersWithUrl();
  updateVisibility();
  updateStatusBar();

  // update the visible rules and status every time a checkbox is checked or unchecked
  filterControls.addEventListener('change', ({ target }) => {
    if (target.nodeName === 'INPUT') {
      const data = updateVisibility();
      updateUrlWithFilters(data);
      updateStatusBar();
    }
  });

  // make sure that disabled links in the page contents sidebar cannot be clicked
  pageContents.forEach((link) => {
    link.addEventListener('click', (event) => {
      if (link.hasAttribute('aria-disabled')) {
        event.preventDefault();
      }
    });
  });
})();
