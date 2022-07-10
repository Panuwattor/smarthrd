
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
                        action="/th/member/register/4">
                        <div class="form-group">
                            <label class="control-label">เลขประจำตัวประชาชน</label>
                            <div class="block-control">
                                <input class="form-control" type="text" id="" name="" value="3550900095793"
                                    placeholder="13 หลัก" data-error="" required="" disabled="">
                                <input type="hidden" id="inputPID" name="inputPID" value="3550900095793" />
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row align-items-center">
                                                            </div>
                        </div>

                        <div class="h-title typo-lg fw-medium text-center pt-3">
                            ข้อมูลส่วนบุคคล
                            <small>บุคลากรภายใน</small>
                        </div>
                                                    <div class="text-center">
                                <span
                                    class="link text-underline link-primary typo-micro">เป็นบุคคลากรภายในที่ยังไม่มีรายชื่อในฐานข้อมูล</span>
                            </div>
                                                <input type="hidden" id="OCSCDB" name="OCSCDB" value="N" />
                        <input type="hidden" id="inqOCSC" name="inqOCSC" value="1" />
                        <input type="hidden" id="memberTypeName" name="memberTypeName" value="บุคลากรภายใน" />
                        <input type="hidden" id="inputMemberType" name="inputMemberType" value="2" />

                        <div class="form-group mt-4">
                            <label class="control-label">คำนำหน้าชื่อ <span class="text-danger">*</span></label>
                            <div class="block-control">
                                <select name="inputPrefix" id="inputPrefix" class="select-control"
                                    data-placeholder="โปรดระบุ" style="width: 100%;" >
                                    <option></option>
                                                                            <option value="นาย" >นาย</option>
                                                                            <option value="นาง" >นาง</option>
                                                                            <option value="นางสาว" >นางสาว</option>
                                    
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">ชื่อ</label>
                            <div class="block-control">
                                <input class="form-control" type="text" id="inputFName" name="inputFName"
                                    value="" placeholder="โปรดระบุ" data-error="" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">ชื่อกลาง</label>
                            <div class="block-control">
                                <input class="form-control" type="text" id="inputMidName" name="inputMidName"
                                    value="" placeholder="โปรดระบุ" data-error="" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">นามสกุล</label>
                            <div class="block-control">
                                <input class="form-control" type="text" id="inputLName" name="inputLName"
                                    value="" placeholder="โปรดระบุ" data-error="" >
                            </div>
                        </div>
                        <div class="form-group mt-4">
                            <label class="control-label">เพศ</label>
                            <div class="block-control">
                                <select name="inputSex" id="inputSex" class="select-control" data-placeholder="โปรดระบุ"
                                    style="width: 100%;" >
                                    <option></option>
                                                                            <option value="1" >ชาย</option>
                                                                            <option value="2" >หญิง</option>
                                    
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">วันเดือนปีเกิด</label>
                            <div class="block-control has-icon">
                                <span class="icon feather icon-calendar"></span>
                                <input class="form-control datepicker" type="text" id="inputDOB" name="inputDOB"
                                    value="" placeholder="" data-error="" >
                            </div>
                        </div>
                        <div class="form-group mt-4">
                            <label class="control-label">ระดับการศึกษา</label>
                            <div class="block-control">
                                <select name="inputEDU" id="inputEDU" class="select-control" data-placeholder="โปรดระบุ"
                                    style="width: 100%;" >
                                    <option></option>
                                                                            <option value="ระดับมัธยมศึกษาตอนต้น" >ระดับมัธยมศึกษาตอนต้น</option>
                                                                            <option value="ระดับมัธยมศึกษาตอนปลาย" >ระดับมัธยมศึกษาตอนปลาย</option>
                                                                            <option value="ระดับอาชีวศึกษา" >ระดับอาชีวศึกษา</option>
                                                                            <option value="ปริญญาตรี" >ปริญญาตรี</option>
                                                                            <option value="ปริญญาโท" >ปริญญาโท</option>
                                                                            <option value="ปริญญาเอก" >ปริญญาเอก</option>
                                    
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">อีเมล์</label>
                            <div class="block-control">
                                <input class="form-control" type="email" id="inputEmail" name="inputEmail"
                                    value="" placeholder="" data-error="" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">เบอร์โทร</label>
                            <div class="block-control">
                                <input class="form-control" type="tel" id="inputPhone" name="inputPhone"
                                    value="" placeholder="" data-error="" >
                            </div>
                        </div>

                        <div class="h-title typo-lg fw-medium text-center pt-3">
                            ข้อมูลการทำงาน
                        </div>
                        <div class="form-group mt-4">
                            <label class="control-label">ประเภทข้าราชการ/เจ้าหน้าที่ <span
                                    class="text-danger">*</span></label>
                            <div class="block-control">
                                <select name="inputjobType" id="inputjobType" class="select-control"
                                    data-placeholder="โปรดระบุ" style="width: 100%;" >
                                    <option></option>
                                                                            <option value="ข้าราชการพลเรือน" >ข้าราชการพลเรือน</option>
                                                                            <option value="ข้าราชการประเภทอื่นๆ" >ข้าราชการประเภทอื่นๆ</option>
                                                                            <option value="เจ้าหน้าที่ของรัฐในส่วนราชการต่างๆ" >เจ้าหน้าที่ของรัฐในส่วนราชการต่างๆ</option>
                                                                            <option value="พนักงานรัฐวิสาหกิจ" >พนักงานรัฐวิสาหกิจ</option>
                                                                            <option value="บุคคลทั่วไป" >บุคคลทั่วไป</option>
                                    
                                </select>
                            </div>
                        </div>

                        <div>
                            <div class="form-group">
                                <label class="control-label">ประเภทตำแหน่ง <span class="text-danger">*</span></label>
                                <div class="block-control">
                                    <select name="inputjobLevelGroup" id="inputjobLevelGroup" class="select-control"
                                        data-placeholder="โปรดระบุ" style="width: 100%;" >
                                        <option></option>
                                                                                    <option value="ตำแหน่งประเภทบริหาร" >ตำแหน่งประเภทบริหาร
                                            </option>
                                                                                    <option value="ตำแหน่งประเภทอำนวยการ" >ตำแหน่งประเภทอำนวยการ
                                            </option>
                                                                                    <option value="ตำแหน่งประเภทวิชาการ" >ตำแหน่งประเภทวิชาการ
                                            </option>
                                                                                    <option value="ตำแหน่งประเภททั่วไป" >ตำแหน่งประเภททั่วไป
                                            </option>
                                        
                                    </select>


                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label">ตำแหน่ง <span class="text-danger">*</span></label>
                                <div class="block-control">
                                    <input class="form-control" type="text" id="inputjobPosition" name="inputjobPosition"
                                        value="" placeholder="" data-error="" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label">ระดับ <span class="text-danger">*</span></label>
                                <div class="block-control">
                                    <select name="inputjobLevel" id="inputjobLevel" class="select-control"
                                        data-placeholder="โปรดระบุ" style="width: 100%;" >
                                        <option></option>
                                                                                    <option value="ระดับต้น" >ระดับต้น
                                            </option>
                                                                                    <option value="ระดับสูง" >ระดับสูง
                                            </option>
                                                                                    <option value="ระดับปฏิบัติการ" >ระดับปฏิบัติการ
                                            </option>
                                                                                    <option value="ระดับชำนาญการ" >ระดับชำนาญการ
                                            </option>
                                                                                    <option value="ระดับชำนาญการพิเศษ" >ระดับชำนาญการพิเศษ
                                            </option>
                                                                                    <option value="ระดับเชี่ยวชาญ" >ระดับเชี่ยวชาญ
                                            </option>
                                                                                    <option value="ระดับทรงคุณวุฒิ" >ระดับทรงคุณวุฒิ
                                            </option>
                                                                                    <option value="ระดับปฏิบัติงาน" >ระดับปฏิบัติงาน
                                            </option>
                                                                                    <option value="ระดับชำนาญงาน" >ระดับชำนาญงาน
                                            </option>
                                                                                    <option value="ระดับทักษะพิเศษ" >ระดับทักษะพิเศษ
                                            </option>
                                        
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label">วันที่รับราชการ <span class="text-danger">*</span></label>
                                <div class="block-control">
                                    <input class="form-control datepicker" type="text" id="inputjobStartDate"
                                        name="inputjobStartDate" value="" placeholder="" data-error=""
                                        >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label">กระทรวง <span class="text-danger">*</span></label>
                                <div class="block-control">
                                    <input class="form-control" type="text" id="inputjobMinistry" name="inputjobMinistry"
                                        value="" placeholder="" data-error="" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label">กรมต้นสังกัด <span class="text-danger">*</span></label>
                                <div class="block-control">
                                    <input class="form-control" type="text" id="inputjobDepartment"
                                        name="inputjobDepartment" value="" placeholder="" data-error=""
                                        >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label">ชื่อส่วนราชการที่สังกัด <span
                                        class="text-danger">*</span></label>
                                <div class="block-control">
                                    <input class="form-control" type="text" id="inputjobSubDepartment"
                                        name="inputjobSubDepartment" value="" placeholder=""
                                        data-error="" >
                                </div>
                            </div>
                        </div>

                        <div class="form-group pt-2">
                            <button type="submit" class="btn fluid btn-primary">สมัครสมาชิก</button>
                        </div>
                        
                        <div class="form-group pt-2">
                            <div class="custom-control custom-checkbox mr-sm-2">
                                <input type="checkbox" class="custom-control-input" id="accept">
                                <label class="custom-control-label" for="accept">
                                    คุณรับทราบและยอมรับ
                                    <a href="<?php echo base_url(); ?>privacy" target="_blank" class="link text-underline link-primary typo-micro">ข้อตกลงการใช้งาน และ นโยบายข้อมูลส่วนบุคคล</a>
                                </label>
                            </div>
                        </div>
                        
                        <div class="form-group text-center pt-2 mb-0">
                            <span class="text-mute typo-micro">มีบัญชีอยู่แล้วใช่หรือไม่?</span>
                            <a href="<?php echo base_url(); ?>member/login" class="link text-underline link-primary typo-micro">เข้าสู่ระบบ</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    </div>

