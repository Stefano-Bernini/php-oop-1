<?php
    class Movie {
        public $titolo;
        public $genere;
        public $anno;
        public $voto;
        public $prezzo_biglietto;

        function __construct($titolo, $genere, $anno, $voto, $prezzo_biglietto){
            $this->titolo = $titolo;
            $this->genere = $genere;
            $this->anno = $anno;
            $this->voto = $voto;
            $this->prezzo_biglietto = $prezzo_biglietto;
        }

        function setPrezzo($prezzo_biglietto){
            if($this->anno < 2010) {
                $this->prezzo_biglietto =$prezzo_biglietto - 4;
            } else {
                $this->prezzo_biglietto =$prezzo_biglietto;
            }
        }
        
        function getPrezzo(){
            return $this->prezzo_biglietto;
        }

    }

    $film1 = new Movie('Harry Potter e la pietra filosofale', 'Fantasy/Avventura', 2001, '7/10', 8);
    $film1->setPrezzo($film1->prezzo_biglietto);
    
    $film2 = new Movie('Spider-Man: Across the Spider-Verse', 'Azione/Avventura', 2023, '10/10', 11);
    $film2->setPrezzo($film2->prezzo_biglietto);

    $film3 = new Movie('Così è la vita', 'Commedia/Avventura', 1998, '7/10', 6);
    $film3->setPrezzo($film3->prezzo_biglietto);

    $film4 = new Movie('The Hateful Eight', 'Western/Drammatico', 2015, '9/10', 9);
    $film4->setPrezzo($film4->prezzo_biglietto);


    echo "<h2>Film 1:</h2>";
    echo "<span><strong>Titolo: </strong></span>".$film1->titolo."<br/>";
    echo "<span><strong>Genere: </strong></span>".$film1->genere."<br/>";
    echo "<span><strong>Anno: </strong></span>".$film1->anno."<br/>";
    echo "<span><strong>Voto: </strong></span>".$film1->voto."<br/>";
    echo "<span><strong>Prezzo: </strong></span>".$film1->prezzo_biglietto."€";
    echo "<hr/>";
    echo "<h2>Film 2:</h2>";
    echo "<span><strong>Titolo: </strong></span>".$film2->titolo."<br/>";
    echo "<span><strong>Genere: </strong></span>".$film2->genere."<br/>";
    echo "<span><strong>Anno: </strong></span>".$film2->anno."<br/>";
    echo "<span><strong>Voto: </strong></span>".$film2->voto."<br/>";
    echo "<span><strong>Prezzo: </strong></span>".$film2->prezzo_biglietto."€";
    echo "<hr/>";
    echo "<h2>Film 3:</h2>";
    echo "<span><strong>Titolo: </strong></span>".$film3->titolo."<br/>";
    echo "<span><strong>Genere: </strong></span>".$film3->genere."<br/>";
    echo "<span><strong>Anno: </strong></span>".$film3->anno."<br/>";
    echo "<span><strong>Voto: </strong></span>".$film3->voto."<br/>";
    echo "<span><strong>Prezzo: </strong></span>".$film3->prezzo_biglietto."€";
    echo "<hr/>";
    echo "<h2>Film 4:</h2>";
    echo "<span><strong>Titolo: </strong></span>".$film4->titolo."<br/>";
    echo "<span><strong>Genere: </strong></span>".$film4->genere."<br/>";
    echo "<span><strong>Anno: </strong></span>".$film4->anno."<br/>";
    echo "<span><strong>Voto: </strong></span>".$film4->voto."<br/>";
    echo "<span><strong>Prezzo: </strong></span>".$film4->prezzo_biglietto."€";
?>