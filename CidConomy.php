<?php
// Set defalut DB parameters
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "TEST";

// Create connection and connect to DB
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//Get values from URL
$year = $_GET["year"];
$moth = $_GET["month"];
$sum = $year . "_"  . $moth;

// Check if first running the app
$button = $_REQUEST["button"];
if($sum == '_' )
{
   $sum = "2018_Jan";
   $moth = "Jan";
   $year = "2018";	
}

// Get valus from form
switch($button) {
    case 'Spara':
     	$sal1 = $_GET["IN1"];
        $sal2 = $_GET["IN2"]; 
	$sal3 = $_GET["IN3"];
        $sal4 = $_GET["IN4"];
	$ut1 = $_GET["UT1"];
        $ut2 = $_GET["UT2"];
        $ut3 = $_GET["UT3"];
        $ut4 = $_GET["UT4"];
	$ut5 = $_GET["UT5"];
        $ut6 = $_GET["UT6"];
        $ut7 = $_GET["UT7"];
        $ut8 = $_GET["UT8"];
	$ut9 = $_GET["UT9"];
        $ut10 = $_GET["UT10"];
        $ut11 = $_GET["UT11"];
        $ut12 = $_GET["UT12"];
        $ut13 = $_GET["UT13"];
        $ut14 = $_GET["UT14"];
        $ut15 = $_GET["UT15"];
        $ut16 = $_GET["UT16"];
	$ut17 = $_GET["UT17"];
        $ut18 = $_GET["UT18"];
        $ut19 = $_GET["UT19"];
        $ut20 = $_GET["UT20"];
        $ut21 = $_GET["UT21"];
	$sql = "UPDATE `CID_CONOMY` SET `IN1`=\"$sal1\", `IN2`=\"$sal2\", `IN3`=\"$sal3\", `IN4`=\"$sal4\", `UT1`=\"$ut1\", `UT2`=\"$ut2\", `UT3`=\"$ut3\", `UT4`=\"$ut4\", `UT5`=\"$ut5\", `UT6`=\"$ut6\", `UT7`=\"$ut7\", `UT8`=\"$ut8\", `UT9`=\"$ut9\", `UT10`=\"$ut10\", `UT11`=\"$ut11\" , `UT12`=\"$ut12\", `UT13`=\"$ut13\", `UT14`=\"$ut14\", `UT15`=\"$ut15\", `UT16`=\"$ut16\", `UT17`=\"$ut17\", `UT18`=\"$ut18\", `UT19`=\"$ut19\", `UT20`=\"$ut20\", `UT21`=\"$ut21\" WHERE ID=\"$sum\"";
	$result = $conn->query($sql);
	$sql = "SELECT * FROM `CID_CONOMY` WHERE ID=\"$sum\"";
	break;
    default:
	$sql = "SELECT * FROM `CID_CONOMY` WHERE ID=\"$sum\"";
}

// Get values and set variables from DB
$result = $conn->query($sql);
if ($result->num_rows > 0) {
     while($row = $result->fetch_assoc()) {
        $sal1 = $row["IN1"]; 
	$sal2 = $row["IN2"];
	$sal3 = $row["IN3"];
	$sal4 = $row["IN4"];
        $ut1 = $row["UT1"];
	$ut2 = $row["UT2"];
	$ut3 = $row["UT3"];
        $ut4 = $row["UT4"];
	$ut5 = $row["UT5"];
        $ut6 = $row["UT6"];
	$ut7 = $row["UT7"];
        $ut8 = $row["UT8"];
	$ut9 = $row["UT9"];
        $ut10 = $row["UT10"];
	$ut11 = $row["UT11"];
        $ut12 = $row["UT12"];
	$ut13 = $row["UT13"];
        $ut14 = $row["UT14"];
	$ut15 = $row["UT15"];
        $ut16 = $row["UT16"];
	$ut17 = $row["UT17"];
        $ut18 = $row["UT18"];
        $ut19 = $row["UT19"];
        $ut20 = $row["UT20"];
        $ut21 = $row["UT21"];
    }
} else {
   echo "0 results";
}

// Calculate tot IN and Out
$tot_in = $sal1 + $sal2 + $sal3 + $sal4;
$tot_ut = $ut1 + $ut2 + $ut3 + $ut4 + $ut5 + $ut6 + $ut7 +$ut8 + $ut9 + $ut10 + $ut11 + $ut12 + $ut13 + $ut14 + $ut15 + $ut16 + $ut17 + $ut18 + $ut19 + $ut20 + $ut21;
$tot_spara = $tot_in - $tot_ut;

// Close cannicetion to DB
mysql_close($conn);
?>

<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {margin:0;}

.icon-bar {
    width: 100%;
    background-color: #555;
    overflow: auto;
}
.icon-bar a {
    float: left;
    width: 20%;
    text-align: center;
    padding: 5px 0;
    transition: all 0.3s ease;
    color: white;
    font-size: 12px;
}
.icon-bar a:hover {
    background-color: #000;
}
.active {
    background-color: #4CAF50 !important;
}
body {
    background-color: powderblue;
}
</style>
<body>

<div class="icon-bar">
  <a class="active" href="#"><i class="fa fa-home"></i></a> 
  <a href="#"><i class="fa fa-search"></i></a> 
  <a href="#"><i class="fa fa-envelope"></i></a> 
  <a href="#"><i class="fa fa-globe"></i></a>
  <a href="#"><i class="fa fa-trash"></i></a> 
