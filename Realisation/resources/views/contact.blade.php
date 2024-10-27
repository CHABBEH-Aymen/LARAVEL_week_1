<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset("css/contact.css") }}">
    <!-- favicon -->
    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">
    <!-- Fontawesome icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  </head>
  <body>

    
    <section class = "contact-section">
      <div class = "contact-bg">
        <h3>Get in Touch with Us</h3>
        <h2>contact us</h2>
        <div class = "line">
          <div></div>
          <div></div>
          <div></div>
        </div>
        <p class = "text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda iste facilis quos impedit fuga nobis modi debitis laboriosam velit reiciendis quisquam alias corporis, maxime enim, optio ab dolorum sequi qui.</p>
      </div>


      <div class = "contact-body">
        <div class = "contact-info">
          <div>
            <span><i class = "fas fa-mobile-alt"></i></span>
            <span>Phone No.</span>
            <span class = "text">1-2392-23928-2</span>
          </div>
          <div>
            <span><i class = "fas fa-envelope-open"></i></span>
            <span>E-mail</span>
            <span class = "text">mail@company.com</span>
          </div>
          <div>
            <span><i class = "fas fa-map-marker-alt"></i></span>
            <span>Address</span>
            <span class = "text">2939 Patrick Street, Vicotria TX, United States</span>
          </div>
          <div>
            <span><i class = "fas fa-clock"></i></span>
            <span>Opening Hours</span>
            <span class = "text">Monday - Friday (9:00 AM to 5:00 PM)</span>
          </div>
        </div>

        <div class = "contact-form">
          <form method="POST" action="{{ route("sendMail") }}">
          @csrf
            <div>
              <input type = "text" name="name" class= "form-control" placeholder="First Name">
              <input type = "text" name="lastName" class= "form-control" placeholder="Last Name">
            </div>
            <div>
              <input type = "email" name="email" class = "form-control" placeholder="E-mail">
              <input type = "text" name="phone" class = "form-control" placeholder="Phone">
            </div>
            <textarea rows = "5" placeholder="Message" name="msg" class = "form-control"></textarea>
            <input type = "submit" class = "send-btn" value = "send message">
          </form>

          <div>
            <img src = "{{ asset("imgs/contact-png.png") }}" alt = "">
          </div>
        </div>
      </div>

    </section>

    

    <!-- FOOTER -->
    <footer class="footer">

      <div class="footer-bottom">
        <div class="container">
          <p class="copyright">
            &copy; 2024 SoliCode</a>. All Rights Reserved
          </p>
        </div>
      </div>

    </footer>

  </body>
</html>