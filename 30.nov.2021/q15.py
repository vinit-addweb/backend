list1 = [5, 20, 15, 20, 25, 50, 20]
list2=[]
for i in range(len(list1)):
    if(list1[i]==20):
        continue
    else:
      list2.append(list1[i])
      
        

print(list2)