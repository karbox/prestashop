import dryscrape
import time
from bs4 import BeautifulSoup

#Funkcja zwracajaca kod zrodlowy strony pod adresem zadanym w argumencie url
def downloadPage(url, timeToWait):
    session = dryscrape.Session()
    session.visit(url)
    time.sleep(timeToWait) #dajemy stronie czas na wygenerowanie body javascriptem
    return session.body()

#otwieramy plik do ktorego bedziemy zapisywac linki
with open("urls.txt", "a") as outputFile:

    itemsPerPage = 250
    itemsNeeded = 1250
    pagesToScrape = itemsNeeded/itemsPerPage

    #liczba zebranych linkow z danej strony
    count = 0

    #wspolczynnik dodatkowych stron, tj. w przypadku gdy $count z danej strony wynosi 0
    #mozemy przeskoczyc ta strone i pobrac linki z nastepnej
    #mozemy sobie na to pozwolic ze wzgledu na to ze nasze zapotrzebowanie wynosi ulamek calej bazy strony
    extraPage = 0

    i = 0
    while i < pagesToScrape:
        #zmienna przechowujaca adres strony z ktorej scrapowane sa dane na temat CD
        sourceUrl = "http://www.importcds.com/music/cd#!?pagenum=" + str(i+1+extraPage) + "&perpage=" + str(itemsPerPage) + "&sortby=Bestsellers"

        #pobieramy z url kod zrodlowy strony
        pageBody = downloadPage(sourceUrl, 3)


        #tworzymy z pageBody obiekt BeautifulSoup
        pageBody = BeautifulSoup(pageBody, 'html.parser')

        #szukamy unikalnych dla kazdego tytulu znacznikow
        results = pageBody.find_all('li', attrs={'data-upc':True})

        #wydobywamy link do kazdego z tytulow wylistowanych na zadanej stronie
        for link in results:
            outputFile.write(str(link.a['href']))
            outputFile.write("\n")
            count = count + 1
        
        if (count == 0):
            extraPage = extraPage + 1
            i = i - 1
        
        count = 0
        i = i + 1


