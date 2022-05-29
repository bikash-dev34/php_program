<h2>cookie is set</h2>
<?php 
  $name='VisitSite';
  $content=$_COOKIE["VisitSite"]+1; //increase count
  $expire=time()+(60);//60 secons 
  setcookie($name,$content,$expire);
?>
<?php 
print_r($_COOKIE);
?>