# Uuhuw Chat with Laravel 5.4 and VueJS

This application is a real time chat made while I was studying VueJS. I used Laravel framework version 5.4 as backend

## How much time?

I made all project in nearly 16 hours split on three days.

## How to use

**1 - Clone the repository:**

- Option 01: By "clone or download" button on right top side of the git
 
- Option 02: Open the terminal and put this command on a folder of the your preference 
```bash
    git clone https://github.com/brunomartins-com/uuhuwchat.git
```
- _If you don't have the git in your computer, please <a href="https://git-scm.com/book/en/v2/Getting-Started-Installing-Git" target="_blank">click here</a>)_

**2 - Configuring the Application**
 
- 2.1 - Go to the "api" folder by terminal
```bash
    cd uhhuwchat
```
- 2.2 - On "uuhuwchat" folder, execute this command
```bash
    composer install
```
- _2.3.1 - If you don't have the composer in your computer, please <a href="https://getcomposer.org" target="_blank">click here</a>_

**3 - Configuring the Database**

- 3.1 step:
```bash
    cp .env.example .env
```
- 3.2 step:
```bash
    touch database/database.sqlite
```
- 3.3 step:
```bash
    Open the .env file and change these lines:
    
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=homestead
    DB_USERNAME=homestead
    DB_PASSWORD=secret
    
    to these:
    
    DB_CONNECTION=sqlite
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_USERNAME=homestead
    DB_PASSWORD=secret
```
- 3.4 step:
```bash
    php artisan migrate:install
```
- 3.5 step:
```bash
    php artisan migrate
```
- 3.6 step:
```bash
    composer dump-autoload
```
- 3.7 step:
```bash
    php artisan db:seed
```
- Default Users:
```
    After that, these users will be create in your database as default
    
    User 01
    
        Name: Clark Kent
        Email: clark@email.com
        Password: 123456
    
    User 02
    
        Name: Lois Lane
        Email: lois@email.com
        Password: 654321
```
**4 - Running the API**

- 4.1 - On "uuhuwchat" folder, execute the command to generate a key
```bash
    php artisan key:generate
```
- 4.2 - Execute this command on terminal for start the server
```bash
    php artisan serve
```
- 4.3 - Click on or copy the address below and paste on your browser

    <a href="http://localhost:8000/chat" target="_blank">http://localhost:8000/chat</a>
    or
    <a href="http://127.0.0.1:8000/chat" target="_blank">http://127.0.0.1:8000/chat</a>
    
**5 - How can I test?**
- 5.1 Open two different browsers like Safari, Google Chrome, Mozilla Firefox, or Opera and enter the address above.
- 5.2 Use those two default users above in each browser to enter on chat.
- 5.3 Send messages and enjoy with the real time updating.

## Demo
- <a href="http://uuhuwchat.brunomartins.com/chat" target="_blank">http://uuhuwchat.brunomartins.com/chat</a>


## Author

Bruno Martins - Web Developer since 2005 with higher skills in:
- HTML
- CSS
- Sass (SCSS)
- Less
- Gulp
- Javascript
- jQuery
- AngularJS
- VueJS
- EmberJS
- ReactJS
- PHP
- MySQL
- Sqlite
- Laravel Framework
- Lumen Framework
- Photoshop
- Illustrator
- Fireworks
- Git/BitBucket

####<a href="http://www.brunomartins.com" target="_blank">Visit my portfolio</a>


## License

The Uuhuw Chat app is open-sourced software.