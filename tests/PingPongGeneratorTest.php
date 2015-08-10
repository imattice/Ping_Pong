<?php

    require_once "src/PingPongGenerator.php";

    class PingPongGeneratorTest extends PHPUnit_Framework_TestCase
    {
        //Convert number to string
        //input -> 1
        //output -> "1"
        /*function test_generatePingPongArray_one()
        {
            //Arrange
            $test_PingPongGenerator = new PingPongGenerator;
            $input = 1;

            //Act
            $result = $test_PingPongGenerator->generatePingPongArray($input);

            //Assert
            $this->assertEquals(1, $result);

        }*/

        //User enters 2
        //input -> 2
        //output -> 1, 2
        function test_generatePingPongArray_two()
        {
            //Arrange
            $test_PingPongGenerator = new PingPongGenerator;
            $input = 2;
            //Act
            $result = $test_PingPongGenerator->generatePingPongArray($input);

            //Assert
            $this->assertEquals(array(/*"1", "2"*/ 1, 2), $result);
        }

        //User enters 3
        //input -> 3
        //output -> 1 2 ping
        function test_generatePingPongArray_three()
        {
            //Arrange
            $test_PingPongGenerator = new PingPongGenerator;
            $input = 3;

            //Act
            $result = $test_PingPongGenerator->generatePingPongArray($input);

            //Assert
            $this->assertEquals(array(1, 2, "Ping"), $result);
        }

        //User enters 5
        //input -> 5
        //output -> 1 2 ping 4 pong
        function test_generatePingPongArray_five()
        {
            //Arrange
            $test_PingPongGenerator = new PingPongGenerator;
            $input = 5;

            //Act
            $result = $test_PingPongGenerator->generatePingPongArray($input);

            //Assert
            $this->assertEquals(array(1, 2, "Ping", 4, "Pong"), $result);
        }

        //User enters 15
        //input -> 15
        //output -> 1 2 ping 4 pong ping 7 8 ping pong 11 ping 13 14 pingpong

        //User enters 0
        //input -> 0
        //output -> dingdong

        //User enters a letter or other charactor
        //input -> a
        //output -> flingflong

        //User enters -1
        //input -> -1
        //output -> singsong

        //User enters nothing
        //input ->
        //output -> bingbong
    }
?>
