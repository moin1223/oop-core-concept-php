<?php
class calculation{

    public $a, $b, $c;

    function sum()
    {
        $this->c = $this->a + $this->b;

        return $this->c;
    }
}

$c1 = new calculation();
$c1->a = 40;
$c1->b = 40;
echo $c1->sum();

?>
    

