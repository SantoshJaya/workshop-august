<?php
include('inc/config.php');
include('inc/header.php');
?>
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/3.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/1.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>  

<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">About Us</h2>
    </div>
    <div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
            <img src="./images/4.jpg" class="img-fluid aboutimg">
        </div> 
      
        <div class="col-lg-6 col-md-6 col-12">
            <h2 class="display-4">I am Santosh Kumar.</h2>
            <p class="py-5">Welcome to Santosh Blog.Now You will experience various articles in this blog.Keep reading the articles and get knowledge.Have a great time.</p>
        </div>  
    </div> 
</div>

</section>
<section class="my-2">
    <div class="">
        <h2 class="text-center">Our Articles</h2>
    </div>
    <?php
include('./inc/config.php');
$sql = "SELECT * FROM article";
$result = $link->query($sql);
?>
<section>

<div class="d-flex pt-5 container  ">
  
  <?php
      if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
              echo '<div class="col-3 p-3">
              <div class="card h-100">
           <img src="./images/cardback.jpg"  style="width:100%" class="card-img-top" alt="...">
                    <div class="card-body">
            <h5 class="card-title" style=" font-size: 30px;font-weight:200;">'.$row["head"].'</h5>
             <a href="./article.php?id='.$row['id'].'" class="btn btn-primary">Read More</a>
                    </div>
               </div>
          </div>';
        }
      }
    ?>
</div>
    </section>
</section>

</body>
</html>