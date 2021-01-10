<?php
// MySQL Exemple
// ...................... 1 ..................

    // $serverName = 'localhost';
    // $userName = 'root';
    // $password = '';
    // $dbName = 'utilizatori';

    // $conn = mysqli_connect($serverName, $userName, $password, $dbName);

    // if (!$conn) {
    //     die("Connection failed: " . mysqli_connect_error());
    // }else{
    //     echo "Connected successfully! <br>";
    // }

    // $query = "SELECT * FROM users WHERE first_name = '". $name . "'";
    // $result = mysqli_query($conn, $query);
    // $num_results = mysqli_num_rows($result);

    // for ($i = 0; $i < $num_results; $i++){
    // // ...PROCESAREA REZULTATELOR…
    // }
    // mysqli_free_result($results);
    // mysqli_close($conn);

// ...................... 2 ..................

    // $servername = "localhost";
    // $username = "root";
    // $password = "";
    // $db = "testdb";

    // // Create connection
    // $conn = mysqli_connect($servername, $username, $password, $db);

    // // Check connection
    // if (!$conn) {
    //     die("Connection failed: " . mysqli_connect_error());
    // }else{
    //     echo "Connected successfully! <br>";
    // }

    // $name = 'Peter';
    // $query = "SELECT * FROM users WHERE firstname = '$name'";
    // $result = mysqli_query($conn, $query);

    // if (mysqli_num_rows($result) > 0) {
    //  // output data of each row
    //     while($row = mysqli_fetch_assoc($result)) {
    //         echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    //     }
    // }else{
    //     echo "0 results";
    // }
    //    mysqli_close($conn);

// ...................... 3 ..................

    // mysqli_connect(server_name, username, password, dbname) – Deschide conexiunea către serverul MySQL și selectează baza de date.
    // mysqli_query(connection, sql_query) – Trimite interogarea bazei momentan active.
    // mysqli_fetch_array(recordset) – Returnează un șir care corespunde setului de silabe rezultate.
    // mysql_num_rows(recordset_id) – Determină numărul de rânduri care apar în setul de date rezultat, care este obţinut în urma executării comenzii SELECT.
    // mysqli_affected_rows(connection) - Determină numărul de rânduri modificate prin comenzile executate anterior, INSERT, DELETE sau UPDATE.
    // mysqli_close(connection) – Inchide conexiunea.

// ...................... 4 ..................
/*
    După executarea codului, pe server va fi creată baza de date. În
    continuare, urmează codul complet (nu uitați ca după executare să
    comentați toate liniile privind crearea bazei de date și a tabelului,
    pentru ca ele să nu se execute de fiecare dată din nou și să încerce să
    creeze obiecte deja existente în bază):
*/

    // $conn = mysqli_connect("localhost","root","");

    // mysqli_query($conn,"CREATE DATABASE first_php_test_db");
    // mysqli_select_db($conn,"first_php_test_db");
    // mysqli_query($conn,"CREATE TABLE mytable (id int primary key auto_increment, username varchar(50))");
    // mysqli_query($conn,"INSERT INTO mytable values(null,'Peter'),(null,'Sally'),(null,'John')");
    // mysqli_close($conn);

    // $result = mysqli_query($conn, "SELECT * FROM mytable");
    
    // while($row = mysqli_fetch_row($result)){
    //     echo "ID: " . $row[0] . " - Name: " . $row[1] . "<br />";
    // }

// ...................... 5 ..................
/*
    Exemplul următor reprezintă pagina unei companii pe care se află
    formularul de căutare a datelor privind angajații: (necesita o baza de date necesara)
*/

    // if(isset($_POST['searchName']) && !empty($_POST['searchName'])) {

    //     $string = $_POST['searchName'];

    //     $conn = mysqli_connect('localhost', 'root', '');
    //     $db = mysqli_select_db($conn, 'membership');
    //     $sql = "SELECT * FROM directory WHERE LName = '$string'";
    //     $rs = mysqli_query($conn, $sql);

    //     if(mysqli_num_rows($rs) == 0){
    //         echo "No records found!";
    //     }else{
    //         while($row = mysqli_fetch_array($rs)) {
    //             echo "Ime: " .$row['FName'] . " ";
    //             echo $row['LName'] . "<br/>";
    //             echo "Tel: " . $row['Tel'] . "<br/>";
    //             echo "E-mail: " . $row['email'] . "<br/>";
    //         }
    //     }
    //     mysqli_close($conn);
    // }
   
?>
<!-- 
    <head>
        <title> A Web Page </title>
    </head>
        <body>
            <form action = "index.php" method = "POST">
                <p>Enter the last name of the employee and click the "Search":</p>
                <table>
                    <tr>
                        <td colspan = "2"> Company XYZ Directory </td>
                    </tr>
                        <td><input type="text" size="15" name="searchName"/></td>
                        <td><input type="submit" value="Search"/>
                    </tr>
                </table>
            </form>
        </body>
    </html> -->

