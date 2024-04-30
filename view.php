<?php
class View {
    public function showForm($username = '', $message = '', $webhookURL = '') {
        ?>
        <h1 class="mb-4">Publier sur Discord</h1>
        <?php
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
                <label for="username" class="form-label">Nom d'utilisateur:</label>
                <input type="text" class="form-control" id="username" name="username" value="<?php echo htmlspecialchars($username); ?>">
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Message:</label>
                <textarea id="message" name="message" rows="4" class="form-control"><?php echo htmlspecialchars($message); ?></textarea>
            </div>
            <div class="mb-3">
                <label for="webhook" class="form-label">Webhook URL:</label>
                <input type="text" id="webhook" name="webhook" class="form-control" value="<?php echo htmlspecialchars($webhookURL); ?>">
            </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
        <?php
    }
}
?>
