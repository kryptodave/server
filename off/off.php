<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta http-equiv="refresh" content="26;url=http://192.168.42.45" />

  <title>Shutdown</title>

<script type='text/javascript'>
window.onload=function(){
var unplugText = document.getElementById("unplug");
var counter = 22;
var waitText = document.createElement("p");
waitText.innerHTML = "<h1>You can unplug the skyhook in 22 seconds.</h>";
var id;

unplugText.parentNode.replaceChild(waitText, unplugText);

id = setInterval(function() {
    counter--;
    if(counter < 0) {
        waitText.parentNode.replaceChild(unplugText, waitText);
        clearInterval(id);
    } else {
        waitText.innerHTML = "<h1>You can unplug the skyhook in " + counter.toString() + " seconds.</h>";
    }
}, 1000);

}

</script>

</head>
<body>
  <div id="unplug" class="button"><h1>You may now unplug your skyhook safely. This tablet will shutdown 1 minute after the unplug.</h></div>

 <?php
$output = shell_exec('/sbin/shutdown -h now');
echo "<pre>$output</pre>";
?> 
</body>
</html>
