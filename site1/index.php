<!DOCTYPE html>
<html>
<head>
<title>Welcome to CYRUSTY nginx on Debian!</title>
<style>
    body {
	background-image: url("http://blog.moltenstore.com/wp-content/uploads/2016/02/jpX5JMB.jpg");
        width: 35em;
        margin: 0 auto;
        font-family: Tahoma, Verdana, Arial, sans-serif;
    }
</style>
</head>
<body>
<h1>Welcome to nginx on Debian Cyrustys site 1!!</h1>


	<?php
	// <p>Your IP address is <strong><a href='http://ipinfo.io/1.2.3.4'> 1.2.3.4 </a></strong></p>
	echo "<p>" . "Your Ip address is " . "<strong>" . $_SERVER ['REMOTE_ADDR'] . "</strong>"
	 . "<a href='http://ipinfo.io/1.2.3.4'> 1.2.3.4 </a>" . "</p>"; ?>

<?php
// This will show todays date and time, the time will be in yellow colour.
echo "<p> Today is " . date("l d/m/Y") . "<span style='color:yellow;'>" . date(" h:i:sa") . "</span></p>";
?>

<p style="color:maroon;"> yo yo yo this is another test edit using the W3school tutorials I'm working on
check this link out <a href="http://www.organicdesign.co.nz"> OD </a>  </p> 


<h2>PHP wtf PHP arrrrghhhh</h2>

<?php
// These are some variables I made.
$txt = "<a href='https://www.organicdesign.co.nz/User:Cyrusty'>this link</a>";
$x = "NARAN";

// this will paste my variables I made above when entered.
echo "I post my latest lessons to $txt " . "$x $x $x $x $x $x $x $x $x $x $x $x $x $x $x "
 . "<strong>how do I get a complete word count of my NARANS without typing all of them in...</strong>";

// Creates a line break.
echo "<br>";
// Counts the words "Naran"
echo str_word_count("NARAN");
?>

<p><em>Thank you for using debian and nginx AND REMOVING WINDOWS piece of shiat.</em></p>

<?php
$t = date("H");

if ($t < "10") {
    echo "<big>" . "<p style='color:yellow;'>" . "HAVE A GOOD MORNING!!" . "</p>" . "</big>";

} elseif ($t < "20") {
    echo "<i>" . "<big>" . "<span style='color:blue;'>" . "HAVE A GOOD DAY!!" . "</span>" . "</big>" . "</i>";

} else {
    echo "<big>" . "<p style='color:darkorange;'>" . "HAVE A GOOD NIGHT!!" . "</p>" . "</big>";
}
?> 


<!-- a comment for naran naran if he ever reads it -->
</body>
</html>
