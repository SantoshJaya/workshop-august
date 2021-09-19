<?php
    
    include('./inc/config.php');
    include('./inc/header.php');
?>

<section class="containe">

<div class="cardss">
        <div class="inner-box">
          <div class="card-front"></div>
          <h1 class="pt-5">Sign In</h1>

     <form action="./userSignIn.php" method="post">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Username:</label>
            <input type="text" name="username" class="form-control" id="exampleFormControlInput1" placeholder="Username">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Password:</label>
            <input type="password" name="password" class="form-control" id="exampleFormControlInput1" placeholder="Password">
        </div>
        <div class="hero">
        <button class="hero-butn">Submit</button>
</div>
    </form>
    </section>

    
</body>
</html>