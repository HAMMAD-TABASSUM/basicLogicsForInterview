<?php

// number pattren
for($i=1; $i<6; $i++){
    for($j=0; $j<$i; $j++){
    echo $j;
}
    echo "<br>";
}
echo "<br>";
echo "<br>";
echo "<br>";

// star pattren
for($i=1; $i<6; $i++){
    for($j=0; $j<$i; $j++){
    echo "*";
}
    echo "<br>";
}
echo "<br>";
echo "<br>";
echo "<br>";

// star reverse pattren
for($i=5; $i>=1; $i--){
    for($j=0; $j<$i; $j++){
    echo "*";
}
    echo "<br>";
}
echo "<br>";
echo "<br>";
echo "<br>";

// number reverse pattren
for($i=5; $i>=1; $i--){
    for($j=0; $j<$i; $j++){
    echo $i;
}
    echo "<br>";
}
echo "<br>";
echo "<br>";
echo "<br>";

// number verticle reverse pattren
for($i=5; $i>=1; $i--){
    for($j=1; $j<=$i; $j++){
    echo $j;
}
    echo "<br>";
}
echo "<br>";
echo "<br>";
echo "<br>";

// star pyramid
$n=5;
for($i=1; $i<=$n; $i++){
    for($j=1; $j<=(2*$n)-1; $j++){
        if($j>=$n-($i-1) && $j<=$n+($i-1)){
            echo "*";
        }else{
            echo "&nbsp;&nbsp;";
        }
    }
    echo "<br>";
}
echo "<br>";
echo "<br>";
echo "<br>";

// name print

$name = "HAMMAD";
$str = strlen($name);
for($i=0; $i<$str; $i++){
    echo $str[$i];
    echo "<br>";
}

// slash line star
$n=5;
for($i=1; $i<=$n; $i++){
    for($j=1; $j<=$n; $j++){
        if($i==$j){
        echo "*";
        }else{
            echo "&nbsp;&nbsp;&nbsp;";
        }
    }
    echo "<br>";
}
echo "<br>";
echo "<br>";
echo "<br>";

// slash line star with 0
$n=5;
for($i=1; $i<=$n; $i++){
    for($j=1; $j<=$n; $j++){
        if($i==$j){
        echo "*";
        }else{
            echo "0";
        }
    }
    echo "<br>";
}
echo "<br>";
echo "<br>";
echo "<br>";

// cross line star with 0
$n=5;
for($i=1; $i<=$n; $i++){
    for($j=1; $j<=$n; $j++){
        if($i==$j || $i+$j==$n+1){
        echo "*";
        }else{
            echo "&nbsp;&nbsp;&nbsp;";
        }
    }
    echo "<br>";
}
echo "<br>";
echo "<br>";
echo "<br>";

// star diamond pattern
$n=10;
for($i=1; $i<=$n; $i++){
    for($j=1; $j<=(2*$n)-1; $j++){
        if($j>=$n-($i-1) && $j<=$n+($i-1)){
            echo "*";
        }else{
            echo "&nbsp;&nbsp;";
        }
    }
    echo "<br>";
}
for($i=$n-1; $i>=1; $i--){
    for($j=1; $j<=(2*$n)-1; $j++){
        if($j>=$n-($i-1) && $j<=$n+($i-1)){
            echo "*";
        }else{
            echo "&nbsp;&nbsp;";
        }
    }
    echo "<br>";
}

// leap year
$year = 2024;
if($year % 4 ==0){
    echo "This is a Leap Year";
}else{
    echo "This is a Not Leap Year";
}
echo " <br/>";

// even odd number
$check = 4;
if($check%2 == 0){
    echo "even";
}else{
    echo "odd";
}
echo " <br/>";


// sum numbers
$n=23456;
$rem =0;
$sum =0;
for($i=0; $i<=strlen($n); $i++){
    $rem =$n %10;
    $sum = $sum+$rem;
    $n =$n/10;
}
echo "Sum of $sum";
echo " <br/>";

// table number
$num=5;
for($i=1; $i<=10; $i++){
echo "$num*$i=".$num*$i;
echo "<br/>";
}
echo "<br/>";

// factorial nummber
$num = 0;
$fact = 1;
if($num!=0){
    for($i=$num; $i>=1; $i--){
        $fact=$fact*$i;
    }
}else{
    $fact=1;
}
echo "Factorial of $num is $fact";
echo "<br/>";

// fibonacci series
$n=20;
$a=-1;
$b=1;
for($i=1;$i<=$n; $i++){
    $c=$a+$b;
    echo $c." ";
    $a=$b;
    $b=$c;
}
echo "<br/>";

// prime number
$no =2;
$totalDisplay=0;
while($totalDisplay<10){
    $dividibleCount=0;
    for($i=1; $i<=$no; $i++){
        if($no % $i==0){
            $dividibleCount+=1;
        }
    }if($dividibleCount<3){
        echo $no."";
        $totalDisplay+=1;
    }
    $no+=1;
}
echo "<br/>";