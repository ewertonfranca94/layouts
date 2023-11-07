<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Furniro - Layout</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Lora:400,400i,700,700i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i&display=swap">


</head>
<body>
    <?php include('header.php');?>
    <section class="primary-section">

        <div class="new-arrival">
            <div class="text-new-arrival">New Arrival</div>
            <div class="discover">
                <h2>Discover Our 
                    <br>
                New Collection</h2>
            </div>
            <div class="text-section1">
                <p><b>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis.</b></p>
            </div>

            <button class="buy-button"> BUY NOW </button>
        </div>

    </section>
    <section class="second-section">
        <div class="second-section-container">
            <div class="browse">
                <h2 class="text-browse">Browse The Range</h2>
                <p class="browse-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="rooms">
                <div class="dining">
                    <img src="images/dining.jpg" alt="">
                    <p class="text-rooms">Dining</p>
                </div>
                <div class="living">
                    <img src="images/living.png" alt="">
                    <p class="text-rooms">Living</p>
                </div>
                <div class="bedroom">
                    <img src="images/bedroom.png" alt="">  
                    <p class="text-rooms">Bedroom</p>  
                </div>
            </div>

        </div>
    </section>
</body>
</html>