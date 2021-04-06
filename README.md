# PwC Complaint Management Portal
An multi authintication website which was made using **Laravel 7** & **Bootstrap** & **JavaScript** connecting it with MySQL database.

The website includes a **Public Website** for users to let them register and create a complaints & **Admin Dashboard** for statistics and filtering the requested complaints.

## The Public Website images:

**user home page**
![PwC-PublicWebsite](https://user-images.githubusercontent.com/71829413/113707390-81408380-96e8-11eb-9164-ca701f3edaf3.PNG)


**user complaint form**
![PwC-PublicWebsite-form](https://user-images.githubusercontent.com/71829413/113706340-3eca7700-96e7-11eb-9d5d-8a6766bffa44.PNG)

**user inbox mail after request a complaint**
![PwC-PublicWebsiteemail](https://user-images.githubusercontent.com/71829413/113706352-42f69480-96e7-11eb-86c5-c0943d5e2c6a.PNG)



## The Admin Dashboard images:

**Admin Dashboard**
![PwC-AdminDashboard](https://user-images.githubusercontent.com/71829413/113705582-476e7d80-96e6-11eb-8b13-e6138154960f.PNG)

**list of requested complaints**
![PwC-AdminDashboard-filtering](https://user-images.githubusercontent.com/71829413/113705687-666d0f80-96e6-11eb-9fd6-b6b036a6fe65.PNG)

**user inbox mail after admin take an action for his complaint**
![PwC-AdminDashboard-email-update-status](https://user-images.githubusercontent.com/71829413/113707151-29098180-96e8-11eb-9c6b-f3022b1bce65.PNG)


## Directions to use this code:
1. **clone the repository**
2. **Install composer packages:**
```
$ cd PwC_complaint_management_portal
$ composer install
```
3. **Create and setup .env file:**
```
make a copy of .env.example and rename to .env
```
4. **open your .env file which is located in your root directory of our application and checkout for this settings:**
```
MAIL_DRIVER=smtp
MAIL_HOST=mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
```
5. **Now edit the details above(step4) to put your mail credentials in .env as follows:**
```
MAIL_DRIVER=smtp
MAIL_HOST=smtp.googlemail.com
MAIL_PORT=465
MAIL_USERNAME=ENTER_YOUR_EMAIL_ADDRESS(GMAIL)
MAIL_PASSWORD=ENTER_YOUR_GMAIL_PASSWORD
MAIL_ENCRYPTION=ssl
```
6. **Configure your Google Account:**
> Login to your Google Email Account and click on Google Account Button. This button is display when you click on the profile picture in your Gmail Dashboard as shown.
> Once you are on My Account Page then click on Security and scroll down to the bottom and you will find ‘Less secure app access’ settings. Click on the radio button to set it ON.
7. **Migrate and insert records**
```
$ php artisan migrate
```
8. **Happy Coding !!**


# Future Plans:

- creating roles and priviliges for admins.
- toggle to change the language.
- edit your profile page for user and admin.
