<?php

class GestionUtilisateur
{
    private $connexionBDD;

    public function __construct($connexionBDD)
    {
        $this->connexionBDD = $connexionBDD;
    }

    /**
     * methode inscription pour enregitrer chaque utilisateur dans la base de données
     *
     * @param $nom
     * @param $prenom
     * @param $login
     * @param $password
     * @return string|void
     */
    public function inscription(Request $request)
    {
        try {
            $nom = $request->getPost('nom'); // $nom = $_POST['nom'];
            $prenom = $request->getPost('prenom');// $prenom = $_POST['prenom'];
            $login = $request->getPost('login');// $login = $_POST['login'];
            $password = $request->getPost('password');// $password = $_POST['password'];
            $password2 = $request->getPost('password2');// $password = $_POST['password'];

            if($nom && $prenom && $login && $password && $password2) {
                if ($password == $password2) {
                    $password = password_hash($password, PASSWORD_DEFAULT);

                    $query = "insert into user 
                            (nom, prenom, login, password, roles_id, date_inscription)
                          values
                            (:nom, :prenom, :login, :password, 1, now())";

                    $prepare = $this->connexionBDD->prepare($query);
                    $prepare->execute([
                        'nom' => $nom,
                        'prenom' => $prenom,
                        'login' => $login,
                        'password' => $password
                    ]); // puis on execute sa requête

                    //$_SESSION['prenom'] = $prenom;
                    //$request->setSession('prenom', $prenom);

                    return "Bienvenue $prenom, Vous êtes bien enregistré <br>";
                }
                else{
                    return "Les mots de passes ne sont pas identiques! Veuillez saisir les données à nouveau <br>";
                }
            }
        } catch (PDOException $exception) {
            if('dev' === APP_ENV) {
                //var_dump($exception->getMessage());
                return "Le login est déjà existant! <br>";
            } else {
                if($exception->getCode() == 23000) {
                    die("Le login est déjà existant, veuillez en choisir un autre");
                } else {
                    die("L'enregistrement n'a pas pu s'effectuer<br>Veuillez contacter votre administrateur");
                }

            }
        }

        return '';
    }

    public function find()
    {
        try { // on essaye et si il y a un problème alors on affiche un message d'erreur adapté
            $prepare = $this->connexionBDD->prepare('select * from user order by date_inscription desc limit 10');
            $prepare->execute();
            $html = '';

            while ($result = $prepare->fetch()) { // tant qu'il y a un enregistrement alors on boucle
                $html .= "id: {$result['id']}, login: {$result['login']}, password: {$result['password']}, prenom: {$result['prenom']}, nom: {$result['nom']}<br>";
            }

            return $html;
        } catch (PDOException $e) {
            if ('dev' === APP_ENV) {
                var_dump($e);
                die();
            } else {
                die("La lecture de la base de donnée ne marche pas<br>Veuillez contacter votre administrateur");
            }
        }
    }
    public function findUser()
    {
        try { // on essaye et si il y a un problème alors on affiche un message d'erreur adapté
            $prepare = $this->connexionBDD->prepare('select * from user where id = 20');
            $prepare->execute();
            $resultat = '';

            $result = $prepare->fetch();  // tant qu'il y a un enregistrement alors on boucle
            $resultat .= "id: {$result['id']}, login: {$result['login']}, password: {$result['password']}, prenom: {$result['prenom']}, nom: {$result['nom']}<br>";

            return $resultat;
        } catch (PDOException $e) {
            if ('dev' === APP_ENV) {
                var_dump($e);
                die();
            } else {
                die("La lecture de la base de donnée ne marche pas<br>Veuillez contacter votre administrateur");
            }
        }
    }
}