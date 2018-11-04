<?php

namespace Zraiev\ImageLibHandler;

use Exception;

class Image extends AbstractImage
{
    protected $file;

    const TYPE = 'jpg';

    /**
     * Image constructor.
     * @param $file resource
     */
    public function __construct($file)
    {
        $this->file = $file;
    }

    /**
     * @return mixed
     */
    public function checkFormat()
    {
        $format = explode('.', $this->file);

        return end($format);
    }

    /**
     * @return resource
     * @throws Exception
     */
    public function open()
    {
        if ($this->checkFormat() === self::TYPE) {
            $file = imagecreatefromjpeg($this->file);
            imagedestroy($this->file);
            return $file;
        } else {
            throw new Exception('Wrong format!');
        }
    }

    public function save()
    {
        imagejpeg($this->file, $_SERVER["DOCUMENT_ROOT"]."/output.jpg");
        imagedestroy($this->file);
    }

    public function show()
    {
        $image = file_get_contents('output.jpg');
        header('Content-type: image/jpeg');

        return $image;
    }
}
