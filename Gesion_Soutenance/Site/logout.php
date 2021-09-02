<?php
session_start();
unset($_SESSION['connecte']);
header('Location:/gesion_soutenance/Site/login.php');