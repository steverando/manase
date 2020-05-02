<?php
include_once "header.php";
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-9">
            <div class="mapouter">
                <div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=P.O%201066%2C%20Ruiru%2C%20Kenya&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.org"></a></div>
                <style>
                    .mapouter {
                        position: relative;
                        text-align: right;
                        height: 500px;
                        width: 1000px;
                    }

                    .gmap_canvas {
                        overflow: hidden;
                        background: none !important;
                        height: 1000px;
                        width: 1000px;
                    }
                </style>
            </div>
        </div>
        <div class="col-md-3 h5 text-center pt-5"><br><br>

            <p style="color: #e67e22">For more information;<br>
                visit us:<br>
                Manase Bikes,<br>
                Matangi homeland, near st lindas primary and high school.</p><br>
            <i class="h3">Or</i><br><br>
            <address class="ml-5" style="color: #304ffe">
                <b>Bubble car ltd<br>
                    P.O Box,<br>
                    34145123-00100<br>
                    Nairobi Kenya<br>
                    Or call us:<br>
                    Manasses Gatu:<br>
                    +254713 508 889;<br>
            </address>

        </div>
    </div>
</div>

<?php
include_once "footer.php";
?>