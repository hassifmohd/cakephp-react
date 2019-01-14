# CakePHP React

## About this project

- This is sample CakePHP v3.7 application with React.
- What interesting is the react is non-SPA (non single page application).
- This means when you run `npm run build` the webpack will create multiple `bundle.js` located [here](https://github.com/hassifmohd/cakephp-react/tree/master/app/webroot/js)
- If you want to read which code I change when putting React into this CakePHP, please refer [this PR](https://github.com/hassifmohd/cakephp-react/pull/2/files)

## The concept behind it

If you have `events/view` in CakePHP controller and you want to change it into React. Below is the list of files that is related
| Files / Folders | Descriptions |
|--|--|
| [app](https://github.com/hassifmohd/cakephp-react/tree/master/app) folder | CakePHP application folder |
| [frontend](https://github.com/hassifmohd/cakephp-react/tree/master/frontend) folder | This is where I install the React application |
| [app/src/Template/Events/view.ctp](https://github.com/hassifmohd/cakephp-react/blob/master/app/src/Template/Events/view.ctp) | Put React related code |
| [frontend/webpack.config.js](https://github.com/hassifmohd/cakephp-react/blob/master/frontend/webpack.config.js) | Add new entry point and target location to transpile the code. **IMPORTANT!** |
| [frontend/src/events-view/index.js](https://github.com/hassifmohd/cakephp-react/blob/master/frontend/src/events-view/index.js) | Your React application code. Run `npm run start` for development |
| [app/webroot/js/events-view.js](https://github.com/hassifmohd/cakephp-react/blob/master/app/webroot/js/events-view.js) | This is example of the transpiled code used by `view.ctp` when you run `npm run build` |

# Installation CakePHP

## Start

First is to install CakePHP

```
git clone git@github.com:hassifmohd/cakephp-react.git //download this sample
cd cakephp-react/app //go into the cakephp folder
composer install //download the cakephp
```

## Setup CakePHP database

After install CakePHP you need to setup the database first

```
cd cakephp-react/app/config
cp .env.default .env //create a .env file from the template given
vim .env //update you configuration
vim app.php //update Datasources to use env(...) that you just set
```

## Test CakePHP is running

If you setup everything correctly. You should be able to access the website now. Mine is `http://localhost:8080/cakephp-react/app/`

## Create table using migrations and sample seed data

Create the table database using CakePHP migrations

```
cd cakephp-react/app/
bash bin/cake migrations migrate //create table
vendor/bin/phinx seed:run -s EventSeeder -c config/phinx.php -e development //create sample data
```

## Test CakePHP is running

Once again, if the setup is correct. You can access `http://localhost:8080/cakephp-react/app/events/add`

# React development

## React development located at frontend folder

- located at frontend folder
- In this project. I make `events/index` and `events/view` as react
- So you will see `app/src/Template/Events/index.ctp` is different
- The bundle.js is different which is `app/webroot/js/events-index.js`
- If you want to look at the code, please compare [this](https://github.com/hassifmohd/cakephp-react/blob/installation/frontend/src/events-index/index.js) and [this](https://github.com/hassifmohd/cakephp-react/blob/installation/frontend/webpack.config.js#L6)

```
cd cakephp-react/frontend
npm install //install anything important. start the project
```

## Development

To develop, run `npm run start` change anything at `frontend/src/events-index/index.js`

## Development: Add new module

Let say you want to make `events/add` to use react. Change `frontend/webpack.config.js` according to the `entry`. I am using multiple entry point. Therefore when you develop the webpack will automatically create new file at `/app/webroot/js/event-add.js`

## Build

To build simply run `npm run build`
