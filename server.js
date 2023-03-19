const express = require('express');
const app = express();
const expbs = require('express-handlebars');
const path = require('path');
// Sending static files with Express 
app.use(express.static('public'));

const hbs = expbs.create({
    defaultLayout: 'main',
    layoutsDir: path.join(__dirname, 'views/mainLayout'), // change layout folder name
    partialsDir: path.join(__dirname, 'views/pieces'), // change partials folder name
    extname: '.hbs',
});

// Express Handlebars Configuration
app.engine('hbs', hbs.engine);
app.set('view engine', 'hbs');

// Configure Routes
app.use('/', require(path.join(__dirname,'routes/front.js')));

app.listen(8080, () => {
    console.log('Server is starting at port ', 8080);
});