<!-- 
    Task
1 - Define a class called Person.
2 -  Inside the Person class, declare (but do not define) the two public properties, called $first_name and $last_name respectively.
3 - Define a class constructor which accepts exactly two arguments in the following order, $first_name and $last_name. The argument $first_name should be stored into the $first_name property of the object being instantiated and the $last_name argument should be stored into the $last_name property of the object.
4 - Define a public method called get_full_name which accepts no arguments and returns the full name of the individual in the following format: "FIRST_NAME LAST_NAME". Please note that if the properties ($first_name and/or $last_name) of said object is modified after it is instantiated, 
5 -  your method get_full_name should return the updated full name, not the original full name of the individual. -->

<?php
class President { 
  public $name = "Barack Obama";
  public function greet($name){ 
    return "Hello $name, my name is Barack Obama, nice to meet you!";
  }
}
$us_president = new President;
$president_name = $us_president->name;
$greetings_from_president = $us_president->greet("Donald");
?>