<?php

return[
    'backups' => 'Backup-uri',
    'manage-backups' => 'Administreaza Backup-uri',
    'create-backup' => 'Creaza backup',
    'have-been-allocated' => '{{current}} din {{max}} backup-uri au fost create pentru acest server.',

    'name' => 'Nume',
    'size' => 'Marime',
    'creation-date' => 'Data Crearii',
    'checksum' => 'Checksum',

    'failed' => 'A esuat',
    'continue' => 'Continua',

    'download' => 'Descarcare',
    'restore' => 'Restabilire',
    'lock' => 'Blocat',
    'unlock' => 'Deblocat',
    'delete' => 'Sterge',

    'limit-is-0' => 'Nu pot fi create copii de rezerva pentru acest server, deoarece limita de rezerva este setata la 0.',
    'try-going-back' => 'Se pare ca am ramas fara copii de rezerva pentru a va arata, incercati sa reveniti la aceasta pagina curand.',
    'no-backups' => 'Se pare ca nu exista copii de rezerva pentru acest server.',
    'no-longer-protected' => 'Aceasta copie de rezerva nu va mai fi protejata de stergeri automate sau accidentale.',
    'your-server-will-be-stopped' => 'Server-ul tau va fi oprit. Nu veti putea controla starea de alimentare, sa accesati fisierele sau sa creati copii de rezerva pana la finalizare.',
    'delete-all-files' => 'Sterge toate fisierele inainte de a restabili o copie de rezerva.',
    'permanent-operation' => 'Aceasta operatiune este permanenta. Copia de rezerva nu poate fi recuperata o data stearsa.',

    'create' => [
        'title' => 'Creaza o copie de rezerva',
        'backup-name' => 'Numele copiei de rezerva',
        'backup-name-description' => 'Daca este furnizat, numele copiei de rezerva ar trebui sa fie afisata.',
        'ignored-files-directories' => 'Fisiere si Directoare Ignorate',
        'ignored-files-directories-description' => ' Introduceti fisierele sau folderele ignorate in timp ce generati aceasta copie de rezerva. Lasati necompletat pentru a utiliza continutul fisierului .pteroignore in radacina directorului server-ului, daca este prezent. Potrivirea wildcard a fisierelor si folderelor este acceptata in plus fata de anularea unei reguli prin prefixarea caii cu un semn de exclamare.',
        'locked' => 'Blocat',
        'locked-description' => 'Impiedica aceasta copie de rezerva sa fie stearsa pana cand este deblocata in mod explicit.',
        'start' => 'Se porneste copia de rezerva',
    ]
];
