
from keras.preprocessing.image import ImageDataGenerator
from keras.layers import Convolution2D, MaxPooling2D
from keras.layers import Activation, Dropout, Flatten, Dense
from keras.models import Sequential
from keras.models import model_from_json
import matplotlib.pyplot as plt
import matplotlib
import numpy as np
import pandas as pd


def getExpr():
    import cv2

    def facechop(img):  
        facedata = "./pipeline1/haarcascade_frontalface_default.xml"
        cascade = cv2.CascadeClassifier(facedata)


        minisize = (img.shape[1],img.shape[0])
        miniframe = cv2.resize(img, minisize)

        faces = cascade.detectMultiScale(miniframe)
        if len(faces) > 2:
            return [-1]
        for f in faces:
            x, y, w, h = [ v for v in f ]

            #         cv2.rectangle(img, (x,y), (x+w,y+h), (255,255,255))
            sub_face = img[y:y+h, x:x+w]
           
            return sub_face
        return [-1]
    json_file = open('./pipeline1/model.json','r')
    loaded_model_json = json_file.read()
    json_file.close()
    model = model_from_json(loaded_model_json)
    # load weights into model
    model.load_weights('./pipeline1/model.h5')


    import cv2 as cv
    import numpy as np
    import cv2

    cap = cv2.VideoCapture(0)

    # Capture frame-by-frame
    ret, frame = cap.read()

    # Our operations on the frame come here
    gray = cv2.cvtColor(frame, cv2.COLOR_BGR2GRAY)

    thumbnail = facechop(gray)
    
    thumbnail = cv.resize(thumbnail, (48, 48), interpolation = cv.INTER_AREA)
    

    plt.imshow(thumbnail)
    thumbnail=thumbnail.reshape(1,1,48,48)

    # x=[1,23,4,4]
    X=model.predict(thumbnail)
    print X[0]
    t=X[0].tolist().index(max(X[0]))
    labels = ['angry', 'fear', 'happy', 'sad', 'surprise', 'neutral']
    print labels[t]
    # Display the resulting frame
    return (labels[t])
    
#    cv2.imshow('frame',gray)
    #    if cv2.waitKey(1) & 0xFF == ord('q'):
    #         break


