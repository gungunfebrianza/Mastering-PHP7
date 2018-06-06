<?php

$data = array(1, 1., null, new stdClass, 'foo');

foreach ($data as $value) {
    echo gettype($value), "\n";
}
