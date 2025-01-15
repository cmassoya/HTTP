<?php
$count=$_CoOKIE['count'];

if(isset($count)){
       $count++;
    
} else {
    $count=1;
}    
    setcookie('count',$count);
    echo $count;
?>
