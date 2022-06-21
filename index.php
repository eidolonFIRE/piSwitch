<!DOCTYPE HTML>
<HTML>
<HEAD>
<TITLE>Remote Relay Controller with a Raspberry Pi</TITLE>
<link rel="icon" type="image/png" href="images/favicon.png">
<STYLE>
button {padding:5px 15px; font-size: xx-large;}
div.main {text-align: center; margin-top: 100px;}
</STYLE>
<meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0"/>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<script type = "text/javascript">
     $(document).ready(function(){
       $("button").click(function(event){
          console.log("cycling power");
          $.getJSON('cycle.php');
       });
     });
</script>

</HEAD>
<BODY>
<div class="main">

   <h2>OTP device</h2>
   <div>
     <button name="restart">Cycle Power</button>
   </div>

</div>
</BODY>
</HTML>
