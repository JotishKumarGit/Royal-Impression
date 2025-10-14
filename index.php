<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Royal Impressions - Home Page</title>
  <!-- bootstrap icnos -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
    rel="stylesheet" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <!-- bootstrap css -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
    crossorigin="anonymous" />
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
  <!-- Sticky Navbar -->
  <nav class="navbar navbar-expand-lg sticky-top py-3">
    <div class="container-fluid px-4">
      <!-- Brand -->
      <!-- <a class="navbar-brand fw-bold fs-4" href="#">ROYAL IMPRESSIONS</a> -->
      <a href=""><img
          src="assets/images/Royal_logo.png"
          height="50px"
          width="80px"
          alt="" /></a>
      <!-- Toggler (mobile) -->
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="offcanvas"
        data-bs-target="#mobileMenu"
        aria-controls="mobileMenu">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Desktop Nav -->
      <div
        class="collapse navbar-collapse d-none d-lg-flex justify-content-end">
        <ul class="navbar-nav align-items-center">
          <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#">About</a></li>

          <!-- Dropdown -->
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              role="button"
              data-bs-toggle="dropdown">Products</a>
            <ul class="dropdown-menu">
              <li>
                <a class="dropdown-item" href="#">Customized Design Solutions</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">High-Quality Printing Services</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Creative Graphic Designing</a>
              </li>
              <li><a class="dropdown-item" href="#">Offset Printing</a></li>
              <li><a class="dropdown-item" href="#">Digital Printing</a></li>
              <li>
                <a class="dropdown-item" href="#">Packaging Material</a>
              </li>
            </ul>
          </li>

          <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Offcanvas for Mobile Menu -->
  <div
    class="offcanvas offcanvas-end"
    tabindex="-1"
    id="mobileMenu"
    aria-labelledby="mobileMenuLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="mobileMenuLabel">Menu</h5>
      <button
        type="button"
        class="btn-close text-reset"
        data-bs-dismiss="offcanvas"
        aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#">About</a></li>

        <!-- Dropdown inside Offcanvas -->
        <li class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle"
            href="#"
            role="button"
            data-bs-toggle="dropdown">Products</a>
          <ul class="dropdown-menu">
            <ul class="dropdown-menu">
              <li>
                <a class="dropdown-item" href="#">Customized Design Solutions</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">High-Quality Printing Services</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Creative Graphic Designing</a>
              </li>
              <li><a class="dropdown-item" href="#">Offset Printing</a></li>
              <li><a class="dropdown-item" href="#">Digital Printing</a></li>
              <li>
                <a class="dropdown-item" href="#">Packaging Material</a>
              </li>
            </ul>
          </ul>
        </li>

        <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
      </ul>
    </div>
  </div>
  <!-- carousel  -->

  <div id="customCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
    <div class="carousel-inner">
      <!-- Slide 1: Notebooks -->
      <div class="carousel-item active">
        <img
          src="assets/images/baner_1.jpg"
          class="d-block w-100"
          height="600px"
          alt="Custom Printed Notebooks" />
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
        <img
          src="assets/images/baner_2.jpg"
          class="d-block w-100"
          height="600px"
          alt="Brochure Printing" />
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
        <img
          src="assets/images/baner_3.jpg"
          class="d-block w-100"
          height="600px"
          alt="Packaging Materials" />
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
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#customCarousel"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#customCarousel"
        data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>

    <!-- about us -->
    <section class="about-section">
      <div class="container">
        <div class="content">
          <h2 class="text-center">About Us</h2>
        </div>
        <div class="row align-items-center">
          <!-- Image Section -->
          <div class="col-md-6 mb-4 mb-md-0" data-aos="fade-right">
            <img src="assets/images/baner_2.jpg" alt="Royal Impressions - Custom Printing Solutions" class="about-img" />
          </div>

          <!-- Text Section -->
          <div class="col-md-6" data-aos="fade-left">
            <h3 class="about-title mb-4 animate__animated animate__fadeInUp">
              Royal Impressions: Crafting Quality Through Print
            </h3>
            <p class="about-text animate__animated animate__fadeInUp animate__delay-1s">
              At <span class="highlight">Royal Impressions</span>, we specialize in delivering top-tier designing and printing solutions for businesses of all sizes. With years of industry experience, our mission is to bring your ideas to life through creative design, precision printing, and unmatched quality.
            </p>
            <p class="about-text animate__animated animate__fadeInUp animate__delay-2s">
              Our wide range of products includes custom-designed notebooks, brochures, catalogs, packaging materials, and labels. Whether you're looking to promote your brand, package a product, or create customized stationery, we offer personalized solutions to meet your unique needs.
            </p>
            <p class="about-text animate__animated animate__fadeInUp animate__delay-3s">
              From concept to completion, our expert team combines innovation with craftsmanship, using advanced digital and offset printing technology to ensure stunning results every time.
            </p>
            <a href="#contact" class="btn btn-black mt-3 animate__animated animate__fadeInUp animate__delay-4s">Get in Touch</a>
          </div>
        </div>
      </div>
    </section>
    <!-- end about us  -->

    <!-- products -->
    <section class="py-5">
      <div class="container">
        <h2 class="text-center mb-5">Our Products</h2>
        <div class="row justify-content-center text-center g-4">

          <!-- Product: Computer Repair -->
          <div class="col-md-4">
            <div class="product-card bg-white">
              <img src="assets/images/notebook.jpg" class="img-fluid product-img" alt="Computer Repair" />
              <div class="p-4">
                <h5 class="fw-bold">Notebook</h5>
                <div class="d-flex justify-content-center align-items-center">
                  <a href="#" class="btn btn-outline-dark btn-sm">Detail</a>
                </div>
              </div>
            </div>
          </div>


        </div>
      </div>
    </section>
    <!-- end products  -->

    <!-- services  -->
    <section class="py-5 bg-white">
      <div class="container">
        <h2 class="text-center mb-5">Our Services</h2>
        <div class="row g-4">

          <!-- Service 1: Graphic Design -->
          <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm text-center">
              <div class="card-body">
                <div class="mb-3">
                  <i class="bi bi-brush fs-1 text-dark"></i>
                </div>
                <h5 class="card-title fw-bold">Creative Graphic Designing</h5>
                <p class="card-text text-muted">
                  Eye-catching and customized designs tailored to reflect your brand’s identity.
                </p>
              </div>
            </div>
          </div>

          <!-- Service 2: Offset & Digital Printing -->
          <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm text-center">
              <div class="card-body">
                <div class="mb-3">
                  <i class="bi bi-printer-fill fs-1 text-dark"></i>
                </div>
                <h5 class="card-title fw-bold">Offset & Digital Printing</h5>
                <p class="card-text text-muted">
                  High-quality printing solutions using the latest offset and digital printing technology.
                </p>
              </div>
            </div>
          </div>

          <!-- Service 3: Notebook Printing -->
          <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm text-center">
              <div class="card-body">
                <div class="mb-3">
                  <i class="bi bi-journal-bookmark-fill fs-1 text-dark"></i>
                </div>
                <h5 class="card-title fw-bold">Custom Notebook Printing</h5>
                <p class="card-text text-muted">
                  Personalized notebooks for schools, colleges, corporate branding, or giveaways.
                </p>
              </div>
            </div>
          </div>

          <!-- Service 4: Brochures & Catalogs -->
          <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm text-center">
              <div class="card-body">
                <div class="mb-3">
                  <i class="bi bi-journal-richtext fs-1 text-dark"></i>
                </div>
                <h5 class="card-title fw-bold">Brochures & Catalogs</h5>
                <p class="card-text text-muted">
                  Professionally designed and printed brochures and product catalogs for marketing.
                </p>
              </div>
            </div>
          </div>

          <!-- Service 5: Packaging Solutions -->
          <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm text-center">
              <div class="card-body">
                <div class="mb-3">
                  <i class="bi bi-box-seam fs-1 text-dark"></i>
                </div>
                <h5 class="card-title fw-bold">Custom Packaging Materials</h5>
                <p class="card-text text-muted">
                  Attractive and durable packaging solutions customized for your product needs.
                </p>
              </div>
            </div>
          </div>

          <!-- Service 6: Labels & Stickers -->
          <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm text-center">
              <div class="card-body">
                <div class="mb-3">
                  <i class="bi bi-tags-fill fs-1 text-dark"></i>
                </div>
                <h5 class="card-title fw-bold">Labels & Stickers</h5>
                <p class="card-text text-muted">
                  High-quality custom labels and stickers for branding, packaging, and retail use.
                </p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- end services  -->

    <!-- faq  -->
    <section class="py-5 bg-light" id="faq">
      <div class="container">
        <h2 class="text-center mb-5">Frequently Asked Questions</h2>
        <div class="accordion" id="faqAccordion">

          <!-- FAQ 1 -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="faqHeading1">
              <button class="accordion-button" type="button" data-bs-toggle="collapse"
                data-bs-target="#faqCollapse1" aria-expanded="true" aria-controls="faqCollapse1">
                What products do you offer?
              </button>
            </h2>
            <div id="faqCollapse1" class="accordion-collapse collapse show" aria-labelledby="faqHeading1"
              data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                We offer custom notebooks, brochures, catalogs, labels, stickers, packaging materials, and a range of printed marketing products.
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
                Yes, all our products can be fully customized with your brand's logo, colors, and content. We also offer professional graphic design services.
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
                Yes, we provide both offset and digital printing services based on your order volume, delivery needs, and budget.
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
                Minimum order quantity depends on the product. Typically, we accept orders starting from 100 units for notebooks and 500 for packaging or labels.
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
                Delivery usually takes 5–10 business days depending on the product type, customization, and quantity. We also offer express delivery options.
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
                Yes! Our in-house graphic design team can create designs from scratch based on your requirements, branding, and style preferences.
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
                Absolutely! We specialize in bulk printing for schools, offices, manufacturers, and marketing agencies, offering competitive rates and consistent quality.
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
                We accept high-resolution files in PDF, AI, PSD, CDR, and EPS formats. If you're unsure, our design team can assist in formatting your files correctly.
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
                Yes, we can provide a physical or digital sample for approval before final production, especially for large or custom orders.
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
                We are based in Faridabad and offer nationwide delivery across India through reliable courier partners. International shipping is also available on request.
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- end faq  -->

    <!-- contact  -->
    <section id="contact" class="py-5 bg-light">
      <div class="container">
        <h2 class="text-center mb-5">Contact Us</h2>
        <div class="row g-4 align-items-stretch">

          <!-- Left Side: Google Map -->
          <div class="col-lg-6">
            <div class="h-100 rounded shadow-sm overflow-hidden">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3503.030325609066!2d77.31524861508029!3d28.592140282436537!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce45f9177e1ab%3A0x8a987e5c69b3388f!2sFaridabad%2C%20Haryana!5e0!3m2!1sen!2sin!4v1698168255806!5m2!1sen!2sin"
                width="100%" height="100%" style="border:0; min-height: 400px;" allowfullscreen=""
                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>

          <!-- Right Side: Contact Form -->
          <div class="col-lg-6">
            <div class="card h-100 shadow-sm border-0">
              <div class="card-body p-4 bg-white">
                <h5 class="mb-4">Send us a message</h5>
                <form action="https://formspree.io/f/yourformid" method="POST">

                  <!-- Name -->
                  <div class="mb-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="name" name="name" required />
                  </div>

                  <!-- Email -->
                  <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email" required />
                  </div>

                  <!-- Phone -->
                  <div class="mb-3">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="tel" class="form-control" id="phone" name="phone" required />
                  </div>

                  <!-- Subject -->
                  <div class="mb-3">
                    <label for="subject" class="form-label">Subject</label>
                    <input type="text" class="form-control" id="subject" name="subject" required />
                  </div>

                  <!-- Message -->
                  <div class="mb-3">
                    <label for="message" class="form-label">Your Message</label>
                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                  </div>

                  <!-- Submit Button -->
                  <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Send Message</button>
                  </div>
                </form>

                <!-- WhatsApp Button -->
                <div class="text-center mt-4">
                  <a
                    href="https://wa.me/919999999999" <!-- Replace with your actual WhatsApp number -->
                    target="_blank"
                    class="btn btn-success"
                    >
                    <i class="bi bi-whatsapp me-2"></i> Chat with us on WhatsApp
                  </a>
                </div>

              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- end contact  -->

    <!-- Footer -->
    <footer class="pt-5 pb-4 bg-light" data-aos="fade-up" data-aos-delay="100">
      <div class="container text-center text-md-start">
        <div class="row text-center text-md-start">

          <!-- Company Info -->
          <div class="col-md-3 col-lg-4 col-xl-4 mx-auto mb-4">
            <h5 class="text-uppercase fw-bold mb-4">Royal Impressions</h5>
            <p>
              Royal Impressions specializes in custom notebook manufacturing and high-quality printing services tailored to meet both personal and business needs. Based in Bangalore, we deliver creativity, quality, and precision in every print.
            </p>
          </div>

          <!-- Products -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <h6 class="text-uppercase fw-bold mb-4">Products</h6>
            <ul class="list-unstyled">
              <li><a href="#products" class="text-decoration-none text-dark">Notebooks</a></li>
              <li><a href="#services" class="text-decoration-none text-dark">Custom Printing</a></li>
            </ul>
          </div>

          <!-- Quick Links -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <h6 class="text-uppercase fw-bold mb-4">Quick Links</h6>
            <ul class="list-unstyled">
              <li><a href="#about" class="text-decoration-none text-dark">About Us</a></li>
              <li><a href="#products" class="text-decoration-none text-dark">Products</a></li>
              <li><a href="#services" class="text-decoration-none text-dark">Services</a></li>
              <li><a href="#faq" class="text-decoration-none text-dark">FAQ</a></li>
              <li><a href="#contact" class="text-decoration-none text-dark">Contact</a></li>
            </ul>
          </div>

          <!-- Contact Info -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
            <p><i class="bi bi-house-door-fill me-2"></i>Bangalore, Karnataka, India</p>
            <p><i class="bi bi-envelope-fill me-2"></i>ri.print2002@gmail.com</p>
            <p><i class="bi bi-telephone-fill me-2"></i>+91 99723 76566</p>
          </div>
        </div>

        <!-- Divider -->
        <hr class="my-4" />

        <!-- Social Media + Copyright -->
        <div class="row align-items-center text-center">
          <div class="col-md-6">
            <p class="mb-0 text-center">
              © 2025 Royal Impressions. All Rights Reserved.
            </p>
            <span>Design By <a href="https://trade4export.com/" class="text-decoration-none">Trade4Export</a></span>
          </div>
          <div class="col-md-6">
            <div class="d-flex justify-content-center justify-content-md-end gap-3">
              <a href="#"><i class="bi bi-facebook fs-5"></i></a>
              <a href="#"><i class="bi bi-instagram fs-5"></i></a>
              <a href="https://wa.me/919972376566" target="_blank"><i class="bi bi-whatsapp fs-5"></i></a>
              <a href="#"><i class="bi bi-linkedin fs-5"></i></a>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script src="assets/js/script.js"></script>
    <!-- bootstrap js  -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
      crossorigin="anonymous"></script>
</body>

</html>