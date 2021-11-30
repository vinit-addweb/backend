s1 = "Abc"
s2 = "Xyz"

s3 =""
s1len = len(s1)
s2len = len(s2)

length1 = 0
if s1len>s2len:
    length1 = s1len
else:
    length1=s2len

s2 = s2[::-1]

for i in range(length1):
    if i < s1len:
        s3 = s3 + s1[i]
    if i<s2len:
        s3 = s3 + s2[i]

print(s3)
