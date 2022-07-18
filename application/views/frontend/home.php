<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Volem - Emergency Volunteer </title>
<!--
Newline Template
http://www.templatemo.com/tm-503-newline
-->
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="../volem/assets/frontend/css/bootstrap.min.css">
        <link rel="stylesheet" href="../volem/assets/frontend/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="../volem/assets/frontend/css/fontAwesome.css">
        <link rel="stylesheet" href="../volem/assets/frontend/css/templatemo-style.css">

        <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

        <script src="../volem/assets/frontend/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

        <link rel="icon" type="image/png" sizes="200x200" href="../volem/assets/logo/VOLEM2.png">

    </head>
    <body>

        <div class="overlay"></div>
        <section class="top-part">
          <img src="../volem/assets/frontend/img/voluntertop.jpg">
        </section>
        
        <section class="cd-hero">

          <div class="cd-slider-nav">
            <nav>
              <span class="cd-marker item-1"></span>
              <ul>
                <li class="selected"><a href="contoh.html"><div class="image-icon"><img src="../volem/assets/frontend/img/home-icon.png"></div><h6>home</h6></a></li>
                <li><a href="about"><div class="image-icon"><img src="../volem/assets/frontend/img/about-icon.png"></div><h6>About Us</h6></a></li>
                <li><a href="feature"><div class="image-icon"><img src="../volem/assets/frontend/img/featured-icon.png"></div><h6>VoJob</h6></a></li>
                <li><a href="projects"><div class="image-icon"><img src="../volem/assets/frontend/img/projects-icon.png"></div><h6>activity</h6></a></li>
                <li><a href="contact"><div class="image-icon"><img src="../volem/assets/frontend/img/contact-icon.png"></div><h6>Contact Us</h6></a></li>
              </ul>
            </nav> 
          </div> <!-- .cd-slider-nav -->

          <ul class="cd-hero-slider">

           <li class="selected">
              <div class="heading">
                <img style="height: 140px;" src="<?php echo base_url('../volem/assets/logo/VOLEM2.png');?>">
                <br><br>
                <span style="color: white">Selamat Datang di Emergency Volunteer</span>
              </div>
              <div class="cd-full-width first-slide">
                <div class="container">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="content first-content">
                        <h4>Member Volem</h4>
                        <p>Masuk sebagai member dan jadilah bagian dari Volem</p>
                        <div class="primary-button">
                          <button onclick="document.getElementById('id01').style.display='block'">Masuk Member</button>
                        </div>

                        <div id="id01" class="modal">
                        <span onclick="document.getElementById('id01').style.display='none'" 
                      class="close" title="Close Modal">&times;</span>

                        <!-- Modal Content -->
                     <form class="modal-content animate" action="<?php echo base_url('relawanlogin/aksi_login'); ?>" method="post">

                       <h1> Log in </h1>
                        <input name="usernameR" placeholder="Enter Username" type="text" required  />
                        <input name="passwordR" placeholder="Eneter Password" type="password" required />
                        <button class="btn" >Log in</button>
                        <h5>Belum Bergabung ? <a onclick="document.getElementById('id02').style.display='block'">Daftar</a> || <a onclick="document.getElementById('id01').style.display='none'">Kembali</a></h5> 
                    </form>
                       </div>

                      <!--sign up -->
                       <div id="id02" class="modal">
                        <span onclick="document.getElementById('id02').style.display='none'" 
                      class="close" title="Close Modal">&times;</span>

                         <!-- Modal Content -->
                         <form class="modal-content animate" action="<?php echo base_url();?>home/register" method="post">

                           <h1> Sign Up </h1>
                             <div class="col-md-6">
                                  <input placeholder="Enter Username" required type="text" name="usernameR">
                             </div>
                             <div class="col-md-6">
                                  <input placeholder="Enter Password" required type="text" name="passwordR">
                             </div>
                             <div class="col-md-12">
                                  <input placeholder="Enter Nama Lengkap" required type="text" name="nama_relawan">
                             </div>
                              <div class="col-md-6">
                                  <input placeholder="Enter Usia" required type="text" name="umur">
                              </div>
                              <div class="col-md-6">
                                  <input placeholder="Enter Jenis Kelamin" required type="text" name="jenis_kelamin">
                              </div>
                              <div class="col-md-12">
                                  <input placeholder="Enter Nomor Telepon" required type="text" name="no_telp">
                              </div>
                             <div class="col-md-12">
                                  <input placeholder="Enter Alamat Email" required type="email" name="email">
                              </div>
                              <div class="col-md-6">
                                  <input placeholder="Enter Berat Badan (KG)" required type="text" name="berat_badan">
                              </div>
                              <div class="col-md-6">
                                  <input placeholder="Enter Tinggi Badan (CM)" required type="text" name="tinggi_badan">
                              </div>
                              <div class="col-md-12">
                                  <button class="btn" name="submit">Daftar</button>

                              </div>
                              <div class="col-md-12">
                                 <h5><a onclick="document.getElementById('id02').style.display='none'">Kembali</a></h5> 
                              </div>

                          </form>
                        </div>
                      </div>
                    </div>
                        <div class="col-md-6">
                          <div class="content first-content">
                            <h4>Staf Volem</h4>
                            <p>Dikhususkan untuk staf yang telah terdaftar di Volem</p>
                            <div class="primary-button">
                              <button onclick="document.getElementById('id03').style.display='block'">Masuk Staf</button>
                            </div>

                            <div id="id03" class="modal">
                            <span onclick="document.getElementById('id03').style.display='none'" 
                          class="close" title="Close Modal">&times;</span>

                            <!-- Modal Content -->
                         <form class="modal-content animate" action="<?php echo base_url(); ?>staflogin/aksi_login" method="post">
                           <h1> Log in </h1>
                            <input name="usernameS" placeholder="Enter Username" type="text" required  >
                            <input name="passwordS" placeholder="Enter Password" type="password" required >
                            <button class="btn">Masuk</button>
                            <h5><a onclick="document.getElementById('id03').style.display='none'">Kembali</a></h5> 
                        </form>

                          </div>
                      </div>
                    </div>
                  </div>                  
                </div>
              </div>
            </li>

            <li>
              <div class="heading">
                <h1>About Us</h1>
                <span>Get More Info About Our Team</span> 
              </div>
              <div class="cd-half-width second-slide">   
                <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="content second-content">
                        <div class="row">
                          <div class="col-md-7 left-image">
                            <img src="../volem/assets/frontend/img/volunteer3.jpg">
                          </div>
                          <div class="col-md-5">
                            <div class="right-about-text">
                              <h4>Who we are?</h4>
                              <p>Sekumpulan Relawan yang disatukan oleh Volem (Emergency Volunterr) </p>
                              <div class="primary-button">
                                <a href="#">Discover More</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-7">
                            <div class="left-about-text">
                              <h4>What we do?</h4>
                              <p>Mengumpulkan dan Menyatukan relawan sesuai kemampuan masing-masing sehingga mereka akan lebih siap terjun ke lapangan bila terjadi bencana </p>
                              <div class="primary-button">
                                <a href="#">Discover More</a>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-5 right-image">
                            <img src="../volem/assets/frontend/img/volunteer4.jpg">
                          </div>

                          <!-- my team -->
                           <div class="row">
                          <div class="col-md-12">
                            <div class="left-about-text">
                              <h4>My team</h4>
                              <div class="col-md-3">
                              <img src="../volem/assets/frontend/img/item-08.jpg" alt="avatar" class="avatar">
                              <h5 style="color: black;">Hayyu Ilham W.</h5> 
                              </div>
                              <div class="col-md-3">
                              <img src="../volem/assets/frontend/img/item-07.jpg" alt="avatar" class="avatar">
                              <h5 style="color: black;">Arya Wira P.</h5>
                              </div>
                              <div class="col-md-3">
                              <img src="../volem/assets/frontend/img/item-06.jpg" alt="avatar" class="avatar">
                              <h5 style="color: black;">Galih Aji B.</h5>
                              </div>
                              <div class="col-md-3">
                              <img src="../volem/assets/frontend/img/item-05.jpg" alt="avatar" class="avatar">
                              <h5 style="color: black;">Dzikra Rafik P.</h5>
                              </div>
                            </div>
                          </div>



                        </div>
                      </div>
                    </div>
                  </div>                  
                </div>
              </div>
            </li>

            <li>
              <div class="heading">
                <h1>Volunteer JOB</h1>
                <span>Kami berkomitmen penuh untuk membantu para korban bencana melalui beberapa fitur yang kami sediakan untuk memberikan volunteer yang memiliki kemampuan sesuai skill masing -masing. </span> 
              </div>

             <div class="cd-half-width second-slide">   
                <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="content second-content">

                        <div class="row">
                          <div class="col-md-7 left-image">
                            <img src="../volem/assets/frontend/img/staff kesehatan1.jpg">
                          </div>
                          <div class="col-md-5">
                            <div class="right-about-text">
                              <h4>Relawan Kesehatan</h4>
                              <p>Mempunyai pekerjaan yang fokus pada pengobatan luka fisik pada korban bencana</p>
                              <div class="primary-button">
                                <a href="#">Discover More</a>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-7">
                            <div class="left-about-text">
                              <h4>Relawan Psikologi</h4>
                              <p>Memulihkan jiwa rohani para korban bencana akan trauma yang telah dihadapi</p>
                              <div class="primary-button">
                                <a href="#">Discover More</a>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-5 right-image">
                            <img src="../volem/assets/frontend/img/staff psikolog.jpg">
                          </div>
                        </div>
                      
                    


                    <div class="row">
                          <div class="col-md-7 left-image">
                            <img src="../volem/assets/frontend/img/staff gotong.jpg">
                          </div>
                          <div class="col-md-5">
                            <div class="right-about-text">
                              <h4>Relawan Gotong Gotong</h4>
                              <p>Terjun ke lokasi-lokasi yang terkena bencana dan membantu memulihkan kondisi lokasi seperti sedia kala</p>
                              <div class="primary-button">
                                <a href="#">Discover More</a>
                              </div>
                            </div>
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-md-7">
                            <div class="left-about-text">
                              <h4>Relawan Masak</h4>
                              <p>Bertugas membantu memberikan bantuan konsumsi bagi korban bencana</p>
                              <div class="primary-button">
                                <a href="#">Discover More</a>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-5 right-image">
                            <img src="../volem/assets/frontend/img/staff masak.jpg">
                          </div>
                        </div>
                      
                      </div>
                    </div>
                  </div>
                </div>                  
              </div>
            </li>

            <li>
              <div class="heading">
                <h1>Kegiatan</h1>
                <span>Kegiatan rutin Volem</span> 
              </div>
              <div class="cd-half-width fourth-slide">
                <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="content fourth-content">
                        <div class="row">
                          <div class="col-md-3 project-item">
                            
                            <div class="gambar1">
                            <a href="../volem/assets/frontend/img/volunter1.jpg" data-lightbox="image-1"><img src="../volem/assets/frontend/img/volunter1.jpg"></a>
                            </div>
                          </div>

                          <div class="col-md-3 project-item">
                          <div class="gambar1">
                            <a href="../volem/assets/frontend/img/volunter4.jpg" data-lightbox="image-1"><img src="../volem/assets/frontend/img/volunter4.jpg"></a>
                            </div>
                          </div>
                          
                          <div class="col-md-3 project-item">
                            <div class="gambar1">
                            <a href="../volem/assets/frontend/img/volunter3.jpg" data-lightbox="image-1"><img src="../volem/assets/frontend/img/volunter3.jpg"></a>
                          </div>
                          </div>

                          <div class="col-md-3 project-item">
                            <div class="gambar1">
                            <a href="../volem/assets/frontend/img/volunter2.jpg" data-lightbox="image-1"><img src="../volem/assets/frontend/img/volunter2.jpg"></a>
                            </div>
                          </div>

                          <div class="col-md-3 project-item">
                            <div class="gambar1">
                            <a href="../volem/assets/frontend/img/volunter5.jpg" data-lightbox="image-1"><img src="../volem/assets/frontend/img/volunter5.jpg"></a>
                            </div>
                          </div>

                          <div class="col-md-3 project-item">
                            <div class="gambar1">
                            <a href="../volem/assets/frontend/img/volunter6.jpg" data-lightbox="image-1"><img src="../volem/assets/frontend/img/volunter6.jpg"></a>
                          </div>
                          </div>

                          <div class="col-md-3 project-item">
                            <div class="gambar1">
                            <a href="../volem/assets/frontend/img/volunter7.jpg" data-lightbox="image-1"><img src="../volem/assets/frontend/img/volunter7.jpg"></a>
                            </div>
                          </div>

                          <div class="col-md-3 project-item">
                          <div class="gambar1">
                            <a href="../volem/assets/frontend/img/volunter8.jpg" data-lightbox="image-1"><img src="../volem/assets/frontend/img/volunter8.jpg"></a>
                          </div>
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>                  
                </div>
              </div>
            </li>

            <li>
              <div class="heading">
                <h1>Contact us</h1>
                <span>You'll be responded within 48 hrs</span> 
              </div>
              <div class="cd-half-width fivth-slide">
                <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="content fivth-content">
                        <div class="row">
                          <div class="col-md-4">
                            <div class="left-info">
                              <p>Hubungi Kami bila ingin mengetahui informasi lebih lanjut,Terimakasih!
                              <br><br>
                              <em>Sleman, DIY<br>Jln. Jakal</em>
                              </p>
                              <ul class="social-icons">
                                <i><a href="#"><i class="fa fa-facebook"></i></a></i>
                                <i><a href="#"><i class="fa fa-twitter"></i></a></i>
                                <i><a href="#"><i class="fa fa-linkedin"></i></a></i>
                                <i><a href="#"><i class="fa fa-rss"></i></a></i>
                                <i><a href="#"><i class="fa fa-behance"></i></a></i>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-8">
                            <div class="row">
                              <form id="contact" action="" method="post">
                                <div class="col-md-6">
                                  <fieldset>
                                    <input name="name" type="text" class="form-control" id="name" placeholder="Your Name" required="">
                                  </fieldset>
                                </div>
                                <div class="col-md-6">
                                  <fieldset>
                                    <input name="email" type="email" class="form-control" id="email" placeholder="Email" required="">
                                  </fieldset>
                                </div>
                                <div class="col-md-12">
                                  <fieldset>
                                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="Message" required=""></textarea>
                                  </fieldset>
                                </div>
                                <div class="col-md-12">
                                  <fieldset>
                                    <button type="submit" id="form-submit" class="btn">Send Message</button>
                                  </fieldset>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>                  
                </div>
              </div>
            </li>
          </ul> <!-- .cd-hero-slider -->
        </section> <!-- .cd-hero -->


        <footer>
          <p>Copyright &copy; 2018 Emergency Volunteer | Designed by <a href="">Volem</a></a></p>
        </footer>
    
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="../volem/assets/frontend/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
        <script src="../volem/assets/frontend/js/vendor/bootstrap.min.js"></script>
        <script src="../volem/assets/frontend/js/plugins.js"></script>
        <script src="../volem/assets/frontend/js/main.js"></script>

    </body>
</html>