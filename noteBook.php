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
    <li class="breadcrumb-item active" aria-current="page">Note Book</li>
  </ol>
</nav>

<!-- pro details -->
<section class="py-5">
  <div class="container">
    <div class="row align-items-center g-4">

      <!-- LEFT: Product Image -->
      <div class="col-lg-5">
        <img src="assets/images/noteBook_baner_3.jpg" 
             alt="Notebook"
             class="img-fluid rounded shadow">
      </div>

      <!-- RIGHT: Product Content -->
      <div class="col-lg-7">
        <h2 class="fw-bold mb-3">Notebook</h2>

        <p class="text-muted mb-3">
          This high-quality notebook is designed for everyday use — perfect for students, 
          office professionals, journaling, creative writing, sketches, and personal notes. 
          Its elegant design and durable pages make it ideal for both work and study.
        </p>

        <!-- Keywords -->
        <div class="mb-4">
          <h6 class="fw-bold mb-2">Keywords:</h6>
          <span class="badge bg-primary me-2 mb-2">Notebook</span>
          <span class="badge bg-secondary me-2 mb-2">Writing Book</span>
          <span class="badge bg-success me-2 mb-2">Stationery</span>
          <span class="badge bg-warning me-2 mb-2">School Notebook</span>
          <span class="badge bg-info me-2 mb-2">Diary</span>
          <span class="badge bg-dark me-2 mb-2">Office Notes</span>
        </div>

        <!-- Enquiry Button -->
        <button class="btn btn-primary btn-lg"
                data-bs-toggle="modal"
                data-bs-target="#enquiryModal">
          Enquiry Now
        </button>

      </div>

    </div>
  </div>
</section>



<!-- footer -->
 <?php include('footer.php') ?>