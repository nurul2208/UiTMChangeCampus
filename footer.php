    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-3 footer-item">
            <h4> UiTM Change Campus Form</h4>
            <p>Flexible student to appliying the changing campus by online </p>
            <ul class="social-icons">
              <li><a href="https://www.facebook.com/IGSUiTM" target="_blank"><i class="fa-brands fa-facebook"></i></a></li>
            <li><a href="https://www.instagram.com/ipsis.uitm/" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
            <li><a href="https://www.youtube.com/c/IPSisUiTMChannel/featured" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
            </ul>
          </div>
          <div class="col-md-3 footer-item">
            <h4>Made By</h4>
            <ul class="menu-list">
              <li><a>Nurul Qistina Binti Osman Talib</a></li>
            </ul>
          </div>
          <div class="col-md-3 footer-item">
            <h4>Additional Pages</h4>
            <ul class="menu-list">
              <li><a href="index.html">Home</a></li>
              <li><a href="form.php">Form Change Campus</a></li>
            </ul>
          </div>
          <div class="col-md-3 footer-item last-item">
            <h4>Contact Us</h4>
            <div class="contact-form">
              <form id="contact footer-contact" action="" method="post">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-Mail Address" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="filled-button">Send Message</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </footer>
    
    <div class="sub-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p>
                Copyright &copy; <?php echo date ('Y'); ?>  UiTM 
            </p>
          </div>
        </div>
      </div>
    </div>



    <script>
        document.addEventListener('DOMContentLoaded', function () {
            setTimeout(function () {
                var audio = document.getElementById('backgroundAudio');
                audio.play();
            }, 4000); // 4000 milliseconds = 4 seconds
        });
    </script>

     <script src="https://kit.fontawesome.com/0994c13037.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



</body>

</html>