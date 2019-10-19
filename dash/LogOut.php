<?php
require_once '../include/header_start.php';
if(isset(session_destroy())){
    session_unregister();
    header("location:../index.php");
}
 else {
    session_unset() & session_abort();
    
}
