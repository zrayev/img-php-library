<?php

namespace Zraiev\ImageLibHandler\Handlers;

class Crop
{
    protected $img;

    /**
     * Crop constructor.
     * @param $img resource
     */
    public function __construct($img)
    {
        $this->img = $img;
    }

    /**
     * @param $width
     * @param $height
     * @param $x
     * @param $y
     *
     * @return bool|resource
     */
    public function crop($width, $height, $x, $y)
    {
        $imageCrop = imagecrop($this->img, ['x' => $x, 'y' => $y, 'width' => $width, 'height' => $height]);
        imagedestroy($this->img);

        return $imageCrop;
    }
}
