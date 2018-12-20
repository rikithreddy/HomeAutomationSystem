from flask import Flask, request, jsonify
from flask_restful import Resource, Api
from sqlalchemy import create_engine
from json import dumps
from flask.ext.jsonpify import jsonify
app = Flask(__name__)
api = Api(app)
import urllib

import json

class Data(Resource):
    def get(self):
	json_data=open('data.txt').read()
        data = json.loads(json_data)


        return jsonify(data)
api.add_resource(Data, '/data.json') # Route_1

if __name__ == '__main__':
     app.run(port='5002',host='0.0.0.0')


