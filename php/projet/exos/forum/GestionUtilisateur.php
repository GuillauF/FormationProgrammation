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
    public function inscription($nom, $prenom, $login, $password)
    {
        try {

            $query = "insert into user 
                (nom, prenom, login, password, roles_id, date_inscription)
              values
                ('{$nom}', '{$prenom}', '{$login}', '{$password}', 1, now())";

            $prepare = $this->connexionBDD->prepare($query);
            $prepare->execute(); // puis on execute sa requete
            return "Vos données ont bien été enregistrées ". '<br>';
        } catch (PDOException $exception) {
            if ('dev' === APP_ENV) {
                var_dump($exception);
                die($query);
            } else {
                die("L'enregistrement n'a pas pu s'effectuer<br>Veuillez contacter votre administrateur");
            }
        }

    }

    public function find()
    {
        try { // on essaye et si il y a un problème alors on affiche un message d'erreur adapté
            $prepare = $this->connexionBDD->prepare('select * from user order by date_inscription desc limit 10');
            $prepare->execute();
        } catch (PDOException $e) {
            if ('dev' === APP_ENV) {
                var_dump($e);
                die();
            } else {
                die("La lecture de la base de donnée ne marche pas<br>Veuillez contacter votre administrateur");
            }
        }

        $html = '';

        while ($result = $prepare->fetch()) { // tant qu'il y a un enregistrement alors on boucle
            $html .= "id: {$result['id']}, login: {$result['login']}, password: {$result['password']}, prenom: {$result['prenom']}, nom: {$result['nom']}<br>";
        }

        return $html;
    }
    public function findUser()
    {
        try { // on essaye et si il y a un problème alors on affiche un message d'erreur adapté
            $prepare = $this->connexionBDD->prepare('select * from user where id = 20');
            $prepare->execute();
        } catch (PDOException $e) {
            if ('dev' === APP_ENV) {
                var_dump($exception);
                die();
            } else {
                die("La lecture de la base de donnée ne marche pas<br>Veuillez contacter votre administrateur");
            }
        }
        $resultat = '';

        $result = $prepare->fetch();  // tant qu'il y a un enregistrement alors on boucle
        $resultat .= "id: {$result['id']}, login: {$result['login']}, password: {$result['password']}, prenom: {$result['prenom']}, nom: {$result['nom']}<br>";

        return $resultat;
    }


    public function connexionForum($login, $password)
    {
        try {
            $query = 'SELECT count(*) FROM utilisateur where login= '.$login.' AND password= '.$password.';';
            $prepare = $this->connexionBDD->prepare($query);
            $prepare->execute(); // puis on execute sa requete

        } catch (PDOException $exception) {
            if ('dev' === APP_ENV) {
                var_dump($exception);
                die($query);
            } else {
                die("L'enregistrement n'a pas pu s'effectuer<br>Veuillez contacter votre administrateur");
            }
        }

    }
}