# Uuhuw Chat with Laravel and VueJS

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

**2 - Configuring the API**
 
- 2.1 - Go to the "api" folder by terminal
```bash
    cd uhhuwchat
```
- 2.2 - On "api", execute the command
```bash
    composer install
```
- _2.2.1 - If you don't have the composer in your computer, please <a href="https://getcomposer.org" target="_blank">click here</a>_

- 2.3 step:
```bash
    cp .env.example .env
```
- 2.4 step:
```bash
    configuring your databasec in .env file
```
- 2.5 step:
```bash
    php artisan migrate:install
```
- 2.6 step:
```bash
    php artisan migrate
```
- 2.7 step:
```bash
    composer dump-autoload
```
- 2.8 step:
```bash
    php artisan db:seed
```
- Default Users:
```bash
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
**3 - Running the API**

- 3.1 - Execute this command on terminal for start API service
```bash
    php artisan serve
```

- 3.2 - Copy the address below and paste on your browser

    <a href="http://localhost:8000/chat" target="_blank">http://localhost:8000/chat</a>
    
**4 - How can I test?**
- 4.1 Open two different browsers like Safari, Google Chrome, Mozilla Firefox, or Opera and enter the address above.
- 4.2 Use those two default users above in each browser to enter on chat.
- 4.3 Send messages and enjoy with the real time updating.

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