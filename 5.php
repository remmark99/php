<?php

function changeString($string) {
    return strtr($string, " ", "_");
}

echo changeString(" Привет мир Hello world ");

//