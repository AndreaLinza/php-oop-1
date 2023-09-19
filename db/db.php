<?php

require_once __DIR__ . '/../classes/Movies.php';


    $rawMoviesList = [
        [

            'titolo'=> 'Il Padrino',
            'anno' => 1972,
            'descrizione' => 'La storia epica di una famiglia mafiosa italo-americana',
            'genere' => 'Drammatico',
            'lingua' => 'Italiano',
            'img' => 'db/assets/Padrino.jpg'
        ],
        [

            'titolo' => 'Forrest Gump',
            'anno' => 1994,
            'descrizione' => 'La straordinaria vita di Forrest Gump, un uomo semplice con una vita straordinaria',
            'genere' => 'Drammatico',
            'lingua' => 'Italiano',
            'img' => 'db/assets/gump.jpg'
        ],
        [

            'titolo' => 'Pulp Fiction',
            'anno' => 1994,
            'descrizione' => 'Le storie interconnesse di un gruppo di personaggi a Los Angeles',
            'genere' => 'Crime',
            'lingua' => 'Italiano',
            'img' => 'db/assets/Pulp.jpg'
        ],
        [

            'titolo' => 'Inception',
            'anno' => 2010,
            'descrizione' => 'Un ladro entra nei sogni degli altri per rubare segreti', 
            'genere' => 'Azione',
            'lingua' => 'Italiano',
            'img' => 'db/assets/Inception.jpg'
        ],

        [

            'titolo' => 'La La Land',
            'anno' => 2016,
            'descrizione' => "Una storia d'amore tra un pianista e un'attrice a Los Angeles",
            'genere' => 'Musical',
            'lingua' => 'Italiano',
            'img' => 'db/assets/lalaland.jpg'
        ],
        [

            'titolo' => 'The Dark Knight',
            'anno' => 2008,
            'descrizione' => 'Il cavaliere oscuro combatte il Joker a Gotham City',           
            'genere' => 'Azione',
            'lingua' => 'Italiano',
            'img' => 'db/assets/Batman.jpg'
        ],

    ];

    $moviesList = array_map(function($item){
        $movie = new Movies ($item ['titolo'], $item['genere'], $item['anno'],$item['descrizione'], $item['img']);
        return $movie;
    }, $rawMoviesList);
?>