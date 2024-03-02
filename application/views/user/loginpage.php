<html>
<head> <title>profile</title>
<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/loginpage.css">
<script type="text/javascript" src="<?= base_url('assets/js/loginpage.js'); ?>"></script> 
</head>
<body style="background-color:FBF8F1">
      <div><h1>
            Fejvoks<br>
           Conference<span>June3-June5,Chicago,U.S</span></h1></div>
           <h2><center>Login</center></h2>
           </div>
           <form form name="form1" action="<?php echo site_url('user/check_login'); ?>" method="post" onsubmit="return validate()"><br><br><br><br><br><br><br><br><br><br>
<center><b> 
Enter your Unique ID     :<input type="text" name="uniqueid"></b><br><br><br>
               <b> 
Enter your Date Of Birth :<input type="date" name="dob"></b><br><br></center>
<center><b><button style="height:50px;width:100px;background-color:#efc9af;" name="w3" type="submit"  value="HTML"  ><font color="#761137" size=5 face="blackadder"><a style="text-decoration:none" >View</a></button></center></b>
</form>

</body>
</html> 

