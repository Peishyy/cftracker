## Carbon Emission Footprint Tracker

This project aims to develop an automated smart parking system for an organization, providing a streamlined parking experience for its members. Upon arrival, a camera-based automatic number plate tracking system, utilizing object detection and character recognition, will verify vehicle registrations from a centralized database. Integrated with the organization's entrance security, the system will grant authorized vehicles access and allocate parking space, enhancing overall security measures. Through efficient monitoring and real-time tracking, the system will effectively manage parking spot availability.

### Installation Instructions - [Local Deployment]

To install, open command prompt and type:

bash
$ cd C://xampp/htdocs/
$ git clone https://github.com/Peishyy/cftracker.git
$ cd cftracker
$ composer update
$ copy .env.example .env
$ php artisan key:generate
$ php artisan migrate
$ php artisan db:seed
$ php artisan storage:link
$ php artisan serve


### License

The cftracker project is open-sourced software licensed under the [Apache license](http://www.apache.org/licenses/).
