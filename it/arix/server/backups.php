<?php

return [
    'backups' => 'Backup',
    'manage-backups' => 'Gestisci i backup',
    'create-backup' => 'Crea backup',
    'have-been-allocated' => '{{current}} di {{max}} backup sono stati creati per questo server.',

    'name' => 'Nome',
    'size' => 'Dimensioni',
    'creation-date' => 'Data di creazione',
    'checksum' => 'Checksum',

    'failed' => 'Fallito',
    'continue' => 'Continua',

    'download' => 'Scarica',
    'restore' => 'Ripristina',
    'lock' => 'Blocca',
    'unlock' => 'Sblocca',
    'delete' => 'Elimina',

    'limit-is-0' => 'Non è possibile creare backup per questo server perché il limite dei backup è impostato a 0.',
    'try-going-back' => 'Sembra che siamo arrivati al limite dei backup da mostrarti, prova a tornare indietro di una pagina.',
    'no-backups' => 'Sembra che al momento non ci siano backup archiviati per questo server.',
    'no-longer-protected' => 'Questo backup non sarà più protetto da cancellazioni automatiche o accidentali.',
    'your-server-will-be-stopped' => 'Il tuo server verrà fermato. Non sarai in grado di controllare lo stato di alimentazione, accedere al file manager o creare backup aggiuntivi fino a quando l\'operazione non sarà completata.',
    'delete-all-files' => 'Elimina tutti i file prima di ripristinare il backup.',
    'permanent-operation' => 'Questa è un\'operazione permanente. Il backup non può essere ripristinato una volta eliminato.',

    'create' => [
        'title' => 'Crea backup del server',
        'backup-name' => 'Nome del backup',
        'backup-name-description' => 'Se fornito, il nome da utilizzare per fare riferimento a questo backup.',
        'ignored-files-directories' => 'File e directory ignorati',
        'ignored-files-directories-description' => 'Inserisci i file o le cartelle da ignorare durante la generazione di questo backup. Lascia vuoto per utilizzare il contenuto del file .pteroignore nella radice della directory del server, se presente. Il matching di file e cartelle tramite caratteri jolly è supportato, oltre a negare una regola aggiungendo un punto esclamativo davanti al percorso.',
        'locked' => 'Bloccato',
        'locked-description' => 'Impedisce l\'eliminazione di questo backup fino a quando non viene sbloccato esplicitamente.',
        'start' => 'Avvia backup',
    ]
];
