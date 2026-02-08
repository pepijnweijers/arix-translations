<?php

return[
    'backups' => 'Backups',
    'manage-backups' => 'Backups verwalten',
    'create-backup' => 'Backup erstellen',
    'have-been-allocated' => 'Für diesen Server wurden {{current}} von {{max}} Backups erstellt.',

    'name' => 'Name',
    'size' => 'Größe',
    'creation-date' => 'Erstellungsdatum',
    'checksum' => 'Prüfsumme',

    'failed' => 'Fehlgeschlagen',
    'continue' => 'weiter',

    'download' => 'herunterladen',
    'restore' => 'wiederherstellen',
    'lock' => 'sperren',
    'unlock' => 'freischalten',
    'delete' => 'löschen',

    'limit-is-0' => 'Für diesen Server können keine Backups erstellt werden, da das Backup-Limit auf 0 gesetzt ist.',
    'try-going-back' => 'Sieht so aus, als hätten wir keine Backups mehr, die wir dir zeigen können. Geh eine Seite zurück.',
    'no-backups' => 'Es sieht so aus, als ob für diesen Server derzeit keine Backups gespeichert sind.',
    'no-longer-protected' => 'Dieses Backup ist nicht mehr vor automatisierten oder versehentlichen Löschungen geschützt.',
    'your-server-will-be-stopped' => 'Dein Server wird angehalten. Bis zum Abschluss des Vorgangs kannst du den Energiestatus nicht kontrollieren, nicht auf den Dateimanager zugreifen und keine weiteren Backups erstellen.',
    'delete-all-files' => 'Lösche alle Dateien, bevor du das Backup wiederherstellst.',
    'permanent-operation' => 'Dies ist ein dauerhafter Vorgang. Das gelöschte Backup kann nicht wiederhergestellt werden.',

    'create' => [
        'title' => 'Server-Backup erstellen',
        'backup-name' => 'Name des Backups',
        'backup-name-description' => 'Falls angegeben, der Name, der als Referenz für dieses Backup verwendet werden soll.',
        'ignored-files-directories' => 'Ignorierte Dateien & Verzeichnisse',
        'ignored-files-directories-description' => 'Gib die Dateien oder Ordner ein, die bei der Erstellung dieses Backups ignoriert werden sollen. Lass das Feld leer, um den Inhalt der Datei .pteroignore im Stammverzeichnis des Servers zu verwenden, falls vorhanden. Neben der Negierung einer Regel durch das Voranstellen eines Ausrufezeichens vor den Pfad werden auch Platzhalter für Dateien und Verzeichnisse unterstützt.',
        'locked' => 'gesperrt',
        'locked-description' => 'Verhindert, dass dieses Backup gelöscht wird, bis sie explizit entsperrt wird.',
        'start' => 'Backup starten',
    ]
];