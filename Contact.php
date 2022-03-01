
<html>
<head>
<!--Font links-->
<link href='https://fonts.googleapis.com/css?family=Satisfy' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet'>

<!--StyleSheet-->
<style>
p {
font-family:'Times New Roman', Times, serif;
text-align: center;
font-size: 110%;
}

h1 {
font-family: Lobster;
Text-align: center;
}

body {
Background-color:#e5c2b4;
}
.center {
  margin: auto;
  width: 30%;
  border: 3px solid white;
  padding: 10px;
  text-align: center;
  
}
</style>

</head>
<p>Thank you for contacting us!</p>
<div class="center">
Hello! <?php echo $_POST["name"];?><br>

<b>Email confirmation sent to:</b>
 <?php echo $_POST["email"];?><br>

 <b>Time of meeting:</b>
 <?php echo $_POST["appt"]; ?><br>

 <b>Meeting Date:</b>
 <?php echo $_POST["trip-start"]; ?><br>

<b>Phone Number:</b>
<?php echo $_POST["phone"]; ?><br>

<b>Comments:</b>
<?php echo $_POST["comments"]; ?><br>
</div>

 <a href="index.html"><p>Back to the home page</p></a>

 
