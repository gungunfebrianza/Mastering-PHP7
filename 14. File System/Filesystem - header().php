Definition and Usage

The header() function sends a raw HTTP header to a client.

It is important to notice that header() must be called before any actual output is sent (In PHP 4 and later, you can use output buffering to solve this problem):
<html>
<?php
// This results in an error.
// The output above is before the header() call
header('Location: http://www.example.com/');
?>
Syntax
header(string,replace,http_response_code)

Parameter 	Description
string 	Required. Specifies the header string to send
replace 	Optional. Indicates whether the header should replace previous or add a second header. Default is TRUE (will replace). FALSE (allows multiple headers of the same type)
http_response_code 	Optional. Forces the HTTP response code to the specified value (available in PHP 4.3 and higher)
Tips and Notes

Note: Since PHP 4.4 this function prevents more than one header to be sent at once. This is a protection against header injection attacks.
Example 1

Prevent page caching:
<?php
// Date in the past
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Cache-Control: no-cache");
header("Pragma: no-cache");
?>

<html>
<body>

...
...

Note: There are options that users may set to change the browser's default caching settings. By sending the headers above, you should override any of those settings and force the browser to not cache!
Example 2

Let the user be prompted to save a generated PDF file (Content-Disposition header is used to supply a recommended filename and force the browser to display the save dialog box):
<?php
header("Content-type:application/pdf");

// It will be called downloaded.pdf
header("Content-Disposition:attachment;filename='downloaded.pdf'");

// The PDF source is in original.pdf
readfile("original.pdf");
?>

<html>
<body>