<?php
require "1.1.php";

$array = (array_slice(scandir("gallery_img/big"), 2));

if (isset($_POST['load'])) {
    $file = $_FILES["myfile"]["name"];
    var_dump($path = "gallery_img/big/" . $file);
    if (preg_match('/\.jpg$/i', $file) && ($_FILES["myfile"]["size"] <= 20971520)) {
        var_dump(move_uploaded_file($_FILES["myfile"]["tmp_name"], $path));
        $image = new SimpleImage();
        $image->load($path);
        $image->resize(150, 100);
        $image->save("gallery_img/small/$file");
    } else {
        echo "Загружать можно только файлы с расширением jpg размером не более 20 Мб.";
    }

}
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Моя галерея</title>
    <!--    <link rel="stylesheet" type="text/css" href="style.css"/>-->
</head>

<body>
<div id="main">
    <div class="post_title"><h2>Моя галерея</h2></div>
    <div class="gallery">
        <? foreach ($array as $image): ?>
            <a href="gallery_img/big/<?= $image ?>"><img src="gallery_img/small/<?= $image ?>"
                                                         alt="Beautiful image"></a>
        <? endforeach; ?>
    </div>
    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="myfile">
        <input type="submit" value="Load" name="load">
    </form>
</div>

</body>
</html>