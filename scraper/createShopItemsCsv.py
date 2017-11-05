#uruchomienie skryptu zaklada istnienie pliku "albums.csv"
#wygenerowanego wczesniej za pomoca skryptu scrapAlbums.py
#struktura pliku jest nastepujaca:
#urlZdjecia; artysta; tytul; gatunek
import random


#poczatkowo chcemy stworzyc plik z kategoriami, ktore sa naszymi gatunkami
#w tym celu odczytujemy plik linia po linii i dodajemy gatunki do kolekcji uniqueGenres
uniqueGenres = []
separator = ';'

with open("albums.csv", "r") as inputFile:
    for line in inputFile:
        albumData = line.split(separator)
        uniqueGenres.append(albumData[3].replace('\n', ''))

#Teraz nalezy pozbyc sie duplikatow z kolekcji uniqueGenres
uniqueGenres = list(set(uniqueGenres))

#Teraz mozemy przejsc do tworzenia pliku z kategoriami zgodnie ze standardami prestaShop
#ktorych postac wyglada nastepujaco:
#Category ID;Active (0/1);Name *;Parent category;Root category (0/1);Description;Meta title;Meta keywords;Meta description;URL rewritten;Image URL

#Pola ktore mozemy uogolnic:
categoryId = 13 #startowe ID kategorii, bedzie podlegalo inkrementacji
active = '1' #chcemy by wszystkie zaimportowane kategorie byly aktywne
parentCategory = 'Home'
rootCategory = '0'
description = "" #nazwy gatunkow muzycznych sa samoopisowe
imageUrl = ""
s = ";" #separator do pliku csv

with open("categories.csv", 'w') as categories:
    for genre in uniqueGenres:
        name = genre
        metaTitle = "Meta title-" + genre
        metaKeywords = "Meta keywords-" + genre
        metaDescription = "Meta description-" + genre
        urlRewritten = genre.replace(' ', '').replace('/', '').replace('-', '').replace('&', '') #usuwanie niedozwolonych znakow

        #posiadajac wszystkie pola mozemy przejsc do zapisu linii w pliku
        categories.write(str(categoryId) + s + active + s + name + s + parentCategory + s + rootCategory + s +
                         description + s + metaTitle + s + metaKeywords + s + metaDescription + s + urlRewritten + s + imageUrl + '\n')
        
        #inkrementujemy ID 
        categoryId = categoryId + 1


#Majac plik z kategoriami, mozemy stworzyc plik z albumami
#struktura wyglada nastepujaco:
#Product ID;Active (0/1);Name *;Categories (x,y,z...);Wholesale price;On sale (0/1);Description
#URL rewritten;Available for order (0 = No, 1 = Yes);Show price (0 = No, 1 = Yes);
#Image URLs;Delete existing images (0 = No, 1 = Yes);Condition;Customizable (0 = No, 1 = Yes);
#Uploadable files (0 = No, 1 = Yes);Text fields (0 = No, 1 = Yes);Out of stock;ID / Name of shop;Advanced stock management;Depends On Stock;

#Pola ktore mozemy uogolnic:
productId = 1000
active = '1'
inSale = '1'
availableForOrder = '1'
showPrice = '1'
deleteExstImg = '1'
condition = 'new'
customizable = '0'
uploadableFiles = '0'
textFields = '0'
outOfStock = '0'
IdOfShop = '0'
advStockMngmnt = '0'
dependsOnStock = '0'
s = ';' #separator

#Mozemy zaczac iterowac plyty
with open("albums.csv", 'r') as inputFile:
    with open ("products.csv", 'w') as outputFile:
        #linia naglowkowa kolumn
        outputFile.write("Product ID;Active (0/1);Name *;Categories (x,y,z...);Wholesale price;On sale (0/1);Description; \
                          URL rewritten;Available for order (0 = No, 1 = Yes);Show price (0 = No, 1 = Yes); \
                          Image URLs;Delete existing images (0 = No, 1 = Yes);Condition;Customizable (0 = No, 1 = Yes); \
                          Uploadable files (0 = No, 1 = Yes);Text fields (0 = No, 1 = Yes);Out of stock;ID / Name of shop;Advanced stock management;Depends On Stock;\n")

        for line in inputFile:
            albumData = line.split(s) #rozdzielamy informacje
            imgUrl = albumData[0]
            artist = albumData[1]
            title = albumData[2]
            genre = albumData[3].replace('\n', '')

            #informacje szczegolowe
            name = artist + " - " + title
            category = genre
            wholesalePrice = random.randint(15, 45)
            urlRewritten = genre.replace(' ', '').replace('/', '').replace('-', '').replace('&', '') #usuwanie niedozwolonych znakow

            #tworzenie opisu
            description = "Album pod tytulem " + title + " autorstwa " + artist + "." + " Uwazany za istotny dla gatunku " + genre + '.'

            #wpisujemy linie do pliku
            outputFile.write(str(productId) + s + active + s + name + s + category + s + str(wholesalePrice) + s + inSale + s + description + s +
            urlRewritten + s + availableForOrder + s + showPrice + s + imgUrl + s + deleteExstImg + s + condition + s + customizable + s +
            uploadableFiles + s + textFields + s + outOfStock + s + IdOfShop + s + advStockMngmnt + s + dependsOnStock + '\n')

            #inkrementacja id
            productId = productId + 1   