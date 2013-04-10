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
require_once 'FizzBuzzFilter.php';
require_once 'FizzBuzzBazzFilter.php';


class NumberRangeFilterTest extends PHPUnit_Framework_TestCase {
    
    public function testBuzzFizzShowResult(){
       $numberRangeFizBuzz = new FizzBuzzFilter();
       $expected = " Fizz 13 14 Fizz Buzz 16";
       $this->assertEquals($expected,$numberRangeFizBuzz->showResult(12,16));
    }
    
    public function testBuzzFizzShowResultWithNegativeInputs(){
        $numberRangeFizBuzz = new FizzBuzzFilter();
        $expected = " -1 Fizz Buzz 1 2 Fizz 4 Buzz Fizz 7 8 Fizz Buzz 11 Fizz 13 14 Fizz Buzz 16";
        $this->assertEquals($expected,$numberRangeFizBuzz->showResult(-1,16));
    }
    
    public function testBuzzFizzShowResultWithOneNullInputs(){
        $numberRangeFizBuzz = new FizzBuzzFilter();
        $this->assertFalse($numberRangeFizBuzz->showResult(null,16));
    }
    
    public function testBuzzFizzShowResultWithBothNullInputs(){
        $numberRangeFizBuzz = new FizzBuzzFilter();
        $this->assertFalse($numberRangeFizBuzz->showResult(null,null));
    }
    
    public function testBuzzFizzShowBothInputsAreSame(){
        $numberRangeFizBuzz = new FizzBuzzFilter();
        $expected = " 1";
        $this->assertEquals($expected, $numberRangeFizBuzz->showResult(1,1));
    }
    
    public function testBuzzFizzShowResultStartGreaterThanEndValue(){
        $numberRangeFizBuzz = new FizzBuzzFilter();
        $this->assertFalse($numberRangeFizBuzz->showResult(100,1));
    }

    
    public function testBuzzFizzBazzShowResult(){
       $numberRangeFizBuzz = new FizzBuzzBazzFilter();
       $expected = " 4 Buzz Fizz Bazz 8 Fizz Buzz Bazz";
      // $this->assertEquals($expected,$numberRangeFizBuzz->showResult(4,11));
    }
    
    public function testBuzzFizzBazzShowResultWithNegativeInputs(){
        $numberRangeFizBuzz = new FizzBuzzBazzFilter();
        $expected = " -1 Fizz Buzz 1 2 Fizz 4 Buzz Fizz Bazz 8 Fizz Buzz Bazz Fizz 13 14 Fizz Buzz 16";
        $this->assertEquals($expected,$numberRangeFizBuzz->showResult(-1,16));
    }
    
    public function testBuzzFizzBassShowResultWithOneNullInputs(){
        $numberRangeFizBuzz = new FizzBuzzBazzFilter();
        $this->assertFalse($numberRangeFizBuzz->showResult(null,16));
    }
    
    public function testBuzzFizzBazzShowResultWithBothNullInputs(){
        $numberRangeFizBuzz = new FizzBuzzBazzFilter();
        $this->assertFalse($numberRangeFizBuzz->showResult(null,null));
    }
    
    public function testBuzzFizzBazzShowBothInputsAreSame(){
        $numberRangeFizBuzz = new FizzBuzzBazzFilter();
        $expected = " 1";
        $this->assertEquals($expected, $numberRangeFizBuzz->showResult(1,1));
    }
    
    public function testBuzzFizzBazzShowResultStartGreaterThanEndValue(){
        $numberRangeFizBuzz = new FizzBuzzFilter();
        $this->assertFalse($numberRangeFizBuzz->showResult(100,1));
    }
}