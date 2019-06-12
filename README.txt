NOTE SLOW IF NOT CONNECTED TO INTERNET(Some Images wont show)
Most funtion still needs to be implamented
To Login: just click btn "Login" (TEMP)
To get to admin page goto Login then click label "Admin Login" (TEMP)
FUTIONS TO BE ADDED:
Read Comments in Code.
 
Bachelor of Information Technology
 
School of Information Technology
 
IT6x30 – Internet Application Development
Assignment Two
8BIT User Manual

Semester One, 2018 
8BIT - User Manual
*Requires PHP version 7.2.2
Website Navigation Bar/Menu
 
HOME (BUTTON)
Goes to Home just cosmetic, it show cases users uploaded screen shots
href="index.php"
NEWS (BUTTON)
Goes to News Page, Shows Game updates & news. Admin can Create Read Update & Delete News.
	href="news.php"
REGISTER (BUTTON)
Goes to Register, where a user can register a new account by inputting Email & Password (ATM there is no error handling to check if email is valid)
	href="register.php"
LOGIN (BUTTON)
Goes to Login, where a registered user can login
	href="login.php"
BUY NOW (BUTTON)
Goes to Buy Form, which when a User is login in and has their session stored, they can put in their Credit Card Details which will be checked by an admin to verify and accept payment.
	href="buyform.php"
 
User/Member Login
URL:	http://localhost/8BIT/login.php
Test data from Database
Email: account2@email.com
Password: password2

Steps
Input Test data
Then click LOGIN (BUTTON)

User/Member Register
URL:	http://localhost/8BIT/register.php
Test data if needed
Email: account@email.com
Password: password

Steps
Input Test data or own details
Then click SIGN UP (BUTTON)

User/Member Account Info
URL:	http://localhost/8BIT/account.php 
SCREENSHOT UPLOAD
Steps
The screenshot uploader on the account page allows users to upload images from their own computer into the folder labelled “uploads”.

 
User/Member BUY NOW
URL:	http://localhost/8BIT/buyform.php
ORDER FORM

Test data
Card Number:	21600681
Name on Card:	Poor Student
Expiration Date:	2014-08-08
Security Number:	2160

Steps
Input Test data or own details
Then click Submit Payment (BUTTON)
 
ADMIN PANEL
NOTES: 
For screenshot uploads on homepage to be visible the admin must first upload images into database, the images can be found in the folder named “C:\inetpub\wwwroot\8BIT\uploads” within the submitted 8BIT folder contains example images that can be uploaded using the image uploader on the admin page.
Login
URL:	http://localhost/8BIT/adminpage.php
The Website will redirect you to adminlogin.php, Where you will have to login as an admin.

Test data
Email:		admin@email.com
Password:	password

Steps
Input Test data
Then click LOGIN (BUTTON)

Create	(BUTTON)
Steps
Click button
Once all input fields are filled Click CREATE (BUTTON).
Update	(BUTTON)
Steps
Click button
Once all input fields are filled Click Update (BUTTON)
 
Delete	(BUTTON)
Steps
Click button
Check if correct ID to delete
Note: do not delete yourself.
Then press yes
If you don’t want to delete press no
SCREENSHOT MANAGEMENT
 
Clicking on the “Choose file” to upload images one at a time into the database.
These images will also be displayed on the homepage immediately after being uploaded by the admin.
The “Update images” option allows the admin to change/update the four images that cycle on the homepage.
