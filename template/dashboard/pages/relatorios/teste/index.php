<?php

require_once 'GoogleDriveAuthentication.php'; // Substitua pelo caminho correto para o arquivo que contém a classe de autenticação.
require_once 'vendor/autoload.php';

// Caminho para o arquivo JSON de credenciais que você baixou anteriormente.
$credentialsPath = 'client_secret_316697110984-aum9tepviu85lhd9vf67dlcgr9amkr1m.apps.googleusercontent.com.json';

// Caminho para onde você deseja salvar o token de acesso.
$tokenPath = 'caminho/para/seu/token.json';

// Escopos da API do Google Drive.
$scopes = [Google_Service_Drive::DRIVE];

// Crie uma instância da classe de autenticação.
$auth = new GoogleDriveAuthentication($credentialsPath, $tokenPath, $scopes);

// Autentique-se usando o método authenticate().
$auth->authenticate();

// Obtenha o cliente autenticado da classe de autenticação.
$client = $auth->getClient();

// Verifique se o cliente está autenticado.
if ($client->isAccessTokenExpired()) {
    die('Erro na autenticação. Certifique-se de que a autenticação foi realizada corretamente.');
}

// Crie um serviço do Google Drive.
$driveService = new Google_Service_Drive($client);

// Diretório local dos arquivos PDF que você deseja enviar.
$localDirectory = 'caminho/para/sua/pasta/local';

// Lista de arquivos na pasta local.
$files = scandir($localDirectory);

// Loop para enviar todos os arquivos PDF para o Google Drive.
foreach ($files as $file) {
    if ($file != '.' && $file != '..') {
        $filePath = $localDirectory . '/' . $file;
        
        // Verifique se o arquivo é um PDF.
        if (pathinfo($filePath, PATHINFO_EXTENSION) === 'pdf') {
            // Configuração do arquivo.
            $driveFile = new Google_Service_Drive_DriveFile([
                'name' => $file, // Nome desejado no Google Drive.
            ]);

            // Upload do arquivo PDF.
            $createdFile = $driveService->files->create($driveFile, [
                'data' => file_get_contents($filePath),
                'mimeType' => 'application/pdf',
            ]);

            // Verifique a resposta.
            if ($createdFile) {
                echo 'Arquivo "' . $file . '" enviado com sucesso!<br>';
            } else {
                echo 'Erro ao enviar o arquivo "' . $file . '".<br>';
            }
        }
    }
}
