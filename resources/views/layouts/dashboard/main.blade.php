<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>CV Indra Ardiyanto</title>
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
      

    </head>
    <body id="page-top">
        @include('layouts.dashboard.header')
        <!-- Navigation-->
        
      
        @yield('content')

        <!-- Footer-->
        @include('layouts.dashboard.footer')
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

                                    <video class="" src="/assets/video/learning.mp4" controls 
                                    style="width: 90%;margin-bottom: 20px;border-radius: 20px;">
                                            This is your Video
                                    </video>
                                    {{-- <img class="img-fluid rounded mb-5" src="assets/img/portfolio/journey.png" alt="" /> --}}
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
