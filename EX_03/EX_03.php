<?php


class Sensor
{
    private string $_operacion;

    function __construct()
    {
        $this->_operacion = "+0";
    }

    function getValue()
    {
        return $this->getOperation(rand(0, 4095));
    }

    public function setOperation($str)
    {
        $this->_operacion = $str;
    }

    private function getOperation($valor)
    {
        //$operacion = '+300/150';
        $result = 0;
        eval("\$result = " . ($valor . $this->_operacion) . ";");
        return $result;
    }
}

class Producto
{


    public Sensor $sensor1;
    public Sensor $sensor2;
    public Sensor $sensor3;
    public Sensor $sensor4;
    public Sensor $sensor5;

    function __construct()
    {
        $this->sensor1 = new Sensor();
        $this->sensor2 = new Sensor();
        $this->sensor3 = new Sensor();
        $this->sensor4 = new Sensor();
        $this->sensor5 = new Sensor();
    }


}

$v = new Producto();
echo $v->sensor1->getValue() . "</br>";
$v->sensor1->setOperation("*100");

echo $v->sensor2->getValue() . "</br>";
$v->sensor2->setOperation("/100");

echo $v->sensor3->getValue() . "</br>";
$v->sensor3->setOperation("-30");

echo $v->sensor4->getValue() . "</br>";
$v->sensor4->setOperation("/2");

echo $v->sensor5->getValue() . "</br>";
$v->sensor5->setOperation("</31");



