#!/usr/bin/python

import RPi.GPIO as GPIO
import time
GPIO.setmode(GPIO.BCM)
GPIO.setup(23,GPIO.OUT)
GPIO.setup(25,GPIO.OUT)

GPIO.output(25,True)
GPIO.output(23,False)
time.sleep(0.5)
GPIO.output(23,True)

