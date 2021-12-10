<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DigiVid Media Solution</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="https://use.fontawesome.com/1861f71565.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-main navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                <a class="navbar-brand" href="#">DigiVid Media Solutions</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class=" navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about-us">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#our-services">
                            Our Services
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact-us">Contact Us</a>
                        </li>
                    </ul>
                    <ul class=" navbar-nav me-2 mb-2 mb-lg-0 d-flex">
                        <li class="nav-item">
                            <i class="fa fa-facebook mx-1"></i>
                        </li>
                        <li class="nav-item">
                            <i class="fa fa-instagram mx-1"></i>
                        </li>
                        <li class="nav-item">
                            <i class="fa fa-youtube mx-1"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <i class="fa fa-linkedin mx-1"></i>
                        </li>
                    </ul>
                    <!-- <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                    </form> -->
                </div>
                </div>
        </nav>
    </header>

    <div id="carouselExampleIndicators" class="carousel slide pb-4" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/kal-visuals-jA7iWRaJruA-unsplash.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="images/nejc-soklic-2jTu7H9l6JA-unsplash.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="images/jakob-owens-so93GwxYr8s-unsplash.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
        <div id="about-us"></div> <!--for navigation to about us because navbar is sticky -->
        <div class="carousel-foreground">
            <div class="navbar-secondary container-fluid px-4 pt-5">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container-fluid">
                    <a class="navbar-brand" href="#" style="font-size: 1.5rem;">DigiVid Media Solutions</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class=" navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about-us">About Us</a>
                        </li>
                        <li class="nav-item" style="background-color: rgb(180, 0, 0); border-radius: 10px;">
                            <a class="nav-link " href="#our-services">
                            Our Services
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact-us">Contact Us</a>
                        </li>
                        </ul>
                        <ul class=" navbar-nav me-2 mb-2 mb-lg-0 d-flex">
                            <li class="nav-item">
                                <i class="fa fa-facebook mx-1"></i>
                            </li>
                            <li class="nav-item">
                                <i class="fa fa-instagram mx-1"></i>
                            </li>
                            <li class="nav-item">
                                <i class="fa fa-youtube mx-1"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <i class="fa fa-linkedin mx-1"></i>
                            </li>
                        </ul>
                        <!-- <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                        </form> -->
                    </div>
                    </div>
                </nav>
            </div>
            <div class="slogan container">
                <h3>Digi<span style="color: red; font-size: 2rem; font-weight: bold;">V</span>id Media</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis quam repellat velit minima iste fugit debitis rerum ipsum, dolore ea! Minus quia repudiandae aspernatur ipsa natus, nam fuga est nobis!
                </p>
            </div>
        </div>
    </div>
    
    <div class="container" style="background: linear-gradient(-135deg, red 5%, transparent 5%);">
        <h1 style="color: rgb(240, 0, 0); text-align: center;"><u>About Us</u></h1>
        <div class="about-us pb-4" style="background: #fff;">
            <div class="about-us-img">
                <img src="images/lisanto-ENUTLSZGVhY-unsplash.jpg" alt="">
            </div>
            <div class="about-us-content">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi placeat veniam error facilis, sunt eligendi ipsam magni voluptatibus eveniet repudiandae nihil delectus corrupti quidem nobis repellendus enim dolores rem animi.
                Cum nihil maxime dolores. Itaque nam perferendis voluptas voluptates quasi at laborum aliquam nisi officia, iusto corrupti similique ipsam veniam possimus inventore recusandae consequatur. Voluptas magnam asperiores expedita in minima!</p>
            </div>
            <div id="our-services"></div> <!--for navigation to services because navbar is sticky -->
        </div>   
    </div>

    <div class="container pb-4"  style="background: linear-gradient(135deg, red 5%, transparent 5%);">
        <h1 style="color: rgb(240, 0, 0); text-align: center;"><u>Our Services</u></h1>
        <div class="services">
            <div class="services-box">
                <img src="images/corporate-films.jpg" alt="">
                <div class="services-box-text">
                    <h3>Corporate Films</h3>
                </div>
            </div>
            <div class="services-box">
                <img src="images/music-film.jpeg" alt="">
                <div class="services-box-text">
                    <h3>Music Films</h3>
                </div>
            </div>
            <div class="services-box">
                <img src="images/testimonial-video.jpg" alt="">
                <div class="services-box-text">
                    <h3>Testimonial Films</h3>
                </div>
            </div>
            <div class="services-box">
                <img src="images/product-video.jpg" alt="">
                <div class="services-box-text">
                    <h3>Product Films</h3>
                </div>
            </div>
            <div class="services-box">
                <img src="images/infographic-animation.jpg" alt="">
                <div class="services-box-text">
                    <h3>Infographic Animations</h3>
                </div>
            </div>
            <div class="services-box">
                <img src="images/digital-videos.jpg" alt="">
                <div class="services-box-text">
                    <h3>Digital Films</h3>
                </div>
            </div>  
            <div id="contact-us"></div> <!--for navigation to services because navbar is sticky --> 
        </div>
    </div>

    <div class="container-fluid mx-0 px-0 pb-4">
        <div class="work-process">
            <h1 style="color: rgb(240, 0, 0); text-align: center;"><u>Work Process</u></h1>
            <p style="text-align: center;">To make life of our clients easier, we have developed a comprehensive workflow.</p>
            <div class="work-process-cards">
                <div class="card">
                    <img src="images/idea.jpg" alt="">
                    <div class="card-details">
                        <h6>Get Ideas</h6>
                        <p>Every Project Starts with a great idea.</p>
                    </div> 
                </div>
                <div class="card">
                    <img src="images/discussion.jpg" alt="">
                    <div class="card-details">
                        <h6>Discuss</h6>
                        <p>Your inputs are most valuable assets.</p>
                    </div> 
                </div>
                <div class="card">
                    <img src="images/planning.jpg" alt="">
                    <div class="card-details">
                        <h6>Planning</h6>
                        <p>A thoughtfull execution of Plan ensures timely delievery.</p>
                    </div> 
                </div>
                <div class="card">
                    <img src="images/production.jpg" alt="">
                    <div class="card-details">
                        <h6>Production</h6>
                        <p>Lights, Camera, Action! All magic happens here.</p>
                    </div> 
                </div>
                <div class="card">
                    <img src="images/post production.jpg" alt="">
                    <div class="card-details">
                        <h6>Post Production</h6>
                        <p>Where every thing is creatively stitched together.</p>
                    </div> 
                </div>
                <div class="card">
                    <img src="images/approval.jpg" alt="">
                    <div class="card-details">
                        <h6>Approval</h6>
                        <p>Your approval really means a lot to our entire team.</p>
                    </div> 
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid px-3 py-3" style="background: rgb(240, 240, 240);">
        <div class="container-fluid" style="background: linear-gradient(-135deg, red 5%, transparent 5%);">
            <h1 style="text-align: center;">Ready to get to work??</h1>
            <p style="text-align: center;">Contact Us today <a href="" style="color: rgb(180, 0, 0); text-decoration: none;">dummymain@dummydomain.com</a></p>
            <div class="contact-us">
                <form class="px-4">
                    <div class="mb-3 row">
                    <div class="col">
                        <label for="fname" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="fname" aria-describedby="name" required>
                    </div>
                    <div class="col">
                        <label for="lname" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="name" aria-describedby="lname" required>
                    </div>
                    </div>
                    <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <!-- <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div> -->
                    <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" required></textarea>
                    </div>
                    
                    <button type="submit" class="btn mx-auto my-4 " style="display: block; margin: auto; width: 40%; background:rgb(180, 0, 0);color: #fff;">Submit</button>
                </form>     
            </div>
        </div>
    </div>

    <footer class="py-3" style="background: rgb(27, 27, 27);">
        <p style="text-align: center; color: #fff;">All Rights Reserved. DigiVid Media Solutions (Terms of Use)</p>
        <p style="text-align: center; color: #fff;"><a href="https://adjointindia.com/" style="color: inherit; cursor: pointer;">Powered by AdJoint India</a></p> 
    </footer>

   
   
   
   
   
   <script>
        window.onscroll=function(e)
        {
          if(screen.width<480){
            document.getElementsByTagName('header')[0].style.display='block';
            document.getElementsByClassName('navbar-secondary')[0].style.display='none';
          }
          else{
            if(window.scrollY>=70)
            
            {
            document.getElementsByTagName('header')[0].style.display='block';
            document.getElementsByClassName('navbar-secondary')[0].style.display='none';
            }
    
            else{
            document.getElementsByTagName('header')[0].style.display='none';
            document.getElementsByClassName('navbar-secondary')[0].style.display='block';
            }
          }
            
        }
    
        
      </script>  
</body>
</html>