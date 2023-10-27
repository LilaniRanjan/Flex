<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom js file link  -->
   <script src="./assets/js/beverage.js" defer></script>
   
        <!--CSS Files-->
        <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="./assets/css/style.css">
        <link rel="stylesheet" href="./assets/css/HomeStyle.css">
        <link rel="stylesheet" href="./assets/css/home.css">

        <!--Nav Link-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

        

        <!-- Fontawesome Icon -->
        <!--<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

        <!--1st Main content Start-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        <!--1st Main content End-->

                <!--Product-->     
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
        <script src="./assets/js/HomeScript.js"></script>
     
<!-------------------------------------------------------------------------------------------------------->
   <style>
       
             
@import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600&display=swap');

*{
   font-family: 'Nunito', sans-serif;
   margin:0; padding:0;
   box-sizing: border-box;
   outline: none; border:none;
   text-decoration: none;
   transition: all .2s linear;
   text-transform: capitalize;
}

html{
   font-size: 62.5%;
   overflow-x: hidden;
}

body{
   background: #FFFFFF;
  

}

.container{
   max-width: 1200px;
   margin:0 auto;
   padding:3rem 2rem;
}

.container .title{
   font-size: 3.5rem;
   color:#FFFFFF;
   margin-bottom: 3rem;
   text-transform: uppercase;
   text-align: center;
   background-color: #000000;
   
}

.container .products-container{
   display: grid;
   grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
   gap:2rem;
}

.container .products-container .product{
   text-align: center;
   padding:3rem 2rem;
   background: #000000;
   box-shadow: 0 .5rem 1rem rgba(0,0,0,.1);
   outline: .1rem solid #ccc;
   outline-offset: -1.5rem;
   cursor: pointer;
}

.container .products-container .product:hover{
   outline: .2rem solid #222;
   outline-offset: 0;
}

.container .products-container .product img{
   height: 25rem;
}

.container .products-container .product:hover img{
   transform: scale(.9);
}

.container .products-container .product h3{
   padding:.5rem 0;
   font-size: 2rem;
   color:#FFFFFF;
}

.container .products-container .product:hover h3{
   color:#27ae60;
}

.container .products-container .product .price{
   font-size: 2rem;
   color:#FFFFFF;
}

.products-preview{
   position: fixed;
   top:0; left:0;
   min-height: 100vh;
   width: 100%;
   background: rgba(0,0,0,.8);
   display: none;
   align-items: center;
   justify-content: center;
}

.products-preview .preview{
   display: none;
   padding:2rem;
   text-align: center;
   background: #fff;
   position: relative;
   margin:2rem;
   width: 40rem;
}

.products-preview .preview.active{
   display: inline-block;
}

.products-preview .preview img{
   height: 30rem;
}

.products-preview .preview .fa-times{
   position: absolute;
   top:1rem; right:1.5rem;
   cursor: pointer;
   color:#444;
   font-size: 4rem;
}

.products-preview .preview .fa-times:hover{
   transform: rotate(90deg);
}

.products-preview .preview h3{
   color:#444;
   padding:.5rem 0;
   font-size: 2.5rem;
}

.products-preview .preview .stars{
   padding:1rem 0;
   font-size: 1.7rem;
}

.products-preview .preview .stars i{
   color:#27ae60;
}

.products-preview .preview .stars span{
   color:#999;
}

.products-preview .preview p{
   line-height: 1.5;
   padding:1rem 0;
   font-size: 1.6rem;
   color:#777;
}

.products-preview .preview .price{
   padding:1rem 0;
   font-size: 2.5rem;
   color:#27ae60;
}

.products-preview .preview .buttons{
   display: flex;
   gap:1.5rem;
   flex-wrap: wrap;
   margin-top: 1rem;
}

.products-preview .preview .buttons a{
   flex:1 1 16rem;
   padding:1rem;
   font-size: 1.8rem;
   color:#444;
   border:.1rem solid #444;
}

.products-preview .preview .buttons a.cart{
   background: #444;
   color:#fff;
}

.products-preview .preview .buttons a.cart:hover{
   background: #111;
}

.products-preview .preview .buttons a.buy:hover{
   background: #444;
   color:#fff;
}


@media (max-width:991px){

   html{
      font-size: 55%;
   }

}

@media (max-width:768px){

   .products-preview .preview img{
      height: 25rem;
   }

}

