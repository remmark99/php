<?php

$alphabet = [
    'а' => 'a',   'б' => 'b',   'в' => 'v',
    'г' => 'g',   'д' => 'd',   'е' => 'e',
    'ё' => 'e',   'ж' => 'zh',  'з' => 'z',
    'и' => 'i',   'й' => 'y',   'к' => 'k',
    'л' => 'l',   'м' => 'm',   'н' => 'n',
    'о' => 'o',   'п' => 'p',   'р' => 'r',
    'с' => 's',   'т' => 't',   'у' => 'u',
    'ф' => 'f',   'х' => 'h',   'ц' => 'c',
    'ч' => 'ch',  'ш' => 'sh',  'щ' => 'sch',
    'ь' => '\'',  'ы' => 'y',   'ъ' => '\'',
    'э' => 'e',   'ю' => 'yu',  'я' => 'ya'
];

$sentence = "Привет, я";

$string = ucfirst(strtr(mb_strtolower($sentence), $alphabet)) . "<br>"; //Не учитывает заглавные буквы посреди слова и другие слова
echo $string = strtr($string, " ", "_");

$string = "";
foreach(preg_split("//u", mb_strtolower($sentence)) as $letter) { //Сложно читается, но короче)
    $string .= $alphabet[$letter] == NULL ? $letter : $alphabet[$letter];
}

echo ucfirst(strtr($string, " ", "_"));