#!/usr/bin/python3

# Import modules for CGI handling 
import cgi,cgitb 
# Create instance of FieldStorage 
form = cgi.FieldStorage() 
# Get data from fields
if form.getvalue('dropdown'):
    subject= form.getvalue('dropdown')
else:
    subject= " entered"
print("Content-type:text/html\r\n\r\n")
print("<html>")
print("<head>")
print("<title>Dropdown - Sixth CGI Program</title>")
print("</head>")
print("<body>")
print("<h2> Entered Text is %s</h2>" % subject)
print("</body>")
print("</html>")
