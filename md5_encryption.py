import hashlib 
  
# initializing string 
str = [
'third Vishnu Prakash',
'third Abraham Francis',
'third Adwaith T',
'third Srinivas R'
]
  
for name in str:
    result = hashlib.md5(name.encode()).hexdigest() 
    print(result[:4].upper()) 
