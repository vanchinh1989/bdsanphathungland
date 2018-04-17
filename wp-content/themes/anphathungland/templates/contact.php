<?php
/*
 Template Name: Contact
 */
?>

<?php get_header(); ?>
<div class="container">
    <h1 class="mt-4 mb-3 color-theme">Liên hệ</h1>
    <div class="row mb-3">
      <div class="col-lg-7">
        <h3>Send us a Message</h3>
        <form name="sentMessage" id="contactForm" novalidate>
          <div class="control-group form-group">
            <div class="controls">
              <label>Full Name:</label>
              <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
              <p class="help-block"></p>
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Phone Number:</label>
              <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Email Address:</label>
              <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Message:</label>
              <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message"
                maxlength="999" style="resize:none"></textarea>
            </div>
          </div>
          <div id="success"></div>
          <button type="submit" class="btn btn-primary" id="sendMessageButton">Send Message</button>
        </form>
      </div>
      <div class="col-lg-5">
        <h3>Contact Details</h3>
        <ul class="fa-ul">
          <li class="my-3">
            <span class="fa-li">
              <i class="fa fa-map-marker-alt fa-fw"></i>
            </span>
            <span class="bold">Địa chỉ:</span> P10.03 Tòa nhà Kim Ánh, 78 Duy Tân, Cầu Giấy, Hà Nội</li>
          <li class="my-3">
            <span class="fa-li">
              <i class="fa fa-phone-volume fa-fw"></i>
            </span>
            <span class="bold">Hotline:</span>
            <a href="tel:0436321668">0436.321.668</a> -
            <a href="tel:0906227669">0906.227.669</a>
          </li>
          <li class="my-3">
            <span class="fa-li">
              <i class="fa fa-envelope fa-fw"></i>
            </span>
            <span class="bold">Email:</span>
            <a href="mailto:contact@anphathungland.com">contact@anphathungland.com</a>
          </li>
        </ul>
        <iframe width="100%" height="410px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=37.0625,-95.677068&amp;spn=56.506174,79.013672&amp;t=m&amp;z=4&amp;output=embed"></iframe>
      </div>
    </div>
</div>

<?php get_footer(); ?>