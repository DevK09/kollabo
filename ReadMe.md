# Dump Folder

## Dump/dump.php
- API for Instagram
- https://api.github.com/graphql  
- dump/dump4.php fetching API setup


## dump/insta.php
- Ready Template for Insta Posts
- Pass Dynamic Variable 

## page-vcard.html and component-web-share-api.html
- Vcard and sharing System
- All set Just Implement

## algo.js 
- algorithm for home screen user display
- Js Object Notation for Post generation
- add to AJAX funtion and pass arguments to funtion to make it dynamic content

## dump/app2/msg
- Message Feature
# [Messenger Demo App](https://github.com/RTippin/messenger)

---

## Included addon packages:
- UI / Web routes [messenger-ui](https://github.com/RTippin/messenger-ui)
- Ready-made bots [messenger-bots](https://github.com/RTippin/messenger-bots)
- Faker commands [messenger-faker](https://github.com/RTippin/messenger-faker)
- Janus media server client [janus-client](https://github.com/RTippin/janus-client)

## Checkout the [LIVE DEMO](https://tippindev.com)

### Prerequisites
- PHP >= 8.0.2
- Laravel >= 9.x
- MySQL >= 8.x
- [PHPREDIS](https://github.com/phpredis/phpredis/blob/develop/INSTALL.markdown) if using `redis` for drivers, which our default `.env.example` has set.


# Installation

#### Clone or download this repository
```bash
git clone git@github.com:RTippin/messenger-demo.git
```

#### Composer install
```bash
composer install
```

#### Rename the `.env.example` to `.env` and configure your environment, including your pusher keys if you use pusher.
```dotenv
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=1234
DB_DATABASE=demo
DB_USERNAME=root
DB_PASSWORD=password
PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=
MESSENGER_SOCKET_PUSHER=true
MESSENGER_SOCKET_KEY="${PUSHER_APP_KEY}"
MESSENGER_SOCKET_CLUSTER="${PUSHER_APP_CLUSTER}"
#etc
```

#### Run the Install Command
- This command will generate your `APP_KEY` for you, as well as migrating fresh and downloading our documentation files.
  - This will `WIPE` any data in your database as it runs `migrate:fresh` under the hood.
```bash
php artisan demo:install
```

---

## Running locally:

#### Run these commands in their own terminal inside your project folder
```bash
php artisan serve
php artisan queue:work --queue=messenger,messenger-bots
```

---

## Default seeded admin account:

### Email `admin@example.net`

### Password: `messenger`

### All other seeded accounts use `messenger` password as well

---

## UI configurations / Websockets
- If you plan to use [laravel-websockets](https://beyondco.de/docs/laravel-websockets/getting-started/introduction), or want more information regarding our UI, please visit our documentation:
  - [Messenger UI README](https://github.com/RTippin/messenger-ui/blob/master/README.md)

---


# BUG

- Bootstrap Moodel not working because of same name in class 
