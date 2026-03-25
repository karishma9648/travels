<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sachan Tour & Travels</title>

   <?php include 'header-link.php'; ?>

</head>

<body>
<?php include 'header.php'; ?>
   
    <!-- HERO -->
    <section class="hero">
        <div class="overlay"></div>

        <div class="hero-content">
            <h1>
                Book Your Premium
                <span class="highlight">Royal</span><br>
                <span class="journey">Journey</span>
            </h1>

            <p>
                All India taxi service with professional drivers, premium cars,
                and 24/7 availability at reasonable rates. Your comfort is our priority.
            </p>

            <!-- BOOKING -->

            <div class="booking-box">

                <!-- Pickup -->
                <div class="field dropdown">
                    <div class="label">
                        <i class="fa fa-map-marker-alt"></i>
                        <span>Pickup Location</span>
                    </div>
                    <input type="text" class="dropdown-input" placeholder="Enter pickup city" autocomplete="off">

                    <ul class="dropdown-menu">
                        <li>Delhi</li>
                        <li>Mumbai</li>
                        <li>Jaipur</li>
                        <li>Lucknow</li>
                        <li>Prayagraj</li>
                        <li>Varanasi</li>
                    </ul>
                </div>

                <!-- Destination -->
                <div class="field dropdown">
                    <div class="label">
                        <i class="fa fa-location-arrow"></i>
                        <span>Destination</span>
                    </div>
                    <input type="text" class="dropdown-input" placeholder="Enter destination city" autocomplete="off">

                    <ul class="dropdown-menu">
                        <li>Delhi</li>
                        <li>Mumbai</li>
                        <li>Jaipur</li>
                        <li>Lucknow</li>
                        <li>Agra</li>
                        <li>Kanpur</li>
                    </ul>
                </div>

                <div class="field">
                    <div class="label">
                        <i class="fa fa-calendar"></i>
                        <span>Travel Date</span>
                    </div>
                    <input type="date">
                </div>

                <div class="field">
                    <div class="label">
                        <i class="fa fa-user"></i>
                        <span>Passengers</span>
                    </div>
                    <select>
                        <option>1 Passenger</option>
                        <option>2 Passenger</option>
                    </select>
                </div>

                <button class="search-btn">Select a Car First →</button>

            </div>
        </div>

    </section>
    <!-- ride section -->
    <section class="cars-section py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Choose Your Perfect Ride</h2>
            <p class="text-muted">
                From budget-friendly city cars to luxury SUVs, we have the perfect vehicle for every journey
            </p>
        </div>

        <div class="row g-4">

            <!-- CARD 1 -->
            <div class="col-lg-3 col-md-6">
                <div class="card car-card h-100">

                    <div class="position-relative">
                        <img src="image/swift-FTV4h9a9.jpg" class="card-img-top">

                        <span class="badge tag bg-success">Economy</span>
                        <span class="rating">
                            ⭐ 4.5
                        </span>
                    </div>

                    <div class="card-body">
                        <h5 class="fw-bold">Maruti Swift</h5>
                        <p class="text-muted small">Perfect for city rides and short trips</p>

                        <div class="d-flex justify-content-between small mb-2 text-secondary">
                            <span><i class="fa fa-user"></i> 4</span>
                            <span><i class="fa fa-suitcase"></i> 2</span>
                            <span><i class="fa fa-gas-pump"></i> Petrol</span>
                        </div>

                        <div class="features mb-3">
                            <span>AC</span>
                            <span>GPS</span>
                            <span>Music</span>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <h6 class="price mb-0">₹11/km <small>onwards</small></h6>
                            <a href="#" class="btn btn-success btn-sm">Book Now</a>
                        </div>
                    </div>

                </div>
            </div>

            <!-- CARD 2 -->
            <div class="col-lg-3 col-md-6">
                <div class="card car-card h-100">

                    <div class="position-relative">
                        <img src="image/ertiga-D2hWJ2M3.jpg" class="card-img-top">

                        <span class="badge tag bg-success">Family</span>
                        <span class="rating">⭐ 4.5</span>
                    </div>

                    <div class="card-body">
                        <h5 class="fw-bold">Maruti Ertiga</h5>
                        <p class="text-muted small">Ideal for family outings</p>

                        <div class="d-flex justify-content-between small mb-2 text-secondary">
                            <span><i class="fa fa-user"></i> 7</span>
                            <span><i class="fa fa-suitcase"></i> 4</span>
                            <span><i class="fa fa-gas-pump"></i> Petrol/CNG</span>
                        </div>

                        <div class="features mb-3">
                            <span>AC</span>
                            <span>GPS</span>
                            <span>Spacious</span>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <h6 class="price mb-0">₹13/km <small>onwards</small></h6>
                            <a href="#" class="btn btn-success btn-sm">Book Now</a>
                        </div>
                    </div>

                </div>
            </div>

            <!-- CARD 3 -->
            <div class="col-lg-3 col-md-6">
                <div class="card car-card h-100">

                    <div class="position-relative">
                        <img src="image/crysta-DgDRNYIF.jpg" class="card-img-top">

                        <span class="badge tag bg-success">Premium</span>
                        <span class="rating">⭐ 4.5</span>
                    </div>

                    <div class="card-body">
                        <h5 class="fw-bold">Toyota Innova Crysta</h5>
                        <p class="text-muted small">Ideal for long journeys</p>

                        <div class="d-flex justify-content-between small mb-2 text-secondary">
                            <span><i class="fa fa-user"></i> 7</span>
                            <span><i class="fa fa-suitcase"></i> 5</span>
                            <span><i class="fa fa-gas-pump"></i> Diesel</span>
                        </div>

                        <div class="features mb-3">
                            <span>AC</span>
                            <span>GPS</span>
                            <span>WiFi</span>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <h6 class="price mb-0">₹16/km <small>onwards</small></h6>
                            <a href="#" class="btn btn-success btn-sm">Book Now</a>
                        </div>
                    </div>

                </div>
            </div>

            <!-- CARD 4 -->
            <div class="col-lg-3 col-md-6">
                <div class="card car-card h-100">

                    <div class="position-relative">
                        <img src="image/thar-DDEH5HwU.jpg" class="card-img-top">

                        <span class="badge tag bg-success">SUV</span>
                        <span class="rating">⭐ 4.5</span>
                    </div>

                    <div class="card-body">
                        <h5 class="fw-bold">Mahindra Scorpio</h5>
                        <p class="text-muted small">Rugged SUV for all terrains</p>

                        <div class="d-flex justify-content-between small mb-2 text-secondary">
                            <span><i class="fa fa-user"></i> 7</span>
                            <span><i class="fa fa-suitcase"></i> 4</span>
                            <span><i class="fa fa-gas-pump"></i> Diesel</span>
                        </div>

                        <div class="features mb-3">
                            <span>AC</span>
                            <span>GPS</span>
                            <span>4WD</span>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <h6 class="price mb-0">₹17/km <small>onwards</small></h6>
                            <a href="#" class="btn btn-success btn-sm">Book Now</a>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
    <!-- services  -->
    <section class="why-section">

        <div class="container">

            <h2>Why Choose Our Service?</h2>
            <p class="subtitle">
                Experience the difference with our premium taxi service that prioritizes your
                comfort, safety, and satisfaction
            </p>

            <div class="why-grid">

                <!-- CARD 1 -->
                <div class="why-card">
                    <div class="icon-box">
                        <i class="fa fa-map-marker-alt"></i>
                    </div>
                    <h3>All India Coverage</h3>
                    <p>Travel anywhere across India with our extensive network of professional drivers and premium vehicles.</p>
                </div>

                <!-- CARD 2 -->
                <div class="why-card">
                    <div class="icon-box">
                        <i class="fa fa-clock"></i>
                    </div>
                    <h3>24/7 Availability</h3>
                    <p>Round-the-clock service ensures you can book a ride anytime, anywhere, for any destination.</p>
                </div>

                <!-- CARD 3 -->
                <div class="why-card">
                    <div class="icon-box">
                        <i class="fa fa-shield-alt"></i>
                    </div>
                    <h3>Safety First</h3>
                    <p>All drivers are verified and vehicles are regularly maintained. Your safety is our top priority.</p>
                </div>

                <!-- CARD 4 -->
                <div class="why-card">
                    <div class="icon-box">
                        <i class="fa fa-credit-card"></i>
                    </div>
                    <h3>Transparent Pricing</h3>
                    <p>No hidden charges. Pay exactly what you see with our upfront, competitive pricing.</p>
                </div>

                <!-- CARD 5 -->
                <div class="why-card">
                    <div class="icon-box">
                        <i class="fa fa-headset"></i>
                    </div>
                    <h3>24/7 Support</h3>
                    <p>Our customer support team is always ready to assist you throughout your journey.</p>
                </div>

                <!-- CARD 6 -->
                <div class="why-card">
                    <div class="icon-box">
                        <i class="fa fa-users"></i>
                    </div>
                    <h3>Professional Drivers</h3>
                    <p>Experienced, courteous drivers who know the routes and prioritize your comfort.</p>
                </div>

            </div>

        </div>

    </section>

    <!-- reviews -->
     <section class="testimonial-section">

    <div class="container">

        <h2>What Our Customers Say</h2>
        <p class="subtitle">
            Don't just take our word for it. Read what our satisfied customers have to say about their travel experience with us
        </p>

        <div class="testi-grid">

            <!-- CARD -->
            <div class="testi-card">

                <div class="quote">
                    <i class="fa-solid fa-quote-left"></i>
                </div>

                <div class="top">
                    <div>
                        <h4>Rajesh Kumar</h4>
                        <span class="location">Bikaner</span>
                    </div>
                    <span class="time">2 weeks ago</span>
                </div>

               
                <div class="stars">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <span>5</span>
                </div>

                <p>
                    "Excellent service from Bikaner to Jaipur and Udaipur! Multi-city travel was seamless with professional drivers."
                </p>

            </div>


            <div class="testi-card">

                <div class="quote">
                    <i class="fa-solid fa-quote-left"></i>
                </div>

                <div class="top">
                    <div>
                        <h4>Priya Sharma</h4>
                        <span class="location">Bikaner</span>
                    </div>
                    <span class="time">1 month ago
