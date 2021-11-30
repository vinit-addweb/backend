sample_dict = {
"name": "Kelly",
"age": 25,
"salary": 8000,
"city": "New york"}

keys = ["name", "salary"]

new = {}
for key,value in sample_dict.items():
    if(key in keys):
        new[key] = value
        
print(new)  

