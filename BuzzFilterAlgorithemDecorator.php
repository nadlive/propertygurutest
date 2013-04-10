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

require_once './InterfaceNumberRangeFilter.php';
require_once './NumberRangeFilterOne.php';

class BuzzFilterAlgorithemDecorator implements InterfaceNumberRangeFilter {
    
    /**
     *
     * @var InterfaceNumberRangeFilter 
     */
    private $algorithem;
    private $number;
    
    /**
     * 
     * @param InterfaceNumberRangeFilter $algorithem
     * @param type $number
     */
    public function __construct(InterfaceNumberRangeFilter $algorithem, $number){
        $this->algorithem = $algorithem;
        $this->number = $number;
       
    }
     
    /**
     * 
     * @return string
     */
    public function showResult(){
        $returnValue = $this->algorithem->showResult();
        if( $this->number != null && $this->number%5 == 0 ){
            return $returnValue." Buzz";
        }
        return $returnValue;
    }
    
}
