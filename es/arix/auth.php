<?php

return [
    'support' => 'Centro de Soporte',

    'login' => [
        'title' => 'Iniciar sesión para continuar',
        'username-or-email' => 'Nombre de usuario o correo electrónico',
        'password' => 'Contraseña',
        'forgot-password' => '¿Olvidaste la contraseña?',
        'login' => 'Iniciar sesión',

        'must-be-provided' => 'Se debe proporcionar un nombre de usuario o correo electrónico.',
        'new-here' => '¿Nuevo aquí? Crea una cuenta.',
        'please-enter-password' => 'Por favor, ingresa la contraseña de tu cuenta.',
    ],

    'forgot' => [
        'title' => 'Solicitar restablecimiento de contraseña',
        'email' => 'Correo electrónico',
        'email-description' => 'Ingresa la dirección de correo electrónico de tu cuenta para recibir instrucciones sobre cómo restablecer tu contraseña.',
        'send-email' => 'Enviar correo electrónico',
        'return-to-login' => 'Volver a iniciar sesión',

        'a-valid-email-provided' => 'Debes proporcionar una dirección de correo electrónico válida para continuar.',
    ],

    'device' => [
        'title' => 'Punto de control del dispositivo',
        'recovery-code' => 'Código de recuperación',
        'authentication-code' => 'Código de autenticación',

        'continue' => 'Continuar',

        'lost-device' => 'He perdido mi dispositivo',
        'have-device' => 'Tengo mi dispositivo',

        'return-to-login' => 'Volver a iniciar sesión',

        'enter-one-of-recovery-codes' => 'Ingresa uno de los códigos de recuperación generados cuando configuraste la autenticación de dos factores en esta cuenta para continuar.',
        'enter-two-factor' => 'Ingresa el token de dos factores generado por tu dispositivo',
    ],

    'register' => [
        'title' => 'Crear una cuenta',
        'username' => 'Nombre de usuario',
        'firstname' => 'Nombre',
        'lastname' => 'Apellido',
        'email' => 'Correo electrónico',
        'register' => 'Registrarse',

        'already-have-account' => '¿Ya tienes una cuenta?',

        'username-required' => 'Se requiere un nombre de usuario.',
        'email-required' => 'Se requiere una dirección de correo electrónico.',
        'valid-email-required' => 'Se requiere una dirección de correo electrónico válida.',
        'firstname-required' => 'Se requiere un nombre.',
        'lastname-required' => 'Se requiere un apellido.',

        'valid-username-required' => 'Se requiere un nombre de usuario válido (3-16 caracteres, solo letras, números, guiones y guiones bajos).',
        'username-taken' => 'El nombre de usuario proporcionado ya está en uso.',

        'success-message' => 'Te has registrado exitosamente, revisa tu correo electrónico.',
    ],

    'reset' => [
        'title' => 'Restablecer contraseña',

        'email' => 'Correo electrónico',
        'password' => 'Contraseña',
        'confirm-password' => 'Confirmar nueva contraseña',

        'return-to-login' => 'Volver a iniciar sesión',
        
        'password-required' => 'Se requiere una nueva contraseña.',
        'at-least-8-characters' => 'Tu nueva contraseña debe tener al menos 8 caracteres de longitud.',
        'password-does-not-match' => 'Tu nueva contraseña no coincide.',
    ]
];
