<?php

if(session_destroy() && session_cache_expire()){
    header("location:index.php");
}
 else {
    session_unset();
    
}