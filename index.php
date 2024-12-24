<?php
$lastName = 'Ivanov';
$firstName = 'Nikolai';
echo 'Client\'s last name is '.$lastName.', and their first name is '.$firstName.'.';

$age = 30;
print '<br>Client\'s age is '.$age.'.';
?>

<?php
$currentDay = date("w");

if ($currentDay == 5) {
    echo "<br>Have a great weekend!";
} elseif ($currentDay == 0) {
    echo "<br>Tomorrow starts a new work week!";
} else {
    echo "<br>Have a productive workday!";
}
?>

<?php
echo "<br>";
$age = 22;

if ($age > 12 && $age < 20) {
    $message = "you are a teenager!";
} elseif ($age > 40) {
    $message = "you are an adult!";
} else {
    $message = "you are in your prime... get to work!";
}

$name = "Anna";
echo $name ? $name.', '.$message : 'Anonymous, '.$message;
?>

<?php
echo "<br>";
$day = date("w");

switch ($day) {
   case 0:
       echo "Today is Sunday, ".date("d.m.Y");
       break;
   case 1:
       echo "Today is Monday, ".date("d.m.Y");
       break;
   case 2:
       echo "Today is Tuesday, ".date("d.m.Y");
       break;
   default:
       echo "Unknown day";
       break;
}
?>

<?php
$day = date("w");

echo "<table border='1'>";
echo "<tr><th>№</th><th>Фамилия Имя</th><th>График работы</th></tr>";

// График для John Styles
if (in_array($day, [1, 3, 5])) {
    $scheduleJohn = "8:00-12:00";
} else {
    $scheduleJohn = "Нерабочий день";
}
echo "<tr><td>1</td><td>John Styles</td><td>$scheduleJohn</td></tr>";

// График для Jane Doe
if (in_array($day, [2, 4, 6])) {
    $scheduleJane = "12:00-16:00";
} else {
    $scheduleJane = "Нерабочий день";
}
echo "<tr><td>2</td><td>Jane Doe</td><td>$scheduleJane</td></tr>";

echo "</table>";
?>