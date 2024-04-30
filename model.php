<?php
class Model {
    public function sendMessageToDiscord($message, $webhookURL) {
        // Vous pouvez implémenter ici la logique pour envoyer le message à Discord
        // Utilisez des bibliothèques telles que cURL ou Guzzle pour envoyer des requêtes HTTP
        // Voici un exemple simplifié :
        
        // $data = array('content' => $message);
        // $ch = curl_init($webhookURL);
        // curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        // curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // $response = curl_exec($ch);
        // $statusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        // curl_close($ch);
        
        // if ($statusCode == 200) {
        //     return true;
        // } else {
        //     return false;
        // }
        
        // Dans cet exemple simplifié, on suppose que la requête est toujours réussie
        return true;
    }
}
?>
