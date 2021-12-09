#!/usr/bin/python3
import pymysql
import cgi,cgitb
cgitb.enable() 

form = cgi.FieldStorage()
print ("Content-type: text/html\r\n\r\n")


db = pymysql.connect(host="localhost",user="root",password="",database="pypractice" )
id = form.getvalue('id')
name = form.getvalue('name')
address = form.getvalue('address')
mobile = form.getvalue('mobile')
email = form.getvalue('email')
cursor = db.cursor()
print ("<html>")
print ("<head>")
print ("<title>Hello - show MYSQL CGI Program</title>")

print ("</head>")
print ("<body>")
try:
   
    cursor.execute("update pythonn set name='%s',address='%s',mobile='%s',email='%s' where id=%s" %(name,address,mobile,email,id))
    db.commit()
    print('<a href="Dash.py">Data Updated</a>')
   
except:
     
    db.rollback()
    print("error in updating")
print ("</body>")
print ("</html>")

db.close()

