<? 
$random = rand(0,100);
if($random < 50) {
	header("HTTP/1.1 503 Service Unavailable");
    usleep(50000);
	print("503 Service Unavailable"); 
} else {
?>
<h1>Unreliable page</h1>

Hey, it worked! 
You were lucky this time, this is a quite unreliable page.

<? } ?>
