<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Victor Gomez - Portfolio</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <link href="{{ asset('/css/home.css')}}" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        

        <style>
            body {
                font-family: 'Maven Pro', sans-serif;
            }
        </style>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body class="antialiased">
        <!-- NAVBAR -->
        <nav class="navbar">
            <div class="container d-flex justify-content-between">
                <!-- LOGO -->
                <div class="navbar--logo">
                    <h1><strong>VMGB Web</strong></h1>
                </div>
                <!-- Items -->

                <div class="navbar--menu-items">
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#portfolio">Portfolio</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- MAIN -->
        <main>
            <!-- HERO-->
            <div class="main--hero" id="home">
                <div class="main-hero--container container d-flex">
                    <!-- LEFT SECTION -->
                    <div class="main-hero--left-item w-50">
                        <div class="main-hero--left-name">
                            <p><strong>Hey, I'm Victor! 👋</strong></p>
                        </div>
                        <div class="main-hero--left-title">
                            <h1><strong>I Build Websites And Scale Systems</strong></h1>
                        </div>
                        <div class="main-hero--left-subtitle">
                            <p>3 years of experience in web development, experienced in PHP, VueJS, AWS, and many others technologies.</p>
                        </div>
                        <div class="main-hero--left-button mt-4">
                            <a class="button-see-work" href="#portfolio"><button class="button-primary">See Work</button></a>
                        </div> 
                        <div class="main-hero--left-social mt-4" >
                            <!-- <span><strong>Social Network</strong></span> -->
                            <div class="left-social--icons">
                                <a href="https://www.linkedin.com/in/vicmgb99/"><i  class="fa-brands fa-linkedin"></i></a>
                                <a href="https://github.com/victormgb"><i class="fa-brands fa-github ml-2"></i></a>
                                
                            </div>
                        </div>
                    </div>
                    <!-- RIGHT SECTION -->
                    <div class="main-hero--right-item d-flex align-items-center">
                        <img src="/img/man-g6d5006abd_1920.jpg"> 
                    </div>
                </div>
            </div>


            <!-- SECTION ABOUT-->
            <div class="main-about container d-flex" id="about">
                <!--LEFT SECTION -->
                <div class="about--left-item">
                    <img src="/img/yo.jpeg" alt="">
                </div>
                <!-- RIGHT ITEM-->
                <div class="about--right-item pl-5">
                    <h3><strong>About Me</strong></h3>
                    <p><strong>Fullstack Web Developer</strong></p>
                    <br>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, eos autem debitis similique maiores commodi animi minima quae eaque laboriosam nam aliquam optio dignissimos repudiandae numquam sapiente quasi praesentium nemo.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, eos autem debitis similique maiores commodi animi minima quae eaque laboriosam nam aliquam optio dignissimos repudiandae numquam sapiente quasi praesentium nemo.</p>
                    <a class="button-see-work" href="#portfolio"><button class="button-primary">See Work</button></a>
                </div>
            </div>

            <!-- TECHNOLOGIES -->
            <div class="main--technologies" >
                <div class="container d-flex justify-content-around align-items-center">
                    <img class="tech--item" src="/img/985px-Laravel.svg.png" alt="">
                    <img class="tech--item" src="/img/PHP-logo.svg.png" alt="">
                    <img class="tech--item" src="/img/Vue.js_Logo_2.svg.png" alt="">
                    <img class="tech--item" src="/img/1024px-MySQL.ff87215b43fd7292af172e2a5d9b844217262571.png">
                    <img class="tech--item" src="/img/2560px-AmazonWebservices_Logo.svg.png">
                    <img class="tech--item" src="/img/nodejs-logo-FBE122E377-seeklogo.com.png">
                </div>
            </div>


            <!-- LATEST PROJECTS -->
            <div class="main--projects container" id="portfolio">
                <h1 class="text-center">My Projects</h1>
                
                <ul class="projects--tab mt-5 text-center">
                    @foreach ($skills as $skill)
                    <li>{{$skill->name}}</li>
                    @endforeach
                </ul>

                <!-- Projects Table -->
                <div class="row mt-5">
                    @foreach ($projects as $project)
                    <div class="col-4 mt-4">
                        <div class="projects--card card">
                            <div class="projects--card-thumb">
                                <img src="{{$project->url_thumbnail}}" alt="">
                            </div>
                            <div class="projects--card-title">
                                @foreach($project->skills as $skillKey => $skill)
                                    @if($skillKey == (count($project->skills) -1) ) 
                                        {{$skill->name}}
                                    @else
                                        {{$skill->name}},
                                    @endif
                                @endforeach
                            </div>
                            <div class="projects--card-description">
                                <p class="name font-weigth-bold">{{$project->name}}</p>
                                <a href="{{$project->url_github}}" class="external-link" target="_blank">
                                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                    {{$project->url_github}}
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach 
                </div>

            </div>

            <!-- SERVICES -->
            <div class="main--services container" id="services">
                <h2 class="text-center">
                    What I do for clients
                </h2>

                <!-- CARD SERVICES -->
                <div class="row mt-5">
                    <div class="services--card--container col-3">
                        <div class="services--card">
                            <div class="services--card-icon">
                            <i class="fa-solid fa-terminal"></i>
                            </div>
                            <div style="height: 50px;"></div>
                            <div class="services--card-title">
                                <h5> Frontend Development </h5>
                            </div>
                            <div class="services--card-description">
                                I build pages with good quality design, and nice experience with user.
                            </div>
                        </div>
                    </div>

                    <div class="services--card--container col-3">
                        <div class="services--card">
                            <div class="services--card-icon">
                                <i class="fa-solid fa-cloud"></i>
                            </div>
                            <div style="height: 50px;"></div>
                            <div class="services--card-title">
                                <h5> Cloud Management </h5>
                            </div>
                            <div class="services--card-description">
                                With AWS, it's possible to manage your service and provide your products to your clients.
                            </div>
                        </div>
                    </div>
                    <div class="services--card--container col-3">
                        <div class="services--card">
                            <div class="services--card-icon">
                                <i class="fa-sharp fa-solid fa-microchip"></i>
                                
                            </div>
                            <div style="height: 50px;"></div>
                            <div class="services--card-title">
                                <h5> Backend Development </h5>
                            </div>
                            <div class="services--card-description">
                                I build services to manage all your data about your products.
                            </div>
                        </div>
                    </div>                    
                    <div class="services--card--container col-3">
                        <div class="services--card">
                            <div class="services--card-icon">
                                <i class="fa-solid fa-gears"></i>
                            </div>
                            <div style="height: 50px;"></div>
                            <div class="services--card-title">
                                <h5> High Level Process and communication </h5>
                            </div>
                            <div class="services--card-description">
                                I have experience developing projects from zero to production.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="main--contact" id="contact">
                <div class="container">
                    <h2 class="text-center">
                        Contact Me
                    </h2>

                    <!-- CARD SERVICES -->
                    <div class="row mt-5">
                        <div class="col-6">
                            <div class="contact--question d-flex">
                                <div class="icon--contact d-flex align-items-start">
                                    <i class="fa-regular fa-envelope mt-2"></i>
                                </div>
                                <div class="contact--question-body ml-4">
                                    <h4 class="question-body--title"><strong> Have a question?</strong></h4>
                                    <span>I am here to help you</span>
                                    <p class="question-body--email">Email me at victormgb3099@gmail.com</p>
                                </div>
                            </div>
                            <div class="contact--question d-flex mt-5">
                                <div class="icon--contact d-flex align-items-start">
                                    <i class="fa-regular fa-envelope mt-2"></i>
                                </div>
                                <div class="contact--question-body ml-4">
                                    <h4 class="question-body--title"><strong> My Current Location</strong></h4>
                                    <span>Anzoategui, Venezuela</span>
                                    <p class="question-body--email">Serving Clients Worldwide</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 d-flex justify-content-end">
                            <div class="contact-form">
                                <form action="{{url('sendMail')}}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-6">
                                            <input type="text" class="form-control" placeholder="Your Name" name="name">
                                        </div>
                                        <div class="col-6">
                                            <input type="text" class="form-control" placeholder="Your Email" name="email">
                                        </div>

                                        <div class="col-12 mt-4">
                                            <textarea name="message" id="" cols="30" rows="10" placeholder="Your message" class="form-control"></textarea>
                                            <button class="button-primary mt-3" type="submit">Send Message</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


            <footer class="container d-flex justify-content-between align-items-center">
                <div class="navbar--logo">
                    <h4><strong>VMGB Web</strong></h4>
                </div>

                <p class="footer-text mt-2">©2023 VMGB Web All right reserved</p>
            </footer>
            
        </main>


        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>        
    </body>
</html>
