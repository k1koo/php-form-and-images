<?php
session_start();

require 'DATABASE2.php';

if( isset($_SESSION['user_id']) ){

	$records = $conn->prepare('SELECT id,email,password FROM users WHERE id = :id');
	$records->bindParam(':id', $_SESSION['user_id']);
	$records->execute();
	$results = $records->fetch(PDO::FETCH_ASSOC);

	$user = NULL;

	if( count($results) > 0){
		$user = $results;
	}

}
include './header/header.php';
?>
<body>
    <div id="wrapper" class="col-lg-10 col-lg-offset-1">

        <nav>
            <ul>
                <li class="logo_image"><a href="index.php">IMAGE-BOOK <span class="glyphicon glyphicon-picture"></span></a></li>
                <li class="right_li"><a href="REGISTER2.php">REGISTER</a></li>
                <li class="right_li"><a href="LOGIN2.php">LOGIN</a></li>
            </ul>  
        </nav>

        <div id="free_pictures">
            <h2 class="free_pictures_h2">The Sky is the limit</h2>
        </div>

        <div class="best_pictures">
            <h3 class="best_pictures_h3">
                Best images 
            </h3>

            <div class="image_box">
                <div class="add_image">
                    <a target="_blank">
                        <img src="images/hongkong.jpg">
                    </a>
                    <div class="description">Beatiful Hong Kong</div>
                </div>
            </div>
            <div class="image_box">
                <div class="add_image">
                    <a target="_blank">
                        <img src="images/surf.jpg">
                    </a>
                    <div class="description">Surfer in the ocean</div>
                </div>
            </div>
            <div class="image_box">
                <div class="add_image">
                    <a target="_blank">
                        <img src="images/0445.jpg">
                    </a>
                    <div class="description">Sweet taste of grapes</div>
                </div>
            </div>
            <div class="image_box">
                <div class="add_image">
                    <a target="_blank" href="">
                        <img src="images/girl.jpg">
                    </a>
                    <div class="description">Child with bike</div>
                </div>
            </div>
            <div class="image_box">
                <div class="add_image">
                    <a target="_blank" href="#">
                        <img src="images/bike-shadow.jpg">
                    </a>
                    <div class="description">Shadow</div>
                </div>
            </div>
            <div class="image_box">
                <div class="add_image">
                    <a target="_blank" href="#">
                        <img src="images/tennis.jpg">
                    </a>
                    <div class="description">Tennis24</div>
                </div>
            </div>
            <div class="image_box">
                <div class="add_image">
                    <a target="_blank" href="i#">
                        <img src="images/tour-de-france.jpg">
                    </a>
                    <div class="description">Bike all day</div>
                </div>
            </div>
            <div class="image_box">
                <div class="add_image">
                    <a target="_blank" href="#">
                        <img src="images/foggy-football-pitch.jpg" >
                    </a>
                    <div class="description">Good autom</div>
                </div>
            </div>

        </div>

        <div class="clearfix"></div>


        <div class="categories">
            <div class="p_cate">Categories</div>

            <div class="cat_images col-lg-6 col-lg-offset-3">
                <a href="gallery_food.php"><img src="images/food.jpeg" title="Food Gallery" style="margin: 1em; cursor: pointer;"/></a>
                <a href="gallery_building.php"><img src="images/building.jpg" title="Building Gallery" style="float: right;margin: 1em; cursor: pointer;"/>
            </div>
                   
            <div class="cat_images col-lg-6 col-lg-offset-3">
                <a href="gallery_people.php"><img src="images/people.jpg" title="People Gallery" style="margin: 1em; cursor: pointer;"/></a>
                <a href="gallery_sport.php"><img src="images/sport.png" title="Sport Gallery" style="float: right;margin: 1em; cursor: pointer;"/></a>
            </div>
            
            <div class="cat_images col-lg-6 col-lg-offset-3">
                <a href="gallery_tech.php"> <img src="images/tech.png" title="Tech Gallery" style=";margin: 1em; cursor: pointer;"/></a>
                <a href="gallery_nature.php"> <img src="images/nature.jpg" title="Building Gallery" style="float: right;margin: 1em; cursor: pointer;"/></a>
            </div>
            <div class="image_to_div"><a href="gallery_food.php"><p class="image_to_div_p">Food</p></a></div>
            <div class="image_to_div"><a href="gallery_building.php"><p class="image_to_div_p">Buildings</p></a></div>
            <div class="image_to_div"><a href="gallery_people.php"><p class="image_to_div_p">People</p></a></div>
            <div class="image_to_div"><a href="gallery_sport.php"><p class="image_to_div_p">Sport</p></a></div>
            <div class="image_to_div"><a href="gallery_tech.php"><p class="image_to_div_p">Tech</p></a></div>
            <div class="image_to_div"><a href="gallery_nature.php"><p class="image_to_div_p">Nature</p></a></div>
        </div>      

        <br />
        <hr>

        <footer>
            <p>
                Copyright 2017 - k2h
            </p>
        </footer>

    </div>
</body>
</html>
