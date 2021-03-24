<?php
  $page = 'about';
  $title = "Uncle John's - About";
  include('layout/header.php');
?>
<div class='container py-5'>
  <h2 class="pb-2 border-bottom">About Uncle John's</h2>
  <div class="row g-5 py-5">
    <div class="feature col-md-4">
      <div class="feature-icon bg-primary bg-gradient">
        <svg class="bi" width="1em" height="1em"><use xlink:href="#collection"/></svg>
      </div>
      <h2>Chef John Boswell</h2>
      <p>This guy is the man. Get to know him by reading this.</p>
      <a href="#" class="icon-link">
        Contact Chef John
        <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"/></svg>
      </a>
    </div>
    <div class="feature col-md-4">
      <div class="feature-icon bg-primary bg-gradient">
        <svg class="bi" width="1em" height="1em"><use xlink:href="#people-circle"/></svg>
      </div>
      <h2>Our Beginnings</h2>
      <p>Guy likes pasta. Guy cooks pasta. Guy eats pasta. Guy shares pasta. Simple </p>
      <a href="#" class="icon-link">
        Place Order
        <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"/></svg>
      </a>
    </div>
    <div class="feature col-md-4">
      <div class="feature-icon bg-primary bg-gradient">
        <svg class="bi" width="1em" height="1em"><use xlink:href="#toggles2"/></svg>
      </div>
      <h2>Our Clients</h2>
      <p>Our clients love us and we love them. Thanks guys.</p>
      <a href="#" class="icon-link">
        Read Reviews
        <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"/></svg>
      </a>
    </div>
  </div>
</div>
<?php include('layout/footer.php'); ?>
