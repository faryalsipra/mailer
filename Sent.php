<?php
session_start();
?>
<html>
<head>
<link rel="stylesheet" href="style_main.css">
<Title>
Sent Mail
</Title>    
</head>
<body>
    <form action="Search.php" method="get">
    <div ID="div_banner">
    <div ID="div_header_img">
    </div> 
        <Input type="text" ID="searchbox" name="Searchbox"><a href="Search.php"><Input type="button" Value=Search Mail ID="btn_search" ><a>
               <a href="Logout.php">  <Input type="button" Value=Logout ID="btn_logout" ></a> 

    </div>
    
     <div ID="div_sidebar">
         <a href="Compose.php">
<Input type="button" Value=Compose ID="btn_sidebar"> </a> 
             <a href="Main.php">      <Input type="button" Value=Inbox ID="btn_sidebar"></a>
                 <a href=Sent.php><Input type="button" Value=Sent ID="btn_sidebar"><a>
             <a href=Drafts.php> <Input type="button" Value=Drafts ID="btn_sidebar" ></a>


            </div>
                 <div ID="div_body">
                     <?php 
$servername="localhost";
$username="root";
$password=null;
$dbname="Gmail";
$user=$_SESSION["U"];
 $link=mysqli_connect($servername,$username,$password,$dbname)
    or die(mysqli_error()); 
echo '<h1> <center>Sent</center></h1>';
$sql_select= "Select `Subject` ,`To` , `Body`,`Date` From `mail`  WHERE `From` = '$user'";
$result=mysqli_query($link, $sql_select);
$num_rows = mysqli_num_rows($result);
          if ($num_rows > 0) {
    // output data of each row
echo "<table border=5 align='center' width=100%>";
echo "<tr><td><b>To</b></td><td><b>Subject</b></td><td><b>Body</b></td></tr>";

    while($row = mysqli_fetch_assoc($result)) {
        $to=$row["To"];                       $subject=$row["Subject"];
        $body=$row["Body"];
        $date=$row["Date"];
        if(strlen($row['Body'])>50)
	{
		$body=substr($row['Body'],0,50)."....";
	}
        echo "<tr><td>$to</td><td>$subject</td><td><a href='Mail_Sent.php?To=$to& Subject=$subject&Body=$body&Date=$date'> $body</a></td></tr>";
        
}
}else {
    echo "0 results";
}

echo "<br/>";

mysqli_close($link); 
?>
          </div>
                 </form>
    </body>
</html>