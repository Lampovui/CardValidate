<?php

class Card {

    public $sumNumber;
    function __construct($sumNumber = 0){
        $this->sumNumber=$sumNumber;
    }


public function validate($cardNumber) {

        $emit = $cardNumber[0] . $cardNumber[1];
//        echo $emit;

        $cardNumber = preg_replace('/\\s/u', '', $cardNumber);

        $visa = preg_match('/^4([0-9])|1(4){10}$/u', $emit, $matches);
        if ($visa) {
            echo 'Visa ';
        }
//        echo $visa;

        $masterCard = preg_match('/^5([1-5])|6(2)|6(7){10}$/u', $emit, $matches);
        if ($masterCard) {
            echo 'MasterCard ';
        }
//        echo $masterCard;

        for ($i = 0; $i < strlen($cardNumber); $i++) {
            $number = $cardNumber[$i];
            if ($i % 2 == 0) {
                $number = $number * 2;
                if ($number >= 10) {
                    $element = (string)$number;
                    $calc = (int)$element[0] + (int)$element[1];
                    $this->sumNumber += $calc;
                    //echo $calc;
                } else {
                    $this->sumNumber += $number;
                    //echo $number;
                }

            } else {
                $this->sumNumber += (int)$number;
                //echo $number;
            }

        }
//        echo $this->sumNumber;
        if ($this->sumNumber % 10 == 0) {
            echo 'Valid';
        } else {
            echo 'Invalid';
        }

    }


}