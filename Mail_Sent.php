<html>
<head>
<link rel="stylesheet" href="style_compose.css">
<Title>
Mail Sent
    </Title>    
</head>
<body>
    <?php 
$to=$_REQUEST['To'];
$subject=$_REQUEST["Subject"];
$body=$_REQUEST["Body"];
$date=$_REQUEST["Date"]; ?>
    <a href=Main.php> <div ID="div_header"><H1>Gmail</H1 </div> </a>
                 <div ID="div_body">
<h2>To:<?php echo "$to" ?></h2>              <h2>Subject:<?php  echo "$subject" ?></h2>
<h2>Date:<?php echo "$date" ?></h2>                     
<a href="Main.php">      <Input type="button" Value=OK ID="btn_send" ></a>
<a href="Delete.php">      <Input type="button" Value=Delete ID="btn_send" ></a>
    <?php 
$servername="localhost";
$username="root";
$password=null;
$dbname="Gmail";
 $link=mysqli_connect($servername,$username,$password,$dbname)
    or die(mysqli_error()); 
echo '<h1> <center>Sent Mail </center></h1>';
$sql_select= "Select `Subject` ,`From` , `Body`,`Date` From `mail`  WHERE `To` = '$to' AND `Subject` = '$subject' AND `Body` LIKE '%$body%' AND `Date` = '$date'";
$result=mysqli_query($link, $sql_select);
$num_rows = mysqli_num_rows($result);
if ($num_rows > 1) {
    // output data of each row
echo "<table border=5 align='center' width=100%>";
echo "<tr><td><b>From</b></td><td><b>Subject</b></td><td><b>Body</b></td></tr>";

    while($row = mysqli_fetch_assoc($result)) {
        $to=$row["To"];                       $subject=$row["Subject"];
        $body=$row["Body"];
        $date=$row["Date"];
        if(strlen($row['Body'])>50)

        echo "<tr><td>$to</td><td>$subject</td><td> $body</td></tr>";
        
}
}else {
    echo "$body";
}

echo "<br/>";
mysqli_close($link); 
?>
</div>
          </form>        
                                          
                     
                         </body>
</html>

  

