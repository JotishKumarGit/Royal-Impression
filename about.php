<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Royal Impressions - Home Page</title>
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
      <li class="breadcrumb-item active" aria-current="page">About Us</li>
    </ol>
  </nav>

  <!-- about us -->
  <section class="about-section" style="background-color: #e6f2fb;">
    <div class="container">
      <div class="content">
        <h2 class="text-center" style="color: #0078BF;">About Us</h2> <!-- logo color -->
      </div>
      <div class="row align-items-center">
        <!-- Image Section -->
        <div class="col-md-6 mb-4 mb-md-0" data-aos="fade-right">
          <img src="assets/images/Spiral_Note_Book.jpg" alt="Royal Impressions - Custom Printing Solutions" class="about-img"
            style="border: 2px solid #0078BF;" /> <!-- subtle border with logo color -->
        </div>

        <!-- Text Section -->
        <div class="col-md-6" data-aos="fade-left">
          <h3 class="about-title mb-4 animate__animated animate__fadeInUp" style="color: #0078BF; font-size: large;">
            Royal Impressions : Crafting Quality Through Print
          </h3>
          <p class="about-text animate__animated animate__fadeInUp animate__delay-1s">
            At <span class="highlight" style="color: #0078BF;">Royal Impressions</span>, we specialize in delivering
            top-tier designing and
            printing solutions for businesses of all sizes. With years of industry experience, our mission is to bring
            your ideas to life through creative design, precision printing, and unmatched quality.
          </p>
          <p class="about-text animate__animated animate__fadeInUp animate__delay-2s">
            Our wide range of products includes custom-designed notebooks, brochures, catalogs, packaging materials,
            and labels. Whether you're looking to promote your brand, package a product, or create customized
            stationery, we offer personalized solutions to meet your unique needs.
          </p>
          <p class="about-text animate__animated animate__fadeInUp animate__delay-3s">
            From concept to completion, our expert team combines innovation with craftsmanship, using advanced digital
            and offset printing technology to ensure stunning results every time.
          </p>
          <a href="#contact" class="btn btn-black mt-3 animate__animated animate__fadeInUp animate__delay-4s">Get in
            Touch</a>
        </div>
      </div>
    </div>
  </section>
  <!-- end about us  -->

  <!-- footer -->
  <?php include('footer.php') ?>