<?php

return[
    'backups' => 'Back-ups',
    'manage-backups' => 'Back-ups beheren',
    'create-backup' => 'Back-up aanmaken',
    'have-been-allocated' => '{{current}} van de {{max}} back-ups zijn aangemaakt voor deze server.',

    'name' => 'Naam',
    'size' => 'Grootte',
    'creation-date' => 'Aanmaakdatum',
    'checksum' => 'Controlesom',

    'failed' => 'Mislukt',
    'continue' => 'Doorgaan',

    'download' => 'Downloaden',
    'restore' => 'Terugzetten',
    'lock' => 'Vergrendelen',
    'unlock' => 'Ontgrendelen',
    'delete' => 'Verwijderen',

    'limit-is-0' => 'Er kunnen geen back-ups worden aangemaakt voor deze server omdat de back-uplimiet is ingesteld op 0.',
    'try-going-back' => 'Het lijkt erop dat we geen back-ups meer hebben om u te laten zien. Ga een pagina terug.',
    'no-backups' => 'Het lijkt erop dat er momenteel geen back-ups zijn opgeslagen voor deze server.',
    'no-longer-protected' => 'Deze back-up wordt niet meer beschermd tegen geautomatiseerde of accidentele verwijderingen.',
    'your-server-will-be-stopped' => 'Uw server wordt gestopt. U kunt de energiestatus niet beheren, de bestandsbeheerder niet openen en geen extra back-ups aanmaken totdat het proces is voltooid.',
    'delete-all-files' => 'Alle bestanden verwijderen voordat de back-up wordt teruggezet.',
    'permanent-operation' => 'Dit is een permanente bewerking. De back-up kan niet worden hersteld nadat deze is verwijderd.',

    'create' => [
        'title' => 'Serverback-up aanmaken',
        'backup-name' => 'Back-upnaam',
        'backup-name-description' => 'Indien opgegeven, de naam die moet worden gebruikt om naar deze back-up te verwijzen.',
        'ignored-files-directories' => 'Genegeerde bestanden en mappen',
        'ignored-files-directories-description' => ' Voer de te negeren bestanden of mappen in bij het genereren van deze back-up. Laat leeg om de inhoud van het .pteroignore bestand in de hoofdmap van de servermap te gebruiken, indien aanwezig. Jokertekens voor bestanden en mappen worden ondersteund, evenals het negeren van een regel door het pad te voorzien van een uitroepteken.',
        'locked' => 'Vergrendeld',
        'locked-description' => 'Voorkomt dat deze back-up wordt verwijderd totdat deze expliciet is ontgrendeld.',
        'start' => 'Back-up starten',
    ]
];