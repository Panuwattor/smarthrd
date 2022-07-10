    <footer class="site-footer">
    <div class="main">
        <div class="container">
            <div class="row">

                <div class="col-12 col-md-7">
                    <div class="title_footer">
                        <div class="detail">
                            <h3>กระทรวงทรัพยากรธรรมชาติและสิ่งแวดล้อม</h3>
                            <div class="row gutters-10 align-items-center address">
                                <div class="col-auto">
                                    <span class="icon feather icon-map-pin"></span>
                                </div>
                                <div class="col">
                                    <span class="desc">อาคารกระทรวงทรัพยากรธรรมชาติและสิ่งแวดล้อม <br>เลขที่ 92
                                        ซอยพหลโยธิน 7 ถนนพหลโยธิน แขวงพญาไท เขตพญาไท กรุงเทพฯ 10400

                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-6 col-md-2">
                    <div class="menu">
                        <div class="h-title">Site map</div>
                        <ul class="nav-list fluid">
                            <li>
                                <a href="<?php echo base_url(); ?>home" class="link"><?= $this->session->userdata('lbl_home'); ?></a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>course" class="link"><?= $this->session->userdata('lbl_course'); ?></a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>calendar" class="link"><?= $this->session->userdata('lbl_calendar'); ?></a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>survey" class="link"><?= $this->session->userdata('lbl_survey'); ?></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="getin">
                        <div class="h-title">ติดต่อ</div>
                        <ul class="item-list fluid">
                            <li>
                                <div class="row gutters-10 align-items-center">
                                    <div class="col-auto">
                                        <span class="icon feather icon-phone"></span>
                                    </div>
                                    <div class="col">
                                        <a href="tel:0 2265 6273" class="desc link">0 2265 6273</a><br> <a
                                            href="tel:0 2278 8500" class="desc link">0 2278 8500 ต่อ 8860</a></a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row gutters-10 align-items-center">
                                    <div class="col-auto">
                                        <span class="icon feather icon-mail"></span>
                                    </div>
                                    <div class="col">
                                        <a href="mailto:hrdi.mnre@gmail.com" class="desc link">hrdi.mnre@gmail.com</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footbar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md">
                    <span class="text-light fw-medium">@2022 Copyright : กระทรวงทรัพยากรธรรมชาติและสิ่งแวดล้อม</span>
                </div>
                <div class="col-md-auto">
                    <div class="social">
                        <a href="https://www.facebook.com/hrdi.mnre.go.th" class="link" target="_blank"
                            title="Facebook">
                            <img src="<?php echo base_url(); ?>assets/img/icon/social-fb.svg" alt="">
                        </a>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>


</footer>

<!-- 
style="display: none"
 -->

    <div  class="wwp-cookie cookieconsent" id="BoxacceptCookie" style="background-image: url('<?php echo base_url(); ?>assets/img/static/bg-mnre-pdpa.jpg');  ">
        <div class="container">
            <div class="cover-l">
                <img class="img-cover" src="<?php echo base_url(); ?>assets/img/static/pic-icon-1-202128011611836145664.png" alt="MNRE">
            </div>
            <div class="inner">
                <h4 class="title">
                    <strong>"ยอมรับคุกกี้"</strong> เพื่อให้เว็บไซต์นำเสนอประสบการณ์ที่ดีขึ้นสำหรับคุณ
                </h4>
                <p class="desc">
                    เว็บไซต์กระทรวงทรัพยากรธรรมชาติและสิ่งแวดล้อม ขออนุญาตใช้คุ๊กกี้เพื่อสร้างประสบการณ์นำเสนอเนื้อหาที่ดีให้กับท่าน ทั้งนี้ ท่านมั่นใจได้ว่าเราจะดูแลและรักษาความปลอดภัยข้อมูลของท่านเป็นอย่างดี
                    <br>
                    <a href="<?php echo base_url(); ?>privacy/cookie" title="เรียนรู้เพิ่มเติม" target="_blank">เรียนรู้เพิ่มเติม</a>
                    <a></a>
                </p>
                <a></a>
                <div class="action"><a>
                    </a><a href="javascript:void(0);" id="acceptCookie" onclick="accept()" class="link acceptCookie" data-accept="Accept" title="ยอมรับคุกกี้">
                        <img class="icon-check" src="<?php echo base_url(); ?>assets/img/icon/check.svg" alt="ยอมรับคุกกี้">
                        ยอมรับคุกกี้
                    </a>
                </div>
            </div>
            <div class="cover-r">
                <img class="img-cover" src="<?php echo base_url(); ?>assets/img/static/pic-icon2-1-202128011611836152582.png" alt="MNRE">
            </div>
        </div>
    </div>


<!--

<section class="cookieconsent hidden w-full p-5 lg:px-24 fixed bottom-0 bg-gray-600 z-50 bg-opacity-90 hide"
    x-show="showCookieBanner" style="">
    <div class="container m-auto text-xs">
        <div class="md:flex items-center -mx-3">
            <div class="md:flex-1 px-3 mb-5 md:mb-0">
                <div class="text-center md:text-left text-white leading-tight md:pr-5">
                    <span class="text-xl w-full">"ยอมรับคุกกี้"
                        เพื่อให้เว็บไซต์นำเสนอประสบการณ์ที่ดีขึ้นสำหรับคุณ</span>
                    <p class="text-base">นโยบายเพื่อคุ้มครองข้อมูลส่วนบุคคลของผู้ใช้บริการ ทุกท่าน ( Personal
                        information ) ที่ติดต่อเข้ามายังเว็บไซด์</p>
                </div>
            </div>
            <div class="px-3 text-center">
                
                <button id="btn"
                    class="py-2 px-8 bg-blue-600 hover:bg-blue-700 text-white rounded font-bold text-sm shadow-xl acceptcookie">ยอมรับคุกกี้</button>
            </div>
        </div>
    </div>
