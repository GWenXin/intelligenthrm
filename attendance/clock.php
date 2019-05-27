<html>
<head>
<title>(Type a title for your page here)</title>
<script type="text/javascript"> 
function display_c(){
var refresh=1000; // Refresh rate in milli seconds
mytime=setTimeout('display_ct()',refresh)
}

function display_ct() {
var x = new Date()
document.getElementById('ct').style.fontSize='25px';
document.getElementById("ct").style.fontFamily = "sans-serif";  	
document.getElementById('ct').style.color='#696969';
document.getElementById('ct').innerHTML = x;
display_c();
 }
</script>
</head>

<h1><body onload=display_ct();></h1>
<span id='ct' ></span>

</body>
</html>