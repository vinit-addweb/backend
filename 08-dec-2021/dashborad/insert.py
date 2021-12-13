#!/usr/bin/python3
import pymysql
import cgi,cgitb
cgitb.enable() 
# Create instance of FieldStorage 
form = cgi.FieldStorage()
print ("Content-type: text/html\r\n\r\n")
# Open database connection
id = form.getvalue('id')
name = form.getvalue('name')
address = form.getvalue('address')
mobile = form.getvalue('mobile')
email = form.getvalue('email')
password = form.getvalue('psw')

db = pymysql.connect(host="localhost",user="root",password="",database="pypractice" )
# prepare a cursor object using cursor() method
cursor = db.cursor()
print ("<html>")
print ("<head>")
print ("<title>Hello - Inserted MYSQL CGI Program</title>")
print ("</head>")
print ("<body>")
try:
    # execute SQL query using execute() method.
   
    
    cursor.execute("INSERT INTO pythonn (id,name, address, mobile, email,password) VALUES('%s','%s','%s','%s','%s','%s')" %(id,name,address,mobile,email,password))
    # Commit your changes in the database
    db.commit()
    # print("Data Inserted")
    redirectURL = "http://localhost/backend/08-dec-2021/dashborad/loginn.html"
    print('<html>')
    print('<head>')
    print('<meta http-equiv="refresh" content="0;url='+str(redirectURL)+'" />') 
    print('</head>')
    print('</html>')
except:
    # Rollback in case there is any error
    db.rollback()
    
    print("error in Inserting")
    
print ("</body>")
print ("</html>")
# disconnect from server
db.close()
