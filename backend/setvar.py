


'''
Use this to set defaults
'''

carTemp = '26'
distance = '1'
music = '1'
expression = 'happy'
movement = '1'


ownerlocation = '1'


outtemp = '25'
visitorface = 'Hari'
visitoris = '1'
humidity = '90'




f = open('./data/car/cartemp','w')
f.write(carTemp)
f.close()


f = open('./data/car/distance','w')
f.write(distance)
f.close()

f = open('./data/car/music','w')
f.write(music)
f.close()

f = open('./data/car/expression','w')
f.write(expression)
f.close()

f = open('./data/car/movement','w')
f.write(movement)
f.close()


f = open('./data/ownerlocation','w')
f.write(ownerlocation)
f.close()


f = open('./data/house/humidity','w')
f.write(humidity)
f.close()


f = open('./data/house/outtemp','w')
f.write(outtemp)
f.close()


f = open('./data/house/visitorface','w')
f.write(visitorface)
f.close()

f = open('./data/house/visitoris','w')
f.write(visitoris)
f.close()







