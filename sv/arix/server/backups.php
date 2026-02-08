<?php

return[
    'backups' => 'Säkerhetskopieringar',
    'manage-backups' => 'Hantera säkerhetskopior',
    'create-backup' => 'Skapa säkerhetskopia',
    'have-been-allocated' => '{{current}} av {{max}} säkerhetskopior har skapats för den här servern.',

    'name' => 'Namn',
    'size' => 'Storlek',
    'creation-date' => 'Skapelsedatum',
    'checksum' => 'Kontrollsumma',

    'failed' => 'Misslyckades',
    'continue' => 'Fortsätt',

    'download' => 'Ladda ner',
    'restore' => 'Återställ',
    'lock' => 'Lås',
    'unlock' => 'Lås upp',
    'delete' => 'Radera',

    'limit-is-0' => 'Det går inte att skapa säkerhetskopior för den här servern eftersom säkerhetskopieringsgränsen är inställd på 0.',
    'try-going-back' => 'Det verkar som om vi har slut på säkerhetskopior för att visa dig, försök gå tillbaka en sida.',
    'no-backups' => 'Det värkar inte finnas några säkerhetskopior på den här servern just nu.',
    'no-longer-protected' => 'Denna säkerhetskopia kommer inte längre att skyddas från automatiska eller oavsiktliga raderingar.',
    'your-server-will-be-stopped' => 'Din server kommer att stoppas. Du kommer inte att kunna styra, komma åt filhanteraren eller skapa ytterligare säkerhetskopior förrän den är klar.',
    'delete-all-files' => 'Ta bort alla filer innan du återställer säkerhetskopian.',
    'permanent-operation' => 'Detta är en permanent operation. Säkerhetskopieringen kan inte återställas när den väl har tagits bort.',

    'create' => [
        'title' => 'Skapa server säkerhetskopia',
        'backup-name' => 'Säkerhetskopia Namn',
        'backup-name-description' => 'Om det anges, namnet som ska användas för att referera till denna säkerhetskopia.',
        'ignored-files-directories' => 'Ignorerade filer & mappar',
        'ignored-files-directories-description' => ' Ange filerna eller mapparna som ska ignoreras när du skapar denna säkerhetskopia. Lämna tomt för att använda innehållet i .pteroignore-filen i roten av servermappen om det finns. Wildcard av filer och mappar stöds förutom att negera en regel genom att prefixet sökvägen med ett utropstecken.',
        'locked' => 'Låst',
        'locked-description' => 'Förhindrar att denna säkerhetskopia raderas tills den låses upp.',
        'start' => 'Starta säkerhetskopiering',
    ]
];
