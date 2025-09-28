<?php

// TODO : NEED TO HAVE SOME KIND OF WEB WRAPPER
// ! Remember to learn laravel

//Test
$arraynum = array(1, 2, 3, 4, 5);

echo $arraynum[0];


//Task1_Lutfil
//numeric array named fruits
$fruits = array("apple", "banana", "cherry", "date", "elderberry");
echo "<br>";
echo $fruits[2];
echo "<br>";
$lengthoffruits = count($fruits);
echo $fruits[$lengthoffruits - 1];
echo "<br>";

//Task 2: Associative Array
//associative array called $tto
$tto = array("name" => "azra", "subject" => "SPG0473", "credit" => 3);
//display name and subject
echo $tto["name"];
echo "<br>";
echo $tto["subject"];
echo "<hr>";
//loop through the array
foreach ($tto as $key => $value) {
    echo $key . ": " . $value . "<br>";
}

//Task 3: Multidimensional array
//Create a multidimensional array called $classroom with a minimum 3 students.
//Each student should have details on "name", "age", "grade".
echo "<hr>";
$classroom = array(
    array("name" => "Alice", "age" => 20, "grade" => "A"),
    array("name" => "Bob", "age" => 22, "grade" => "B"),
    array("name" => "Charlie", "age" => 21, "grade" => "C")
);
//display name and grade for 2nd student
echo $classroom[1]["name"] . " - " . $classroom[1]["grade"];

//Task 4
echo "<hr>";
/*
Add a new student to the $classroom array.

Calculate the average age of all students.

*/
$new_student = array("name" => "David", "age" => 23, "grade" => "B");
$classroom[] = $new_student;
$total_age = 0;
foreach ($classroom as $student) {
    $total_age += $student["age"];
}
$average_age = $total_age / count($classroom);
echo "Average age: " . $average_age;

//print every student's details
foreach ($classroom as $student) {
    echo $student["name"] . " - " . $student["age"] . " - " . $student["grade"] . "<br>";
}

?>