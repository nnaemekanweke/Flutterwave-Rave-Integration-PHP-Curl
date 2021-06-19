<!-- 

-- Developed by Nnaemeka Nweke.
-- I am a software engineer open for freelance work.
-- You can reach on Twitter @codegenty
-- I am also avalibale on linkedin // https://www.linkedin.com/in/nnaemekanweke
-- My email address nnaemeka.nweke2@gmail.com

-->


</!DOCTYPE html>
<head>
	<title>Flutterwave Payment Gateway</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<style type="text/css"></style>
</head>
<body>


    <!-- Top header -->
<div class="w-50 px-3 py-3 pt-md-4 pb-md-4 mx-auto text-center">
    <h1 class="display-4 font-weight-bold">Flutterwave</h1>
</div>

<!--    Send payment to the payment processor -->
 <form action="pay.php" method="POST">
 	    <div class="w-50 px-3 py-3 pt-md-4 pb-md-4 mx-auto text-center">
        <p class="lead">
        	<input type="text" name="name" class="form-control" placeholder="Your Name" required>
        </p>
        <p class="lead">
        	<input type="text" name="email" class="form-control" placeholder="Your Email Address" required>
        </p>
    </div>
    <!-- Cards container -->
            
    <div class="container text-center">
        <div class="row">

<!-- Card #1, Starter -->
            <div class="col-lg-4 col-md-6 col-sm-10 pb-4 d-block m-auto">
                <div class="pricing-item" style="box-shadow: 0px 0px 30px -7px rgba(0,0,0,0.29);">
                    <!-- Indicator of subscription type -->
                    <div class="pt-4 pb-3" style="letter-spacing: 2px">
                        <h4>Starter</h4>
                    </div>
                    <!-- Price class -->
                    <div class="pricing-price pb-1 text-primary color-primary-text ">
                        <h1 style="font-weight: 1000; font-size: 3.5em;">
                            <span style="   font-size: 20px;">₦</span>2,500
                        </h1>
                    </div>
                    <!-- Perks of said subscription -->
                    <div class="pricing-description">
                        <ul class="list-unstyled mt-3 mb-4">
                            <li class="pl-3 pr-3">30 users included</li>
                            <li class="pl-3 pr-3">15 GB of storage</li>
                            <li class="pl-3 pr-3">Phone and email support</li>
                            <li class="pl-3 pr-3">Help center access</li>
                        </ul>
                    </div>
                    <!-- Button -->
                    <div class="pricing-button pb-4">
                        <lable class="btn btn-lg btn-primary w-75">
                           <input type="radio" name="options" value="2500" class="btn btn-lg btn-primary w-25">Select plan
                        </lable>
                    </div>
                </div>
            </div>

<!-- Card #2, Intermediate -->
            <div class="col-lg-4 col-md-6 col-sm-10 pb-4 d-block m-auto">
                <div class="pricing-item" style="box-shadow: 0px 0px 30px -7px rgba(0,0,0,0.29);">
                    <div class="pt-4 pb-3" style="letter-spacing: 2px">
                        <h4>Intermediate</h4>
                    </div>
                    <div class="pricing-price pb-1 text-primary color-primary-text ">
                        <h1 style="font-weight: 1000; font-size: 3.5em;">
                            <span style="font-size: 20px;">₦</span>5,000
                        </h1>
                    </div>
                    <div class="pricing-description">
                        <ul class="list-unstyled mt-3 mb-4">
                            <li class="pl-3 pr-3">30 users included</li>
                            <li class="pl-3 pr-3">15 GB of storage</li>
                            <li class="pl-3 pr-3">Phone and email support</li>
                            <li class="pl-3 pr-3">Help center access</li>
                        </ul>
                    </div>
                    <div class="pricing-button pb-4">
                        <lable class="btn btn-lg btn-primary w-75">
                           <input type="radio" name="options" value="5000" class="btn btn-lg btn-primary w-25">Select plan
                        </lable>
                    </div>
                </div>
            </div>

<!-- Card #3, Professional -->
            <div class="col-lg-4 col-md-6 col-sm-10 pb-4 d-block m-auto">
                <div class="pricing-item" style="box-shadow: 0px 0px 30px -7px rgba(0,0,0,0.29);">
                    <div class="pt-4 pb-3" style="letter-spacing: 2px">
                        <h4>Professional</h4>
                    </div>
                    <div class="pricing-price pb-1 text-primary color-primary-text ">
                        <h1 style="font-weight: 1000; font-size: 3.5em;">
                            <span style="font-size: 20px;">₦</span>10,500
                        </h1>
                    </div>
                    <div class="pricing-description">
                        <ul class="list-unstyled mt-3 mb-4">
                            <li class="pl-3 pr-3">30 users included</li>
                            <li class="pl-3 pr-3">15 GB of storage</li>
                            <li class="pl-3 pr-3">Phone and email support</li>
                            <li class="pl-3 pr-3">Help center access</li>
                        </ul>
                    </div>
                    <div class="pricing-button pb-4">
                    	<lable class="btn btn-lg btn-primary w-75">
                           <input type="radio" name="options" value="10500" class="btn btn-lg btn-primary w-25">Select plan
                        </lable>
                    </div>
                </div>
            </div>
            <div style="margin: auto;">
                  <button type="submit" name="pay" class="btn btn-lg btn-success w-95">Get started</button>
            </div>
        </form> 

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js"
        integrity="sha384-pjaaA8dDz/5BgdFUPX6M/9SUZv4d12SUPF0axWc+VRZkx5xU3daN+lYb49+Ax+Tl"
        crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>

</body>
</html>