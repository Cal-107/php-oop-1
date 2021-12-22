<!-- Definisco il modello della CLASSE -->
<?php
    class Movies {
        // Proprietà
        public $title;
        public $director;
        public $year;
        public $genre;
        public $rating;
        public $isVisible;

        // Construct
        function __construct($title, $director, $year, $genre, $rating) {
            $this->title = $title;
            $this->director = $director;
            $this->year = $year;
            $this->genre = $genre;
            $this->rating = $rating;
            $this->isVisible = $this->ratingLimit($rating);
        }

        // Methods
        function ratingLimit($rating) {
            if ($rating < 18) {
                return false;
            } else {
                return true;
            }
        }

        function showMovie() {
            if ($this->isVisible) {
                echo 'You can see this movie';
            } else {
                echo 'You can\'t see this movie';
            }
        }
    }

    // istances
    $movie1 = new Movies('Gladiator', 'Ridley Scott', '2000', 'epic historical drama', 14);
    var_dump($movie1);
    $movie1->showMovie();

    $movie2 = new Movies('The Exorcist', 'William Friedkin', '1973', 'horror', 18);
    var_dump($movie2);
    $movie2->showMovie();
?>


