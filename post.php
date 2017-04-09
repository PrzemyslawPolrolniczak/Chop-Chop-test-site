<?php 
$array = $_POST['array'];

function showFormData() {
  $array = $_POST['array'];
  foreach($array as $key => $name) {
    echo $key . ' = ' . $name . '<br>';
  }
}

if($_SERVER['REQUEST_METHOD'] === 'POST') {
  if( in_array('', $array)) { //nie wiem jak zrobić, aby wyszukiwał czy jakiekolwiek pole jest wypełnione.
    echo 'Brak danych do wyświetlenia';
  } else {
    echo 'Dziękujemy za wysłanie formularza z następującymi danymi:<br>';
    showFormData();
  }
}
?>