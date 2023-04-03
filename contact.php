<?php

$errorMessage='';
$successMessage='';
if(isset($_POST['save'])){
    
    $name=$_POST['name'];  
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];
    
    // if($firstName !='' && $lastName !='' && $email !='' && $password !='' && $confirmPassword !='')
    if(empty($name) || empty($email) ||empty($subject) || empty($message))
    {       
        
        $errorMessage="All fields are required and must not be empty";         
       
    }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errorMessage= "The email address must be in a valid format";
    }else{      

    $file = fopen("data/contactInfo.txt", "a");
       fwrite($file, "$name,$email,$subject,$message\n");
            fclose($file);
            
            $successMessage="Data Insert Successfully";
   }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>

<body>

<?php include("./includes/navbar.php")?>
<section>
    <div class="container">
        <div class="card">

        <div>

        <div>
            <?php 

            if($errorMessage){
            ?>
            <h4 class="text-danger"> <?php
           echo $errorMessage;
           ?></h4>
           <?php
           }else{?>
            <h4 class="text-success"> <?php
            echo $successMessage;
           ?>  </h4>

           <?php
        }
           ?>
         
        </div>
          
        </div>

        <div class="card-body bg-dark">
            <h1 class="text-center text-white">Contact</h1>
            <hr class="bg-white">


            <div class="row">

            <div class="col-lg-6">

            </div>
            <div class="col-lg-6 text-white font-weight-bold">
                  <form action="" method="post">
                    <div class="form-group ">

                       <label for="">Name</label>
                      <input type="text" class="form-control" name="name" id="">
                    </div>
                    <div class="form-group">
                        
                       <label for="">Email</label>
                      <input type="text" class="form-control" name="email" id="">
                    </div>
                    <div class="form-group">
                        
                       <label for="">Subject</label>
                      <input type="text" class="form-control" name="subject" id="">
                    </div>
                    <div class="form-group">
                        
                       <label for="">Message</label>
                      <textarea name="message" class="form-control" id="" cols="30" rows="10"></textarea>
                    </div>
                      <button class="btn btn-primary float-right font-weight-bold"  type="submit" name="save">Save</button>
                  </form>
            </div>


            </div>
           

        </div>

        </div>

    </div>
</section>
    
    
</body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

</html>