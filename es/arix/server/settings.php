<?php

return [
    'settings' => 'Configuración',

    'sftp' => [
        'title' => 'Detalles de SFTP',
        'server-address' => 'Dirección del servidor',
        'username' => 'Nombre de usuario',
        'description' => 'Tu contraseña de SFTP es la misma que la contraseña que usas para acceder a este panel.',
        'launch-sftp' => 'Iniciar SFTP',
    ],

    'rename' => [
        'title' => 'Cambiar detalles del servidor',
        'server-name' => 'Nombre del servidor',
        'server-description' => 'Descripción del servidor',
        'save' => 'Guardar',
    ],

    'debug' => [
        'title' => 'Información de depuración',
        'node' => 'Nodo',
        'server-id' => 'ID del servidor',
    ],

    'reinstall' => [
        'title' => 'Reinstalar servidor',
        'reinstall-started' => 'Tu servidor ha comenzado el proceso de reinstalación.',
        'confirm-reinstallation' => 'Confirmar reinstalación del servidor',
        'yes-reinstall' => 'Sí, reinstalar el servidor',
        'are-you-sure' => 'Tu servidor se detendrá y algunos archivos pueden ser eliminados o modificados durante este proceso. ¿Estás seguro de que deseas continuar?',
        'desc-1' => 'Reinstalar tu servidor lo detendrá y luego volverá a ejecutar el script de instalación que lo configuró inicialmente.',
        'desc-2' => 'Algunos archivos pueden ser eliminados o modificados durante este proceso, por favor haz una copia de seguridad de tus datos antes de continuar.',
        'reinstall-server' => 'Reinstalar servidor',
    ],
];
