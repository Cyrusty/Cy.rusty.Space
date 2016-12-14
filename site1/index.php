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
echo "Your IP address is " . "<strong> $_SERVER ['REMOTE_ADDR'];</strong>
?>
<p style="color:red;"> yo yo yo this is another test edit using the HTML tutorials I'm working on
check this link out <a href="http://www.organicdesign.co.nz"> OD </a>  </p> 
<?php
$txt = "<a href='https://www.organicdesign.co.nz/User:Cyrusty'>this link</a>";
echo "I post my latest lessons to $txt";

$x = "NARAN";
echo "$x $x $x $x $x";

$num = 963;
$num2 = $num * 2;
echo $num * $num + $num;
echo "     $num2";
?>

<!-- a comment for naran naran if he ever reads it -->
<p>For online documentation and support please refer to
<a href="http://nginx.org/">nginx.org</a></p>

<p>
      Please use the <tt>reportbug</tt> tool to report bugs in the
      nginx package with Debian. However, check <a
      href="http://bugs.debian.org/cgi-bin/pkgreport.cgi?ordering=normal;archive=0;src=nginx;repeatmerged=0">existing
      bug reports</a> before reporting a new bug.
</p>

<p><em>Thank you for using debian and nginx AND REMOVING WINDOWS piece of shiat.</em></p>


</body>
</html>
