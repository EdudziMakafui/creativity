<?php

function redirect($location){
   return header("Location: $location");
}

function query($sql){
   return $query = mysqli_query($sql);
    
}



?>