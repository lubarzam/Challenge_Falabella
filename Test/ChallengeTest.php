<?php
require_once('../Source/Challenge.php');

use PHPUnit\Framework\TestCase;


class ChallengeTest extends TestCase{
    
    public function testPrintResult(){

        
     	$challenge=new Challenge();

     	$result='<ul>';

     	for ($i=1; $i <=100 ; $i++) { 

     		switch ($i) {
     			case $i%15==0:
     				
     				$result = $result.'<li>Integraciones</li>';
     				break;
     			case $i%5==0:
     				$result = $result.'<li>IT</li>';
     				break;
     			case $i%3==0:
     				$result = $result.'<li>Falabella</li>';
     				break;


     			default:
     				$result = $result.'<li>'.$i.'</li>';
     				break;
     		}
     	}

		$result=$result.'</ul>';

        $this->assertEquals($result, $challenge->printResult(1,100));
    }

    public function testCheckValueToPrint(){

    
	 	$challenge=new Challenge();


	    $this->assertEquals(8, $challenge->checkValueToPrint(8));
	    $this->assertEquals('Integraciones', $challenge->checkValueToPrint(45));
	    $this->assertEquals('Falabella', $challenge->checkValueToPrint(18));
	    $this->assertEquals('IT', $challenge->checkValueToPrint(25));
 	
 	}


    public function testCheckMultiple(){

    
	 	$challenge=new Challenge();


	    $this->assertFalse($challenge->checkMultiple(8,3));
	    $this->assertFalse($challenge->checkMultiple(1,5));
	    $this->assertTrue($challenge->checkMultiple(60,15));
	    $this->assertTrue($challenge->checkMultiple(20,5));
	    $this->assertFalse($challenge->checkMultiple(20,17));

	    
 	
 	}


    public function testGetWord(){

    
	 	$challenge=new Challenge();


	    $this->assertEquals('Falabella', $challenge->getWord(3));
	    $this->assertEquals('IT', $challenge->getWord(5));
	    $this->assertEquals('Integraciones', $challenge->getWord(15));
	    $this->assertEquals(false, $challenge->getWord(30));
	    $this->assertEquals(false, $challenge->getWord(8));
	    
	    
 	
 	}



}
?>
