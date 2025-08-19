<!doctype html>
<html lang="en" class="light-theme">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <title>Code Duo - Kullanıcı Bilgileri</title>
</head>

<body>
  <div class="container mt-5">
    <div class="card">
      <div class="card-header">
        <h4 class="mb-0">Kullanıcı Bilgileri</h4>
      </div>
      <div class="card-body">
        @if(isset($kullanici))
          <div class="user-info">
            <p><strong>ID:</strong> {{ $kullanici->id }}</p>
            <p><strong>Ad:</strong> {{ $kullanici->adi }}</p>
            <p><strong>Soyad:</strong> {{ $kullanici->soyadi }}</p>
            <p><strong>Hat Türü:</strong> {{ $kullanici->hat_turu }}</p>
            <p><strong>Mevcut Paket:</strong> {{ $kullanici->mevcut_paket }}</p>
            <p><strong>Kalan Dakika:</strong> {{ $kullanici->kalan_dk }}</p>
            <p><strong>Kalan Sms:</strong> {{ $kullanici->kalan_sms }}</p>
            <p><strong>Kalan İnternet:</strong> {{ $kullanici->kalan_gb }}</p>
            <p><strong>Harcanan Dakika:</strong> {{ $kullanici->harcanan_dk }}</p>
            <p><strong>Harcanan Sms:</strong> {{ $kullanici->harcanan_sms }}</p>
            <p><strong>Harcanan İnternet:</strong> {{ $kullanici->harcanan_gb }}</p>
            <p><strong>Oluşturulma Tarihi:</strong> {{ $kullanici->created_at }}</p>
            <p><strong>Güncellenme Tarihi:</strong> {{ $kullanici->updated_at }}</p>
          </div>
        @else
          <p>Kullanıcı bilgisi bulunamadı.</p>
        @endif
      </div>
    </div>
  </div>
</body>
</html>