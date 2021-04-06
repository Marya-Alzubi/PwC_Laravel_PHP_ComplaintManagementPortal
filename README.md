## PwC Complaint Management Portal
An multi authintication website which was made using **Laravel 7** & **Bootstrap** && **JavaScript** connecting it with MySQL database.

The website includes a **Public Website** for users to let them register and create a complaints & Admin Dashboard for statistics and filtering the requested complaints.

## The Public Website images:

**user home page**
![PwC-PublicWebsite](https://user-images.githubusercontent.com/71829413/113707390-81408380-96e8-11eb-9164-ca701f3edaf3.PNG)


**user copmlaint form**
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
4. **put mail credentials in .env file**

5. **Migrate and insert records**
```
$ php artisan migrate
```
6. **Happy Coding !!**

