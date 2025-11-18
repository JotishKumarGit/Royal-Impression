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

  <!-- carousel  -->
  <div id="customCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
    <div class="carousel-inner">
      <!-- Slide 1: Notebooks -->
      <div class="carousel-item active">
        <img src="assets/images/noteBook_baner.jpg" class="d-block w-100" height="600px" alt="Custom Printed Notebooks" />
        <div class="carousel-caption custom-caption">
          <h2 class="fw-bold">Custom Printed Notebooks</h2>
          <p class="fw-semibold">
            High-quality, personalized notebooks for schools, offices, and
            businesses.
          </p>
          <button class="btn btn-primary">Read More</button>
        </div>
      </div>

      <!-- Slide 2: Brochures -->
      <div class="carousel-item">
        <img src="assets/images/Spiral_Note_Book.jpg" class="d-block w-100" height="600px" alt="Brochure Printing" />
        <div class="carousel-caption custom-caption">
          <h2 class="fw-bold">Eye-Catching Brochures</h2>
          <p class="fw-semibold">
            Professionally designed brochures to promote your brand and
            services.
          </p>
          <button class="btn btn-primary">Read More</button>
        </div>
      </div>

      <!-- Slide 3: Packaging Materials -->
      <div class="carousel-item">
        <img src="assets/images/noteBook_baner_3.jpg" class="d-block w-100" height="600px" alt="Packaging Materials" />
        <div class="carousel-caption custom-caption">
          <h2 class="fw-bold">Custom Packaging Solutions</h2>
          <p class="fw-semibold">
            Durable and attractive packaging materials tailored to your
            products.
          </p>
          <button class="btn btn-primary">Read More</button>
        </div>
      </div>

      <!-- Controls -->
      <button class="carousel-control-prev" type="button" data-bs-target="#customCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#customCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>
  </div>

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

  <!-- products -->
  <section class="py-5" style="background-color: #f9f9f9;"> <!-- light blue background for brand consistency -->
    <div class="container">
      <h2 class="text-center mb-5" style="color: #0078BF;">Our Products</h2>
      <p class="text-center mb-5" style="color: #444;">
        Explore our premium range of notebooks and stationery products, crafted with precision and designed to elevate
        your brand presence.
      </p>
      <div class="row justify-content-center text-center g-4">

        <!-- Product: Notebook -->
        <div class="col-md-4">
          <div class="product-card bg-white shadow-sm p-3 rounded">
            <img src="assets/images/noteBook_baner_3.jpg" class="img-fluid product-img mb-3" alt="Notebook"
              style="border: 2px solid #0078BF; border-radius: 10px;" />
            <div class="p-2">
              <h5 class="fw-bold" style="color: #0078BF;">Notebook</h5>
              <p style="color: #444;">A premium-quality notebook with smooth pages and a durable cover, perfect for
                work, study, or personal journaling.</p>
              <div class="d-flex justify-content-center align-items-center">
                <a href="noteBook.php" class="btn"
                  style="background-color: #0078BF; color: #fff; border-radius: 5px; padding: 5px 15px; transition: all 0.3s ease;"
                  onmouseover="this.style.backgroundColor='#005f99'"
                  onmouseout="this.style.backgroundColor='#0078BF'">Detail</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Product: Hard Binding Notebook -->
        <div class="col-md-4">
          <div class="product-card bg-white shadow-sm p-3 rounded">
            <img src="assets/images/Spiral_Note_Book.jpg" class="img-fluid product-img mb-3" alt="Spiral Notebook"
              style="border: 2px solid #0078BF; border-radius: 10px;" />
            <div class="p-2">
              <h5 class="fw-bold" style="color: #0078BF;">Hard Binding Notebook</h5>
              <p style="color: #444;">A Hard Binding Notebook designed with a durable, rigid cover for long-lasting protection and premium writing comfort.</p>
              <div class="d-flex justify-content-center align-items-center">
                <a href="Hard_binding_notebook.php" class="btn"
                  style="background-color: #0078BF; color: #fff; border-radius: 5px; padding: 5px 15px; transition: all 0.3s ease;"
                  onmouseover="this.style.backgroundColor='#005f99'"
                  onmouseout="this.style.backgroundColor='#0078BF'">Detail</a>
              </div>
            </div>
          </div>
        </div>
        <!-- Product: Soft Binding Notebook-->
        <div class="col-md-4">
          <div class="product-card bg-white shadow-sm p-3 rounded">
            <img src="assets/images/soft_binding_notebook.jpg" class="img-fluid product-img mb-3" alt="Spiral Notebook"
              style="border: 2px solid #0078BF; border-radius: 10px;" />
            <div class="p-2">
              <h5 class="fw-bold" style="color: #0078BF;">Soft Binding Notebook</h5>
              <p style="color: #444;">A Soft Binding Notebook crafted with a flexible, lightweight cover for easy handling and everyday writing use.</p>
              <div class="d-flex justify-content-center align-items-center">
                <a href="soft_binding_notebook.php" class="btn"
                  style="background-color: #0078BF; color: #fff; border-radius: 5px; padding: 5px 15px; transition: all 0.3s ease;"
                  onmouseover="this.style.backgroundColor='#005f99'"
                  onmouseout="this.style.backgroundColor='#0078BF'">Detail</a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- end products  -->

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

  <!-- faq  -->
  <section class="py-5 " id="faq" style="background-color: #e0f7fa; padding: 50px 0;">
    <div class="container">
      <h2 class="text-center mb-5">Frequently Asked Questions</h2>
      <div class="accordion" id="faqAccordion">

        <!-- FAQ 1 -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="faqHeading1">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse1"
              aria-expanded="true" aria-controls="faqCollapse1">
              What products do you offer?
            </button>
          </h2>
          <div id="faqCollapse1" class="accordion-collapse collapse show" aria-labelledby="faqHeading1"
            data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              We offer custom notebooks, brochures, catalogs, labels, stickers, packaging materials, and a range of
              printed marketing products.
            </div>
          </div>
        </div>

        <!-- FAQ 2 -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="faqHeading2">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#faqCollapse2" aria-expanded="false" aria-controls="faqCollapse2">
              Can I customize the design of my products?
            </button>
          </h2>
          <div id="faqCollapse2" class="accordion-collapse collapse" aria-labelledby="faqHeading2"
            data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              Yes, all our products can be fully customized with your brand's logo, colors, and content. We also offer
              professional graphic design services.
            </div>
          </div>
        </div>

        <!-- FAQ 3 -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="faqHeading3">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#faqCollapse3" aria-expanded="false" aria-controls="faqCollapse3">
              Do you offer both offset and digital printing?
            </button>
          </h2>
          <div id="faqCollapse3" class="accordion-collapse collapse" aria-labelledby="faqHeading3"
            data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              Yes, we provide both offset and digital printing services based on your order volume, delivery needs,
              and budget.
            </div>
          </div>
        </div>

        <!-- FAQ 4 -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="faqHeading4">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#faqCollapse4" aria-expanded="false" aria-controls="faqCollapse4">
              What is your minimum order quantity?
            </button>
          </h2>
          <div id="faqCollapse4" class="accordion-collapse collapse" aria-labelledby="faqHeading4"
            data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              Minimum order quantity depends on the product. Typically, we accept orders starting from 100 units for
              notebooks and 500 for packaging or labels.
            </div>
          </div>
        </div>

        <!-- FAQ 5 -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="faqHeading5">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#faqCollapse5" aria-expanded="false" aria-controls="faqCollapse5">
              How long does it take to deliver an order?
            </button>
          </h2>
          <div id="faqCollapse5" class="accordion-collapse collapse" aria-labelledby="faqHeading5"
            data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              Delivery usually takes 5–10 business days depending on the product type, customization, and quantity. We
              also offer express delivery options.
            </div>
          </div>
        </div>

        <!-- FAQ 6 -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="faqHeading6">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#faqCollapse6" aria-expanded="false" aria-controls="faqCollapse6">
              Can you help with the design if I don’t have one?
            </button>
          </h2>
          <div id="faqCollapse6" class="accordion-collapse collapse" aria-labelledby="faqHeading6"
            data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              Yes! Our in-house graphic design team can create designs from scratch based on your requirements,
              branding, and style preferences.
            </div>
          </div>
        </div>

        <!-- FAQ 7 -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="faqHeading7">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#faqCollapse7" aria-expanded="false" aria-controls="faqCollapse7">
              Do you offer bulk printing for businesses?
            </button>
          </h2>
          <div id="faqCollapse7" class="accordion-collapse collapse" aria-labelledby="faqHeading7"
            data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              Absolutely! We specialize in bulk printing for schools, offices, manufacturers, and marketing agencies,
              offering competitive rates and consistent quality.
            </div>
          </div>
        </div>

        <!-- FAQ 8 -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="faqHeading8">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#faqCollapse8" aria-expanded="false" aria-controls="faqCollapse8">
              What file formats do you accept for printing?
            </button>
          </h2>
          <div id="faqCollapse8" class="accordion-collapse collapse" aria-labelledby="faqHeading8"
            data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              We accept high-resolution files in PDF, AI, PSD, CDR, and EPS formats. If you're unsure, our design team
              can assist in formatting your files correctly.
            </div>
          </div>
        </div>

        <!-- FAQ 9 -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="faqHeading9">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#faqCollapse9" aria-expanded="false" aria-controls="faqCollapse9">
              Can I see a sample before final printing?
            </button>
          </h2>
          <div id="faqCollapse9" class="accordion-collapse collapse" aria-labelledby="faqHeading9"
            data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              Yes, we can provide a physical or digital sample for approval before final production, especially for
              large or custom orders.
            </div>
          </div>
        </div>

        <!-- FAQ 10 -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="faqHeading10">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#faqCollapse10" aria-expanded="false" aria-controls="faqCollapse10">
              Where are you located and do you ship across India?
            </button>
          </h2>
          <div id="faqCollapse10" class="accordion-collapse collapse" aria-labelledby="faqHeading10"
            data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              We are based in Faridabad and offer nationwide delivery across India through reliable courier partners.
              International shipping is also available on request.
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- end faq  -->

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