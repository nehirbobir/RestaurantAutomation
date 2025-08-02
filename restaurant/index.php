<!DOCTYPE html>
<html lang="en">

<?php include ("temp/_head.php") ?>

<body>

  <? include ("userConfig.php") ?>
  <? include ("loginRegisterForm.php") ?>


  <!------------------HEADER SECTİON START------------------>

  <? include ("temp/_navbar.php") ?>


  <!------------------HEADER SECTİON END------------------>


  <!------------------HOME SECTİON START------------------>
  <section class="home" id="homesection">
    <div class="content">
      <h3>EXPRESS HOME DELIVERY</h3>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
        Velit nulla optio autem enim distinctio cupiditate.</p>
      <a href="#" class="btn">Order Now</a>
    </div>
  </section>
  <!------------------HOME SECTİON END------------------>


  <!------------------MENU SECTİON START------------------>
  <section class="menu" id="menusection">

    <h1 class="heading">OUR <span>MENU</span></h1>
    <div class="box-container">

      <div class="box">
        <div class="box-head">
          <img src="images/menu-1.png" alt="menu">
          <span class="menu-category">PIZZA</span>
          <h3>6 Mini Pizzas</h3>
          <div class="price">$104.99 <span>119.99</span></div>
        </div>
        <div class="box-bottom">
          <a href="#" class="btn add-to-cart" data-id="1" data-name="6 Mini Pizzas" data-category="PIZZA"
            data-price="104.99" data-image = "images/menu-1.png">Add to cart</a>
        </div>
      </div>

      <div class="box">
        <div class="box-head">
          <img src="images/menu-2.png" alt="menu">
          <span class="menu-category">BURGER</span>
          <h3>5 Mini Burgers</h3>
          <div class="price">$99.99 <span>109.99</span></div>
        </div>
        <div class="box-bottom">
          <a href="#" class="btn add-to-cart" data-id="2" data-name="5 Mini Burgers" data-category="BURGER"
            data-price="99.99" data-image = "images/menu-2.png">Add to cart</a>
        </div>
      </div>


      <div class="box">
        <div class="box-head">
          <img src="images/menu-3.png" alt="menu">
          <span class="menu-category">PIZZA</span>
          <h3>2 Mixed Pizzas</h3>
          <div class="price">$49.99 <span>59.99</span></div>
        </div>
        <div class="box-bottom">
          <a href="#" class="btn add-to-cart" data-id="3" data-name="2 Mixed Pizzas" data-category="PIZZA"
            data-price="49.99" data-image = "images/menu-3.png">Add to card</a>
        </div>
      </div>

      <div class="box">
        <div class="box-head">
          <img src="images/menu-4.png" alt="menu">
          <span class="menu-category">burger</span>
          <h3>3 Meat Burgers</h3>
          <div class="price">$79.99 <span>99.99</span></div>
        </div>
        <div class="box-bottom">
          <a href="#" class="btn add-to-cart" data-id="4" data-name="3 Meat Burgers" data-category="BURGER"
            data-price="79.99" data-image = "images/menu-4.png">Add to card</a>
        </div>
      </div>

    </div>
  </section>
  <!------------------MENU SECTİON END------------------>


  <!------------------PRODUCTS SECTİON START------------------>
  <section class="products" id="productsection">
    <h1 class="heading">our <span>products</span></h1>
    <div class="box-container">
      <div class="box">
        <div class="box-head">
          <span class="title">MINI BURGER</span>
          <a href="#" class="name">Bacon Burger</a>
        </div>
        <div class="image">
          <img src="images/product-1.png" alt="">
        </div>
        <div class="box-bottom">
          <div class="info">
            <b class="price">$6.00</b>
            <span class="amount">110gr / 300 Cal</span>
          </div>
          <div class="product-btn">
            <a href="#">
              <i class="fas fa-plus"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="box">
        <div class="box-head">
          <span class="title">DARK BURGER</span>
          <a href="#" class="name">Dark+Cheese Burger</a>
        </div>
        <div class="image">
          <img src="images/product-2.png" alt="">
        </div>
        <div class="box-bottom">
          <div class="info">
            <b class="price">$12.00</b>
            <span class="amount">220gr / 600 Cal</span>
          </div>
          <div class="product-btn">
            <a href="#">
              <i class="fas fa-plus"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="box dark-bg">
        <div class="box-head">
          <span class="title">DOUBLE DARK BURGER</span>
          <a href="#" class="name">Dark+Cheese+Double Burger</a>
        </div>
        <div class="image">
          <img src="images/dark-product.jpg" alt="">
        </div>
        <div class="box-bottom">
          <div class="info">
            <b class="price">$24.00</b>
            <span class="amount">440gr / 1200 Cal</span>
          </div>
          <div class="product-btn">
            <a href="#">
              <i class="fas fa-plus"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!------------------PRODUCTS SECTİON END------------------>


  <!------------------ABOUT SECTİON START------------------>
  <section class="about" id="aboutsection">
    <h1 class="heading">about <span>us</span></h1>
    <div class="row">
      <div class="image">
        <img src="images/about.jpg" alt="about">
      </div>
      <div class="content">
        <h3>What Is The secret Recipe Of Our Burgers?</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium voluptates doloribus culpa,
          nihil dolorum dicta voluptatum, a magnam assumenda laborum nobis magni quis corporis est!</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, nulla.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam quaerat minus voluptates laudantium?
          Natus, fugit.</p>
        <a href="#" class="btn">learn more</a>
      </div>
    </div>
  </section>
  <!------------------ABOUT SECTİON END------------------>


  <!------------------REVİEW SECTİON START------------------>
  <section class="review" id="reviewsection">
    <h1 class="heading">customer's <span>review</span></h1>
    <div class="box-container">
      <div class="box">
        <img src="images/quote.png" alt="quote">
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae doloribus neque a sunt quam
          nostrum alias, quia nihil. Aliquid id necessitatibus blanditiis modi error magni, sunt pariatur aut!
        </p>
        <img src="images/avatar-1.png" alt="avatar" class="user">
        <h3>Jennifer Becker</h3>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
        </div>
      </div>
      <div class="box">
        <img src="images/quote.png" alt="quote">
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae doloribus neque a sunt quam
          nostrum alias, quia nihil. Aliquid id necessitatibus blanditiis modi error magni, sunt pariatur aut!
        </p>
        <img src="images/avatar-2.png" alt="avatar" class="user">
        <h3>John Doe</h3>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
        </div>
      </div>
      <div class="box">
        <img src="images/quote.png" alt="quote">
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae doloribus neque a sunt quam
          nostrum alias, quia nihil. Aliquid id necessitatibus blanditiis modi error magni, sunt pariatur aut!
        </p>
        <img src="images/avatar-3.png" alt="avatar" class="user">
        <h3>Lisa Arambula</h3>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
        </div>
      </div>
    </div>
  </section>
  <!------------------REVİEW SECTİON END------------------>


  <!------------------CONTACT SECTİON START------------------>
  <section class="contact" id="contactsection">
    <h1 class="heading">contact's <span>us</span></h1>
    <div class="row">
      <iframe class="map"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6250.239830093311!2d27.143418899999997!3d38.43869905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14bbd8437c357ec5%3A0x6888684b400dfbd4!2sAlsancak%2C%2035220%20Konak%2F%C4%B0zmir!5e0!3m2!1str!2str!4v1710705730779!5m2!1str!2str"
        loading="lazy" referrerpolicy="no-referrer-when-downgrade">
      </iframe>
      <form>
        <h3>get in touch</h3>
        <div class="inputBox">
          <i class="fas fa-users"></i>
          <input type="text" placeholder="name">
        </div>
        <div class="inputBox">
          <i class="fas fa-envelope"></i>
          <input type="email" placeholder="e-mail">
        </div>
        <div class="inputBox">
          <i class="fas fa-phone"></i>
          <input type="number" placeholder="number">
        </div>
        <input type="submit" class="btn" value="contact now">
      </form>
    </div>
  </section>
  <!------------------CONTACT SECTİON END------------------>


  <!------------------BLOG SECTİON START------------------>
  <section class="blog" id="blogssection">
    <h1 class="heading">our <span>blog</span></h1>
    <div class="box-container">
      <div class="box">
        <div class="image">
          <img src="images/blog-1.jpg" alt="blog">
        </div>
        <div class="content">
          <a href="#" class="title">How To Make Burgers?</a>
          <span>By Admin / 10st May 2020</span>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing
            Elit.
            Consequatur dolorem eos laboriosam
            recusandae voluptatum!</p>
          <a href="#" class="btn">read more</a>
        </div>
      </div>
      <div class="box">
        <div class="image">
          <img src="images/blog-2.jpg" alt="blog">
        </div>
        <div class="content">
          <a href="#" class="title">How To Make A Small Burger?</a>
          <span>By Staff / 15 May 2022</span>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing
            Elit.
            Consequatur dolorem eos laboriosam
            recusandae voluptatum!</p>
          <a href="#" class="btn">read more</a>
        </div>
      </div>
      <div class="box">
        <div class="image">
          <img src="images/blog-3.jpg" alt="blog">
        </div>
        <div class="content">
          <a href="#" class="title">Tasty And Refreshing Coffe</a>
          <span>By Admin / 21st May 2021</span>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing
            Elit.
            Consequatur dolorem eos laboriosam
            recusandae voluptatum!</p>
          <a href="#" class="btn">read more</a>
        </div>
      </div>
    </div>
  </section>
  <!------------------BLOG SECTİON END------------------>


  <!------------------FOOTER SECTİON START------------------>
  <section class="footer">
    <div class="share">
      <a href="#" class="fab fa-facebook"></a>
      <a href="#" class="fab fa-twitter"></a>
      <a href="#" class="fab fa-instagram"></a>
      <a href="#" class="fab fa-linkedin"></a>
      <a href="#" class="fab fa-pinterest"></a>
    </div>
    <div class="links">
      <a href="#homesection">Home</a>
      <a href="#menusection">Menu</a>
      <a href="#productsection">Products</a>
      <a href="#aboutsection">About</a>
      <a href="#reviewsection">Review</a>
      <a href="#contactsection">Contact</a>
      <a href="#blogssection">Blogs</a>
    </div>
    <div class="credit">
      created by <span>Nehir Böbir</span> | all rigths reserved
    </div>
  </section>
  <!------------------FOOTER SECTİON END------------------>


  <!------------------RESPONSİVE START------------------>
  <!------------------RESPONSİVE END------------------>


  <script src="JavaScript/script.js"></script>
</body>

</html>