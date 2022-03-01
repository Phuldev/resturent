@extends('Users.Layout.Master')
@section('title','Home')
@section('content')
  <header>
    <nav class="navbar navbar-expand-lg navbar-light p-0">
      <div class="container">
        <a class="navbar-brand text-white" href="#">
          <img src="./img/logo.png" alt="" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><b><span style="font-size: 12px; !important" class="texture-green">MENU</span></b>
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.html">Home</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="pages/about.html">About us</a>
            </li>
      
            <li class="nav-item">
              <a class="nav-link" href="pages/menu.html">Menu</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="pages/specialities.html">Book table</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/login.html">Login</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="pages/contact.html">Contact</a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <div class="banner">
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{asset('image/138550912slider-image2.jpg')}}" class="d-block w-100" alt="..." />
          <div class="carousel-caption d-md-block">
            <p>Providing the quality food</p>
            <h5>Atmosphere restro</h5>

            
            <a href="#welcome">
              <div class="double-arrow">
                <i class="las la-angle-double-down arrow-down"></i>
              </div>
            </a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{asset('image/1207395877slider-image1.jpg')}}" class="d-block w-100" alt="..." />
          <div class="carousel-caption d-md-block">
            <p>Serving tasty food</p>
            <h5>Atmosphere Restro</h5>

            
            <a href="#welcome">
              <div class="double-arrow">
                <i class="las la-angle-double-down arrow-down"></i>
              </div>
            </a>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  <section class="welcome" id="welcome">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h3 style="background: url('./img/title_texture_green.png')" class="section-title text-center texture-green"
            data-aos="fade-down" data-aos-duration="2000">
            Welcome To Atmosphere Resturant 
          </h3>
          <p class="welcome-text text-center" data-aos="fade-down">
            Green Farm Meat NSW Halal has a remarkable selection of exquisite
            Chicken, Lamb, Beef and Goat products in every cut imaginable. You
            have enough choice to choose the best out of varied of high
            quality halal meat at decent prices at our meat shop.
          </p>
        </div>
        <div class="col-md-6 d-flex">
          <div class="welcome-image1" data-aos="fade-right"></div>
          <div class="welcome-image2" data-aos="fade-right"></div>
        </div>
      </div>
    </div>
  </section>

  <section class="special">
    <div class="container">
      <h3 class="section-title text-center mb-5 texture-green">
        Customer review
      </h3>
      <div class="row">
        <div class="col-md-3">
          <div class="special-box">
            <a href="pages/menu.html">
              <img src="{{asset('image/826170483our-cuisine-1.png')}}" alt="" />
              <div class="special-content">
                <h4 class="special-name">Akriti</h4>
                <p class="special-description text-center">
                  Best place to hagout. Good good food and good service. 
                </p>
              </div>
            </a>
          </div>
          <h3 class="text-center texture-green mt-3">Akriti Bhattarai &nbsp; <i class="fa fa-arrow-right"></i></h3>
        </div>
        <div class="col-md-3 special-box">
          <div class="special-box">
            <a href="pages/menu.html">
              <img src="{{asset('image/916763445our-cuisine-2.png')}}" alt="" />
              <div class="special-content">
                <h4 class="special-name">Ashim</h4>
                <p class="special-description text-center">
                  Both food and service has been great here. 
                </p>
              </div>
            </a>
          </div>
          <h3 class="text-center texture-green mt-3">Ashim Nepal&nbsp; <i class="fa fa-arrow-right"></i></h3>
        </div>
        <div class="col-md-3 special-box">
          <div class="special-box">
              <img src="./img/1634746773our-cuisine-3.png" alt="" />
              <div class="special-content">
                <h4 class="special-name">Shambhavi</h4>
                <p class="special-description text-center">
                  The vibe here is great along with its food and service. 
                </p>
              </div>
            </a>
          </div>
          <h3 class="text-center texture-green mt-3">Shambhavi Mishara &nbsp; <i class="fa fa-arrow-right"></i></h3>
        </div>
        <div class="col-md-3 special-box">
          <div class="special-box">
            <a href="pages/menu.html">
              <img src="{{asset('imgage/1814091960our-cuisine-4.png')}}" alt="" />
              <div class="special-content">
                <h4 class="special-name">Abhishek</h4>
                <p class="special-description text-center">
                  The place never fails to provide the good quality of food and the time. 
                </p>
              </div>
            </a>
          </div>
          <h3 class="text-center mt-3 texture-green">Abhishek Gautam &nbsp; <i class="fa fa-arrow-right"></i></h3>
        </div>
      </div>
    </div>
  </section>
  <section class="testimonial" style="
        background-image: url(./img/66255886about-bg.jpg) !important;
        background-size: cover;
        background-attachment: fixed;
        background-repeat: no-repeat;
      ">
    <div class="container">
      <h3 data-aos="fade-up" class="mb-5 section-title-border text-white text-center"
        style="font-family: Arial; font-size: 55px">
        SHARING GREAT FOOD TOGETHER
      </h3>
      <div class="">
        <div class="text-center">

          <p class="mb-5" data-aos="fade-up" style="font-size: 24px; color: #fff">
            At atmosphere 
          </p>

          <div class="text-center " data-aos="fade-up">
            <div data-aos="fade-up" class=" btn-container mx-auto text-center btn-container--white btn-hover"
              style="opacity: 1; transform: matrix(1, 0.00017, -0.00017, 1, 0, 0);">
              <div class="bg-image"></div>
              <a data-aos="fade-up" class="btn btn--white tra-king-js" tracking-event="engagement home"
                tracking-action="click verde way cta" href="pages/products.html">Explore Menu</a>
            </div>
          </div>
        </div>
      </div>


    </div>
    </div>
  </section>
