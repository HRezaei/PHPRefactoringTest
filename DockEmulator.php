<?php

class DuckEmulator
{
 /**
 * @var int $type
 */
    protected $type;
    public static $DECOY_DUCK = 0;
    public static $MALLARD_DUCK = 1;
    public static $RUBBER_DUCK = 2;
    public static $RED_HEAD_DUCK = 3;
    public function __construct($type)
    {
        $this->type = $type;
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
    public function fly()
    {
        if ($this->type == self::$RUBBER_DUCK || $this->type == self::$DECOY_DUCK) {
            echo $this->getTypeString() . " can't fly!";
        } else {
            echo $this->getTypeString() . " is flying";
        }
    }
    public function quack()
    {
        if ($this->type == self::$RUBBER_DUCK) {
            echo $this->getTypeString() . " says: Squeak!";
        } elseif ($this->type == self::$DECOY_DUCK) {
            echo $this->getTypeString() . " is always silent!";
        } else {
            echo $this->getTypeString() . " says: Quack! Quack!";
        }
    }
}
/**
* Sample
*/
$duck = new DuckEmulator(DuckEmulator::$MALLARD_DUCK);
$duck->fly();