@media (max-width:450px){

   html{
      font-size: 50%;
   }

}
       
       
       
       
   </style>
   
   
   
   
</head>
<body id="bodyCon">

        <!--Top Header-->
        <div class="wrap" id="wrap">
            <div class="">
                <div class="row justify-content-between p-2">
                    <div class="col">
                        <p class="ms-5 mb-0 phone" id="phone"><span class="fa fa-phone"></span> <a style="color: #fff;" class="ms-2" href="#">077-1234567</a></p>
                    </div>
                    <div class="col d-flex justify-content-end">
                        <div class="social-media" id="socialmedia">
                            <p class="mb-0 d-flex">
                                <a id=socialmediaLink" href="#" style="color:#fff;" class="mx-2 d-flex align-items-center justify-content-center"><span class="fa fa-facebook fa-2x"><i class="sr-only">Facebook</i></span></a>
                                <a id=socialmediaLink" href="#" style="color:#fff;" class="mx-2 d-flex align-items-center justify-content-center"><span class="fa fa-twitter fa-2x"><i class="sr-only">Twitter</i></span></a>
                                <a id=socialmediaLink" href="#" style="color:#fff;" class="mx-2 d-flex align-items-center justify-content-center"><span class="fa fa-instagram fa-2x"><i class="sr-only">Instagram</i></span></a>
                                <a id=socialmediaLink" href="#" style="color:#fff;" class="mx-2 d-flex align-items-center justify-content-center"><span class="fa fa-dribbble fa-2x"><i class="sr-only">Dribbble</i></span></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--NavigationBar-->
        <div style="background: linear-gradient(#E88F2A, black); color: white;">
            <section class="header-main" style="color: white;">
                <div class="container-fluid">
                    <div class="row p-2 pt-3 d-flex align-items-center">
                        <div class="col-md-2">
                            <img  class="d-none d-md-flex ps-3" src="./assets/image/Logo.png" width="100">
                        </div>
                        <div class="col-md-7">
                            <div class="d-flex form-inputs">
                                <input class="form-control" type="text" placeholder="Search any Food...">
                                <button>
                                    <i style="color: black;" class="fa fa-search fa-2x" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="float-right">
                                <div class="d-flex d-none d-md-flex flex-row align-items-center">
                                    <a href="#">
                                        <span class="shop-bag"><i class="fa-solid fa-cart-shopping fa-sm"></i></span>
                                    </a>
                                    <div class="d-flex flex-column ms-2">
                                        <span class="qty">0 Food</span>
                                        <span class="fw-bold">$0.00</span>
                                    </div>    
                                </div> 
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="d-flex d-none d-md-flex flex-row align-items-center">
                                <button type="button" class="btn btn-outline-warning btn-lg">Sign In</button>
                            </div> 
                        </div>
                    </div>
                </div>
            </section>

            <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light" id="ftco-navbar">
                <div class="container">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fa fa-bars"></span> Menu
                    </button>
                    <div class="collapse navbar-collapse" id="ftco-nav">
                        <ul class="navbar-nav m-auto" style="font-size: 20px;">
                            <li class="nav-item active"><a href="index.php" class="nav-link mx-3">Home</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle mx-3" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Meals</a>
                                <div class="dropdown-menu" aria-labelledby="dropdown04">
                                    <a class="dropdown-item" href="./meals.php">Meals</a>
                                    <a class="dropdown-item" href="./beverage.php">Beverages</a>
                                </div>
                            </li>
                            <li class="nav-item mx-3"><a href="./Advertisment.php" class="nav-link">Advertisment</a></li>
                            <li class="nav-item mx-3"><a href="#" class="nav-link">Contact</a></li>
                            <li class="nav-item mx-3"><a href="#" class="nav-link">About Us</a></li>
                        </ul>
                        <a id="customization-button" class="btn btn-outline-light" href="foodCusPage.php">Customization</a>
                    </div>
                </div>
            </nav>
        </div>


