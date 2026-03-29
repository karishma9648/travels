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
            HOME <span>></span> CAR DETAILS
          </p>

          <h1 class="cs-title">Car Details</h1>

        </div>
      </div>

    </div>
  </div>
</section>

<section class="csd-car-details py-5">
  <div class="container">

    <!-- Car Image -->
    <div class="csd-car-img text-center">
      <img src="image/swift-FTV4h9a9.jpg" alt="car">
    </div>

    <!-- Title -->
    <div class="csd-car-title text-center mt-4">
      <p class="csd-subtitle">CHEVEROLET</p>
      <h2>Maruti Swift</h2>
    </div>

    <!-- Features -->
    <div class="row csd-features text-center mt-5">

      <div class="col-6 col-md-4 col-lg">
        <div class="csd-feature-box">
          <div class="csd-icon"><i class="bi bi-speedometer2"></i></div>
          <p>Mileage</p>
          <h6>40,000</h6>
        </div>
      </div>

      <div class="col-6 col-md-4 col-lg">
        <div class="csd-feature-box">
          <div class="csd-icon"><i class="bi bi-gear"></i></div>
          <p>Transmission</p>
          <h6>Manual</h6>
        </div>
      </div>

      <div class="col-6 col-md-4 col-lg">
        <div class="csd-feature-box">
          <div class="csd-icon"><i class="bi bi-person"></i></div>
          <p>Seats</p>
          <h6>5 Adults</h6>
        </div>
      </div>

      <div class="col-6 col-md-4 col-lg">
        <div class="csd-feature-box">
          <div class="csd-icon"><i class="bi bi-briefcase"></i></div>
          <p>Luggage</p>
          <h6>4 Bags</h6>
        </div>
      </div>

      <div class="col-6 col-md-4 col-lg">
        <div class="csd-feature-box">
          <div class="csd-icon"><i class="bi bi-fuel-pump"></i></div>
          <p>Fuel</p>
          <h6>Petrol</h6>
        </div>
      </div>

    </div>

  </div>
</section>

<section class="csf-tabs-section py-5">
  <div class="container">

    <!-- Tabs Nav -->
    <ul class="nav justify-content-center csf-tabs-nav mb-4" id="carTabs" role="tablist">
      
      <li class="nav-item">
        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#features">
          Features
        </button>
      </li>

      <li class="nav-item">
        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#description">
          Description
        </button>
      </li>

      <li class="nav-item">
        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#review">
          Review
        </button>
      </li>

    </ul>

    <!-- Tabs Content -->
    <div class="tab-content">

      <!-- FEATURES -->
      <div class="tab-pane fade show active" id="features">
        <div class="row">

          <div class="col-md-4">
            <ul class="csf-list">
              <li class="yes">Airconditions</li>
              <li class="yes">Child Seat</li>
              <li class="yes">GPS</li>
              <li class="yes">Luggage</li>
              <li class="yes">Music</li>
            </ul>
          </div>

          <div class="col-md-4">
            <ul class="csf-list">
              <li class="yes">Seat Belt</li>
              <li class="no">Sleeping Bed</li>
              <li class="yes">Water</li>
              <li class="yes">Bluetooth</li>
              <li class="no">Onboard computer</li>
            </ul>
          </div>

          <div class="col-md-4">
            <ul class="csf-list">
              <li class="yes">Audio input</li>
              <li class="yes">Long Term Trips</li>
              <li class="yes">Car Kit</li>
              <li class="yes">Remote central locking</li>
              <li class="yes">Climate control</li>
            </ul>
          </div>

        </div>
      </div>

      <!-- DESCRIPTION -->
      <div class="tab-pane fade" id="description">
        <div class="csf-content">
          <p>
            This Mercedes Grand Sedan offers premium comfort with advanced features,
            smooth driving experience and modern technology integration.
          </p>
        </div>
      </div>

      <!-- REVIEW -->
      <div class="tab-pane fade" id="review">
        <div class="csf-content">
          <p><strong>⭐⭐⭐⭐☆</strong> - Excellent performance and comfort.</p>
          <p><strong>⭐⭐⭐⭐⭐</strong> - Loved the smooth driving experience!</p>
        </div>
      </div>

    </div>

  </div>
