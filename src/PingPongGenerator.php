<?php
    class PingPongGenerator
    {
        function generatePingPongArray($input)
        {
            $count = 1;
            $result = array();
            while ($count <= $input) {
                if ($count % 3 == 0) {
                    array_push($result, "Ping");
                } else {
            array_push($result, /*strval($count)*/ $count);
                }
                ++$count;

            }
            return $result;
        }
    }
?>
