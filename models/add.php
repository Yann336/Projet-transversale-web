<?php

include('dbConnect.php');
$error='';

if (!empty($_POST)) {

    if ($_POST['password'] !== $_POST['confirm_password']) {
    $error = "Les mots de passe ne correspondent pas.";
    } 
    else {


        $sql = "SELECT Email FROM Customers WHERE Email = :email";
        $query = $db->prepare($sql);
        $query->execute([':email' => $_POST['Email']]);
        $emailExist = $query->fetch();

        if ($emailExist) {
            $error = 'Email déjà utilisé';
        }

        else {

            $hashedPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);

            $sql = "INSERT INTO Customers(Name, Lastname, Email, Street, City, Country, PostCode, NumberPhone, password) VALUES(:Name, :Lastname, :Email, :Street, :City, :Country, :PostCode, :NumberPhone, :password)";
            $query = $db->prepare($sql);
            $query->execute([
                ':Name'=> $_POST['Name'],
                ':Lastname'=> $_POST['Lastname'],
                ':Email'=> $_POST['Email'],
                ':Street'=> $_POST['Street'],
                ':City'=> $_POST['City'],
                ':Country'=> $_POST['Country'],
                ':PostCode'=> $_POST['PostCode'],
                ':NumberPhone'=> $_POST['NumberPhone'],
                ':password'=> $hashedPassword
            ]);
            header('Location: index.php?page=connection');
}}}