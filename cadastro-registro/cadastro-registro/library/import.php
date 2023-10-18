<?php
class Import{
    
    public static function importController($controller){
       return include_once __DIR__ . '/../controllers/'.$controller.'.php';
    }
    
    public static function importLibrary($function){
        return include_once __DIR__ . '/../library/'.$function.'.php';
    }
    
    public static function importComponent($component){
        return include_once __DIR__ . '/../views/pieces/'.$component.'.php';
    }
    
    public static function importModel($model){
        return include_once __DIR__ . '/../database/models/'.$model.'.php';
    }
    
    public static function importMigration($migration){
        return include_once __DIR__ . '/../database/migrations/'.$migration.'.php';
    }

    public static function importSeeder($seed){
        return include_once __DIR__ . '/../database/seeders/'.$seed.'.php';
    }

    public function importUniversal($import){
        return include_once __DIR__ . '/..'.$import.'';
    }

}
