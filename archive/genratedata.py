import json
import requests
import time
import sys
sys.path.append('./pipeline1/')


import face

data={}

def getData():

	def getExpression():

			try:
				return face.getExpr()	
			except:
				f = open('./data/car/expression')
				x = f.readline().rstrip()
				return x



	def getMovement():
		f = open('./data/car/movement')
		x = f.readline().rstrip()
		return x



	def getTemp():
		try:
			r=requests.get('https://api.openweathermap.org/data/2.5/weather?q=Guwahati&APPID=33199897cae5d65a551babfc3654ad84')
			d = json.loads(r.text)
			def convert(far):
	        		return (far)-273.15

			return convert(d['main']['temp'])
		except:
			f = open('./data/house/outtemp')
			x = f.readline().rstrip()
			return x


	def getCarTemp():
		f = open('./data/car/cartemp')
		x = f.readline().rstrip()
		return x
		

	def getHumidity():
	        try:
	                r=requests.get('https://api.openweathermap.org/data/2.5/weather?q=Guwahati&APPID=33199897cae5d65a551babfc3654ad84')
	                d = json.loads(r.text)
	                def convert(far):
	                        return (far)-273.15

	                return (d['main']['humidity'])
	        except:

			f = open('./data/house/humidity')
			x = f.readline().rstrip()
			return x
		

	def getMusicStatus():
		f = open('./data/car/music')
		x = f.readline().rstrip()
		return x

	def getDistance():
		f = open('./data/car/distance')
		x = f.readline().rstrip()
		return x


	def getPerson():
		f = open('./data/house/visitorface')
		x = f.readline().rstrip()
		return x


	def getisPerson():
		f = open('./data/house/visitoris')
		x = f.readline().rstrip()
		return x
		

	def getOwnerLocation():
		f = open('./data/ownerlocation')
		x = f.readline().rstrip()
		return x



	data['epoch']=int(time.time())
	data['ownerlocation']=1


	data['car']={}
	data['house']={}

	data['car']['distance']=getDistance()
	data['car']['music']=getMusicStatus()
	data['car']['cartemp']=getCarTemp()
	data['car']['expression']=getExpression()
	data['car']['movement']=getMovement()

	data['house']['visitoris']=getisPerson()
	data['house']['visitorface']=getPerson()
	data['house']['outtemp']=getTemp()
	data['house']['humidity']=getHumidity()






	with open('data.txt', 'w') as outfile:
	    json.dump(data, outfile)


import time
while(True):
	getData()
	time.sleep(3)


