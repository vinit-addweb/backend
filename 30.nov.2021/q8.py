list1 = ["M", "na", "i", "Ke"]
list2 = ["y", "me", "s", "lly"]

list3 = []

for i in range(len(list1)):
    for j in range(len(list2)):
        list3.append(list1[i]+list2[i])
        break

print(list3)
