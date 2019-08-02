import pyqrcode 
import png
from pyqrcode import QRCode 
  
  
# String which represent the QR code 
s = "https://www.youtube.com/watch?v=iWZmdoY1aTE"
  
# Generate QR code 
url = pyqrcode.create(s) 
  
# Create and save the png file naming "myqr.png"  
url.png("qr.png", scale = 6)