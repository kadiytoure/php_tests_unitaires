<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace first;

/**
 * Description of Account
 *
 * @author toure
 */
class Account {
    //put your code here
    private $calculator;
    
    public function __construct(Calculator $calc) {
        $this->calculator = $calc;
    }
    
    public function getSalary($brute) {
        $net = $this->calculator->multiply($brute, 0.25);
        $net = $this->calculator->substract($brute, $cotisation);
        return $net;
    }
}
