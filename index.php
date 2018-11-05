<?php

use Zraiev\ImageLibHandler\Handlers\Crop;
use Zraiev\ImageLibHandler\Handlers\Resize;
use Zraiev\ImageLibHandler\Handlers\Rotate;
use Zraiev\ImageLibHandler\Image;

require_once __DIR__ . '/vendor/autoload.php';

$image = new Image(__DIR__. '/exampes/test.jpg');
//$image = new Image(__DIR__. '/exampes/test.png');

$imageFile = $image->open();

//$imageCrop = new Crop($imageFile);
//$newImage = $imageCrop->crop(300, 200, 0, 0);

//$imageResize = new Resize($imageFile);
//$newImage = $imageResize->resize(300, 200);

$imageRotate = new Rotate($imageFile);
$newImage = $imageRotate->rotate(65, 0);

//save on jpg or png format
$image = new Image($newImage, Image::TYPE_PNG);
$image->save();
$image->show();
