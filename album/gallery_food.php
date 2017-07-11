<?php
    include 'header/header.php';
?>
        <body id="body_gallery">
        <div class="gallery" align="center">
            <h3 class="name_gallery_h3">Food Gallery</h3><br/>

            <div class="thumbnails">
                <img onmouseover="preview.src = img1.src" id="img1" src="images/food_gallery/strawberry.jpg" alt="Image Not Loaded"/>
                <img onmouseover="preview.src = img2.src" id="img2" src="images/food_gallery/pasta.jpg" alt="Image Not Loaded"/>
                <img onmouseover="preview.src = img3.src" id="img3" src="images/food_gallery/kebab.jpg" alt="Image Not Loaded"/>
                <img onmouseover="preview.src = img4.src" id="img4" src="images/food_gallery/food3.jpg" alt="Image Not Loaded"/>
                <img onmouseover="preview.src = img5.src" id="img5" src="images/food_gallery/food1.jpg" alt="Image Not Loaded"/>
                <img onmouseover="preview.src = img6.src" id="img6" src="images/food_gallery/food2.jpg" alt="Image Not Loaded"/>
                <img onmouseover="preview.src = img7.src" id="img7" src="images/food_gallery/raspberries.jpg" alt="Image Not Loaded"/>
                <img onmouseover="preview.src = img8.src" id="img8" src="images/food_gallery/melon.jpg" alt="Image Not Loaded"/>
            </div><br/>

            <div class="preview" align="center">
                <img id="preview" src="images/food_gallery/strawberry.jpg" alt="No Image Loaded"/>
            </div><br/>
        </div>
        <hr>

        <footer>
            <p>
                Copyright 2017 - k2h
            </p>
        </footer>
    </body>
</html>