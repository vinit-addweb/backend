#!/usr/bin/python3
import pymysql
import cgi,cgitb
cgitb.enable() 
form = cgi.FieldStorage()
print ("Content-type: text/html\r\n\r\n")
id=form.getvalue('id')
db = pymysql.connect(host="localhost",user="root",password="",database="pypractice" )
cursor = db.cursor()
print ("<html>")
print ("<head>")
print ("<title>Delete </title>")
print ("</head>")
print ("<body>")
try:
    cursor.execute("delete from pythonn  where id=%s" %(id))
    db.commit()
    print("Data Deleted")
except:
    
    db.rollback()
    print("error in Deleting")
print ("</body>")
print ("</html>")
db.close()
