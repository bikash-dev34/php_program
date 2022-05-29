  <!DOCTYPE html>
  <html lang="en">

      <head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Files in php</title>
      </head>

      <body>
          <form action="" method="post" enctype="multipart/form-data">
              <p><input type="file" name="myfile" id=""></p>
              <p><input type="submit" value="submit" name="submitfile">
              </p>

          </form>

          <h2>Files </h2>
          <?php 
       if(isset($_POST['submitfile'])){
           echo "<pre>";
           print_r($_FILES['myfile']);
           $f1_name=$_FILES['myfile']['name'];
           $f1_size=$_FILES['myfile']['size'];
        //    $store1="upload/".$f1_name;
           echo $f1_size;

           $f1_extension=explode('.',$f1_name);

           print_r($f1_extension);

           $f1_last_array=strtolower(end($f1_extension));
           
           echo $f1_last_array;
           echo "<br>";
           if($f1_last_array=="jpg"|| $f1_last_array=="png"){
                 $store1="upload/".$f1_name;
                echo "New file is uploaded";
           }else{
               echo "Please upload png or jpg file ";
           }
           
       }
       ?>

      </body>

  </html>