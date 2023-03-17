<?php

class employee{

    public $name, $salary;
    function __construct($name, $salary){
        $this->name = $name;
        $this->salary = $salary;

    }
    function info()
    {
        echo "<h1>Employee Profile:</h1>";
        echo "Employee Name: ". $this->name ."<br>";
        echo "Employee Salary: ". $this->salary ."<br>";

    }

}


class manager extends employee{
    public $phone = 1000;
    public $travel = 3000;

    public $totalSalary;

    function info()

    {
        $totalSalary = $this->salary + $this->phone + $this->travel;

        echo "<h1>Manager Profile:</h1>";
        echo "Employee Name: ". $this->name ."<br>";
        echo "Employee Salary: ". $totalSalary ."<br>";

    }
}


$employee1 = new employee("mimfa", 2000);
$employee1->info();

$employee2 = new manager("nayeem", 5000);
$employee2->info();



?>