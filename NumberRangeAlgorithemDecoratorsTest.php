<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of NumberRangeFilterTest
 *
 * @author nadeera
 */

//require_once 'PHPUnit.php';
require_once 'PHPUnit/Autoload.php';
require_once './BuzzFilterAlgorithemDecorator.php';
require_once './FizzFilterAlgorithemDecorator.php';


class NumberRangeAlgorithemDecoratorsTest extends PHPUnit_Framework_TestCase {
    
    public function testBuzzFilterAlgorithem(){
       $baseEmpyAlgorithem = new NumberRangeFilterOne();
       $buzzFilterAlgorithem = new BuzzFilterAlgorithemDecorator($baseEmpyAlgorithem, 3);
       $this->assertEquals('', $buzzFilterAlgorithem->showResult());
    }
    
    public function testBuzzFilterAlgorithem1(){
       $baseEmpyAlgorithem = new NumberRangeFilterOne();
       $buzzFilterAlgorithem = new BuzzFilterAlgorithemDecorator($baseEmpyAlgorithem, 5);
       $this->assertEquals(' Buzz', $buzzFilterAlgorithem->showResult());
    }
    
    public function testBuzzFilterAlgorithem2(){
       $baseEmpyAlgorithem = new NumberRangeFilterOne();
       $buzzFilterAlgorithem = new BuzzFilterAlgorithemDecorator($baseEmpyAlgorithem, 15);
       $this->assertEquals(' Buzz', $buzzFilterAlgorithem->showResult());
    }
    
    public function testBuzzFilterAlgorithem3(){
       $baseEmpyAlgorithem = new NumberRangeFilterOne();
       $buzzFilterAlgorithem = new BuzzFilterAlgorithemDecorator($baseEmpyAlgorithem, -1);
       $this->assertEquals('', $buzzFilterAlgorithem->showResult());
    }
    
    public function testBuzzFilterAlgorithem4(){
       $baseEmpyAlgorithem = new NumberRangeFilterOne();
       $buzzFilterAlgorithem = new BuzzFilterAlgorithemDecorator($baseEmpyAlgorithem, -5);
       $this->assertEquals(' Buzz', $buzzFilterAlgorithem->showResult());
    }
    
    public function testBuzzFilterAlgorithem5(){
       $baseEmpyAlgorithem = new NumberRangeFilterOne();
       $buzzFilterAlgorithem = new BuzzFilterAlgorithemDecorator($baseEmpyAlgorithem, null);
       $this->assertEquals('', $buzzFilterAlgorithem->showResult());
    }
    
    public function testBuzzFilterAlgorithem6(){
       $baseEmpyAlgorithem = new NumberRangeFilterOne();
       $buzzFilterAlgorithem = new BuzzFilterAlgorithemDecorator($baseEmpyAlgorithem, 2);
       $this->assertEquals('', $buzzFilterAlgorithem->showResult());
    }
    
    public function testBuzzFilterAlgorithem7(){
       $baseEmpyAlgorithem = new NumberRangeFilterOne();
       $buzzFilterAlgorithem = new BuzzFilterAlgorithemDecorator($baseEmpyAlgorithem, 5.55);
       $this->assertEquals(' Buzz', $buzzFilterAlgorithem->showResult());
    }
    
    
    public function testFuzzFilterAlgorithem(){
       $baseEmpyAlgorithem = new NumberRangeFilterOne();
       $buzzFilterAlgorithem = new FizzFilterAlgorithemDecorator($baseEmpyAlgorithem, 3);
       $this->assertEquals(' Fizz', $buzzFilterAlgorithem->showResult());
    }
    
    public function testFuzzFilterAlgorithem1(){
       $baseEmpyAlgorithem = new NumberRangeFilterOne();
       $buzzFilterAlgorithem = new FizzFilterAlgorithemDecorator($baseEmpyAlgorithem, 5);
       $this->assertEquals('', $buzzFilterAlgorithem->showResult());
    }
    
    public function testFuzzFilterAlgorithem2(){
       $baseEmpyAlgorithem = new NumberRangeFilterOne();
       $buzzFilterAlgorithem = new FizzFilterAlgorithemDecorator($baseEmpyAlgorithem, 2);
       $this->assertEquals('', $buzzFilterAlgorithem->showResult());
    }
    
    public function testFuzzFilterAlgorithem3(){
       $baseEmpyAlgorithem = new NumberRangeFilterOne();
       $buzzFilterAlgorithem = new FizzFilterAlgorithemDecorator($baseEmpyAlgorithem, -3);
       $this->assertEquals(' Fizz', $buzzFilterAlgorithem->showResult());
    }
    
    public function testFuzzFilterAlgorithem4(){
       $baseEmpyAlgorithem = new NumberRangeFilterOne();
       $buzzFilterAlgorithem = new FizzFilterAlgorithemDecorator($baseEmpyAlgorithem, -5);
       $this->assertEquals('', $buzzFilterAlgorithem->showResult());
    }
    
    public function testFuzzFilterAlgorithem5(){
       $baseEmpyAlgorithem = new NumberRangeFilterOne();
       $buzzFilterAlgorithem = new FizzFilterAlgorithemDecorator($baseEmpyAlgorithem, null);
       $this->assertEquals('', $buzzFilterAlgorithem->showResult());
    }
}