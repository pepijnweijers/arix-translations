<?php

return [
    'backups' => 'Kopie zapasowe',
    'manage-backups' => 'Zarządzaj kopiami zapasowymi',
    'create-backup' => 'Utwórz kopię zapasową',
    'have-been-allocated' => 'Utworzono {{current}} z maksymalnie możliwych {{max}} kopii zapasowych dla tego serwera.',

    'name' => 'Nazwa',
    'size' => 'Rozmiar',
    'creation-date' => 'Data utworzenia',
    'checksum' => 'Suma kontrolna',

    'failed' => 'Nieudane',
    'continue' => 'Kontynuuj',

    'download' => 'Pobierz',
    'restore' => 'Przywróć',
    'lock' => 'Zablokuj',
    'unlock' => 'Odblokuj',
    'delete' => 'Usuń',

    'limit-is-0' => 'Nie można tworzyć kopii zapasowych dla tego serwera, ponieważ limit kopii zapasowych wynosi 0.',
    'try-going-back' => 'Wygląda na to, że skończyły się kopie zapasowe do wyświetlenia, spróbuj wrócić na poprzednią stronę.',
    'no-backups' => 'Wygląda na to, że obecnie nie ma przechowywanych kopii zapasowych dla tego serwera.',
    'no-longer-protected' => 'Ta kopia zapasowa nie będzie już chroniona przed automatycznym lub przypadkowym usunięciem.',
    'your-server-will-be-stopped' => 'Twój serwer zostanie zatrzymany. Nie będzie możliwości kontrolowania stanu zasilania, dostępu do menedżera plików ani tworzenia dodatkowych kopii zapasowych do czasu zakończenia operacji.',
    'delete-all-files' => 'Usuń wszystkie pliki przed przywróceniem kopii zapasowej.',
    'permanent-operation' => 'To jest trwała operacja. Kopia zapasowa nie będzie mogła zostać odzyskana po jej usunięciu.',

    'create' => [
        'title' => 'Utwórz kopię zapasową serwera',
        'backup-name' => 'Nazwa kopii zapasowej',
        'backup-name-description' => 'Opcjonalnie, nazwa używana do identyfikacji tej kopii zapasowej.',
        'ignored-files-directories' => 'Ignorowane pliki i katalogi',
        'ignored-files-directories-description' => 'Wprowadź pliki lub foldery, które mają zostać zignorowane podczas tworzenia tej kopii zapasowej. Pozostaw puste, aby użyć zawartości pliku .pteroignore w głównym katalogu serwera, jeśli istnieje. Możliwe jest również stosowanie dopasowań wzorców oraz negowanie reguł poprzez poprzedzenie ścieżki wykrzyknikiem.',
        'locked' => 'Zablokowana',
        'locked-description' => 'Zabezpiecza kopię zapasową przed usunięciem do czasu jej odblokowania.',
        'start' => 'Rozpocznij tworzenie kopii zapasowej',
    ]
];
