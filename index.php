<?php
echo "<pre>";

// Pattern 1
echo html_entity_decode("<h1>Pattern 1</h1>");
for($i=1;$i<6;$i++) {
    for($j=(6-$i);$j<6;$j++) {
        echo "*";
    }
    echo "<br>";
}

// Pattern 2
echo str_repeat("<br>", 5);
echo html_entity_decode("<h1>Pattern 2</h1>");
for($i=1;$i<6;$i++) {
    for($j=6-(6-$i);$j<6;$j++) {
        echo "*";
    }
    echo "<br>";
}

// Pattern 3
echo str_repeat("<br>", 5);
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

// Pattern 4
echo str_repeat("<br>", 5);
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

// Pattern 5: Inverted Right-Angle Triangle (Right-Aligned)
echo str_repeat("<br>", 5);
echo html_entity_decode("<h1>Pattern 5</h1>");
for($i=5;$i>=1;$i--) {
    for($j=1;$j<=5-$i;$j++) {
        echo " ";
    }
    for($k=1;$k<=$i;$k++) {
        echo "*";
    }
    echo "<br>";
}

// Pattern 6: Pyramid
echo str_repeat("<br>", 5);
echo html_entity_decode("<h1>Pattern 6</h1>");
for($i=1;$i<=5;$i++) {
    for($j=1;$j<=5-$i;$j++) {
        echo " ";
    }
    for($k=1;$k<=(2*$i-1);$k++) {
        echo "*";
    }
    echo "<br>";
}

// Pattern 7: Diamond
echo str_repeat("<br>", 5);
echo html_entity_decode("<h1>Pattern 7</h1>");
$n = 5;
for($i=1;$i<=$n;$i++) {
    for($j=1;$j<=$n-$i;$j++) {
        echo " ";
    }
    for($k=1;$k<=(2*$i-1);$k++) {
        echo "*";
    }
    echo "<br>";
}
for($i=$n-1;$i>=1;$i--) {
    for($j=1;$j<=$n-$i;$j++) {
        echo " ";
    }
    for($k=1;$k<=(2*$i-1);$k++) {
        echo "*";
    }
    echo "<br>";
}

// Pattern 8: Hollow Square
echo str_repeat("<br>", 5);
echo html_entity_decode("<h1>Pattern 8</h1>");
$size = 5;
for($i=1;$i<=$size;$i++) {
    for($j=1;$j<=$size;$j++) {
        if($i==1 || $i==$size || $j==1 || $j==$size) {
            echo "*";
        } else {
            echo " ";
        }
    }
    echo "<br>";
}

// Pattern 9: Doughnut Shape
echo str_repeat("<br>", 5);
echo html_entity_decode("<h1>Pattern 9: Doughnut</h1>");
$rows = 9;
$cols = 17;
$radius = 4;
$thickness = 1.5; // thickness of the ring
$centerX = $cols / 2;
$centerY = $rows / 2;

for ($y = 0; $y < $rows; $y++) {
    for ($x = 0; $x < $cols; $x++) {
        $dx = $x - $centerX;
        $dy = $y - $centerY;
        $distance = sqrt($dx*$dx + $dy*$dy);
        if ($distance >= $radius - $thickness && $distance <= $radius + $thickness) {
            echo "*";
        } else {
            echo " ";
        }
    }
    echo "<br>";
}

echo "</pre>";
?>
