<?php require_once "controllerUserData.php"; ?>
<?php 


$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location: login-user.php');
}

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
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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
            
            <li><a href="logout-user.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
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
              <div class="aboutcontainer" ><p> illo sint temporibus repellat ullam nesciunt expedita! Eius tempore corrupti assumenda eveniet architecto! Modi animi sit nisi, id provident reiciendis quis aspernatur, labore reprehenderit nulla ab ex obcaecati, aperiam nostrum excepturi? Beatae earum nemo vitae necessitatibus eveniet dolorem enim, voluptate aliquam sequi asperiores. Perferendis cumque quidem, esse minus animi ab quia amet! Similique non porro saepe est voluptates adipisci reprehenderit accusantium fugiat minima. Nam neque sed reprehenderit ex et totam eos laudantium non? Porro autem cupiditate molestias mollitia similique itaque iusto animi quas optio veritatis. Quod voluptates praesentium ad. Odit deleniti ipsam nemo accusantium ad magni asperiores voluptatem, fuga porro temporibus, corrupti eaque perferendis voluptas incidunt facilis! Quaerat deleniti tempore, pariatur natus nemo quod ullam, rem aliquid consectetur eos fugiat excepturi inventore, quasi soluta facilis voluptatem commodi animi consequuntur ipsam voluptatum. Sequi quo labore, perspiciatis quidem molestiae tempore fugiat hic, non rem quis facere qui vero dolor error, ullam inventore! Ad architecto facere dolore natus, expedita dignissimos, ut illum numquam fuga ducimus assumenda adipisci id nam porro, quae ratione a ab doloribus exercitationem dolores vel nemo itaque repellat voluptas. Maiores qui ratione ut!</p>
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
    <div class="container bg-secondary mw-100 mh-100">
    	<h1 class="h-primary center">Give Reviews to our website</h1>
    	<div class="card ">
    		<div class="card-header">Sample Product</div>
    		<div class="card-body ">
    			<div class="row">
    				<div class="col-sm-4 text-center">
    					<h1 class="text-warning mt-4 mb-4">
    						<b><span id="average_rating">0.0</span> / 5</b>
    					</h1>
    					<div class="mb-3">
    						<i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
	    				</div>
    					<h3><span id="total_review">0</span> Review</h3>
    				</div>
    				<div class="col-sm-4 ">
    					<p>
                            <div class="progress-label-left"><b>5</b> <i class="fas fa-star text-warning"></i></div>

                            <div class="progress-label-right">(<span id="total_five_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="five_star_progress"></div>
                            </div>
                        </p>
    					<p>
                            <div class="progress-label-left"><b>4</b> <i class="fas fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_four_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="four_star_progress"></div>
                            </div>               
                        </p>
    					<p>
                            <div class="progress-label-left"><b>3</b> <i class="fas fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_three_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="three_star_progress"></div>
                            </div>               
                        </p>
    					<p>
                            <div class="progress-label-left"><b>2</b> <i class="fas fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_two_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="two_star_progress"></div>
                            </div>               
                        </p>
    					<p>
                            <div class="progress-label-left"><b>1</b> <i class="fas fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_one_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="one_star_progress"></div>
                            </div>               
                        </p>
    				</div>
    				<div class="col-sm-4 text-center">
    					<h3 class="mt-4 mb-3">Write Review Here</h3>
    					<button type="button" name="add_review" id="add_review" class="btn btn-primary">Review</button>
    				</div>
    			</div>
    		</div>
    	</div>
    	<div class="mt-5" id="review_content"></div>
    </div>
</body>

<script>
    var rating_data = 0;

$('#add_review').click(function(){

    $('#review_modal').modal('show');

});

$(document).on('mouseenter', '.submit_star', function(){

    var rating = $(this).data('rating');

    reset_background();

    for(var count = 1; count <= rating; count++)
    {

        $('#submit_star_'+count).addClass('text-warning');

    }

});

function reset_background()
{
    for(var count = 1; count <= 5; count++)
    {

        $('#submit_star_'+count).addClass('star-light');

        $('#submit_star_'+count).removeClass('text-warning');

    }
}

$(document).on('mouseleave', '.submit_star', function(){

    reset_background();

    for(var count = 1; count <= rating_data; count++)
    {

        $('#submit_star_'+count).removeClass('star-light');

        $('#submit_star_'+count).addClass('text-warning');
    }

});

$(document).on('click', '.submit_star', function(){

    rating_data = $(this).data('rating');

});

$('#save_review').click(function(){

    var user_name = $('#user_name').val();

    var user_review = $('#user_review').val();

    if(user_name == '' || user_review == '')
    {
        alert("Please Fill Both Field");
        return false;
    }
    else
    {
        $.ajax({
            url:"submit_rating.php",
            method:"POST",
            data:{rating_data:rating_data, user_name:user_name, user_review:user_review},
            success:function(data)
            {
                $('#review_modal').modal('hide');

                load_rating_data();

                alert(data);
            }
        })
    }

});

$('#save_review').click(function(){

var user_name = $('#user_name').val();

var user_review = $('#user_review').val();

if(user_name == '' || user_review == '')
{
    alert("Please Fill Both Field");
    return false;
}
else
{
    $.ajax({
        url:"submit_rating.php",
        method:"POST",
        data:{rating_data:rating_data, user_name:user_name, user_review:user_review},
        success:function(data)
        {
            $('#review_modal').modal('hide');

            load_rating_data();

            alert(data);
        }
    })
}

});

load_rating_data();

function load_rating_data()
{
$.ajax({
    url:"submit_rating.php",
    method:"POST",
    data:{action:'load_data'},
    dataType:"JSON",
    success:function(data)
    {
        $('#average_rating').text(data.average_rating);
        $('#total_review').text(data.total_review);

        var count_star = 0;

        $('.main_star').each(function(){
            count_star++;
            if(Math.ceil(data.average_rating) >= count_star)
            {
                $(this).addClass('text-warning');
                $(this).addClass('star-light');
            }
        });

        $('#total_five_star_review').text(data.five_star_review);

        $('#total_four_star_review').text(data.four_star_review);

        $('#total_three_star_review').text(data.three_star_review);

        $('#total_two_star_review').text(data.two_star_review);

        $('#total_one_star_review').text(data.one_star_review);

        $('#five_star_progress').css('width', (data.five_star_review/data.total_review) * 100 + '%');

        $('#four_star_progress').css('width', (data.four_star_review/data.total_review) * 100 + '%');

        $('#three_star_progress').css('width', (data.three_star_review/data.total_review) * 100 + '%');

        $('#two_star_progress').css('width', (data.two_star_review/data.total_review) * 100 + '%');

        $('#one_star_progress').css('width', (data.one_star_review/data.total_review) * 100 + '%');

        if(data.review_data.length > 0)
        {
            var html = '';

            for(var count = 0; count < data.review_data.length; count++)
            {
                html += '<div class="row mb-3">';

                html += '<div class="col-sm-1"><div class="rounded-circle bg-danger text-white pt-2 pb-2"><h3 class="text-center">'+data.review_data[count].user_name.charAt(0)+'</h3></div></div>';

                html += '<div class="col-sm-11">';

                html += '<div class="card">';

                html += '<div class="card-header"><b>'+data.review_data[count].user_name+'</b></div>';

                html += '<div class="card-body">';

                for(var star = 1; star <= 5; star++)
                {
                    var class_name = '';

                    if(data.review_data[count].rating >= star)
                    {
                        class_name = 'text-warning';
                    }
                    else
                    {
                        class_name = 'star-light';
                    }

                    html += '<i class="fas fa-star '+class_name+' mr-1"></i>';
                }

                html += '<br />';

                html += data.review_data[count].user_review;

                html += '</div>';

                html += '<div class="card-footer text-right">On '+data.review_data[count].datetime+'</div>';

                html += '</div>';

                html += '</div>';

                html += '</div>';
            }

            $('#review_content').html(html);
        }
    }
})
}
</script>
</html>

<div id="review_modal" class="modal" tabindex="-1" role="dialog">
  	<div class="modal-dialog" role="document">
    	<div class="modal-content">
	      	<div class="modal-header">
	        	<h5 class="modal-title">Submit Review</h5>
	        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          		<span aria-hidden="true">&times;</span>
	        	</button>
	      	</div>
	      	<div class="modal-body">
	      		<h4 class="text-center mt-2 mb-4">
	        		<i class="fas fa-star star-light submit_star mr-1" id="submit_star_1" data-rating="1"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_2" data-rating="2"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_3" data-rating="3"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_4" data-rating="4"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_5" data-rating="5"></i>
	        	</h4>
	        	<div class="form-group">
	        		<input type="text" name="user_name" id="user_name" class="form-control" placeholder="Enter Your Name" />
	        	</div>
	        	<div class="form-group">
	        		<textarea name="user_review" id="user_review" class="form-control" placeholder="Type Review Here"></textarea>
	        	</div>
	        	<div class="form-group text-center mt-4">
	        		<button type="button" class="btn btn-primary" id="save_review">Submit</button>
	        	</div>
	      	</div>
    	</div>
  	</div>
</div>

    
    <footer>
        <div class="center">
            Copyright &copy;  All rights reserved!
        </div>
    </footer>
   
</body>

</html>