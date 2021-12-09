#!/usr/bin/python3
import pymysql
import cgi, cgitb
cgitb.enable()
form=cgi.FieldStorage()
# Open database connection
db = pymysql.connect(host="localhost",user="root",password="",database="pypractice" )
# prepare a cursor object using cursor() method
cursor = db.cursor()
# execute SQL query using execute() method.
cursor.execute("SELECT VERSION()")
# Fetch a single row using fetchone() method.
data = cursor.fetchone()
print ("Content-type: text/html\r\n\r\n")
print ("<html>")
print ("<head>")
print ("<title>Hello - show MYSQL CGI Program</title>")
print ("</head>")
print ("<body>")
print ("Database version : %s " % data)
