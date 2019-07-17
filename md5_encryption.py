import hashlib 
  
# initializing string 
str = ["H HARIGOVIND",
"Praful",
"Sneha jayan",
"Jibin George",
"Prameela R",
"REPHAH O",
"Sara Reji",
"Swathy Subash",
"Ridhic Toms",
"MOHAMMED AJMAL",
"Anandu Ramachandran",
"Abhishek Ajith",
"Arya mohan",
"shintu varghese",
"Shimin C",
"Ambadi s",
"Adityan S",
"V S ANANTHANARAYANAN",
"SWATHY CHANDRA",
"Adarsh v",
"NA BALAMURALI",
"ABHINDEV ES",
"SREERAG VV",
"VISHAK",
"Yadhu Prasad",
"Akshay VJ",
"Devika Santhosh"]
  
for name in str:
    result = hashlib.md5(name.encode()).hexdigest() 
    print(result[:4].upper()) 
