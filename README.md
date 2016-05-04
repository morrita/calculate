Calculate.py is an example SOAP client program that uses the Python/Suds library, showing how a web sevice with two operations can be implemented. On the server-side the Web Service is described by calculate.wsdl, pulling in the input and output message formats contained in calculate.xsd, and making reference to the endpoint implemented in calculate.php.

Examples of invokation are:

calculate.py add 2 5
2 add 5 = 7

calculate.py subtract 7 2
7 subtract 2 = 5