</section>
 <div class="container">
    <div class="text-center mb-5">
                <h2 class="fw-bold">Related Cars</h2>
               
            </div>

            <div class="row justify-content-center g-4">

         
                

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card car-card h-100">

                        <div class="img-box position-relative">
                            <img src="image/ertiga-D2hWJ2M3.jpg" class="card-img-top">

                            <span class="badge tag bg-success">Family</span>
                            <span class="rating">
                                ⭐ 4.5
                            </span>
                        </div>

                        <div class="card-body d-flex flex-column">
                            <h5 class="fw-bold">Maruti Ertiga</h5>
                            <p class="text-muted small">Ideal for family outings and comfortable travel</p>

                            <div class="d-flex justify-content-between small mb-2 text-secondary">
                                <span><i class="fa fa-user"></i> 7</span>
                                <span><i class="fa fa-suitcase"></i> 4</span>
                                <span><i class="fa fa-gas-pump"></i> Petrol/CNG</span>
                            </div>

                            <div class="features mb-3">
                                <span>AC</span>
                                <span>GPS</span>
                                <span>Music</span>
                            </div>

                            <!-- PRICE -->
                            <div class="price-box mt-auto">
                                <h6 class="price mb-0">₹13/km <small>onwards</small></h6>
                            </div>

                            <!-- BUTTONS -->
                            <div class="btn-group-custom">
                                <a href="details.php" class="btn explore-btn btn-sm">Explore More</a>
                                <button class="btn book-btn btn-sm" onclick="openModal()">Book Now</button>
                            </div>
                        </div>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card car-card h-100">

                        <div class="img-box position-relative">
                            <img src="image/crysta-DgDRNYIF.jpg" class="card-img-top">

                            <span class="badge tag bg-success">Premium</span>
                            <span class="rating">
                                ⭐ 4.5
                            </span>
                        </div>

                        <div class="card-body d-flex flex-column">
                            <h5 class="fw-bold">Toyota Innova Crysta</h5>
                            <p class="text-muted small">Ideal for family trips and long journeys

                            </p>

                            <div class="d-flex justify-content-between small mb-2 text-secondary">
                                <span><i class="fa fa-user"></i> 7</span>
                                <span><i class="fa fa-suitcase"></i> 5</span>
                                <span><i class="fa fa-gas-pump"></i> Diesel</span>
                            </div>

                            <div class="features mb-3">
                                <span>AC</span>
                                <span>GPS</span>
                                <span>Music</span>
                            </div>

                            <!-- PRICE -->
                            <div class="price-box mt-auto">
                                <h6 class="price mb-0">₹16/km <small>onwards</small></h6>
                            </div>

                            <!-- BUTTONS -->
                            <div class="btn-group-custom">
                                <a href="details.php" class="btn explore-btn btn-sm">Explore More</a>
                                <button class="btn book-btn btn-sm" onclick="openModal()">Book Now</button>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card car-card h-100">

                        <div class="img-box position-relative">
                            <img src="image/thar-DDEH5HwU.jpg" class="card-img-top">

                            <span class="badge tag bg-success">Adventure</span>
                            <span class="rating">
                                ⭐ 4.5
                            </span>
                        </div>

                        <div class="card-body d-flex flex-column">
                            <h5 class="fw-bold">Mahindra Thar</h5>
                            <p class="text-muted small">Perfect for adventure trips and rough terrain</p>

                            <div class="d-flex justify-content-between small mb-2 text-secondary">
                                <span><i class="fa fa-user"></i> 4</span>
                                <span><i class="fa fa-suitcase"></i> 2</span>
                                <span><i class="fa fa-gas-pump"></i> Diesel</span>
                            </div>

                            <div class="features mb-3">
                                <span>AC</span>
                                <span>GPS</span>
                                <span>Music</span>
                            </div>

                            <!-- PRICE -->
                            <div class="price-box mt-auto">
                                <h6 class="price mb-0">₹20/km <small>onwards</small></h6>
                            </div>

                            <!-- BUTTONS -->
                            <div class="btn-group-custom">
                                <a href="details.php" class="btn explore-btn btn-sm">Explore More</a>
                                <button class="btn book-btn btn-sm" onclick="openModal()">Book Now</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
   
                    

     <!-- content end -->
      <?php include 'footer.php'; ?>
</body>
</html>