</div>

<style>
table, th, td {
   // border: 0.5px solid black;
}
</style>

<form accept-charset="UTF-8" action="CidConomy.php" autocomplete="off" method="GET" target="_self">
   <fieldset>
      <legend>CidConomy</legend>
      <textarea name="message" disabled rows="1" cols="55">Total att spara....: <?php echo $tot_spara; ?> = <?php echo $tot_in; ?> - <?php echo $tot_ut; ?></textarea><br>

      	<table style="width:60%">
        <tr>
           <td><select name="year">
                  <option value="<?php echo $year; ?>" selected><?php echo $year; ?></option> 
		  <option value="2018">2018</option>
 	          <option value="2019">2019</option></select>
               <select name="month">
		   <option value="<?php echo $moth; ?>" selected><?php echo $moth; ?></option>
                   <option value="Jan">Jan</option>
                   <option value="Feb">Feb</option>
                   <option value="Mar">Mar</option>
                   <option value="Apr">Apr</option>
                   <option value="May">May</option>
                   <option value="Jun">Jun</option>
                   <option value="Jul">Jul</option>
                   <option value="Aug">Aug</option>
                   <option value="Sep">Sep</option>
                   <option value="Okt">Okt</option>
                   <option value="Nov">Nov</option>
                   <option value="Dec">Dec</option> </select>
 		  <input name ="button" type="submit" value="Hämta">
           <td><input name="button" type="submit" value="Spara"> </td>
       </tr> <tr>
           <td>Lön 1</td>
           <td><input type="number" name="IN1" value="<?php echo $sal1; ?>"></td>
       </tr><tr>
           <td>Lön 2</td>
           <td><input type="number" name="IN2" value="<?php echo $sal2; ?>"></td>
        </tr><tr>
           <td>Barnbidrag</td>
           <td><input type="number" name="IN3" value="<?php echo $sal3; ?>"></td>
  	</tr><tr>
           <td>Övriga inkomster</td>
           <td><input type="number" name="IN4" value="<?php echo $sal4; ?>"></td>
        </tr><tr>
           <td></td>
           <td></td>
	</tr><tr>
	   <td>Hemlån</td>
           <td><input type="number" name="UT1" value="<?php echo $ut1; ?>"></td>
        </tr><tr>
           <td>Elkostnader</td>
           <td><input type="number" name="UT2" value="<?php echo $ut2; ?>"></td>
        </tr><tr>
           <td>Vatten</td>
           <td><input type="number" name="UT3" value="<?php echo $ut3; ?>"></td>
        </tr><tr>
	   <td>Sopor</td>
           <td><input type="number" name="UT4" value="<?php echo $ut4; ?>"></td>
        </tr><tr>
	   <td>Villaförsäkring</td>
           <td><input type="number" name="UT5" value="<?php echo $ut5; ?>"></td>
       </tr><tr>
           <td>Tv</td>
           <td><input type="number" name="UT6" value="<?php echo $ut6; ?>"></td>
        </tr><tr>
           <td>Internet</td>
           <td><input type="number" name="UT7" value="<?php echo $ut7; ?>"></td>
        </tr><tr>
           <td>Netflix</td>
           <td><input type="number" name="UT8" value="<?php echo $ut8; ?>"></td>
        </tr><tr>
	   <td>Spotify</td>
           <td><input type="number" name="UT9" value="<?php echo $ut9; ?>"></td>
       </tr><tr>
           <td>Fritids</td>
           <td><input type="number" name="UT10" value="<?php echo $ut10; ?>"></td>
        </tr><tr>
           <td>Mobil N</td>
           <td><input type="number" name="UT11" value="<?php echo $ut11; ?>"></td>
        </tr><tr>
           <td>Mobil E</td>
           <td><input type="number" name="UT12" value="<?php echo $ut12; ?>"></td>
        </tr><tr>
            <td>Livförsäkring</td>
            <td><input type="number" name="UT13" value="<?php echo $ut13; ?>"></td>
        </tr><tr>
           <td>Sparande barn</td>
           <td><input type="number" name="UT14" value="<?php echo $ut14; ?>"></td>
        </tr><tr>
           <td>Försäkring familj</td>
           <td><input type="number" name="UT15" value="<?php echo $ut15; ?>"></td>
       </tr><tr>
           <td>Billån</td>
           <td><input type="number" name="UT16" value="<?php echo $ut16; ?>"></td>
        </tr><tr>
           <td>Bilskatt</td>
           <td><input type="number" name="UT17" value="<?php echo $ut17; ?>"></td>
        </tr><tr>
           <td>Bilförsäkring</td>
           <td><input type="number" name="UT18" value="<?php echo $ut18; ?>"></td>
        </tr><tr>
	   <td>Bilservice</td>
           <td><input type="number" name="UT19" value="<?php echo $ut19; ?>"></td>
        </tr><tr>
           <td>Visa R</td>
           <td><input type="number" name="UT20" value="<?php echo $ut20; ?>"></td>
        </tr><tr>
           <td>Visa E</td>
           <td><input type="number" name="UT21" value="<?php echo $ut21; ?>"></td>
        </tr><tr>
   </fieldset>
</form>
</body>
</html>
