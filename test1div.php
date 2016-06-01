<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>java Test</title>
</head>
<style type="text/css">
<!--
body,div { margin:0; padding:0;}
-->
</style>
<script type="text/javascript" src="js/jquery.js"></script>

<body>
<div style="background:#ccc;height:300px;" onclick=""></div>
<div style="position:relative;">
<div style=" position:absolute;left:50px; top:50px;" id="DivID"></div>
</div>
<script type="text/javascript">
var X = $('#DivID').offset().top;
var Y = $('#DivID').offset().left;
document.write(X+"<br />");
document.write(Y+"<br />");
//获取相对(父元素)位置:
var C = $('#DivID').position().top;
var D = $('#DivID').position().left;
document.write(C+"<br />");
document.write(D);
</script>
</body>
</html>