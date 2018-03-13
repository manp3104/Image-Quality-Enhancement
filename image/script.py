#!C:\Users\MANISH\AppData\Local\Programs\Python\Python36\pythonw.exe

#print( "Content-Type: text/html\n")

import sys
from PIL import Image

def main():

	try:
		path = sys.argv[1]
		img = Image.open(path)

		img = img.rotate(180)
		img.save(path)

	except IOError:
		pass

if __name__ == "__main__":
	main()

