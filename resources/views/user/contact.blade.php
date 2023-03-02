<!DOCTYPE html>
<html lang="en">

<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Site Metas -->
<title>SmartEDU - Contact</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">

<!-- Site Icons -->
<link rel="shortcut icon" href="/admin/images/favicon.ico" type="image/x-icon" />
<link rel="apple-touch-icon" href="/admin/images/apple-touch-icon.png">

<!-- Bootstrap CSS -->
@include('user.html.css')

<!-- Modernizer for Portfolio -->
@include('user.html.js')

<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
@include('user.html.form.header')
<!-- End header -->

<div class="all-title-box">
    <div class="container text-center">
        <h1>Contact<span class="m_1">Lorem Ipsum dolroin gravida nibh vel velit.</span></h1>
    </div>
</div>

<div id="contact" class="section wb">
    <div class="container">
        <div class="section-title text-center">
            <h3>Need Help? Sure we are Online!</h3>
            <p class="lead">Let us give you more details about the special offer website you want us. Please fill out the form below. <br>We have million of website owners who happy to work with us!</p>
        </div><!-- end title -->

        <div class="row">
            <div class="col-xl-6 col-md-12 col-sm-12">
                <div class="contact_form">
                    <div id="message"></div>
                    <form id="contactform" class="" action="contact.php" name="contactform" method="post">
                        <div class="row row-fluid">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <input type="email" name="email" id="email" class="form-control" placeholder="Your Email">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <input type="text" name="phone" id="phone" class="form-control" placeholder="Your Phone">
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <textarea class="form-control" name="comments" id="comments" rows="6" placeholder="Give us more details.."></textarea>
                            </div>
                            <div class="text-center pd">
                                <button type="submit" value="SEND" id="submit" class="btn btn-light btn-radius btn-brd grd1 btn-block">Get a Quote</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div><!-- end col -->
            <div class="col-xl-6 col-md-12 col-sm-12">
                <div class="map-box">
                    <div id="custom-places" class="small-map"></div>
                </div>
            </div>
        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end section -->

@include('user.html.form.footer')
@include('user.html.js')
</body>
</html>