<div class="container">

   <h3 class="title"> Desserts and Beverages </h3><br>
 
   <br><br>

   <div class="products-container">

      <div class="product" data-name="p-1">
          <img src="./assets/image/1.jpg" alt="" width="300px" height="150px">
         <h3> Yoghurt</h3>
         <div class="price">Price : Rs.70/=</div>
      </div>

      <div class="product" data-name="p-2">
          <img src="./assets/image/2.jpg" alt="" width="300px" height="150px">
         <h3>MiLo </h3>
         <div class="price">Price : Rs.130/=</div>
      </div>

      <div class="product" data-name="p-3">
          <img src="./assets/image/mm.jpg" alt="" width="300px" height="150px">
         <h3>Milk packet </h3>
         <div class="price">Price : Rs.90/=</div>
      </div>

      <div class="product" data-name="p-4">
          <img src="./assets/image/cho.jpg" alt="" width="340px" height="230px">
        <h3> Chocolate milk </h3>
         <div class="price">Price : Rs.120/=</div>
      </div>

      <div class="product" data-name="p-5">
          <img src="./assets/image/5.jpg" alt=""  width="290px" height="200px">
         <h3> Biscuit Pudding </h3>
         <div class="price">Price : Rs.160/=</div>
      </div>

      <div class="product" data-name="p-6">
          <img src="./assets/image/16.jpg" alt="" width="300px" height="200px">
         <h3>Kizz</h3>
         <div class="price">Price : Rs.100/=</div>
      </div>

      <div class="product" data-name="p-7">
          <img src="./assets/image/w.jpg" alt="" width="290px" height="200px">
        <h3> Wood Apple juice</h3>
        <div class="price">Price : Rs.150/=</div>
     </div>

     <div class="product" data-name="p-8">
         <img src="./assets/image/ava.jpg" alt="" width="290px" height="200px">
      <h3>Avacoda juice</h3>
        <div class="price">Price : Rs.100/=</div>
     </div>

     <div class="product" data-name="p-9">
         <img src="./assets/image/19.jpg" alt="" width="290px" height="200px">
        <h3> Orange juice </h3>
        <div class="price">Price : Rs.70/=</div>
     </div>

     <div class="product" data-name="p-10">
         <img src="./assets/image/10.jpg" alt="" width="290px" height="200px">
      <h3>Lemon juice</h3>
      <div class="price">Price : Rs.50/=</div>
   </div>
   

   <div class="product" data-name="p-11">
       <img src="./assets/image/11.jpg" alt="" width="290px" height="200px">
      <h3>Passion Fruit juice </h3>
      <div class="price">Price : Rs.60/=</div>
   </div>

   <div class="product" data-name="p-12">
       <img src="./assets/image/12.jpg" alt="" width="290px" height="200px">
      <h3>Sun Crush</h3>
      <div class="price">Price : Rs.150/=</div>
   </div>
</div>

</div>

<!--.........................................................................................................................................-->

