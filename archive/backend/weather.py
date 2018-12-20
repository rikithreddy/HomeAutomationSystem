import requests
import json
r=requests.get('https://api.openweathermap.org/data/2.5/weather?q=Guwahati&APPID=33199897cae5d65a551babfc3654ad84')
d = json.loads(r.text)
print d['main']



def convert(far):
	return (far)-273.15



print d['main']['humidity']
print convert(d['main']['temp'])
