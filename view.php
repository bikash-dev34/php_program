<h2>This is view file</h2>
<?php 
session_start();
echo $_SESSION['name']."<br>" ;
echo $_SESSION['education']."<br>";
echo $_SESSION['year'];

?>