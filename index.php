<?php
// pull in composer autoloader
include('./vendor/autoload.php');

use Illuminate\Translation\Translator;
use Illuminate\Translation\FileLoader;
use Illuminate\Filesystem\Filesystem;

// get locale requested
$locale = isset($_REQUEST['locale']) ? $_REQUEST['locale'] : 'en';

// set up path to localisation files
$path = __DIR__.'/locale';

//load localisation manager
$translationLoader = new FileLoader(new Filesystem,$path);
$localiser = new Translator($translationLoader,$locale);

//pull in template
include('./views/view.php');

