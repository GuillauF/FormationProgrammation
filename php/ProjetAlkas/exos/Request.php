<?php

class Request
{
    private $post;

    public function __construct(array $post)
    {
        $this->post = $post;
        session_start();
    }

    public static function enableHttpMethodParameterOverride()
    {
    }

    /**
     * Je set une variable de session
     * exemple $_SESSION[$name] = $value;
     * C'est équivalent à faire
     * $request->sessionSet($name, $value)
     *
     * @param string $name
     * @param $value
     * @return void
     */
    public function setSession(string $name, $value): void
    {
        $_SESSION[$name] = $value;
    }


    /**
     * $nom = $_POST[$nom];
     * C'est équivalent à faire
     * $nom = $request->postGet($nom)
     *
     * @param string $nom
     * @return mixed|null
     */
    public function getPost(string $nom)
    {
        if (isset($this->post[$nom])) {
            return $this->post[$nom];
        }

        return null;
    }
}