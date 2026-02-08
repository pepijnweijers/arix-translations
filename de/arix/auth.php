<?php

return [
    'support' => 'Support Center',

    'login' => [
        'title' => 'Login zum Fortfahren',
        'username-or-email' => 'Benutzername oder E-Mail',
        'password' => 'Passwort',
        'passwort-vergessen' => 'Passwort vergessen?',
        'login' => 'Anmelden',

        'must-be-provided' => 'Ein Benutzername oder eine E-Mail muss angegeben werden.',
        'new-here' => 'New here? Create an account.',
        'please-enter-password' => 'Bitte gib dein Kontopasswort ein',
    ],

    'forgot' => [
        'title' => 'Passwort zurückfordern',
        'email' => 'E-Mail',
        'email-description' => 'Gib deine Konto-E-Mail-Adresse ein, um Anweisungen zum Zurücksetzen deines Passworts zu erhalten.',
        'send-email' => 'E-Mail senden',
        'return-to-login' => 'Zum Login zurückkehren',

        'a-valid-email-provided' => 'Um fortzufahren, muss eine gültige E-Mail-Adresse angegeben werden',
    ],

    'device' => [
        'title' => 'Gerätecheckpoint',
        'recovery-code' => 'Wiederherstellungscode',
        'authentication-code' => 'Authentifizierungscode',

        'continue' => 'Fortfahren',

        'lost-device' => 'Ich habe mein Gerät verloren',
        'have-device' => 'Ich habe mein Gerät',

        'return-to-login' => 'Zum Login zurückkehren',

        'enter-one-of-recovery-codes' => 'Gib einen der Wiederherstellungscodes ein, die bei der Einrichtung der 2-Faktor-Authentifizierung für dieses Konto generiert wurden, um fortzufahren.',
        'enter-two-factor' => 'Gib das von deinem Gerät generierte Zwei-Faktor-Token ein',
    ],

    'register' => [
        'title' => 'Create an Account',
        'username' => 'Username',
        'firstname' => 'First Name',
        'lastname' => 'Last Name',
        'email' => 'Email',
        'register' => 'Register',

        'already-have-account' => 'Already have an account?',

        'username-required' => 'A username is required.',
        'email-required' => 'An email address is required.',
        'valid-email-required' => 'A valid email address is required.',
        'firstname-required' => 'A first name is required.',
        'lastname-required' => 'A last name is required.',

        'valid-username-required' => 'A valid username is required (3-16 characters, letters, numbers, dashes and underscores only).',
        'username-taken' => 'The provided username is already in use.',

        'success-message' => 'You have successfully registered, check your email',
    ],

    'reset' => [
        'title' => 'Passwort zurücksetzen',

        'email' => 'E-Mail',
        'password' => 'Passwort',
        'confirm-password' => 'Neues Passwort bestätigen',

        'return-to-login' => 'Zum Login zurückkehren',
        
        'password-required' => 'Ein neues Passwort ist erforderlich.',
        'at-least-8-characters' => 'Dein neues Passwort sollte mindestens 8 Zeichen lang sein.',
        'password-does-not-match' => 'Dein neues Passwort stimmt nicht überein.',
    ]
];