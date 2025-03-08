<?php

$choice = readline("MD5 or Sha1?");
$hashedString = readline("What's the string to be hashed?");

if ($choice = "MD5") {
    echo md5($hashedString);
}
else if ($choice = "SHA1") {
    echo sha1($hashedString);
}
else {
    echo "That does not appear to be a valid selection.";
}



?>
