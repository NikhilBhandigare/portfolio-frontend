<?php
  include("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="/css/skins/color-1.css" />
    <link rel="stylesheet" href="/css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="/css/skins/color-1.css" class="alternate-style" title="color-1" disabled>
    <link rel="stylesheet" href="/css/skins/color-2.css" class="alternate-style" title="color-2" disabled>
    <link rel="stylesheet" href="/css/skins/color-3.css" class="alternate-style" title="color-3" disabled>
    <link rel="stylesheet" href="/css/skins/color-4.css" class="alternate-style" title="color-4" disabled>
    <link rel="stylesheet" href="/css/skins/color-5.css" class="alternate-style" title="color-4" disabled>
    <link rel="stylesheet" href="/css/style-switcher.css">
  </head>
  <body >
    <div class="main-container">
      <div class="aside">
        <div class="logo">
          <a href="#"><span>n</span>ikhil's</a>
        </div>
        <div class="nav-toggler">
          <span></span>
        </div>
        <ul class="nav">
          <li>
            <a href="#home" class="active"><i class="fa fa-home"></i>Home</a>
          </li>
          <li>
            <a href="#about"><i class="fa fa-user"></i>About</a>
          </li>
          <li>
            <a href="#services"><i class="fa fa-list"></i>Services</a>
          </li>
          <li>
            <a href="#portfolio"><i class="fa fa-briefcase"></i>Portfolio</a>
          </li>
          <li>
            <a href="#contact"><i class="fa fa-comments"></i>Contact</a>
          </li>
        </ul>
      </div>
      <div class="main-content">
        <section class="home section" id="home">
          <div class="container">
            <div class="row">
              <div class="home-info padd-15">
                <h3 class="hello">
                  Hello, my neme is <span class="name">Nikhil</span>
                </h3>
                <h3 class="my-profession">
                  I' m a <span class="typing">Web designer</span>
                </h3>
                <p>
                  I'm web designer with extensive experience for over 10 years.
                  My expertise is to reate and website design, graphic design,
                  and many more...
                </p>
                <a href="#contact" class="btn hire-me">Hire me</a>
              </div>
              <div class="home-img padd-15">
                <img src="./nikhil-removebg-preview1.png" alt="" />
              </div>
            </div>
          </div>
        </section>
        <section class="about section" id="about">
          <div class="container">
            <div class="row">
              <div class="section-title padd-15">
                <h2>About Me</h2>
              </div>
            </div>
            <div class="row">
              <div class="about-content padd-15">
                <div class="row">
                  <div class="about-text padd-15">
                    <h3>
                      I,m Nikhil Bhandigare and <span>Web Developer</span>
                    </h3>
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Eligendi, alias molestias ipsa necessitatibus accusamus
                      quis exercitationem aut voluptatibus, delectus quisquam,
                      unde officiis. Reprehenderit rerum, repellat ea quas
                      facere deserunt veritatis numquam aut eos reiciendis quos
                      odio dolores alias sit excepturi.
                    </p>
                  </div>
                </div>
                <div class="row">
                  <div class="personal-info padd-15">
                    <div class="row">
                      <div class="info-item padd-15">
                        <p>Birthday : <span>3 Dec 2001</span></p>
                      </div>
                      <div class="info-item padd-15">
                        <p>Age : <span>22</span></p>
                      </div>
                      <div class="info-item padd-15">
                        <p>Website : <span>www.domain.com</span></p>
                      </div>
                      <div class="info-item padd-15">
                        <p>Email : <span>nbhandigare1@gmail.com</span></p>
                      </div>
                      <div class="info-item padd-15">
                        <p>Degree : <span>CSE</span></p>
                      </div>
                      <div class="info-item padd-15">
                        <p>Phone : <span>+91 7620593008</span></p>
                      </div>
                      <div class="info-item padd-15">
                        <p>City : <span>Kolhapur</span></p>
                      </div>
                      <div class="info-item padd-15">
                        <p>Freelance : <span>Available</span></p>
                      </div>
                      <div class="row">
                        <div class="buttons padd-15">
                          <a href="./nikhilresume.pdf" class="btn" download>Download CV</a>
                          <a href="#contact" class="btn hire-me">Hire Me</a>
                        </div>
                      </div>
                      
                    </div>
                  </div>

                  <div class="skills padd-15">
                    <div class="row">
                      <div class="skill-item padd-15">
                        <h5>JS</h5>
                        <div class="progress">
                          <div class="progress-in" style="width: 86%"></div>
                          <div class="skill-percent">86%</div>
                        </div>
                      </div>
                      <div class="skill-item padd-15">
                        <h5>PHP</h5>
                        <div class="progress">
                          <div class="progress-in" style="width: 66%"></div>
                          <div class="skill-percent">66%</div>
                        </div>
                      </div>
                      <div class="skill-item padd-15">
                        <h5>HTML</h5>
                        <div class="progress">
                          <div class="progress-in" style="width: 96%"></div>
                          <div class="skill-percent">96%</div>
                        </div>
                        <div class="skill-item">
                          <h5>Bootstrap</h5>
                          <div class="progress">
                            <div class="progress-in" style="width: 76%"></div>
                            <div class="skill-percent">76%</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="education padd-15">
                    <h3 class="title">Education</h3>
                    <div class="row">
                      <div class="timeline-box padd-15">
                        <div class="timeline shadow-dark">
                          <div class="timeline-item">
                            <div class="circle-dot"></div>
                            <h3 class="timeline-date">
                              <i class="fa fa-calendar"></i>2022-2023
                            </h3>
                            <h4 class="timeline-title">
                              Computer Science Stuent
                            </h4>
                            <p class="timeline-text">
                              Lorem ipsum dolor sit amet consectetur adipisicing
                              elit. Vitae, placeat dolores mollitia reiciendis,
                              hic nemo dolorem, vel consectetur natus distinctio
                              deserunt facilis necessitatibus nisi! Aperiam?
                            </p>
                          </div>
                          <div class="timeline-item">
                            <div class="circle-dot"></div>
                            <h3 class="timeline-date">
                              <i class="fa fa-calendar"></i>2022-2023
                            </h3>
                            <h4 class="timeline-title">
                              Computer Science Stuent
                            </h4>
                            <p class="timeline-text">
                              Lorem ipsum dolor sit amet consectetur adipisicing
                              elit. Vitae, placeat dolores mollitia reiciendis,
                              hic nemo dolorem, vel consectetur natus distinctio
                              deserunt facilis necessitatibus nisi! Aperiam?
                            </p>
                          </div>
                          <div class="timeline-item">
                            <div class="circle-dot"></div>
                            <h3 class="timeline-date">
                              <i class="fa fa-calendar"></i>2022-2023
                            </h3>
                            <h4 class="timeline-title">
                              Computer Science Stuent
                            </h4>
                            <p class="timeline-text">
                              Lorem ipsum dolor sit amet consectetur adipisicing
                              elit. Vitae, placeat dolores mollitia reiciendis,
                              hic nemo dolorem, vel consectetur natus distinctio
                              deserunt facilis necessitatibus nisi! Aperiam?
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="experience padd-15">
                    <h3 class="title">Experience</h3>
                    <div class="row">
                      <div class="timeline-box padd-15">
                        <div class="timeline shadow-dark">
                          <div class="timeline-item">
                            <div class="circle-dot"></div>
                            <h3 class="timeline-date">
                              <i class="fa fa-calendar"></i>2022-2023
                            </h3>
                            <h4 class="timeline-title">
                              Computer Science Stuent
                            </h4>
                            <p class="timeline-text">
                              Lorem ipsum dolor sit amet consectetur adipisicing
                              elit. Vitae, placeat dolores mollitia reiciendis,
                              hic nemo dolorem, vel consectetur natus distinctio
                              deserunt facilis necessitatibus nisi! Aperiam?
                            </p>
                          </div>
                          <div class="timeline-item">
                            <div class="circle-dot"></div>
                            <h3 class="timeline-date">
                              <i class="fa fa-calendar"></i>2022-2023
                            </h3>
                            <h4 class="timeline-title">
                              Computer Science Stuent
                            </h4>
                            <p class="timeline-text">
                              Lorem ipsum dolor sit amet consectetur adipisicing
                              elit. Vitae, placeat dolores mollitia reiciendis,
                              hic nemo dolorem, vel consectetur natus distinctio
                              deserunt facilis necessitatibus nisi! Aperiam?
                            </p>
                          </div>
                          <div class="timeline-item">
                            <div class="circle-dot"></div>
                            <h3 class="timeline-date">
                              <i class="fa fa-calendar"></i>2022-2023
                            </h3>
                            <h4 class="timeline-title">
                              Computer Science Stuent
                            </h4>
                            <p class="timeline-text">
                              Lorem ipsum dolor sit amet consectetur adipisicing
                              elit. Vitae, placeat dolores mollitia reiciendis,
                              hic nemo dolorem, vel consectetur natus distinctio
                              deserunt facilis necessitatibus nisi! Aperiam?
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="service section" id="services">
          <div class="cntainer">
            <div class="row">
              <div class="section-title padd-15">
                <h2>Services</h2>
              </div>
            </div>
            <div class="row">
              <div class="service-item">
              <div class="service-item-inner">
                <div class="icon">
                  <i class="fa fa-mobile-alt"></i>
                </div>
                <h4>Web Design</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore doloremque quam cupiditate!</p>
              </div>
            </div>
              <!-- /////////////// -->
              <div class="service-item">
                <div class="service-item-inner">
                  <div class="icon">
                    <i class="fa fa-mobile-alt"></i>
                  </div>
                  <h4>Web Design</h4>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore doloremque quam cupiditate!</p>
                </div>
              </div>
              <!-- /////////////// -->
              <div class="service-item">
                <div class="service-item-inner">
                  <div class="icon">
                    <i class="fa fa-mobile-alt"></i>
                  </div>
                  <h4>Web Design</h4>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore doloremque quam cupiditate!</p>
                </div>
              </div>
              <!-- /////////////// -->
              <div class="service-item">
                <div class="service-item-inner">
                  <div class="icon">
                    <i class="fa fa-mobile-alt"></i>
                  </div>
                  <h4>Web Design</h4>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore doloremque quam cupiditate!</p>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="portfolio section" id="portfolio">
          <div class="container">
            <div class="row">
              <div class="section-title padd-15">
                <h2>Portfolio</h2>
              </div>
            </div>
            <div class="row">
              <div class="section-heading padd-15">
                <h2>My Last Projects</h2>
              </div>
            </div>
            <div class="row">
              <div class="portfolio-item padd-15">
                <div class="portfolio-item-inner shadow-dark">
                  <div class="portfolio-img">
                    <img src="/images/portfolio/portfolio-1.png" alt="" />
                  </div>
                </div>
              </div>
              <div class="portfolio-item padd-15">
                <div class="portfolio-item-inner shadow-dark">
                  <div class="portfolio-img">
                    <img src="/images/portfolio/portfolio-1.png" alt="" />
                  </div>
                </div>
              </div>
              <div class="portfolio-item padd-15">
                <div class="portfolio-item-inner shadow-dark">
                  <div class="portfolio-img">
                    <img src="/images/portfolio/portfolio-1.png" alt="" />
                  </div>
                </div>
              </div>
              <div class="portfolio-item padd-15">
                <div class="portfolio-item-inner shadow-dark">
                  <div class="portfolio-img">
                    <img src="/images/portfolio/portfolio-1.png" alt="" />
                  </div>
                </div>
              </div>
              <div class="portfolio-item padd-15">
                <div class="portfolio-item-inner shadow-dark">
                  <div class="portfolio-img">
                    <img src="/images/portfolio/portfolio-1.png" alt="" />
                  </div>
                </div>
              </div>
              <div class="portfolio-item padd-15">
                <div class="portfolio-item-inner shadow-dark">
                  <div class="portfolio-img">
                    <img src="/images/portfolio/portfolio-1.png" alt="" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="contact section" id="contact">
          <div class="container">
            <div class="row">
              <div class="section-title padd-15">
                <h2>Contact Me</h2>
              </div>
            </div>
            <h3 class="contact-title padd-15">Have Yoo Any Questions ?</h3>
            <h4 class="contact-sub-title padd-15">I'M AT YOUR SERVICES</h4>
            <div class="row">
              <div class="contact-info-item padd-15">
                <div class="icon"><i class="fa fa-phone"></i></div>
                <h4>Call Us On</h4>
                <p>+91 7620593008</p>
              </div>
              <div class="contact-info-item padd-15">
                <div class="icon"><i class="fa fa-map-marker-alt"></i></div>
                <h4>Office</h4>
                <p>Kolhapur</p>
              </div>
              <div class="contact-info-item">
                <div class="icon"><i class="fa fa-envelope"></i></div>
                <h4>Email</h4>
                <p>nbhandigare1@gmail.com</p>
              </div>
              <div class="contact-info-item padd-15">
                <div class="icon"><i class="fa fa-globe-europe"></i></div>
                <h4>Website</h4>
                <p>www.domain.com</p>
              </div>
            </div>
            <h3 class="contact-title padd-15">SEND ME AN EMAIL ?</h3>
            <h4 class="contact-sub-title padd-15">
              I'M VERY RESPOSIVE TO MESSAGE
            </h4>
            <div class="row">
              <div class="contact-form padd-15">
                <div class="row">
                  <div class="form-item col-6 padd-15">
                    <div class="form-group">
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Name"
                        required
                      />
                    </div>
                  </div>
                  <div class="form-item col-6 padd-15">
                    <div class="form-group">
                      <input
                        type="email"
                        class="form-control"
                        placeholder="Email"
                        required
                      />
                    </div>
                  </div>
                  <div class="form-item col-12 padd-15">
                    <div class="form-group">
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Subject"
                        required
                      />
                    </div>
                  </div>
                  <div class="form-item col-12 padd-15">
                    <div class="form-group">
                      <textarea
                        name=""
                        id=""
                        class="form-control"
                        placeholder="Message"
                        required
                      ></textarea>
                    </div>
                  </div>
                  <div class="form-item col-12 padd-15">
                    <div class="form-group">
                      <button type="submit" class="btn">Send Message</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
<div class="style-switcher">
  <div class="style-switcher-toggler s-icon">
    <i class="fas fa-cog fa-spin"></i>
  </div>
  <div class="day-night s-icon">
    <i class="fas"></i>
  </div>
  <h4>Theme Colors</h4>
  <div class="colors">
    <span class="color-1" onclick="setActiveStyle('color-1')"></span>
    <span class="color-2" onclick="setActiveStyle('color-2')"></span>
    <span class="color-3" onclick="setActiveStyle('color-3')"></span>
    <span class="color-4" onclick="setActiveStyle('color-4')"></span>
    <span class="color-5" onclick="setActiveStyle('color-5')"></span>
  </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js" referrerpolicy="no-referrer"></script>
    <script src="./js/script.js"></script>
    <script src="./js/style-switcher.js"></script>
  </body>
</html>
