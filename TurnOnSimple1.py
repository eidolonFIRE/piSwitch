#!/usr/bin/python

import RPi.GPIO as GPIO
import time
GPIO.setmode(GPIO.BCM)
GPIO.setup(24,GPIO.OUT)
GPIO.setup(25,GPIO.OUT)


GPIO.output(25,False)
GPIO.output(24,True)
time.sleep(0.5)
GPIO.output(24,False)

