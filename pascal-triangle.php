<?php

// Pascal function  
function printPascal($n)  
{  
    for($line = 1; $line <= $n; $line++)  
    {  
        // Enable this lines to get the trianle with spaces as below
        /*
                            1
                        1       1
                    1       2       1
                1       2       3       1
            1       2       3       4       1
        */
        // for ($j = $n - $line; $j >= 1; $j--) {
        //     echo "&nbsp;&nbsp;";
        // }

        /*
            1
            1   1
            1   2   1
            1   2   3   1
            1   2   3   4   1
        */
        $C = 1;// used to represent C(line, i)  
        for($i = 1; $i <= $line; $i++)  
        {
            // The first value in a line is always 1  
            echo $C . "&nbsp;&nbsp;";  
            $C = $C * ($line - $i) / $i;  
        }
       
        echo "<br/>";  
    }  
}

printPascal(5);