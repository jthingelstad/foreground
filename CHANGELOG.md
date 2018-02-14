## Version 2.1

* [bug] Regression - Text footer alignment and social icons (follow) #319
* [bug fix] AddThis div container #295
* [enhancement] Hide AddThis on non content pages by disabling <script> from running
* [bug fix] Fixes for VisualEditor changes in editor layout #313
* [compatibilit] Remove IE 8 Support entirely
* [code] CSS fixes for Issues #88, #172 and #196 (Print.css, firstHeading and Wikitable override by Foundation)
* [code] Moved icon appending for Visual Editor to `(window).load` function
* [code] Improved styling of TOC
* [code] [b/c break] Switch to MW 1.25+ extension registration mechanism
* [code] [b/c break] Removed I18n shim for < MW 1.23
* [code] Move Echo above Page Actions button
* [feature] Add page indicator support
* [feature] Add 'enableTabs' for tabs on page support
* [language] Enable "Back" in mobile nav menu to be localised
* [bug fix] RTL detection improved
* [code] More CSS fixes for Orbit, Tabs, etc

## Version 2.0

* [feature] [b/c break] Upgrade to Foundation 5.5.3 (Foundation Tabs have a coding change to build tabs on pages)
* [code] [b/c break] Use the help page set with MediaWiki:Helppage
* [feature] [code] Remove "Login" word for annon users, dropdown for log in and create account links
* [icons] Update to Font Awesome 4.5
* [icons] Missing icons for Visual Editor, CiteThisPage, et al were added
* [feature] Support of more menu items in top-bar, flows automatically
* [code] Hard set of logo icon in top-bar now controlled by CSS in foreground.css file (can be overridden)
* [code] Actions button on_hover is using native Foundation 5 on_hover (regression in Foundation 5 caused move on_hover to left instead of bottom) 
* [code] Echo div container divided with div for alerts and div for messages (MW Flow extension compatible)
* [bug fix] Visual Editor z-index issue, toolbar and widget sizing
* [code] z-index values for z-indexed elements re-indexed appropriately

## Version 1.2

* [compatibility] Update skin for skin registration on MW 1.25 and higher
* [compatibility] Backwards compatibility with MediaWiki Versions prior to 1.25
* [bug fix] Fixed Echo extension compatibility with recent release
* [documentation] Update Readme.md
* [language] Update Fr-fr translation string
* [development] Addition of Travis and Scrutinizer
* [code] Resource module position explicitly set
* [code] Fixes for execution paths
* [feature] Support for Visual Editor
* [icons] Font Awesome update to 4.2, better icons for ULS and page history
* [code] CSS fix for invasive ULS CSS, removed style for SiteNotice now user controlled
* [language] Update to language files, now uses .json files to load translations
* [bug fix] H3 larger than H2 on small screens
* [bug fix] Missing indicator.gif spinner image

## Version 1.1

* [feature] Addition of Social Media Follow Icons using AddThis horizontal follow bar
* [feature] Turn on or off the display of standard MW footer icons
* [feature] Navbar image/icon, ability to change title shown in navbar independent of $wgSitename, and turn on/off image/icon in navbar.
* [feature] Ability to change the displayed title name independent of $wgSitename 
* [bug fix] Parent <div> for mw-content-text <div>
* [bug fix] Missing icon for Atom(RSS) Feedlink
* [bug fix] Fix Font Awesome icon alignment
* [feature] i18n json update/create shim, i18n.php file for localization deprecated in MW 1.23 and being removed in MW 1.24, and shim is backwards compatable to MW 1.17
* Added CONTRIBUTING.md file
* Update to README.md
* Added COPYING file
