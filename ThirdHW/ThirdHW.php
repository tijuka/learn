<?php

// My favorite movies;

$MyMovies = array ();

$MyMovies [1] = "The big bang theory";
$MyMovies [2] = "Younger";
$MyMovies [3] = "The new girl";
$MyMovies [4] = "Family Guy";
$MyMovies [5] = "Simpsons";


echo "<h3> Mano megstamiausi serialai: </h3><br>"."<ol>"."<li>".$MyMovies {1}."<li>"
    .$MyMovies {2}. "<li>" .$MyMovies {3}. "<li>" .$MyMovies{4} ."<li>" .$MyMovies {5} . "<br>";

?>

<?php

$shopping_cart = [
    [
        'type' => 'vegetables',
        'name' => 'potato',
        'quantity' => '10',
        'price' => '1.0'
    ],
    [
        'type' => 'vegetables',
        'name' => 'onion',
        'quantity' => '5',
        'price' => '0.5'
    ],
    [
        'type' => 'vegetables',
        'name' => 'cucumber',
        'quantity' => '2',
        'price' => '1.2'
    ],
    [
        'type' => 'fruits',
        'name' => 'banana',
        'quantity' => '2',
        'price' => '1.0'
    ],
    [
        'type' => 'fruits',
        'name' => 'apple',
        'quantity' => '3',
        'price' => '1.2'
    ]
];


$applecost = $shopping_cart[4]['quantity']*$shopping_cart[4]['price'];

echo "<br> Obuoliai kainuoja " .$applecost ." Euro.";

$bananacost = $shopping_cart [3]['quantity']*$shopping_cart[3]['price'];

echo "<br> Bananai kainuoja " .$bananacost ." Euro.";

echo "<br>";

$potatocost = $shopping_cart [0] ['quantity']*$shopping_cart[0] ['price'];

echo "<br> Bulves kainuoja " .$potatocost ." Euro.";

$onioncost = $shopping_cart [1] ['quantity']*$shopping_cart[1] ['price'];

echo "<br> Svogunai kainuoja " .$potatocost ." Euro.";

$cucumbercost = $shopping_cart[2] ['quantity']*$shopping_cart [2] ['price'];

echo "<br> Agurkai kainuoja " .$cucumbercost . " Euro.";

?>

<?php

$MyArray = array("nulis", "vienas", "du", "trys", "keturi", "penki");

function

MyFunction($MyArray){
    if (empty($MyArray)) {
    echo "Tuscias masyvas";
}
else
  Echo $MyArray [5];
}
Echo "<br>";
Echo "<br>";
MyFunction($MyArray)

?>




