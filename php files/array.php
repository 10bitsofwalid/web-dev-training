<?php

//indexed array
$fruit = ["apple", "mango", "orange"];
echo $fruit[1] . "<br>";
var_dump($fruit);

//mixed array
$showroom = ["car", 12, false];
var_dump($showroom);

//associative array

$user = [
    $name = "walid",
    $age = "22",
    $hobbies => ['codding', 'gaming']
];
echo $user['hobbies'];

//loops
//for loops
for($i=0; $i<=5; $i++){
    echo $i;
}

//while loop

while($i <= 5){
    echo $i;
}

//for-each loop
foreach($fruit as $fruits){
    echo $fruits;
}

//functions
function greet($names = 'guest'){
    echo "Hello, $names";
}
greet("walid");

function mul($a, $b){
    return $a * $b;
}

$result = mul(4, 5);
echo $result;

?>