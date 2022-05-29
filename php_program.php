<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Data types</title>
    </head>

    <body>
        <h2>Data Types</h2>
        <?php
        $x="Water";
        echo $x;
        echo '</br>';
        if($x){
            echo "true";
        }
        else{
            echo"false";
        }
        echo '</br>';
        $laptop=array('sony','dell','acer','samsung');
        print_r($laptop);
        echo '</br>';
        echo $laptop[2];
         ?>
        <h2>string functions</h2></br>
        <?php
         $name="Bikash Rai";
         echo strlen($name);
         echo '</br>';
         echo str_word_count($name);
         echo '</br>';
         echo strrev($name);
         echo '</br>';
        //  strpos(variable,"value");
         echo strpos($name,'Rai');
          echo '</br>';
        //  str_replace("","",variable)
        echo str_replace("Bikash","Sunabhat",$name);
         ?>
        <h2>Conditional loop</h2>
        <br>
        <?php
        $age=18;
        if($age==18){
            echo "You are eligible for vote";
        }
         echo '</br>';
           if($age>18){
               echo "voter ";
           }
           else{
              
               echo "Non Voter";
           }
            echo '</br>';
          if($age==18){
              echo "Your name is in voter list";
          } 
          elseif($age>20){
              echo "You can vote";

          } 
          else{
              echo "You are not voter  for this year";
          }

         ?>
        <h2>Switch statement</h2>
        <?php
        $color='blue';
        switch($color){
            case 'red':
                echo 'color is red';
                break;
            case 'white':
                echo 'color is white ';
                break;
            case 'blue':
                echo 'color is blue';
                break;
            default:
            echo 'invalid';            
        }
         
         ?>
        <br>
        <h2>Operators in Php</h2>
        <?php
        $a=5;
        $b=8;
        $b++;
        echo "The decrement of 8 is ",$b;
         echo '</br>';
        echo "Addition is ",($a+$b);
        if($a==5 || $b==8){
            echo "all matches";
        }
        else{
            echo "not matches";
        }
         ?>
        <br>
        <h2>Functions :userdefined </h2>
        <?php 
         function myFunc($name,$surname){
             echo "My name is".$name ." " .$surname;
         }
         myFunc("Parbati",'Rai');

         ?>
        <h2>Array:associative </h2><br>
        <?php 
          $products=array('Macbook'=>500,'Galaxy Tab'=>700,'Iphone'=>3000);
          print_r($products);
          echo '</br>';
          echo $products['Galaxy Tab'];
         ?>
        <br>
        <h2>Array:Multidimensional </h2><br>
        <?php 
         $productslist=array('Sony Tv'=>array('purchase price'=>11111,'Sale price'=>20000,'Category'=>'Home Appliances'),'Samsung'=>array('purchase price'=>90909,'Sale Price'=>505050,'Category'=>'Mobile') );
         print_r($productslist);
         echo $productslist['Sony Tv']['Sale price'];

         ?>
        <h2>Multidimensional array</h2>
        <?php
        $cars=array(
            array('volvo',44,32),
            array('bmw',77,32),
            array('sab',322,87),
            array('land rover',329,123)
        );
         for($row=0;$row<4;$row++){
             echo "<p><b>Row number $row </b></p>";
             echo '<ul>';
             for($col=0;$col<3;$col++){
                 echo '<li>'.$cars[$row][$col].'</li>';
             }
             echo '</ul>';
         }
         ?>
        <?php
         $age=array("Peter"=>34,"Ben"=>45,"Jon"=>32);
         foreach($age as $y=>$y_value){
             echo "key=".$y.",Value=".$y_value;
             echo "<br>";
         }
        ?>
        <h2>while loop</h2><br>
        <?php
         $num=1;
         while($num<=10){
             echo $num."<br>";
             $num++;
         }
        ?>
        <br>
        <h3>do while loop</h3>
        <?php
        $numx=7;
        do{
            echo $numx."<br>";
            $numx++;
        }while($numx<5);
         ?>
        <br>
        <h3>for loop</h3>
        <?php
        for($x=0;$x<=10;$x++){
            echo "Number is ".$x."<br>";
        }
         ?>
        <br>
        <h3>foreach loop one dimensional array</h3><br>
        <?php
           $items=array("Marin","Bagmati","Sokan","Dhanmana");
           foreach($items as $value){
               echo $value."<br>";
           }
         ?>
        <h3>foreach loop associative array</h3><br>

        <?php
            $rivers=array("Marin"=>"300km","Dhanmana"=>"100km","Bagmati"=>"5000km");
            foreach($rivers as $name=>$distance){
                echo "The distance of " .$name. " is " .$distance."<br>";
            }
          ?>
        <h3></h3><br>
        <h1>form</h1><br>
        <form action="" method="post">
            <!-- redirect to data.php file after submit -->
            <input type="text" name="name" id="">
            <input type="submit" value="Click for Submit">
        </form>

        <?php
        if(isset($_POST["name"])){

            echo $_POST['name'];
        }
        else{
            die ("Please enter name");
        }
            ?>
    </body>

</html>