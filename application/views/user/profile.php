<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<html>
<head>
    <title>Fejvoks</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/profile.css">
    <script type="text/javascript" src="<?= base_url('assets/js/profile.js'); ?>"></script>
</head>
<body style="background-color: #EFEFEF">
<div>
    <h1>
        Fejvoks<br>
        Conference<span>June3-June5, Chicago, U.S</span>
    </h1>
</div>
<form name="form1" action="<?= site_url('user/updateuser'); ?>" method="post" onsubmit="return validate()">
<h2 style="border: ridge; width: 100%; text-align: center;">USER DETAILS</h2><br>
<pre>
Name: <input type="text" id="name1" name="name1" value="<?= $row['name'] ?>" disabled><br>
E-mail: <input type="email" id="email1" name="email" value="<?= $row['email'] ?>" disabled><br>
Gender: <input type="radio" id="gender1" name="gender" value="male" <?= ($row['gender'] == 'male') ? 'checked="true"' : '' ?> disabled>male
        <input type="radio" id="gender2" name="gender" value="female" <?= ($row['gender'] == 'female') ? 'checked="true"' : '' ?> disabled>female<br>
Date Of Birth: <input type="date" id="dob" name="dob" value="<?= $row['d_o_b'] ?>" disabled><br>
Religion: <input type="radio" id="religion1" name="religion" value="Christian" <?= ($row['Religion'] == 'Christian') ? 'checked="true"' : '' ?> disabled>Christian
          <input type="radio" id="religion2" name="religion" value="Hindu" <?= ($row['Religion'] == 'Hindu') ? 'checked="true"' : '' ?> disabled>Hindu
          <input type="radio" id="religion3" name="religion" value="Muslim" <?= ($row['Religion'] == 'Muslim') ? 'checked="true"' : '' ?> disabled>Muslim<br>
Caste: <input type="radio" id="caste1" name="caste" value="OC" <?= ($row['Caste'] == 'OC') ? 'checked="true"' : '' ?> disabled>OC
       <input type="radio" id="caste2" name="caste" value="BC" <?= ($row['Caste'] == 'BC') ? 'checked="true"' : '' ?> disabled>BC
       <input type="radio" id="caste3" name="caste" value="SC" <?= ($row['Caste'] == 'SC') ? 'checked="true"' : '' ?> disabled>SC
       <input type="radio" name="caste" id="caste4" value="Others" <?= ($row['Caste'] == 'Others') ? 'checked="true"' : '' ?> disabled>Others<br>
Father's Name: <input type="text" id="fname" name="fname" value="<?= $row['fname'] ?>" disabled><br>
Father's Occupation: <input type="text" id="foccup" name="foccup" value="<?= $row['foccup'] ?>" disabled><br>
Mother's Name: <input type="text" id="mname" name="mname" value="<?= $row['mname'] ?>" disabled><br>
Mother's Occupation: <input type="text" id="moccup" name="moccup" value="<?= $row['moccup'] ?>" disabled><br>
Qualifications: 
<input type="checkbox" id="d1" name="qualif[]" value="HSC" <?= (in_array("HSC", $qualif)) ? 'checked="true"' : '' ?> disabled>HSC
<input type="checkbox" name="qualif[]" id="d2" value="Diplomo" <?= (in_array("Diplomo", $qualif)) ? 'checked="true"' : '' ?> disabled>Diplomo
<input type="checkbox" name="qualif[]" id="d3" value="UG" <?= (in_array("UG", $qualif)) ? 'checked="true"' : '' ?> disabled>UG
<input type="checkbox" name="qualif[]" id="d4" value="PG" <?= (in_array("PG", $qualif)) ? 'checked="true"' : '' ?> disabled>PG<br>
Address: <textarea rows="5" id="address" name="address" disabled><?= $row['address'] ?></textarea>
Contact number: <input type="number" id="number" name="number" value="<?= $row['cnumber'] ?>" disabled><br>
Degree: 
<input type="radio" id="degree1" name="degree" value="B.E." <?= ($row['degree'] == 'B.E.') ? 'checked="true"' : '' ?> disabled>B.E.
<input type="radio" id="degree2" name="degree" value="M.E." <?= ($row['degree'] == 'M.E.') ? 'checked="true"' : '' ?> disabled>M.E.
<input type="radio" id="degree3" name="degree" value="B.Ed" <?= ($row['degree'] == 'B.Ed') ? 'checked="true"' : '' ?> disabled>B.Ed
<input type="radio" id="degree4" name="degree" value="M.Ed" <?= ($row['degree'] == 'M.Ed') ? 'checked="true"' : '' ?> disabled>M.Ed
<input type="radio" id="degree5" name="degree" value="Ph.d" <?= ($row['degree'] == 'Ph.d') ? 'checked="true"' : '' ?> disabled>Ph.d<br>
Known programming languages: 
<input type="checkbox" id="c1" name="langs[]" value="HTML" <?= (in_array("HTML", $langs)) ? 'checked="true"' : '' ?> disabled>HTML
<input type="checkbox" id="c2" name="langs[]" value="CSS" <?= (in_array("CSS", $langs)) ? 'checked="true"' : '' ?> disabled>CSS
<input type="checkbox" id="c3" name="langs[]" value="PHP" <?= (in_array("PHP", $langs)) ? 'checked="true"' : '' ?> disabled>PHP
<input type="checkbox" id="c4" name="langs[]" value="jQuery" <?= (in_array("jQuery", $langs)) ? 'checked="true"' : '' ?> disabled>jQuery<br>
Unique Id: <input type="text" name="unique_id" id="unique_id" value="<?= $row['unique_id'] ?>" readOnly>
</form>
<button onclick="editable()" type="button">Edit</button>
<input style="height: 50px; width:width:100px;background-color:#efc9af;" type="submit" name="submit" id="submit" value="submit"  disabled/><br>    

   <center><font color="teal" size=5>© Fejvoks Conferences</font></center>


</body>
</html> 
