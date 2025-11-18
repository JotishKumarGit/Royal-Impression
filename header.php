  <!-- Sticky Navbar -->
  <nav class="navbar navbar-expand-lg sticky-top py-3">
    <div class="container-fluid px-4">
      <!-- Brand -->
      <a href="index.php"><img src="assets/images/Royal_logo.png" height="50px" width="80px" alt="" /></a>
      <a class="navbar-brand fw-bold fs-4" href="#">ROYAL IMPRESSIONS</a>

      <!-- Toggler (mobile) -->
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu"
        aria-controls="mobileMenu">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Desktop Nav -->
      <div class="collapse navbar-collapse d-none d-lg-flex justify-content-end">
        <ul class="navbar-nav align-items-center">
          <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>

          <!-- Dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Products</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="noteBook.php">Note Book</a></li>
              <li><a class="dropdown-item" href="Hard_binding_notebook.php">Hard Binding Notebook</a></li>
              <li><a class="dropdown-item" href="soft_binding_notebook.php">Soft Binding Notebook</a></li>
            </ul>
          </li>

          <li class="nav-item"><a class="nav-link" href="services.php">Services</a></li>
          <li class="nav-item"><a class="nav-link" href="blog.php">Blog</a></li>
          <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>

          <!-- Enquiry Button -->
          <li class="nav-item mt-2">
          <a class="w-100 text-white text-center d-inline-block py-2 px-2"
            style="background-color: #003d66; border-radius: 5px; text-decoration: none;"
            href="assets/images/Royal Impression Brochure.pdf" target="_blank">
            Brochures
          </a>
        </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Offcanvas for Mobile Menu -->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="mobileMenu" aria-labelledby="mobileMenuLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="mobileMenuLabel">Menu</h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>

        <!-- Dropdown inside Offcanvas -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Products</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="noteBook.php">Note Book</a></li>
            <li><a class="dropdown-item" href="Hard_binding_notebook.php">Hard Binding Notebook</a></li>
            <li><a class="dropdown-item" href="soft_binding_notebook.php">Soft Binding Notebook</a></li>
          </ul>
        </li>

        <li class="nav-item"><a class="nav-link" href="services.php">Services</a></li>
        <li class="nav-item"><a class="nav-link" href="blog.php">Blog</a></li>
        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>

        <!-- Enquiry Button in Offcanvas -->
        <li class="nav-item mt-2">
          <a class="w-100 text-white text-center d-inline-block py-2"
            style="background-color: #003d66; border-radius: 5px; text-decoration: none;"
            href="assets/images/Royal Impression Brochure.pdf" target="_blank">
            Brochures
          </a>
        </li>
      </ul>
    </div>
  </div>