<div class="products-preview">

   <div class="preview" data-target="p-1">
      <i class="fas fa-times"></i>
      <img src="./assets/image/1.jpg" alt="" width="300px" height="200px">
         <h3> Yoghurt</h3>
      <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star-half-alt"></i>
      </div>
      <p> Yogurt is a creamy, tangy dairy product made by fermenting milk with beneficial bacteria.</p>
      <div class="price">Rs.70/=</div>
      <div class="buttons">
          <a href="payment_processing.php" class="buy">buy now</a>
         <a href="#" class="cart">add to cart</a>
      </div>
   </div>

   <div class="preview" data-target="p-2">
      <i class="fas fa-times"></i>
      <img src="./assets/image/2.jpg" alt="" width="300px" height="200px">
      <h3>MILO </h3>
      <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star-half-alt"></i>
      </div>
      <p> Milo is a chocolate-flavored malt beverage known for its energy-boosting properties and is often mixed with milk. </p>
      <div class="price">Rs.130/=</div>
      <div class="buttons">
          <a href="payment_processing.php" class="buy">buy now</a>
         <a href="#" class="cart">add to cart</a>
      </div>
   </div>

   <div class="preview" data-target="p-3">
      <i class="fas fa-times"></i>
      <img src="./assets/image/mm.jpg" alt="" width="300px" height="200px">
         <h3>Milk Packet</h3>
      <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star-half-alt"></i>
   
      </div>
         <p> Vanilla milk packet is a flavored milk product infused with vanilla extract, offering a sweet and aromatic twist to regular milk.</p>
      <div class="price">Rs.90/=</div>
      <div class="buttons">
          <a href="payment_processing.php" class="buy">buy now</a>
         <a href="#" class="cart">add to cart</a>
      </div>
   </div>

   <div class="preview" data-target="p-4">
      <i class="fas fa-times"></i>
      <img src="./assets/image/cho.jpg" alt="" width="300px" height="200px">
         <h3> Chocolate Milk</h3>
      <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
       
      </div>
      <p>Chocolate milk packet is a pre-packaged dairy product combining milk with cocoa and sugar, providing a deliciously sweet and chocolaty drink. </p>
      <div class="price">Rs.120/=</div>
      <div class="buttons">
          <a href="payment_processing.php" class="buy">buy now</a>
         <a href="#" class="cart">add to cart</a>
      </div>
   </div>

   <div class="preview" data-target="p-5">
      <i class="fas fa-times"></i>
      <img src="./assets/image/5.jpg" alt=""  width="300px" height="200px">
         <h3> Biscuit Pudding </h3>
      <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star-half-alt"></i>
      </div>
      <p> Pudding is a creamy dessert made by thickening a mixture of milk, sugar, and flavorings, often served chilled.</p>
      <div class="price">Rs.160/=</div>
      <div class="buttons">
          <a href="payment_processing.php" class="buy">buy now</a>
         <a href="#" class="cart">add to cart</a>
      </div>
   </div>

   <div class="preview" data-target="p-6">
      <i class="fas fa-times"></i>
      <img src="./assets/image/16.jpg" alt="" width="300px" height="200px">
      <h3> Kizz</h3>
      <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
        
      </div>
      <p> "Kizz" is a strawberry-flavored juice or beverage.</p>
      <div class="price">Rs.100/=</div>
      <div class="buttons">
          <a href="payment_processing.php" class="buy">buy now</a>
         <a href="#" class="cart">add to cart</a>
      </div>
   </div>


   <div class="preview" data-target="p-7">
      <i class="fas fa-times"></i>
      <img src="./assets/image/w.jpg" alt="" width="300px" height="200px">
        <h3> Wood Apple Jucie</h3>
      <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
        
      </div>
      <p> Wood apple juice by Smack is a refreshing and tangy fruit drink made from the pulp of the wood apple, known for its unique flavor and health benefits.</p>
      <div class="price">Rs.150/=</div>
      <div class="buttons">
         <a href="#" class="buy">buy now</a>
         <a href="#" class="cart">add to cart</a>
      </div>
   </div>


   <div class="preview" data-target="p-8">
      <i class="fas fa-times"></i>
      <img src="./assets/image/ava.jpg" alt="" width="300px" height="200px">
      <h3> Avacoda Juice</h3>
      <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
        
      </div>
      <p> Avocado juice is a creamy and nutritious beverage made from ripe avocados, often blended with sweeteners and other ingredients for added flavor.</p>
      <div class="price">Rs.100/=</div>
      <div class="buttons">
          <a href="payment_processing.php" class="buy">buy now</a>
         <a href="#" class="cart">add to cart</a>
      </div>
   </div>


   <div class="preview" data-target="p-9">
      <i class="fas fa-times"></i>
      <img src="./assets/image/19.jpg" alt="" width="300px" height="200px">
      <h3> Orange Juice </h3>
      <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
        
      </div>
      <p> Orange juice is a popular citrus beverage made from freshly squeezed or processed oranges, prized for its refreshing and vitamin-rich qualities. </p>
      <div class="price">Rs.70/=</div>
      <div class="buttons">
         <a href="#" class="buy">buy now</a>
         <a href="#" class="cart">add to cart</a>
      </div>
   </div>

   <div class="preview" data-target="p-10">
      <i class="fas fa-times"></i>
      <img src="./assets/image/10.jpg" alt="" width="300px" height="200px">
      <h3> Lemon Juice </h3>
      <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
        
      </div>
      <p>Lemon juice is a tart and tangy citrus juice extracted from fresh lemons, commonly used as a flavor enhancer and ingredient in various dishes and drinks.</p>
      <div class="price">Rs.50/=</div>
      <div class="buttons">
         <a href="#" class="buy">buy now</a>
         <a href="#" class="cart">add to cart</a>
      </div>
   </div>


   <div class="preview" data-target="p-11">
      <i class="fas fa-times"></i>
      <img src="./assets/image/11.jpg" alt="" width="300px" height="200px">
      <h3> Passion Fruit Juice </h3>
      <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
        
      </div>
      <p> Passion fruit juice is a tropical and exotic beverage derived from the pulpy seeds of passion fruit, known for its sweet-tart flavor and vibrant aroma.</p>
      <div class="price">Rs.60/=</div>
      <div class="buttons">
         <a href="#" class="buy">buy now</a>
         <a href="#" class="cart">add to cart</a>
      </div>
   </div>


   <div class="preview" data-target="p-12">
      <i class="fas fa-times"></i>
      <img src="./assets/image/12.jpg" alt="" width="300px" height="200px">
      <h3> Sun Crush</h3>
      <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i> 
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
        
      </div>
      <p>  Apple fruit juice by Sun Crush is a refreshing and fruity drink made from the juice of ripe apples, delivering a crisp and natural apple flavor.  </p>
      <div class="price">Rs.150/=</div>
      <div class="buttons">
         <a href="#" class="buy">buy now</a>
         <a href="#" class="cart">add to cart</a>
      </div>
   </div>
