<!doctype html>
<html lang="en">
<head>
        <title>MAH - Personal CV/Resume</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Maha Personal cv/resume template for professional and personal website." />
        <meta name="keywords" content="creative, cv, designer,  online cv, online resume, powerful portfolio, professional, professional resume, responsive, resume, vcard " />
        <meta name="developer" content="Md. Siful Islam">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- FAV AND ICONS   -->
        <link rel="stylesheet" href="{{ URL::asset('images/favicon.ico') }}">
        <link rel="stylesheet" href="{{ URL::asset('images/apple-icon.png') }}">
        <link rel="stylesheet" href="{{ URL::asset('images/apple-icon-72x72.png') }}">
        <link rel="stylesheet" href="{{ URL::asset('images/apple-icon-114x114.png') }}">

        <!-- Google Font-->
        <link rel="stylesheet" href="{{ URL::asset('plugins/css/RobotoFont.css') }}">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
        <link rel="stylesheet" href="{{ URL::asset('icons/font-awesome-4.7.0/css/font-awesome.min.css') }}">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ URL::asset('plugins/css/bootstrap.min.css') }}">
        <!-- Animate CSS-->
        <link rel="stylesheet" href="{{ URL::asset('plugins/css/animate.css') }}">
        <!-- Owl Carousel CSS-->
        <link rel="stylesheet" href="{{ URL::asset('plugins/css/owl.css') }}">
        <!-- Fancybox-->
        <link rel="stylesheet" href="{{ URL::asset('plugins/css/jquery.fancybox.min.css') }}">
        <!-- Custom CSS-->
        <link rel="stylesheet" href="{{ URL::asset('css/styles.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/responsive.css') }}">
        <!-- Footer Icons -->
        <link rel="stylesheet" href="{{ URL::asset('icons/font-awesome-4.7.0/fonts-icon/icomoon/style.css') }}">
        
        <!-- Main CSS Color -->
        <link rel="alternate stylesheet" href="{{ URL::asset('css/colors/blue.css') }}" title="blue">

    </head>
    <body class="white-vertion black-bg">
        <!-- Start Loader -->
        <div class="section-loader">
            <div class="loader">
                <div></div>
                <div></div> 
            </div>
        </div>
        <!-- End Loader -->
        
        <!--
        ===================
           NAVIGATION
        ===================
        -->
        <header class="black-bg mh-header mh-fixed-nav nav-scroll mh-xs-mobile-nav wow fadeInUp" id="mh-header">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <nav class="navbar navbar-expand-lg mh-nav nav-btn">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon icon"></span>
                        </button>
                    
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#mh-home">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#mh-about">About</a>
                                </li>
                                <li class="nav-item">
                                   <a class="nav-link" href="#mh-skills">Skills</a>
                                </li>                            
                                <li class="nav-item">
                                   <a class="nav-link" href="#mh-experience">Experience</a>
                                </li>                                
                                <li class="nav-item">
                                    <a class="nav-link" href="#mh-portfolio">Portfolio</a>
                                </li>                               
                                <li class="nav-item">
                                    <a class="nav-link" href="#mh-pricing">Pricing</a>
                                </li>
                                <li class="nav-item">
                                   <a class="nav-link" href="#mh-contact">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        
        <!--
        ===================
            HOME 
        ===================
        -->
        <section class="mh-home" id="mh-home">
            <div class="home-ovimg">
                <div class="container">
                    <div class="row xs-column-reverse section-separator vertical-middle-content home-padding">
                        <div class="col-sm-6">
                            <div class="mh-header-info">
                                <div class="mh-promo wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.1s">
                                    <a href="{{ url('/CV') }}"><span>Hello I'm</span></a>
                                </div>
                                
                                <h3 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">Muhammad Abdul Hannan</h3>
                                <!-- <h4 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">Web Developer</h4> -->
                                <div class="wrapper">
                                    <div class="static-txt">I'm a</div>
                                    <ul class="dynamic-txts">
                                        <li><span>YouTuber</span></li>
                                        <li><span>Freelancer</span></li>
                                        <li><span>Web Developer</span></li>
                                        <li><span>Python Expert</span></li>
                                    </ul>
                                </div>
                                <ul>
                                    <li class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s"><i class="fa fa-envelope"></i><a href="mailto:">hannanryk2@gmail.com</a></li>
                                    <li class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s"><i class="fa fa-phone"></i><a href="callto:">0315-1234567</a></li>
                                    <li class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s"><i class="fa fa-map-marker"></i><address>17, SSC, Rahim Yar Khan, Pakistan</address></li>
                                </ul>
                                
                                <ul class="social-icon wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.7s">
                                    <li><a href="https://www.facebook.com/muhammad.abdulhannan.7927"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="https://github.com/Muhammad-Abdul-Hannan"><i class="fa fa-github"></i></a></li>
                                    <li><a href="https://www.youtube.com/channel/UC0fvDXIqJjYLJvcUA8vjPkQ"><i class="fa fa-youtube"></i></a></li>
                                    <li><a href="https://www.linkedin.com/in/muhammad-abdul-hannan-40bb5b1b3/"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="hero-img wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s">
                                <div class="img-border">
                                    <img src="{{ URL::asset('images/hero.jpg') }}" alt=""  class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>   
        
        <!--
        ==================
            ABOUT
        ================= 
        -->
        <section class="mh-about" id="mh-about">
            <div class="container">
                <div class="row section-separator">
                    <div class="col-sm-12 col-md-6">
                        <div class="mh-about-img shadow-2 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">
                            <img src="{{ URL::asset('images/ab-img.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="mh-about-inner">
                            <h2 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.1s">About Me</h2>
                            <p class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">Hello, I’m a Hannan, web-developer and data specialist. 
                            I have rich experience in web site design & building 
                            and customization. I have expertise in data mining with python Web Crawler. Also I am good at</p>
                            <div class="mh-about-tag wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                                <ul>
                                    <li><span><i class="fa-brands fa-html5"></i> html</span></li>
                                    <li><span><i class="fa-brands fa-css3"></i> css</span></li>
                                    <li><span><i class="fa-brands fa-js"></i> Javascript</span></li>
                                    <li><span><i class="fa-brands fa-bootstrap"></i> bootstrap</span></li>
                                    <li><span><i class="fa-brands fa-python"></i> python</span></li>
                                </ul>
                            </div>
                            <a href="#" class="btn btn-fill wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">Downlaod CV <i class="fa fa-download"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!--
        ===================
           SERVICE
        ===================
        -->
        <section class="mh-service">
            <div class="container">
                <div class="row section-separator">
                    <div class="col-sm-12 text-center section-title wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                        <h2>What I do</h2>
                    </div>
                    <div class="col-sm-12 col-md-8 col-lg-4">
                        <div class="mh-service-item shadow-1 dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                            <a href=""><i class="fa fa-bullseye purple-color"></i></a>
                            <h3>UI Design</h3>
                            <p>
                                Being one of the many millions that depend on the Internet throughout day-to-day operations, I understand how important website design and usability is. UI Design make or break customer link with site interface.
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-8 col-lg-4">
                        <div class="mh-service-item shadow-1 dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s">
                            <a href=""><i class="fa fa-code iron-color"></i></a>
                            <h3>Web Development</h3>
                            <p>
                                Are you trying to get your services or products onto the web. The work is typically very project focused and involves collaborating with a team that helps to coordinate your needs into the end product. I am here to cope with this...
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-8 col-lg-4">
                        <div class="mh-service-item shadow-1 dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.7s">
                            <a href=""><i class="fa fa-object-ungroup sky-color"></i></a>
                            <h3>Python crawler</h3>
                            <p>
                                A web crawler is nothing but a few lines of code. This program or code works as an Internet bot. The task is to index the contents of a website on the internet. Now we know
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>       
        
        <!--
        ===================
           SKILLS
        ===================
        -->
        <section class="mh-skills" id="mh-skills">
            <div class="container">
                <div class="row section-separator">
                    <div class="section-title text-center col-sm-12">
                        <h2>Skills</h2>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="mh-skills-inner">
                            <div class="mh-professional-skill wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                                <h3>Technical Skills</h3>
                                <div class="each-skills">
                                    <div class="candidatos">
                                        <div class="parcial">
                                            <div class="info">
                                                <div class="nome">Html-5</div>
                                                <div class="percentagem-num">93%</div>
                                            </div>
                                            <div class="progressBar">
                                                <div class="percentagem" style="width: 93%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="candidatos">
                                        <div class="parcial">
                                            <div class="info">
                                                <div class="nome">CSS</div>
                                                <div class="percentagem-num">82%</div>
                                            </div>
                                            <div class="progressBar">
                                                <div class="percentagem" style="width: 82%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="candidatos">
                                        <div class="parcial">
                                            <div class="info">
                                                <div class="nome">JavaScript</div>
                                                <div class="percentagem-num">80%</div>
                                            </div>
                                            <div class="progressBar">
                                                <div class="percentagem" style="width: 80%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="candidatos">
                                        <div class="parcial">
                                            <div class="info">
                                                <div class="nome">Bootstrap</div>
                                                <div class="percentagem-num">77%</div>
                                            </div>
                                            <div class="progressBar">
                                                <div class="percentagem" style="width: 77%;"></div>
                                            </div>
                                        </div>
                                    </div>                                    
                                    <div class="candidatos">
                                        <div class="parcial">
                                            <div class="info">
                                                <div class="nome">Python</div>
                                                <div class="percentagem-num">89%</div>
                                            </div>
                                            <div class="progressBar">
                                                <div class="percentagem" style="width: 89%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="mh-professional-skills wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s">
                            <h3>Professional Skills</h3>
                            <ul class="mh-professional-progress" >
                                <li>
                                    <div class="mh-progress mh-progress-circle" data-progress="95"></div>
                                    <div class="pr-skill-name">Communication</div>
                                </li>
                                <li>
                                    <div class="mh-progress mh-progress-circle" data-progress="89"></div> 
                                    <div class="pr-skill-name">Team Work</div>
                                </li>
                                <li>
                                    <div class="mh-progress mh-progress-circle" data-progress="86"></div>
                                    <div class="pr-skill-name">Project Management</div>
                                </li> 
                                <li>
                                    <div class="mh-progress mh-progress-circle" data-progress="78"></div>
                                    <div class="pr-skill-name">Creativity</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!--
        ===================
           EXPERIENCES
        ===================
        -->
        <section class="mh-experince" id="mh-experience">
            <div class="bolor-overlay">
                <div class="container">
                    <h3 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">Education</h3>
                    <div class="row section-separator">
                        <div class="col-sm-12 col-md-6">
                            <div class="mh-education">
                                <div class="mh-education-deatils">
                                    <!-- Education Institutes-->
                                    <div class="mh-education-item dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                                        <h4>ICs <a href="https://www.facebook.com/ArmyPublicSchoolsCollegesSystem/">Army College RYK</a></h4>
                                        <div class="mh-eduyear">2015-2016</div>
                                        <p>As a prestigious promoter of education in all walks of life, Army Public Schools and College, Rahim Yar Khan is one of the oldest seats of learning at private institution. </p>
                                    </div>                                
                                    <!-- Education Institutes-->
                                    <div class="mh-education-item second-education-item dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s">
                                        <h4>Bachelor's Degree<a href="https://kfgc.edu.pk/">KFC RYK</a></h4>
                                        <div class="mh-eduyear">2017-2018</div>
                                        <p>Khawaja Fareed Govt. Post Graduate College is located in the heart of the City Rahim Yar Khan, Punjab, Pakistan. It is named after the famous Sufi Poet Khawaja Ghulam Fareed. </p>
                                    </div>                                
                                    <!-- Education Institutes-->
                                    <div class="mh-education-item dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s">
                                        <h4>Master's Degree<a href="#">IUB</a></h4>
                                        <div class="mh-eduyear">2019-2021</div>
                                        <p>The Islamia University of Bahawalpur is a public sector university in Bahawalpur, Pakistan, which was originally established by His Highness Nawab Sir Sadiq Muhammad Khan Abbasi - V as the Jamia Abbasia in 1925. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="mh-experince" id="mh-experience">
            <div class="bolor-overlay">
                <div class="container">
                    <h3 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">Work experience</h3>
                    <div class="row section-separator">
                        <div class="col-sm-12 col-md-6">
                            <div class="mh-work">
                                <div class="mh-experience-deatils">
                                    <!-- Education Institutes-->
                                    <div class="mh-work-item dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">
                                        <h4>FREELANCING <a href="https://digiskills.pk/">DigiSkills Training Program</a></h4>
                                        <div class="mh-eduyear"><a href="https://digiskills.pk/verify/">Dec 2018-Feb 2019</a></div>
                                        <span>Responsibility :</span>
                                        <ul class="work-responsibility">
                                            <li><i class="fa fa-circle"></i>Study Freelancing Platforms</li>
                                            <li><i class="fa fa-circle"></i>Communication</li>
                                        </ul>
                                    </div>                                
                                    <!-- Education Institutes-->
                                    <div class="mh-work-item second-work-item dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s">
                                        <h4>WORDPRESS <a href="https://digiskills.pk/">DigiSkills Training Program</a></h4>
                                        <div class="mh-eduyear"><a href="https://digiskills.pk/verify/">Batch-02 Dec 2018-Feb 2019</a></div>
                                        <span>Responsibility :</span>
                                        <ul class="work-responsibility">
                                            <li><i class="fa fa-circle"></i>Site Development</li>
                                            <li><i class="fa fa-circle"></i>Theme Designing</li>
                                            <li><i class="fa fa-circle"></i>E-commerce Store Development</li>
                                        </ul>
                                    </div>                                
                                    <!-- Education Institutes-->
                                    <div class="mh-work-item dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.7s">
                                        <h4>Python Scraping <a href="https://docs.python.org/3/">Sir Ali Raza Institute</a></h4>
                                        <div class="mh-eduyear">2021-2022</div>
                                        <span>Responsibility :</span>
                                        <ul class="work-responsibility">
                                            <li><i class="fa fa-circle"></i>Complete Web Scraping</li>
                                            <li><i class="fa fa-circle"></i>Project Management</li>
                                        </ul>
                                    </div>
                                    <!-- Education Institutes-->
                                    <div class="mh-work-item second-work-item dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.7s">
                                        <h4>Web Development <a href="https://docs.python.org/3/">Sir Ali Raza Institute</a></h4>
                                        <div class="mh-eduyear">2021-2022</div>
                                        <span>Responsibility :</span>
                                        <ul class="work-responsibility">
                                            <li><i class="fa fa-circle"></i>Front-end web development</li>
                                            <li><i class="fa fa-circle"></i>Back-end Development</li>
                                            <li><i class="fa fa-circle"></i>Complete Laravel Study</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!--
        ===================
           PORTFOLIO
        ===================
        -->
        <section class="mh-portfolio" id="mh-portfolio">
            <div class="container">
                <div class="row section-separator">
                    <div class="section-title col-sm-12 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.1s">
                        <h3>Recent Portfolio</h3>
                    </div>
                    <div class="part col-sm-12">
                        <div class="portfolio-nav col-sm-12" id="filter-button">
                            <ul>
                                <li data-filter="*" class="current wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.1s"> <span>All Categories</span></li>
                                <li data-filter=".user-interface" class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s"><span>Web Design</span></li>
                                <li data-filter=".branding" class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s"><span>Projects</span></li>
                                <li data-filter=".mockup" class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s"><span>Python</span></li>
                                <li data-filter=".ui" class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s"><span>Photography</span></li>
                            </ul>
                        </div>
                        <div class="mh-project-gallery col-sm-12 wow fadeInUp" id="project-gallery" data-wow-duration="0.8s" data-wow-delay="0.5s">
                            <div class="portfolioContainer row">
                                <div class="grid-item col-md-4 col-sm-6 col-xs-12 user-interface">
                                    <figure>
                                        <img src="{{ URL::asset('images/portfolio2/g1.jpg') }}" alt="img04">
                                        <figcaption class="fig-caption">
                                            <i class="fa fa-search"></i>
                                            <h5 class="title">Carousel</h5>
                                            <span class="sub-title">Photograpy</span>
                                            <a data-fancybox data-src="#mh"></a>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="grid-item col-md-4 col-sm-6 col-xs-12 ui mockup">
                                    <figure>
                                        <img src="{{ URL::asset('images/portfolio2/g2.jpg') }}" alt="img04">
                                        <figcaption class="fig-caption">
                                            <i class="fa fa-search"></i>
                                            <h5 class="title">Python Crawler</h5>
                                            <span class="sub-title">Photograpy</span>
                                            <a href="assets/images/portfolio2/g2.jpg" data-fancybox data-src="#mh"></a>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="grid-item col-md-4 col-sm-6 col-xs-12 user-interface">
                                    <figure>
                                        <img src="{{ URL::asset('images/portfolio2/g3.jpg') }}" alt="img04">
                                        <figcaption class="fig-caption">
                                            <i class="fa fa-search"></i>
                                            <h5 class="title">Home Design</h5>
                                            <span class="sub-title">Photograpy</span>
                                            <a href="assets/images/portfolio2/g3.jpg" data-fancybox data-src="#mh"></a>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="grid-item col-md-4 col-sm-6 col-xs-12 branding">
                                    <figure>
                                        <img src="{{ URL::asset('images/portfolio2/g5.jpg') }}" alt="img04">
                                        <figcaption class="fig-caption">
                                            <i class="fa fa-search"></i>
                                            <h5 class="title">Results</h5>
                                            <span class="sub-title">Photograpy</span>
                                            <a href="assets/images/portfolio2/g5.jpg" data-fancybox data-src="#mh"></a>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="grid-item col-md-4 col-sm-6 col-xs-12 user-interface">
                                    <figure>
                                        <img src="{{ URL::asset('images/portfolio2/g4.jpg') }}" alt="img04">
                                        <figcaption class="fig-caption">
                                            <i class="fa fa-search"></i>
                                            <h5 class="title">Creative Design</h5>
                                            <span class="sub-title">Photograpy</span>
                                            <a href="assets/images/portfolio2/g4.jpg" data-fancybox data-src="#mh"></a>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="grid-item col-md-4 col-sm-6 col-xs-12 branding">
                                    <figure>
                                        <img src="{{ URL::asset('images/portfolio2/g6.png') }}" alt="img04">
                                        <figcaption class="fig-caption">
                                            <i class="fa fa-search"></i>
                                            <h5 class="title">On View</h5>
                                            <span class="sub-title">Photograpy</span>
                                            <a href="assets/images/portfolio2/g6.png" data-fancybox data-src="#mh"></a>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="grid-item col-md-4 col-sm-6 col-xs-12 branding">
                                    <figure>
                                        <img src="{{ URL::asset('images/portfolio2/g7.jpg') }}" alt="img04">
                                        <figcaption class="fig-caption">
                                            <i class="fa fa-search"></i>
                                            <h5 class="title">Globe Glass</h5>
                                            <span class="sub-title">Photograpy</span>
                                            <a href="assets/images/portfolio2/g7.jpg" data-fancybox data-src="#mh"></a>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="grid-item col-md-4 col-sm-6 col-xs-12 ui">
                                    <figure>
                                        <img src="{{ URL::asset('images/portfolio2/g8.png') }}" alt="img04">
                                        <figcaption class="fig-caption">
                                            <i class="fa fa-search"></i>
                                            <h5 class="title">Mockup Collection</h5>
                                            <span class="sub-title">Photograpy</span>
                                            <a href="assets/images/portfolio2/g8.png" data-fancybox data-src="#mh"></a>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="grid-item col-md-4 col-sm-6 col-xs-12 branding">
                                    <figure>
                                        <img src="{{ URL::asset('images/portfolio2/g9.jpg') }}" alt="img04">
                                        <figcaption class="fig-caption">
                                            <i class="fa fa-search"></i>
                                            <h5 class="title">Walter White</h5>
                                            <span class="sub-title">Photograpy</span>
                                            <a href="assets/images/portfolio2/g9.jpg" data-fancybox="gallery"></a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div> <!-- End: .grid .project-gallery -->
                        </div> <!-- End: .grid .project-gallery -->
                    </div> <!-- End: .part -->
                </div> <!-- End: .row -->
            </div>
            <div class="mh-portfolio-modal" id="mh">
                <div class="container-fluid row d-flex align-items-center justify-content-center">
                    <div class="col-sm-5">
                        <h2>Contesting Outcomes </h2>
                        <p>The quality of work is an asset to the portfolio rather than as costs. Quality content helps to attract the right audience to your website, engage them and work towards getting the user to take action on your website. If the user finds the content valuable, then they are more likely to share it.</p>       
                        
                        <p>A quality website is clean, well-organized, easy to navigate, concise, modern (in terms of style and layout), functional, branded, and motivates the visitor to do business with you. Information such as hours of operation, location, and contact info should be extremely easy to find. People want to look at something that is visually appealing. Give them that with a quality website.</p>      
                        <div class="mh-about-tag">
                            <ul>
                                <li><span><i class="fa-brands fa-html5"></i> html</span></li>
                                <li><span><i class="fa-brands fa-css3"></i> css</span></li>
                                <li><span><i class="fa-brands fa-js"></i> Javascript</span></li>
                                <li><span><i class="fa-brands fa-bootstrap"></i> bootstrap</span></li>
                                <li><span><i class="fa-brands fa-python"></i> python</span></li>
                            </ul>
                        </div>
                        <a href="#" class="btn btn-fill">Live Demo</a>
                    </div>
                    <div class="row mh-portfolio-modal-inner col-sm-6">
                        <div class="mh-portfolio-modal-img">
                            <img src="{{ URL::asset('images/portfolio2/pr-0.jif') }}" alt="" class="img-fluid">
                            <p>Wordpress Batch-02 Dec 2018-Feb 2019</p>    
                            <img src="{{ URL::asset('images/portfolio2/pr-1.jif') }}" alt="" class="img-fluid">
                            <p>Freelancing Batch-02 Dec 2018-Feb 2019</p>     
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--
        ===================
           Counter
        ===================
        -->

        <section class="counter-wrap section-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="counter-item mb-5 mb-lg-0"> 
                            <i class="fa-solid fa-person"></i>
                            <span class="counter">785</span>
                            <h5>Happy Clients</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="counter-item mb-5 mb-lg-0">
                            <i class="fa-solid fa-thumbs-up"></i>
                            <span class="counter">385</span>
                            <h5>project done</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="counter-item mb-5 mb-lg-0">
                            <i class="fa-solid fa-face-smile"></i>
                            <span class="counter">845</span>
                            <h5>Cup of tea</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="counter-item">
                            <i class="fa-solid fa-trophy"></i>
                            <span class="counter">225</span>
                            <h5>awards won</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!--
        ===================
           PRICING
        ===================
        -->
        <section class="mh-pricing" id="mh-pricing">
            <div class="">
                <div class="container">
                    <div class="row section-separator">
                        <div class="col-sm-12 section-title" data-wow-duration="0.8s" data-wow-delay="0.2s">
                            <h3>Pricing Table</h3>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="mh-pricing dark-bg shadow-2 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                                <i class="fa fa-calendar"></i>
                                <h4>Full-time work</h4>
                                <p>I am available for full time</p>
                                <h5>$1500</h5>
                                <ul>
                                    <li>Web Development</li>
                                    <li>Web Design</li>
                                    <li>Front-end Development</li>
                                    <li>Back-end Development</li>
                                    <li>Python Scraping</li>
                                </ul>
                                <a href="#" class="btn btn-fill">Hire Me</a>
                            </div>  
                        </div>                    
                        <div class="col-sm-12 col-md-4">
                            <div class="mh-pricing dark-bg shadow-2 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s">
                                <i class="fa fa-file"></i>
                                <h4>Fixed Price Project</h4>
                                <p>I am available for fixed roles</p>
                                <h5>$500</h5>
                                <ul>
                                    <li>Web Development</li>
                                    <li>Web Design</li>
                                    <li>Front-end Development</li>
                                    <li>Back-end Development</li>
                                    <li>Python Scraping</li>
                                </ul>
                                <a href="#" class="btn btn-fill">Hire Me</a>
                            </div>  
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="mh-pricing dark-bg shadow-2 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.7s">
                                <i class="fa fa-hourglass"></i>
                                <h4>Hourley work</h4>
                                <p>I am available for Hourley projets</p>
                                <h5>$50</h5>
                                <ul>
                                    <li>Web Development</li>
                                    <li>Web Design</li>
                                    <li>Front-end Development</li>
                                    <li>Back-end Development</li>
                                    <li>Python Scraping</li>
                                </ul>
                                <a href="#" class="btn btn-fill">Hire Me</a>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!--
        ===================
           TESTIMONIALS
        ===================
        -->
        <section class="mh-testimonial" id="mh-testimonial">
            <div class="home-v-img">
                <div class="container">
                    <div class="row section-separator">
                        <div class="col-sm-12 section-title wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                            <h3>Client Reviews</h3>
                        </div>
                        <div class="col-sm-12 wow fadeInUp" id="mh-client-review" data-wow-duration="0.8s" data-wow-delay="0.3s">
                            <div class="each-client-item">
                                <div class="mh-client-item dark-bg black-shadow-1">
                                    <img src="{{ URL::asset('images/c-1.jpg') }}" alt="" class="img-fluid">
                                    <p>Absolute wonderful ! I am completely
                                    blown away.The very best.I was amazed
                                    at the quality</p>
                                    <h4>John Mike</h4>
                                    <span>CEO, Author.Inc</span>
                                </div>
                            </div>
                            <div class="each-client-item">
                                <div class="mh-client-item dark-bg black-shadow-1">
                                    <img src="{{ URL::asset('images/c-1.jpg') }}" alt="" class="img-fluid">
                                    <p>Absolute wonderful ! I am completely
                                    blown away.The very best.I was amazed
                                    at the quality</p>
                                    <h4>John Mike</h4>
                                    <span>CEO, Author.Inc</span>
                                </div>
                            </div>                    
                            
                            <div class="each-client-item">
                                <div class="mh-client-item dark-bg black-shadow-1">
                                    <img src="{{ URL::asset('images/c-1.jpg') }}" alt="" class="img-fluid">
                                    <p>Absolute wonderful ! I am completely
                                    blown away.The very best.I was amazed
                                    at the quality</p>
                                    <h4>John Mike</h4>
                                    <span>CEO, Author.Inc</span>
                                </div>
                            </div>
                            <div class="each-client-item">
                                <div class="mh-client-item dark-bg black-shadow-1">
                                    <img src="{{ URL::asset('images/c-1.jpg') }}" alt="" class="img-fluid">
                                    <p>Absolute wonderful ! I am completely
                                    blown away.The very best.I was amazed
                                    at the quality</p>
                                    <h4>John Mike</h4>
                                    <span>CEO, Author.Inc</span>
                                </div>
                            </div>
                            <div class="each-client-item">
                                <div class="mh-client-item dark-bg black-shadow-1">
                                    <img src="{{ URL::asset('images/c-1.jpg') }}" alt="" class="img-fluid">
                                    <p>Absolute wonderful ! I am completely
                                    blown away.The very best.I was amazed
                                    at the quality</p>
                                    <h4>John Mike</h4>
                                    <span>CEO, Author.Inc</span>
                                </div>
                            </div>                    
                            
                            <div class="each-client-item">
                                <div class="mh-client-item dark-bg black-shadow-1">
                                    <img src="{{ URL::asset('images/c-1.jpg') }}" alt="" class="img-fluid">
                                    <p>Absolute wonderful ! I am completely
                                    blown away.The very best.I was amazed
                                    at the quality</p>
                                    <h4>John Mike</h4>
                                    <span>CEO, Author.Inc</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!--
        ===================
           FOOTER 1
        ===================
        -->
        <footer class="mh-footer mh-footer-3" id="mh-contact">

            <img class="mh-footer-bg" src="{{ URL::asset('images/footer-bg.jpg') }}">

            <div class="container-fluid footer-content">
                <div class="row section-separator">
                    <div class="col-sm-12 section-title">
                        <h3>Contact Me</h3>
                    </div>
                    <div class="map-image image-bg col-sm-12">
                        <div class="container mt-30">
                            <div class="row">
                                <div class="col-sm-12 col-md-6 mh-footer-address">
                                    <div class="col-sm-12 xs-no-padding">
                                        <div class="mh-address-footer-item dark-bg shadow-1 media">
                                            <div class="each-icon">
                                                <i class="fa fa-location-arrow"></i>
                                            </div>
                                            <div class="each-info media-body">
                                                <h4>Address</h4>
                                                <address>
                                                    17, SSC, Rahim Yar Khan, <br> 
                                                    Pakistan
                                                </address>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 xs-no-padding">
                                        <div class="mh-address-footer-item media dark-bg shadow-1">
                                            <div class="each-icon">
                                                <i class="fa fa-envelope-o"></i>
                                            </div>
                                            <div class="each-info media-body">
                                                <h4>Email</h4>
                                                <a href="mailto:hannanryk2@gmail.com">hannanryk2@gmail.com</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 xs-no-padding">
                                        <div class="mh-address-footer-item media dark-bg shadow-1">
                                            <div class="each-icon">
                                                <i class="fa fa-phone"></i>
                                            </div>
                                            <div class="each-info media-body">
                                                <h4>Phone</h4>
                                                <a href="callto:0315-1234567">0315-1234567</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <form id="contactForm" class="single-form quate-form wow fadeInUp" data-toggle="validator">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <input name="name" class="contact-name form-control" id="name" type="text" placeholder="First Name" required>
                                            </div>
                
                                            <div class="col-sm-12">
                                                <input name="name" class="contact-email form-control" id="L_name" type="text" placeholder="Last Name" required>
                                            </div>
                
                                            <div class="col-sm-12">
                                                <input name="name" class="contact-subject form-control" id="email" type="email" placeholder="Your Email" required>
                                            </div>
                
                                            <div class="col-sm-12">
                                                <textarea class="contact-message" id="message" rows="6" placeholder="Your Message" required></textarea>
                                            </div>
                                            
                                            <!-- Subject Button -->
                                            <div class="btn-form col-sm-12">
                                                <button type="submit" class="btn btn-fill btn-block" id="form-submit">Send Message</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!--
        ===================
           FOOTER 2
        ===================
        -->
        <footer class="footer-20192">
            <div class="site-section">
              <div class="container">
      
                <div class="cta d-block d-md-flex align-items-center px-5">
                  <div>
                    <h2 class="mb-0">Ready for a next project?</h2>
                    <h3 class="text-light">Let's get started!</h3>
                  </div>
                  <div class="ml-auto">
                    <a href="#" class="btn rounded-5 py-3 px-5">Contact us</a>
                  </div>
                </div>
                <div class="row">
      
                  <div class="col-sm">
                    <a href="#" class="footer-logo">MAH Developers</a>
                    <p class="copyright">
                      <small>&copy; 2019</small>
                    </p>
                  </div>
                  <div class="col-sm">
                    <h3>Customers</h3>
                    <ul class="list-unstyled links">
                      <li><a href="#">Buyer</a></li>
                      <li><a href="#">Supplier</a></li>
                    </ul>
                  </div>
                  <div class="col-sm">
                    <h3>Company</h3>
                    <ul class="list-unstyled links">
                      <li><a href="#mh-about">About us</a></li>
                      <li><a href="#mh-experience">Experience</a></li>
                      <li><a href="#mh-contact">Contact us</a></li>
                    </ul>
                  </div>
                  <div class="col-sm">
                    <h3>Further Information</h3>
                    <ul class="list-unstyled links">
                      <li><a href="#">Terms &amp; Conditions</a></li>
                      <li><a href="#">Privacy Policy</a></li>
                    </ul>
                  </div>
                  <div class="col-md-3">
                    <h3>Follow us</h3>
                    <ul class="list-unstyled social">
                        <li><a href="https://www.facebook.com/muhammad.abdulhannan.7927"><span class="icon-facebook"></span></a></li>
                        <li><a href="https://www.youtube.com/channel/UC0fvDXIqJjYLJvcUA8vjPkQ"><span class="icon-youtube"></span></a></li>
                        <li><a href="https://www.linkedin.com/in/muhammad-abdul-hannan-40bb5b1b3/"><span class="icon-linkedin"></span></a></li>
                        <li><a href="https://github.com/Muhammad-Abdul-Hannan"><span class="icon-github"></span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </footer>
    <!-- jQuery -->
    <script src="{{ URL::asset('plugins/js/jquery.min.js') }}"></script>
    <!-- popper -->
    <script src="{{ URL::asset('plugins/js/popper.min.js') }}"></script>
    <!-- bootstrap -->
    <script src="{{ URL::asset('plugins/js/bootstrap.min.js') }}"></script>
    <!-- owl carousel -->
    <script src="{{ URL::asset('plugins/js/owl.carousel.js') }}"></script>
    <!-- validator -->
    <script src="{{ URL::asset('plugins/js/validator.min.js') }}"></script>
    <!-- wow -->
    <script src="{{ URL::asset('plugins/js/wow.min.js') }}"></script>
    <!-- mixin js-->
    <script src="{{ URL::asset('plugins/js/jquery.mixitup.min.js') }}"></script>
    <!-- circle progress-->
    <script src="{{ URL::asset('plugins/js/circle-progress.js') }}"></script>
    <!-- jquery nav -->
    <script src="{{ URL::asset('plugins/js/jquery.nav.js') }}"></script>
    <!-- Fancybox js-->
    <script src="{{ URL::asset('plugins/js/jquery.fancybox.min.js') }}"></script>
    <!-- isotope js-->
    <script src="{{ URL::asset('plugins/js/isotope.pkgd.js') }}"></script>
    <script src="{{ URL::asset('plugins/js/packery-mode.pkgd.js') }}"></script>
    <!-- Counter JS -->
    <script src="{{ URL::asset('plugins/counterup/waypoint.js') }}"></script>
    <script src="{{ URL::asset('plugins/counterup/jquery.counterup.min.js') }}"></script>
    <!-- Custom Scripts-->
    <script src="{{ URL::asset('js/map-init.js') }}"></script>
    <script src="{{ URL::asset('js/custom-scripts.js') }}"></script>
</body>

</html>