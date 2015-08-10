<?php
    class PingPongGenerator
    {
        function generatePingPongArray($input)
        {
            $count = 1;
            $result = array();
            while ($count <= $input) {
            array_push($result, /*strval($count)*/ $count);
                ++$count;
            }
            return $result;
        }
    }
?>
