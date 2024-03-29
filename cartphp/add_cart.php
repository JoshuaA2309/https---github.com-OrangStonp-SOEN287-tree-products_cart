<!DOCTYPE html>
<html>
    <head>
        <title>Store</title>
        <meta name="description" content="This is the description">
        <link rel="stylesheet" href="../FINAL-Frontend AWS version(2021-03-12)/FINAL-Frontend AWS version(2021-03-12)/storestyles.css" />
        <script src="../FINAL-Frontend AWS version(2021-03-12)/FINAL-Frontend AWS version(2021-03-12)/store.js" async></script>
    </head>
    <body>
     <nav class="navbar">
      <div class="navbar__container">
        <a href="index.html" id="navbar__logo"
          ><i class="fas fa-shopping-basket"></i>SUPER GROCERIES</a
        >
        <!--JS part-->
        <div class="navbar__toggle" id="mobile-menu">
          <span class="bar"></span> <span class="bar"></span>
          <span class="bar"></span>
        </div>
        <ul class="navbar__menu">
          <li class="navbar__item">
            <a href="index.html" class="navbar__links">Home</a>
          </li>
          
          </li>
          <li class="navbar__item">
            <a href="aisles.html" class="navbar__links">Products</a>
          </li>
          <li class="navbar__item">
            <a href="signin.html" class="navbar__links">Sign in</a>
          </li>
          <li class="navbar__item">
            <a href="cart.html" class="navbar__links">
            Cart <i class=" fas fa-shopping-basket"></i></a>
            

          </li>

        </ul>
      </div>
       <div class="main">
          
    </nav>
        <section class="container content-section">
            <h2 class="section-header">Products</h2>
            <div class="shop-items">
                <div class="shop-item">
                    <span class="shop-item-title">Tomatoes</span>
                    <img class="shop-item-image" src="../cartimages/Tomatoes.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$12.99</span>
                        <!-- php -->
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Meat</span>
                    <img class="shop-item-image" src="../cartimages/Meat.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$14.99</span>
                        <button class="btn btn-primary shop-item-button"type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Milk</span>
                    <img class="shop-item-image" src="../cartimages/Milk.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$9.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <!-- <div class="shop-item">
                    <span class="shop-item-title">Apple</span>
                    <img class="shop-item-image" src="Images/Album 4.png">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$19.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div> -->
            </div>
        </section>
        <!-- <section class="container content-section">
            <h2 class="section-header">Special</h2>
            <div class="shop-items">
                <div class="shop-item">
                    <span class="shop-item-title">Chocolate</span>
                    <img class="shop-item-image" src="Images/Shirt.png">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$19.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Coffee</span>
                    <img class="shop-item-image" src="Images/Cofee.png">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$6.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            </div>
        </section> -->
        <section class="container content-section">
            <h2 class="section-header">CART</h2>
            <div class="cart-row">
                <span class="cart-item cart-header cart-column">ITEM</span>
                <span class="cart-price cart-header cart-column">PRICE</span>
                <span class="cart-quantity cart-header cart-column">QUANTITY</span>
            </div>
            <div class="cart-items">
            </div>
            <div class="cart-total">
                <strong class="cart-total-title">Total</strong>
                <span class="cart-total-price">$0</span>
            </div>
            <button class="btn btn-primary btn-purchase" type="button">PURCHASE</button>
        </section>
      

    
              <script type="text/javascript" src="../FINAL-Frontend AWS version(2021-03-12)/FINAL-Frontend AWS version(2021-03-12)/app.js"></script>
       </div>
       
    </body>
</html>
