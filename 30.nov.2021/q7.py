base=int(input("Enter base: "))
exp=int(input("Enter exp: "))

def pwr(base,exp):
  if (exp < 0 ):
    print("please enter postive number")
    return False
  else:      
    if(exp==1):
        return(base)
    if(exp!=1):
        return(base*pwr(base,exp-1))

print(pwr(base,exp))