<?php
// INTRODUZIONE
$double_team = ["Lorenzo", "John", "Hector", "Silvio", "Francesca","John", "Angelo","Lorenzo","Hector", "Francesca", "Angelo", "Silvio"];
$arguments = ['Introduzione','array_unique', 'array_rand', 'shuffle', 'array_combine', 'array_walk', 'Niente, \'cci sua'];

// var_dump($double_team);

// ARRAY UNIQUE
$dream_team = array_unique($double_team);
// var_dump($dream_team);

// ARRAY RAND
// var_dump($arguments);
$index_array = array_rand($arguments, count($dream_team));
// var_dump($index_array);

$selected_arguments = [];
foreach ($index_array as $index) {
    $selected_arguments[] = $arguments[$index]; 
}; 

// var_dump($selected_arguments);

//SHUFFLE
shuffle($dream_team);
// var_dump($dream_team);

// ARRAY COMBINE
$array_combination = array_combine($dream_team, $selected_arguments);
// var_dump($array_combination);


// ARRAY WALK
function print_result($value, $key)
{
    "$key spiega $value <br>";
};
$result = array_walk($array_combination, "print_result");
// var_dump($result);
?>
