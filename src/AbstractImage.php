<?php

namespace Zraiev\ImageLibHandler;

abstract class AbstractImage
{
    abstract public function open($file);
    abstract public function save($file);
    abstract public function resize($width, $height, $ratio);
    abstract public function crop($width, $height, $x, $y);
    abstract public function rotate($angle, $background);
}
