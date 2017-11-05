#Skrypt uruchamiany jest przy zalozeniu ze wczesniej zostala wygenerowana lista albumow w formacie .csv
#za pomoca skryptu 'scrapeCDPages.py'

#Skrypt ma na celu pobranie okladek zescrapowanych albumow by mozna umiescic je na serwerze

import requests
import os

#jedynym powodem istnienia tej funkcji jest zwiekszenie przejrzystosci kodu
def downloadImage(url, fullPath):
    imgData = requests.get(url).content
    with open(fullPath, "wb") as outputHandle:
        outputHandle.write(imgData)

pathToSave = "./covers/"

#tworzenie katalogu jezeli nie istnieje
if not os.path.exists(pathToSave):
    os.makedirs(pathToSave)

index = 0
with open("albums.csv", "r") as inputFile:
    with open("albumsFinal.csv", "w") as outputFile:
        for line in inputFile:
            #rozbieranie danych o albumie
            albumData = line.split(';')
            imgSrc = albumData[0]
            artist = albumData[1]
            title = albumData[2]
            genre = albumData[3]        

            #pobranie obrazka, wrzucenie zmodyfikowanej linii do pliku
            imageName = str(index) + ".jpg"
            downloadImage("http://" + imgSrc, pathToSave + imageName)
            outputFile.write(imageName + ';' + artist + ';' + title + ';' + genre)

            index = index + 1            

