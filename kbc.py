#Python op

money = 0
# questions 
Questionlist = ["nothing","[Q-1] How many days are there in a week?","[Q-2] How many hours are there in a day?","[Q-3] How many colours are there in Rainbow?","[Q-4] Who was the first President of India?","[Q-5] Who invented Python language?"]
# functions

#question 1
def opt1():
 	 print("[A]12  [B]8\n[C]7   [D]6")
def Q1(money = money):
     print(Questionlist[1])
     opt1()
     ans = input(": ")
     if ans == "C" or ans == "c":
     	print(f"Correct Answer,,  Ap Jeet chuke hai {money+1000} chaliye badte hai apne agle prashne ki ouur") 
     else:
     	  print("Wrong Answer.. better luck next time.")
     	  
# question 2
def opt2():
	 print("[A]24   [B]12\n[C]36   [D]8")
def Q2(money):
     print(Questionlist[2])
     opt2()
     ans = input(": ")
     if ans == "A" or ans == "a":
     	print(f"Correct Answer,,  Ap Jeet chuke hai {money * 5} chaliye badte hai apne agle prashne ki ouur")
     else:
     	  print("Wrong Answer.. better luck next time.")
     	  
# question 3
def opt3():
	  print("[A]13  [B]8\n[C]6   [D]7")
def Q3(money = "50,000"):
     print(Questionlist[3])
     opt3()
     ans = input(": ")
     if ans == "D" or ans == "d":
     	print("Correct Answer,,  Ap Jeet chuke hai ₹50,000 chaliye badte hai apne agle prashne ki ouur")
     else:
     	  print("Wrong Answer.. better luck next time.")
# question 4
def opt4():
	 print("[A]B.R. Ambedkar  [B]Dr. Rajendra Prasad\n[C]Zakir Husain   [D]Lal Bahadur Shastri")
def Q4(money = "200,000"):
     print(Questionlist[4])
     opt4()
     ans = input(": ")
     if ans == "B" or ans == "b":
     	print("Correct Answer,,  Ap Jeet chuke hai ₹200,000 chaliye badte hai apne agle prashne ki ouur")
     else:
     	  print("Wrong Answer.. better luck next time.")
# question 5
def opt5():
	 print("[A]Guido van Rossum\n[B]Rasmus Lerdorf")
def Q5(money = "1,000,000"):
     print(Questionlist[5])
     opt5()
     ans = input(": ")
     if ans == "A" or ans == "a":
     	print("Correct Answer.. Adbhut,  Ap Jeet chuke hai ₹1,000,000 chaliye badte hai apne agle prashne ki ouur")
     	print("thanks for playing...more questions comming soon!!")
     else:
     	  print("Wrong Answer.. better luck next time.")

#main
e = input("Press ENTER to join Kaun Banega crorepati. ")
if e == "ENTER" or e == "n" or e == "enter":
	print("Loading questions..")
	print(f"your current balance is {money}")
	Q1()
	Q2()
	Q3()
	Q4()
	Q5()
	upi = input("Enter your upi.. our agent will send you ur money xD : ")
	if upi == " ":
		upi = input("arre yr upi enter karna. time kyu waste kar rha ._.")
		print("KBC team Gave you 1000,000 rs")
# exit()
