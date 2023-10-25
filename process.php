<?php
  if (isset($_POST['paragrafo']) && isset($_POST['parola_censurare'])) {
    // Recupera il paragrafo e la parola da censurare dal form
    $paragrafo = $_POST['paragrafo'];
    $parola_censurare = $_POST['parola_censurare'];

    // Stampa il paragrafo e la sua lunghezza
    echo "<h2>Paragrafo Originale</h2>";
    echo "<p>$paragrafo</p>";
    echo "<p>Lunghezza del paragrafo: " . strlen($paragrafo) . " caratteri</p>";

    // Censura la parola nel paragrafo
    $paragrafo_censurato = str_ireplace($parola_censurare, '***', $paragrafo);

    // Stampa il paragrafo censurato e la sua lunghezza
    echo "<h2>Paragrafo Censurato</h2>";
    echo "<p>$paragrafo_censurato</p>";
    echo "<p>Lunghezza del paragrafo censurato: " . strlen($paragrafo_censurato) . " caratteri</p>";
  } else {
    echo "Si è verificato un errore. Assicurati di compilare tutti i campi del form.";
  }
?>