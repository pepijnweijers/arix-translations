<?php

return [
    'backups' => 'Back-ups',
    'manage-backups' => 'Beheer back-ups',
    'create-backup' => 'Maak back-up',
    'have-been-allocated' => '{{current}} van de {{max}} back-ups zijn gemaakt voor deze server.',

    'name' => 'Naam',
    'size' => 'Grootte',
    'creation-date' => 'Creatiedatum',
    'checksum' => 'Checksum',

    'failed' => 'Mislukt',
    'continue' => 'Doorgaan',

    'download' => 'Downloaden',
    'restore' => 'Herstellen',
    'lock' => 'Vergrendelen',
    'unlock' => 'Ontgrendelen',
    'delete' => 'Verwijderen',

    'limit-is-0' => 'Er kunnen geen back-ups worden gemaakt voor deze server omdat de back-uplimiet is ingesteld op 0.',
    'try-going-back' => 'Het lijkt erop dat we geen back-ups meer hebben om te laten zien, probeer terug te gaan naar een vorige pagina.',
    'no-backups' => 'Het lijkt erop dat er momenteel geen back-ups zijn opgeslagen voor deze server.',
    'no-longer-protected' => 'Deze back-up wordt niet langer beschermd tegen geautomatiseerde of onbedoelde verwijderingen.',
    'your-server-will-be-stopped' => 'Uw server wordt gestopt. U zult de stroomstatus niet kunnen bedienen, geen toegang hebben tot de bestandsbeheerder, of extra back-ups kunnen maken totdat het proces is voltooid.',
    'delete-all-files' => 'Verwijder alle bestanden voordat u de back-up herstelt.',
    'permanent-operation' => 'Dit is een permanente bewerking. De back-up kan niet worden hersteld zodra deze is verwijderd.',

    'create' => [
        'title' => 'Maak back-up van server',
        'backup-name' => 'Back-upnaam',
        'backup-name-description' => 'Als dit wordt opgegeven, wordt de naam gebruikt om naar deze back-up te verwijzen.',
        'ignored-files-directories' => 'Genegeerde bestanden en mappen',
        'ignored-files-directories-description' => 'Voer de bestanden of mappen in die moeten worden genegeerd bij het genereren van deze back-up. Laat leeg om de inhoud van het .pteroignore-bestand in de hoofdmap van de server te gebruiken, indien aanwezig. Het gebruik van wildcards voor bestanden en mappen wordt ondersteund, evenals het negatief maken van een regel door het pad vooraf te laten gaan met een uitroepteken.',
        'locked' => 'Vergrendeld',
        'locked-description' => 'Voorkomt dat deze back-up wordt verwijderd totdat deze expliciet wordt ontgrendeld.',
        'start' => 'Start back-up',
    ]
];
