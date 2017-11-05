#Uruchamianie tego skryptu odbywa sie przy zalozeniu ze wczesniej pobrano 
#liste albumow za pomoca skryptu scrapCDPages.py do pliku urls.txt
#------------------------------------------------------------------------
import urllib2
from bs4 import BeautifulSoup

#Struktura danych pozwalajaca przechowywac dane o konkretnym albumie
class Album:
    def __init__(self, imgSrc, title, artist, genre):
        self.imgSrc = imgSrc
        self.title = title
        self.artist = artist
        self.genre = genre

pageBase = "http://www.importcds.com"
scrappedAlbums = []

count = 0
#otwieramy plik
with open("urls.txt", "r") as inputFile:
    for line in inputFile:
        try:            
            #pobieramy zrodlo strony
            cdPage = urllib2.urlopen(pageBase + line).read()

            #tworzymy obiekt BeautifulSoup
            cdPage = BeautifulSoup(cdPage, 'html.parser')

            #pobieramy i formatujemy zrodlo okladki
            imgSrc = (cdPage.find(attrs={"class":"aec-cover"}).img['src'])[2:]

            #przechodzimy do czesci zawierajacej detale
            details = cdPage.find(attrs={"id":'product-info-details'}).find_all('tr')

            #uzyskujemy niezbedne informacje
            artist = details[0].a.string
            title = details[1].find_all('td')[1].string.lstrip()
            genre = details[2].a.string

            #tworzymy obiekt Album
            cd = Album(imgSrc, artist, title, genre)

            #dodajemy go do listy albumow
            scrappedAlbums.append(cd)
        except KeyboardInterrupt:
            break
        except:
            continue  

        count = count + 1
	print(count)

#przepisujemy dane z kolekcji do pliku w formacie csv
with open("albums.csv", "w") as outputFile:
    separator = ';'

    for a in scrappedAlbums:
        try:
            #tworzenie linii dla formatu csv
            line = a.imgSrc + separator + a.artist + separator + a.title + separator + a.genre + "\n" 
            outputFile.write(line)
        except KeyboardInterrupt:
            break
        except:
            continue

