<?php 
require 'inc/head.php';
require 'connect.php';

$diffCookie = 
      ['46'=>['nom'=>'Pecan nuts'],
       '36'=>['nom'=>'Chocolate chips'],
       '58'=>['nom'=>'Chocolate cookie'],
       '32'=>['nom'=>'M&M cookies']
      ];
?>
<section class="cookies container-fluid">
    <div class="row">
       <?php foreach (array_count_values($_SESSION['cart']) as $key => $value) {
           echo $diffCookie[$key]['nom'] .' '. $value .'<br>';
        }
        ; ?>
         
    </div>
</section> 
<?php require 'inc/foot.php'; ?>
 