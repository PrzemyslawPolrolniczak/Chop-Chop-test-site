<?php 

if($_SERVER['REQUEST_METHOD'] === 'POST') {
  if( isset($_POST['name'])) {
    $name = trim ( $_POST['name'] );
    echo 'Dziękujemy za wysłanie formularza z następującymi danymi: <br> Imię: ' . $name;
  } else {
    echo 'Brak danych do wyświetlenia';
  }
}
?>