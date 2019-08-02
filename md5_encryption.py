import hashlib 
  
# initializing string 
str = ["Govind Kartha",
"Akarsh Ashok",
"Deepa Mariam George",
"Rojin K Sunny"
]
  
for name in str:
    result = hashlib.md5(name.encode()).hexdigest() 
    print(result[:4].upper()) 
