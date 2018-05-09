<?php
namespace App\Helpers;
class AppHelper
{
    public function console($someValue)
    {
        $fp = fopen('php://stdout', 'w');
        fwrite($fp, $someValue."\n");
        fclose($fp);
        return 0;
    }
    public static function instance()
    {
        return new AppHelper();
    }
}