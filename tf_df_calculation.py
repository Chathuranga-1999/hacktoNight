#The number of times a term occurs in a document is called its term frequency - TF is frequency counter for a term t in document d
#DF is the count of occurrences of term t in the document set N.

#import the necessary libraries
import pandas as pd
import sklearn as sk
import math 
import numpy as np

#Corpus to calculate the term frequency and document frequency.
Doc1= "Information Retrieval System"
Doc2= "Information about the Human Resource System"
Doc3= "Resources allocated to Faculty of Computing Information Centre"
Doc4= "Ranked Retrieval Model with High Accuracy"
Doc5= "Boolean Retrieval Model has Several Problems"

#split so each word have their own string
Doc1 = Doc1.split(" ")
Doc2 = Doc2.split(" ")
Doc3 = Doc3.split(" ")
Doc4 = Doc4.split(" ")
Doc5 = Doc5.split(" ")
#join them to remove common duplicate words
total= set(Doc1).union(set(Doc2),set(Doc3),set(Doc4),set(Doc5))
print(total)

# count the words
wordDictA = dict.fromkeys(total, 0) 
wordDictB = dict.fromkeys(total, 0)
wordDictC = dict.fromkeys(total, 0)
wordDictD = dict.fromkeys(total, 0)
wordDictE = dict.fromkeys(total, 0)
for word in Doc1:
    wordDictA[word]+=1
    
for word in Doc2:
    wordDictB[word]+=1

for word in Doc3:
    wordDictC[word]+=1

for word in Doc4:
    wordDictE[word]+=1

    pd.DataFrame([wordDictA, wordDictB, wordDictC, wordDictD, wordDictE])
    
    #TF Function
def computeTF(wordDict, doc):
    tfDict = {}
    corpusCount = len(doc)
    for word, count in wordDict.items():
        tfDict[word] = count/float(corpusCount)
    return(tfDict)
#running our docs through the tf function:
tfFirst = computeTF(wordDictA, Doc1)
tfSecond = computeTF(wordDictB, Doc2)
tfThird = computeTF(wordDictC, Doc3)
tfFourth = computeTF(wordDictD, Doc4)
tfFifth = computeTF(wordDictE, Doc5)

#Converting to dataframe for visualization
tf = pd.DataFrame([tfFirst, tfSecond, tfThird, tfFourth,tfFifth])
print(tf)

#download stop words and remove them
import nltk
nltk.download('stopwords')
from nltk.corpus import stopwords
stop_words = set(stopwords.words('english'))
filtered_sentence = [w for w in wordDictA if not w in stop_words]
print(filtered_sentence)

#Calculation of the tf-idf weight for terms in the given corpus using the formula {wt,d = (1+log10(tft,d)) * log10(N/dft)}
   #idf
def computeIDF(docList):
    idfDict = {}
    N = len(docList)
    
    idfDict = dict.fromkeys(docList[0].keys(), 0)
    for word, val in idfDict.items():
        idfDict[word] = math.log10(N / (float(val) + 1))
        
    return(idfDict)
#inputing our sentences in the log file
idfs = computeIDF([wordDictA, wordDictB, wordDictC, wordDictD,wordDictE])
idfs 

def computeTFIDF(tfBow, idfs):
    tfidf = {}
    for word, val in tfBow.items():
        tfidf[word] = val*idfs[word]
    return(tfidf)

#running our docs through the IDF:
idfFirst = computeTFIDF(tfFirst, idfs)
idfSecond = computeTFIDF(tfSecond, idfs)
idfThird = computeTFIDF(tfThird, idfs)
idfFourth = computeTFIDF(tfFourth, idfs)
idfFifth = computeTFIDF(tfFifth, idfs)
#putting it in a dataframe
idf= pd.DataFrame([idfFirst, idfSecond,idfThird, idfFourth,idfFifth])
print(idf)

#Calculation of the normalized vector for each term
#first step is to import the library
from sklearn.feature_extraction.text import TfidfVectorizer
#for the sentence, make sure all words are lowercase or you will run #into error. for simplicity, I just made the same sentence all #lowercase
vdoc1= "Information Retrieval System"
vdoc2= "Information about the Human Resource System"
vdoc3= "Resources allocated to Faculty of Computing Information Centre"
vdoc4= "Ranked Retrieval Model with High Accuracy"
vdoc5= "Boolean Retrieval Model has Several Problems"
#calling the TfidfVectorizer
vectorize= TfidfVectorizer()
#fitting the model and passing our sentences right away:
response= vectorize.fit_transform([vdoc1, vdoc2, vdoc3, vdoc4, vdoc5])
response

from sklearn.feature_extraction.text import TfidfVectorizer
vdoc1= "Information Retrieval System"
vdoc2= "Information about the Human Resource System"
vdoc3= "Resources allocated to Faculty of Computing Information Centre"
vdoc4= "Ranked Retrieval Model with High Accuracy"
vdoc5= "Boolean Retrieval Model has Several Problems"
vectorizer = TfidfVectorizer()
X = vectorizer.fit_transform([vdoc1, vdoc2, vdoc3, vdoc4, vdoc5])
vectorizer.get_feature_names_out()
print(X.shape)
    
