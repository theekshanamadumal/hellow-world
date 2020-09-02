view job files <br>




<?php
$jobNo=1;

$dir = "files/jobFiles/".$jobNo;

// Open a directory, and read its contents
if (is_dir($dir)){
  if ($dh = opendir($dir)){
    while (($file = readdir($dh)) !== false){
      echo "filename:" . $file . "<br>";
    }
    closedir($dh);
  }
}




?>