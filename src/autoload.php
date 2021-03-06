<?php
// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart 
// this is an autogenerated file - do not edit
spl_autoload_register(
    function($class) {
        static $classes = null;
        if ($classes === null) {
            $classes = array(
                'belanur\\localization\\abstractlanguage' => '/languages/AbstractLanguage.php',
                'belanur\\localization\\english' => '/languages/English.php',
                'belanur\\localization\\factoryinterface' => '/interfaces/FactoryInterface.php',
                'belanur\\localization\\german' => '/languages/German.php',
                'belanur\\localization\\languagefactory' => '/languages/LanguageFactory.php',
                'belanur\\localization\\languageinterface' => '/interfaces/LanguageInterface.php',
                'belanur\\localization\\messageformatter' => '/MessageFormatter.php'
            );
        }
        $cn = strtolower($class);
        if (isset($classes[$cn])) {
            require __DIR__ . $classes[$cn];
        }
    }
);
// @codeCoverageIgnoreEnd