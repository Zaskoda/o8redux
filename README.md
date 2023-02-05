# Orbiter.com

## Tech

  - Laravel - PHP Framework
  - Sail - For running local dockerized web server and sql server.
  - Livewire - AJAX api stuff
  - Alpine - Reactive JS framework
  - Tailwind - CSS Framework
  - web3p / web3.php - For communicating with RPC nodes

## Local Dev

### Web server & DB

To raise the local dev environment run the following command:

> ./vendor/bin/sail up

Note that this is basically the same command as

> docker-compose up -d

### Javascript

While this will raise a web server and connect it to a database, it does not start node. Unless you've built scripts for deployment, you'll also need to run this command:

> npm run dev

Note that this is basically the same command as

> npx vite

## Deployment

HALP, this needs to be written