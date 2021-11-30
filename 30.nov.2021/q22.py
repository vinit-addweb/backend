str1 = "PyNaTive"
str2 =[]
str3=[]
for i in str1:
    if i.isupper():
      str2.append(i)
    else:
        str3.append(i) 

s = ''.join(str3+str2)
  
print(s)        