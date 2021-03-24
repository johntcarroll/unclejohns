<?php
  $page = 'services';
  $title = "Uncle John's - Services";
  include('layout/header.php');
?>
<div class='container py-5'>
  <h2 class="pb-2 border-bottom">Uncle John's Services</h2>
  <div class="px-4 py-5 my-5 text-center">
    <img class="d-block mx-auto mb-4" src="assets/img/chef.png" alt="" width="72" height="72">
    <h1 class="display-5 fw-bold">Catering</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">Uncle John is the best caterer in the world!</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        <button type="button" class="btn btn-primary btn-lg px-4 me-sm-3">Book Your Event</button>
        <button type="button" class="btn btn-outline-secondary btn-lg px-4">What our Clients Think</button>
      </div>
    </div>
  </div>

  <div class="px-4 py-5 my-5 text-center">
    <img class="d-block mx-auto mb-4" src="assets/img/chef.png" alt="" width="72" height="72">
    <h1 class="display-5 fw-bold">Private Chef</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">Uncle John will cook in your own kitchen!</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        <button type="button" class="btn btn-primary btn-lg px-4 me-sm-3">Reserve your Evening</button>
        <button type="button" class="btn btn-outline-secondary btn-lg px-4">What our Clients Think</button>
      </div>
    </div>
  </div>

  <div class="px-4 py-5 my-5 text-center">
    <img class="d-block mx-auto mb-4" src="assets/img/chef.png" alt="" width="72" height="72">
    <h1 class="display-5 fw-bold">Home Delivery</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">Uncle John will litterally drop food off at your house and pet your dog.</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        <button type="button" class="btn btn-primary btn-lg px-4 me-sm-3">View the Weekly Menu</button>
        <button type="button" class="btn btn-outline-secondary btn-lg px-4">What our Clients Think</button>
      </div>
    </div>
  </div>
</div>
<?php include('layout/footer.php'); ?>
