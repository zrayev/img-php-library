<?php

namespace Zraiev\ImageLibHandler;

abstract class AbstractImage
{
    /**
     * @param $file
     * @return mixed
     */
    abstract public function open($file);

    /**
     * @param $file object
     * @return mixed
     */
    abstract public function save($file);
}
