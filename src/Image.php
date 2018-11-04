<?php

namespace Zraiev\ImageLibHandler;

use Exception;

/**
 * @property mixed type
 */
class Image extends AbstractImage
{
    protected $file;

    protected $type;

    const TYPE_JPG = 'jpg';
    const TYPE_JPEG = 'jpeg';
    const TYPE_PNG = 'png';

    /**
     * Image constructor.
     * @param $file resource
     * @param $type string
     */
    public function __construct($file, $type = null)
    {
        $this->file = $file;
        $this->type = $type ?? $this->checkFormat();
    }

    /**
     * @return mixed
     */
    public function checkFormat()
    {
        $mime = image_type_to_mime_type(exif_imagetype($this->file));
        $format = explode('/', $mime);

        return end($format);
    }

    /**
     * @return resource
     * @throws Exception
     */
    public function open()
    {
        $file = $this->type !== self::TYPE_JPG && $this->type !== self::TYPE_JPEG ? imagecreatefrompng($this->file) : imagecreatefromjpeg($this->file);

        imagedestroy($this->file);

        return $file;
    }

    /**
     * @return void
     */
    public function save()
    {
        if ($this->type !== self::TYPE_JPG && $this->type !== self::TYPE_JPEG) {
            imagepng($this->file, $_SERVER["DOCUMENT_ROOT"]."/output.png");
        } else {
            imagejpeg($this->file, $_SERVER["DOCUMENT_ROOT"]."/output.jpg");
        }

        imagedestroy($this->file);
    }

    public function show()
    {
        $imageData = base64_encode(file_get_contents('output.'.$this->type));
        $src = 'data: '.mime_content_type('output.'.$this->type).';base64,'.$imageData;
        echo '<img src="' . $src . '">';
    }
}