</span>
                </div>

               
                <div class="stars">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <span>5</span>
                </div>

                <p>
                    "Amazing experience traveling from Bikaner to multiple Rajasthan cities. Comfortable car, reliable service, and great pricing for our 5-day tour!"
                </p>

            </div>

            <div class="testi-card">

                <div class="quote">
                    <i class="fa-solid fa-quote-left"></i>
                </div>

                <div class="top">
                    <div>
                        <h4>Anil Singh</h4>
                        <span class="location">Bikaner</span>
                    </div>
                    <span class="time">3 weeks ago</span>
                </div>

               
                <div class="stars">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <span>4.5</span>
                </div>

                <p>
                    "Very reliable service for our Bikaner to Jodhpur, Jaisalmer, and back trip. Innova was perfect for our family's multi-city journey."


                </p>

            </div>

            <div class="testi-card">

                <div class="quote">
                    <i class="fa-solid fa-quote-left"></i>
                </div>

                <div class="top">
                    <div>
                        <h4>Sunita Agarwal</h4>
                        <span class="location">Bikaner</span>
                    </div>
                    <span class="time">1 weeks ago</span>
                </div>

               
                <div class="stars">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <span>5</span>
                </div>

                <p>
                    "Best taxi service for multi-destination trips! Traveled from Bikaner to Delhi via Mandawa and Shekhawati. Clean vehicles and courteous drivers!"
                </p>

            </div>

            <div class="testi-card">

                <div class="quote">
                    <i class="fa-solid fa-quote-left"></i>
                </div>

                <div class="top">
                    <div>
                        <h4>Vikram Mehta </h4>
                        <span class="location">Bikaner</span>
                    </div>
                    <span class="time">2 months ago</span>
                </div>

               
                <div class="stars">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <span>4.8</span>
                </div>

                <p>
                    "Booked for Bikaner sightseeing and trips to nearby cities. Driver was knowledgeable about all locations and made our multi-city tour memorable."
                </p>

            </div>
               <div class="testi-card">

                <div class="quote">
                    <i class="fa-solid fa-quote-left"></i>
                </div>

                <div class="top">
                    <div>
                        <h4>Kavita Reddy</h4>
                        <span class="location">Bikaner</span>
                    </div>
                    <span class="time">1 months ago</span>
                </div>

               
                <div class="stars">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <span>5</span>
                </div>

                <p>
                   "Emergency multi-city business trip from Bikaner was handled professionally. Visited 4 cities in 2 days without any hassle. Thank you Rathore Tour & Travels!"
                </p>

            </div>

            

        </div>

        
        <div class="stats">

           
            <div class="stat-box">
                <h3>4.8</h3>
                <p>Average Rating</p>
                <div class="stars small">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half-stroke"></i>
                    <span>4.8</span>
                </div>
            </div>

            
            <div class="stat-box">
                <h3>500+</h3>
                <p><i class="fa-solid fa-users"></i> Happy Customers</p>
            </div>

           
            <div class="stat-box">
                <h3>50+</h3>
                <p><i class="fa-solid fa-location-dot"></i> Cities Covered</p>
            </div>

            
            <div class="stat-box">
                <h3>24/7</h3>
                <p><i class="fa-solid fa-headset"></i> Support Available</p>
            </div>

        </div>

    </div>

