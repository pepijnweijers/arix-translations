<?php

return [
    'support' => 'Центр поддержки',

    'login' => [
        'title' => 'Войти для продолжения',
        'username-or-email' => 'Имя пользователя или адрес электронной почты',
        'password' => 'Пароль',
        'forgot-password' => 'Забыли пароль?',
        'login' => 'Вход',

        'must-be-provided' => 'Необходимо указать имя пользователя или адрес электронной почты.',
        'new-here' => 'New here? Create an account.',
        'please-enter-password' => 'Пожалуйста, введите пароль вашей учетной записи',
    ],

    'forgot' => [
        'title' => 'Запрос на сброс пароля',
        'email' => 'Адрес электронной почты',
        'email-description' => 'Введите адрес электронной почты вашей учетной записи, чтобы получить инструкции по сбросу пароля.',
        'send-email' => 'Отправить электронное письмо',
        'return-to-login' => 'Вернуться к входу',

        'a-valid-email-provided' => 'Необходимо предоставить действительный адрес электронной почты для продолжения.',
    ],

    'device' => [
        'title' => 'Двухфакторная аутентификация',
        'recovery-code' => 'Код восстановления',
        'authentication-code' => 'Код аутентификации',

        'continue' => 'Продолжить',

        'lost-device' => 'Я потерял свое устройство',
        'have-device' => 'У меня есть устройство',

        'return-to-login' => 'Вернуться к входу',

        'enter-one-of-recovery-codes' => 'Введите один из кодов восстановления, сгенерированных при настройке двухфакторной аутентификации для этой учетной записи, чтобы продолжить.',
        'enter-two-factor' => 'Введите двухфакторный токен, сгенерированный вашим устройством',
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
        'title' => 'Сброс пароля',

        'email' => 'Адрес электронной почты',
        'password' => 'Пароль',
        'confirm-password' => 'Подтвердите новый пароль',

        'return-to-login' => 'Вернуться к входу',
        
        'password-required' => 'Требуется новый пароль.',
        'at-least-8-characters' => 'Ваш новый пароль должен содержать как минимум 8 символов.',
        'password-does-not-match' => 'Ваш новый пароль не совпадает.',
    ]
];
