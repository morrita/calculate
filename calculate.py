#!/usr/bin/python
# filename: calculate.py
# this is a client program and needs access to the SOAP/Suds library

from suds.client import *	# import libraries needed
import sys

# create a Client instance and disable WSDL cache during development
c = suds.client.Client('http://pi.home.com/calculate/calculate.wsdl',cache=None) 
														
# Associative array with element names aligned with WSDL input message structure
inputRecord = dict(firstNum = sys.argv[2], secondNum = sys.argv[3])

if sys.argv[1] == "add":
	WS_RESPONSE = c.service.add(inputRecord) 	# run WS add operation and get response
	
elif sys.argv[1] == "subtract":
		WS_RESPONSE = c.service.subtract(inputRecord) 	# run WS subtract operation and get response

print str(sys.argv[2]) + " " +  sys.argv[1] + " " +  str(sys.argv[3]) + " = " + str(WS_RESPONSE)

