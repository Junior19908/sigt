<?php

require_once 'vendor/autoload.php';

use Google\Client;

class GoogleDriveAuthentication {
    private $client;
    
    public function __construct($credentialsPath, $tokenPath, $scopes) {
        $this->client = new Client();
        $this->client->setAuthConfig($credentialsPath);
        $this->client->setAccessType('offline');
        $this->client->setRedirectUri('SUA_URL_DE_REDIRECIONAMENTO');
        $this->client->setScopes($scopes);
        $this->client->setPrompt('select_account consent');
        
        // Verifica se o token de acesso já está disponível
        if (file_exists($tokenPath)) {
            $accessToken = json_decode(file_get_contents($tokenPath), true);
            $this->client->setAccessToken($accessToken);
        }
        
        // Se não há token de acesso válido, solicita a autenticação
        if ($this->client->isAccessTokenExpired()) {
            $authUrl = $this->client->createAuthUrl();
            echo 'Autentique-se usando este link: <a href="' . $authUrl . '">Autenticar</a>';
            exit;
        }
    }
    
    public function authenticate() {
        // Se já está autenticado, não é necessário fazer nada
        if (!$this->client->isAccessTokenExpired()) {
            return;
        }
        
        // Se o código de autorização está disponível na consulta, troque-o pelo token de acesso
        if (isset($_GET['code'])) {
            $this->client->fetchAccessTokenWithAuthCode($_GET['code']);
            
            // Salve o token de acesso para futuras autenticações
            file_put_contents('client_secret_316697110984-aum9tepviu85lhd9vf67dlcgr9amkr1m.apps.googleusercontent.com.json', json_encode($this->client->getAccessToken()));
        }
    }
    
    public function getClient() {
        return $this->client;
    }
}
