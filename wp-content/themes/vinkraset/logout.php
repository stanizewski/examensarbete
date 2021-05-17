<?php

    session_start();
    session_destroy();

    header("location:index.php"); 

?> 

<!-- Den här sidan tar hand om logout funktionen  -->