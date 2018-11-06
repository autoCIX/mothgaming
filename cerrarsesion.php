<?php
session_start();
$_SESSION = array();	
session_destroy();
?>
    <script>
        window.history.back(-1);
    </script>
