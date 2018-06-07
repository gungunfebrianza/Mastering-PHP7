Use the dir() function:
<?php
$d = dir(getcwd());

echo "Handle: " . $d->handle . "<br>";
echo "Path: " . $d->path . "<br>";

while (($file = $d->read()) !== false){
  echo "filename: " . $file . "<br>";
}
$d->close();
?>

Result:
Handle: Resource id #2
Path: /etc/php
filename: .
filename: ..
filename: ajax.gif
filename: books.xml
filename: cdcatalog.xml
filename: cd_catalog.xml
filename: default.asp
filename: demo_array.asp
filename: demo_array.htm
...
...
...