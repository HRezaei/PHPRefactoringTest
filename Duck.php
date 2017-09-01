<?php


interface DuckInterface
{
    public function fly();
    public function quack();
}

Abstract class BasicDuck implements DuckInterface
{
    protected $type;
    public static $DECOY_DUCK = 0;
    public static $MALLARD_DUCK = 1;
    public static $RUBBER_DUCK = 2;
    public static $RED_HEAD_DUCK = 3;

    public function __construct($type) {
        $this->type = $type;
    }
    
    public function fly() 
    {
        echo $this->getTypeString() . " can't fly!<br/>";
    }

    public function quack() 
    {
        echo $this->getTypeString() . " says: Quack! Quack!<br/>";
    }

    public function getTypeString()
    {
        switch ($this->type) {
            case self::$MALLARD_DUCK:
                return "Mallard duck";
            case self::$DECOY_DUCK:
                return "Decoy duck";
            case self::$RED_HEAD_DUCK:
                return "Red head duck";
            case self::$RUBBER_DUCK:
                return "Rubber duck";
            default:
                throw new InvalidArgumentException("Invalid duck type");
        }
    }
}


class MallardDuck extends BasicDuck
{
    public function fly()
    {
        echo $this->getTypeString() . " is flying<br/>";
    }
}

class RedHeadDuck extends BasicDuck 
{
    public function fly()
    {
        echo $this->getTypeString() . " is flying<br/>";
    }
}

class DecoyDuck extends BasicDuck
{
    public function quack() {
        echo $this->getTypeString() . " is always silent!<br/>";
    }
}

class RubberDuck extends BasicDuck
{
    public function quack() {
        echo $this->getTypeString() . " says: Squeak!<br/>";
    }
}

class DuckFactory 
{
    public static function Emlulate($type) {
        switch ($type) {
            case BasicDuck::$MALLARD_DUCK:
                return  new MallardDuck($type);
            case BasicDuck::$DECOY_DUCK:
                return  new DecoyDuck($type);
            case BasicDuck::$RED_HEAD_DUCK:
                return new RedHeadDuck($type);
            case BasicDuck::$RUBBER_DUCK:
                return new RubberDuck($type);
            default:
                throw new InvalidArgumentException("Invalid duck type");
        }
    }
}



/**
* Sample
*/
$duck = DuckFactory::Emlulate(BasicDuck::$DECOY_DUCK);
$duck->fly();
$duck->quack();

$duck = DuckFactory::Emlulate(BasicDuck::$RED_HEAD_DUCK);
$duck->fly();
$duck->quack();

$duck = DuckFactory::Emlulate(BasicDuck::$RUBBER_DUCK);
$duck->fly();
$duck->quack();

$duck = DuckFactory::Emlulate(BasicDuck::$MALLARD_DUCK);
$duck->fly();
$duck->quack();