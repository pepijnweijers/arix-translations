<?php

return[
    'backups' => 'バックアップ',
    'manage-backups' => 'バックアップを管理',
    'create-backup' => 'バックアップを作成',
    'have-been-allocated' => 'このサーバーで{{max}}中{{current}}つのバックアップが作成されました。',

    'name' => '名前',
    'size' => 'サイズ',
    'creation-date' => '作成日',
    'checksum' => 'チェックサム',

    'failed' => '失敗',
    'continue' => '続行',

    'download' => 'ダウンロード',
    'restore' => '復元',
    'lock' => 'ロック',
    'unlock' => 'アンロック',
    'delete' => '削除',

    'limit-is-0' => 'バックアップ上限が0に設定されているため、このサーバーのバックアップは作成できません。',
    'try-going-back' => '表示できるバックアップがなくなりました。前のページに戻ってみてください。',
    'no-backups' => 'このサーバーに保存されているバックアップは現在ありません。',
    'no-longer-protected' => 'このバックアップは自動または誤った削除から保護されなくなります。',
    'your-server-will-be-stopped' => 'サーバーが停止されます。完了するまで、電源状態の制御、ファイルマネージャーのアクセス、または追加バックアップの作成はできません。',
    'delete-all-files' => 'バックアップを復元する前にすべてのファイルを削除します。',
    'permanent-operation' => 'これは永久的な操作です。削除されたバックアップは復元できません。',

    'create' => [
        'title' => 'サーバーバックアップを作成',
        'backup-name' => 'バックアップ名',
        'backup-name-description' => '指定する場合、このバックアップの参照に使用する名前。',
        'ignored-files-directories' => '無視するファイルとディレクトリ',
        'ignored-files-directories-description' => ' このバックアップを生成する際に無視するファイルまたはフォルダを入力してください。空白のままにすると、サーバーディレクトリのルートにある.pteroignoreファイルの内容が使用されます（存在する場合）。ワイルドカードマッチングと感叹符を付加するルールの否定がサポートされています。',
        'locked' => 'ロック中',
        'locked-description' => '明示的にアンロックされるまで、このバックアップの削除を防います。',
        'start' => 'バックアップを開始',
    ]
];