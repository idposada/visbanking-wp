<?php /* Template Name: Contact */ ?>
<?php include 'header.php' ?>

<main>
  <h1 class="text-center">Contact</h1>
  <hr>
  <h2 class="text-center">Contact us or connect to Visbanking</h2>

  <div class="row">
    <div class="col m8 form-section">
      <div class="form-title">
        Talk with us
      </div>

      <div class="contact-form">
        <form class="" action="" method="post" id="contact-form">
          <div class="form-fiels">
            <input type="text" name="" value="" placeholder="Your First Name">
            <input type="text" name="" value="" placeholder="Your Last Name">
          </div>
          <div class="form-fiels">
            <input type="email" name="" value="" placeholder="Your Email">
            <input type="number" name="" value="" placeholder="Your Phone Number">
          </div>

          <textarea name="name" rows="8" cols="80" form="contact-form"></textarea>
          <div class="boton-enviar">
              <input type="submit" name="" value="SEND">
          </div>
        </form>
      </div>
    </div>

    <div class="col m4 contact-info">
    <h5 class="contact-subtitle">Contact Information</h5>
      <hr>
      <ul>
        <li>Contact <span class="material-icons">mail</span></li>
        <li>Support <span class="material-icons">contact_support</span></li>
        <li>Sales <span class="material-icons">contact_emergency</span></li>
      </ul>

      <h5 class="contact-subtitle">Company</h5>
        <hr>
        <ul>
          <li>About Us </li>
          <li>Privacy Policy</li>
          <li>Terns & Conditions</li>
        </ul>

    </div>
  </div>

</main>

<?php include 'footer.php' ?>
