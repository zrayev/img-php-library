<?php

namespace Zraiev\ImageLibHandler;

abstract class AbstractImage
{
    /**
     * @return mixed
     */
    abstract public function open();

    /**
     * @return mixed
     */
    abstract public function save();
}
