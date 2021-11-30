def check(num1):
    l = len(num1)-1
    
    if (num1[0] == num1[l]):
        return True
          
    else:
        return False
num = [1,12,23,43,12,34,1]             
check(num)