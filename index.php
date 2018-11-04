<?php

use Zraiev\ImageLibHandler\Handlers\Crop;
use Zraiev\ImageLibHandler\Handlers\Resize;
use Zraiev\ImageLibHandler\Handlers\Rotate;
use Zraiev\ImageLibHandler\Image;

require_once __DIR__ . '/vendor/autoload.php';

echo('Image handling');

$image = new Image(__DIR__."/exampes/test.jpg");
$imageFile = $image->open();

//$imageCrop = new Crop($imageFile);
//$newImage = $imageCrop->crop(300, 200, 0, 0);

//$imageResize = new Resize($imageFile);
//$newImage = $imageResize->resize(300, 200);

$imageRotate = new Rotate($imageFile);
$newImage = $imageRotate->rotate(35, 1);

$image = new Image($newImage);
$image->save();
$image->show();
