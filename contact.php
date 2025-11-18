<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Royal Impressions - Contact Page</title>
  <!-- bootstrap icnos -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <!-- bootstrap css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous" />
  <!-- AOS CSS -->
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css" />
  <link rel="stylesheet" href="assets/css/style.css" />

  <style>
    .carousel-caption {
      position: absolute;
      top: 20%;
      transform: translateY(-20%);
      color: #fff;
      text-shadow: 0 2px 5px rgba(0, 0, 0, 0.7);
    }

    /* carousel css */
    .carousel-caption.custom-caption {
      background-color: rgba(0, 0, 0, 0.5);
      /* semi-transparent black */
      padding: 20px;
      border-radius: 10px;
      bottom: 50%;
      transform: translateY(50%);
      left: 50%;
      transform: translate(-50%, 50%);
      text-align: center;
      width: 80%;
    }

    .carousel-caption.custom-caption h2 {
      font-size: 2.5rem;
      font-weight: 800;
      color: #fff;
      text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.7);
    }

    .carousel-caption.custom-caption p {
      font-size: 1.25rem;
      font-weight: 600;
      color: #f8f9fa;
      text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.6);
    }
  </style>

  <style>
    .product-card {
      border: 1px solid #eaeaea;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
      transition: transform 0.3s ease;
    }

    .product-card:hover {
      transform: translateY(-5px);
    }

    .product-img {
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;
      height: 200px;
      object-fit: cover;
    }
  </style>
</head>

<body>

<!-- header -->
<?php include('header.php') ?>

<!-- bread crumb -->
 <nav aria-label="breadcrumb" class="breadcrumb-wrapper">
  <div class="breadcrumb-bg"></div>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Library</a></li>
    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
  </ol>
</nav>

  <!-- CONTACT SECTION -->
  <section id="contact" class="py-5" style="background-color: #004a99; color: white; padding: 50px 0;">
    <div class="container">
      <h2 class="text-center mb-5">Contact Us</h2>
      <div class="row g-4 align-items-stretch">

        <!-- Left Side: Google Map -->
        <div class="col-lg-6">
          <div class="h-100 rounded shadow-sm overflow-hidden">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d497698.7749179518!2d77.30126246150184!3d12.954459536902306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1670c9b44e6d%3A0xf8dfc3e8517e4fe0!2sBengaluru%2C%20Karnataka!5e0!3m2!1sen!2sin!4v1760442073063!5m2!1sen!2sin"
              width="100%" height="100%" style="border:0; min-height: 400px;" allowfullscreen loading="lazy">
            </iframe>
          </div>
        </div>

        <!-- Right Side: Contact Form -->
        <div class="col-lg-6">
          <div class="card h-100 shadow-sm border-0">
            <div class="card-body p-4 bg-white">
              <h5 class="mb-4">Send us a message</h5>

              <!-- FIXED: Added ID for JavaScript -->
              <form id="enquiryForm">

                <!-- Name -->
                <div class="mb-3">
                  <label for="name" class="form-label">Full Name</label>
                  <input type="text" class="form-control" id="name" required>
                </div>

                <!-- Email -->
                <div class="mb-3">
                  <label for="email" class="form-label">Email Address</label>
                  <input type="email" class="form-control" id="email" required>
                </div>

                <!-- Phone -->
                <div class="mb-3">
                  <label for="phone" class="form-label">Phone Number</label>
                  <input type="tel" class="form-control" id="phone" required>
                </div>

                <!-- Subject -->
                <div class="mb-3">
                  <label for="subject" class="form-label">Subject</label>
                  <input type="text" class="form-control" id="subject" required>
                </div>

                <!-- Message -->
                <div class="mb-3">
                  <label for="message" class="form-label">Your Message</label>
                  <textarea class="form-control" id="message" rows="4" required></textarea>
                </div>

                <!-- Submit Button -->
                <div class="d-grid">
                  <button type="submit" class="btn btn-primary">Send Message</button>
                </div>

              </form>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- end contact  -->

<!-- footer -->
 <?php include('footer.php') ?>