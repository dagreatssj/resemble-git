<?php

function getSaying() {
    $sayings = array("yo", "yo squared", "haha");

    $i = rand(0,2);
    return $sayings[$i];
}

getSaying();

?>