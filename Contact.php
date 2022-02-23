
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
font-size: 135%;
}

h1 {
font-family: Lobster;
Text-align: center;
}

body {
Background-color:#e5c2b4;
}
</style>

</head>
<p>Thank you for contacting us!</p>
Hello! <?php echo $_POST["name"];?><br>
<b>We will sent you an email confirmation to:</b>
 <?php echo $_POST["email"];?>
 <?php echo $_POST["appt"]; ?>
 
