<?php

function myArgs3(...$args)
{
    foreach ($args as $v) {
        echo $v;
    }
}

myArgs3(1, 2, 3); // "123"
