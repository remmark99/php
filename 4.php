<?php
$header = "Информация обо мне";
$title = "Главная страница - страница обо мне";
$year = 2019;

$site = file_get_contents("site.tpl");
$site = preg_replace('/{{(\w*)}}/', '\1', $site);
//Очень интересно узнать, возможно ли реализовать в одну строку
echo $site;