<html>
<head>
<link rel="stylesheet" href="style_main.css">
<Title>
Send Mail
</Title>    
</head>
<body>
    
    <div ID="div_banner">
    <div ID="div_header_img">
    </div> 
        <Input type="text" ID="searchbox" name="Searchbox"><Input type="submit" Value=Search Mail ID="btn_search" >
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
$to=$_GET["to"];
$from=$_GET["from"];
$subject=$_GET["subject"];
$body=$_GET["txtarea"];
 $link=mysqli_connect($servername,$username,$password,$dbname)
    or die(mysqli_error()); 
echo '<h1> <center> Connection Established </center></h1>';
$sql_insert= "INSERT INTO `mail` (`To`,`From` , `Subject`, `Body`, `Date`,`Time`) VALUES ('$to', '$from', '$subject', '$body', CURRENT_DATE(),CURRENT_tIME());";
if($to != NULL && $from != NULL && $body!=NULL)
    {
mysqli_query($link, $sql_insert);
echo "<br/>";
echo '<h1> <center> Message Sent Successfully :) </center></h1>';
    }
else
    {
echo "<br/>";
echo '<h1> <center> Oops! Missing Required Fields  <br/> </center></h1>';
    
}
mysqli_close($link); 
?>
                     </div>
                  </form>
    </body>
</html>