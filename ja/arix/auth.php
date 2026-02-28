<?php

return [
    'support' => 'サポートセンター',

    'login' => [
        'title' => 'ログインして続行',
        'username-or-email' => 'ユーザー名またはメール',
        'password' => 'パスワード',
        'forgot-password' => 'パスワードをお忘れですか？',
        'login' => 'ログイン',

        'must-be-provided' => 'ユーザー名またはメールアドレスを入力してください。',
        'new-here' => '初めての方はこちら。アカウントを作成する。',
        'please-enter-password' => 'アカウントのパスワードを入力してください',
    ],

    'forgot' => [
        'title' => 'パスワードリセットをリクエスト',
        'email' => 'メール',
        'email-description' => 'パスワードのリセット手順を受け取るには、アカウントのメールアドレスを入力してください。',
        'send-email' => 'メールを送信',
        'return-to-login' => 'ログインに戻る',

        'a-valid-email-provided' => '続行するには有効なメールアドレスを入力してください。',
    ],

    'device' => [
        'title' => 'デバイスチェックポイント',
        'recovery-code' => '回復コード',
        'authentication-code' => '認証コード',

        'continue' => '続行',

        'lost-device' => 'デバイスを紛失しました',
        'have-device' => 'デバイスを持っています',

        'return-to-login' => 'ログインに戻る',

        'enter-one-of-recovery-codes' => '続行するには、このアカウントで二要素認証を設定した際に生成された回復コードのいずれかを入力してください。',
        'enter-two-factor' => 'デバイスで生成された二要素認証トークンを入力してください',
    ],

    'register' => [
        'title' => 'アカウントを作成',
        'username' => 'ユーザー名',
        'firstname' => '名',
        'lastname' => '姓',
        'email' => 'メール',
        'register' => '登録',

        'already-have-account' => 'すでにアカウントをお持ちですか？',

        'username-required' => 'ユーザー名は必須です。',
        'email-required' => 'メールアドレスは必須です。',
        'valid-email-required' => '有効なメールアドレスが必要です。',
        'firstname-required' => '名は必須です。',
        'lastname-required' => '姓は必須です。',

        'valid-username-required' => '有効なユーザー名が必要です（3〜16文字、英字、数字、ハイフン、アンダースコアのみ）。',
        'username-taken' => '指定されたユーザー名はすでに使用されています。',

        'success-message' => '登録が完了しました。メールをご確認ください',
    ],

    'reset' => [
        'title' => 'パスワードのリセット',

        'email' => 'メール',
        'password' => 'パスワード',
        'confirm-password' => '新しいパスワードを確認',

        'return-to-login' => 'ログインに戻る',
        
        'password-required' => '新しいパスワードは必須です。',
        'at-least-8-characters' => '新しいパスワードは8文字以上である必要があります。',
        'password-does-not-match' => '新しいパスワードが一致しません。',
    ],
];