#!/usr/bin/env bash
set -e # halt script on error

git submodule update --recursive --remote
bundle exec jekyll build --config "_config.yml"