<?php
class View {
    public function showForm() {
        ?>
        <html>
        <head>
            <title>Publier sur Discord</title>
        </head>
        <body>
            <h1>Publier sur Discord</h1>
            <form method="post" action="">
                <label for="message">Message:</label><br>
                <textarea id="message" name="message" rows="4" cols="50"></textarea><br>
                <label for="webhook">Webhook URL:</label><br>
                <input type="text" id="webhook" name="webhook"><br>
                <input type="submit" value="Envoyer">
            </form>
        </body>
        </html>
        <?php
    }

    public function showSuccessMessage() {
        echo "Message envoyé avec succès à Discord!";
    }

    public function showErrorMessage() {
        echo "Erreur lors de l'envoi du message à Discord.";
    }
}
?>
