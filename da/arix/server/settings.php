<?php

return [
    'settings' => 'Indstillinger',

    'sftp' => [
        'title' => 'SFTP-detaljer',
        'server-address' => 'Serveradresse',
        'username' => 'Brugernavn',
        'description' => 'Dit SFTP-adgangskode er det samme som adgangskoden, du bruger til at få adgang til dette panel.',
        'launch-sftp' => 'Start SFTP',
    ],

    'rename' => [
        'title' => 'Ændre serverdetaljer',
        'server-name' => 'Servernavn',
        'server-description' => 'Serverbeskrivelse',
        'save' => 'Gem',
    ],

    'debug' => [
        'title' => 'Debug-information',
        'node' => 'Node',
        'server-id' => 'Server ID',
    ],

    'reinstall' => [
        'title' => 'Geninstaller server',
        'reinstall-started' => 'Din server har påbegyndt geninstallationsprocessen.',
        'confirm-reinstallation' => 'Bekræft geninstallation af serveren',
        'yes-reinstall' => 'Ja, geninstaller serveren',
        'are-you-sure' => 'Din server vil blive stoppet, og nogle filer kan blive slettet eller ændret under denne proces. Er du sikker på, at du ønsker at fortsætte?',
        'desc-1' => 'Geninstallation af din server vil stoppe den og køre derefter installationskriptet igen, der oprindeligt opsatte den.',
        'desc-2' => 'Nogle filer kan blive slettet eller ændret under denne proces, så sørg for at lave en sikkerhedskopi af dine data, før du fortsætter.',
        'reinstall-server' => 'Geninstaller Server',
    ],
];