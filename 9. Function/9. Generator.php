<?php
function getNum()
{
    for ($i = 0; $i < 5; $i++) {
        yield $i;
    }
}

foreach (getNum() as $v) {
    echo $v;
} // "01234"
