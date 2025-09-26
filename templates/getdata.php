<?php
 header("Access-Control-Allow-Origin: http://localhost:5000");
 $serverName = "localhost";
 $username = "root";
 $password = "";
 $databaseName = "dbnew";
 
 $Conn2 = new mysqli($serverName, $username, $password, $databaseName);
 if ($Conn2->connect_error) {
     die ($Conn2->connect_error);
     $Conn2->Close();
 }
 ?>

<?php
$number1 = rand(100,100000);
$number2 = rand(100,100000);
$number3 = rand(100,100000);
$number4 = rand(100,100000);
$number5 = rand(100,100000);
$number6 = rand(100,100000);
$session_id = ($number1.''.$number2.''.$number3.''.$number4.''.$number5.''.$number6);
$size_array2 = $_FILES['imagenew']['size'];
$image2 = $_FILES['imagenew']['name'];
$imageFileType = pathinfo($image2,PATHINFO_EXTENSION);
$filename1 = $imageFileType;
$target= ('../songs/'.$session_id.'.'.$imageFileType);
$target2= ($session_id.'.'.$imageFileType);


$s4 = "mp3";
$s4a = "mpeg";
$s2 = "flac";
$s2a = "x-flac";
$s1 = "aiff";
$s1a = "x-aiff";
$s6 = "wav";
$s6a = "x-wav";

//-------------------------//
if($size_array2 > 0){

  if($size_array2 > 0 && $size_array2 < 26000000){  
  if($filename1 == $s1 || $filename1 == $s2 || $filename1 == $s4 || $filename1 == $s1a || $filename1 == $s2a || $filename1 == $s4a || $filename1 == $s6 || $filename1 == $s6a
  
  ){

mysqli_query($Conn2,"INSERT INTO `songs` (`filename`,`path`) VALUES ('" . $session_id . "','" . $target . "')");
move_uploaded_file($_FILES['imagenew']['tmp_name'], $target);
      if(mysqli_affected_rows($Conn2)) {


$finfo = finfo_open(FILEINFO_MIME_TYPE);
$filename2 = finfo_file($finfo, $target);
$f1 = "audio/x-aiff";
$f1a = "audio/aiff";
$f2 = "audio/flac";
$f2a = "audio/x-flac";
$f4 = "audio/mpeg";
$f4a = "audio/mp3";
$f6 = "audio/wav";
$f6a = "audio/x-wav";

if($filename2 == $f1 || $filename2 == $f2 || $filename2 == $f4 || $filename2 == $f1a || $filename2 == $f2a || $filename2 == $f4a || $filename2 == $f6 || $filename2 == $f6a

){

      echo "$target2";
}
else{
  echo "1";

}

    }
        else{
          echo "2";
        }
    }
    else{
        echo "3";
      }
    }
    else{
      echo "5";
    }
  }

    else{
      echo "4";
    }

        ?>