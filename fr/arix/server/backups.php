<?php

return [
    'backups' => 'Sauvegardes',
    'manage-backups' => 'Gérer les sauvegardes',
    'create-backup' => 'Créer une sauvegarde',
    'have-been-allocated' => '{{current}} sur {{max}} sauvegardes ont été créées pour ce serveur.',

    'name' => 'Nom',
    'size' => 'Taille',
    'creation-date' => 'Date de création',
    'checksum' => 'Somme de contrôle',

    'failed' => 'Échoué',
    'continue' => 'Continuer',

    'download' => 'Télécharger',
    'restore' => 'Restaurer',
    'lock' => 'Verrouiller',
    'unlock' => 'Déverrouiller',
    'delete' => 'Supprimer',

    'limit-is-0' => 'Les sauvegardes ne peuvent pas être créées pour ce serveur car la limite de sauvegardes est fixée à 0.',
    'try-going-back' => 'Il semble que nous n\'ayons plus de sauvegardes à vous montrer, essayez de revenir en arrière d\'une page.',
    'no-backups' => 'Il semble qu\'il n\'y ait actuellement aucune sauvegarde stockée pour ce serveur.',
    'no-longer-protected' => 'Cette sauvegarde ne sera plus protégée contre les suppressions automatisées ou accidentelles.',
    'your-server-will-be-stopped' => 'Votre serveur sera arrêté. Vous ne pourrez pas contrôler l\'état de l\'alimentation, accéder au gestionnaire de fichiers ou créer des sauvegardes supplémentaires jusqu\'à ce que l\'opération soit terminée.',
    'delete-all-files' => 'Supprimer tous les fichiers avant de restaurer la sauvegarde.',
    'permanent-operation' => 'Il s\'agit d\'une opération permanente. La sauvegarde ne pourra pas être récupérée une fois supprimée.',

    'create' => [
        'title' => 'Créer une sauvegarde de serveur',
        'backup-name' => 'Nom de la sauvegarde',
        'backup-name-description' => 'Si fourni, le nom qui doit être utilisé pour référencer cette sauvegarde.',
        'ignored-files-directories' => 'Fichiers et répertoires ignorés',
        'ignored-files-directories-description' => 'Saisissez les fichiers ou dossiers à ignorer lors de la génération de cette sauvegarde. Laissez vide pour utiliser le contenu du fichier .pteroignore à la racine du répertoire du serveur s\'il est présent. La correspondance par joker des fichiers et des dossiers est prise en charge en plus de la négation d\'une règle en préfixant le chemin avec un point d\'exclamation.',
        'locked' => 'Verrouillé',
        'locked-description' => 'Empêche la suppression de cette sauvegarde jusqu\'à ce qu\'elle soit explicitement déverrouillée.',
        'start' => 'Démarrer la sauvegarde',
    ]
];
