<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Exercices drill</h2>

<!-- Exercice 1.2 -->

<!-- <?php
$possible_states = [
    0 => "health hazard",
    1 => "filthy", 
    2 => "dirty", 
    3 => "clean",
    4 => "immaculate"
];

$room_filthiness = $possible_states[1];

if($room_filthiness === "health hazard") {
    echo "Room is digusting! Let's clean it up!"; 
} else if ($room_filthiness == "filthy") {
    echo "Room is filthy : let's clean it up!";
} else if ($room_filthiness == "dirty") {
    echo "Room is dirty : let's clean it up!";
} else if ($room_filthiness == "clean") {
    echo "Room is clean, well done!";
} else {
    echo "Nothing to do, room is neat.";
}
?> -->

<!-- <h2>Exercice n°2 : Greeting message according to hour</h2> -->

<!-- Exercice 2 -->
<!-- <?php 

$now = date('H:i');

if($now>='05:00' && $now<='09:00') {echo "Good morning!" ;} 
if($now > '09:01' && $now <= '12:00') {echo "Good day!" ;} 
if($now > '12:01' && $now <= '16:00') {echo "Good afternoon!";}
if($now > '16:01' && $now <='21:00') {echo "Good evening!";} 
if($now > '21:01' && $now <= '04:59') {echo "Good night!";};
?> -->


<!-- Exercice 3 -->

<!-- <form method="get" action="">
	<label for="age">Please type your age  : </label>
	<input type="" name="age"><br>
    <label for="gender">Man or Woman?  : </label>
    <input type="radio" name="gender" value="man"> Man
    <input type="radio" name="gender" value="woman"> Woman <br>
    <label for="language">Do you speak Engligh?  : </label>
    <input type="radio" name="language" value="yes"> yes
    <input type="radio" name="language" value="no"> no <br>
	<input type="submit" name="submit" value="Greet me now">
</form>

<?php

$age = isset($_GET['age']) ? $_GET['age'] : NULL;
$gender = isset($_GET['gender']) ? $_GET['gender'] : NULL;
$language = isset($_GET['language']) ? $_GET['language'] : NULL;

if ($gender === 'man' && $language === "yes") {
    if ($age <= 12) {echo "Hello mister kiddo!";} 
    else if ($age <= 18){echo "Hello mister Teenager!";} 
    else if ($age <= 115) {echo "Hello mister Adult!";} 
    else {echo "Wow! Still alive? Are you a robot, like me? Can I hug you?";}  
} elseif ($gender === 'man' && $language=== "no") {
    if ($age <= 12) {echo "Aloha mister kiddo!";} 
    else if ($age <= 18){echo "Aloha mister Teenager!";} 
    else if ($age <= 115) {echo "Aloha mister Adult!";} 
    else {echo "Wow! Still alive? Are you a robot, like me? Can I hug you?";}  
} elseif ($gender === 'woman' && $language === "yes") {
    if ($age <= 12) {echo "Hello mister kiddo!";} 
    else if ($age <= 18){echo "Hello mister Teenager!";} 
    else if ($age <= 115) {echo "Hello mister Adult!";} 
    else {echo "Wow! Still alive? Are you a robot, like me? Can I hug you?";}  
} else {
    if ($age <= 12) {echo "Aloha miss kiddo!";} 
    else if ($age <= 18){echo "Aloha miss Teenager!";} 
    else if ($age <= 115) {echo "Aloha miss Adult!";} 
    else {echo "Wow! Still alive? Are you a robot, like me? Can I hug you?";}  
}

?> -->

<!-- Exercice 6 -->

<form action="" method="get">
    <label for="age">Please, type your age : </label>
    <input type="" name="age"><br>
    <label for="name">Please, type your name : </label>
    <input type="" name="name"><br>
    <label for="gender"> Please, type your gender (enter woman or man <strong>ONLY</strong>) : </label>
    <input type="" name="gender"><br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php

$age = isset($_GET['age']);
$gender = isset($_GET['gender']);

if(isset($age) AND isset($gender)){
    if($gender == "woman" && $age > 21 && $age < 40) {
        echo "welcome to the team !";
    } else {
        echo "Sorry you don't fit the criteria";
    }
}
?>


<!-- Exercice 8 -->

<form action="" method="get">
    <label for="note">Your notation is : </label>
    <input type="" name="note">
    <input type="submit" value="Submit" name="submit">
</form>

<?php
 


if(isset($_GET['note'])){
    if($_GET['note'] < 4){echo "This work is really bad. What a dumb kid!";}
    if($_GET['note'] <=9 && $_GET['note']> 4) {echo "This is not sufficient. More studying is required.";}
    if($_GET['note'] == 10) {echo "barely enough!";}
    if($_GET['note'] <=14 && $_GET['note']> 10) {echo "Not bad!";}
    if($_GET['note'] <=18 && $_GET['note']> 14) {echo "Bravo, bravissimo!";}
    if($_GET['note'] == 20 && $_GET['note']> 18) {echo "Too good to be true : confront the cheater!";}
}
?>






</body>
</html>

