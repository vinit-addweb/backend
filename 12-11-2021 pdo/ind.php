    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PDO</title>
    </head>
    <body>
        <h1>Pdo practice</h1>

        <form action="#" method="post">
        id: 
            <input type="number" name="id"> <br>     

            name: 
            <input type="text" name="nam"> <br>
            Mobile:
            <input type="text" name="mob"> <br>
            Email:
            <input type="email" name="mail"><br>
            <input type="submit" value="Submit" name="insert">

        </form>
    </body>
    </html>

    <?php

     if(isset($_POST["insert"])){
         $id=$_POST['id'];
          $name = $_POST['nam'];
          $mobile = $_POST['mob'];
          $email = $_POST['mail'];
          echo $id;
          echo $name;
          echo $mobile;


          try{
              $pdo = new PDO("mysql:host=localhost;dbname=pdotesting","root","");
              $sql='insert into students (name,mobile,email) values(:name,:mobile,:email)';
            echo $sql;
              $q=$pdo-> prepare($sql);
            //   $q-> bindParam(':id',$id,PDO::PARAM_N;
              $q-> bindParam(':name',$name,PDO::PARAM_STR);
              $q-> bindParam(':mobile',$mobile,PDO::PARAM_STR);
              $q-> bindParam(':email',$email,PDO::PARAM_STR);

              $q->execute();
              $lastInsertId=$pdo->lastInsertId();
              if($lastInsertId!="")
              {
                  echo "Data Inserted Successfully";

              }
              else{
                  echo "Error";
              }



          }
         catch (PDOException $e) {
            die("Could not connect to the database :" . $e->getMessage());
        }
        
     }
    ?>
    