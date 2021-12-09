#!/usr/bin/python3
import pymysql
import cgi,cgitb
cgitb.enable() 
# Create instance of FieldStorage 
form = cgi.FieldStorage()
# Open database connection
db = pymysql.connect(host="localhost",user="root",password="",database="pypractice" )
# prepare a cursor object using cursor() method
cursor = db.cursor()
# execute SQL query using execute() method.
cursor.execute("SELECT * from pythonn")
# Fetch a single row using fetchone() method.
data = cursor.fetchall()
print ("Content-type: text/html\r\n\r\n")
print ("<html>")
print ("<head>")
print ("<title>Hello - show MYSQL CGI Program</title>")
print ("</head>")
print ("<body>")
for row in data:
    id = row[0]
    name = row[1]
    Address = row[2]
    Mobile = row[3]
    Email = row[4]
    # Now print fetched result
    print ("Id=%s,Name=%s,Address=%s,Mobile=%s,Email=%s" % (id, name, Address, Mobile, Email))
    print("<br/>")
print ("</body>")
print ("</html>")
# disconnect from server
db.close()
