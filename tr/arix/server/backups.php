<?php

return [
    'backups' => 'Yedeklemeler',
    'manage-backups' => 'Yedeklemeleri Yönet',
    'create-backup' => 'Yedekleme Oluştur',
    'have-been-allocated' => 'Bu sunucu için {{current}}/{{max}} yedekleme oluşturulmuştur.',

    'name' => 'Ad',
    'size' => 'Boyut',
    'creation-date' => 'Oluşturulma Tarihi',
    'checksum' => 'Özet Kontrolü',

    'failed' => 'Başarısız',
    'continue' => 'Devam Et',

    'download' => 'İndir',
    'restore' => 'Geri Yükle',
    'lock' => 'Kilitle',
    'unlock' => 'Kilidi Aç',
    'delete' => 'Sil',

    'limit-is-0' => 'Bu sunucu için yedekleme sınırı 0 olarak ayarlandığından yedekleme oluşturulamaz.',
    'try-going-back' => 'Görünüşe göre size gösterecek yedekleme kalmamış gibi, bir sayfa geri gitmeyi deneyin.',
    'no-backups' => 'Bu sunucu için şu anda depolanmış herhangi bir yedekleme bulunmuyor.',
    'no-longer-protected' => 'Bu yedekleme artık otomatik veya kazara silinmelere karşı korunmamaktadır.',
    'your-server-will-be-stopped' => 'Sunucunuz durdurulacak. Güç durumunu kontrol edemez, dosya yöneticisine erişemez veya tamamlanana kadar ek yedekleme oluşturamazsınız.',
    'delete-all-files' => 'Yedekleme geri yüklendikten önce tüm dosyaları sil.',
    'permanent-operation' => 'Bu kalıcı bir işlemdir. Bir kere silindikten sonra yedekleme kurtarılamaz.',

    'create' => [
        'title' => 'Sunucu Yedekleme Oluştur',
        'backup-name' => 'Yedekleme Adı',
        'backup-name-description' => 'Sağlanırsa, bu yedekleme için referans olarak kullanılacak ad.',
        'ignored-files-directories' => 'Yoksayılan Dosyalar ve Dizinler',
        'ignored-files-directories-description' => 'Bu yedekleme oluşturulurken yoksayılacak dosya veya klasörleri girin. Varlığı durumunda, kök sunucu dizinindeki .pteroignore dosyasının içeriğini kullanmak için boş bırakın. Dosyaların ve klasörlerin joker eşleştirmesi, yolun önüne ünlem işareti ekleyerek bir kuralı yok sayma de dahil olmak üzere desteklenir.',
        'locked' => 'Kilitli',
        'locked-description' => 'Bu yedeklemenin açıkça kilidi açılana kadar silinmesini önler.',
        'start' => 'Yedeklemeyi Başlat',
    ]
];
