<?php


class MainController
{
    // Méthode chargée de gérer la page 404
    public function pageNotFound()
    {
        // Pour avoir une "vraie" page 404, il faut que la réponse http
        // retourne un code 404 (au lieu du code 200 OK)
        header("HTTP/1.1 404 Not Found");
        $this->show('404');
    }

    // Méthode chargée de gérer la page d'accueil
    public function homeAction()
    {


        // Délègue l'affichage à la méthode "show" du MainController
        $this->show('home');
    }


    public function testAction()
    {

        //j'instancie langauge je récupère un objet
       // $languageObject = new Language();
        //$languageObject->findAll();


        $languageObject = new Language();
$language3 = $languageObject->find(3);


        dump($language3->getName());
    }

    public function legalMentionsAction()
    {


        // Délègue l'affichage à la méthode "show" du MainController
        $this->show('legal-mentions');
    }



    //Méthode show qui gère l'inclusion des templates et génère le html de la page
    private function show($viewName, $viewData = [])

    {

        $absoluteURL = $_SERVER['BASE_URI'];

        require_once __DIR__ . '/../views/header.tpl.php';
        require_once __DIR__ . '/../views/' . $viewName . '.tpl.php';
        require_once __DIR__ . '/../views/footer.tpl.php';
    }
}
