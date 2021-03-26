<?php
  $page = 'weeklyMenu';
  $title = "Uncle John's - Weekly Menu";
  include('layout/header.php')
?>
<div class='container py-5'>
  <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
    <h1 class="display-4 fw-normal">Weekly Menu</h1>
    <p class="fs-5 text-muted">Weekly delights delivered to your door</p>
  </div>

  <main>
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Salad</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$10<small class="text-muted fw-light">/ea</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Ceasar Salad</li>
              <li>Amazing Lettuce</li>
              <li>Maybe Healthy</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-outline-primary" data-bs-toggle="modal" data-bs-target="#contact-us-modal">Place Order</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Pasta</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$20<small class="text-muted fw-light">/ea</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Penne Sauced</li>
              <li>Baked Ziti</li>
              <li>Vegan Pesto</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-outline-primary" data-bs-toggle="modal" data-bs-target="#contact-us-modal">Place Order</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Dessert</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$5<small class="text-muted fw-light">/ea</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Cookies</li>
              <li>Who doesn't like cookies</li>
              <li>Other Desserts</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-outline-primary" data-bs-toggle="modal" data-bs-target="#contact-us-modal">Place Order</button>
          </div>
        </div>
      </div>
    </div>
  </main>
</div>
<?php include('layout/footer.php') ?>
