<?php

return [
    'support' => 'Центр підтримки',

    'login' => [
        'title' => 'Увійдіть для продовження',
        'username-or-email' => 'Ім\'я користувача або електронна пошта',
        'password' => 'Пароль',
        'forgot-password' => 'Забули пароль?',
        'login' => 'Вхід',

        'must-be-provided' => 'Необхідно вказати ім\'я користувача або електронну пошту.',
        'new-here' => 'New here? Create an account.',
        'please-enter-password' => 'Будь ласка, введіть пароль вашого облікового запису',
    ],

    'forgot' => [
        'title' => 'Запит на скидання пароля',
        'email' => 'Адреса електронної пошти',
        'email-description' => 'Введіть адресу електронної пошти вашого облікового запису, щоб отримати інструкції щодо скидання пароля.',
        'send-email' => 'Надіслати електронний лист',
        'return-to-login' => 'Повернутися до входу',

        'a-valid-email-provided' => 'Необхідно надати дійсну адресу електронної пошти для продовження.',
    ],

    'device' => [
        'title' => 'Двофакторна аутентифікація',
        'recovery-code' => 'Код відновлення',
        'authentication-code' => 'Код аутентифікації',

        'continue' => 'Продовжити',

        'lost-device' => 'Я втратив свій пристрій',
        'have-device' => 'У мене є пристрій',

        'return-to-login' => 'Повернутися до входу',

        'enter-one-of-recovery-codes' => 'Введіть один із кодів відновлення, згенерованих при налаштуванні двофакторної аутентифікації для цього облікового запису, щоб продовжити.',
        'enter-two-factor' => 'Введіть двофакторний токен, згенерований вашим пристроєм',
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
        'title' => 'Скидання пароля',

        'email' => 'Адреса електронної пошти',
        'password' => 'Пароль',
        'confirm-password' => 'Підтвердіть новий пароль',

        'return-to-login' => 'Повернутися до входу',
        
        'password-required' => 'Обов\'язково потрібен новий пароль.',
        'at-least-8-characters' => 'Ваш новий пароль повинен містити принаймні 8 символів.',
        'password-does-not-match' => 'Ваш новий пароль не співпадає.',
    ]
];
