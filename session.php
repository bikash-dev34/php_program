<h1>This is session start file</h1>
<h2>
    <?php
session_start();

$name=$_SESSION['name']='Bikash';
$education=$_SESSION['education']='BCA';
$year=$_SESSION['year']=2020;

echo $name,$education,$year;

?>
</h2>