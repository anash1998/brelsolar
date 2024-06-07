
<?php 
$title = 'Home';
include 'header.php';
?>

  <div class="slider-overlow">
    <section class="carousel-section carousel">
      <div id="carouselExampleDark" class="carousel slide carousel--element" data-bs-ride="carousel"
        style="overflow-x: hidden ">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class=" carousel-item active" data-bs-interval="3000">
            <div class="bg_img_1 bg_style" loading="lazy"></div>
            <div id="carousel_title"
              class="carousel-caption1 sm_device_title animate__animated nimated animate__backInUp">
              <h1>Welcome to BREL Solar</h1>
              <p class="carousel_description">More energy from the sun falls on the earth in one hour than is used by
                everyone in the world in one year. A variety of technologies. we can say that it is the most efficient
                and
                infinite form of energy.</p>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="3000">
            <div class="bg_img_2 bg_style" loading="lazy"></div>
            <div id="carousel_title" class="carousel-caption1 sm_device_title animate__animated animate__backInUp">
              <h1>Join the Solar Revolution</h1>
              <p class="carousel_description"> Without losing sight of the aesthetic aspect of it, we always look for an
                optimized design according to the function that it has to fulfill. heat water, solar cooling, and a
                variety of other commercial and industrial uses.</p>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="3000">
            <div class="bg_img_3 bg_style" loading="lazy"></div>
            <div id="carousel_title"
              class="carousel-caption1 sm_device_title animate__animated nimated animate__backInUp">
              <h1>Sustainable-Simple-Solar</h1>
              <p class="carousel_description">The technology used in solar panels and advances in this regard offer us
                alternatives that seek improvements in efficiency.Solar energy is the power from the sun. It is a vast,
                inexhaustible, and clean resource.</p>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </section>

    <section class="title-sections mt-5 mb-5">
      <div class="container">
        <h4 class="text-center heading_section"> Bhagirath <div class="texting">Renewable</div>
          <div class="texting">Energy</div>
        </h4>
        <p class="mt-4">A team of experts optimizing development solutions
          with a view to create a sustainable future. We
          continuously expands our knowledge through
          research and by keeping a close eye on the latest
          developments in renewable energy. Leading sustainable
          development solutions for future generations is one
          of our primary goals.
          We are pioneers in the renewable energy sector with a
          proven track record of several solar power plants in operation.
          Based on our Indian foundations we integrate planning,
          designing, customize, implement and capitalize
          smart eco-friendly energy solutions that will both power
          the future and decarbonize the world.
          We develop and build full turnkey solar power projects.
          We deliver engineering, procurement, construction
          (EPC), as well as Project Management Consultancy
          (PMC) and Operation and Maintenance (O&M) services
          development solutions for future generations is one
          of our primary goals.our customers globally</p>
      </div>
    </section>

    <section class="consulting-element slide">
      <div class="container mt-5">
        <div class="row">
          <div class="col-md-6" data-aos="fade-right">
            <div class="consulting-image">
              <img src="./assets/img/bg-images/home/hero-section/consulting-image.webp" alt="" srcset=""
                class="img-fluid">
            </div>
          </div>
          <div class="col-md-6" data-aos="fade-left">
          <form class="gformContactUs" id="contactForm" action="https://script.google.com/macros/s/AKfycbxsAXmvuDOT5c3dTaDuDXzA8Vtegdb0LvcLzKvx4IEYCZ45WuCl5va2tuZXceKA-_2W/exec" method="post" name="contact-form">
          <div class="form-elements">
              <div class="col-md-6 mb-3 w-100">
                  <input type="text" class="form-control" id="cname" placeholder="Name" name="Name" required>
              </div>
              <div class="col-md-6 mb-3 w-100">
                  <input type="email" class="form-control" id="cmailid" placeholder="Email" name="Email" required>
              </div>
              <div class="form-group col-md-6 w-100">
                <input type="text" class="form-control" name="city" id="city" placeholder="City" required>
              </div>
                  <div class="col-md-6 mt-2 mb-3 w-100">
                  <input type="tel" class="form-control" id="ccontactno" placeholder="phone" name="MobileNo"  required>
                  <!-- <small>Format: 123-456-7890</small> -->
              </div>
              <div class="col-md-12 mb-3 text-right">
                <button class="bg_background btn1"  id="submit">Submit</button>
              </div>
          </div>
      </form>
  </div>
          </div>
        </div>
      </div>
    </section>

    <section id="services" class="services">
      <div class="container" data-aos="zoom-in">

        <div class="row gy-4">
          <div class="col-xl-3 col-md-6 d-flex">
            <div class="service-item position-relative">
              <img src="./assets/img/icons/solar-panel.webp" alt="">
              <h4>Solar panel</h4>
              <p>
                Solar panel angle is simply the vertical tilt of your solar panels. It can be a understand since the
                proper</p>
              <div>
                <a href="OurProducts.php#clk1" class="link_style text-decoration-none">ReadMore
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex" id="solar-top">
            <div class="service-item position-relative" id="set-top-section">
              <img src="./assets/img/icons/street-light.webp" alt="">
              <h4>Solar Street lights</h4>
              <p>Reliable solar energy collection for efficient and high-performance power connectivity..</p>
              <a href="OurProducts.php#clk2"  id="data-dev" class="link_style text-decoration-none">ReadMore
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex" >
            <div class="service-item position-relative" id="set-top-section">
              <img src="./assets/img/icons/pump.webp" alt="" id="element-wide">
              <h4>Solar Photovolatic <div class="text-center ms-1">
                  pump</div>
              </h4>
              <p> Adopt sustainable energy with high-performing solar panels customized to suit your requirements.
                .</p>
              <a href="OurProducts.php#clk3"  class="link_style text-decoration-none">ReadMore
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex">
            <div class="service-item position-relative" id="set-top-section">
              <img src="./assets/img/icons/solar on-off grid system.webp" alt="" id="element-wide">
              <h4>Solar on-off Grid <div class="text-center ms-1">
                  system</div>
              </h4>
              <p>Utilize the collective power of solar and wind energy for a more reliable and cleaner environment.</p>
              <a href="OurProducts.php#clk5" class="link_style text-decoration-none">ReadMore
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="text_content test-up mt-5">
        <h3 class="text-center mt-5 heading_section">Our Services</h3>
      </div>
    </section>

    <section id="about">

      <div class="container mt-5" data-aos="fade-up">
        <header class="section-header">
        </header>

        <div class="row about-cols">


          <!-- Engineering  1-->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="about-col">
              <div class="img">
                <img src="./assets/img/bg-images/Service page/jpeg-optimizer_engineering.webp" alt="" class="img-fluid">
                <div class="icon"><i class="fa-solid fa-screwdriver-wrench"></i></i></div>
              </div>
              <h2 class="title"><a href="service.php#click2">Engineering</a></h2>
              <p>
                Central to our narrative is the essence of engineering excellence. BREL's engineering team is at the
                forefront of innovation of base the solar.
              </p>
            </div>
          </div>

          <!-- Procurement 2-->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="about-col">
              <div class="img">
                <img src="./assets/img/bg-images/Service page/jpeg-optimizer_procument.webp" alt="" class="img-fluid">
                <div class="icon"><i class="fa-solid fa-file-lines"></i></div>
              </div>
              <h2 class="title"><a href="service.php#click3">Procurement</a></h2>
              <p>
                In the BREL story, procurement plays a pivotal role in ensuring the quality and reliability of our solar
                solutions. We source materials and components.
              </p>
            </div>
          </div>

          <!-- Construction 3-->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="about-col">
              <div class="img">
                <img src="./assets/img/bg-images/Service page/jpeg-optimizer_construction.webp" alt="" class="img-fluid">
                <div class="icon"><i class="fa-solid fa-building-user"></i></div>
              </div>
              <h2 class="title"><a href="service.php#click4">Construction</a></h2>
              <p>
                The construction phase in our journey is a testament to our dedication to seamless and efficient project
                execution. BREL's construction teams
              </p>
            </div>
          </div>

          <!-- Installation 4-->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="about-col">
              <div class="img">
                <img src="./assets/img/bg-images/Service page/jpeg-optimizer_installation.webp" alt="" class="img-fluid">
                <div class="icon"><i class="fa-solid fa-gear"></i></div>
              </div>
              <h2 class="title"><a href="service.php#click5">Installation</a></h2>
              <p>
                At BREL, our story begins with a commitment to providing unparalleled services in the realm of renewable
                energy. With a focus on solar solutions,
              </p>
            </div>
          </div>

          <!-- Operation & Maintainence 5 -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="about-col">
              <div class="img">
                <img src="./assets/img/bg-images/Service page/jpeg-optimizer_maintainace.webp" alt="" class="img-fluid">
                <div class="icon"><i class="fa-solid fa-person-digging"></i></div>
              </div>
              <h2 class="title"><a href="service.php#click6">Operation & Maintainence</a></h2>
              <p>Our O&M services ensure regular monitoring and maintenance. Our critical tasks also include performance
                monitoring of brel's solutions of proper way of reliable.
              </p>
            </div>
          </div>

          <!-- Quality Assurance 6-->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="about-col">
              <div class="img">
                <img src="./assets/img/bg-images/Service page/jpeg-optimizer_quality assurance.webp" alt=""
                  class="img-fluid">
                <div class="icon"><i class="fa-solid fa-ranking-star"></i></i></div>
              </div>
              <h2 class="title"><a href="service.php#click7">Quality Assurance</a></h2>
              <p>
                We always aim at maintaining highest level of quality standards in the range of Solar Panels, Solar LED
                Lights, Solar Street Light And Solar Photovoltaic Pump Setss.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="text_content">
        <h3 class="text-center mt-5 mb-5 heading_section">Benefits of Solar</h3>
      </div>
    </section>

    <section class="element-widget">
      <div class="container">
        <div class="row" data-aos="fade-up">
          <div class="col-xl-3 col-md-6">
            <div class="element-icons-set">
              <i class="fa-regular fa-file-lines"></i>
            </div>
            <div class="element-tiltes mb-4">
              Cost-Efficiency
            </div>
            <div class="element-paragraph">
              <p>Save money on electricity bills with solar energy, offering significant long-term savings.
              </p>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 element-top-section">
            <div class="element-icons-set">
              <i class="fa-solid fa-handshake"></i>
            </div>
            <div class="element-tiltes mb-4">
              Eco-Friendly
            </div>
            <div class="element-paragraph">
              <p> Reduce your carbon footprint by using clean, renewable energy from the sun, contributing to a greener
                planet</p>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 set-adjacement main-top ">
            <div class="element-icons-set">
              <i class="fa-solid fa-screwdriver-wrench"></i>
            </div>
            <div class="element-tiltes mb-4">
              Energy Independence
            </div>
            <div class="element-paragraph">
              <p>Gain more control over your power supply by relying on solar energy, decreasing dependence on
                traditional
                sources.</p>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 element-top-section set-adjacement main-element-top" id="text-up">
            <div class="element-icons-set">
              <i class="fa-solid fa-bolt-lightning"></i>
            </div>
            <div class="element-tiltes mb-4 ">
              Low Maintenance, High Reliability
            </div>
            <div class="element-paragraph ">
              <p> Solar panels require minimal upkeep while providing reliable electricity for years to come.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="text_content">
      <h3 class="text-center mt-5 heading_section top-section">Why Choose Us</h3>
    </div>
