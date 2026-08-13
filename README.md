# Web Accessibility Initiative (WAI) Website

The [W3C Web Accessibility Initiative (WAI)](https://www.w3.org/WAI/) develops standards and support materials to help you understand and implement accessibility.

This repository is used to develop content for the W3C WAI website.

## Preview

[![Netlify Status](https://api.netlify.com/api/v1/badges/faaa4954-0194-47fa-9b74-540ab79f4a8d/deploy-status)](https://app.netlify.com/sites/wai-website/deploys)

A Netlify preview is available at https://wai-website.netlify.app/

## Build locally

Before you begin, make sure you have the following installed:

- [Ruby](https://www.ruby-lang.org/en/documentation/installation/) version 3.4.8 or higher\
  Check your Ruby version using `ruby -v`
- [Bundler](https://bundler.io/)

1. Install Ruby dependencies

    ```bash
    bundle install
    ```

2. Initialize or update submodules
 
    ```bash
    git submodule update --init --recursive
   ```

3. Use the latest version of the `wai-website-theme` and `wai-website-plugin` dependencies (optional)

   By default, the project will use the versions of the theme and plugin set in the `Gemfile.lock` file. To use the latest versions, run:

    ```bash
    bundle update wai-website-theme --conservative
    bundle update wai-website-plugin --conservative
    ```

   **Note:** Make sure to include the `--conservative` flag to avoid updating the gems the theme and plugin depend on.

4. Serve and preview

    ```bash
    bundle exec jekyll serve
    ```

## FAQ

### The default branch name has changed. How to update my fork?

Since 5 September 2024, the default branch is named `main`, for consistency with other W3C repositories and [GitHub default branch name](https://docs.github.com/en/pull-requests/collaborating-with-pull-requests/proposing-changes-to-your-work-with-pull-requests/about-branches#about-the-default-branch).

If you have an existing fork, you can [rename your fork's default branch](https://docs.github.com/en/repositories/configuring-branches-and-merges-in-your-repository/managing-branches-in-your-repository/renaming-a-branch#renaming-a-branch).

If you have a local clone, you can either delete and re-clone the repository, or update it by [running the commands from GitHub documentation](https://docs.github.com/en/repositories/configuring-branches-and-merges-in-your-repository/managing-branches-in-your-repository/renaming-a-branch#updating-a-local-clone-after-a-branch-name-changes).
