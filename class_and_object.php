<?php
class calculation{
    public $a,$b,$c;

    function sub(){
        $this->c = $this->a + $this->b;
        return $this->c;
    }
}
$c1 = new calculation();
$c1->a = 10;
$c1->b = 10;
echo $c1->sub();


?>

    

