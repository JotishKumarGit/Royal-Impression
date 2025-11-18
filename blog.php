<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Royal Impressions - </title>
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
    <li class="breadcrumb-item active" aria-current="page">Blog</li>
  </ol>
</nav>

  <!-- blog sections -->
  <section id="blog" class="py-5" style="background-color: #f8f9fa;">
    <div class="container">

      <!-- Section Heading -->
      <div class="text-center mb-5">
        <h2 class="fw-bold">Royal Impressions Blog</h2>
        <p class="text-muted">Insights, updates, creativity & inspiration from Royal Impressions</p>
      </div>

      <div class="row g-4">

        <!-- Blog 1 -->
        <div class="col-lg-4 col-md-6">
          <div class="card shadow-sm border-0 h-100">
            <img src="assets/images/noteBook_baner.jpg" class="card-img-top" alt="Notebook Manufacturing">
            <div class="card-body">
              <h5 class="card-title fw-bold">The Art of Notebook Manufacturing</h5>
              <p class="card-text text-muted">
                Discover how premium notebooks are crafted with precision, quality paper,
                and durable binding techniques at Royal Impressions.
              </p>
              <a href="#" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>

        <!-- Blog 2 -->
        <div class="col-lg-4 col-md-6">
          <div class="card shadow-sm border-0 h-100">
            <img src="assets/images/noteBook_baner_3.jpg" class="card-img-top" alt="Stationery Trends">
            <div class="card-body">
              <h5 class="card-title fw-bold">Top Stationery Trends of the Year</h5>
              <p class="card-text text-muted">
                From eco-friendly products to custom notebooks, explore the trending stationery
                choices that customers love in 2025.
              </p>
              <a href="#" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>

        <!-- Blog 3 -->
        <div class="col-lg-4 col-md-6">
          <div class="card shadow-sm border-0 h-100">
            <img src="assets/images/hard_binding_notebook.jpg" class="card-img-top" alt="Custom Printing">
            <div class="card-body">
              <h5 class="card-title fw-bold">Why Custom Printing Matters</h5>
              <p class="card-text text-muted">
                Branding through notebooks, calendars, and diaries helps businesses leave a
                lasting impression—learn why customization is powerful.
              </p>
              <a href="#" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>



<!-- footer -->
 <?php include('footer.php') ?>