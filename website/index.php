<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Posstest 4 Pemrograman Web</title>
    <title>BURGER KING</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="top-nav">
        <div class="logo"><img src="gambar/logo-removebg-preview.png" alt="" width="60px"><span>Burger King</span></div>
        <input id="menu-toggle" type="checkbox" />
        <label class='menu-button-container' for="menu-toggle">
        <div class='menu-button'></div>
      </label>
        <ul class="menu-navbar">
          <li class="123"><a href="">Home</a></li>
          <li class="123"><a href="#ourmenu">Menu</a></li>
          <li class="123"><a href="#about">About</a></li>
          <li class="123"><a href="#contact">contact</a></li>
          <li><a href="#"><li><a href="#"><i class="bi-brightness-high-fill jancoklu" id="toggleDark"></i></a></li></a></li>
        </ul>
      </section>

<!-----------------------------home----------------------------------->
    <div class="iklan">
        <div class="col-2">
        
          <img src="gambar/iklannn4.webp" alt="pict2" width="900px" />
        </div>
        <div class="col-2">
          <img src="gambar/iklan 2.webp" alt="pict2"  width="900px"/>
        </div>
        <div class="col-2">
            <img src="gambar/iklan 1.webp" alt="pict1" width="900px"/>
          </div>
        <div class="col-2">
            <img src="gambar/iklannn3.webp" alt="pict2" width="900px"/>
            
        </div>
      </div>

<!------------------------------------- MENU ------------------------------------>
    <div id="ourmenu" class="container">
        <p class="judul">OUR MENU</p>
          <div class="menu">
            <img src="gambar/gambar 16.webp" class="content" />
            <div class="deskrip">
              <span>Chicken Fries</span>
              <h4>Rp. 18.000</h4>
            </div>
            <p><i class="fa-solid fa-plus cart" onclick="a()"></i></p>
          </div>
          <div class="menu">
            <img src="gambar/gambar 17.webp" class="content" />
            <div class="deskrip">
              <span>Big Fish</span>
              <h4>Rp. 32.000</h4>
            </div>
            <p><i class="fa-solid fa-plus cart" onclick="a()"></i></p>
          </div>
          <div class="menu">
            <img src="gambar/gambar 18.webp" class="content" />
            <div class="deskrip">
              <span>Chicken Jr</span>
              <h4>Rp. 36.000</h4>
            </div>
            <p><i class="fa-solid fa-plus cart" onclick="a()"></i></p>
          </div>
          <div class="menu">
            <img src="gambar/gambar 19.webp" class="content" />
            <div class="deskrip">
              <span>Original chicken<br>Sandwich</span>
              <h4>Rp. 40.000</h4>
            </div>
            <p><i class="fa-solid fa-plus cart" onclick="a()"></i></p>
          </div>
          <div class="menu">
            <img src="gambar/gambar 20.webp" class="content" />
            <div class="deskrip">
              <span>Small Onion Rings</span>
              <h4>Rp. 18.000</h4>
            </div>
            <p><i class="fa-solid fa-plus cart" onclick="a()"></i></p>
          </div>
        </div>
      </div>
        </div>
      </div>
    
        <!---------------------- Menu Form--------------------------- -->

    <section style="display: flex; justify-content: center; width: 100%; align-items: center;">
      <form class="form-burger" action="proses.php" method="get">
        <div>
          <label class="label-form-menu" for="email">Email</label><br>
          <input class="input-form" placeholder="Masukan email…" type="email" id="email" name="email" value=""><br>
        </div>
        <div>
          <label class="label-form-menu" for="menu">Menu</label><br>
          <input class="input-form" placeholder="Masukan menu…" type="text" id="menu" name="menu" value=""><br>
        </div>
        <div>
          <label class="label-form-menu" for="price">Price</label><br>
          <input class="input-form" placeholder="10000" type="number" id="price" name="price" value="price"><br>
        </div>
        <div>
          <input type="radio" id="pedas" name="kepedasan" value="pedas">
          <label for="pedas">Pedas</label>
          <input type="radio" id="tidak_pedas" name="kepedasan" value="Tidak kepedasan">
          <label for="pedas">Tidak Pedas</label>
        </div>
        <input class="btn-submit-form" type="submit" value="Submit">
      </form> 
    </section>

<!------------------------------- about----------------------------->
    <section class="about" id="about">
      <div class="about-img" id="geeks">
        <img src="gambar/foto1.jpeg" alt="" id="foto">
        <div class="btn">
          <button onclick="zoomIn()">Zoom-In</button>
  <button onclick="zoomOut()">Zoom-Out</button>
        </div>
      </div>
      <div class="about-text">
        <span>About Me</span>
        <p>hello, my name is Novitasari Malisan with NIM 2109106133 
          from the Informatics study program batch 2021, university mulawarman.
          I am the third child of five siblings, my hobby is watching movies 
          and listening to music, Irene Red Velvet's idol, 
          my dream to be a successful person can make my parents proud, 
          I hope I can meet Red Velvet and travel the world.</p>
      </div>

    </section>
  
<!----------------------- contact---------------------------- -->
    <section class="contact" id="contact">
      <div class="contact-box">
        <h3>BURGER KING</h3>
        <span>CONNECT WITH US</span>
        <div class="social">
      </div>
          <a href="facebook.com/login.php"><i class="fab fa-facebook"></i></a>
          <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
          <a href="https://www.instagram.com/?hl=en"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
      <div class="contact-box">
        <h3>Menu Link</h3>
        <li><a href="">Home</a></li>
        <li><a href="#ourmenu">Menu</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#contact">contact</a></li>
      </div>
      <div class="contact-box">
        <h3>Quick Links</h3>
        <li><a href="#Terms of user">Terms of user</a></li>
        <li><a href="#contact">contact</a></li>
        <li><a href="#privacy">privacy</a></li>
        <li><a href="#disclaimer">disclaimer</a></li>
      </div>
      <div class="contact-address">
        <h3>Contact</h3>
        <i class="fa-solid fa-map-pin"><span>44 krama jaya</span></i><br>
        <i class="fa-solid fa-phone"><span>4786865556455</span></i><br>
        <i class="fa-solid fa-envelope"><span>novi86gmail.com</span></i>
      </div>
    </section>
<!---------------------- footer--------------------------- -->
    <footer>
        <p>Novitasari Malisan</p>
        <div class="end"></div>
        <p >@copyright &copy; 2022 -novitasari. All right reservation</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>