<?php
// ...................... 6 ..................

    // SELECT - Tabele, coloane - Permite utilizatorilor să citească rândurile din tabel.
    // INSERT - Tabele, coloane - Permite utilizatorilor să introducă rânduri noi.
    // UPDATE - Tabele, coloane - Permite utilizatorilor să modifice valorile în rândurile existente ale tabelului.
    // DELETE - Tabele - Permite utilizatorilor să șteargă rândurile existente.
    // TRUNCATE - Tabele - Permite utilizatorilor să şteargă toate rândurile.
    // INDEX - Tabele - Permite utilizatorilor să indexeze anumite tabele.
    // ALTER - Tabele - Permite utilizatorilor să modifice structura tabelelor existente, cum ar fi adăugarea de coloane, schimbarea numelor coloanelor sau tabelelor sau tipurile de date din tabel.
    // CREATE - Baze de date, tabele - Permite utilizatorilor să creeze noi baze de date și tabele. Dacă în comanda GRANT este introdusă o anumită bază de date sau un anumit tabel, utilizatorii pot crea doar acea bază sau tabel prin comanda CREATE, ceea ce înseamnă următoarele: dacă ea există, mai întâi trebuie să o șteargă cu comanda DROP.
    // DROP - Baze de date, tabele - Permite utilizatorilor să șteargă bazele de date și tabelele.

    // $serverName = 'localhost';
    // $userName = 'root';
    // $password = '';

    // $connect = mysqli_connect($serverName, $userName, $password);
    // mysqli_query($connect, "CREATE DATABASE test_db;");
    // mysqli_query($connect, "CREATE TABLE users (userid int primary key auto_increment, username varchar(256), password varchar(256))");
    // mysqli_close($connect);

// ...................... 7 ..................
/*
    Introduceți utilizatorii din șir în baza de date test_db, tabelul users,
    astfel încât primul membru al fiecărui subșir să fie câmpul username,
    iar al doilea să fie password.
*/

    // $conn = mysqli_connect("localhost", "root", "");
    //     mysqli_select_db($conn,"test_db");

    // $users = array(
    //              array("Peter", "123"), 
    //              array("John", "456"),
    //              array("Thomas", "789")
    //          );
    //     foreach($users as $user){
    //         mysqli_query($conn,"INSERT INTO users (username, password) VALUES ('{$user[0]}', '{$user[1]}')");
    //     }
    // mysqli_close($conn);

// ...................... 8 ..................
/*
    Validați utilizatorii din bază, pe baza numelui de utilizator și al parolei,
    care se află în variabilele:
    $username = "john";
    $password = "4567";
*/

    // $username = mysqli_real_escape_string($conn, $username);
    // $password = mysqli_real_escape_string($conn, $password);

    // $conn = mysqli_connect("localhost", "root", "");
    // mysqli_select_db($conn, "test_db");
    // $r = mysqli_query($conn,"SELECT * FROM users WHERE username = '$username' AND password = '$password'");

    // if(mysqli_num_rows($r) == 1){
    //     echo "valid";
    // }else{
    //     echo "invalid";
    // }
    // mysqli_close($conn);

// ...................... 9 ..................
/*
    Tuturor câmpurilor din baza test_db, tabelul users, a căror parolă este
    de trei caractere, trebuie să li se adauge cele trei caractere ale parolei
    existente (dacă parola este abc, noua parolă trebuie să fie abcabc).
*/

    // $conn = mysqli_connect("localhost", "root", "");
    // mysqli_select_db($conn,"test_db");
    // $r = mysqli_query($conn,"SELECT * FROM users WHERE length(password) = 3");

    // while($row = mysqli_fetch_array($r)){
    //     mysqli_query($conn,"UPDATE users SET password = concat(password, password) WHERE userid = {$row['userid']}");
    // }
    // mysqli_close($conn);

// ...................... 10 ..................
/*
    Trebuie creată funcția care pe baza interogării returnează șirul
    bidimensional din bază.
    Testaţi funcția creată în tabelul users.
*/

    // function arrayFromDB($query){
    //     $conn = mysqli_connect("localhost", "root", "");
    //     mysqli_select_db($conn, "test_db");
    //     $r = mysqli_query($conn, $query);
    //     $resArray = array();
        
    //     while($tmpArr = mysqli_fetch_row($r)){
    //         $resArray[] = $tmpArr;
    //         return $resArray;
    //     }
    // }

    // $users = arrayFromDB("SELECT * FROM users");
    // foreach($users as $user){
    //     echo "id: " . $user[0] . ", name: " . $user[1] . ", password: " . $user[2] . "<br>";
    // }

// ...................... 11 ..................
/*
    Trebuie creată funcția care pe baza interogării transmise ca și
    parametru returnează valoarea numerică care reprezintă numărul de
    rânduri după interogare.
    Funcția trebuie testată în tabelul users.
*/

    // function scalar($query){
    //     $conn = mysqli_connect("localhost", "root", "");
    //     mysqli_select_db($conn, "test_db");
    //     $r = mysqli_query($conn, $query);
    //         if(mysqli_num_rows($r) == 1){
    //             $value = mysqli_fetch_row($r);
    //             return (int)$value[0];
    //         }else{
    //             return "";
    //         }
    // }
    // echo scalar("SELECT count(userid) FROM users");

    echo "<h1 style='text-align:center;'>Exemplele sunt puse in '<span style='color:green;'>comentarii</span>', nu se va afisa nimic pe pagina, deschide-ti fisierul cu ajutorul unui editor code!</h1>";

?>