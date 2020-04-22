<!DOCTYPE html>
<html>

<head>
    <title>Home::Pizzeratta</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="style/main.css" />
</head>

<body>
    <main class="container1" style="max-width:100%; width:100%;">

        <div class="row w-100">
            <div class="col-md-3">
                <header>

                    <A href="index.php" class="logo">PIZZERATTA</A>
                    <section class="nav mt-4">
                        <button class="nav-button" id="drop">

                            <hr>
                            <hr></button>
                        <nav class="w-100">
                            <ul>
                                <li><i></i> <?php
    $uid=$_GET['userid'];
echo "<h3>" . $uid."<h3>";

?> </li>
                                
                                <li class="active"><a href="index.php">Home</a></li>
                                <li><a href="store.php">Menu</a></li>
                               


                            </ul>
                        </nav>

                    </section>

                </header>

            </div>

            <div class="col-md-9">


                <main class="middle">
                    <section class="recpies">
                        <h2 class="recipePg">MOST POPULAR</h2>

                        <section class="recpie-flex">

                            <aside><a href="detail.php?id=1"><img src="images/1.jpg"> <b>Cauliflower Crust </b></a></aside>

                            <aside><a href="detail.php?id=2"><img src="images/2.jpg"> <b>Keto Crust </b></a></aside>

                            <aside><a href="detail.php?id=3"><img src="images/3.jpg"> <b>Spicy BBQ</b></a></aside>


                            <aside><a href="detail.php?id=4"><img src="images/Coke.jpg"> <b>Drinks</b></a></aside>

                            <aside><a href="detail.php?id=5"><img src="images/5.jpg"> <b>Cauli Blanca</b></a></aside>

                            <aside><a href="detail.php?id=6"><img src="images/6.jpg"> <b>Chicken Bruschetta</b></a></aside>

                            <aside><a href="detail.php?id=7"><img src="images/9.jpg"> <b>Thin Pesto Amore</b></a></aside>

                            <aside><a href="detail.php?id=8"><img src="images/11.jpg"> <b>Half Moon Bread</b></a></aside>




                        </section>
                    </section>

                    <section class="slider">
                        <!--img id="heading" src="images/Banner.jpg"
                                         height= "700px"  /-->


                        <div class="mySlides fade">
                            <img src="images/slide1.jpg" style="width:100%" height="700px">

                        </div>

                        <div class="mySlides fade">

                            <img src="images/133.jpg" style="width:100%" height="700px">

                        </div>

                        <div class="mySlides fade">

                            <img src="images/Banner.jpg" style="width:100%" height="700px">

                        </div>


                        <br>

                        <div style="text-align:center">
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="dot"></span>
                        </div>
                    </section>

                    <section class="recpies">
                        <h2 class="recipePg">Best Deals</h2>

                        <section class="recpie-flex">


                            <aside><a href="detail.php?id=9"><img src="images/7.jpg"> <b>Chipotle Chicken </b></a></aside>

                            <aside><a href="detail.php?id=10"><img src="images/10.jpg"> <b>Greek</b></a> </aside>

                            <aside><a href="detail.php?id=11"><img src="images/8.jpg"> <b>Garlic Bread</b></a></aside>

                            <aside><a href="detail.php?id=12"><img src="images/17.jpg"> <b>Mexican Green</b></a></aside>

                            <aside><a href="detail.php?id=13"><img src="images/13.jpg"> <b>Garden Salad</b></a></aside>

                            <aside><a href="detail.php?id=14"><img src="images/14.jpg"> <b>Chicken Bites</b></a> </aside>

                            <aside><a href="detail.php?id=15"><img src="images/15.jpg"> <b>Twin Pizza</b></a></aside>

                            <aside><a href="detail.php?id=16"><img src="images/16.jpg"> <b>Bacon Double</b></a></aside>

                        </section>
                    </section>
                </main>
            </div>
        </div>
        
    </main>



    <script>
        var slideIndex = 0;
        showSlides();

        function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            setTimeout(showSlides, 4000); // Change image every 4 seconds
        }

    </script>
    <footer class="footer">
        <div class="row">


            <div class="col-md-6">
                <nav>
                    <ul>
                        <li>
                            <h5 class="mb-3 mt-0"><a class="logo" href="index.html"><img src="images/logo21.png" alt="Pizza"></a></h5>
                        </li>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="product.php">Product</a></li>
                        <li><a href="store.php">Menu</a></li>
                        <li><a href="checkout.php">Checkout</a></li>
                        <li><a href="login.php">Login/Register</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-md-3">
                &copy; 2020 www.Pizzeratta.com
            </div>
            <div class="col-md-3">
                An elite food publisher<br>
                <span>Pizzeratta - Created for Pizzeratta</span>
            </div>
        </div>

    </footer>

</body>

</html>
