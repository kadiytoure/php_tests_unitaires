<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace tests;

/**
 * Description of PremierTest
 * Par défaut, classes de test => un nom & un nom de fichier
 * se terminant par Test.php pour être reconnus par PHPunit
 *
 * @author toure
 */
class PremierTest extends \PHPUnit\Framework\TestCase{
    private $compteur;
    
    /**
     * Méthode pour mettre en place l'environnement de test.
     * Déclenchée avant chaque test de classe;
     */
    
    protected function setUp() {
        $this->compteur = 0;
    }
    /**
     * La méthode tearDown=>détruit le fichier, déclenchée 
     * après chaque test de la classe;
     */
    
    protected function tearDown(){
        
    }
    /**
     * chaque méthode par défaut est sensé commencer par test;
     */
    public function testPremier() {
        $this->assertEquals(true,true);
    }
        
    
    
    public function testIncrementCompteur(){
        $this->compteur++;
        $this->assertEquals(1, $this->compteur);
    }
    
    public function testDEcrementCompteur(){
        $this->compteur--;
        $this->assertEquals(-1, $this->compteur);
    }
    
}
