<!DOCTYPE html>
<html lang="th">

<head>
    <title></title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=1440">
<meta name="keywords" content="">
<meta name="description" content="">
</head>

<body>
	
    <div class="global-container1">
        <div class="auth-page">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col">
                        <div class="auth-img" align="center">
                            <img src="<?php echo base_url(); ?>assets/img/static/auth.jpg" alt="" width="550">
                        </div>
                        <h2 align="center">รหัสผ่านสำหรับใช้ครั้งเดียว (One Time Password)</h2>
                        <h3>สวัสดีคุณ: <?php echo $name;?></h3>
                        <h4>เราได้รับคำขอสำหรับการตั้งค่ารหัสผ่านใช้ครั้งเดียว กรุณาคลิกที่ Link ด้านล่างเพื่อทำการตั้งรหัสผ่าน</h4>
                        <p><a href="<?php echo $link;?>"><?php echo $link;?></a></p>
                        <p style="color:red;">กรุณาอย่าตอบกลับอีเมล์ฉบับนี้ เนื่องจากเป็นอีเมล์จากระบบ!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>