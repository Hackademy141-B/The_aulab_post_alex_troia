<!-- Footer -->
<footer class="bg-body-tertiary text-center position-absolute bottom end-0 start-0">
    <!-- Grid container -->
    <div class="container p-4">
      <!-- Section: Social media -->
      <section class="mb-4">
        <!-- Social media buttons -->
        <a data-mdb-ripple-init class="btn btn-outline btn-floating m-1" href="https://www.facebook.com/?locale=it_IT" role="button">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a data-mdb-ripple-init class="btn btn-outline btn-floating m-1" href="https://twitter.com/?lang=it" role="button">
          <i class="fab fa-twitter"></i>
        </a>
        <a data-mdb-ripple-init class="btn btn-outline btn-floating m-1" href="https://www.google.it/?hl=it" role="button">
          <i class="fab fa-google"></i>
        </a>
        <a data-mdb-ripple-init class="btn btn-outline btn-floating m-1" href="https://www.instagram.com/accounts/login/?next=https%3A%2F%2Fwww.instagram.com%2F" role="button">
          <i class="fab fa-instagram"></i>
        </a>
        <a data-mdb-ripple-init class="btn btn-outline btn-floating m-1" href="https://www.linkedin.com/" role="button">
          <i class="fab fa-linkedin-in"></i>
        </a>
        <a data-mdb-ripple-init class="btn btn-outline btn-floating m-1" href="https://github.com/" role="button">
          <i class="fab fa-github"></i>
        </a>
      </section>
      <!-- End Section: Social media -->
  
      <!-- Section: Newsletter -->
  <section class="row d-flex justify-content-center mb-4 mx-auto">
    <!-- Label -->
    <div class="col-md-3 text-center">
      <p class="pt-2">
        <strong>Iscriviti alla nostra newsletter</strong>
      </p>
    </div>
    <!-- End Label -->
  
    <!-- Email Input -->
    <div class="col-md-5 col-12">
      <form action="" method="POST">
        @csrf
      <div data-mdb-input-init class="form-outline mb-4 ml-0">
        <input type="email" id="form5Example24" class="form-control" name="email" placeholder="Inserisci la tua mail..." />
      </div>
    </div>
    <!-- End Email Input -->
  
    <!-- Subscribe Button -->
    <div class="col-md-3">
      <button type="submit" class="btn btn-outline-dark button-margin">Iscriviti</button>
    </div>
    </form>
    <!-- End Subscribe Button -->
  </section>
  <!-- End Section: Newsletter -->
  
      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2024 Copyright:
        <a class="text-reset fw-bold" href="{{route('homePage')}}">The Aulab Post</a>
      </div>
      <!-- End Copyright -->
    </div>
    <!-- End Grid container -->
  </footer>
  <!-- End Footer -->
  