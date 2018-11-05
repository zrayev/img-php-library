<?php

namespace Zraiev\ImageLibHandler\Handlers;

interface CropInterface
{
    /**
     * @param $width
     * @param $height
     * @param $x
     * @param $y
     *
     * @return mixed
     */
    public function crop($width, $height, $x, $y);
}
