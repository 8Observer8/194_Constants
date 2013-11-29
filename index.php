<?php

class Circle {
    const pi = 3.141;
    
    public function Area($radius) {
        return self::pi * ($radius*$radius);
    }
}

$circle = new Circle;
echo 'Area = '.$circle->Area(100).'<br />';
echo $circle::pi.'<br />';

echo Circle::pi.'<br />';

/* Output
Area = 31410
3.141
3.141
*/
?>