</section>
 -->
<!-- Messenger ปลั๊กอินแชท Code -->
    <div id="fb-root"></div>

    <!-- Your ปลั๊กอินแชท code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>
    
<script>
function accept() {
    $("#acceptCookie").click(function() {
		document.getElementById('BoxacceptCookie').style.display = 'none';
    })
    document.getElementById('BoxacceptCookie').style.display = 'initial';
}
window.addEventListener ? 
window.addEventListener("load", accept,false) : 
window.attachEvent && window.attachEvent("onload", accept);
</script>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "102902385770487");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v14.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/th_TH/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
    <!-- Core -->
<script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3.2/jquery.easing.min.js" integrity="sha512-qJw3EXcEMHpFae2o6eQmiDc1TACjjT7xMGnMcsmDFB55XiL/6SdZEsRv08wRR+OLJ7sijqHksLHDAlbB94glxg==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" integrity="sha512-3n19xznO0ubPpSwYCRRBgHh63DrV+bdZfHK52b1esvId4GsfwStQNPJFjeQos2h3JwCmZl0/LgLxSKMAI55hgw==" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js" integrity="sha512-dTu0vJs5ndrd3kPwnYixvOCsvef5SGYW/zSSK4bcjRBcZHzqThq7pt7PmCv55yb8iBvni0TSeIDV8RYKjZL36A==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.min.js" integrity="sha512-jNDtFf7qgU0eH/+Z42FG4fw3w7DM/9zbgNPe3wfJlCylVDTT3IgKW5r92Vy9IHa6U50vyMz5gRByIu4YIXFtaQ==" crossorigin="anonymous"></script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous"></script>

<!-- Custom -->
<script src="<?php echo base_url(); ?>assets/js/main.js"></script>
<script type="text/javascript">var raf = window.requestAnimationFrame || window.mozRequestAnimationFrame || window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;</script>


<script type="text/javascript" src="front/controller/script/member/js/script.js"></script>
      <!--Modal-->
  <div id="register-modal"
      class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
      <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>

      <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">

          <div
              class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
              <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                  viewBox="0 0 18 18">
                  <path
                      d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                  </path>
              </svg>
              <span class="text-sm">(Esc)</span>
          </div>

          <!-- Add margin if you want to see some of the overlay behind the modal-->
          <div class="modal-content py-4 text-left px-6">
              <!--Title-->
              <div class="flex justify-between items-center pb-3">
                  <p class="text-2xl font-bold">สมัครสมาชิก</p>
                  <div class="modal-close cursor-pointer z-50">
                      <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                          viewBox="0 0 18 18">
                          <path
                              d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                          </path>
                      </svg>
                  </div>
              </div>

              <!--Body-->
              <p>การสมัครสมาชิกเรียบร้อยแล้ว</p>
              <!--Footer-->
              <div class="flex justify-end pt-2">
                  
                  <a href="/th/login"
                      class="modal-close px-4 bg-indigo-500 p-3 rounded-lg text-white hover:bg-indigo-400">Login</a>
              </div>

          </div>
      </div>

  </div>

  <!--Modal update-->
  <div id="save-modal"
      class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
      <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>

      <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">

          <div
              class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
              <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                  viewBox="0 0 18 18">
                  <path
                      d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                  </path>
              </svg>
              <span class="text-sm">(Esc)</span>
          </div>

          <!-- Add margin if you want to see some of the overlay behind the modal-->
          <div class="modal-content py-4 text-left px-6">
              <!--Title-->
              <div class="flex justify-between items-center pb-3">
                  <p class="text-2xl font-bold">บันทึกสำเร็จ</p>
                  <div class="modal-close cursor-pointer z-50">
                      <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                          viewBox="0 0 18 18">
                          <path
                              d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                          </path>
                      </svg>
                  </div>
              </div>

              <!--Body-->
              <p>การบันทึกของคุณเรียบร้อยเเล้ว</p>

          </div>
      </div>
  </div>



  
  <!--Modal qrcode-->
  <div id="qrcode-modal"
      class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
      <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>

      <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">

          <div
              class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
              <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                  viewBox="0 0 18 18">
                  <path
                      d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                  </path>
              </svg>
              <span class="text-sm">(Esc)</span>
          </div>

          <!-- Add margin if you want to see some of the overlay behind the modal-->
          <div class="modal-content py-4 text-left px-6">
              <!--Title-->
              <div class="flex justify-between items-center pb-3">
                  <p class="text-2xl font-bold"></p>
                  <div class="modal-close cursor-pointer z-50">
                      <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                          viewBox="0 0 18 18">
                          <path
                              d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                          </path>
                      </svg>
                  </div>
              </div>

              <!--Body-->
              <div id="qr-reader" class="w-full text-center max-h-60"></div>

          </div>
      </div>
  </div>
    
</body>

</html>
