<?php

return[
    'backups' => 'Zálohy',
    'manage-backups' => 'Spravovat zálohy',
    'create-backup' => 'Vytvořit zálohu',
    'have-been-allocated' => '{{current}} z {{max}} záloh je vytvořeno pro tento server.',

    'name' => 'Jméno',
    'size' => 'Velikost',
    'creation-date' => 'Datum vytvoření',
    'checksum' => 'Checksum',

    'failed' => 'Selhalo',
    'continue' => 'Pokračovat',

    'download' => 'Stáhnout',
    'restore' => 'Obnovit',
    'lock' => 'Zamknout',
    'unlock' => 'Odemknout',
    'delete' => 'Smazat',

    'limit-is-0' => 'Pro tento server nemohou být vytvořeny zálohy. (Limit je 0)',
    'try-going-back' => 'Vypadá to že nám došli zálohy k zobrazení. Zkuste se vrátit o stránku zpět.',
    'no-backups' => 'Vypadá to že tento server nemá žádné zálohy.',
    'no-longer-protected' => 'Tato záloha nadále nebude chráněná proti automatickému nebo nechtěnému smazání.',
    'your-server-will-be-stopped' => 'Server bude zastaven. Nebudete moci ovládat stav napájení, přístupovat k správci souborů nebo vytvářet další zálohy, dokud nebude akce dokončena.',
    'delete-all-files' => 'Smažte všechyn soubory před obnovením ze zálohy.',
    'permanent-operation' => 'Tohel je nevratná akce, záloha po smazání nepůjde obnovit.',

    'create' => [
        'title' => 'Vytvořit zálohu serveru',
        'backup-name' => 'Jméno zálohy',
        'backup-name-description' => 'Pokud zadáno, bude tímto jménem záloha označena.',
        'ignored-files-directories' => 'Ignorované soubory a složky',
        'ignored-files-directories-description' => ' Zadejte soubory nebo složky, které chcete při vytváření této zálohy ignorovat. Ponechte prázdné, chcete-li použít obsah souboru .pteroignore v root adresáři serveru, pokud je přítomen. Kromě negace pravidla tím, že se před cestu uvede vykřičník, je podporována shoda se zástupnými znaky u souborů a složek.',
        'locked' => 'Uzamčít',
        'locked-description' => 'Zabrání smazání této zálohy dokud není odemčena.',
        'start' => 'Zahájit zálohování',
    ]
];
