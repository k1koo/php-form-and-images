<?php
    include 'header/header.php';
?>
        <body id="body_gallery">
        <div class="gallery" align="center">
            <h3 class="name_gallery_h3">Building Gallery</h3><br/>

            <div class="thumbnails">
                <img onmouseover="preview.src = img1.src" id="img1" src="images/building_gallery/aircraft.jpg" alt="Image Not Loaded"/>
                <img onmouseover="preview.src = img2.src" id="img2" src="images/building_gallery/architecture.jpg" alt="Image Not Loaded"/>
                <img onmouseover="preview.src = img3.src" id="img3" src="images/building_gallery/budapest.jpg" alt="Image Not Loaded"/>
                <img onmouseover="preview.src = img4.src" id="img4" src="images/building_gallery/country-house.jpg" alt="Image Not Loaded"/>
                <img onmouseover="preview.src = img5.src" id="img5" src="images/building_gallery/kuala-lumpur.jpg" alt="Image Not Loaded"/>
                <img onmouseover="preview.src = img6.src" id="img6" src="images/building_gallery/monastery.jpg" alt="Image Not Loaded"/>
                <img onmouseover="preview.src = img7.src" id="img7" src="images/building_gallery/new-york.jpg" alt="Image Not Loaded"/>
                <img onmouseover="preview.src = img8.src" id="img8" src="images/building_gallery/stonehenge.jpg" alt="Image Not Loaded"/>
            </div><br/>

            <div class="preview" align="center">
                <img id="preview" src="images/building_gallery/budapest.jpg" alt="No Image Loaded"/>
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