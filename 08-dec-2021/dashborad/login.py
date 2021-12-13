#!/usr/bin/python3

import pymysql
import cgi,cgitb

cgitb.enable()
form=cgi.FieldStorage()
db=pymysql.connect(host='localhost',user='root',password='',database='pypractice')
cursor = db.cursor()
print ("Content-type: text/html\r\n\r\n")

email = form.getvalue('email')
password=form.getvalue('psw')
# response = db.getresponse()

try:
    cursor.execute('select * from pythonn where email="%s" and password = "%s"'%(email,password))
    data=cursor.fetchall()

    if(data):
        # print('<a href="Dash.py">Login success</a>')
        redirectURL = "http://localhost/backend/08-dec-2021/dashborad/Dash.py"
        print('<html>')
        print('  <head>')
        print('    <meta http-equiv="refresh" content="0;url='+str(redirectURL)+'" />') 
        print('  </head>')
        print('</html>')
        # if (response.status == 200):
        # print ("Location:Dash.py")
    else:
        print("Error in login")    
       
except:
     db.rollback()
     print("error in login")
    


db.close()    