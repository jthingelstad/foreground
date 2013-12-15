# MediaWiki Foreground Skin

[MediaWiki](http://www.mediawiki.org) skin that focuses on putting your content in the *foreground*. Supports responsive layouts and has classes predefined for [Semantic MediaWiki](http://semantic-mediawiki.org/wiki/Semantic_MediaWiki). Built on the [Zurb Foundation](http://foundation.zurb.com) CSS framework.

## Download

First, copy the Foreground source files into your MediaWiki skins directory (see [skinning](https://www.mediawiki.org/wiki/Manual:Skinning) for general information on MediaWiki skins). You can either download the files and extract them from:

    https://github.com/thingles/foreground/archive/master.zip

You should extract that into a folder named `foreground` in your `skins` directory.

Alternatively, you can use git to clone the repository, which makes it very easy to update the code, using:

    git clone https://github.com/thingles/foreground.git

After that, you can issue `git pull` to update the code at anytime.

## Setup

Once the skin is in place add the following line to your `LocalSettings.php` file.

    require_once "$IP/skins/foreground/foreground.php";

This will activate Foreground in your installation. At this point you can select it as a user skin in your user preferences.

To activate Foreground for all users and anonymous visitors, you need to set the `$wgDefaultSkin` variable and set it to `foreground`.

    $wgDefaultSkin = "foreground";

## Configuration

Use following features in `LocalSettings.php` to change the behavior. 

- `showActionsForAnon => true` displays page actions for non-logged-in visitors.
- `makeNavFixed => true` menu will be fixed on top. 

These are the default values:

    $wgForegroundFeatures = array(
      'showActionsForAnon' => true,
      'makeNavFixed' => false,
    );

### Notes on other skins

As you build a wiki out with Foreground you will likely use the responsive grid from Foundation. This is key to making a responsive wiki, and is one of the largest _migration_ requirements when you want to move a wiki that ppreviously used Vector (and likely a lot of tables for layout) to Foreground. Once you do this, the ability of a user to select whatever skin will be removed. If you take full advantage of Foreground in your templates the lack of the Foundation grid will make viewing the wiki using [Vector](http://wikiapiary.com/wiki/Skin:Vector) or [MonoBook](http://wikiapiary.com/wiki/Skin:MonoBook) very difficult.

Because of this, it is suggested that you set the `$wgSkipSkins` variable to make sure that everyone sees the site as you intended it. This removes other skins from being user selectable options.

    # Foreground is specific, so lets disable other skins
    $wgSkipSkins = array( 'chick', 'cologneblue', 'modern', 'myskin', 'nostalgia', 'simple', 'standard', 'filament', 'monobook', 'vector' );

You may also want to allow users to set a User CSS if they want to tweak things inside of Foreground. This is entirely optional.

    # Allow User CSS, mostly for skin testing
    $wgAllowUserCss = true;

## Wikis Using Foreground

You can see a list of wikis with [Foreground installed at WikiApiary](http://wikiapiary.com/wiki/Skin:Foreground).
