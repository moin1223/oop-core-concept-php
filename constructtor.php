<?php
class person
{

    public $name, $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;

    }

    public function show()
    {
        echo "name:" . $this->name . "_" . "age:" . $this->age;
        
    }

}

$p1 = new person('moin uddin', 24);
$p1->show();
$p2 = new person('anis uddin', 22);
$p2->show();
