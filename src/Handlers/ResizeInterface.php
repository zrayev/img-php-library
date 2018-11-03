<?php

namespace Zraiev\ImageLibHandler\Handlers;

interface ResizeInterface
{
    /**
     * @param $width
     * @param $height
     * @param $ratio
     * @return mixed
     */
    public function resize($width, $height, $ratio);
}
