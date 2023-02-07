<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&family=Poppins:wght@400;500;600;700&family=Roboto+Slab&family=Source+Sans+Pro:ital,wght@1,300&family=Ubuntu:wght@500;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital@1&family=Merriweather&family=Poppins:wght@400;500;600;700&family=Roboto+Slab&family=Source+Sans+Pro:ital,wght@1,300&family=Ubuntu:wght@500;700&display=swap" rel="stylesheet">
    
    

    <title>Pratik Prakash</title>
</head>
<body>
    <div class="container">
        <div id="sidebar">
            <div>
                <span></span>
            </div>
            <ul class="n">
                <i onclick="closemenu()" class="fa fa-times" id="cross"></i>
                <li><a href="#home" class="active"><i class="fa fa-home"></i>Home</a></li>
                <li><a href="#about" class="active"><i class="fa fa-file-text-o"></i>My Intro</a></li>
                <li><a href="#service" class="active"><i class="fa fa-cogs"></i>Services</a></li>
                
                <li><a href="#certifacate" class="active"><i class="fa fa-wpforms"></i>Certifacate</a></li>
                <li><a href="#contact" class="active"><i class="fa fa-envelope"></i>Contact Me</a></li>
            </ul>
        </div>
        <div class="main">
            <section class="home active" id="home">
                <i onclick="openmenu()" class="fa fa-bars" id="menu"></i>
                <div class="intro">
                    <div class="row">
                        <div class="homeinfo">
                            <h3 class="start">Hi, my name is</h3>
                            <h2 class="name">Pratik Prakash.</h2>
                            <p class="prof">I build things related to web</p>
                            <h4 class="aboutme">I'm a full stack web developer with lots of enthusiasm.</h4>
                            <button href="cv.html" class="buttom">Downlod CV</button>
                            <button href="contact.html" class="buttom">Contact me</button>
                        </div>
                        <div class="imgp">
                            <img src="pratik.jpg" alt="" width="70%">
                        </div>
                    </div>
                    
                </div>
                
            </section>
            <section class="about section" id="about">
                <div class="intro">
                    <div class="row">
                        <div class="about-con">
                            <h2 class="about-h"><span>About</span>Me</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="about-text">
                            <h3>I'm Pratik Prakash and<span> Web Developer</span></h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit quisquam similique veniam, earum voluptatum ullam veritatis expedita vitae voluptas quas aliquam, temporibus esse exercitationem aspernatur unt?</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="information">
                            <h3><span>name</span> : Pratik Prakash</h3>
                            <h3><span>age</span> : 21</h3>
                            <h3><span>religioun</span> : hindu</h3>
                            <h3><span>language</span> : Hindi</h3>
                            <h3><span>state</span> : Ramgarh</h3>
                            <h3><span>state</span> : Jharkhand</h3>
                        </div>
                        <div class="skill">
                            <div class="box">
                                <span>1+</span>
                                <h3>Intership</h3>
                            </div>
                            <div class="box">
                                <span>4+</span>
                                <h3>Certificate</h3>
                            </div>
                            <div class="box">
                                <span>39+</span>
                                <h3>GFG</h3>
                            </div>
                            <div class="box">
                                <span>0+</span>
                                <h3>Project</h3>
                            </div>
                        </div>   
                    </div>
                </div>
            </section>
            <section class="service section" id="service" style="background-color: #fff; color: #111;">
                <div class="intro">
                    <h3 class="title">Service</h3>
                    <div class="row">
                        <div class="boxs">
                            <i class="fa fa-edit"></i>
                            <h3 class="edit">front End development</h3>
                            <div class="para">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque atque illum fuga quia earum ad sequi cum a quis placeat eveniet, distinctio e.</p>
                            </div>
                            <a href="">learn</a>
                        </div>
                        <div class="boxs">
                            <i class="fa fa-code"></i>
                            <h3 class="edit">back End development</h3>
                            <div class="para">
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur nisi molestias illo accusantium est perspiciatis voluptate non. Libe,m  ad.</p>
                            </div>
                            <a href="">learn</a>
                        </div>
                        <div class="boxs">
                            <i class="fa fa-file-code-o"></i>
                            <h3 class="edit">full stack development</h3>
                            <div class="para">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi dolorem tempora, quasi provident, eius fuga repellendus sapientligendi nosted!</p>
                            </div>
                            <a href="">learn</a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="certifacate section" id="certifacate">
                <h2 class="title">Certifacate</h2>
                <div class="slider">
                    <i onclick="prev()" class="fa fa-angle-left" id="arro" style="font-size: 90px; position: relative; padding: 0px 0px; color: rgba(89, 226, 10, 0.949);"></i>
                    <img class="slider-img" src="salesforce.jpeg" alt="" width="40%" style="position: relative;">
                    <i onclick="next()" class="fa fa-angle-right" id="arro" style="font-size: 90px; position: relative; padding: 0px 0px; color: rgba(89, 226, 10, 0.949);"></i>
                </div>
            </section>
            <section class="contact section" id="contact" style="background-color: #fff; color: #111;">
                <div class="intro">
                    <h2 class="title">Contact me</h2>
                    <div class="contact-content">
                        <div class="column left">
                            <div class="text">Get in Touch</div>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos harum corporis fuga corrupti. Doloribus quis soluta nesciunt veritatis vitae nobis?</p>
                            <div class="icons">
                                <div class="row3">
                                    <i class="fas fa-user"></i>
                                    <div class="info">
                                        <div class="head">Name</div>
                                        <div class="sub-title">Pratik Prakashi</div>
                                    </div>
                                </div>
                                <div class="row3">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <div class="info">
                                        <div class="head">Address</div>
                                        <div class="sub-title">Ramgarh,Jharkhand</div>
                                    </div>
                                </div>
                                <div class="row3">
                                    <i class="fas fa-envelope"></i>
                                    <div class="info">
                                        <div class="head">Email</div>
                                        <div class="sub-title">singhpratik3696@gmail.com</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column right">
                            <div class="text">Message me</div>
                            <form action="/project/portfolio.php" method="post">
                                <div class="fields">
                                    <div class="field name">
                                        <input type="text"  name="name" id="name" placeholder="Name" required />
                                    </div>
                                    <div class="field email">
                                        <input type="email" name="email" id="email" placeholder="Email" required />
                                    </div>
                                </div>
                                <div class="field">
                                    <input type="text" name="subject" id="subject" placeholder="Subject" required />
                                </div>
                                <div class="field textarea">
                                    <textarea cols="30" rows="10"  name="comment" id="comment" placeholder="Message.." required>
                                    </textarea>
                                </div>
                                <div class="button-area">
                                    <button type="submit" id="submit">Send message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <?php
                        if($_SERVER['REQUEST_METHOD']=='POST'){
                            $name=$_POST['name'];
                            $email=$_POST['email'];
                            $subject=$_POST['subject'];
                            $comment=$_POST['comment'];



                            $servername="localhost";
                            $username="root";
                            $password="";
                            $database="database_form";

                            $conn=mysqli_connect($servername,$username,$password,$database);

                            if(!$conn){
                                die('sorry we failed to connect:'. mysqil_connect_error());
                            }
                            else{
                                echo"connection was succesfully";
                            

                                $sql="INSERT INTO `database_table` (`Name`, `Email`, `Subject`, `Comment`) VALUES ('$name', '$email', '$subject','$comment')";
                                $result=mysqli_query($conn,$sql);


                                if($result){
                                    echo"successfulll";
                                }
                                else{
                                    echo"the record was not inserted succesfully becource of error....>". mysqli_error($conn);
                                }
                            }
                        }
                        ?>
                    <div class="social">
                        <div class="row1">
                            <a href="#" class="fa fa-facebook"></a>
                            <a href="#" class="fa fa-twitter"></a>
                            <a href="#" class="fa fa-google"></a>
                            <a href="#" class="fa fa-linkedin"></a>
                            <a href="#" class="fa fa-youtube"></a>
                            <a href="#" class="fa fa-instagram"></a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <footer>
        <span>Created By <a href="https://www.codingnepalweb.com">PratikPrakash</a> | <span class="far fa-copyright"></span> 2020 All rights reserved.</span>
    </footer>
    <script src="indexp.js"></script>
    
</body>
</html>
