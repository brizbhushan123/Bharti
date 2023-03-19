const express = require('express');
const router = express.Router(); 


// Routing 
router.get('/', (req, res) => {
    res.render('index', {
        title: 'Home Page',
    });
});

router.get('/about', (req, res) => {
    res.render('about', {
        title: 'About Me',
    });
});

router.get('/services', (req, res) => {
    res.render('services', {
        title: 'Our Services',
    });
});

router.get('/gallery', (req, res) => {
    res.render('gallery', {
        title: 'Our Gallery',
    });
});

router.get('/training', (req, res) => {
    res.render('training', {
        title: 'Training',
    });
});

router.get('/contact', (req, res) => {
    res.render('contact', {
        title: 'contact us',
    });
});


module.exports = router;


