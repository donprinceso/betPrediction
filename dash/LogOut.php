<?php
require_once '../include/header_start.php';
if(session_destroy()){
    header("location:../index.php");
}
 else {
    session_unset();
    
}
