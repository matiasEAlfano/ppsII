<?php

$request = array();
foreach($_REQUEST as $key => $value){
    $request[$key] = trim(strip_tags($value));
}