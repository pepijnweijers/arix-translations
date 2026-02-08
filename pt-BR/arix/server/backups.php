<?php

return [
    'backups' => 'Backups',
    'manage-backups' => 'Gerenciar backups',
    'Create-backup' => 'Criar backup',
    'have-been-allocated' => '{{current}} de {{max}} backups foram criados para este servidor.',

    'name' => 'Nome',
    'size' => 'Tamanho',
    'creation-date' => 'Data de criação',
    'checksum' => 'Checksum',

    'failed' => 'Falhou',
    'continue' => 'Continuar',

    'download' => 'Baixar',
    'restore' => 'Restaurar',
    'lock' => 'Bloquear',
    'unlock' => 'Desbloquear',
    'delete' => 'Excluir',

    'limit-is-0' => 'Não é possível criar backups para este servidor porque o limite de backups está definido como 0.',
    'try-going-back' => 'Parece que acabamos os backups para mostrar, tente voltar uma página.',
    'no-backups' => 'Parece que não há backups armazenados atualmente para este servidor.',
    'no-longer-protected' => 'Este backup não estará mais protegido contra exclusões automáticas ou acidentais.',
    'your-server-will-be-stopped' => 'Seu servidor será parado. Você não poderá controlar o estado de energia, acessar o gerenciador de arquivos ou criar backups adicionais até que seja concluído.',
    'delete-all-files' => 'Excluir todos os arquivos antes de restaurar o backup.',
    'permanent-operation' => 'Esta é uma operação permanente. O backup não poderá ser recuperado uma vez excluído.',

    'create' => [
        'title' => 'Criar backup do servidor',
        'backup-name' => 'Nome do backup',
        'backup-name-description' => 'Se fornecido, o nome que deve ser usado para referenciar este backup.',
        'ignored-files-directories' => 'Arquivos e Diretórios Ignorados',
        'ignored-files-directories-description' => 'Insira os arquivos ou pastas a serem ignorados ao gerar este backup. Deixe em branco para usar o conteúdo do arquivo .pteroignore no diretório raiz do servidor, se presente. Correspondência de curinga de arquivos e pastas é suportada além de negar uma regra prefixando o caminho com um ponto de exclamação.',
        'locked' => 'Bloqueado',
        'locked-description' => 'Impede que este backup seja excluído até ser explicitamente desbloqueado.',
        'start' => 'Iniciar backup',
    ]
];
