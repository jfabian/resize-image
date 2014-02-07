<?php
$url = $_SERVER['REQUEST_URI'];
$pathNewImage = $_SERVER['DOCUMENT_ROOT'].$url;
$nameImage = explode('/', $url);
$newImage = end($nameImage);
list($width, $height) = explode('__', $newImage);
if ((int)$width > 0 && (int)$height > 0) {
        $pathOriginalImage = str_replace($width."__".$height."__", "", $pathNewImage);
        $command = "convert $pathOriginalImage -resize $width"."x"."$height"."! $pathNewImage";
        exec($command);
} elseif ($width > 0) {
        $pathOriginalImage = str_replace($width."__", "", $pathNewImage);
        $command = "convert $pathOriginalImage -resize $width $pathNewImage";
        exec($command);
}
if (file_exists($pathNewImage)) {
        header('Location: http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
} else {
        echo "La imagen no existe";
}
?>

