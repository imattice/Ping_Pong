<?php
    class PingPongGenerator
    {
        function generatePingPongArray($input)
        {
            $count = 1;
            $result = array();
            while ($count <= $input) {
                if (($count % 3 ==0) && ($count % 5 == 0)) {
                    array_push($result, "PingPong");
                } elseif ($count % 3 == 0) {
                    array_push($result, "Ping");
                } elseif ($count % 5 == 0) {
                    array_push($result, "Pong");
                } else {
                    array_push($result, /*strval($count)*/ $count);
                }
                ++$count;

            }
            return $result;
        }
    }
?>
