#!/bin/bash
set -e

# Install dependencies.
pip install -r requirements.txt

# Run documentation generator.
dexy setup
dexy

# Change to the gh-pages branch.
git config --global user.email "mail@adrian-philipp.com"
git config --global user.name "Travis build bot"
git remote set-url origin "https://${GH_TOKEN}@github.com/swisspost-yellowcube/yellowcube-php.git"
git fetch origin +gh-pages:gh-pages
git checkout gh-pages

# Update generated docs.
cp -r output-site/* ../
rm -r output-site/*

git status

# Push docs to the github page.
git add ../*
git commit -m "Updates docs."
git push origin gh-pages
git checkout master
