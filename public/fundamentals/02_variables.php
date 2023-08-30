<?php
/*
        strings
        integers
        floats
        boolean
        arrays
        null
        how to calculate with variables
        objects
    */

$aName = 'Sewilius'; // string
$age = 27; // integers
$kinder_age = 1.5; //float
$is_teacher = true; //boolean
echo $aName . ' ' . $age . ' is a lousy teacher: ';
var_export($is_teacher);
echo '<br><br>';

//arrays, nedan visas "associativa" arrayer, alltså där vi själva bestämmer index-namnet
$studentsFirstName = [ // eller med  $minArray = array('värde1', 'värde2' ...);
    's1' => 'stina',
    's2' => 'pelle',
    's3' => 'elvis'
];

$students = [
    [
        'name' => 'Stina Oscarsson',
        'age' => 54
    ],
    [
        'name' => 'Pelle Håkansson',
        'age' => 19
    ],
    [
        'name' => 'Anton Presley',
        'age' => 'avliden'
    ]
];

var_dump($studentsFirstName);
echo '<br><br>';
echo $studentsFirstName['s1'] . ' och ' . $studentsFirstName['s3'] . '<br><br>';
echo $students[1]['name'] . ' ' . $students[2]['age']; //1 och 2 är index, som ges automatisk

echo '<br><br>';
//finns en array är det lätt att göra den till en JSON-string
echo json_encode($students); //kan bli problem med åäö...
echo '<br><br>';
var_dump(json_encode($students));

//calculating
$x = '5' + '5';
echo '<br><br> x = ' . $x;
echo '<br><br>' . (12 - 5) * $kinder_age;
echo '<br><br>' . 20 % 3;

//constants
define('HOST', 'localhost:5000');
define('TEACHER', 'Sewilius Berg');
echo '<br><br>' . HOST . ' ' . TEACHER;

//null
$nada = NULL;
echo '<br><br>Värdet på null visas som: ' . $nada;

//objects (skapas från klasser)
class Fruit
{
    //properties
    public $name;
    public $color;
    public $family;

    function set_name($name) //en set för varje variabel vars värde ska inkomma utifrån
    {
        $this->name = $name;
    }

    function get_name() //en get för varje variabel vars värde ska hämtas utifrån
    {
        return $this->name;
    }
}
echo '<br><br>';
$apple = new Fruit();
$banana = new Fruit();
$apple->set_name('Cripps Pink');
$banana->set_name('Pisang Raja');

echo $apple->get_name() . ' och ';
echo  $banana->get_name(); 
