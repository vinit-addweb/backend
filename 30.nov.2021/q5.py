list1 = [10, 20, 25, 30, 35]
list2 = [40, 45, 60, 75, 90]

odd = []
even= []

for i in list1:
    if (i % 2 == 1):
     odd.append(i)
        
for j in list2:
    if (j % 2 == 0):
     even.append(j)

result = odd + even
print (result)
    
        
        

     

