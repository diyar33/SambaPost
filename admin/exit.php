<?php
session_start();
ob_start();
session_destroy();
ob_flush();

header("Location:index");
?>