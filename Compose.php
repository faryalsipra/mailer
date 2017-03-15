<?php
session_start();
$user=$_SESSION["U"];
?>
<html>
<head>
<link rel="stylesheet" href="style_compose.css">
<Title>
Compose
</Title>    
</head>
<body>
    <form action="Send.php" method="get">
        <a href=Main.php> <div ID="div_header"><H1>Gmail</H1> </div> </a>
                 <div ID="div_body">
                     <h2>To:<Input type="text" ID="txtbox_parameters" Name="to" ></h2>
                     <h2>From:<Input type="text" ID="txtbox_parameters" Name="from" value="<?php echo "$user" ?>"></h2>
                     <h2>Subject:<Input type="text" ID="txtbox_parameters" Name="subject"></h2>  
 <Input type="Submit" Value=Send ID="btn_send" >
<a href="Main.php">      <Input type="button" Value=Cancel ID="btn_send" ></a>

<textarea ID="txtarea_body" rows="50" name="txtarea"></textarea>


</div>
          </form>        
                                          
                     
                         </body>
</html>

  