<div class="overflow-cards">

  <div class="hero_img2 bg_img7 mt-5">
    <div class="choose-heading" data-aos="fade-down">
        <h2>Live Green,Love Green,Think Green</h3>
          <p>Embrace a green lifestyle - Live Green, Love Green, Think Green, and together, let's save electricity with
            solar power</p>
      </div>
    </div>
    <div class="container">
      <div class="slider-show">
        <div class="row">
          <div class="col-lg-3 col-md-6 z-1">
            <div class="card card-element1" data-aos="fade-right" data-aos-duration="600">
              <div class="card-body element-icon" id="set-element">
                <i class="fa-solid fa-helmet-safety"></i>
                <h5 class="card-title text-center ">Expertise in Renewable</h5>
                <p class="card-text p-1 card-justify" style="text-align: center;"> BREL brings extensive experience and
                  expertise in delivering
                  customised solar
                  solutions tailored to your specific needs..</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 z-1">
            <div class="card card-element1" data-aos="fade-right" data-aos-duration="600">
              <div class="card-body element-icon background-color-element" id="set-element">
                <i class="fa-regular fa-lightbulb"></i>
                <h5 class="card-title text-center">Quality and Affordability</h5>
                <p class="card-text p-1 card-justify" style="text-align: center;"> Our commitment to top-quality
                  products
                  and cost-effective solutions
                  ensures you
                  get the best value for your investment.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 z-1">
            <div class="card card-element1" data-aos="fade-left" data-aos-duration="600">
              <div class="card-body element-icon" id="set-element">
                <i class="fa-solid fa-layer-group"></i>
                <h5 class="card-title text-center">Customer Approach</h5>
                <p class="card-text p-1" style="text-align: center;">We prioritise our customers, offering seamless
                  experiences and personalised
                  support from inquiry to installation and beyond. </p>
                </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 z-1">
            <div class="card card-element1" data-aos="fade-left" data-aos-duration="600">
              <div class="card-body element-icon background-color-element"  id="set-element">
                <i class="fa-brands fa-canadian-maple-leaf"></i>
                <h5 class="card-title text-center">Environmental Impact</h5>
                <p class="card-text p-1" style="text-align: center">By choosing BREL, you contribute to a greener
                  future,
                  reducing your carbon
                  footprint and embracing sustainable energy.</p>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  <div class="text_content ">
    <h3 class="text-center heading_section text-top">Our Clients</h3>
  </div>
  <section>
    <div class="slider-area mt-5" id="cllent-section" data-aos="fade-up" data-aos-delay="100">
      <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item carousel-top active">
            <div class="img-area">
              <img src="./assets/img/bg-images/home/hero-section/client_img_1.webp" alt="">
            </div>
            <div class="carousel-caption carousel_caption ">
              <h3>Amit Kumar</h3>
              <h4>customer</h4>
              <p>Thrilled with my decision to go solar! Their team was incredibly knowledgeable and guided me through
                every step of the process, from selecting the right panels to installation and beyond.</p>
            </div>
          </div>
          <div class="carousel-item carousel-top">
            <div class="img-area">
              <img src="./assets/img/bg-images/home/hero-section/client_img-2.webp" alt="" class="user">
            </div>
            <div class="carousel-caption carousel_caption">
              <h3>Vikash Rathore</h3>
              <h4>customer</h4>
              <p>Exceptional service and results! I'm thoroughly impressed with the service and results. From the
                initial consultation to the final installation, the team was professional, courteous, and efficient..
              </p>
            </div>
          </div>
          <div class="carousel-item carousel-top">
            <div class="img-area">
              <img src="./assets/img/bg-images/home/hero-section/client_img-3.webp" alt="" class="user">
            </div>
            <div class="carousel-caption carousel_caption">
              <h3>Rita Rathore</h3>
              <h4>customer</h4>
              <p>Great experience, highly recommended! From the moment I reached out to inquire about their services,
                they were responsive, courteous, and knowledgeable. I highly recommend them to anyone looking to go..
              </p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev carousel_control" type="button"
          data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next carousel_control" type="button"
          data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </section>

<?php include 'footer.php'?> 
-

 