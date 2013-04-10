<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FizzBuzzFilter
 *
 * @author nadeera
 */
require_once './BuzzFilterAlgorithemDecorator.php';
require_once './NumberRangeFilterOne.php';
require_once './FizzFilterAlgorithemDecorator.php';
require_once './BazzFilterAlgorithemDecorator.php';
require_once './BaseNumberRangeFilter.php';

class FizzBuzzBazzFilter extends BaseNumberRangeFilter {

    /**
     * 
     * @param number $startingNumber
     * @param number $endingNumber
     * @return string|boolean
     */
    public function showResult($startingNumber, $endingNumber) {

        if ($this->isValidNumberRange($startingNumber, $endingNumber)) {
            $numberRangeFilterOne = new NumberRangeFilterOne();

            $finalString = null;
            for ($number = $startingNumber; $number <= $endingNumber; $number++) {

                $fizzFilter = new FizzFilterAlgorithemDecorator($numberRangeFilterOne, $number);
                $buzzFilter = new BuzzFilterAlgorithemDecorator($fizzFilter, $number);
                $bassFilter = new BazzFilterAlgorithemDecorator($buzzFilter, $number);

                $resultString = $bassFilter->showResult();

                if (strlen(trim($resultString)) == 0) {
                    $finalString = $finalString . " " . $number;
                } else {
                    $finalString = $finalString . $resultString;
                }
            }
            
            echo $finalString;
            return $finalString;
        } else {
            return false;
        }
    }
}
