<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="" />
  <meta name="author" content="" />
  <meta name="keywords" content="footer, address, phone, icons" />


  <!-- GOOGLE FONT -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Gloria+Hallelujah&display=swap" rel="stylesheet">
  <!-- FONT AWESOME STYLE  -->
  <link href="assets/css/font-awesome.css" rel="stylesheet" />



  <!-- BOOTSTRAP CORE STYLE  -->
  <link href="assets/css/bootstrap.css" rel="stylesheet" />
  <link rel="stylesheet" href="styles/style.css">
  <link rel="stylesheet" href="styles/styles.css">
  <link rel="stylesheet" href="styles/item.css">

</head>


<?php include('includes/cartheader.php'); ?>


<body class="bg-gray-100 wrapper">
  <div class="container mx-auto mt-10">
    <div class="flex shadow-md my-10">
      <div class="w-full bg-white px-10 py-10">
        <div class="flex justify-between border-b pb-8">
          <h1 class="font-semibold text-4xl">Shopping Cart</h1>
        </div>
        <div class="flex mt-10 mb-5">
          <h3 class="font-semibold text-gray-600 text-md uppercase w-2/5">Product Details</h3>
          <h3 class="font-semibold text-center text-gray-600 text-md uppercase w-1/5 text-center">Quantity</h3>
          <h3 class="font-semibold text-center text-gray-600 text-md uppercase w-1/5 text-center">Price</h3>
          <h3 class="font-semibold text-center text-gray-600 text-md uppercase w-1/5 text-center"></h3>
        </div>
        <div class=" product-container">
        </div>



        <a href="#" class="flex font-semibold text-indigo-600 text-sm mt-10">
          <svg class="fill-current mr-2 text-indigo-600 w-4" viewBox="0 0 448 512">
            <path d="M134.059 296H436c6.627 0 12-5.373 12-12v-56c0-6.627-5.373-12-12-12H134.059v-46.059c0-21.382-25.851-32.09-40.971-16.971L7.029 239.029c-9.373 9.373-9.373 24.569 0 33.941l86.059 86.059c15.119 15.119 40.971 4.411 40.971-16.971V296z"></path>
          </svg>
          Continue Shopping
        </a>


      </div>
      <div id="summary" class="w-1/4 px-8 py-10">
        <h1 class="font-semibold text-3xl border-b pb-9">Order Summary</h1>
        <div class="flex justify-between mt-10 mb-5">
          <span class="font-semibold text-md uppercase">Items</span>
          <div class="item-count">

          </div>
        </div>
        <div class="border-t mt-8">
          <div class="flex font-semibold justify-between py-6 text-md uppercase">
            <span>Total cost</span>
            <div class="total-cost">

            </div>
          </div>
          <button class="bg-indigo-500 font-semibold hover:bg-indigo-600 py-3 text-sm text-white uppercase w-full">Checkout</button>
        </div>
      </div>
    </div>
  </div>
</body>







<?php include('includes/footer.php'); ?>
<script src="addtocart.js"></script>
</body>

</html>