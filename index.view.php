<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volta River Authority | Hospitality</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha512-xA6Hp6oezhjd6LiLZynuukm80f8BoZ3OpcEYaqKoCV3HKQDrYjDE1Gu8ocxgxoXmwmSzM4iqPvCsOkQNiu41GA==" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Open+Sans&family=Cabin&family=Lora&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <!-- Start: Header -->
    <header>
        <!-- Start: Header - Location Info -->
        <div class="header-info">
            <div class="location-info">
                <span><i class="fas fa-map-marker-alt"></i> ELectro Volta House, Ministries - Accra</span>
                <span><i class="fas fa-map-marker-alt"></i> Digital Address: GA-145-7445</span>
                <span><i class="far fa-envelope"></i>corpcomm@vra.com</span>
            </div>
            <div class="announcement-info">
                <span>TEMPORARY SUSPENSION OF VISITS TO OUR PLANTS</span>
            </div>
        </div>
        <!-- Start: Navigation links -->
        <nav id="nav">
            <img src="images/vra-logo.png" alt="Logo of VRA">
            <span onclick="showMenu()"><i class="fas fa-bars"></i></span>
            <div class="nav-links hide" id="nav-links">
                <a href="#">Home</a>
                <a href="#">About Us</a>
                <a href="#">Our Mandate</a>
                <a href="#">Our Subsidiaries</a>
                <a href="#">CSR</a>
                <a href="#">Media</a>
                <a href="#">Publications</a>
                <a href="#" class="active">Hospitality</a>
                <a href="#">Vacancies</a>
                <a href="#">Contact Us</a>
            </div>
        </nav>
    </header>
    <!-- Start:Hero -->
    <section class="hero">
        <div class="hero-intro">
        <h1>Rent Our Conference Rooms For That Perfect Executive Meeting.</h1>
        <p>We have a lot of facilities and services available for rental at various locations that provide a serene environment to host your events.</p>
        <a href="#">Discover Now</a>
        </div>
        <form action="#">
            <label for="check-in">Check In Date:</label>
            <input type="date" id="check-in" name="check-in-date">
            <label for="check-out">Check Out Date:</label>
            <input type="date" id="check-out" name="check-out-date">
            <label for="guest-number">Number of Guest:</label>
            <input type="number" id="guest-number" name="guest-number">
            <label for="facility">Facility:</label>
            <select id="facility" name="facility">
                <option value="conference-room">Conference Room</option>
                <option value="swimming-pool">Swimming Pool</option>
                <option value="restaurant">Restaurant</option>
                <option value="guest-house">Guest Room</option>
            </select>
            <label for="location">Location:</label>
            <select id="location" name="location">
                <option value="accra">Accra</option>
                <option value="akosombo">Akosombo</option>
                <option value="akusei">Akusei</option>
                <option value="takoradi">Takoradi</option>
            </select>
            <input type="submit" value="Check Availability">
        </form>
    </section>
    <!-- Start:About -->
    <section class="about">
    <div class="about-intro">
    <h2>Enjoy a luxury experience with us.</h2>
    <p>We provide you with ulttra modern facilities that a readily available and cater for
     you and your company's needs at an affordable price. With our adherence to both local
      and international hospitality laws and our immaculate customer service record, you 
      are assured of your money's worth. Our faciltues include conference rooms, restaurants,
       swimming pools and guest rooms at various locations across the country making us the 
       perfect choice for your conferences, retreats, parties or any other event.</p>
       <a href="#" class="view-facility-link">View Facilities</a>
       <a href="#" class="book-event-link">Book Your Event</a>
    </div>
    <div class="about-images">
        <img src="images/conference-iii.jpg" alt="">
        <img src="images/guest-room.jpg" alt="">
        <img src="images/restaurant.jpg" alt="">
        <img src="images/swimming-pool.jpg" alt="">
    </div>
    </section>
   <script src="js/scripts.js"></script> 
</body>
</html>