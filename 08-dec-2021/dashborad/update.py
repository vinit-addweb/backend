#!/usr/bin/python3

import pymysql
import cgi,cgitb

cgitb.enable()
form=cgi.FieldStorage()
print("Content-type:text/html\r\n\r\n")

db=pymysql.connect(host='localhost',user='root',password='',database='pypractice')
cursor=db.cursor()
id=form.getvalue('id')
cursor.execute("select*from pythonn where id='%s'"%(id))

data=cursor.fetchall()
for row in data:
  name = row[1]
  address = row[2]
  mobile = row[3]
  email = row[4]
  
print("<center><h4> Hello ",name,"</h4> </center>")  


print('<html>')
print('<head>')
print ("<title>Update data</title>")
print('<link rel="stylesheet" href="style.css">')
print('<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"')
print('</head>')

print('</body>')

print('<div class="frm container " style="width:40%">')
print('<form method="get" action="updated.py" style="border:1px solid #ccc">')
print('<div class="container">')
print('<h1>Sign Up</h1>')
print('<p>Please fill in this form to create an account.</p>')
print('<hr>')
print('<label for="name"><b>Id</b></label>')
print('<input type="text" name="id" value= "%s"  required>'%(id))
print('<label for="name"><b>Name</b></label>')
print('<input type="text" name="name" value= "%s"  required>'%(name))
    
print('<label for="name"><b>Address</b></label>')
print('<input type="text" name="address" value= "%s" required>'%(address))
print('<label for="mobile"><b>Mobile</b></label>')
print('<input type="text" value= "%s" name="mobile" required>'%(mobile))
        
print('<label for="email"><b>Email</b></label>')
print('<input type="text" value= "%s" name="email" required>'%(email))
        
    
print('<div class="clearfix">')
         
print('<button type="submit" class="signupbtn" value="Insert">Update</button>')
print('</div>')
print('</div>')
print('</form>')
print('</div>')
print('</body>')    
print('<html>')
db.close()
