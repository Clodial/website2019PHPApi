<?php

use PHPUnit\Framework\TestCase;

class TestTest extends TestCase{

    public function testSendBasicDataForId(){

        $testClass = new Test();
        $this->assertInstanceOf(
            $testClass, Test()
        ) ;

    }

} 

?>