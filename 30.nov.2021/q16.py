keys = ['Ten', 'Twenty', 'Thirty']
values = [10, 20, 30]

res = {}
for i in keys:
    for j in values:
        res[i] = j
        values.remove(j)
        break  


print (res)