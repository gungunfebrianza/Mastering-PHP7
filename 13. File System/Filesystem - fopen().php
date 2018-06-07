Syntax
fopen(filename,mode,include_path,context)

Parameter 	Description
filename 	Required. Specifies the file or URL to open
mode 	Required. Specifies the type of access you require to the file/stream.

Possible values:

    "r" (Read only. Starts at the beginning of the file)
    "r+" (Read/Write. Starts at the beginning of the file)
    "w" (Write only. Opens and clears the contents of file; or creates a new file if it doesn't exist)
    "w+" (Read/Write. Opens and clears the contents of file; or creates a new file if it doesn't exist)
    "a" (Write only. Opens and writes to the end of the file or creates a new file if it doesn't exist)
    "a+" (Read/Write. Preserves file content by writing to the end of the file)
    "x" (Write only. Creates a new file. Returns FALSE and an error if file already exists)
    "x+" (Read/Write. Creates a new file. Returns FALSE and an error if file already exists)

include_path 	Optional. Set this parameter to '1' if you want to search for the file in the include_path (in php.ini) as well
context 	Optional. Specifies the context of the file handle. Context is a set of options that can modify the behavior of a stream
Tips and Notes

Note: When writing to a text file, be sure to use the correct line-ending character! Unix systems use \n, Windows systems use \r\n, and Macintosh systems use \r as the line ending character. Windows offers a translation flag ('t') which will translate \n to \r\n when working with the file. You can also use 'b' to force binary mode. To use these flags, specify either 'b' or 't' as the last character of the mode parameter.
Example
<?php
$file = fopen("test.txt","r");
$file = fopen("/home/test/test.txt","r");
$file = fopen("/home/test/test.gif","wb");
$file = fopen("http://www.example.com/","r");
$file = fopen("ftp://user:password@example.com/test.txt","w");
?> 