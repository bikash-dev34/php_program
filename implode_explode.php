<?php
//explode()
 $nf="My name is Bikash Rai";
 $ex=explode(" ",$nf);
print_r($ex);
echo $ex[2];

// ?>
<!-- -----implode   ---- -->
<?php 
$arr=array("my","name","is","Bikash");
$imp=implode(",",$arr);
print_r($imp);
echo ("$imp");

?>