import hashlib 
  
# initializing string 
str = ["BENJAMIN O T","R ARAVIND","THEJUS R","LINCE CHACKO","REMYA C","SREELEKSHMI S","SEBA SUSAN MATHEW","DEEPA MARIAM GEORGE","JERIL MONZI JACOB","ROJIN K SUNNY","AKHIL RAVINDRAN","GOVIND KARTHA"]
  
for name in str:
    result = hashlib.md5(name.encode()).hexdigest() 
    print(result[:4].upper()) 

