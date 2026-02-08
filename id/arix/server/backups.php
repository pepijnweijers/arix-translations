<?php

return [
    'backups' => 'Cadangan',
    'manage-backups' => 'Kelola cadangan',
    'create-backup' => 'Buat cadangan',
    'have-been-allocated' => '{{current}} dari {{max}} cadangan telah dibuat untuk server ini.',

    'name' => 'Nama',
    'size' => 'Ukuran',
    'creation-date' => 'Tanggal Pembuatan',
    'checksum' => 'Checksum',

    'failed' => 'Gagal',
    'continue' => 'Lanjutkan',

    'download' => 'Unduh',
    'restore' => 'Pulihkan',
    'lock' => 'Kunci',
    'unlock' => 'Buka kunci',
    'delete' => 'Hapus',

    'limit-is-0' => 'Cadangan tidak dapat dibuat untuk server ini karena batas cadangan diatur menjadi 0.',
    'try-going-back' => 'Sepertinya kita kehabisan cadangan untuk ditampilkan, coba kembali ke halaman sebelumnya.',
    'no-backups' => 'Sepertinya tidak ada cadangan yang disimpan untuk server ini saat ini.',
    'no-longer-protected' => 'Cadangan ini tidak akan lagi dilindungi dari penghapusan otomatis atau tidak sengaja.',
    'your-server-will-be-stopped' => 'Server Anda akan dihentikan. Anda tidak akan dapat mengendalikan status daya, mengakses manajer file, atau membuat cadangan tambahan hingga selesai.',
    'delete-all-files' => 'Hapus semua file sebelum memulihkan cadangan.',
    'permanent-operation' => 'Ini adalah operasi permanen. Cadangan tidak dapat dipulihkan setelah dihapus.',

    'create' => [
        'title' => 'Buat cadangan server',
        'backup-name' => 'Nama cadangan',
        'backup-name-description' => 'Jika disediakan, nama yang harus digunakan untuk merujuk cadangan ini.',
        'ignored-files-directories' => 'File & Direktori Diabaikan',
        'ignored-files-directories-description' => 'Masukkan file atau folder yang diabaikan saat membuat cadangan ini. Biarkan kosong untuk menggunakan isi file .pteroignore di root direktori server jika ada. Pencocokan wildcard file dan folder didukung, selain itu Anda bisa meniadakan suatu aturan dengan menambahkan tanda seru pada awal jalur.',
        'locked' => 'Dikunci',
        'locked-description' => 'Mencegah cadangan ini dihapus sampai dibuka secara eksplisit.',
        'start' => 'Mulai cadangan',
    ]
];
