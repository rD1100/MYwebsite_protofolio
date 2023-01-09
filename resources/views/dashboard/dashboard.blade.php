<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Freelancer - Start Bootstrap Theme</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <link rel="stylesheet" href="/fontAwesome/js/all.js">
        <link rel="stylesheet" href="/fontAwesome/css/all.css">
        {{-- <script src="https://use.fontawesome.com/releases/v6.2.1/js/all.js" crossorigin="anonymous"></script> --}}
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <style>
            .circle {
                border-color: rgb(114, 193, 217);
                border-image: none;
                border-radius: 50% 50% 50% 50%;
                border-style: solid;
                border-width: 10px;
                /* border-inline: red; */
                height: 260px;
                width: 250px;
                overflow: hidden;
            }
            .circleSkill{
                /* border-color: rgb(114, 193, 217); */
                background: red;
                border-image: none;
                border-radius: 50% 50% 50% 50%;
                /* border-style: solid; */
                border-width: 10px;
                text-align: center;
                /* border-inline: red; */
                height: 170px;
                width: 180px;
                overflow: hidden;
            }
            img {
                height: 100%;
                width: 100%;
            }

            tr th{
            border: solid black
            }
            table{
                border: 1px solid black
            }

            .subtitleExperience{
                margin-top: 3%;
            }

            .flexContainer {
                margin-left: -1rem;
                /* border: solid red; */
                display: flex;
                text-align: center;
                /* background-color: rgb(247, 247, 247); */
                flex-wrap: wrap;
    
            }
            
            

            .flexContainer > .isi {
                /* background-color: #f0eff5; */
                margin: 1rem 2rem 1rem 2rem;
                padding: 35px 60px 23px 60px;
                font-size: 30px;
                border-radius: 10px;
                background: rgb(43, 42, 42);
                cursor: pointer;
                /* border:3px solid black; */
            }
            .content{
                /* border: 1px solid black; */
                font-size:  15px;
                width: 280px;
                margin: 0px 0px 0px 0px;
                padding: 10px 0px 20px 0px;
                text-align: justify;
                
                }
            .judul{
                font-size: 150%;
                }

            .borderSkill{
                color: white;
                font-size: 115px;
                text-align: center;
                transition: transform .2s;
            }

            .borderSkill:hover{
                -ms-transform: scale(1.5); /* IE 9 */
                -webkit-transform: scale(1.5); /* Safari 3-8 */
                transform: scale(1.5); 
            }

            .skillLogo{
                /* margin: 1rem 1rem 1rem 1rem;
                padding: 35px 20px 23px 20px; */
                /* text-align: center; */
                /* font-size: 30px; */
                /* border-radius: 10px; */
                border: solid rgb(245, 10, 10);
                background: rgb(43, 42, 42);
            }

            .flexContainerSchool {
                margin-left: 4rem;
                margin-right: 5.7rem;
                border:1px solid rgba(3, 165, 157, 0.569);
                border-radius: 11px;
                border-style: solid;
                border-width: 3px;
                overflow: hidden;
                position: relative;
                display: flex;
                /* text-align: center; */
                /* background-color: rgb(247, 247, 247); */
                flex-wrap: wrap;
    
            }
            
            .containerHover{
               
                position: relative;
                cursor: pointer;
              
            }

             #borderSchool {
                margin: 0rem 0rem 0rem 0rem;
                padding: 35px 400px 250px 65px;
                font-size: 30px;
                background-image: url('/assets/img/school/uty.png');
            }
            

            #borderSchool1 {
                /* background-color: #f0eff5; */
                margin: 0rem 0rem 0rem 0rem;
                padding: 35px 400px 250px 65px;
                font-size: 30px;
                /* border-radius: 10px 10px 10px 0px; */
                background-image: url('/assets/img/school/smanidy1.jpg');
                /* border:3px solid black; */
            }
            
            .hoverImg{
                position: absolute;
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
                height: 100%;
                width: 100%;
                /* transparent  */
                opacity: 0;
                    /* transparent  */
                transition: .5s ease;
                background-color: black;
            }
        
            .containerHover:hover .hoverImg{
                opacity: 0.8;
            }
            #icon{
                font-size: 50px;
                position: absolute;
                top: 50%;
                left: 50%;
                -webkit-transform: translate(-50%, -50%);
                -ms-transform: translate(-50%, -50%);
                transform: translate(-50%, -50%);
                text-align: center;
                }

            
        </style>

    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">Curiculum Vitae</a>
                <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-info text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">About Me</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Experiences</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#skills">Skills</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#education">Educations </a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead bg-info text-white text-center">
            <div class="container d-flex align-items-center flex-column" style="margin-top: -3%">
                <!-- Masthead Avatar Image-->
                <div  class="circle">
                    {{-- <img class="masthead-avatar mb-1" src="assets/img/img1-1.jpg" alt="" style="border-radius: 60%; border:4px solid black" /> --}}
                    <img src="assets/img/img1-1.jpg" alt="" />
                </div>
                
                
                <!-- Icon Divider-->
                <div style="margin-top:1% ">
                    <h1 class="masthead-heading text-uppercase mb-0">Indra Ardiyanto</h1>
                    {{-- <p class="masthead-subheading font-weight-light mb-0">Back End Developer</p> --}}
                    <div class="text-center mt-4 ">
                        <a class="btn btn-xl btn-outline-light js-scroll-trigger " href="#about">
                            <div  >
                                ABOUT ME
                            </div>
                          
                        </a>
                    </div>
                    
                </div>
                {{-- <h1 class="masthead-heading text-uppercase mb-0">Indra Ardiyanto</h1> --}}
                {{-- <div class="divider-custom divider-light" style="margin-top: -2">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div> --}}
                <!-- Masthead Subheading-->
                {{-- <p class="masthead-subheading font-weight-light mb-0">Back End Developer</p> --}}
            </div>
        </header>
        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="portfolio">
            <div class="container" >
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Experience</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-smile"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-left">
                    <!-- Portfolio Item 1-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/journey.png" alt="" />
                        </div>
                    </div>
                    <!-- Portfolio Item 2-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/learning.png" alt="" />
                        </div>
                    </div>
                    <!-- Portfolio Item 3-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal3">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/encrypt.png" alt="" />
                        </div>
                    </div>
                    <!-- Portfolio Item 4-->
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal4">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/store.png" alt="" />
                        </div>
                    </div>
                   
                </div>
            </div>
        </section>

        <!-- Skills Section-->
        <section class="page-section bg-info text-white mb-0" id="skills" >
            <div class="container" >  
                <h2 class="page-section-heading text-center text-uppercase text-white mb-0">Skills</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-smile"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
            
                <div class="flexContainer">
                
                        <div class="isi" data-toggle="modal" data-target="#php">
                        
                            
                            <div class="circleSkill">  
                                <div class="borderSkill" >
                                    <i  class="fa-brands fa-php" ></i>
                                </div>
                                
                            </div>
                        
                        
                        </div>
                       
                  
                        <div class="isi" >
                            
                            <div class="circleSkill">  
                                <div class="borderSkill" >
                                    <i class="fa-brands fa-js"></i>
                                </div>
                                
                            </div>
                        
                        
                        </div>
                        <div href="" class="isi" >
                            
                            <div class="circleSkill">  
                                <div class="borderSkill" >
                                    <i class="fa-brands fa-python"></i>
                                </div>
                                
                            </div>
                        
                        
                        </div>
                        <div href="" class="isi" >
                            
                            <div class="circleSkill">  
                                <div class="borderSkill" >
                                    <i class="fa-solid fa-database"></i>
                                </div>
                                
                            </div>
                        
                        
                        </div>

                        <div href="" class="isi" >
                            
                            <div class="circleSkill">  
                                <div class="borderSkill" >
                                    <i class="fa-brands fa-html5"></i>
                                </div>
                                
                            </div>
                        
                        
                        </div>
                </div>
                
            </div>
        </section>

        <div class="portfolio-modal modal fade" id="php" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8 " >
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal1Label">
                                        PHP programming language
                                    </h2>
                                    <h3 class="subtitleExperience text-uppercase text-secondary" >
                                        3 years

                                    </h3>
                                    
                                    <!-- Icon Divider-->
                                    <div class="divider-custom " style=" margin-bottom: 2%">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-smile"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                </div>
                                    {{-- content --}}
                                    
                                 
                                   
                                <div style=" text-align: justify;margin-left: 100px;margin-right: 100px">
                                    Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional SASS stylesheets for easy customization.
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis recusandae tempora nesciunt excepturi mollitia deleniti? Delectus vero nisi distinctio pariatur voluptatem ut illo exercitationem non molestiae. Culpa et illo iure?
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis, impedit omnis natus repellat nesciunt explicabo quis? Asperiores dignissimos quam eos corrupti! Incidunt explicabo placeat suscipit rem repudiandae eos. Odio, distinctio.
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium consequuntur cum rem aut impedit accusantium eveniet quos repudiandae harum non atque quo consectetur soluta voluptatem qui quia, corrupti rerum voluptas!
                                </div>
                                            {{-- <div class="col-lg-4 mr-auto text-left" ><p class="lead">You can create your own custom avatar for the masthead, change the icon in the dividers, and add your email address to the contact form to make it fully functional!</p></div> --}}
                              
                                  
                                   
                                    
                                
                                    
                                    <button class="btn btn-primary mt-5 " data-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

         <!-- About Section-->
        <section class="page-section   mb-0" id="about" >
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase ">About Me</h2>
                <!-- Icon Divider-->
                <div class="divider-custom ">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-smile"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->
                <div class="row ml-3 mr-3 " >
                    <div  class=" ml-auto"><p class="lead">
                        Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional SASS stylesheets for easy customization.
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique consequuntur reiciendis, quasi amet, neque quidem, doloremque ipsa labore atque distinctio repellat facilis facere molestias. Est omnis accusantium minus aliquam veritatis?
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, doloribus quaerat error assumenda unde ex adipisci maiores quo maxime molestiae officia voluptatum debitis omnis sequi totam nam sit dolorem alias!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. At laboriosam nesciunt blanditiis, fuga sit rerum et fugit vitae ad libero non quas. Magni, quae eveniet. Vitae deserunt nam distinctio non.
                    </p></div>
                    
                </div>
                <!-- About Section Button-->
                <div class="text-center mt-4">
                    <a class="btn btn-xl btn-outline-dark js-scroll-trigger" href="#contact">
                        {{-- <i class="fas fa-download mr-2"></i> --}}
                        <i class="fa-solid fa-phone-volume "></i>
                        Contact Me
                    </a>
                </div>
            </div>
        </section>

         <!-- Education Section-->
         <section class="page-section bg-info text-white  mb-0" id="education" >
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-white text-uppercase ">
                    Education
                </h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light ">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-smile"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                
                <div class="flexContainerSchool" >
                   <div class="containerHover" data-toggle="modal" data-target="#school">
                       {{-- bg image --}}
                        <div id="borderSchool" >
                        </div>

                        <div class="hoverImg">
                            <i id="icon" class="fas fa-plus fa-3x"></i>
                        
                        </div> 
                   </div>

                   <div class="containerHover" data-toggle="modal" data-target="#school1">
                   
                        <div id="borderSchool1" >
                        </div>

                        <div class="hoverImg">
                            <i id="icon" class="fas fa-plus fa-3x"></i>
                        </div> 
                    </div>
                    
                   
                    
                
                   {{-- <div  class="borderSchool1" data-toggle="modal" data-target="#php">
                    
                    </div> --}}
                    
                
                    
                    
                </div>
                
            </div>
        </section>
      
        <!-- Contact Section-->
        <section class="page-section" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contact Me</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-smile"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form-->
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19.-->
                        <form id="contactForm" name="sentMessage" novalidate="novalidate">
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Name</label>
                                    <input class="form-control" id="name" type="text" placeholder="Name" required="required" data-validation-required-message="Please enter your name." />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Email Address</label>
                                    <input class="form-control" id="email" type="email" placeholder="Email Address" required="required" data-validation-required-message="Please enter your email address." />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Phone Number</label>
                                    <input class="form-control" id="phone" type="tel" placeholder="Phone Number" required="required" data-validation-required-message="Please enter your phone number." />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Message</label>
                                    <textarea class="form-control" id="message" rows="5" placeholder="Message" required="required" data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <br />
                            <div id="success"></div>
                            <div class="form-group"><button class="btn btn-primary btn-xl" id="sendMessageButton" type="submit">Send</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <div class="portfolio-modal modal fade" id="school1" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-9 " >
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal1Label">
                                        sma negeri 1 dlingo
                                    </h2>
                                    <h5  style="color: rgb(53, 51, 51);margin-top:25px  ">
                                        SCIENCE KNOWLEDGE 

                                    </h5>
                                    <h5 class="subtitleExperience text-uppercase text-secondary" style="margin-top: -1px">
                                        FEBRUARY 2014 - SEPTEMBER 2017

                                    </h5>
                                    
                                    <!-- Icon Divider-->
                                    <div class="divider-custom " style=" margin-bottom: 2%">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-smile"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                </div>
                                    {{-- content --}}
                                    
                                 
                                   
                                <div style=" text-align: justify;margin-left: 100px;margin-right: 100px">
                                    Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional SASS stylesheets for easy customization.
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis recusandae tempora nesciunt excepturi mollitia deleniti? Delectus vero nisi distinctio pariatur voluptatem ut illo exercitationem non molestiae. Culpa et illo iure?
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis, impedit omnis natus repellat nesciunt explicabo quis? Asperiores dignissimos quam eos corrupti! Incidunt explicabo placeat suscipit rem repudiandae eos. Odio, distinctio.
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium consequuntur cum rem aut impedit accusantium eveniet quos repudiandae harum non atque quo consectetur soluta voluptatem qui quia, corrupti rerum voluptas!
                                </div>
                                            {{-- <div class="col-lg-4 mr-auto text-left" ><p class="lead">You can create your own custom avatar for the masthead, change the icon in the dividers, and add your email address to the contact form to make it fully functional!</p></div> --}}
                              
                                  
                                   
                                    
                                
                                    
                                    <button class="btn btn-primary mt-5 " data-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="portfolio-modal modal fade" id="school" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-9 " >
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal1Label">
                                        university of technology yogyakarta
                                    </h2>
                                    <h5  style="color: rgb(53, 51, 51);margin-top:25px  ">
                                        BACHELOR OF INFORMATICS &#124; GPA: 3.31

                                    </h5>
                                    <h5 class="subtitleExperience text-uppercase text-secondary" style="margin-top: -1px">
                                        September 2017-August 2022

                                    </h5>
                                    
                                    <!-- Icon Divider-->
                                    <div class="divider-custom " style=" margin-bottom: 2%">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-smile"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                </div>
                                    {{-- content --}}
                                    
                                 
                                   
                                <div style=" text-align: justify;margin-left: 100px;margin-right: 100px">
                                    Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional SASS stylesheets for easy customization.
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis recusandae tempora nesciunt excepturi mollitia deleniti? Delectus vero nisi distinctio pariatur voluptatem ut illo exercitationem non molestiae. Culpa et illo iure?
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis, impedit omnis natus repellat nesciunt explicabo quis? Asperiores dignissimos quam eos corrupti! Incidunt explicabo placeat suscipit rem repudiandae eos. Odio, distinctio.
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium consequuntur cum rem aut impedit accusantium eveniet quos repudiandae harum non atque quo consectetur soluta voluptatem qui quia, corrupti rerum voluptas!
                                </div>
                                            {{-- <div class="col-lg-4 mr-auto text-left" ><p class="lead">You can create your own custom avatar for the masthead, change the icon in the dividers, and add your email address to the contact form to make it fully functional!</p></div> --}}
                              
                                  
                                   
                                    
                                
                                    
                                    <button class="btn btn-primary mt-5 " data-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container">
                <div class="row text-center " style="margin-left:20% ">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Location</h4>
                        <p class="lead mb-0">
                            2215 John Daniel Drive
                            <br />
                            Clark, MO 65243
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Around the Web</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-github"></i></a>
                    </div>
                    <!-- Footer About Text-->
                    {{-- <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">About Freelancer</h4>
                        <p class="lead mb-0">
                            Freelance is a free to use, MIT licensed Bootstrap theme created by
                            <a href="http://startbootstrap.com">Start Bootstrap</a>
                            .
                        </p>
                    </div> --}}
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright © Your Website 2020</small></div>
        </div>
        <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
        <div class="scroll-to-top d-lg-none position-fixed">
            <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a>
        </div>

        <!-- Portfolio Modals-->
        <!-- Portfolio Modal 1-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal1Label">
                                        Perjalanan Dinas Web
                                    </h2>
                                    <h3 class="subtitleExperience" >
                                        November 2022-Desember 2022

                                    </h3>
                                    
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-smile"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/portfolio/journey.png" alt="" />
                                    <!-- Portfolio Modal - Text-->
                                    <div class="mb-5 text-justify" >
                                      
                                        <table >
                                            <tr>
                                                <th>
                                                    Technology
                                                </th>
                                                <th>PHP programming language, MySQL Database,and Laravel Framework</th>
                                            </tr>
                                            <tr>
                                                <th>
                                                    Description
                                                </th>
                                                <th>
                                                    <ul>
                                                        <li>
                                                            This project from job vacation task in internet.
                                                        </li>
                                                        <li>
                                                            This website has 2 users such as: normal user/employer and admin/SDM, 
                                                            if you wanna switch into admin role you can use this email:hana@gmail.com, and password:12345678.
                                           
                                                        </li>
                                                        <li>
                                                            Purpose of this website to note work tour to employers
                                                            and to managing money to do tour in Indonesia or abroad.
                                                        </li>
                                                            
                                                        <li>
                                                            This is my website link:<a href="http://perjalanandinas.my.id/">http://perjalanandinas.my.id/</a> 
                                                        </li>
                                                    </ul>
                                                </th>
                                            </tr>
                                        
                                        </table>
                                
                                    </div>
                                    <button class="btn btn-primary" data-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Portfolio Modal 2-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-labelledby="portfolioModal2Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal2Label">
                                        Bootcamp Zettacamp
                                    </h2>
                                    <h3 class="subtitleExperience">
                                        November 2022-Desember 2022

                                    </h3>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-smile"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/portfolio/learning.png" alt="" />
                                    <!-- Portfolio Modal - Text-->
                                
                                    <div class="mb-5 text-left" >
                                        
                                        <table>
                                            <tr>
                                                <th>
                                                    Technology
                                                </th>
                                                <th>Javascript, Node.js, Postman API Graphql, and Apollo
                                                </th>
                                            </tr>
                                            <tr>
                                                <th>
                                                    Description
                                                </th>
                                                <th>
                                                    <ul>
                                                        <li>
                                                            This bootcamp provided by Zettabyte Pte Ltd
                                                        </li>
                                                        <li>
                                                            This website has 2 users such as: normal user/employer and admin/SDM, 
                                                            if you wanna switch into admin role you can use this email:hana@gmail.com, and password:12345678.
                                           
                                                        </li>
                                                        <li>
                                                            Purpose of this website to note work tour to employers
                                                            and to managing money to do tour in Indonesia or abroad.
                                                        </li>
                                                            
                                                        <li>
                                                        This my project link: https://github.com/zettacamp-indra-ardiyanto/ardi_zettacamp_catfish.git</a> 
                                                        </li>
                                                    </ul>
                                                </th>
                                            </tr>
                                        
                                        </table>
                                
                                    </div>
                                    <button class="btn btn-primary" data-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 3-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-labelledby="portfolioModal3Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal3Label">
                                        Data Encryption by Caesar Cipher and Hiding Data Encryption into Image
                                    </h2>
                                    <h3 class="subtitleExperience">
                                        November 2022-Desember 2022

                                    </h3>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-smile"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/portfolio/encrypt.png" alt="" />
                                    <!-- Portfolio Modal - Text-->
                                    
                                    <div class="mb-5 text-left" >
                                        
                                        <table >
                                            <tr>
                                                <th>
                                                    Technology
                                                </th>
                                                <th>
                                                    Javascript, Node.js, Postman API, Graphql Query, and Apollo
                                                </th>
                                            </tr>
                                            <tr>
                                                <th>
                                                    Description
                                                </th>
                                                <th>
                                                    <ul>
                                                        <li>
                                                            This bootcamp provided by Zettabyte Pte Ltd
                                                        </li>
                                                        <li>
                                                            This website has 2 users such as: normal user/employer and admin/SDM, 
                                                            if you wanna switch into admin role you can use this email:hana@gmail.com, and password:12345678.
                                           
                                                        </li>
                                                        <li>
                                                            Purpose of this website to note work tour to employers
                                                            and to managing money to do tour in Indonesia or abroad.
                                                        </li>
                                                            
                                                        <li>
                                                        This my project link: https://github.com/zettacamp-indra-ardiyanto/ardi_zettacamp_catfish.git</a> 
                                                        </li>
                                                    </ul>
                                                </th>
                                            </tr>
                                        
                                        </table>
                                
                                    </div>
                                    <button class="btn btn-primary" data-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 4-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-labelledby="portfolioModal4Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal4Label">
                                        Website Sales Sports Equipment
                                    </h2>
                                    <h3 class="subtitleExperience">
                                        November 2022-Desember 2022

                                    </h3>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-smile"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/portfolio/store.png" alt="" />
                                    <!-- Portfolio Modal - Text-->
                                    <div class="mb-5 text-left" >
                                        
                                        <table>
                                            <tr>
                                                <th>
                                                    Technology
                                                </th>
                                                <th>
                                                    Javascript, Node.js, Postman API Graphql, and Apollo
                                                </th>
                                            </tr>
                                            <tr>
                                                <th>
                                                    Description
                                                </th>
                                                <th>
                                                    <ul>
                                                        <li>
                                                            This bootcamp provided by Zettabyte Pte Ltd
                                                        </li>
                                                        <li>
                                                            This website has 2 users such as: normal user/employer and admin/SDM, 
                                                            if you wanna switch into admin role you can use this email:hana@gmail.com, and password:12345678.
                                           
                                                        </li>
                                                        <li>
                                                            Purpose of this website to note work tour to employers
                                                            and to managing money to do tour in Indonesia or abroad.
                                                        </li>
                                                            
                                                        <li>
                                                        This my project link: https://github.com/zettacamp-indra-ardiyanto/ardi_zettacamp_catfish.git</a> 
                                                        </li>
                                                    </ul>
                                                </th>
                                            </tr>
                                        
                                        </table>
                                
                                    </div>
                                    <button class="btn btn-primary" data-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
