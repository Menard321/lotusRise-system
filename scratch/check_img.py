import os
from PIL import Image, ImageDraw, ImageFont

img_path = "/Users/tynorosa/Desktop/LotusRise/LotusRise-system/public/images/lotusRise_express_logistics.png"
if os.path.exists(img_path):
    img = Image.open(img_path)
    print(f"Image size: {img.size}")
else:
    print("Image not found")
