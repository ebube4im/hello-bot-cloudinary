<?php


namespace App;

Class Config {

   
  static $facebookCredentials = [

    'verifyToken' => 'example',

    'accessToken' => 'EAAEj212byTgBAEjsBE85WSZCZCnQ8TyJnB1118dc9GMPuWmJIfVSZAzJBmFHtJ19WOK54mS1J93urI4CQKguSqZBxVDtUxXbs8ZBU0IbPGRZBptt5ZB9TjMYk7oFDwWALZCHKHSZCH4ItIFqcCSFnU1SoWSsNZBCD92Qnu3zzXUgKwxk2dKnvvkatq'

  ];

   
  static function getVerifyToken() {

    return  Config::$facebookCredentials['verifyToken'];

  }

  static function getAccessToken() {

    return  Config::$facebookCredentials['accessToken'];

  }

  

}
