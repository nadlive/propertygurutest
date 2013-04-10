<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FizzFilterAlgorithem
 *
 * @author nadeera
 */
class FizzFilterAlgorithemDecorator implements InterfaceNumberRangeFilter {
    
    private $algorithem;
    private $number;
     
    public function __construct(InterfaceNumberRangeFilter $algorithem, $number){
        $this->algorithem = $algorithem;
        $this->number = $number;
    }
     
    public function showResult(){
        $returnValue = $this->algorithem->showResult();

        if($this->number != null && $this->number%3 == 0 ){
            return $returnValue." Fizz";
        }
       
        return $returnValue;
    }
    
}
