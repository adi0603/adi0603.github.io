<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="icon" type="image/ico" href="img/logo.png">
    <title>Aditya Pandey</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" />
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="slick/slick.css"/>    
    <link rel="stylesheet" href="slick/slick-theme.css"/>    
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/templatemo-dream-pulse.css" />
    <link rel="stylesheet" href="css/code.css" />
    <script src="https://kit.fontawesome.com/ab99e84824.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
  </head>
  <body>
    <main class="container-fluid">
      <div class="row">        
          <nav id="tmSidebar" class="tm-bg-black-transparent tm-sidebar">
            <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
              <i class="fas fa-bars"></i>
            </button>
            <div class="tm-sidebar-sticky">
              <div class="tm-brand-box">
                <div class="tm-double-border-1">
                  <div class="tm-double-border-2">
                    <h1 class="tm-brand text-uppercase">Aditya Pandey</h1>
                  </div>
                </div>
              </div>

              <ul id="tmMainNav" class="nav flex-column text-uppercase text-right tm-main-nav">
                <li class="nav-item">
                  <a href="#intro" class="nav-link active">
                    <span class="d-inline-block mr-3">Intro</span>
                    <span class="d-inline-block tm-white-rect"></span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#about" class="nav-link">
                    <span class="d-inline-block mr-3">About</span>
                    <span class="d-inline-block tm-white-rect"></span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#work" class="nav-link">
                    <span class="d-inline-block mr-3">My Work</span>
                    <span class="d-inline-block tm-white-rect"></span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#talk" class="nav-link">
                    <span class="d-inline-block mr-3">Let's Talk</span>
                    <span class="d-inline-block tm-white-rect"></span>
                  </a>
                </li>
              </ul>
              <ul class="nav flex-row tm-social-links">
                <li class="nav-item">
                  <a href="https://www.instagram.com/_simplethoughts._/?igshid=k93qpcqslcgk" class="nav-link tm-social-link" target="_blank">
                    <i class="fab fa-instagram"></i>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="https://github.com/adi0603" class="nav-link tm-social-link" target="_blank">
                    <i class="fab fa-github"></i>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="https://www.linkedin.com/in/aditya-pandey-1375a818a/" class="nav-link tm-social-link" target="_blank">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="https://www.hackerrank.com/adi0603" class="nav-link tm-social-link" target="_blank">
                    <i class="fab fa-hackerrank"></i>
                  </a>
                </li>
              </ul>
              <footer class="text-center text-white small">
                <p class="mb--0 mb-2">&copy; Copyright 2019 Aditya Pandey</p>
                <p class="mb-0">Design:
                  <a rel="nofollow" href="index.php" class="tm-footer-link">@ditya</a>
                </p>
              </footer>
            </div>
          </nav>
          
        <script type="text/javascript">
            var quotes=new Array("When you feel like quitting, think about why you started.","Trust the magic of new Begining.","Your mind believes everything you tell it.","Life is not about finding yourself it's about creating yourself.","Everyday is another chance to change your life.");
                          function random_quote()
                          {
                            var min=1; 
                            var max=5; 
                            var random = parseInt(Math.random() * (+max - +min) + +min);
                            return random; 
                          }
          </script>
        
          <main role="main" class="ml-sm-auto col-12">
            <div
              class="parallax-window"
              data-parallax="scroll"
              data-image-src="img/dream-pulse-header.jpg">
              <div class="tm-section-wrap">
                <section id="intro" class="tm-section">
                    <div class="tm-bg-white-transparent tm-intro">
                        <h2 class="tm-section-title mb-5 text-uppercase tm-color-primary">Introduction</h2>
                        <p class="tm-color-gray">
                          <h3 style="color:black;" align="justify">
                      <script type="text/javascript">
                              document.write(quotes[random_quote()-1]);
                          </script>
                      </h3>
                        </p>
                        <p class="mb-0 tm-color-gray" align="justify">
                          Welcome to my portfolio, I love to learn about new technologies and I always try to implement 
                          my knowledge into reality.
                        </p>
                        <br>
                        <script>
                          function quote() 
                          {
                            swal({
                title: "Today's Quote",
                text: quotes[random_quote()-1],
                imageUrl: 'img/magic2.png'
                });
                          }
              </script>
                        <div class="code">
                              <center><input type="submit" name="click" onClick="quote();" value="Today's Quote"></center>
                        </div>
                    </div>              
                </section>
            </div>            
          </div>

          <div class="tm-section-wrap bg-white">
            <section id="about" class="row tm-section">
              <div class="col-xl-6">
                <div class="tm-section-half">    
                    <div><i class="fas fa-6x fa-child mb-5 tm-section-icon"></i></div>                       
                    <h2 class="tm-section-title tm-color-primary mb-5">About Me</h2>
                    <p class="mb-5" align="justify">
                      I am a web developer and have a strong in design and integration with intuitive problem solving skills. 
                      Passionate about implementing and launching new projects. 
                      Flexible and willing to work in any environment when needed. 
                      I have knowledge of Programming languages like Java, Python, C, C++.
                    </p>
                    <p align="justify">
                      I love to learn new coding languages and to work on them. 
                      In my free time I like to do Photography and write quotes. 
                      I believe in hardwork as with hardwork and dedication you can easily achieve any thing in life 
                      as it will lead you to completion of your work.
                    </p>
                </div>
              </div>
              <div class="col-xl-6">
                <div class="tm-section-half">
                    <div><i class="far fa-6x fa-star mb-5 tm-section-icon"></i></div>
                    <h2 class="tm-section-title tm-color-primary mb-5">Skills</h2>
                    <p class="mb-5">

                    <i class="fab fa-java"></i>&nbsp; Java<br>
                    <i class="fab fa-cuttlefish"></i>&nbsp; C Language<br>
                    <i class="fab fa-cuttlefish"></i>&nbsp; C++ Language<br>
                    <i class="fas fa-database"></i>&nbsp; SQL<br>
                    <i class="fas fa-code"></i> HTML<br>
                    <i class="fas fa-photo-video"></i>&nbsp; Photography<br>
                    <pre>
                      <br>
                      <br>
                      <br>
                      <br>

                    </pre>
                    </p>
                </div>
              </div>
            </section>
          </div>
            
          <div class="tm-section-wrap bg-white">
            <section id="work" class="row tm-section">
              <div class="col-12">
                <div class="w-100 tm-double-border-1 tm-border-gray">
                    <div class="tm-double-border-2 tm-border-gray tm-box-pad">
                      <div class="tm-gallery-wrap">
                          <h2 class="tm-color-primary tm-section-title mb-4 ml-2">My Work</h2>
                          <h5>You can find codes of these on my Github account.</h5>
                          <div class="tm-gallery">
                            <div class="tm-gallery-item">                        
                              <figure class="effect-bubba">
                                <img src="img/gallery/01.png" alt="My Work Image" class="img-fluid">
                                <figcaption>
                                  <h2><span>Calculator</span></h2>
                                  <p>This is developed in Java.</p>
                                  <a href="img/gallery/large/01.png">View more</a>
                                </figcaption>
                              </figure>
                              <div class="code">
                              <center><input type="submit" name="click" target="_blank" onClick="location.href='https://github.com/adi0603/Calculator'" value="Code"></center>
                              </div>
                            </div>
                            <div class="tm-gallery-item">
                              <figure class="effect-bubba">
                                <img src="img/gallery/2.jpg" alt="My Work Image" class="img-fluid">
                                <figcaption>
                                  <h2> <span>Calendar</span></h2>
                                  <p>This is developed in Java.</p>
                                  <a href="img/gallery/large/02.png">View more</a>
                                </figcaption>
                              </figure>
                              <div class="code">
                              <center><input type="submit" name="click" onClick="location.href='https://github.com/adi0603/Calender'" value="Code" target="_blank"></center>
                              </div>
                            </div>
                            <div class="tm-gallery-item">
                              <figure class="effect-bubba">
                                <img src="img/gallery/3.png" alt="My Work Image" class="img-fluid">
                                <figcaption>
                                  <h2><span>Calendar</span></h2>
                                  <p>This is developed using HTML, CSS, PHP & JS.</p>
                                  <a href="img/gallery/large/3.png">View more</a>
                                </figcaption>
                              </figure>
                              <div class="code">
                              <center><input type="submit" name="click" onClick="location.href='https://github.com/adi0603/Calendar'" value="Code" target="_blank"></center>
                              </div>
                            </div>
                            <div class="tm-gallery-item">
                              <figure class="effect-bubba">
                                <img src="img/gallery/4.png" alt="My Work Image" class="img-fluid">
                                <figcaption>
                                  <h2><span>Valency</span></h2>
                                  <p>This is developed in Java.</p>
                                  <a href="img/gallery/large/4.png">View more</a>
                                </figcaption>
                              </figure>
                              <div class="code">
                              <center><input type="submit" name="click" onClick="location.href='https://github.com/adi0603/Valency'" value="Code" target="_blank"></center>
                              </div>
                            </div>
                          </div>
                      </div>                        
                    </div>                  
                  </div>     
              </div>         
            </section>
          </div>            
          <div class="tm-section-wrap bg-white">
            <section id="talk" class="row tm-section">
                <div class="col-xl-6 mb-5">
                  <div class="tm-double-border-1 tm-border-gray">
                    <div class="tm-double-border-2 tm-border-gray tm-box-pad">
                        <h2 class="tm-color-primary tm-section-title mb-4">Contact</h2>
                        <p class="mb-4" align="justify">
                          You can easily contact me by sending me message or by mailing me on the given email address.
                        </p>
                        <p class="mb-3">
                          <i class="fas fa-at"></i>&nbsp; adityapandey0421@gmail.com<br>
                          <i class="fas fa-mobile-alt"></i>&nbsp; +91 8052537672<br>
                          <i class="fas fa-home"></i>&nbsp; H - Block Hostel, <br>
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; GLA University, <br>
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mathura, 281406
                        </p>
                    </div>                    
                  </div>                  
                </div>
                <div class="col-xl-6 mb-5">
                  <div class="tm-contact-form-wrap">
                    <form action="https://formspree.io/adityapandey0421@gmail.com" method="POST" class="tm-contact-form">
                        <div class="form-group">
                          <input type="text" id="contact_name" name="name" class="form-control rounded-0 border-top-0 border-right-0 border-left-0" placeholder="Your Name" required="" />
                        </div>
                        <div class="form-group">
                          <input type="email" id="contact_email" name="email" class="form-control rounded-0 border-top-0 border-right-0 border-left-0" placeholder="Your Email" required="" />
                        </div>
                
                        <div class="form-group">
                          <textarea rows="4" id="contact_message" name="message" class="form-control rounded-0 border-top-0 border-right-0 border-left-0" placeholder="Message..." required=""></textarea>
                        </div>
                
                        <div class="form-group mb-0">
                          <button type="submit" class="btn rounded-0 d-block ml-auto tm-btn-primary" target="_blank">
                            SEND
                          </button>
                        </div>
                      </form>
                  </div>                    
                </div>
              </section>
          </div>
        </main>        
      </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.singlePageNav.min.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="slick/slick.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/templatemo-scripts.js"></script>
  </body>
</html>
