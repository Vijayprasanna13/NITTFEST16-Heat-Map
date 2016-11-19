## NITTFEST HEAT API

[NITTFEST HEAT 2016](https://play.google.com/store/apps/details?id=spider.project.nittfestheat)

Nittfest Heat is an android application designed to get the user's location in real time and give an updated head count of 
students per department cheering at a particular venue.

<br/>
![App](/images/unnamed.jpg)

#Build Instructions
1. Download zip or clone the repository.
2. Run `composer install`
3. Copy the `.env.example` file to a new file and name it as `.env`
4. Enter the credentials for your server and MySQL database in the `.env` file
5. Run `php artisan migrate` to migrate the tables
6. Run the application on any port using `php artisan serve` or using PHP server `php -S localhost -t public`
7. Download the App from Google Play Store for your Andriod device.
8. Enter your rollno and department in the login screen.
9. Check the map for results.
