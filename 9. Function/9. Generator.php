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

function countToFive()
{
    yield 1;
    yield from [2, 3, 4];
    yield 5;
}
foreach (countToFive() as $v) {
    echo $v;
} // "12345"
