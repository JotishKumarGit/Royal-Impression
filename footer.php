<!-- Enquiry Modal -->
<div class="modal fade" id="enquiryModal" tabindex="-1" aria-labelledby="enquiryModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="enquiryForm">
                <div class="modal-header">
                    <h5 class="modal-title" id="enquiryModalLabel">Enquiry Form</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name*</label>
                        <input type="text" class="form-control" id="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email*</label>
                        <input type="email" class="form-control" id="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="subject" class="form-label">Subject*</label>
                        <input type="text" class="form-control" id="subject" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message*</label>
                        <textarea class="form-control" id="message" rows="3" required></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Submit via WhatsApp</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function sendToWhatsApp() {
        // Get values
        const name = document.getElementById("name").value.trim();
        const email = document.getElementById("email").value.trim();
        const message = document.getElementById("message").value.trim();
        // WhatsApp number (without +)
        const phoneNumber = "919972376566"; // <-- apna number yahan daalein

        // Create WhatsApp message
        const whatsappMessage = `Hello, my name is *${name}* (%0AEmail: ${email})%0A%0A${message}`;

        // Redirect to WhatsApp
        const url = `https://wa.me/${phoneNumber}?text=${whatsappMessage}`;
        window.open(url, "_blank");
    }
</script>
<!-- JavaScript to Handle enquiryForm WhatsApp Redirect -->

<script>
document.getElementById("enquiryForm").addEventListener("submit", function(e) {
    e.preventDefault();

    const name = document.getElementById("name").value.trim();
    const email = document.getElementById("email").value.trim();
    const phone = document.getElementById("phone").value.trim();
    const subject = document.getElementById("subject").value.trim();
    const message = document.getElementById("message").value.trim();

    // WhatsApp Number (NO spaces)
    const phoneNumber = "919972376566";

    // WhatsApp formatted message
    const whatsappMessage =
        `Name: ${name}%0A` +
        `Email: ${email}%0A` +
        `Phone: ${phone}%0A` +
        `Subject: ${subject}%0A` +
        `Message: ${message}`;

    const whatsappURL = `https://wa.me/${phoneNumber}?text=${whatsappMessage}`;

    // Open WhatsApp
    window.open(whatsappURL, "_blank");
});
</script>



    <!-- Footer -->
    <footer class="pt-5 pb-4" data-aos="fade-up" data-aos-delay="100" style="background-color: #003d66; color: white;">
      <div class="container text-center text-md-start">
        <div class="row text-center text-md-start">

          <!-- Company Info -->
          <div class="col-md-3 col-lg-4 col-xl-4 mx-auto mb-4">
            <h5 class="text-uppercase fw-bold mb-4" style="color: white;">Royal Impressions</h5>
            <p>
              Royal Impressions specializes in custom notebook manufacturing and high-quality printing services tailored
              to meet both personal and business needs. Based in Bangalore, we deliver creativity, quality, and
              precision in every print.
            </p>
          </div>

          <!-- Products -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <h6 class="text-uppercase fw-bold mb-4" style="color: white;">Products</h6>
            <ul class="list-unstyled">
              <li><a href="#products" class="text-decoration-none" style="color: white;">Notebooks</a></li>
              <li><a href="#services" class="text-decoration-none" style="color: white;">Custom Printing</a></li>
            </ul>
          </div>

          <!-- Quick Links -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <h6 class="text-uppercase fw-bold mb-4" style="color: white;">Quick Links</h6>
            <ul class="list-unstyled">
              <li><a href="#about" class="text-decoration-none" style="color: white;">About Us</a></li>
              <li><a href="#products" class="text-decoration-none" style="color: white;">Products</a></li>
              <li><a href="#services" class="text-decoration-none" style="color: white;">Services</a></li>
              <li><a href="#faq" class="text-decoration-none" style="color: white;">FAQ</a></li>
              <li><a href="#contact" class="text-decoration-none" style="color: white;">Contact</a></li>
            </ul>
          </div>

          <!-- Contact Info -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <h6 class="text-uppercase fw-bold mb-4" style="color: white;">Contact</h6>
            <p><i class="bi bi-house-door-fill me-2"></i>Bangalore, Karnataka, India</p>
            <p><i class="bi bi-envelope-fill me-2"></i>ri.print2002@gmail.com</p>
            <p><i class="bi bi-telephone-fill me-2"></i>+91 99723 76566</p>
          </div>
        </div>

        <!-- Divider -->
        <hr class="my-4" style="border-color: rgba(255, 255, 255, 0.3);" />

        <!-- Social Media + Copyright -->
        <div class="row align-items-center text-center">
          <div class="col-md-6">
            <p class="mb-0 text-center" style="color: white;">
              © 2025 Royal Impressions. All Rights Reserved.
            </p>
            <span style="color: white;">Design By <a href="https://trade4export.com/" class="text-decoration-none"
                style="color: white;">Trade4Export</a></span>
          </div>
          <div class="col-md-6">
            <div class="d-flex justify-content-center justify-content-md-end gap-3">
              <a href="#"><i class="bi bi-facebook fs-5" style="color: white;"></i></a>
              <a href="#"><i class="bi bi-instagram fs-5" style="color: white;"></i></a>
              <a href="https://wa.me/919972376566" target="_blank"><i class="bi bi-whatsapp fs-5"
                  style="color: white;"></i></a>
              <a href="#"><i class="bi bi-linkedin fs-5" style="color: white;"></i></a>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script src="assets/js/script.js"></script>
    <!-- bootstrap js  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
      crossorigin="anonymous"></script>
</body>

</html>