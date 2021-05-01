<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant</title>
    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ultra&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Dancing+Script&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

     <!--Owl Carousel CDN-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />

</head>
<body>
    <div class="container" id="home" style="margin-bottom: 15vh;">
        <div class="nav">
            <li id="nav-logo">
                <a class="nav-logo" href="#" style="font-family: 'Ultra', serif; font-size:20px;">Oregano</a>
            </li>
            <li id="nav-item">
                <a  href="#home" style="font-family: 'Courgette', cursive; font-size:20px;">Home</a>
                <a  href="#about" style="font-family: 'Courgette', cursive; font-size:20px;">About</a>
                <a  href="#Menu" style="font-family: 'Courgette', cursive; font-size:20px;">Menu</a>
                <a  href="#Features" style="font-family: 'Courgette', cursive; font-size:20px;">Features</a>
                <a  href="#Contact" style="font-family: 'Courgette', cursive; font-size:20px;">Contact Us</a>
            </li>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-3">
                    <h1 style="font-family: 'Courgette', cursive;font-family: 'Dancing Script', cursive; color:white;font-size:55px;">Oregano Cafe</h1>
                    <h5 style="color: black;">   The best Experience</h5>
                    <input type="submit" class="btn btn-light" value="Make A Reservation">
                </div>
                <div class="col-9">
                    <img src="pokhara.jpeg">
                </div>
            </div>
        </div>
    </div>


    <div class="container" id="about" style="margin-bottom: 15vh;">
       <div class="row">
           <div class="col-6">
                <h6>
                    __About Us
                </h6>
                <h3>
                    We Leave A Delicious Memory For You
                </h3>
                <h7>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae aut iure illum quod facilis odit sed praesentium laudantium? Eius maxime odio iure necessitatibus minima dolor, reprehenderit sequi amet quidem veniam?Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus quas aut numquam adipisci officiis est consectetur cupiditate iste? Exercitationem pariatur ea deleniti voluptates? Provident impedit architecto obcaecati debitis dignissimos atque?

                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia corporis expedita praesentium nesciunt architecto minus maxime, libero dolores ut sed aliquid, tempora illo commodi sint, aspernatur laborum voluptatum placeat rerum!
                </h7><br><br><br>
                <img src="sushi.jpg" style="width: 32%; padding:5px;">
                <img src="fry.jpg"  style="width: 32%;padding:5px;">
                <img src="magazine.jpg"  style="width: 32%;padding:5px;">
           </div>
           <div class="col-6">
                <img src="oregano.jpg">
           </div>
       </div>
    </div>

    <!-- Menu -->
    <section id="Menu"> 
            <div class="container">
                <h4>
                    __Menu
                </h4>
                <hr>
                <!--PS4 carousel Start-->

                <div class="owl-carousel owl-theme" id="PS4">
                    <div class="item py-2 bg-light">
                        <div class="product font-rale">
                            <a href="#">
                                <img src="1.jpg" alt="product" class="img-fluid">
                            </a>
                            <div class="text-center">
                                <h6>
                                    Fish
                                </h6>
                                <div class="price py-2">
                                    <span>R.s. 150</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item py-2 bg-light">
                        <div class="product font-rale">
                            <a href="#">
                                <img src="2.jpg" alt="product" class="img-fluid">
                            </a>
                            <div class="text-center">
                                <h6>
                                    Jhol-Momo
                                </h6>
                                <div class="price py-2">
                                    <span>R.s. 150</span>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="item py-2 bg-light">
                        <div class="product font-rale">
                            <a href="#">
                                <img src="3.jpg" alt="product" class="img-fluid">
                            </a>
                            <div class="text-center">
                                <h6>
                                    Steam Momo
                                </h6>
                                <div class="price py-2">
                                    <span>R.s. 120</span>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="item py-2 bg-light">
                        <div class="product font-rale">
                            <a href="#">
                                <img src="4.jpg" alt="product" class="img-fluid">
                            </a>
                            <div class="text-center">
                                <h6>
                                   Burger
                                </h6>
                                <div class="price py-2">
                                    <span>R.s. 100</span>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <div class="item py-2 bg-light">
                        <div class="product font-rale">
                            <a href="#">
                                <img src="5.jpg" alt="product" class="img-fluid">
                            </a>
                            <div class="text-center">
                                <h6>
                                   Chicken Wings
                                </h6>
                                <div class="price py-2">
                                    <span>R.s. 200</span>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="item py-2 bg-light">
                        <div class="product font-rale">
                            <a href="#">
                                <img src="6.jpg" alt="product" class="img-fluid">
                            </a>
                            <div class="text-center">
                                <h6>
                                   Chowmin
                                </h6>
                                <div class="price py-2">
                                    <span>R.s. 100</span>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>

                <!--PS4 carousel End-->

            </div>
        </section>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- Addition of Js of Owl carousel-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>

    <!--JS ISOTOP CDN-->
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew==" crossorigin="anonymous"></script>
    <script src="./script.js"></script>
</body>
</html>