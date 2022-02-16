

<?php
// Step 1 :- Session start kr index te

// Step 2 lai save.php page te jaa
session_start();
?>

 <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <?php
    isset($_SESSION['firstName'])?$_SESSION['firstName']:"";
    ?>
  <form method='post' action="save.php">
  <div class="mb-3 my-4">

    <div class="input-group mb-3">
  
  <!-- input tage with php coding STARTED-->
    <input type="text" class="form-control" name="user" placeholder="Username" aria-label="Username" 
    value=<?php
    ////////////// STEP 7. check kr session set hoya k nahi ISSET() nal
    if(isset($_SESSION['firstName'])){
      ////////////////// j session set hoya aa te print kra ta first name 
      echo $_SESSION['firstName'];
   }
  ///////////////////////////////// STEP 8:  jd session da kmm kthm hogya te session_destroy likh dena
  // saari fields vch data aan toh baad hi session destroy kri
   session_destroy();
   ?>
   
    >
    <!-- input tage with php coding ENDED -->
    <!--  -->
    <!-- ::::NOTE::: inspect te session nahi dikhna kuki oh server nu pej rhe aa apa te server session encrpyt krke user nu bejda so nahi dikhda user nu for security perspective vaste -->
    <!--  -->
  <span class="input-group-text">@</span>
</div>
    
  
  </div>
  
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" name=search class="btn btn-primary">Submit</button>
</form>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>


