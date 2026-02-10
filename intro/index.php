<?php include('../head.php'); ?>

<div class="intro-container">
    <div class="welcome-coninter">


        <div class="wrapper">
            <div class="intro-con">
                <div class="welcome-con">
                    <h2 class="header-font  d-block text-center pt-5">Welcome</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="feature-img-con">
        <div class="wrapper">
            <div class="intro-box d-flex position-relative w-100 m-auto justify-center gap-2">
                <div class="message-con position-relative">
                    <div class="message-content bg-light position-absolute">
                        <h2>Need an avaialble place to stay?</h2>
                        <p>Here in NorthSide will help you find a cozzy place to enjoy your vacation</p>
                        <a class="btn-a" href="#">Click here to find a Place to stay</a>
                    </div>

                </div>
                <div class="slide-con  position-relative">
                    <div class="img-slide-con  bg-dark">
                        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                            <!-- Indicators -->
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active"></button>
                                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1"></button>
                                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2"></button>
                            </div>

                            <!-- Slides -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="images/dsinn.jpg" class="d-block w-100 rounded-4" alt="Slide 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/dsinn.jpg" class="d-block w-100 rounded-4" alt="Slide 2">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/dsinn.jpg" class="d-block w-100 rounded-4" alt="Slide 3">
                                </div>
                            </div>

                            <!-- Controls -->
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include('../footer.php'); ?>