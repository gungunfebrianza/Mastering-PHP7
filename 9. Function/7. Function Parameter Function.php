<?php
function myCaller($myCallback)
{
    echo $myCallback();
}
// "Hello"
myCaller(function () {
    echo "Hello";
});
