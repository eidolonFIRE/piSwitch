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
          setLampState(event.target.name);
       });
     });
     function setLampState(state){
          $.getJSON('setLampState.php', { LampState: state }, function(data) {
              if(data.value == "1"){
                 $('button[name="turnOff"]').prop('disabled', true).css('background', '#D3D3D3');
                 $('button[name="turnOn"]').prop('disabled', false).css('background', 'green');
              }else{
                 $('button[name="turnOn"]').prop('disabled', true).css('background', '#D3D3D3');
                 $('button[name="turnOff"]').prop('disabled', false).css('background', 'red');
              }
          });
     }
</script>

</HEAD>
<BODY>
<div class="main">

   <h2>Device 1</h2>
   <div>
<?php

  exec('sudo ./getLampStateSimple1.py', $output1, $result1);

  if($output1[0] == "1"){
    echo "     <button name=\"turnOn\" style=\"background: green\">Turn On</button> &nbsp;\n";
    echo "     <button name=\"turnOff\" style=\"background: #D3D3D3\" disabled>Turn Off</button>"; 
  }else{
    echo "     <button name=\"turnOn\" style=\"background: #D3D3D3\" disabled>Turn On</button> &nbsp;\n";
    echo "     <button name=\"turnOff\" style=\"background: red\">Turn Off</button>"; 
  } 

?>

   </div>

</div>
</BODY>
</HTML>
