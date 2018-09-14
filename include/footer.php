    
<footer class="container ">
    <div class="row">
        <div class="col-md-4">
            <h4 class="text-uppercase text-warning">Ouick Links</h4><br>
            <a class="w3-bar w3-bar-block" href="#">Home</a>
            <a class="w3-bar w3-bar-block" href="#">How To Pay</a>
            <a class="w3-bar w3-bar-block" href="#">Tip Genius</a>
            <a class="w3-bar w3-bar-block" href="#">V.I.P</a>
            <a class="w3-bar w3-bar-block" href="#">About Us</a>
        </div>
        <div class="col-md-4">
            <h4 class="text-uppercase text-warning">BetPredic</h4>
            <br>
            <span>Football betting is fun,period.
            it's a rousing victory or a crushing defeat but without
            some level of knowledge,football betting is a high risk venture
            we are here to make it easy for you,we offer accurate predictions and 
            profits over long term</span>
        </div>
        <div class="col-md-4">
            <h4 class="text-uppercase text-warning">Contact Us</h4><br>
            <span class="text-success">Calls only:</span>
            </br>
            <span>0806 Betpredic(+234- 08067173645)</span>
            <br>
            <span class="text-success">Email Us:</span>
            </br>
            <span>contact@betpredic.com</span>
        </div>
    </div>
    <div class="row">
        <br>
        <div class="col-md-3">
            <h4>Join BetPredic On</h4>
            <br/>
            <a class="btn btn-outline-secondary "><span class="fa fa-facebook"></span></a>
            <a class="btn btn-outline-secondary "><span class="fa fa-youtube"></span></a>
            <a class="btn btn-outline-secondary"><span class="fa fa-whatsapp"></span></a>
        </div>
        <div class="col-md-9">
            <br>
            <img src="https://betensured.com/images/icons/payment.png" alt=""/>
            <br>
        </div>
    </div>
    <br><br>
    <hr>
    <p class="text-center">
        &copy; Copyright <?php echo date("Y");?>, All rights reserved | Powered & disgned By <a href="#" target="" title="serverland">Server Land Company</a> .
    </p>
</footer>
        <script>
            // Slideshow
            var slideIndex = 1;
            showDivs(slideIndex);

            function plusDivs(n) {
              showDivs(slideIndex += n);
            }

            function currentDiv(n) {
              showDivs(slideIndex = n);
            }

            function showDivs(n) {
              var i;
              var x = document.getElementsByClassName("mySlides");
              var dots = document.getElementsByClassName("demodots");
              if (n > x.length) {slideIndex = 1}    
              if (n < 1) {slideIndex = x.length} ;
              for (i = 0; i < x.length; i++) {
                 x[i].style.display = "none";  
              }
              for (i = 0; i < dots.length; i++) {
                 dots[i].className = dots[i].className.replace(" w3-white", "");
              }
              x[slideIndex-1].style.display = "block";  
              dots[slideIndex-1].className += " w3-white";
            }
        </script>
    </body>
</html>


