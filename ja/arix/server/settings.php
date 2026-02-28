<?php

return [
    'settings' => '設定',

    'sftp' => [
        'title' => 'SFTP詳細',
        'server-address' => 'サーバーアドレス',
        'username' => 'ユーザー名',
        'description' => 'SFTPパスワードはこのパネルへのアクセスに使用するパスワードと同じです。',
        'launch-sftp' => 'SFTPを起動',
    ],

    'rename' => [
        'title' => 'サーバー詳細を変更',
        'server-name' => 'サーバー名',
        'server-description' => 'サーバーの説明',
        'save' => '保存',
    ],

    'debug' => [
        'title' => 'デバッグ情報',
        'node' => 'ノード',
        'server-id' => 'サーバーID',
    ],

    'reinstall' => [
        'title' => 'サーバーを再インストール',
        'reinstall-started' => 'サーバーの再インストールプロセスが開始されました。',
        'confirm-reinstallation' => 'サーバーの再インストールを確認',
        'yes-reinstall' => 'はい、サーバーを再インストールします',
        'are-you-sure' => 'サーバーは停止され、このプロセス中に一部のファイルが削除または変更される可能性がありますが、続行してもよろしいですか？',
        'desc-1' => 'サーバーを再インストールすると停止し、初期設定スクリプトが再実行されます。',
        'desc-2' => 'このプロセス中に一部のファイルが削除または変更される可能性があります。続行前にデータをバックアップしてください。',
        'reinstall-server' => 'サーバーを再インストール',
    ],
];