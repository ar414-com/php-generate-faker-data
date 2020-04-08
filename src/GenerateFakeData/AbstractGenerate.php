<?php

namespace Ar414\GenerateFakeData;


//TODO 使用抽象工厂设计模式
//TODO 是否是否可以使用其他设计模式？

abstract class AbstractGenerate
{

    abstract public static function generate();

    abstract protected static function loadData();
}