﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?if(!empty($extrahead)){	echo $extrahead;}?>
<title>信息提示</title>
<style>
/* CSS Document */
html, body {
	background: #DAE6F3;
	color: #FFFFFF;
	font: 12px Arial, Helvetica, sans-serif;
}
.logintable {
	border: 1px solid #296C89;
	background: #159BD0;
	margin-left: auto;
	margin-right: auto;
}
.loginheader td {
	height: 40px;
	background:  url(login_header.gif) repeat-x;
	}
input {
	border: 1px solid #FFFFFF;
	background: #FFFFFF;
	}
td.line1 {
	border-bottom: 1px solid #3C8DB1;
	}
td.line2 {
	border-top: 1px solid #81CDEF;
	}
a {
	color: #FFFF66;
	}
form {
	margin: 0px;
}
a:hover {
	color: #FFFF66;
	}
.button {
	font: 12px Arial, Helvetica, sans-serif;
	padding: 0 6px;
	color: #000000;
	background: #bedeff url(bg_button.gif) repeat-x;

	/*for Mozilla*/
 	outline: 1px solid #296c89 ;
	border: 1px solid #FFFFFF !important;
	height: 24px !important;
	line-height: 22px !important;

	/*for IE7*/
	> border: 1px solid #296C89 !important;
	> height: 26px !important;
	> line-height: 20px !important;

	/*for IE*/
	border: 1px solid #296C89 ;
	height: 26px;
	line-height: 20px;
}
</style>
</head><body>

<?if (!empty($history)) {echo $history;}?>


<table width="600" border="0" cellpadding="8" cellspacing="0" class="logintable">
<tr class="loginheader"><td width="80"></td><td width="100"></td><td></td><td width="120"></td><td width="80"></td></tr>
<tr style="height:40px"><td>&nbsp;</td>
<td class="line1"><span style="color:#ffff66;font-size:14px;font-weight: bold;">信息提示</span></td>
<td class="line1">&nbsp;</td>
<td class="line1">&nbsp;</td>
<td>&nbsp;</td></tr>
<tr><td>&nbsp;</td>
<td class="line2">&nbsp;</td><td class="line2">&nbsp;</td><td class="line2">&nbsp;</td><td>&nbsp;</td></tr>
<tr><td>&nbsp;</td><td align="center" colspan="3" >
<?=$message?><br />
<?if (!empty($extrahead)){?>
如未能自动跳转 <a href="<?=$url_forward?>">点击这里</a> 
<?}?>
<br><br><br><tr><td>&nbsp;</td>
<td class="line2">&nbsp;</td>
<td class="line2">&nbsp;</td><td class="line2">&nbsp;</td><td>&nbsp;</td></tr>
<tr>
	<td colspan="5" align="center">
	</td>
</tr>
<tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr></table>
</html>
