<?php
$preset =rand();

?>
<!DOCTYPE html>
<html>
<head>
<title>Student Project</title>
	<link rel="stylesheet" href="nice/css/mdb.min.css">
	<link rel='stylesheet' type='text/css' href='css/bootstrapA.css'>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<style>
body{
	background:#E6E6FA !important;
}

input[type=text], select {
  width: 50%;
  height: 45px;
  px;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 2px solid #d3d3d3;
  border-radius: 4px;
  box-sizing: border-box;
}

</style>
</head>
<body>


<main>
	<div class="container-xl"><br/>
		<div class="card" style="width: 100%;">
			<div class="card-header bg-dark text-white" style="font-size: 25px;"><a style="color: white;" href="index.php"><i class="fas fa-arrow-alt-circle-left"></i></a> ลืมรหัสผ่าน</div>
			<div class="card-body">
				<p >
				<Table width=75% align='right'><tr><td><h6>ขั้นตอนที่ 1.</h6></td></tr><tr><td>
				                        <form action="" method="post">
				                        <input type='text' name='reset' placeholder='กรอก Username หรือ Email ของคุณ'><input type="hidden" name="SM" value="<?php echo $preset; ?>"><button type="submit" name="submit" class="btn purple-gradient btn-rounded mx-2 " > ยืนยัน </button>
				                        </form>
				</td></tr>
				</p>

			</div>
		</div>
	</div>

<?php
error_reporting(~E_NOTICE);

                        if(isset($_POST['submit'])||isset($_POST['submit2'])){

                            $i =0;
                            $NReset = $_POST['reset'];
                            include('config/connect.php');
                           $sql1 = "SELECT * FROM `users` WHERE Username = '".$NReset."' or Email = '".$NReset."'";
                            $result1 = $db->query($sql1);
                            if ($result1->num_rows > 0) {
                            while($row1 = $result1->fetch_assoc()){
                                if(isset($_POST['submit'])&&isset($_POST['SM'])) {


require($_SERVER['DOCUMENT_ROOT']."/phpmailer/PHPMailerAutoload.php");

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
                <h2>การกู้รหัสผ่าน สำหรับ Student รหัส :<font color='red'> ".$_POST['SM']."</font><strong style='color:#0000ff;'></strong></h2>
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

	}
}




                                }
                            session_start();
                            $_SESSION['SM'] = $_POST["SM"];
                            echo "<tr><td ><p Style='cursor: pointer;border-left: solid 3px #8bc34a;background-color:#f1f8e9;width:60%' ><br>&nbsp; กรุณาตรวจสอบรหัสรีเซ็ต password ที่ Email : ".$row1["Email"]." <br><br></p></td></tr>";
                            echo "<tr><td><h3>ขั้นตอนที่ 2.</h3></td></tr><tr><td> <form action='' method='post'>
                            <input type='text' name='reset2' placeholder='กรอกรหัส Reset Password'><input type='hidden' name='reset' value='".$NReset."'><input type='hidden' name='u' value='".$row1['Id']."'><input type='hidden' name='SM' value='".$_SESSION['SM']."'><button type='submit' name='submit2' class='btn purple-gradient btn-rounded mx-2 ' > ยืนยัน </button>
                            </form></td></tr>";
                            if(isset($_POST['submit2'])){
                            $_POST['SM'];
                            if(isset($_POST['submit2'])&&($_POST['SM']==$_POST['reset2'])){
                                $u = $_POST['u'];
                                $id=$_POST['SM'];
                                header('Location: reset_password.php?id='.$id.'&&u='.$u.'');
                            }else{
                                echo "<tr><td ><p Style='cursor: pointer;border-left: solid 3px #ffbb33;background-color:#fffde7;width:60%' ><br>&nbsp; หมายเหตุ : รหัส Reset Password ไม่ถูกต้อง <br><br></p></td></tr>";
                            }

                        }

                            }
                            } else {
                                echo "<tr><td ><p Style='cursor: pointer;border-left: solid 3px #ffbb33;background-color:#fffde7;width:60%' ><br>&nbsp; หมายเหตุ : ไม่พบ Username หรือ Email ผู้ใช้ ที่ต้องการเปลี่ยนรหัสผ่าน <br><br></p></td></tr>";
                            }





                        }


?>


 </Table>
</main>
</body>
</html>
