 <?php
 //STEP 2:- session start kr idr v
 session_start();

// STEP 3:- Check kr reha ki $_POST method nal ki form te click hoya k nahi
 if(isset($_POST['search'])){
     $variable1=$_POST['user'].'[save]';
     
    // syntax :::: $_SESSION['key']=value;
    ////  STEP 4:- session  vch store kr

     $_SESSION['firstName']=$variable1;
     /////// STEP 5:- header function nal redirect kr index.php page te kuki sanu us page vch value chahidi aa
     header('location:index.php');
    /////////////// STEP 6: index.php page te jaa
 }

?> 