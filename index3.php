<?php
function sum($num) {
     return $num * 2;
}

echo sum(100);

function add($a,$b){
    return $a + $b;
}

echo add(2,5);

function product($arr){
    $result = 0;
    for ($i = 0; $i < count($arr); $i++) {
        if($i == 0){
            $result += $arr[$i];
        }else{
            $result *= $arr[$i];
        }
    }
    return $result;
    $result = $arr[0]; 
    for ($i = 1; $i < count($arr); $i++) {
            $result *= $arr[$i];
    }
    return $result;
}
echo product(array(1, 3, 5 ,7, 9));

function max_array($arr){
    // とりあえず配列の最初の要素を一番大きい値とする
     $max_number = $arr[0];
     foreach($arr as $a){
         if($max_number < $a){
             $max_number = $a;
         }
     }
    
     return $max_number;
     }
     
     echo max_array(array(6, 2, 3, 10, 5));

     $text = '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>';
     echo strip_tags($text);
     echo "\n";
     echo strip_tags($text, '<p><a>');
     
$stack = array("orange", "banana");
 array_push($stack, "apple", "raspberry");
 print_r($stack);

 $array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
 $result = array_merge($array1, $array2);
 print_r($result);

 date_default_timezone_set('UTC');
echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000));
echo date('c', mktime(1, 2, 3, 4, 5, 2006));

echo date('l \t\h\e jS');
?>