</section>

<!-- contact -->
 <section class="contact-section">

    <div class="container">

        <h2>Get In Touch</h2>
        <p class="subtitle">
            Ready to book your next journey? Contact us today for personalized service
            and competitive rates
        </p>

        <div class="contact-wrapper">

           
            <div class="contact-left">

                <div class="contact-card">
                    <i class="fa fa-phone"></i>
                    <h3>Call Us</h3>
                    <p>+91 99293 14857</p>
                    <p>+91 80037 36751</p>
                    <span>24/7 Support</span>
                </div>

                <div class="contact-card">
                    <i class="fa fa-envelope"></i>
                    <h3>Email Us</h3>
                    <p>booking.rathore@gmail.com</p>
                    <span>Quick Response</span>
                </div>

                <div class="contact-card">
                    <i class="fa fa-map-marker-alt"></i>
                    <h3>Service Areas</h3>
                    <p>All Major Cities</p>
                    <span>Across India</span>
                </div>

                <div class="contact-card">
                    <i class="fa fa-clock"></i>
                    <h3>Available</h3>
                    <p>24 Hours a Day</p>
                    <span>7 Days a Week</span>
                </div>

            </div>

            
            <!-- <div class="contact-form">

                <h3>Send us a Message</h3>

                <div class="row">
                    <input type="text" placeholder="Enter your name">
                    <input type="text" placeholder="Enter your phone">
                </div>

                <input type="email" placeholder="Enter your email">

                <textarea placeholder="Tell us about your travel requirements..."></textarea>

                <button>Get Quote Now</button>

            </div> -->
            <div class="contact-form-box">
  <h3 class="cf-title">Send us a Message</h3>

  <div class="cf-row">
    <div class="cf-field">
      <label class="cf-label">Full Name</label>
      <input type="text" class="cf-input" placeholder="Enter your name">
    </div>

    <div class="cf-field">
      <label class="cf-label">Phone Number</label>
      <input type="text" class="cf-input" placeholder="Enter your phone">
    </div>
  </div>

  <div class="cf-field">
    <label class="cf-label">Email Address</label>
    <input type="email" class="cf-input" placeholder="Enter your email">
  </div>

  <div class="cf-field">
    <label class="cf-label">Travel Details</label>
    <textarea class="cf-textarea" placeholder="Tell us about your travel requirements..."></textarea>
  </div>

  <button class="cf-btn">Get Quote Now</button>
</div>

        </div>

    </div>

</section>
<?php include 'footer.php'; ?>
</body>

</html>