# dd-admission-predictor

This was my college project for Distributed Databases.<br>
This system was originally developed only for Engineering College Admissions in Maharashtra,India but can essentially be adapted for other streams too.
The purpose of it is to build a system to predict the users chances for getting into a certain college.<br>

# Initial Idea:
The basic idea behind it was to cross reference the users entered grades with the average of the past 3or5 years cut-off lists of the      colleges and based on that display the colleges with avg. cut-off list marks less than the users acquired grades.

# Implemented Idea:
Since it was a college project we werent required to implement the entire project in such an elaborate way and our professor was very flexible with its scope and usecase, I chose to directly enter a few random colleges with their cut-off lists instead of entering past 3or5 years lists and then calculating the average. So the system essentially just displays a list ofcolleges the user is eligible to apply to and doesnt really work as a "predictor".  

# Working:
This is how the system would work:
1. Index page contains 3 options:<br>->User Login <br>->Admin Login <br>->Register
2. Admins can log in to enter College Cut-off lists.<br>||Admins do not get a Registration page, their login details are directly entered in the database.
3. Users register in the system from the registration link on the indexpage.<br> ||All the details required about the user are collected on the Registration Page.
4. Upon Log-in the Users entered details are displayed and the colleges along with its complete details he/she can get into. 

# misc.
-> the databases required are present in the DATABASES/ folder.<br>
-> if i get too lazy and upload the databases without removing the existing data please ignore it and do it yourself.<br>
-> at this point im just wondering why am i filling out this readme file at 3am for a project that probably nobodys going to use.<br>
-> anyway if you have any doubts or queries about it feel free to hit me up @wadhwa.karan96@gmail.com
