<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{

    public array $arrayArticoli = [
        [
            "id" => 401,
            "titolo" => "Introduzione all'HTML",
            "descrizione" => "Le basi per creare una pagina web con HTML.",
            "autore" => "Mario Rossi",
            "corpo" => "HTML (HyperText Markup Language) è il linguaggio di base per la creazione di pagine web. Definisce la struttura del contenuto utilizzando tag come <html>, <head>, <body>, <h1>, <p> e molti altri.",
            "url_immagine" => "/images/html.png",
            "categoria" => "HTML"
        ],
        [
            "id" => 402,
            "titolo" => "CSS: Stili e layout",
            "descrizione" => "Come rendere le pagine web più belle con CSS.",
            "autore" => "Giulia Bianchi",
            "corpo" => "CSS (Cascading Style Sheets) permette di personalizzare l'aspetto delle pagine web, definendo colori, font, margini e layout responsivi con flexbox e grid.",
            "url_immagine" => "/images/css.jpg",
            "categoria" => "CSS"
        ],
        [
            "id" => 403,
            "titolo" => "JavaScript per principianti",
            "descrizione" => "Aggiungere interattività con JavaScript.",
            "autore" => "Luca Verdi",
            "corpo" => "JavaScript è il linguaggio che permette di rendere le pagine web dinamiche. Con JS possiamo manipolare il DOM, gestire eventi e comunicare con il server tramite fetch API.",
            "url_immagine" => "/images/javascript.jpg",
            "categoria" => "JavaScript"
        ],
        [
            "id" => 404,
            "titolo" => "Introduzione a Bootstrap",
            "descrizione" => "Creare layout reattivi in modo semplice.",
            "autore" => "Sara Neri",
            "corpo" => "Bootstrap è un framework CSS che fornisce griglie, componenti e stili predefiniti per creare siti web responsive e ben strutturati in pochi passi.",
            "url_immagine" => "/images/bootstrap.jpg",
            "categoria" => "Framework"
        ],
        [
            "id" => 405,
            "titolo" => "WordPress: Creare un blog",
            "descrizione" => "Come creare un sito web con WordPress.",
            "autore" => "Antonio Gialli",
            "corpo" => "WordPress è il CMS più usato al mondo per creare blog e siti web senza bisogno di scrivere codice. Offre temi, plugin e una dashboard intuitiva.",
            "url_immagine" => "/images/wordpress.jpg",
            "categoria" => "CMS"
        ],
        [
            "id" => 406,
            "titolo" => "SEO: Ottimizzare un sito web",
            "descrizione" => "Migliorare la visibilità di un sito su Google.",
            "autore" => "Elena Blu",
            "corpo" => "La SEO (Search Engine Optimization) è fondamentale per posizionare un sito nei risultati di ricerca. Include l'uso di parole chiave, meta tag, link building e ottimizzazione delle prestazioni.",
            "url_immagine" => "/images/seo.jpg",
            "categoria" => "SEO"
        ]
    ];
    


    public function list() {

        return view('list', ['articoli'=> $this->arrayArticoli]);
    }




    // leggi

public function leggi($id) {

    foreach ($this->arrayArticoli as $articolo ) {
        if ($id == $articolo['id']) {
            return view('articolo', ['articolo'=> $articolo]);

        } 
    }
    }
}
