<?php 

session_start();
session_destroy();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Find best restaurants nearby you</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" media="screen and (max-width: 1170px)" href="css/phone.css">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai|Bree+Serif&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <script src="map.js"></script>
</head>

<body>
  
   
    <nav id="navbar">
       
        <ul>
            <li class="item"><a href="#home">Home</a></li>
            <li class="item"><a href="#services-container">About Us</a></li>
            <li class="item"><a href="#client-section">Restaurants</a></li>
            <li class="item"><a href="#contact">Contact Us</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            
            <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
          </ul>
    </nav>
    <section id="home">
    <div class="container">
        <br>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
          </ol>
      
          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
      
            <div class="item active">
              <img src="res1.jpg" alt="Chania" width="460" height="345">
              <div class="carousel-caption">
                <h3>Chania</h3>
               
                <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
              </div>
            </div>
      
            <div class="item">
              <img src="res2.jpg" alt="Chania" width="460" height="345">
              <div class="carousel-caption">
                <h3>Chania</h3>
                <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
              </div>
            </div>
          
            <div class="item">
              <img src="res3.jpg" alt="Flower" width="460" height="345">
              <div class="carousel-caption">
                <h3>Flowers</h3>
                <p>Beautiful flowers in Kolymbari, Crete.</p>
              </div>
            </div>
      
            <div class="item">
              <img src="res4.jpg" alt="Flower" width="460" height="345">
              <div class="carousel-caption">
                <h3>Flowers</h3>
                <p>Beautiful flowers in Kolymbari, Crete.</p>
              </div>
            </div>
        
          </div>
      
          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
   
        
    </section>

    <section id="services-container">
        <h1 class="h-primary center">About Us</h1>
        <div id="services">
              <img src="https://images.unsplash.com/photo-1552566626-52f8b828add9?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8cmVzdGF1cmFudHxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" id="aboutimg" alt="IMAGE">
              <div class="aboutcontainer"><p> illo sint temporibus repellat ullam nesciunt expedita! Eius tempore corrupti assumenda eveniet architecto! Modi animi sit nisi, id provident reiciendis quis aspernatur, labore reprehenderit nulla ab ex obcaecati, aperiam nostrum excepturi? Beatae earum nemo vitae necessitatibus eveniet dolorem enim, voluptate aliquam sequi asperiores. Perferendis cumque quidem, esse minus animi ab quia amet! Similique non porro saepe est voluptates adipisci reprehenderit accusantium fugiat minima. Nam neque sed reprehenderit ex et totam eos laudantium non? Porro autem cupiditate molestias mollitia similique itaque iusto animi quas optio veritatis. Quod voluptates praesentium ad. Odit deleniti ipsam nemo accusantium ad magni asperiores voluptatem, fuga porro temporibus, corrupti eaque perferendis voluptas incidunt facilis! Quaerat deleniti tempore, pariatur natus nemo quod ullam, rem aliquid consectetur eos fugiat excepturi inventore, quasi soluta facilis voluptatem commodi animi consequuntur ipsam voluptatum. Sequi quo labore, perspiciatis quidem molestiae tempore fugiat hic, non rem quis facere qui vero dolor error, ullam inventore! Ad architecto facere dolore natus, expedita dignissimos, ut illum numquam fuga ducimus assumenda adipisci id nam porro, quae ratione a ab doloribus exercitationem dolores vel nemo itaque repellat voluptas. Maiores qui ratione ut!</p>
              </div>
            
          </div>
        </div>
    </section>
    <section id="client-section">
        <blockquote class="blockquote text-center">
             <h1  class="h-primary center">Find Restaurants</h1>
          </blockquote>
     <div class="map-responsive">

       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28310.232394887775!2d77.6500206395508!3d27.507246200000015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3973717410455483%3A0x6ca97e81be75ad36!2sDosa%20Plaza%20Divinity!5e0!3m2!1sen!2sin!4v1625229987758!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="true" loading="lazy"></iframe>
    </div>
    </section>

    <section id="contact">
        <h1 class="h-primary center">Contact Us</h1>
        <div class="ccontact">
        <?php 
                            $Msg = "";
                            if(isset($_GET['error']))
                            {
                                $Msg = " Please Fill in the Blanks ";
                                echo '<div class="alert alert-danger">'.$Msg.'</div>';
                            }

                            if(isset($_GET['success']))
                            {
                                $Msg = " Your Message Has Been Sent ";
                                echo '<div class="alert alert-success">'.$Msg.'</div>';
                            }
                        
                        ?>
          <p><b>Fields marked with * are necessary to fill</b></p><hr>
          <form name="form" class="form" id="form" action="contact.php" method="post">
          <p>Name: *<input type="text" name="UName" placeholder="Enter your name" required></p>
         
          <p>Email Id: *<input type="email" name="Email" id="email" placeholder="Enter your email id" required></p>
          <p>Message: <input type="text" name="msg" id="Message" placeholder="Any Message" ></p>
          <input type="submit" value="SUBMIT" name="btn-send" onclick="validation()">
          <input type="reset" value="CANCEL">
      </form>
      </div>
    </section>

    <footer>
        <div class="center">
            Copyright &copy;  All rights reserved!
        </div>
    </footer>
   
</body>

</html>