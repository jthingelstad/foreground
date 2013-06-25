# WikiWonders Foreground Skin

A MediaWiki skin that focuses on putting your content in the foreground.

It uses the Zurb Foundation (http://foundation.zurb.com) CSS framework.

## Installation

Clone this repository to your `skins` directory and create a symlink to the main skin file.

    ln -s foreground/foreground.php foreground.php

Then add the following line to your `LocalSettings.php` file.

    require_once($IP.'/skins/foreground/foreground.php');

Now find the `$wgDefaultSkin` variable and set it to `foreground`.

## License

Copyright 2013 WikiWonders

Released under the GPL
