<?php
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
            $message = $_POST['message'];
            $webhookURL = $_POST['webhook'];

            $result = $this->model->sendMessageToDiscord($message, $webhookURL);

            if ($result) {
                $view->showSuccessMessage();
            } else {
                $view->showErrorMessage();
            }
        } else {
            $view->showForm();
        }
    }
}
?>
