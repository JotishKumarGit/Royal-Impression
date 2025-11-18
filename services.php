<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Royal Impressions - Services </title>
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
    <li class="breadcrumb-item active" aria-current="page">Services </li>
  </ol>
</nav>


    <!-- services  -->
    <section class="py-5" style="background-color: #dbeeff;">
      <div class="container">
        <h2 class="text-center mb-5" style="color: #0078BF;">Our Services</h2>
        <div class="row g-4">

          <!-- Service 1 -->
          <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm text-center">
              <div class="card-body">
                <div class="mb-3">
                  <i class="bi bi-printer-fill fs-1" style="color: #0078BF;"></i>
                </div>
                <h5 class="card-title fw-bold" style="color: #0078BF;">Offset Printing</h5>
                <p class="card-text text-muted">High-quality offset printing for bulk and detailed print needs.</p>
              </div>
            </div>
          </div>

          <!-- Service 2 -->
          <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm text-center">
              <div class="card-body">
                <div class="mb-3">
                  <i class="bi bi-printer-fill fs-1" style="color: #0078BF;"></i>
                </div>
                <h5 class="card-title fw-bold" style="color: #0078BF;">Digital Printing</h5>
                <p class="card-text text-muted">Fast and precise digital printing for personalized projects.</p>
              </div>
            </div>
          </div>

          <!-- Service 3 -->
          <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm text-center">
              <div class="card-body">
                <div class="mb-3">
                  <i class="bi bi-printer-fill fs-1" style="color: #0078BF;"></i>
                </div>
                <h5 class="card-title fw-bold" style="color: #0078BF;">Screen Printing</h5>
                <p class="card-text text-muted">Durable and vibrant screen printing for textiles and more.</p>
              </div>
            </div>
          </div>

          <!-- Service 4 -->
          <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm text-center">
              <div class="card-body">
                <div class="mb-3">
                  <i class="bi bi-printer-fill fs-1" style="color: #0078BF;"></i>
                </div>
                <h5 class="card-title fw-bold" style="color: #0078BF;">Flex Printing</h5>
                <p class="card-text text-muted">Flexible, high-quality prints for banners and signs.</p>
              </div>
            </div>
          </div>

          <!-- Service 5 -->
          <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm text-center">
              <div class="card-body">
                <div class="mb-3">
                  <i class="bi bi-printer-fill fs-1" style="color: #0078BF;"></i>
                </div>
                <h5 class="card-title fw-bold" style="color: #0078BF;">Vinyl Printing</h5>
                <p class="card-text text-muted">Premium vinyl prints for stickers, decals, and more.</p>
              </div>
            </div>
          </div>

          <!-- Service 6 -->
          <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm text-center">
              <div class="card-body">
                <div class="mb-3">
                  <i class="bi bi-printer-fill fs-1" style="color: #0078BF;"></i>
                </div>
                <h5 class="card-title fw-bold" style="color: #0078BF;">Eco Solvent Printing</h5>
                <p class="card-text text-muted">Eco-friendly solvent printing for durable and vibrant colors.</p>
              </div>
            </div>
          </div>

          <!-- Service 7 -->
          <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm text-center">
              <div class="card-body">
                <div class="mb-3">
                  <i class="bi bi-card-text fs-1" style="color: #0078BF;"></i>
                </div>
                <h5 class="card-title fw-bold" style="color: #0078BF;">Business Cards</h5>
                <p class="card-text text-muted">Professional and customized business card designs and prints.</p>
              </div>
            </div>
          </div>

          <!-- Service 8 -->
          <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm text-center">
              <div class="card-body">
                <div class="mb-3">
                  <i class="bi bi-file-earmark-text fs-1" style="color: #0078BF;"></i>
                </div>
                <h5 class="card-title fw-bold" style="color: #0078BF;">Letter Head</h5>
                <p class="card-text text-muted">Custom-designed letterheads for your corporate branding.</p>
              </div>
            </div>
          </div>

          <!-- Service 9 -->
          <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm text-center">
              <div class="card-body">
                <div class="mb-3">
                  <i class="bi bi-journal fs-1" style="color: #0078BF;"></i>
                </div>
                <h5 class="card-title fw-bold" style="color: #0078BF;">Diary</h5>
                <p class="card-text text-muted">Personalized diaries tailored for daily use or corporate gifts.</p>
              </div>
            </div>
          </div>

          <!-- Service 10 -->
          <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm text-center">
              <div class="card-body">
                <div class="mb-3">
                  <i class="bi bi-image fs-1" style="color: #0078BF;"></i>
                </div>
                <h5 class="card-title fw-bold" style="color: #0078BF;">Posters</h5>
                <p class="card-text text-muted">Vivid posters for advertising and promotions with lasting impact.</p>
              </div>
            </div>
          </div>

          <!-- Service 11 -->
          <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm text-center">
              <div class="card-body">
                <div class="mb-3">
                  <i class="bi bi-signpost-2 fs-1" style="color: #0078BF;"></i>
                </div>
                <h5 class="card-title fw-bold" style="color: #0078BF;">Banner</h5>
                <p class="card-text text-muted">Custom banners for events, promotions, and displays.</p>
              </div>
            </div>
          </div>

          <!-- Service 12 -->
          <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm text-center">
              <div class="card-body">
                <div class="mb-3">
                  <i class="bi bi-award fs-1" style="color: #0078BF;"></i>
                </div>
                <h5 class="card-title fw-bold" style="color: #0078BF;">Certificate</h5>
                <p class="card-text text-muted">Elegant certificates for achievements and recognitions.</p>
              </div>
            </div>
          </div>

          <!-- Service 13 -->
          <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm text-center">
              <div class="card-body">
                <div class="mb-3">
                  <i class="bi bi-gift fs-1" style="color: #0078BF;"></i>
                </div>
                <h5 class="card-title fw-bold" style="color: #0078BF;">Souvenir</h5>
                <p class="card-text text-muted">Custom souvenirs for memorable events and corporate gifting.</p>
              </div>
            </div>
          </div>

          <!-- Service 14 -->
          <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm text-center">
              <div class="card-body">
                <div class="mb-3">
                  <i class="bi bi-book fs-1" style="color: #0078BF;"></i>
                </div>
                <h5 class="card-title fw-bold" style="color: #0078BF;">Magazine</h5>
                <p class="card-text text-muted">Professionally designed and printed magazines for all purposes.</p>
              </div>
            </div>
          </div>

          <!-- Service 15 -->
          <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm text-center">
              <div class="card-body">
                <div class="mb-3">
                  <i class="bi bi-text-paragraph fs-1" style="color: #0078BF;"></i>
                </div>
                <h5 class="card-title fw-bold" style="color: #0078BF;">Textile Printing</h5>
                <p class="card-text text-muted">High-quality textile prints for garments and fabric-based products.</p>
              </div>
            </div>
          </div>

          <!-- Service 16 -->
          <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm text-center">
              <div class="card-body">
                <div class="mb-3">
                  <i class="bi bi-box fs-1" style="color: #0078BF;"></i>
                </div>
                <h5 class="card-title fw-bold" style="color: #0078BF;">Packaging Printing</h5>
                <p class="card-text text-muted">Custom printed packaging solutions that enhance product appeal.</p>
              </div>
            </div>
          </div>

          <!-- Service 17 -->
          <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm text-center">
              <div class="card-body">
                <div class="mb-3">
                  <i class="bi bi-file-earmark-text fs-1" style="color: #0078BF;"></i>
                </div>
                <h5 class="card-title fw-bold" style="color: #0078BF;">Flyers & Brochure</h5>
                <p class="card-text text-muted">Attractive flyers and brochures designed and printed to promote your
                  brand.</p>
              </div>
            </div>
          </div>

          <!-- Service 18 -->
          <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm text-center">
              <div class="card-body">
                <div class="mb-3">
                  <i class="bi bi-envelope fs-1" style="color: #0078BF;"></i>
                </div>
                <h5 class="card-title fw-bold" style="color: #0078BF;">Invitation Card</h5>
                <p class="card-text text-muted">Custom-designed invitation cards for weddings, events, and corporate
                  functions.</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- end services  -->

<!-- footer -->
 <?php include('footer.php') ?>