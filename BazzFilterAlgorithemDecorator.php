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

class BazzFilterAlgorithemDecorator implements InterfaceNumberRangeFilter {

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
    public function __construct(InterfaceNumberRangeFilter $algorithem, $number) {
        $this->algorithem = $algorithem;
        $this->number = $number;
    }

    /**
     * 
     * @return string
     */
    public function showResult() {
        
        $returnValue = $this->algorithem->showResult();
        if ($this->number != null) {
            
            /**
             * if number range is negative then accordingly it should consider
             * the previous two values
             */
            if($this->number < 0){
                $previousNumber = $this->number + 1;
                $previousPreviousNumber = $previousNumber + 1;
            } else {
                $previousNumber = $this->number - 1;
                $previousPreviousNumber = $previousNumber - 1;
            }

            if ((($previousNumber) % 5 == 0 || ($previousNumber) % 3 == 0) && (($previousPreviousNumber) % 5 == 0 || ($previousPreviousNumber) % 3 == 0)) {
                return $returnValue . " Bazz";
            }
        }

        return $returnValue;
    }

}
