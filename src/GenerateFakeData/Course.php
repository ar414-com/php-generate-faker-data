<?php

namespace Ar414\GenerateFakeData;


class Course extends AbstractGenerate
{
    static $data = [];

    protected static function loadData()
    {
        self::$data = file_get_contents(__DIR__."/data/course.json");
        self::$data = json_decode(self::$data,true);
    }

    /**
     * @return string
     */
    public static function generate()
    {
        self::loadData();
        $index = array_rand(self::$data,1);
        return self::$data[$index];
    }

    /**
     * @return array
     */
    public static function getData()
    {
        return self::$data;
    }
}