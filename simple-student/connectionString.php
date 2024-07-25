<?php

$con=mysqli_connect("localhost","root","Shrish@2004","student");
     if(!$con)
     {
       die("connection to this database failed due to " .mysqli_connect_error());
     }

?>