<?php

return [
    'backups' => '백업',
    'manage-backups' => '백업 관리',
    'create-backup' => '백업 생성',
    'have-been-allocated' => '이 서버에는 총 {{max}}개의 백업 중 {{current}}개가 할당되었습니다.',

    'name' => '이름',
    'size' => '크기',
    'creation-date' => '생성 날짜',
    'checksum' => '체크섬',

    'failed' => '실패',
    'continue' => '계속',

    'download' => '다운로드',
    'restore' => '복원',
    'lock' => '잠금',
    'unlock' => '잠금 해제',
    'delete' => '삭제',

    'limit-is-0' => '이 서버의 백업 제한이 0으로 설정되어 백업을 생성할 수 없습니다.',
    'try-going-back' => '백업을 더 이상 표시할 수 없는 것 같습니다. 이전 페이지로 돌아가 보세요.',
    'no-backups' => '현재 이 서버에 저장된 백업이 없는 것 같습니다.',
    'no-longer-protected' => '이 백업은 더 이상 자동 또는 실수로 삭제되지 않습니다.',
    'your-server-will-be-stopped' => '서버가 중지됩니다. 완료되기 전에 전원 상태를 제어하거나 파일 관리자에 액세스하거나 추가 백업을 생성할 수 없습니다.',
    'delete-all-files' => '백업을 복원하기 전에 모든 파일 삭제.',
    'permanent-operation' => '이 작업은 영구 작업입니다. 백업을 삭제한 후에는 복구할 수 없습니다.',

    'create' => [
        'title' => '서버 백업 생성',
        'backup-name' => '백업 이름',
        'backup-name-description' => '제공된 경우이 백업을 참조하는 데 사용할 이름입니다.',
        'ignored-files-directories' => '무시된 파일 및 디렉토리',
        'ignored-files-directories-description' => '이 백업을 생성하는 동안 무시할 파일 또는 폴더를 입력하십시오. .pteroignore 파일이 서버 디렉토리의 루트에 있는 경우 해당 파일의 내용을 사용하려면 비워 둡니다. 파일 및 폴더의 와일드카드 일치 외에 경로 앞에 느낌표를 붙여 규칙을 부정할 수도 있습니다.',
        'locked' => '잠김',
        'locked-description' => '명시적으로 잠금이 해제될 때까지이 백업을 삭제하는 것을 방지합니다.',
        'start' => '백업 시작',
    ],
];
