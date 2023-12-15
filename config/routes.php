<?php

// ['nom de la page','Nom du controller','nom de la methode','tableau d'arguments']

$routes =  [
    ['home', 'default', 'index'],
    ['contact', 'contact', 'index'],
    ['about', 'about', 'index'],

    //articles:
    ['articles', 'article', 'index'],
    ['article', 'article', 'show', ['id']], //single article page
    ['delete', 'article', 'delete', ['id']], //delete
    ['add', 'article', 'add'] //form
];