</div>



<!-- Footer Start -->
            <div class="container-fluid bg-img text-secondary bg-dark" style="margin-top: 70px; padding-bottom: 30 px;">
                <div class="container">
                    <div class="row gx-5">
                        <div class="col-lg-4 col-md-6 mb-lg-n5">
                            <!--<div class="d-flex flex-column align-items-center justify-content-center text-center h-100 border-inner p-4" style="background-color: #E88F2A ;">-->
                            <a href="index.html" class="navbar-brand pt-5">
                                <img class="px-4" src="./assets/image/Logo.png" alt="Logo" width="350">
                            </a>
                            <!--</div>-->
                        </div>
                        <div class="col-lg-8 col-md-6">
                            <div class="row gx-5">
                                <div class="col-lg-4 col-md-12 pt-5 mb-5">
                                    <h4 class="text-uppercase mb-4" style="color: #E88F2A; font-size: 20px;">Get In Touch</h4>
                                    <div id="footerSubFont" class="d-flex mb-2">
                                        <i class="fa fa-map-marker px-3" aria-hidden="true" style="color: #E88F2A;"></i>
                                        <p class="mb-0">Uva wellasa University, Badulla</p>
                                    </div>
                                    <div id="footerSubFont" class="d-flex mb-2">
                                        <i class="fa fa-envelope-o px-3" aria-hidden="true" style="color: #E88F2A;"></i>
                                        <p class="mb-0">flex@example.com</p>
                                    </div>
                                    <div id="footerSubFont" class="d-flex mb-2">
                                        <i class="fa fa-phone px-3" aria-hidden="true"style="color: #E88F2A;"></i>
                                        <p class="mb-0">+012 345 67890</p>
                                    </div>
                                    <div class="d-flex mt-4">
                                        <a style="background-color: #E88F2A;" class="btn btn-lg btn-lg-square border-inner rounded-0 me-2" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                                        <a style="background-color: #E88F2A;" class="btn btn-lg btn-lg-square border-inner rounded-0 me-2" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                                        <a style="background-color: #E88F2A;" class="btn btn-lg btn-lg-square border-inner rounded-0 me-2" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                                    <h4 class="text-uppercase mb-4" style="color: #E88F2A; font-size: 20px;">Quick Links</h4>
                                    <div class="d-flex flex-column justify-content-start">
                                        <a class="mb-2" href="index.php" id="footerSubFont"><i class="fa fa-arrow-right px-3" aria-hidden="true" style="color: #E88F2A;"></i>Home</a>
                                        <a class="mb-2" href="#" id="footerSubFont"><i class="fa fa-arrow-right px-3" aria-hidden="true" style="color: #E88F2A;"></i>About Us</a>
                                        <a class="mb-2" href="#" id="footerSubFont"><i class="fa fa-arrow-right px-3" aria-hidden="true" style="color: #E88F2A;"></i>Our Services</a>
                                        <a class="" href="#" id="footerSubFont"><i class="fa fa-arrow-right px-3" aria-hidden="true" style="color: #E88F2A;"></i>Contact Us</a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                                    <h4 class="text-uppercase mb-4" style="color: #E88F2A; font-size: 20px;">Newsletter</h4>
                                    <p id="footerSubFont">"Savor delicious meals at our university canteen. Tasty, nutritious, affordable!"</p>
                                    <form action="">
                                        <div class="input-group">
                                            <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                                            <a href="./Login.php" class="btn" style="background-color: #E88F2A;">Sign Up</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid text-secondary py-4" style="background: #111111; margin-top: 32 px;">
                <div class="container text-center">
                    <p class="mb-0">&copy; <a class="text-white border-bottom" href="#">Flex</a>. All Rights Reserved.</p>
                </div>
            </div>
            
        </div>
    <?php
// put your code here
    ?>
  

    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>


</body>
</html>