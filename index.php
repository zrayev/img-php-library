<?php

use Zraiev\ImageLibHandler\Handlers\Crop;
use Zraiev\ImageLibHandler\Image;

require_once __DIR__ . '/vendor/autoload.php';

echo('Image handling');

$image = new Image();
$image->open('file.jpg');

$imageCrop = new Crop();
$imageCrop->crop($image, 200, 200, 0, 0);
$image->save($imageCrop);
