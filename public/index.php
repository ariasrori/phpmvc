<?php

if(!session_id()) session_start();


// init.php => memanggil semua file yang dibutukan 
// disebut Boostraping
require_once '../app/init.php'; 

$app = new App;
