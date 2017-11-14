<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace tests;
require_once './first/Calculator.php';
require_once './first/Account.php';

/**
 * Description of AccountTest
 *
 * @author toure
 */
class AccountTest extends \PHPUnit\Framework\TestCase {
    //put your code here
    private $instance;
    
    protected function setUp(){
    //    $mock = $this->createMock(\premier\Calculator::class);
        
    //    $mock->method('multiply')->willReturn(10);
    //    $mock->method('substract')->willReturn(5);
        
        $mock = $this->getMockBuilder(Calculator::class)
                     ->getMock();
        $mock->expects($this->once())
               ->method('multiply')
               ->with(1000,0.25)
               ->willReturn(10);
        
        $mock->expects($this->once())
                ->method('substract')
                ->with(100, 10)
                ->willReturn(995);
        
        $this->instance = new Account($mock);
    }
    
    public function testGetSalary() {
        $result = $this->instance->getSalary(1000);
        $this->assertEquals($result, 995);
    }
}
