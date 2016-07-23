#!/usr/bin/python

import RPi.GPIO as GPIO
import time
GPIO.setmode(GPIO.BCM)
GPIO.setup(25,GPIO.OUT)
#This prints the state of the output pin so php can use it to choose which button to enable
value = GPIO.input(25)
print value

