<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<style>
    .content p{
        font-size: 1.2em;
    font-family: 'Big Shoulders Text', cursive;
    }
    .nav{
background-color:  rgb(131, 55, 55);
z-index: 9;
padding-left: 50px;
padding-right: 50px;
display: flex;
box-shadow: 0px 3px 65px 0px(0,0,.15);
}
.nav_top{
    position: fixed;
    top: 0;
    right: 0;
    left: 0;
}
.nav_side{
width:80%;
margin-top: 30px;


}
.nav_side a{
    float:right;
    text-decoration: none;
    margin-right: 20px;
color:orange;
    font-weight: bold;
    font-size: 17px;
    font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif ;
        }
.nav_side a:hover {
        background-color:yellow;
        transition: all 1s ease;
        }
    .testi{
    padding: 50px;
}
.testi h2{
    color: black;
    font-size: 35px;
    text-align: center;
    padding: 10px;
    text-transform: uppercase;
    font-family: cursive;
}
.testi .testi_container{
    margin-right: 10%;
    margin-left: 10%;
    text-align: center;
}
.testi .testi_container .carousel-inner{
    background-color: whitesmoke;
    box-shadow: none;
}
.testi .testi_container .item{
    width: 100%;
margin: 20px;
background-color: whitesmoke;
box-shadow: none;
}
.testi .testi_container .item .item_img{
    width: 100%;
    height: 250px;
    text-align: center;
    overflow: hidden;
}
.testi .testi_container .item .item_img img{
    width: 50%;
    height: 250px;
    border-radius: 50%; 
}
.testi .testi_container .item .item_content{
    text-align: center;
}.testi .testi_container .item .item_content h3{
    padding: 10px;
    font-size: 25px;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
}
footer{
    background-color: #99A3A4;
    padding: 50px;
    margin-top: 20px;
}

footer .pages{
    text-align: center;
}
footer .pages h3{
    color: black;
    font-size: 20px;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    padding: 5px;
}
footer .pages a{
    text-decoration: none;
    margin: 10px;
    color: purple;
    font-size: 15px;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
}
footer .pages a:hover{
    color:white;
}
footer .doc{
    text-align: center;
}
footer .doc h3{
    color: black;
    font-size: 20px;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    padding: 5px;
}
footer .doc a{
    text-decoration: none;
    margin: 10px;
    color: purple;
    font-size: 15px;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
}
footer .doc a:hover{
    color:white;
}
footer .social{
    text-align: center;
}
footer .social h3{
    color: black;
    font-size: 20px;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    padding: 5px;
}
footer .social a{
    text-decoration: none;
    color: purple;
    font-size: 30px;
    margin: 10px;
}
footer .social a:hover{
    color:white;
}
footer .contact{
    text-align: center;
}
footer .contact h3{
    color: black;
    font-size: 20px;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    padding: 5px;
}
footer .contact a{
    text-decoration: none;
    margin: 10px;
    color: purple;
    font-size: 15px;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
}
footer .contact a:hover{
    color:white;
}
    </style>
<body>
<nav class="nav nav_top">
           
                <div class="nav_side">
                    <a href="about.php">About Us</a>
                    <a href="career.php">Career</a>
                    <a href="candidate.php">Candidate Applied</a>
                    <a href="contact.php"> Contact Us</a>
                  
     
                </div>
            </nav>
<div class="testi">
            <h2> LOOKING FOR A JOB</h2>
            <div class="testi_container">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                      <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                      <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                    </ol>
                  
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                      <div class="item active">
                          <div class="item_img">
                            <img src="job0.jpg" alt="">
                          </div>
                <div class="item_content">
                    <h3>Find your dream job</h3>
                    
                </div>
                        </div>
                      
                      <div class="item">
                        <div class="item_img">
                            <img src="job1.jpg" alt="">
                          </div>
                <div class="item_content">
                    <h3>Find your dream job</h3>
                    
                </div>
                      </div>
                      <div class="item">
                        <div class="item_img">

                        <img src="job2.jpg" alt="">
                          </div>
                <div class="item_content">
                    <h3>Find your dream job</h3>
                    
                    </div></div>
                    <div class="item">
                        <div class="item_img">

                        <img src="job3.jpg" alt="">
                          </div>
                <div class="item_content">
                    <h3>Find your dream job</h3>
                    
                    </div>
                  </div>
                  <div class="item">
                    <div class="item_img">

                    <img src="job4.jpg" alt="">
                      </div>
            <div class="item_content">
                <h3>Find your dream job</h3>
                
                </div>
              </div>
                  </div>
                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
            </div>
        </div>
        <div class="content">
        <p>The online job portal application allows job seekers and recruiters to connect.The application provides the ability for job seekers to create their accounts, upload their profile and resume, search for jobs, apply for jobs, view different job openings. The application provides the ability for companies to create their accounts, search candidates, create job postings, and view candidates applications.
            </p>
            <p>
              This website is used to provide a platform for potential candidates to get their dream job and excel in yheir career.
              This site can be used as a paving path for both companies and job-seekers for a better life .
              
            </p>
</div>
        <footer>
 
    <div class="pages">
        <h3>Pages</h3>
<a href="about.php">About Us</a>|
<a href="career.php">Jobs</a>|
<a href="candidate.php">Candidate Applied</a>|
<a href="register.php">Register</a>|
<a href="login.php">login</a>
    </div>
    <div class="doc">
        <h3>Document</h3>
        <a href="about.php">privacy policy</a>|
        <a href="about.php">Terms of use</a>|
        <a href="about.php">Refund of policy</a>
    </div>
    <div class="social">
        <h3>Follow Us</h3>
        <a href="https://www.instagram.com/" target="blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>|
        <a href="https://www.facebook.com" target="blank"><i class="fa fa-facebook-official" aria-hidden="true"></i>
        </a>|
        <a href="https://www.twitter.com/" target="blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>|
        <a href="https://www.youtube.com/" target="blank"><i class="fa fa-youtube" aria-hidden="true"></i></a>
    </div>
    <div class="contact">
        <h3>Contact Us</h3> 
        <a href="https://www.whatsapp.com/" target="blank"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
        <a href="mailto: support@Rstar.p" target="blank"><i class="fa fa-envelope" aria-hidden="true"></i></a>
        <a href="tel: +91 7689543256" target="blank"><i class="fa fa-phone-square" aria-hidden="true"></i></a>
    </div>
    <hr>
    <p>Copyright &copy; 2023 Rstar. All rights reserved</p>
</footer>




</body>
</html>