<!DOCTYPE html>
<html>
	<head>
<meta charsat="utf-8">

	<title>Robot control panel</title>
	<link href ="styles2.css" type="text/css" rel="stylesheet">
	

	

	</head>
	<body>
	
	<h1 style="margin: 20px auto 10 120 ">Robot Control Panel</h1>
		<h2>If you want me to move, choose the right direction :</h2>
		<form id="myForm" action="combinedtask.php" method = "POST" >
		<table style="width:10%">
	‏  	<tr>
	‏    <th>  </th>
	‏    <th>  </th> 
	‏    <th>  </th>
	‏  </tr>

	‏    <tr>
				<td> </td>
	‏   	 <td>  <input type="submit"  value=" Forward " name = " forward " style="font-size: 40px; background: #F0F8FF; border-radius: 60px; color:black;"> </td>
	‏   </tr> 
			<td></td>

	‏    <tr>

	‏    <td> <input type="submit"  value="  Left  " name = " left " style="font-size: 40px; background: #F0F8FF; border-radius: 50px; color: black; "> </td> 
	    <td> <div class="Stop"> <input type="submit"  value=" Stop " name = " stop " style="font-size: 40px; background: #990033; border-radius: 60px; color: white; padding: 20px; "> </td></div>
		<td> <input type="submit"  value="  Right " name = " right " style="font-size: 40px; background: #F0F8FF; border-radius: 50px; color: black;"> </td>
	‏    </tr> 
	‏    <tr>
	‏        <td></td>
	‏    <td><input type="submit"  value=" Backward " name = " backward " style="font-size: 40px; background: #F0F8FF; border-radius: 50px; color: black;">   
	‏        </td> 
	‏     
	‏    </tr>
	</table>
	</form> 
	</br></br></br>
	<button><a href= "combined.php " style="font-size: 23px; background: #F0F8FF ; color:black; "> <- Back  </a> </button>

</body>
</html>

<?php
error_reporting(E_ALL&~E_NOTICE);
ini_set('display_errors',1);



$ServerName = "localhost";
$UserName = "root";
$dbName = "combinedtask";
$password = "";

// Create connection
$conn = mysqli_connect($ServerName, $UserName, $password ,$dbName );

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
  
}


if(isset($_POST['forward'])){

    $my_query = "INSERT INTO control_panel (forward_di) VALUES ('forward')";
    $result = mysqli_query($conn, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: No item has been added <br>";
    }


}else if(isset($_POST['right'])){

    $my_query = "INSERT INTO control_panel (right_di) VALUES ('right')";
    $result = mysqli_query($conn, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: No item has been added <br>";
    }


}else if(isset($_POST['left'])){

    $my_query = "INSERT INTO control_panel (left_di) VALUES ('left')";
    $result = mysqli_query($conn, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: No item has been added <br>";
    }


}else if(isset($_POST['stop'])){

    $my_query = "INSERT INTO motion_control (stop_id) VALUES ('stop')";
    $result = mysqli_query($conn, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: No item has been added <br>";
    }


}else if(isset($_POST['backward'])){

    $my_query = "INSERT INTO control_panel (backward_di) VALUES ('backward')";
    $result = mysqli_query($conn, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: No item has been added <br>";
    }



    
}


?>