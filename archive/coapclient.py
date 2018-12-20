from coapthon.client.helperclient import HelperClient

#host = "192.168.43.240"
host = "127.0.0.1"

port = 5683
path ="basic"

client = HelperClient(server=(host, port))
response = client.get(path)
print response.pretty_print()
client.stop()
