<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include 'header-link.php'; ?>
</head>
<body>
    <?php include 'header.php'; ?>
    <!-- content -->

<section class="cs-hero d-flex align-items-center">
  <div class="container">
    <div class="row">
      
      <div class="col-lg-6 col-md-8">
        <div class="cs-hero-content">
          
          <p class="cs-breadcrumb">
            HOME <span>></span> Contact Us
          </p>

          <h1 class="cs-title">Contact Us</h1>

        </div>
      </div>

    </div>
  </div>
</section>

<section class="cci-contact-section py-5">
  <div class="container text-center">

    <!-- Top Label -->
    <p class="cci-label">CONTACT DETAILS</p>

    <!-- Heading -->
    <h2 class="cci-heading mb-5">Contact Informations</h2>

    <div class="row g-4 justify-content-center">

      <!-- Location -->
      <div class="col-md-6 col-lg-4">
        <div class="cci-card">
          <div class="cci-icon">
            <i class="bi bi-geo-alt"></i>
          </div>
          <h4>Our Location</h4>
          <p>Shop no.8, City Complex, Manas City,
Indira Nagar, Lucknow </p>
          <p>- 226015</p>
        </div>
      </div>

      <!-- Email -->
      <div class="col-md-6 col-lg-4">
        <div class="cci-card">
          <div class="cci-icon">
            <i class="bi bi-envelope"></i>
          </div>
          <h4>Email Address</h4>
          <p>contact@example.com</p>
          <p>support@example.com</p>
        </div>
      </div>

      <!-- Phone -->
      <div class="col-md-6 col-lg-4">
        <div class="cci-card">
          <div class="cci-icon">
            <i class="bi bi-telephone"></i>
          </div>
          <h4>Phone Number</h4>
          <p>Emergency Cases</p>
          <p>+(208) 555-0112 (24/7)</p>
        </div>
      </div>

    </div>

  </div>
</section>

<section class="map-sec">
  <div class="container">
    
    <h2 class="map-title">Our Location</h2>

    <div class="row g-4 align-items-center">

      <!-- Left Info -->
      <div class="col-lg-5">
        <div class="map-info">
          <h4>Visit Our Office</h4>
          <p>
            Shop no.8, City Complex, Manas City,<br>
            Indira Nagar, Lucknow - 226015
          </p>

          <p><i class="fa fa-phone"></i> +91 98765 43210</p>
          <p><i class="fa fa-envelope"></i> info@example.com</p>

          <a href="https://www.google.com/maps?q=Shop+no.8+City+Complex+Manas+City+Indira+Nagar+Lucknow+226015" 
             target="_blank" class="map-btn">
            Get Directions <i class="fa fa-arrow-right"></i>
          </a>
        </div>
      </div>

      <!-- Right Map -->
      <div class="col-lg-7">
        <div class="map-box">
          <iframe 
            src="https://maps.google.com/maps?q=Shop%20no.8%20City%20Complex%20Manas%20City%20Indira%20Nagar%20Lucknow%20226015&t=&z=15&ie=UTF8&iwloc=&output=embed"
            frameborder="0"
            allowfullscreen>
          </iframe>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="ctc-section text-center">

  <div class="container ctc-content">
    
    <div class="ctc-heading mb-5">
      <small>CONTACT US NOW</small>
      <h1>Keep In Touch.</h1>
    </div>

    <form>
      <div class="row g-3 justify-content-center">

        <div class="col-md-5">
          <input type="text" class="form-control ctc-input" placeholder="User name">
        </div>

        <div class="col-md-5">
          <input type="email" class="form-control ctc-input" placeholder="Email Address">
        </div>

        <div class="col-md-10">
          <input type="text" class="form-control ctc-input" placeholder="Title Message">
        </div>

        <div class="col-md-10">
          <textarea class="form-control ctc-input" rows="5" placeholder="Message"></textarea>
        </div>

        <div class="col-12 mt-3">
          <button class="btn ctc-btn">SEND MESSAGE NOW</button>
        </div>

      </div>
    </form>

  </div>

  
</section>



     <!-- content end -->
      <?php include 'footer.php'; ?>
</body>
</html>