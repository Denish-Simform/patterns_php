<?php
echo "<pre>";
    echo html_entity_decode("<h1>Pattern 1</h1>");
    for($i=1;$i<6;$i++) {
        for($j=(6-$i);$j<6;$j++) {
            echo "*";
        }
        echo "<br>";
    }

    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";

    echo html_entity_decode("<h1>Pattern 2</h1>");
    for($i=1;$i<6;$i++) {
        for($j=6-(6-$i);$j<6;$j++) {
            echo "*";
        }
        echo "<br>";
    }

    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";

    echo html_entity_decode("<h1>Pattern 3</h1>");
    for($i=1;$i<6;$i++) {
        for($j=1;$j<6;$j++) {
            if($j >= (6-$i)) {
                echo "*";
            } else {
                echo " ";
            }
        }
        echo "<br>";
    }
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";

    echo html_entity_decode("<h1>Pattern 4</h1>");
    for($i=1;$i<4;$i++) {

        for($j=1;$j<$i;$j++) {
            echo " ";
        }

        for($k=6-$i-($i-1);$k>0;$k--) {
            echo "*";         
        }
        echo "<br>";
    }
    echo " ";
    for($i=3;$i<6;$i+=2) {

        for($k=0;$k<$i;$k++) {
            echo "*";         
        }
        echo "<br>";
    }
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";

echo "</pre>";

?>