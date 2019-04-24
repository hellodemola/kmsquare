 <?php include ('header.php');?>

 <?php
  $name =  $_POST['name'] ;
  $email = $_POST['email'] ;
  $message =  $_POST['message']; 

if(isset($_POST['message']) ){
   $hello = 'hi';
   header('Refresh: 5; url= index.php');
}else{
    header("location:index.php");
    // $hello = 'hello';

}

?>
<br><br>
 <div class="container">
     <div class="row">
         <div class="col-lg-6">
             <br>
             <img class="img-fluid rounded mb-4" src="./image/slider1.jpg" alt="">
         </div>
         <div class="col-lg-6">
         <br>
                <h2 class="upcase bold">Hi <?php echo  $name; ?> </h2>
               
                <hr>

             <p>
                
                 <?php echo 'Your message has been sent with the your registered email: ' . $email.  ' <br>  Thank you' ;
                //   echo $hello;
                 ?>

                 
             </p>


         </div>
     </div>
 </div>

 <?php include ('footer.php');?>