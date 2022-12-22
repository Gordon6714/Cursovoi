<?

$name_film = $_POST['name_film'];
$adress_kino = $_POST['adress_kino'];
$mesto = $_POST['mesto'];

$link = mysqli_connect('localhost', 'root', 'root', 'cursovoi');

if($link == false){
    print("Ошибка подключения");
    mysqli_connect_error();
} else{
    print("Успешно");

    print($mesto);


    $name_film_int = intval($name_film);
    $adress_kino_int = intval($adress_kino);
    $mesto_int = intval($mesto);

    $sql = 'INSERT INTO bilet SET id_filma = "'.$name_film_int.'", id_adress = "'.$adress_kino_int.'", id_mesto = "'.$mesto_int.'"';
    $result = mysqli_query($link,$sql); 
    if ($result == false){
        print("Ошибка при выполнении запроса фильма");
    }



}
    




?>