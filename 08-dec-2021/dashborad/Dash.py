#!/usr/bin/python3
import pymysql
import cgi, cgitb

from pymysql import cursors
cgitb.enable()
form = cgi.FieldStorage()
db = pymysql.connect(host='localhost',user='root',password='',database='pypractice')
cursor=db.cursor()

cursor.execute("SELECT*from pythonn")
data=cursor.fetchall()

print("Content-type:text/html\r\n\r\n")

print("<html>")
print("<head>")
print('<link rel="stylesheet" href="style.css">')
print("<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>")
print("<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>")
print('<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">')
print("<title> Dashboard </title>")
print('<style> a{text-decoration: none; color:black} </style')
print("</head>")
print ("<body>")
print('<div class="container">')
print('<div class="btn btn-danger" style="width:100px"> <a href="loginn.html"> Log-Out</a> </div>')


print('<center> <h1>Student Information </h1> </center>')
print("<center> <table class='table table-striped'>")
print("<thead>")
print("<tr>")
print("<th scope='col'>ID</th>")
print("<th scope='col'>Name</th>")
print("<th scope='col'>Address</th>")
print("<th scope='col'>Mobile</th>")
print("<th scope='col'>Email</th>")
print("<th scope='col'>Action</th>")
print("</tr>")
print("</thead>")      
print("<tbody>")

for row in data:
    id=row[0]
    name=row[1]
    address=row[2]
    mobile=row[3]
    email=row[4]
    print("<tr> <td>%s</td> "%(id))
    print("<td>%s</td>"%(name))
    print("<td>%s</td>"%(address))
    print("<td>%s</td>"%(mobile))
    print("<td>%s</td>"%(email))
    print('<td><a href="update.py?id=%s"> <i class="fa fa-edit" style="font-size:25px;color:blue"></i> '%(id))
    print('<a href="delete.py?id=%s"><i class="fa fa-trash-o" style="font-size:25px;color:red"></i></td>'%(id))
    
print("</tbody> </table> </ceter>")

print('</div>')
    
print ("</body>")
print ("</html>")
# disconnect from serve
db.close()
