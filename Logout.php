<?php
session_start();
unset($_SESSION['sesi']);
unset($_SESSION['idmember']);
session_destroy();
header("Location:index.php");
