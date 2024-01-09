<?php     
$page = htmlspecialchars(filter_input(INPUT_GET,'page'));


$planning = [
    "lundi" => "18h à 22h",
    "mardi" => "18h à 20h",
    "mercredi" => "16h30 à 18h",
    "jeudi" => "19h30 à 22h",
    "vendredi" => "18h à 22h",
    ];


include 'template.php';

//const listHoursArray = document.body.querySelectorAll('.list-hours li');
//listHoursArray[new Date().getDay()].classList.add(('today'));
