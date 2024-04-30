<?php
class View {
    public function showForm($username = '', $message = '', $webhookURL = '') {
        ?>
        <h1 class="mb-4">Publier sur Discord</h1>
        <?php

        // print_r($_SESSION);

        if (isset($_SESSION['notification'])) {
            ?>
            <div class="alert alert-<?php echo stripos($_SESSION['notification'], 'succès') !== false ? 'success' : 'danger'; ?> mt-4" role="alert">
                <?php echo $_SESSION['notification']; ?>
            </div>
            <?php
            unset($_SESSION['notification']);
        }
        ?>
        <form method="post" action="">
            <div class="mb-3">
                <label for="username" class="form-label">Nom du bot (1 mot) :</label>
                <input type="text" class="form-control" id="username" name="username" value="<?php echo $_SESSION['username']; ?>">
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Message :</label>
                <textarea id="message" name="message" rows="4" class="form-control"><?php echo $_SESSION['message']; ?></textarea>
            </div>
            <div class="mb-3">
                <label for="webhook" class="form-label">Webhook (URL) :</label>
                <input type="text" id="webhook" name="webhook" class="form-control" value="<?php echo $_SESSION['webhook']; ?>">
            </div>
            <button type="submit" class="btn btn-success btn-block">Envoyer</button>
        </form>


        <br>

        <div class="mt-4">
            <h2>Comment créer des identifiants de webhook :</h2>
            <ol>
                <li>Accédez aux paramètres de votre serveur Discord.</li>
                <li>Cliquez sur "Intégrations" puis sélectionnez "Consulter les webhooks".</li>
                <li>Créez un nouveau webhook en cliquant sur "Nouveau Webhook".</li>
                <li>Définissez son nom, son image et le salon dans lequel il est censé écrire.</li>
                <li>Copiez le lien du webhook en cliquant sur "Copier l'URL du webhook".</li>
            </ol>
        </div>

        
        <?php
    }
}
?>

