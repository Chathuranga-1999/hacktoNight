#BMI Calculator

import bisect #used to find series of ranges a value fits by defining those ranges as a list of the minimum value for each range
name =  (input("Can we know your name? "))
print ('Hello '+ name+'!')
gender = input("Are you a male(m) or female(f): ")
age = int(input("How old are you: "))
weight = float(input("How much do you weigh in kilograms?: "))
height = float(input("What is your height in centimeters: "))

#Calcualte BMI
#The height is divided by 100 to convert the centimetres into meters.
bmi = round(weight / ((height/100) ** 2))

if age < 19:
    print("You're too young for this and I'm concerned you may be at risk of developing an eating disorder.")
    exit()

optimal_bmi_range_min_ages = [25, 35, 45, 55, 65]
optimal_bmi_ranges = [(19, 24), (20, 25), (21, 26), (22, 27), (23, 28), (24, 29)]
optimal_bmi_range = optimal_bmi_ranges[bisect.bisect_left(optimal_bmi_range_min_ages, age)]#where any age fits within the list

if bmi >= optimal_bmi_range[0] and bmi <= optimal_bmi_range[1]:
    print("Your BMI is optimal for your age!")
else:
    print("Your BMI is not okay for your age!!!")

bmi_categories = ["underweight", "normal weight", "overweight", "obesity", "strong obesity"]
if gender == "m":
    bmi_category_thresholds = [20, 26, 31, 41]
elif gender == "f":
    bmi_category_thresholds = [19, 25, 31, 41]
else:
    print("Your BMI is",bmi)
    exit()

bmi_category = bmi_categories[bisect.bisect_left(bmi_category_thresholds,bmi)]
print("Your BMI is " + str(bmi) + ". That means you are " + bmi_category)
