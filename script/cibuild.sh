#!/usr/bin/env bash
set -e # halt script on error

bundle exec jekyll build --config "_config.yml,_config_prod.yml"