<style>

.header{
   background-color: #000;
}


.hub {

    font-family: sans-serif;
    font-weight: bold;
  }
  
  .hub span:nth-child(2) {
    background: #FF9900;
    color: #000000;
    border-radius: 8px;
    padding: 0 1px 1px 1px;
    display: inline-block;
  }



  .cart{
   color: #FF9900;
   background-color: #000000;
  }

</style>



<header class="header">

   <div class="flex">

      <a href="index.php" class="logo"><div class="hub"><span>Food</span><span>Hub</span></div></a>

      <nav class="navbar">
        
         
      </nav>

      <?php
      
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>

      <a href="products.php" style="color: #fff;"><i class="fa fa-arrow-left fa-3x" aria-hidden="true"></i></a>

      <!--<div id="menu-btn" class="fas fa-bars"></div>-->

   </div>

</header>




