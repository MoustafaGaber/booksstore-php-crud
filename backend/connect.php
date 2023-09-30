<?php
  $conn=mysqli_connect("localhost","root","usbw","library");
  if(!$conn)
  {
    echo "Failed " . mysqli_error($conn);
  }
//   else{
//     echo "connect succeded";
//   }
?>