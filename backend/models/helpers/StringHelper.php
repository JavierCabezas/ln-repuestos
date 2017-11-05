<?php namespace app\models\helpers;
/**
 * Created by PhpStorm.
 * User: javier
 * Date: 8/26/17
 * Time: 9:22 PM
 */
use Yii;

class StringHelper{
    /**
     * Removes all special characters from a string and replaces spaces with -, making the output string more seo-friendly.
     * @param $string
     * @return string
     */
    public static function seo_url($string){
        $string = preg_replace("/ {2,}/", " ", $string); //Sacar múltiples espacios
        $string = str_replace(array('á', 'Á'), 'a', $string);
        $string = str_replace(array('é', 'É'), 'e', $string);
        $string = str_replace(array('í', 'Í'), 'i', $string);
        $string = str_replace(array('ó', 'Ó'), 'o', $string);
        $string = str_replace(array('ú', 'Ú'), 'u', $string);
        $string = str_replace(array(',', '.'), ' ', $string);
        $string = str_replace(' ', '-', $string);

        $string = strtolower($string);
        return trim($string, '-');
    }

    /**
     * Returns base url without index.php
     * @return mixed
     */
    public static function base_url(){
        return str_replace('index.php', '', Yii::$app->homeUrl);
    }

    /**
     * Returns the given ammount formatted as money
     * @param $ammount
     * @return string
     */
    public static function money($ammount){
        return "$".number_format($ammount, 0, ',', '.');
    }

    /**
     * Gets the youtube ID from the passed URL given by parameter.
     * @param $url: Ex: https://www.youtube.com/watch?v=dQw4w9WgXcQ
     * @return string|bool:
     * If succesfull it returns the string(dQw4w9WgXcQ) for the given example.
     * False otherwise
     */
    public static function getYoutubeIdFromUrl($url) {
        $parts = parse_url($url);
        if(isset($parts['query'])){
            parse_str($parts['query'], $qs);
            if(isset($qs['v'])){
                return $qs['v'];
            }else if(isset($qs['vi'])){
                return $qs['vi'];
            }
        }
        if(isset($parts['path'])){
            $path = explode('/', trim($parts['path'], '/'));
            return $path[count($path)-1];
        }
        return false;
    }
}