<?php include 'includes/header.php';
$a = 0;
while ($a <= 10) {
    echo $a . "<br>";
    $a +=1;
}

do{
    echo $a . "<br>";
    $a +=1;
    echo $a."<br>";
}while($a <= 10);
// For Loop
for($a=1; $a < 100;$a++){
    if( $a % 3 == 0 && $a % 5 == 0){
        echo "FIZZ BUZZ". "<br>";
    }
    else if($a % 3 === 0)
    echo "FIZZ". "<br>";
    else if($a % 5 === 0){
        echo "BUZZ". "<br>";
    }
}

include 'includes/footer.php';