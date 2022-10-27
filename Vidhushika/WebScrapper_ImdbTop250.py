import requests
import lxml
from bs4 import BeautifulSoup
from xlwt import*

#create a URL address that need to be crawled
url = "https://www.imdb.com/chart/top/"

headers = {'User-Agent': 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) \
AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36'}
f=requests.get(url,headers)

soup = BeautifulSoup(f.content,'lxml')
table = soup.find('table', {'data-caller-name': 'chart-top250movie'})
tr = table.find_all("tr")
# print(tr)
movies_lst=[]
num=0

workbook = Workbook(encoding = 'utf-8')
table = workbook.add_sheet('data')
table.write(0, 0, 'Number')
table.write(0, 1, 'movie_url')
table.write(0, 2, 'movie_name')
table.write(0, 3, 'movie_introduction')
line = 1

for each_tr in tr:
  td = each_tr.find_all('td',{'class': 'titleColumn'})
  #in each tr row find each tf cell
  for each_td in td:
    #print(each_td.text)
    ulink = each_td.a['href']
    url = 'https://www.imdb.com' + ulink
    movies_lst.append(url)
    num += 1
    movie_url=url
    movie_f = requests.get(movie_url,headers = headers)
    movie_soup = BeautifulSoup(movie_f.content, 'lxml')
    #movie_content = movie_soup.find('span',{'role': 'presentation'})
    movie_content = movie_soup.find('span',{'data-testid': 'plot-xl'})
    movie_title = movie_soup.find('h1')
    #print(num, url, '\n', 'Movie:' + str(movie_title))
    #print('Movie info:'+ movie_content.string.strip())
    table.write(line, 0, num)
    table.write(line, 1, url)
    table.write(line, 2, movie_title.string.strip())
    table.write(line, 3, movie_content.string.strip())
    line += 1 
    workbook.save('movies_top250.xls')

