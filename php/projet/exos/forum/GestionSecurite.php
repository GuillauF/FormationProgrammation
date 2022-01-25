<?php

class GestionSecurite
{

    public function __construct()
    {

    }

    public function connexionForum(PDO $connexionBDD, Request $request)
    {
        try {
                $login = $request->getPost('login');// $login = $_POST['login'];
                $password = $request->getPost('password');// $password = $_POST['password'];
                $valider = $request->getPost('valider');

                $pass_hash = '';

                if($login && $password && $valider) {

                    $query = 'SELECT * FROM user where login= :login';
                    $prepare = $connexionBDD->prepare($query);
                    $prepare->execute([
                        ':login' => $login]);
                    if($prepare->rowCount()) {
                        $_SESSION['user'] = $login;
                    }
                    // puis on execute sa requete
                    while ($tab = $prepare->fetch(PDO::FETCH_ASSOC)) { // tant qu'on récupère l'enregistrement d'un utilisateur, on boucle
                        $pass_hash = $tab['password'];
                    }
                    if (password_verify($password, $pass_hash)) {
                        redirection('espacemembre.php');
                        return "Bienvenue $login, Vous êtes connecté ! ";
                        } else {
                            return "Mauvais login ou mot de passe! ";
                        }
                    }
            }
        catch (PDOException $exception) {
            if ('dev' === APP_ENV) {
                var_dump($exception->getMessage());
            } else {
                die("L'enregistrement n'a pas pu s'effectuer<br>Veuillez contacter votre administrateur");
            }
        }

    }

    public function deconnexion()
        {
            session_unset();
            session_destroy();
            redirection('index.php');
        }

    public function dataUpdate(PDO $connexionBDD, Request $request)
    {
        try {
            $nom = $request->getPost('nom');// $login = $_POST['login'];
            $prenom = $request->getPost('prenom');// $password = $_POST['password'];
            $login = $request->getPost('login');
            $password = $request->getPost('password');
            $envoyer = $request->getPost('envoyer');

            if ($nom && $prenom && $login && $password && $envoyer) {
                if ($_SESSION['user'] = $login) {
                    $password = password_hash($password, PASSWORD_DEFAULT);

                    $query = 'UPDATE user SET nom= :nom, prenom= :prenom, password = :password WHERE login= :login';
                    //UPDATE user SET `nom`= "Baba", `prenom`= "Aliexpress" WHERE `login`= "Etles"
                    $prepare = $connexionBDD->prepare($query);
                    $prepare->execute([
                        ':nom' => $nom,
                        ':prenom' => $prenom,
                        ':login' => $login,
                        ':password' => $password
                    ]);
                    // puis on execute sa requete
                    $prepare->fetch(PDO::FETCH_ASSOC); // tant qu'on récupère l'enregistrement d'un utilisateur, on boucle
                    return "Vos données ont bien été modifiées";
                }
                else {
                    return "Vous ne pouvez pas changer les données d'un autre utilisateur !";
                }
            }
        }
        catch (PDOException $exception) {
            if ('dev' === APP_ENV) {
                var_dump($exception->getMessage());
            } else {
                die("L'enregistrement n'a pas pu s'effectuer<br>Veuillez contacter votre administrateur");
            }
        }

    }
}