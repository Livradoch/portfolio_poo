<?php

abstract class Env {

    private const ENV_FILE = "./core/resources/env.json";

    private static function getEnv(){
        return json_decode(file_get_contents(self::ENV_FILE));
    }

    public static function getHost(){
        return self::getEnv()->host;
    }
    public static function getDb(){
        return self::getEnv()->dbname . ";" . self::getEnv()->charset;
    }
    public static function getUser(){
        return self::getEnv()->user;
    }
    public static function getPass(){
        return self::getEnv()->pass;
    }
    
    public static function baseUrl(){
      return self::getEnv()->base_url;
    }

    public static function assetsUrl(){
        $url = self::baseUrl() . self::getEnv()->assets_url;
        return $url;
      }

      public static function imgUrl(){
          $url = self::baseUrl() . self::getEnv()->img_url;
          return $url;
      }
    }