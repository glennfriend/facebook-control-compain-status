<?php
namespace Bridge;

class View
{

    protected static $engine;

    /**
     *  request init
     */
    public static function init($conf=[])
    {
      //self::$engine = new Options\ViewTwig($conf);
        self::$engine = new Options\ViewNormal();
    }

    public static function render($templateName, $params)
    {
        return self::$engine->render($templateName, $params);
    }

}
