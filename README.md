# Web activated power switch using a Raspberry Pi as a web server. PHP and Python usage.

This project enables you to activate a device remotely using a web browser.
It utilizes a Raspberry Pi set up as a web server using nginx. You can access the application locally using localhost:8080 or 
if you open up the port to the world you can access it directly with your IP address and port using http://68.98.97.241:8080 for example.
This is the main  page. As you can see it is very simple:

![](WebPageView1.jpg?raw=true)

The webpage accesses an index.php file in the server which, before rendering, checks to see the current state of the device (on/off) and enables the appropriate button.

Clicking on or off on the webpage sends a $getJSON request to a php file which activates or deactivates an output GPIO pin using python scripts that are executed by the php code.

The output is set up as an R-S latch so only a pulse with minimum duration is needed to set or reset the latch which will ultimately close or open a relay circuit that will drive the load.

