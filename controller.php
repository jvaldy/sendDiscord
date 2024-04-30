<?php
// session_start();
require_once 'model.php';
require_once 'view.php';

class Controller {
    private $model;

    public function __construct() {
        $this->model = new Model();
    }

    public function handleRequest() {
        $view = new View();
    
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'];
            $message = $_POST['message'];
            $webhookURL = $_POST['webhook'];

            $_SESSION['username'] = $username;
            $_SESSION['message'] = $message;
            $_SESSION['webhook'] = $webhookURL;
    
            $result = $this->model->sendMessageToDiscord($username, $message, $webhookURL);

    
            if ($result) {
                $_SESSION['notification'] = 'Message envoyé avec succès à Discord!';
            } else {
                $_SESSION['notification'] = 'Erreur lors de l\'envoi du message à Discord.';
            }
        } else {
            $_SESSION['username'] = '';
            $_SESSION['message'] = '';
            $_SESSION['webhook'] = '';
        }
    
        $view->showForm();
    }
}
?>
