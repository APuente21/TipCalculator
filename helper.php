<?php

$hasResults = false;
$roundBill = false;
$split;

if(isset($_GET["Total_Price"])) {
    $hasResults = true;
    $price = $_GET["Total_Price"];
    $people = $_GET["people"];
    $tip = $_GET["tipAmount"];
    
    if (isset($_GET["roundBill"])){
        $roundBill = true;
    } else {
        $roundBill = false;
    }
} 

if($hasResults) { 
    if($roundBill){
        $split = round(($price * ((100+$tip)/100))/$people, 0); 
    } else{ 
        $split = ($price * ((100+$tip)/100))/$people; 
    }
}