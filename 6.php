<?php

$menu = [
    "just" => [
        "#", "Some text"
    ],
    "some" => [
        "#", "Some text"
    ],
    "random" => [
        "some" => [
            "2", "Some other text"
        ],
        "more" => [
            "2", "Some other text"
        ]
    ],
    "names" => [
        "#", "Some text"
    ],
    "here" => [
        "#", "Some text"
    ]
];

function getMenu($array) {
    $result = "";
    if (count(array_filter($array, 'is_string')) === 0) {
        $result .= "<ul>";
        foreach ($array as $value) {
            $result .= getMenu($value);
        }
        $result .= "</ul>";
    } else {
        $result .= "<li><a href='$array[0]'>$array[1]</a></li>";
    }
    return $result;
}

echo getMenu($menu);

//