<section class="site-container">
<div class="default-page pt-0">
    <div class="course-detail-header">
        <figure class="cover">
            <img src="<?php echo $detail['pic']?>" alt="" class="img-cover">
        </figure>
    </div>  
    <div class="container">
        <div class="course-detail-content">
            <div class="header">
                <h2 class="title">
                    รายละเอียดแบบสำรวจ
                </h2>
            </div>
            <div class="body">
                <h3 class="title">
                    <?php echo $detail['subject']?>
                </h3>
                <p class="sub mt-2">
                    <?php echo $detail['detail']?>     
                </p>

                <div class="form-default">
                    <div class="wrapper">
                    <?php foreach ($items as $item) : ?>
                        <h4 class="title"><?=$item['group_name']?></h4>
                        <div class="form-group">
                        <?php foreach ($item['questions'] as $i => $qes) : ?>
                            <label class="control-label"><?php echo ($i + 1) .'. '. $qes['question']?></label>
                            <div class="block-control">
                                <div class="row">
                                <?php
                                if ($qes['choice_type'] == 1)
                                {
                                    $class_ctrl = 'radio-control';
                                    $input_name = 'choice'. $qes['id'];
                                    $input_type = '<input type="radio" name="'. $input_name .'" required>';
                                }
                                elseif ($qes['choice_type'] == 2)
                                {
                                    $class_ctrl = 'checkbox-control';
                                    $input_name = 'choice'. $qes['id'] .'[]';
                                    $input_type = '<input type="checkbox" name="'. $input_name .'" required>';
                                }
                                else
                                {
                                    $class_ctrl = 'row';
                                    $input_name = 'choice'. $qes['id'];
                                    $input_type = '<textarea name="'. $input_name .'" rows="4" class="form-control col-md-12"></textarea>';
                                }
                                foreach ($qes['choices'] as $choice) : ?>
                                    <div class="col-auto">
                                        <div class="<?=$class_ctrl?>">
                                            <div class="title"><?=$choice['choice_text']?></div>
                                            <br><?=$input_type?>
                                            <div class="icon"></div>
                                        </div>
                                    </div>
                                <?php endforeach?>
                                </div>
                            </div>
                        <?php endforeach?>
                        </div>
                    <?php endforeach?>
                    </div>
                </div>
            </div>
        </div>
        <div class="course-detail-qrcode">
            <div class="wrapper">
                <div class="header">
                    <h3 class="title">ทำแบบสำรวจด้วย QR Code</h3>
                    <p class="sub">ดาวน์โหลด QR Code สำหรับลงทะเบียน</p>
                </div>
                <div class="body">
                    <figure class="cover">
                        <img src="https://th.qr-code-generator.com/wp-content/themes/qr/new_structure/markets/basic_market/generator/dist/generator/assets/images/websiteQRCode_noFrame.png" alt="" class="img-cover">
                    </figure>
                    <p class="desc">
                        https:\\qrcode.png.com<br/>
                        ความละเอียด : 512×512<br/>
                        ขนาด Png : 4 kb
                    </p>
                </div>
                <div class="footer">
                    <div>
                        <a href="#" class="btn btn-primary">
                            <span class="feather icon-download"></span>
                            ดาวน์โหลด PNG
                        </a>
                    </div>
                    <div class="mt-3">
                        <a href="#" class="link link-primary typo-micro">
                            <span class="feather icon-copy"></span>
                            <span class="text-underline">คัดลอกลิงค์</span> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>