<?php
    
    include('./inc/config.php');
    include('./inc/header.php');
?>

<section class="containe">

<div class="cardss">
        <div class="inner-box">
          <div class="card-front"></div>
          <h1 class="pt-5">Contact Us</h1>

     <form action="./contactRes.php" method="post">
     <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
            <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="hero">
        <button class="hero-butn">Submit</button>
</div>
    </form>
    </section>

    
</body>
</html>