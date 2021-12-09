a = int(input("Enter the amount : "))

def value(b):
    
    tax = 0
    if (b>10000):
        if(b>20000):
            tax = (b-20000)* (0.2) + 1000
            return tax
        else:
            tax = (b-10000) * (0.1)
            return tax
    else:
        return tax               

print (value(a))


