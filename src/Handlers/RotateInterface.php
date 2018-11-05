<?php

namespace Zraiev\ImageLibHandler\Handlers;

interface RotateInterface
{
    /**
     * @param $angle
     * @param $background
     *
     * @return mixed
     */
    public function rotate($angle, $background);
}
