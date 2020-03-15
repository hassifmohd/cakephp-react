# CakePHP+React

![](demo/demo.gif)

## About this project & The concept behind it

- This is sample project using CakePHP v3.7 with React.
- What interesting is the react is non-SPA (non single page application).
- This means when you run `npm run build` the webpack will create multiple `bundle.js` located at `/app/webroot/js/react`
- Then your `.ctp` will load the JS file `<?= $this->Html->script('react/bundle.js') ?>`

# Installation

## 1. Download and install CakePHP

First is to install CakePHP, react installation will be done last

```
git clone git@github.com:hassifmohd/cakephp-react.git //download this sample
cd cakephp-react/app //go into the cakephp folder
composer install //download the cakephp
```

## 2. Setup CakePHP configuration

After install CakePHP you need to setup the enviroment.

If you setup everything correctly. You should be able to access the website without any problems. 

Mine is `http://localhost:8080/cakephp-react/app/`

```
cd cakephp-react/app/config
cp .env.default .env //create a .env file from the template given
vim .env //update you configuration
```

## 3. Create table and sample data

Create the table database and seed using CakePHP migrations

```
cd cakephp-react/app/
bash bin/cake migrations migrate //create table
bash vendor/bin/phinx seed:run -s EventSeeder //create sample data
```

## 4. Download and install React

The last step is to install React

```
cd cakephp-react/frontend //go to React folder
npm install //install react
npm run build //to compile the application
```

## 5. Installation complete, checkout the demo

If everything setup correctly, you can checkout slider demo at http://localhost:8080/cakephp-react/app/events/slider

## 6. Understanding the files & folders structure

Besides CakePHP MVC, below is the additional structure

| Files & Folders Location | Descriptions |
|--|--|
| `/app` | CakePHP application |
| `/frontend` | React application. To develop, run `npm run start` |
| `/frontend/webpack.config.js` | CakePHP+React main configuration is here |
| `/frontend/src/...` | Put your react codes here. Run `npm run build` to compile. Results will be at `/app/webroot/js/react` |
