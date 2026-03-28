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
    <div class="th-hero">
        <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e" alt="">
        <div class="th-hero-text">Let's Explore The World !</div>
    </div>

    <div class="th-search-box">
        <div class="th-tabs">
            <span class="active"><i class="fa-solid fa-plane"></i> Tour</span>
            <span><i class="fa-solid fa-hotel"></i> Hotel</span>
            <span><i class="fa-solid fa-utensils"></i> Restaurant</span>
            <span><i class="fa-solid fa-house"></i> Rental</span>
            <span><i class="fa-solid fa-map"></i> Activity</span>
            <span><i class="fa-solid fa-car"></i> Car Rental</span>
        </div>

        <div class="th-form">
            <div class="th-input-box">
                <label>Destinations:</label>
                <input type="text" placeholder="Where are you going...">
            </div>

            <div class="th-input-box">
                <label>Check In:</label>
                <input type="date">
            </div>

            <div class="th-input-box">
                <label>Check Out:</label>
                <input type="date">
            </div>

            <div class="th-input-box">
                <label>Guest:</label>
                <input type="text" placeholder="+ Add Guests">
            </div>

            <button class="th-search-btn">
                Search <i class="fa-solid fa-magnifying-glass"></i>
            </button>
        </div>
    </div>

    <section class="ab-section">

        <div class="ab-container">

            <!-- LEFT -->
            <div class="ab-left">

                <div class="ab-ring"></div>

                <div class="ab-shape one">
                    <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e">
                </div>

                <div class="ab-shape two">
                    <img src="https://images.unsplash.com/photo-1500530855697-b586d89ba3ee">
                </div>

                <div class="ab-circle">
                    <span>30+</span>
                    <small>Years of Experience</small>
                </div>

            </div>

            <!-- RIGHT -->
            <div class="ab-content">

                <div class="ab-tag"><i class="fa-solid fa-plane"></i> ABOUT US</div>

                <h2 class="ab-title">
                    We Are The World <span>Best Travel</span><br>
                    Booking Agency Company
                </h2>

                <p class="ab-text">
                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form by injected humour or randomised words which don't look even slightly believable.
                </p>

                <div class="ab-features">

                    <div class="ab-box">
                        <div class="ab-icon"><i class="fa-solid fa-handshake"></i></div>
                        <div>
                            <strong>Get Your Best Deals</strong>
                            <p>Take a look at our offers</p>
                        </div>
                    </div>

                    <div class="ab-box">
                        <div class="ab-icon"><i class="fa-solid fa-earth-asia"></i></div>
                        <div>
                            <strong>Easy To Booking</strong>
                            <p>Quick booking process</p>
                        </div>
                    </div>

                </div>

                <button class="ab-btn">Discover More</button>

            </div>

        </div>

        <!-- BOTTOM -->
        <div class="ab-bottom">

            <div class="ab-card">
                <i class="fa-solid fa-globe"></i>
                <div>
                    <h4>Worldwide Coverage</h4>
                    <p>It is a long established fact that reader will be distracted.</p>
                </div>
            </div>

            <div class="ab-card">
                <i class="fa-solid fa-star"></i>
                <div>
                    <h4>Best Quality Services</h4>
                    <p>It is a long established fact that reader will be distracted.</p>
                </div>
            </div>

            <div class="ab-card">
                <i class="fa-solid fa-headset"></i>
                <div>
                    <h4>24/7 Customer Service</h4>
                    <p>It is a long established fact that reader will be distracted.</p>
                </div>
            </div>

        </div>

         </section>


        <section class="cars-section py-5" id="packages">
            <div class="container-fluid px-5">
                <div class="text-center mb-5">
                    <h2 class="fw-bold">Our Most Popular Car Rentals</h2>
                    <p class="text-muted">
                        From budget-friendly city cars to luxury SUVs, we have the perfect vehicle for every journey
                    </p>
                </div>

                <div class="row g-4">


                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <div class="card car-card h-100">

                            <div class="img-box position-relative">
                                <img src="image/swift-FTV4h9a9.jpg" class="card-img-top">

                                <span class="badge tag bg-success">Economy</span>
                                <span class="rating">
                                    ⭐ 4.5
                                </span>
                            </div>

                            <div class="card-body d-flex flex-column">
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

                                <!-- PRICE -->
                                <div class="price-box mt-auto">
                                    <h6 class="price mb-0">₹11/km <small>onwards</small></h6>
                                </div>

                                <!-- BUTTONS -->
                                <div class="btn-group-custom">
                                    <a href="#" class="btn explore-btn btn-sm">Explore More</a>
                                    <button class="btn book-btn btn-sm" onclick="openModal()">Book Now</button>
                                </div>
                            </div>

                        </div>
                    </div>




                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
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
                                    <a href="#" class="btn explore-btn btn-sm">Explore More</a>
                                    <button class="btn book-btn btn-sm" onclick="openModal()">Book Now</button>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
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
                                    <a href="#" class="btn explore-btn btn-sm">Explore More</a>
                                    <button class="btn book-btn btn-sm" onclick="openModal()">Book Now</button>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
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
                                    <a href="#" class="btn explore-btn btn-sm">Explore More</a>
                                    <button class="btn book-btn btn-sm" onclick="openModal()">Book Now</button>
                                </div>
                            </div>

                        </div>
                    </div>


                </div>
            </div>
        </section>

        <div id="carModal" class="modal">
            <div class="modal-content">
                <span onclick="closeModal()" class="close">&times;</span>
                <h2>Book Your Ride</h2>

                <input type="text" placeholder="Full Name">
                <input type="tel" placeholder="Phone">
                <textarea placeholder="Travel Details"></textarea>

                <button class="m-btn">Submit</button>
            </div>
        </div>

        <!-- pacakages section -->
     
        <section class="pk-section">
            <div class="container">

                <h2 class="pk-title">Our Rental Packages</h2>

                <div class="pk-tabs">
                    <div class="pk-tab active">Daily</div>
                    <div class="pk-tab">Outstation</div>
                </div>

                <div class="row g-4">

                    <!-- CARD 1 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="pk-card">
                            <h4><i class="fa-solid fa-car"></i> Amaze / Etios</h4>

                            <div class="pk-item">
                                <div class="pk-left"><i class="fa fa-clock"></i> 8 HRS / 80 KM</div>
                                <div class="pk-price">₹2000</div>
                            </div>
                            <div class="pk-item">
                                <div class="pk-left"><i class="fa fa-clock"></i> 12 HRS / 120 KM</div>
                                <div class="pk-price">₹2800</div>
                            </div>
                            <div class="pk-item">
                                <div class="pk-left"><i class="fa fa-road"></i> Extra KM</div>
                                <div class="pk-price">₹13</div>
                            </div>
                            <div class="pk-item">
                                <div class="pk-left"><i class="fa fa-hourglass"></i> Extra Hour</div>
                                <div class="pk-price">₹100</div>
                            </div>
                            <div class="pk-item">
                                <div class="pk-left"><i class="fa fa-moon"></i> Night</div>
                                <div class="pk-price">₹300</div>
                            </div>

                            <a href="#" class="pk-btn">Book Now</a>
                        </div>
                    </div>

                    <!-- CARD 2 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="pk-card">
                            <h4><i class="fa-solid fa-car"></i> Honda City</h4>

                            <div class="pk-item">
                                <div class="pk-left"><i class="fa fa-clock"></i> 8 HRS / 80 KM</div>
                                <div class="pk-price">₹2400</div>
                            </div>
                            <div class="pk-item">
                                <div class="pk-left"><i class="fa fa-clock"></i> 12 HRS / 120 KM</div>
                                <div class="pk-price">₹3200</div>
                            </div>
                            <div class="pk-item">
                                <div class="pk-left"><i class="fa fa-road"></i> Extra KM</div>
                                <div class="pk-price">₹16</div>
                            </div>
                            <div class="pk-item">
                                <div class="pk-left"><i class="fa fa-hourglass"></i> Extra Hour</div>
                                <div class="pk-price">₹150</div>
                            </div>
                            <div class="pk-item">
                                <div class="pk-left"><i class="fa fa-moon"></i> Night</div>
                                <div class="pk-price">₹300</div>
                            </div>

                            <a href="#" class="pk-btn">Book Now</a>
                        </div>
                    </div>

                    <!-- CARD 3 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="pk-card">
                            <h4><i class="fa-solid fa-car"></i> Innova Crysta</h4>

                            <div class="pk-item">
                                <div class="pk-left"><i class="fa fa-clock"></i> 8 HRS / 80 KM</div>
                                <div class="pk-price">₹3500</div>
                            </div>
                            <div class="pk-item">
                                <div class="pk-left"><i class="fa fa-clock"></i> 12 HRS / 120 KM</div>
                                <div class="pk-price">₹5000</div>
                            </div>
                            <div class="pk-item">
                                <div class="pk-left"><i class="fa fa-road"></i> Extra KM</div>
                                <div class="pk-price">₹20</div>
                            </div>
                            <div class="pk-item">
                                <div class="pk-left"><i class="fa fa-hourglass"></i> Extra Hour</div>
                                <div class="pk-price">₹250</div>
                            </div>
                            <div class="pk-item">
                                <div class="pk-left"><i class="fa fa-moon"></i> Night</div>
                                <div class="pk-price">₹350</div>
                            </div>

                            <a href="#" class="pk-btn">Book Now</a>
                        </div>
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
        <!-- content end -->
        <?php include 'footer.php'; ?>
</body>

</html>