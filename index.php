<!-- Definisco il modello della CLASSE -->
<?php
    class Movies {
        // Proprietà
        public $title;
        public $director;
        public $year;
        public $genre;

        // Construct
        function __contruct($title, $director, $year, $genre) {
            $this->title = $title;
            $this->director = $director;
            $this->year = $year;
            $this->genre = $genre;
        }
    }

    // istances
    $movie1 = new Movies('Gladiator', 'Ridley Scott', '')

?>


