<?php 
$mix = array(
    array  ('user' => 'hana','password'=>'hana123$%^&',   'role'=>'admin'  ,'phone'=>'0798406304'),
    array  ('user' =>'hala', 'password'=>'hala234$%^',    'role'=>'admin'  ,'phone'=>'0798406304'),
    array  ('user' =>'ala',  'password'=>'ala345#$',      'role'=>'user'   ,'phone'=>'0798406304'),
    array  ('user' =>'ali',  'password'=>'ali456%$^',     'role'=>'user'   ,'phone'=>'0798406304'),
    array  ('user' =>'amal', 'password'=>'amal567%$^',    'role'=>'user'   ,'phone'=>'0798406304'));

$na= "toto";
$pa= "toto123%^";
$ph= "0798406304";

$te=array('user'=>'hana', 'password'=> 'hana123$%^&');
$on=array('tot','toto123%^&', 'user','0798406304');
$a= array('user','password','role','phone');

$c= array('user'=> $on[0] ,'password'=> $on[1] ,'role'=>$on[2], 'phone'=> $on[3] );

$mix[] = $c;

// echo "<pre>";
// print_r($c);
// print_r($mix);


// $ee= array_intersect_assoc($te,$mix);
// print_r($ee);

// echo "<pre>";

// unset($mix[0]);
// print_r($mix);

?>
if (!isset($_SESSION['username'])) {
    if (!is_array($_SESSION)) {
        $_SESSION = [];
    }
    $_SESSION['username'] = $username;
}



