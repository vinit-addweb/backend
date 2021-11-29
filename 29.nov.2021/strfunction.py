import base64

a="hello \t World"
c=a.capitalize()
b=a.center(40,'f')
print(c)
print(b)
str=a.count('l',0,len(a))
print(str)
g=a.endswith('l',0,len(a))
print(g)
h=a.find('l',0,len(a))
print(h)
str1 = base64.b64encode(a.encode('utf-8',errors = 'strict'))
print(str1)
print (a.expandtabs(16))
print (a.index('d'))
print (a.isalnum())


print (a.isalpha())
print (a.isdigit())
print (a.islower())
print (a.isnumeric())
print (a.isspace())
print (a.istitle())
print (a.isupper())
print (len(a))
print (a.lower())
print (a.lstrip())
print ("Max character: " + max(a))
print ("Min character: " + min(a))
print (a.replace("is", "was"))
print (a.rfind('g', 0, len(a)))
print (a.rstrip('*'))
print (a.split('l',1))



print (a.swapcase())
print (a.startswith( 'this' ))
print ("upper : ",a.upper())
print (a.isdecimal())


s = "-"
seq = ("a", "b", "c")
print (s.join( seq ))


my_list = ['A','D','D','W','E','B']
print(my_list[0]) 
print(my_list[2]) 
print(my_list[5]) 


Listn = ["Happy", [2,0,2,1]]
print(Listn[0][0]) 
print(Listn[1][3]) 

a = ['physics', 'chemistry', 1997, 2000]
print (a)


print (a)


