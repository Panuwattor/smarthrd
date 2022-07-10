<!DOCTYPE html>
<html lang="th">

<head>
    <title>Back Office - MNRE HRD</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=1440">
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
<meta name="HandheldFriendly" content="true">
<meta name="format-detection" content="telephone=no">

<meta property="og:type" content="website">
<meta property="og:url" content="">
<meta property="og:title" content="">
<meta property="og:description" content="">
<meta property="og:image" content="">
<meta property="og:site_name" content="">
<meta property="og:locale" content="">
<meta property="og:locale:alternate" content="">

<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/favicon/favicon.ico" type="image/x-icon"/>
<link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url(); ?>assets/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url(); ?>assets/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url(); ?>assets/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>assets/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url(); ?>assets/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url(); ?>assets/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url(); ?>assets/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url(); ?>assets/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url(); ?>assets/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/favicon/favicon-16x16.png" sizes="16x16">
<link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/favicon/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/favicon/favicon-96x96.png" sizes="96x96">
<link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/favicon/android-icon-192x192.png" sizes="192x192">    <!-- Core -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.0/animate.min.css" integrity="sha512-kb1CHTNhoLzinkElTgWn246D6pX22xj8jFNKsDmVwIQo+px7n1yjJUZraVuR/ou6Kmgea4vZXZeUDbqKtXkEMg==" crossorigin="anonymous" />
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">

<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

<!-- Custom -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css?v=202207071657180326">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/custom.css">
</head>

<body>
	
    <div class="global-container1">
        <div class="auth-page">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col">
                        <div class="auth-img">
                            <img src="<?php echo base_url(); ?>assets/img/static/auth.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="auth-wrapper">
                            <div class="brand">
                                <img src="<?php echo base_url(); ?>assets/img/static/logo.png" alt="">
                            </div>
                            <h2 class="typo-lg fw-medium text-dark text-center mt-4 mb-4">ลืมรหัสผ่าน</h2>
                            <p class="typo-default text-success text-center mb-3">
                                ลิงค์สำหรับรีเซ็ตรหัสผ่านได้ถูกส่งไปยัง<br/>
                                you******l@******.com
                            </p>
                            <form data-toggle="validator" role="form" class="form-default pt-2" method="post">
                                <div class="form-group">
                                    <div class="block-control has-icon">
                                        <div class="icon">
                                            <span class="feather icon-mail"></span>
                                        </div>
                                        <input class="form-control" 
                                            type="email"
                                            id=""
                                            name="" 
                                            value=""
                                            placeholder="youremail@domain.com"
                                            data-error="" 
                                            required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn fluid btn-primary">ยืนยัน</button>
                                </div>
                                <div class="form-group text-center mb-0">
                                    <a href="#" class="link text-underline link-success typo-micro">ส่งรหัสผ่านอีกครั้ง</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="site-footer">
    <div class="main">
        <span class="text-light typo-micro">COPYRIGHT 2021 ALL RIGHTS RESERVED</span>
    </div>
</footer>    </div>

	<!-- Core -->
<script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3.2/jquery.easing.min.js" integrity="sha512-qJw3EXcEMHpFae2o6eQmiDc1TACjjT7xMGnMcsmDFB55XiL/6SdZEsRv08wRR+OLJ7sijqHksLHDAlbB94glxg==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" integrity="sha512-3n19xznO0ubPpSwYCRRBgHh63DrV+bdZfHK52b1esvId4GsfwStQNPJFjeQos2h3JwCmZl0/LgLxSKMAI55hgw==" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js" integrity="sha512-dTu0vJs5ndrd3kPwnYixvOCsvef5SGYW/zSSK4bcjRBcZHzqThq7pt7PmCv55yb8iBvni0TSeIDV8RYKjZL36A==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.min.js" integrity="sha512-jNDtFf7qgU0eH/+Z42FG4fw3w7DM/9zbgNPe3wfJlCylVDTT3IgKW5r92Vy9IHa6U50vyMz5gRByIu4YIXFtaQ==" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

<!-- Custom -->
<script src="<?php echo base_url(); ?>assets/js/main.js?v=202207071657180326"></script>
<script type="text/javascript">var raf = window.requestAnimationFrame || window.mozRequestAnimationFrame || window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;</script>
</body>
</html>