view job files <br>

</a>
 

<?php
$jobNo=1;

$dir = "files/jobFiles/".$jobNo.'/';

// Open a directory, and read its contents
if (is_dir($dir)){
  if ($dh = opendir($dir)){

    $file = readdir($dh);
    echo "     filename:<a href=   '$dir$file'   > $dir$file</a><br>        ";

/*
    while (($file = readdir($dh)) !== false){

      echo "     filename:<a href=   '$dir$file'   > $dir$file</a><br>        ";
      
    }
    */
    closedir($dh);
  }
}




?>