<?php require($_SERVER['DOCUMENT_ROOT']."/phpmailer/PHPMailerAutoload.php");?>
<?php
header('Content-Type: text/html; charset=utf-8');

$mail = new PHPMailer;
$mail->CharSet = "utf-8";
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;


$gmail_username = "pstudent.sut@gmail.com"; // gmail ที่ใช้ส่ง
$gmail_password = "pssut12345"; // รหัสผ่าน gmail
// ตั้งค่าอนุญาตการใช้งานได้ที่นี่ https://myaccount.google.com/lesssecureapps?pli=1


$sender = "PStudent Support"; // ชื่อผู้ส่ง
$email_sender = "pstudent.sut@gmail.com"; // เมล์ผู้ส่ง 
$email_receiver = "Thanakorn.pimt@gmail.com"; // เมล์ผู้รับ ***

$subject = "เปลี่ยนรหัสผ่าน"; // หัวข้อเมล์


$mail->Username = $gmail_username;
$mail->Password = $gmail_password;
$mail->setFrom($email_sender, $sender);
$mail->addAddress($email_receiver);
$mail->Subject = $subject;

$email_content = "
<!DOCTYPE html>
<html>
    <head>
        <meta charset=utf-8'/>
        <title>ทดสอบการส่ง Email</title>
    </head>
    <body>
        <h1 style='background: #3b434c;padding: 10px 0 20px 10px;margin-bottom:10px;font-size:30px;color:white;' >
        Reset Password
        </h1>
        <div style='padding:20px;'>
            <div style='text-align:center;margin-bottom:50px;'>
                <img src='https://miamioh.edu/_files/images/it-services/news-articles/2017/07/password-reset.jpg'width:50%' />					
            </div>
            <div>				
                <h2>การกู้รหัสผ่าน สำหรับ Student รหัส :<font color='red'> <?php echo $preset ?></font><strong style='color:#0000ff;'></strong></h2>
            </div>
            <div style='margin-top:30px;'>
                <hr>
                <address>
                    <h4>ติดต่อสอบถาม</h4>
                    <p>PStudent SUT</p>
                    <p>www.it2.sut.ac.th/PStudent</p>
                </address>
            </div>
        </div>
        <div style='background: #3b434c;color: #a2abb7;padding:30px;'>
            <div style='text-align:center'> 
                2020 © PStudent SUT
            </div>
        </div>
    </body>
</html>
";
//  ถ้ามี email ผู้รับ
if($email_receiver){
	$mail->msgHTML($email_content);


	if (!$mail->send()) {  // สั่งให้ส่ง email

		// กรณีส่ง email ไม่สำเร็จ
		echo "<h3 class='text-center'>ระบบมีปัญหา กรุณาลองใหม่อีกครั้ง</h3>";
		echo $mail->ErrorInfo; // ข้อความ รายละเอียดการ error
	}else{
		// กรณีส่ง email สำเร็จ
		echo "ระบบได้ส่งข้อความไปเรียบร้อย";
	}	
}



?>