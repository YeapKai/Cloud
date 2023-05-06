<?php
require 'config.php';
$session = [];
session_destroy();
header("Location: index.php");


