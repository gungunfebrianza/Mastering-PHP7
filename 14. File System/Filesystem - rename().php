Definition and Usage

The rename() function renames a file or directory.

This function returns TRUE on success, or FALSE on failure.
Syntax
rename(oldname,newname,context)

Parameter 	Description
oldname 	Required. Specifies the file or directory to be renamed
newname 	Required. Specifies the new name of the file or directory
context 	Optional. Specifies the context of the file handle. Context is a set of options that can modify the behavior of a stream
Example
<?php
rename("images","pictures");
?> 