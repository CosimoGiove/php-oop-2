<?php
require_once __DIR__."/prodottianimali.php";

$card_animali = [
    new ProdottiAnimali(
       "cibo umido per cani",
        "cuccia in legno per cani",
        "osso",
        20,
        "cane",

    ),
    new ProdottiAnimali(
        "cibo in scatola",
         "grotta per gatti",
         "topolino giocattolo",
         5,
         "gatto",
     ),
     new ProdottiAnimali(
        "mangime per uccelli",
         "gabbia",
         "altalena con piattaforma",
         1,
         "uccello",
     ),
     new ProdottiAnimali(
        "tetramin mangiare per pesci",
         "acquario",
         "decorazione per acquario",
         0.3,
         "pesci",
     ),
];


?>