</body>
<footer>
  <section class="footer" style="
        background-image: url(http://giardino.axiomthemes.com/wp-content/uploads/2017/12/bg-40.jpg?id=417) !important;
      ">
    <div class="container text-white">
      <div class="row">
        <div class="col-md-4">
          <h3 class="mb-4">Find Us</h3>

          <ul>
            <li class="mb-4">
              <i class="fa fa-map-marker-alt"></i>
              Kupondole 
            </li>
            <li class="mb-4">
              <i class="fa fa-phone"></i>
              015_______
            </li>
            <li>
              <i class="fa fa-envelope"></i>
              atmosphere@gmail.com
            </li>
          </ul>
        </div>
        <div class="col-md-5">
          <h3 class="mb-4"><i class="fa fa-clock"></i> Store Hours</h3>

          <ul style="column-count: 2;">
            <li class="mb-2">Everyday - 08:00AM to 10:00PM</li>
         
        </div>
        <div class="col-md-3">
          <ul class="text-right">
            <li>
              <a class="text-right text-white">Atmosphere</a>
            </li>

            <li>
              <a class="text-right text-white">Contact</a>
            </li>
      <li>
              <a class="text-right text-white">table book</a>
            </li>
      <li>
              <a class="text-right text-white">login</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="container">
  
      <hr class="separator" style="transform: translate3d(0px, 0px, 0px); opacity: 1" />
      <div class="
            row
            sub-footer
            d-flex
            justify-content-between
            align-items-center
          ">

          <!-- SOCIAL FOOTER LIST -->
        </div>
        <div class="
              copyright
              txt-white
              order-sm-1
              col-12 col-md-7
              layout--contained
            ">
          <div class="d-flex justify-content-center justify-content-md-start">
            <p class="text-white">© 2021 atmopshere | &nbsp;</p>
            <a href="#" class="no-style text-white" title="">terms &amp; conditions</a>
      
      <ul class="social-icons">
          <li><a href=" "><img src="{{asset('image/facebook.png')}}" /></a></li>
          <li><a href=" "><img src="{{asset('image/insta.png')}}" /></a></li>
          
      </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
</footer>  
@endsection
