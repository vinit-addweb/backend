a = int(input("enter the number :"))
b = int(input("enter another number :"))
c= int(input("enter another number :"))


if (a>b and a>c):
    print(a,"is greator than ",b ,"and",c)

elif(b>a and b>c):
    print(b,"is greator than ",a ,"and",c)    
else:
    print(c,"is greator than ",a ,"and",b)   