#Using Laravel&lsquo;s localisation component outside of laravel

Using the Illuminate/translator module independently from laravel is surprisingly straightforward.

##Add it to your composer dependencies
To use the translation component, you will need to add it to your componser.json file:

    "require": {
        "illuminate/translation": "4.*"
    }
         
Once this is done, you will need to update your dependencies:

    composer update
    
##Create an instance of Translator
Once composer has updated, you will need to create an instance of Illuminate\Translation\Translator, and it's dependencies. 

You will also need to tell it the default localisation, and the path to the localisation files.

    use Illuminate\Translation\Translator;
    use Illuminate\Translation\FileLoader;
    use Illuminate\Filesystem\Filesystem;
    
    $locale = 'en';
    $path = __DIR__.'/locale';

    //load localisation manager
    $translationLoader = new FileLoader(new Filesystem,$path);
    $localiser = new Translator($translationLoader,$locale);
    
##Create your localisation files

with the given setup, the translator will expect to find your localisation files under __locale/{language_code}/{localisation_file}__

i.e.

    
    |-locale
        |
        |-en
        |  |-localisation.php
        |
        |-fr
        |  |-localisation.php
        |
        |-es
        |  |-localisation.php
        |
        
These should return a keyed array.

    <?php
    return [
        'heading' => 'Heading Text'
    ];

##Using the localiser

You should then be able to use the localiser by calling get on the instance, passing ing the localisation file to use, and the key to look up:

    <h1>
        <?= $localiser->get('page.heading');?>
    </h1>
    <p>
        <em>
            <?= $localiser->get('page.abstract');?>
        </em>
    </p>
    
##Example Project

There is an example project showing this in use at (github.com/mattcannon/illuminateTranslation)[https://github.com/mattcannon/illuminateTranslation]
