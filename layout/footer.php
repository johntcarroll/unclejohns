  <div class='container'>
    <footer class="bg-light text-center text-lg-start">
    <div class="container p-4">
      <div class="row">
        <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
          <h5 class="text-uppercase">Uncle John's</h5>
          <p>Providing the best Chef services in the World!</p>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Site Map</h5>
          <ul class="list-unstyled mb-0">
            <li><a href="index.php" class='text-dark'>Home</a></li>
            <li><a href="services.php" class='text-dark'>Services</a></li>
            <li><a href="weekly-menu.php" class='text-dark'>Weekly Menu</a></li>
            <li><a href="about.php" class='text-dark'>About</a></li>
            <li><a href="faq.php" class='text-dark'>FAQs</a></li>
        </div>
      </div>
    </div>
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2020 Copyright:
      <a class="text-dark" href="index.php">Uncle John's LLC</a>
    </div>
    </footer>
  </div>
  <div class="modal" tabindex="-1" id='contact-us-modal'>
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Contact Us</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class='row pt-2'>
            <div class='col-xs-12'>
              <label>Which service are you interested in?</label>
              <select class="form-select contact-us-field" name='service' required>
                <option value='' selected>Select a service</option>
                <option value="Catering">Catering</option>
                <option value="Private Chef">Private Chef</option>
                <option value="Home Delivery">Home Delivery</option>
              </select>
            </div>
          </div>
          <div class='row pt-2'>
            <div class='col-sm-6 col-xs-12'>
              <label>First Name</label>
              <input class='form-control contact-us-field' type='text' name='fname' placeholder='enter your first name'/>
            </div>
            <div class='col-sm-6 col-xs-12'>
              <label>Last Name</label>
              <input class='form-control contact-us-field' type='text' name='lname' placeholder='enter your last name'/>
            </div>
          </div>
          <div class='row pt-2'>
            <div class='col-sm-6 col-xs-12'>
              <label>Phone</label>
              <input class='form-control contact-us-field' type="text" name="phone" placeholder='enter your phone number'>
            </div>
            <div class='col-sm-6 col-xs-12'>
              <label>Email</label>
              <input class='form-control contact-us-field' type='text' name='email' placeholder='enter your email'/>
            </div>
          </div>
          <div class='row pt-2'>
            <div class='col-xs-12'>
              <label>Details:</label>
              <textarea class='form-control contact-us-field' rows="8" name="details"> </textarea>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick='handleContactUsSubmission()'>Submit</button>
          <input class='contact-us-field' type='hidden' name='token' value="<?=$token?>"/>
        </div>
      </div>
    </div>
  </div>
  <script src="../assets/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/contact.js"></script>
  </body>
</html>
