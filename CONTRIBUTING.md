# Contributing to Foreground

## Bug fixes

All bug fixes should PR against the `release/x.x` branch of the version of Foreground with the bug. If you want to fix a bug, please do the following:

1. Open an issue in [Issues](https://github.com/thingles/foreground/issues) and make sure you tag it with the `bug` tag. If the bug already is a known issue, skip this step.
2. Create a branch in your repo with the name of the `bug` or whatever you feel comfortable with(patch-1, bugX, etc.) using the Foreground's `release/x.x` branch as a base.
3. If it will take time to fix, periodically check and pull down updates to Foreground's `release/x.x` branch as you are working on the bug fix. Commits can and will occur to `release/x.x` which may affect your `bug fix` branch.
4. When you are ready to issue a PR against the `release/x.x` branch of Foreground, please use `[bug]` as a tag at the beginning of the PR's title.
5. Please reference the issue# in the PR's description and include any information for testing the bug fix.

## Development of New Feature

All new features for Foreground should PR against the `develop` branch. If you want to add a new feature, you should do the following:

1. Open an issue in [Issues](https://github.com/thingles/foreground/issues) and make sure you tag it with the `feature` tag.
2. Create a branch in your repo with the name of the `feature` or whatever you feel comfortable with using Foreground's `develop` branch as a base.
3. Periodically check and pull down updates to Foreground's `develop` branch as you are working on your proposed feature. Commits can and will occur to `develop` which may affect your `feature` branch.
4. When you are ready to issue a PR against the `develop` branch of Foreground, please use `[feature]` as a tag at the beginning of the PR's title.
5. Please reference the issue# in the PR's description and include any information for testing the feature.

It is very important to **note all b/c(backwards compatibility) changes** in a proposed new feature. A feature which will break b/c will not be merged into a current release version. It will create a new release version if excepted.

## Proposed Feature Branches

If you want to work on an existing feature proposed by Foreground, please see the `feature/name-of-feature` branch for more information. PRs should be issued against the specific `feature/name-of-feature` branch.
