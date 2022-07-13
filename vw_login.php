<section class="site-container">
        <div class="auth-page">
            <div class="container">
                <div class="auth-wrapper">
                    <div class="brand">
                        <img src="https://mnre.plavan.dev/front/template/default/assets/img/static/logo.png" alt="">
                    </div>
                    <div class="h-title typo-lg fw-medium text-center">
                        เข้าสู่ระบบ
                    </div>
                    <form action="/th/member/login" data-toggle="validator" role="form" class="form-default pt-2"
                        method="post">
                        <div class="form-group">
                            <label class="control-label" >เลขประจำตัวประชาชน</label>
                                <input class="form-control" type="text" id="inputLoginUsername" name="inputLoginUsername"
                                    value="" placeholder="13 หลัก" data-error="" required="" minlength="13" maxlength="13"
                                    pattern="^\d*$">
                            <div class="valid-feedback">
                                เลขบัตรถูกต้อง
                            </div>
                            <div class="invalid-feedback">
                                !! เลขบัตรผิด กรุณาใส่เลขบัตรใหม่ !!
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">รหัสผ่าน</label>
                            <div class="block-control">
                                <input class="form-control password" type="password" id="inputLoginPass"
                                    name="inputLoginPass" value="" placeholder="รหัสผ่าน" data-error="" required="">
                                <button type="button" id="LoginPass" data-toggle="pass-status"
                                    class="btn feather icon-eye-off"></button>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">รหัสความปลอดภัย</label>
                            <div class="block-control">
                                <input class="form-control" type="text" id="inputCaptcha" name="inputCaptcha" value=""
                                    placeholder="รหัสผ่านความปลอดภัย" data-error="" required="">
                                <div class="captcha">
                                    <div class="row no-gutters">
                                        <div class="col">
                                            <span class="captcha-code" id="captcha">
                                                lbni
                                            </span>
                                        </div>
                                        <div class="col-auto" id="changeCpt">
                                            <span class="feather icon-refresh-cw" style="cursor: pointer"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row align-items-center">
                                <div class="col">
                                    <div class="checkbox-control">
                                        <input type="checkbox" name="remember_me" id="remember_me">
                                        <div class="icon"></div>
                                        <div class="title">จดจำฉัน</div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <a href="<?php echo base_url(); ?>member/forgot_password"
                                        class="link text-underline link-primary typo-micro">ลืมรหัสผ่าน</a>
                                </div>
                            </div>
                        </div>
    
                        <div class="form-group">
                            <div class="row align-items-center">
                                                        </div>
                        </div>
    
                        <div class="form-group">
                            <button type="submit" class="btn fluid btn-primary">เข้าสู่ระบบ</button>
                        </div>
                        <div class="form-group text-center pt-2 mb-0">
                            <span class="text-mute typo-micro">ยังไม่มีบัญชีใช่หรือไม่?</span>
                            <a href="<?php echo base_url(); ?>member/register2"
                                class="link text-underline link-primary typo-micro">สมัครสมาชิก</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
        </div>

