<!-- Con un form passare come parametri GET name, mail e age
e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri,
che mail contenga un punto e una chiocciola 
e che age sia un numero.
Se tutto è ok stampare "Accesso riuscito",
altrimenti "Accesso negato" -->

<form action="./index.php" method="GET">
    <input type="text" name="name" id="name" placeholder="Type your name">
    <input type="text" name="mail" id="mail" placeholder="Type your e-mail">
    <input type="text" name="age" id="age" placeholder="Type your age">
</form>
    
<?php
    if (strlen($name) > 3){
        echo $name;
    };   
    if (str_contains($mail, "." . "@")): bool{
        echo $mail;
    };
    if (gettype($age)): integer{

    } 
?>