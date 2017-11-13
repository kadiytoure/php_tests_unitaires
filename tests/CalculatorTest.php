<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace tests;

/**
 * Description of CalculatorTest
 *
 * @author toure
 */
class CalculatorTest extends TestCase {
    private $instance;
   /**
    * tester chaque scénario possible pour chaque méthode
    */
    
    /*
}
    
    protected function setUp(){
        $this->compteur = 0;
    }
    
    protected function tearDown(){
        
    }
    
    public function testPremier(){
        $this->assertEquals(true,true);
     */
    /*
    public function testPremier(){
       $this->assertEquals(true,true);
       }
       
    public function testRandom(){
        $calculette = new \premier\Calculator();
        $calculette->add(1,1);
    }
    
    public function testDelete(){
        $calculette = new \premier\Calculator();
        $this->assertTrue($calculette->delete(1,1));
    }
     
     */
    
    /*
    public function testmultiply(){
        $calculette = new \premier\Calculator();
        $calculette->multiply(1,1);
    }
    
    public function testdivide(){
        $calculette = new \premier\Calculator();
        $calculette->divide(1,1);
    }
     
     */
    protected function setUp(){
        $this->instance = new Calculator();
    }
    
    public function testAddSuccess() {
        $this->assertEquals(4, $this->instance->add(2,2));
    }
    
    public function testAddNegativeSuccess(){
        $this->assertEquals(0, $this->instance->add(2, -2));
    }
    
    public function testAddWithString() {
        $result = $this->instance->add(2, 'bloup');
        $
    }
}
