<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.js"></script>
<title>…</title>
<script>
$(document).ready(function(e) {
	var $a = '';
	$('#bt1').click(function(e) {
		$a = 0;
        alert('ค่าก่อนเปลี่ยน '+$a)
    });
	$('#bt2').click(function(e) {
        $a = 10;
		alert('เปลี่ยนค่าแล้ว')
    });
	$('#bt3').click(function(e) {
        alert('หลังเปลี่ยน '+$a)
    });
	
});
$(document).ready(function(f) {
	var $CT1 = '';
    var $CT2 = '';
    var $CT3 = '';
    var $CT4 = '';
	$('#bct1').click(function(f) {
		$CT1 = "page-item active";
        alert('ค่าก่อนเปลี่ยน '+$CT1)
    });
	$('#bct2').click(function(f) {
        $a = 10;
		alert('เปลี่ยนค่าแล้ว')
    });
	$('#bct3').click(function(f) {
        alert('หลังเปลี่ยน '+$a)
    });
    $('#bct4').click(function(f) {
        $a = $a+1;
        alert('หลังเปลี่ยน '+$a)
    });
	
});
</script>
</head>

<body>
<button type="button" id="bt1">ค่าเริ่มต้น</button>
<button type="button" id="bt2">เปลี่ยนค่า</button>
<button type="button" id="bt3">ค่าหลังเปลี่ยน</button>



<nav aria-label="Page navigation example">
<ul class="pagination pg-blue">
<li class="<?php echo $CT1; ?>">
<button class="page-link"  id="bct1">ทั้งหมด</button>
</li>
<li class="<?php echo $CT2; ?>"><button type="submit"  id="bct2" class="page-link">อนุมัติแล้ว</button></li>
<li class="<?php echo $CT3; ?>"><button type="submit"  id="bct3" class="page-link">รออนุมัติ</button></li>
<li class="<?php echo $CT4; ?>"><button type="submit"  id="bct4" class="page-link">ไม่อนุมัติ</button></li>
</ul>
</nav>
</body>
</html>