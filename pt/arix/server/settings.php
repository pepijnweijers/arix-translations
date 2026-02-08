<?php

return [
    'settings' => 'Configurações',

    'sftp' => [
        'title' => 'Detalhes do SFTP',
        'server-address' => 'Endereço do Servidor',
        'username' => 'Nome de Usuário',
        'description' => 'Sua senha SFTP é a mesma que você usa para acessar este painel.',
        'launch-sftp' => 'Iniciar SFTP',
    ],

    'rename' => [
        'title' => 'Alterar Detalhes do Servidor',
        'server-name' => 'Nome do Servidor',
        'server-description' => 'Descrição do Servidor',
        'save' => 'Salvar',
    ],

    'debug' => [
        'title' => 'Informações de Depuração',
        'node' => 'Nó',
        'server-id' => 'ID do Servidor',
    ],

    'reinstall' => [
        'title' => 'Reinstalar Servidor',
        'reinstall-started' => 'Seu servidor iniciou o processo de reinstalação.',
        'confirm-reinstallation' => 'Confirmar reinstalação do servidor',
        'yes-reinstall' => 'Sim, reinstalar servidor',
        'are-you-sure' => 'Seu servidor será parado e alguns arquivos podem ser excluídos ou modificados durante esse processo. Tem certeza de que deseja continuar?',
        'desc-1' => 'Reinstalar o seu servidor irá pará-lo e, em seguida, executar novamente o script de instalação que o configurou inicialmente.',
        'desc-2' => 'Alguns arquivos podem ser excluídos ou modificados durante esse processo; por favor, faça backup dos seus dados antes de continuar.',
        'reinstall-server' => 'Reinstalar Servidor',
    ],
];
