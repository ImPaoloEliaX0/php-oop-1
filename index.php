<?php
/*inizio a compilare la classe*/

class Film {
  public $titolo;
  public $anno;
  public $lingua;
  public $nazione;

  public function __construct($miaNazione) {
    $this->nazione = '<p>'. $miaNazione. '</p>';
  }
/*controllo genere*/

  public function checkGenere($myGenere) {
  
    if($myGenere == 'Drammatico') {
        echo '<p> Questo è un film drammatico </p>';
    } else {
      echo '<p> Altri generi </p>';
    }

  }

}
/*nuovo film*/
$primoFilm = new Film('ITA');
$primoFilm->titolo = "La vita è bella";
$primoFilm->checkGenere('Drammatico');

echo $primoFilm->titolo;
echo $primoFilm->nazione;

?>