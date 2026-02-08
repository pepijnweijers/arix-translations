<?php

return[
    'backups' => 'Sikkerhedskopier',
    'manage-backups' => 'Administrer sikkerhedskopier',
    'create-backup' => 'Opret backup',
    'have-been-allocated' => '{{current}} ud af {{max}} backups er oprettet for denne server.',

    'name' => 'Navn',
    'size' => 'Størrelse',
    'creation-date' => 'Creation date',
    'checksum' => 'Kontrolsum',

    'failed' => 'Mislykkedes',
    'continue' => 'Forsæt',

    'download' => 'Hent',
    'restore' => 'Gendan',
    'lock' => 'Lås',
    'unlock' => 'Lås op',
    'delete' => 'Slet',

    'limit-is-0' => 'Der kan ikke oprettes sikkerhedskopier for denne server, da grænsen for sikkerhedskopier er sat til 0.',
    'try-going-back' => 'Det ser ud til, at vi er løbet tør for sikkerhedskopier at vise dig. Prøv at gå tilbage en side.',
    'no-backups' => 'Det ser ud til, at der i øjeblikket ikke er gemt nogen sikkerhedskopier for denne server.',
    'no-longer-protected' => 'Denne sikkerhedskopi vil ikke længere være beskyttet mod automatiske eller utilsigtede sletninger.',
    'your-server-will-be-stopped' => 'Din server vil blive stoppet. Du vil ikke kunne styre strømtilstanden, få adgang til filhåndteringen eller oprette yderligere sikkerhedskopier, indtil det er fuldført.',
    'delete-all-files' => 'Slet alle filer, inden du gendanner sikkerhedskopien.',
    'permanent-operation' => 'Dette er en permanent handling. Sikkerhedskopien kan ikke gendannes, når den først er slettet.',

    'create' => [
        'title' => 'Opret server sikkerhedskopi',
        'backup-name' => 'Sikkerhedskopinavn',
        'backup-name-description' => 'Hvis angivet, er dette navnet, der skal bruges til at henvise til denne sikkerhedskopi.',
        'ignored-files-directories' => 'Ignorerede filer og mapper',
        'ignored-files-directories-description' => 'Indtast filerne eller mapperne, der skal ignoreres under generering af denne sikkerhedskopi. Lad være blank for at bruge indholdet af filen .pteroignore i roden af servermappen, hvis den er til stede. Wildcard-matchning af filer og mapper understøttes også, udover at negere en regel ved at præfiksere stien med et udråbstegn.',
        'locked' => 'Låst',
        'locked-description' => 'Forhindrer, at denne sikkerhedskopi bliver slettet, indtil den er låst op eksplicit.',
        'start' => 'Start sikkerhedskopi',
    ]
];
