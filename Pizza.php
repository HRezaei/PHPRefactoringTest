<?php

/** 
 * @author hrezaei
 * 
 */


interface PizzaInterface
{
    public function prepare();
    public function bake();
    public function cut();
    public function box();
}


abstract class BasicPizza implements PizzaInterface
{

    /**
     */
    public function __construct()
    {
        
        // TODO - Insert your code here
    }
    
    public function bake() {
        // TODO - Insert the code that is said to be identical for all types;
    }
    
    public function cut() {
        // TODO - Insert the code that is said to be identical for all types;
    }
    

}


class CheesePizza extends BasicPizza
{
    public function prepare() {
        ;
    }
    
    public function box() {
        ;
    }
}


class GreekPizza extends BasicPizza
{
    public function prepare() {
        ;
    }
    
    public function box() {
        ;
    }
}


class PepperoniPizza extends BasicPizza
{
    public function prepare() {
        ;
    }
    
    public function box() {
        ;
    }
}


class CalmPizza extends BasicPizza
{
    public function prepare() {
        ;
    }
    
    public function box() {
        ;
    }
}

class PizzaStore
{
    public function orderPizza($type)
    {
        if ($type == "cheese") {
            $pizza = new CheesePizza();
        } elseif ($type == "pepperoni") {
            $pizza = new PepperoniPizza();
        } elseif ($type == "calm") {
            $pizza = new CalmPizza();
        } elseif ($type == "greek") {
            $pizza = new GreekPizza();
        }
        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();
        return $pizza;
    }
}


$store = new PizzaStore();
$store->orderPizza('greek');
