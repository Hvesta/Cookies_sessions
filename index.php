<?php
require 'inc/head.php';


if(empty($_SESSION['cart']))
{
    $_SESSION['cart'] = [];
    
}
   
if (!empty($_POST['add_cart'])){
    $_SESSION['cart'][] = $_POST['add_cart'];
}

        
?>

<section class="cookies container-fluid">
  <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-46.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>Pecan nuts</h3>
          <p>Cooked by Penny !</p>
          <form action="" method="POST">   
              <input type="hidden" name="add_cart" value="46"/>      
              <button class="btn btn-info" role="button">Ajouter au panier</button>
          </form> 
        </figcaption>
      </figure>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-36.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>Chocolate chips</h3>
          <p>Cooked by Bernadette !</p>
          <form action="" method="POST">   
              <input type="hidden" name="add_cart" value="36"/>      
              <button class="btn btn-info" role="button">Ajouter au panier</button>
          </form>     
        </figcaption>
      </figure>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-58.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>Chocolate cookie</h3>
          <p>Cooked by Bernadette !</p>
          <form action="" method="POST">   
              <input type="hidden" name="add_cart" value="58"/>      
              <button class="btn btn-info" role="button">Ajouter au panier</button>
          </form>
        </figcaption>
      </figure>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-32.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>M&M's&copy; cookies</h3>
          <p>Cooked by Penny !</p>
          <form action="" method="POST">   
              <input type="hidden" name="add_cart" value="32"/>      
              <button class="btn btn-info" role="button">Ajouter au panier</button>
          </form>
        </figcaption>
      </figure>
    </div>
  </div>
</section>
<?php require 'inc/foot.php'; ?>
