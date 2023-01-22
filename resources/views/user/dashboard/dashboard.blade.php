
    @extends('layouts.dashboard.main')
    @section('content')
        <!-- Masthead-->
        <header class="masthead bg-info text-white text-center">
            <div class="container d-flex align-items-center flex-column" id="containerFlexImg" >
                <!-- Masthead Avatar Image-->
                <div  class="circle">
                    {{-- <img class="masthead-avatar mb-1" src="assets/img/img1-1.jpg" alt="" style="border-radius: 60%; border:4px solid black" /> --}}
                    @foreach ($data as $item)
                    <img src="{{ $item->user_image }}" alt="" />
                    @endforeach
                </div>

                <!-- Icon Divider-->
                <div class="imageContainer">
                    @foreach ($data as $item)
                        <h1 class="masthead-heading text-uppercase mb-0"> 
                        
                        
                                {{ $item->name }}
                            
                        
                        </h1>
                    @endforeach
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
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">
                    Experience
                </h2>
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
                                    @foreach ($data as $item)
                                        <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal1Label">
                                            {{ $item->skill_name }}
                                            {{-- PHP programming language --}}
                                        </h2>
                                        <h3 class="subtitleExperience text-uppercase text-secondary" >
                                            {{-- 3 years --}}
                                            {{ $item->skill_duration }}
                                        </h3> 
                                
                                    
                                        
                                        <!-- Icon Divider-->
                                        <div class="divider-custom " id="dividerCustom" >
                                            <div class="divider-custom-line"></div>
                                            <div class="divider-custom-icon"><i class="fas fa-smile"></i></div>
                                            <div class="divider-custom-line"></div>
                                        </div>
                                    </div>
                                        {{-- content --}}
                                        
                                    
                                    
                                    <div class="experienceDesc" >
                                        {{ $item->skill_description }}
                                    </div>
                                @endforeach            {{-- <div class="col-lg-4 mr-auto text-left" ><p class="lead">You can create your own custom avatar for the masthead, change the icon in the dividers, and add your email address to the contact form to make it fully functional!</p></div> --}}
                              
                                  
                                   
                                    
                                
                                    
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
                        @foreach ($data as $item)
                            {{ $item->description }}
                        @endforeach
                    </p></div>
                    
                </div>
                <!-- About Section Button-->
                <div class="text-center mt-4">
                    <educationa class="btn btn-xl btn-outline-dark js-scroll-trigger" href="#contact">
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
                                    <h5 class="subtitleEducation" >
                                        SCIENCE KNOWLEDGE 

                                    </h5>
                                    <h5 class="subtitleExperience text-uppercase text-secondary" id="durationEdu" >
                                        FEBRUARY 2014 - SEPTEMBER 2017

                                    </h5>
                                    
                                    <!-- Icon Divider-->
                                    <div class="divider-custom " id="dividerEdu" >
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-smile"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                </div>
                                    {{-- content --}}
                                    
                                 
                                   
                                <div class="descriptEdu" >
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
                                    <h5 class="Major" >
                                        BACHELOR OF INFORMATICS &#124; GPA: 3.31

                                    </h5>
                                    <h5 class="subtitleExperience text-uppercase text-secondary" id="eduDuration" >
                                        September 2017-August 2022

                                    </h5>
                                    
                                    <!-- Icon Divider-->
                                    <div class="divider-custom " id="eduDivider" >
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-smile"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                </div>
                                    {{-- content --}}
                                    
                                 
                                   
                                <div class="eduDescript" >
                                    Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional SASS stylesheets for easy customization.
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis recusandae tempora nesciunt excepturi mollitia deleniti? Delectus vero nisi distinctio pariatur voluptatem ut illo exercitationem non molestiae. Culpa et illo iure?
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis, impedit omnis natus repellat nesciunt explicabo quis? Asperiores dignissimos quam eos corrupti! Incidunt explicabo placeat suscipit rem repudiandae eos. Odio, distinctio.
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium consequuntur cum rem aut impedit accusantium eveniet quos repudiandae harum non atque quo consectetur soluta voluptatem qui quia, corrupti rerum voluptas!
                                </div>
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
    @endsection
       