
<?php
if(empty($_POST)){
echo '<head>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="jquery.maskedinput-1.2.2.js"></script>
</head>
<body>
    <script type="text/javascript">
   jQuery(function($) {
      $.mask.definitions["~"]="[+-]";
      $("#date").mask("99/99/9999");
      $("#phone").mask("+7 (999) 999-9999");
      $("#phoneext").mask("(999) 999-9999? x99999");
      $("#tin").mask("99-9999999");
      $("#ssn").mask("999-99-9999");
      $("#product").mask("a*-999-a999");
      $("#eyescript").mask("~9.99 ~9.99 999");
   });</script>
<form method="post">
<input type="radio" name="n" value=0><img src="0.png" width="190"><br>
<input type="radio" name="n" value=1><img src="1.png" width="190"><br>
<br>Логин: <input type="text" name="text" value="Логин">
<br>Тел:   <input type="text" name="text2" id="phone" value=" ">
<br><br><input type="submit">
</form>
</body>
';
}else{
$n=$_POST['n'];
$text = $_POST['text'];
$text2 = $_POST['text2'];
    
switch($n){
case 0:
$f='0';
break;
case 1:
$f='1';
break;
}
$im = imagecreatefrompng("$f.png");
header('Content-Type: image/png');
header('Content-Disposition: attachment; filename="lable.png"');
$font = 'impact.ttf';
imagettftext($im, 20, 0, 380, 35, 0x000000, $font, $text);
imagettftext($im, 55, 0, 20, 152, 0x000000, $font, $text2);
imagepng($im);
imagedestroy($im);
}
?>