<?php
    class PingPongGenerator
    {
        function generatePingPongArray($input)
        {
            $result = strval($input);
            return $result;

            /*$count = 0;
            $result = array();
            while($count <= $input) {
                array_push($result, strval($count));
                $count++;
            }
            return $result;*/
        }
    }
?>
