<?php
$name ='Ifty';
function callName(){
global $name;
echo $name;
}
callName();
echo '<br>';
//Local scope
function result2(){
$mark = '50';
echo $mark ;
}
result2();
echo "<br>";
//Static Scope
function instument($Monthlyprofit){
$capital = 40000;
$capital += $Monthlyprofit;
return $capital . '<br>';
}
echo 'first month capital + profit= ' . instument(600);
echo 'second month capital + profit= ' . instument(1500);
echo 'third month capital + profit= ' . instument(2000);
echo " Loss Project . <br>";
 
//Arry 
// Indexing Array
$workout = [
 'bicep day',
 'tricep day',
 'shoulder & back',
 'detlift',
 'cest day',
 'six pack abs day',
];
echo '<pre>';
print_r($workout);
echo '</pre>';
echo  '<br>';
print_r($workout['1']);
echo  '<br>';
print_r($workout['4']);
echo  '<br>';
// associative array
$cv = [
'name'                      => 'Ikram Hossain Ifty',
'mail'                      => 'istiak.ifty.2000@gmail.com',
'number'                    => '01858542**6',
'educational qualification' => 'diploma in computer science runing',
'adress'                    => 'chandgong thana mowlobi pokor par'
];
echo '<pre>';
print_r($cv);
echo '</pre>';
print_r($cv['name']);
echo '<br>';

$word = 'Happiness is homemade';
print_r(strtoupper($word));
echo '<br>';

$word2 = 'Be Free Like A Bird';
print_r(strtolower($word2));
echo '<br>';
$word3 = 'Sometimes word are not enough';
print_r(strtoupper($word3));
echo '<br>';




?>


  