import random

a= random.randint(0,20)
#returns an integer number to the selected element from the specified range

print("Welcome to the Random Number Guessing game!")
name =  (input("Can we know your name? "))
#print(a)

while True:
    x=int(input("Enter your guess: "))

    if a==x:
        print ('Woow '+ name,'!','you guessed it right!')
        break
    
    elif abs(a-x)>10:
        print ('you are getting away stay close')
            
    elif abs(a-x)<5:
        if abs(a-x)<2:
            print ('you are about to get it')
        else:
            print ('you are very close')
