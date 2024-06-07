<?php 
$title = 'Contact us';
include 'header.php'?>
  
  <section class="flex-column d-block ">
    <div class="hero_img bg_img2">
      <h2 class="breadcrums_title ms-4">Contact Us</h2>
      <div class="d-flex align-items-center justify-content-center ms-4 mb breadcrumb-section">
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb_icons"><i class="bi bi-chevron-right"></i></li>
            <li class="breadcrumb-item text-white" aria-current="page">Contact Us</li>
          </ol>
        </nav>
      </div>
    </div>
  </section>
 
  <section>
    <div class="text_content test-up mt-5">
      <h3 class="text-center mt-5 heading_section">Contact Us</h3>
    </div>
  </section>

  <section id="contact-us" class="contact-us">
    <div class="container" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
      <div class="row mt-5">
        <div class="col-lg-8  mt-lg-0">
          <iframe class="contact-iframes"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.921180458889!2d72.51966197828358!3d23.02666606249177!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e85a789f709f3%3A0x247b137594876fa5!2sIscon%20Emporio!5e0!3m2!1sen!2sin!4v1709553363666!5m2!1sen!2sin"
            width="700" height="500" style="border:0;" allowfullscreen="" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="col-lg-4 mt-lg-5">
          <div class="info">
            <div class="address">
              <i class="bi bi-geo-alt"></i>
              <h4>Location:</h4>
              <h6>Registerd Office</h6>
              <p>526 Iscon Emporio, Next to Star Bazaar, Satellite Road Satellite, Ahmedabad, Gujarat 380015 India
              </p>
              <hr class="hrlineincontactus">
              <i class="bi bi-geo-alt"></i>
              <h6>Head Office</h6>
              <p>402 Luxuria Business Hub, Near VR Mall Udhana, Magdalla Road, Dumas Road, Surat Gujarat - 395007
                India </p>

            </div>
            <div class="email">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>info@brelindia.com</p>
            </div>
            <div class="phone">
              <i class="bi bi-phone"></i>
              <h4>Call:</h4>
              <p>+91 98250 66759</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>
  </section>

<!-- new contact form by pradhumn  -->
<div class="container section-bg">
  <!-- <h4 class="heading pl-4 mb-4">Write to us BREL</h4> -->
  <!-- <p class="mt-4 section-paragraph"><b>For any other information, send us an email to <a href="mailto:info">info@brelindia.com</a></b></p> -->
  <div class="contact-form">
    <form class="gformContactUs" id="contactForm" action="https://script.google.com/macros/s/AKfycbxsAXmvuDOT5c3dTaDuDXzA8Vtegdb0LvcLzKvx4IEYCZ45WuCl5va2tuZXceKA-_2W/exec" method="post" name="contact-form">
          <div class="form-elements row">
              <div class="col-md-6 mb-3">
                  <input type="text" class="form-control" id="cname" placeholder="Name" name="Name" required>
              </div>
              <div class="col-md-6 mb-3">
                  <input type="email" class="form-control" id="cmailid" placeholder="Email" name="Email" required>
              </div>
              <div class="form-group col-md-6">
                <input type="text" class="form-control" name="city" id="city" placeholder="City" required>
              </div>
                            <div class="col-md-6 mb-3">
                  <input type="tel" class="form-control" id="ccontactno" placeholder="phone" name="MobileNo"  required>
                  <!-- <small>Format: 123-456-7890</small> -->
              </div>
              <div class="col-md-12 mb-3">
                <select class="form-control" name="subject" id="cmessageType" required>
                    <option value="">Subject of Message</option>
                    <option value="General Inquiry">General Inquiry</option>
                    <option value="Website Feedback">Website Feedback</option>
                    <option value="Media">Media</option>
                    <option value="Investors">Investors</option>
                    <option value="Careers">Careers</option>
                </select>
            </div>


              <div class="col-md-12 mb-3">
                  <textarea class="form-control" rows="3" id="cmessage" placeholder="Message" name="Message" required></textarea>
              </div>
              <div class="col-md-4 mb-3">
                  <!-- reCAPTCHA goes here -->
              </div>
              <div class="col-md-12 mb-3 text-right">
                <button class="bg_background btn1"  id="submit">submit</button>
              </div>
          </div>
      </form>
  </div>
</div>

  </main><!-- End #main -->
  <!-- footer -->
  <?php include 'footer.php'?>