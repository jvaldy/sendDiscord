<?php
class Model {
    public function sendMessageToDiscord($username, $message, $webhookURL) {
        $data = array('username' => $username, 'content' => $message);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $webhookURL);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8'));
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $response = curl_exec($ch);
        $statusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        
        // return $statusCode == 200;

        if($statusCode == 204) {
            return true;
        } else {
            return false;
        }
        
    }
}
?>
