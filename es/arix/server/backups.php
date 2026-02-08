<?php

return [
    'backups' => 'Copias de seguridad',
    'manage-backups' => 'Administrar copias de seguridad',
    'create-backup' => 'Crear copia de seguridad',
    'have-been-allocated' => '{{current}} de {{max}} copias de seguridad han sido creadas para este servidor.',

    'name' => 'Nombre',
    'size' => 'Tamaño',
    'creation-date' => 'Fecha de creación',
    'checksum' => 'Checksum',

    'failed' => 'Fallido',
    'continue' => 'Continuar',

    'download' => 'Descargar',
    'restore' => 'Restaurar',
    'lock' => 'Bloquear',
    'unlock' => 'Desbloquear',
    'delete' => 'Eliminar',

    'limit-is-0' => 'No se pueden crear copias de seguridad para este servidor porque el límite de copias de seguridad está establecido en 0.',
    'try-going-back' => 'Parece que se nos acabaron las copias de seguridad para mostrar, intenta retroceder una página.',
    'no-backups' => 'Parece que actualmente no hay copias de seguridad almacenadas para este servidor.',
    'no-longer-protected' => 'Esta copia de seguridad ya no estará protegida contra eliminaciones automáticas o accidentales.',
    'your-server-will-be-stopped' => 'Tu servidor se detendrá. No podrás controlar el estado de encendido, acceder al administrador de archivos ni crear copias de seguridad adicionales hasta que se complete.',
    'delete-all-files' => 'Eliminar todos los archivos antes de restaurar la copia de seguridad.',
    'permanent-operation' => 'Esta es una operación permanente. La copia de seguridad no se puede recuperar una vez eliminada.',

    'create' => [
        'title' => 'Crear copia de seguridad del servidor',
        'backup-name' => 'Nombre de la copia de seguridad',
        'backup-name-description' => 'Si se proporciona, el nombre que se debe usar para referenciar esta copia de seguridad.',
        'ignored-files-directories' => 'Archivos y directorios ignorados',
        'ignored-files-directories-description' => 'Ingresa los archivos o carpetas a ignorar al generar esta copia de seguridad. Deja en blanco para usar el contenido del archivo .pteroignore en la raíz del directorio del servidor, si está presente. El emparejamiento de comodines de archivos y carpetas es compatible, además de negar una regla anteponiendo el camino con un signo de exclamación.',
        'locked' => 'Bloqueado',
        'locked-description' => 'Evita que esta copia de seguridad sea eliminada hasta que se desbloquee explícitamente.',
        'start' => 'Iniciar copia de seguridad',
    ]
];
