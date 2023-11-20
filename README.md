<p align="center"><img src="https://github.com/AbdullahAlbasaha/clouds-task/assets/47928447/67560ee2-ecf3-43ad-9d3d-1cf8ca25b420" width="700"></p>


## Abstract
##### This is  a Technical Task For Clouds Company (https://clouds.com.kw/).
  ###### customer can sign up and subscribe to a recurring payment plan, and the admin can view, update, deactivate and delete any user record.
 ## Used Patterns
 1. Service Oriented Architecture(SOA)
 1. Data Transfer Object(DTO)
 1. Repository
 1. Facade
 ## Used Technology
 #### Backend :
 * PHP (Laravel).
 * Mysql.
 #### Frontend :
 * Javascript.
 #### Design :
 * Css.
 * bootstrap 3.
## Used Services
* Strip  (Laravel Cashier).

## Installation

1. Clone the repo and `cd` into it
2. Run `composer install` command .
1. Rename or copy `.env.example` file to `.env`
1. Run `php artisan key:generate` command.
1. Copy key and paste in `.env` file Specifically `APP_KEY`.
1. Set your database credentials in your `.env` file
1. Set your Stripe credentials in your `.env` file. Specifically `STRIPE_KEY` and `STRIPE_SECRET`

1. Run `php artisan migrate --db:seed` command. to migrate the database and run any seeders necessary.
1. You will need to update  some necessary data in Plan seeder from Your Strip account .
1. Run `php artisan serve` command .
1. Go `localhost:8000` in your browser
1. Go `/admin` if you want to access the admin backend. User/Password: `admin@admin.com/admin`.
