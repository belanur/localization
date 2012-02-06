<?php
// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart 
// this is an autogenerated file - do not edit
spl_autoload_register(
    function($class) {
        static $classes = null;
        if ($classes === null) {
            $classes = array(
                'belanur\\localization\\abstractcountry' => '/countries/AbstractCountry.php',
                'belanur\\localization\\abstractlocalization' => '/localization/AbstractLocalization.php',
                'belanur\\localization\\countryfactory' => '/countries/CountryFactory.php',
                'belanur\\localization\\countryinterface' => '/interfaces/CountryInterface.php',
                'belanur\\localization\\english' => '/localization/English.php',
                'belanur\\localization\\factoryinterface' => '/interfaces/FactoryInterface.php',
                'belanur\\localization\\german' => '/localization/German.php',
                'belanur\\localization\\germany' => '/countries/Germany.php',
                'belanur\\localization\\localizationfactory' => '/localization/LocalizationFactory.php',
                'belanur\\localization\\localizationinterface' => '/interfaces/LocalizationInterface.php',
                'belanur\\localization\\translator' => '/Translator.php',
                'belanur\\localization\\unitedstates' => '/countries/UnitedStates.php'
            );
        }
        $cn = strtolower($class);
        if (isset($classes[$cn])) {
            require __DIR__ . $classes[$cn];
        }
    }
);
// @codeCoverageIgnoreEnd