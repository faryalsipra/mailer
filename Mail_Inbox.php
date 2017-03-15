<html>
<head>
<link rel="stylesheet" href="style_compose.css">
<Title>
Mail Received
    </Title>    
</head>
<body>
    <?php 
$from=$_REQUEST['From'];
$subject=$_REQUEST['Subject'];
$body=$_REQUEST['Body'];
$date=$_REQUEST['Date']; ?>
    <a href=Main.php> <div ID="div_header"><H1>Gmail</H1></div> </a>
                 <div ID="div_body">
<h2>From:<?php echo "$from" ?></h2>              <h2>Subject:<?php  echo "$subject" ?></h2>
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
echo '<h1> <center>Received Mail </center></h1>';
$sql_select= "Select `Subject` ,`From` , `Body`,`Date` From `mail`  WHERE `From` = '$from' AND `Subject` = '$subject' AND `Body` LIKE '%$body%' AND `Date` = '$date'";
$result=mysqli_query($link, $sql_select);
$num_rows = mysqli_num_rows($result);
if ($num_rows > 1) {
    // output data of each row
echo "<table border=5 align='center'>";
echo "<tr><td><b>From</b></td><td><b>Subject</b></td><td><b>Body</b></td></tr>";

    while($row = mysqli_fetch_assoc($result)) {
        $from=$row["From"];                       $subject=$row["Subject"];
        $body=$row["Body"];
        $date=$row["Date"];
        if(strlen($row['Body'])>50)

        echo "<tr><td>$from</td><td>$subject</td><td><a href='mail.php?From=$from& Subject=$subject&Body=$body&Date=$date'> $body</a></td></tr>";
        
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

  

