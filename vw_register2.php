
<section class="site-container">
        <div class="auth-page">
            <div class="container">
                <div class="auth-wrapper">
                    <div class="brand">
                        <img src="https://mnre.plavan.dev/front/template/default/assets/img/static/logo.png" alt="">
                    </div>
                    <div class="h-title typo-lg fw-medium text-center">
                        สมัครสมาชิก
                    </div>
                    <form data-toggle="validator" role="form" class="form-default pt-2" method="post"
                        action="<?php echo base_url(); ?>member/register3">
                        <div class="form-group">
                            <label class="control-label">เลขประจำตัวประชาชน </label> 
                                <input class="form-control" type="text" id="inputPID" name="inputPID" value=""
                                    placeholder="13 หลัก" data-error="" required="" minlength="13" maxlength="13"
                                    pattern="^\d*$" title="กรุณากรอกข้อมูลให้ถูกต้อง">
                                <div class="valid-feedback">
                                    เลขบัตรถูกต้อง
                              </div>
                              <div class="invalid-feedback">
                                    !! เลขบัตรผิด กรุณาใส่เลขบัตรใหม่ !!
                              </div>
                        </div>
                        <div class="form-group pt-2">
                            <button type="submit" class="btn fluid btn-primary">ตรวจสอบข้อมูล</button>
                        </div>
                        
                        <input type="hidden" id="inputMemberType" name="inputMemberType" value="2" />
                    </form>
                </div>
            </div>
        </div>
    </section>


    </div>