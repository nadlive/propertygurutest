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
require_once './BaseNumberRangeFilter.php';

class FizzBuzzFilter extends BaseNumberRangeFilter{

    public function showResult($startingNumber, $endingNumber) {

        if ($this->isValidNumberRange($startingNumber, $endingNumber)) {
            $numberRangeFilterOne = new NumberRangeFilterOne();

            $finalString = null;
            for ($number = $startingNumber; $number <= $endingNumber; $number++) {

                $fizzFilter = new FizzFilterAlgorithemDecorator($numberRangeFilterOne, $number);
                $buzzFilter = new BuzzFilterAlgorithemDecorator($fizzFilter, $number);
                $resultString = $buzzFilter->showResult();

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