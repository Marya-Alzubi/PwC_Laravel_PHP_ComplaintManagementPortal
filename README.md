## PwC Complaint Management Portal

## Directions:
1. **clone the repository**
2. **Install composer packages:**
```
$ cd PwC_complaint_management_portal
$ composer install
```
3. **Create and setup .env file:**
make a copy of .env.example and rename to .env
```
$ php artisan key:generate
put mail credentials in .env file
```
4. **Migrate and insert records**
```
$ php artisan migrate
```
5. **Happy Coding !!**

