import requests
from bs4 import BeautifulSoup
import csv


URL = "https://odel.lk/deal-products"
headers = {'User-Agent': 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36'}
r = requests.get(URL,headers)

soup = BeautifulSoup(r.content, 'lxml')


##look at extracted content
soup.prettify()

product_list=[] # a list to store quotes

table = soup.find('div', attrs = {'id':'search_result'})

len(table.findAll('div', attrs = {'class':'col-sm-6 col-md-4 col-lg-3 p-b-35 product-tile-search'}))


index = 1

for row in table.findAll('div',
						attrs = {'class':'col-sm-6 col-md-4 col-lg-3 p-b-35 product-tile-search'}):
   for product_row in row.findAll('div',
						attrs = {'class':'block2-txt-child1 flex-col-l'}):
#    print(product_row.a.text.strip())
    product={}
    
    product['Product Number'] = index
    product['Product Name'] = product_row.a.text.strip()
    price_list = []
    for price in row.findAll('span', attrs = {'class':'stext-105 cl3'}):
        price_list.append(price)
        
    product['New Price'] = price_list[0].text.strip()
    product['Old Price'] = price_list[1].text.strip()
    
    for discount_row in row.findAll('div', attrs = {'class':'product_tag'}):
         for discount in row.findAll('div', attrs = {'class':'product_tag_discount'}):
             product['Discount'] = discount.text.strip()

    product_list.append(product)
    index +=1


filename = 'OdelDeals.csv'
with open(filename, 'w', newline='') as f:
	w = csv.DictWriter(f,['Product Number','Product Name','New Price','Old Price','Discount'])
	w.writeheader()
	for quote in product_list:
		w.writerow(quote)
