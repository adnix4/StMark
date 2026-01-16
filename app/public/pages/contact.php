<section class="py-4">
  <section class="hero has-img">
    <div class="container">
      <h1>St. Mark Lutheran Church</h1>
      <p class="lead">We'd love to hear from you! Whether you have questions, need assistance, or want to get involved, please reach out.</p>  
      <p>If you'd like to get in touch, fill out the form below.</p>
    </div>
  </section>
  <div class="content">
  <form action="<?php echo $base; ?>contact_form.php" method="post" class="row g-3 needs-validation" novalidate>
    <div class="col-md-6">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control" id="name" name="name" required>
      <div class="invalid-feedback">Please enter your name.</div>
    </div>
    <div class="col-md-6">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" id="email" name="email" required>
      <div class="invalid-feedback">Please enter a valid email.</div>
    </div>
    <div class="col-12">
      <label for="message" class="form-label">Message</label>
      <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
      <div class="invalid-feedback">Please enter a message.</div>
    </div>
    <div class="col-12">
      <button class="btn btn-primary" type="submit">Send message</button>
    </div>
  </form>
</div>
</section>
