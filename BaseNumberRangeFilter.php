<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BaseNumberRangeFilter
 *
 * @author nadeera
 */
class BaseNumberRangeFilter {
    
    /**
     * 
     * @param number $startingNumber
     * @param number $endingNumber
     * @return boolean
     */
    public function isValidNumberRange($startingNumber, $endingNumber){
        if ($startingNumber != null && $endingNumber != null && ($startingNumber<=$endingNumber)) {
            return true;
        }
        return false;
    }
}
