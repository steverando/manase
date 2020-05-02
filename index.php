<?php
include_once "header.php";
?>
<header>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
        <a class="navbar-brand" href="#"><strong style="color: #fdd835; font-size:100 px; font-style:inherit;">Manase Spares</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-right: 20ps;">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="view intro-2">
        <div class="full-bg-img">
            <div class="mask rgba-purple-light flex-center">
                <div class="container-fluid text-left white-text wow fadeInUp">
                    <h1 style="color:#4285f4; font-size:65px; font-family:serif;"><b>Manase Motor Spares</b></h1>
                    <br>
                    <h1 style="margin-left: 30px; font-size:65px;">&</h1>
                    <br>
                    <h1 style="color: #4285f4; font-size:65px; font-family:serif;"><b>Repair</b></h1>
                </div>
            </div>
        </div>
    </div>
</header>
<!--Main Layout-->
<main class="text-center py-5 " style="background:#4285f4; color:ivory;">
    <div class="container-fluid">
        <div class="row mid-h-100">
            <div class="col-md-1"></div>
            <div class="col-md-5 text-left">
                <br>
                <br>
                <br>
                <p class="h4"><b style="color:red; font-size:35px;">Best deals and guniune parts;</b><br>
                    Gives you the best deals in all types of Motor BikesS,<br>
                    from;</p>
                <ul class="align-middle h5">
                    <li>Ranger</li>
                    <li>Captain</li>
                    <li>Dayun</li>
                    <li>Boxer</li>
                    <li>TVS</li>
                    <li>And all models of superbikes</li>
                </ul>
            </div>
            <div class="col-md-6 text-left h5 pr-5">
                <br>
                <br>
                <br>
                <p>
                    We also offer free consultation services on bike purchases, Our terms are very simple and friendly,<br>
                    you can get youself a ride anytime we dont let scarcity of cash limit you as we have a variety a wide mode of paying;<br>
                    For instance:<br>
                    you can pay through hire purchase,<br>
                    we also accept bank loans,<br>
                    and we also exchange old bikes with new in addition some little amount<br>
                    depending on the current status of your bike and also the brand you exchange with.
                </p>
            </div>
        </div>
    </div>

</main>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="carousel slide" data-ride="carousel" id="carouselExampleControls">
                <div class="carousel-inner">
                    <div class="carousel-item active"><img alt="auto" class="d-block w-100" src="bg.jpg"></div>
                    <div class="carousel-item"><img alt="auto" class="d-block w-100" src="one.jpg"></div>
                    <div class="carousel-item"><img alt="auto" class="d-block w-100" src="one1.jpg"></div>
                    <div class="carousel-item"><img alt="auto" class="d-block w-100" src="one2.jpg"></div>
                </div><a class="carousel-control-prev" data-slide="prev" href="#carouselExampleControls" role="button"><span aria-hidden="true" class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a> <a class="carousel-control-next" data-slide="next" href="#carouselExampleControls" role="button"><span aria-hidden="true" class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
            </div>
        </div>
        <div class="col-md-6">
            <div class="carousel slide" data-ride="carousel" id="carouselExampleControls">
                <div class="carousel-inner">
                    <div class="carousel-item active"><img alt="auto" class="d-block w-100" src="one2.jpg"></div>
                    <div class="carousel-item"><img alt="auto" class="d-block w-100" src="one1.jpg"></div>
                    <div class="carousel-item"><img alt="auto" class="d-block w-100" src="one.jpg"></div>
                    <div class="carousel-item"><img alt="auto" class="d-block w-100" src="bg.jpg"></div>
                </div><a class="carousel-control-prev" data-slide="prev" href="#carouselExampleControls" role="button"><span aria-hidden="true" class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a> <a class="carousel-control-next" data-slide="next" href="#carouselExampleControls" role="button"><span aria-hidden="true" class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
            </div>
        </div>
    </div>
</div>
<?php
include_once "footer.php";
?>