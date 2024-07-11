** Folder Structure :
		1) apis - contains function to interact with database to fetch, edit, delete data to db
		2) uploads - All images will be uploaded and fetched from this file
		3) Frontend files - Then all frontend files are displayed 
		4) README file - To provide usage guide and basic information regarding db & other files
		5) GIF folder - Contains the gif files & screenshots showing how does it working
		6) Database folder - It contains database file (which is exported through db)

** Database name - task_db 

** Database Structure

1) tbl_users

	Purpose: Manages user roles for admin and user logins.
	Fields: Id, Role (to manage admin and user access), username & password.
 
 	For login :
 		user login :  username - Aarati
 					  password - aarati

 		admin login : username - admin
 					  password - admin

2) tbl_myaccount

	Purpose: Displays data in the frontend file account.php which stores data from account form.
	Fields: Id, Name, Image.


3) tbl_contact

	Purpose: Stores data from the contact us form.
	Fields: Id, Name, address, city, message and image.


** apis :
		user_class.php file contains functions to interact with database

** Frontend files :

1) login_form.php
	It contains two forms for user signup and login

2) config.php
	It contains database connection

3) uploads
	To store and retrieve all images from forms

4) index.php
	It contains home page, session is maintained in this file and slider appears over here. 
	It contains navigation bar to navigate to other files

5) logout.php
	To destroy the user session

6) edit_user & edit_contact
	To edit data of that pages & in database also

7) delete_user & delete_contact
	To delete data from pages & from databases also

8) account.php 
	It contains Name & image fields

9) contact.php
	It contains data that is fetched to admin_tasks file in table format



