<!doctype html>
<html lang="en" class="light-theme">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap-extended.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <title>Turkcell Paketler</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="mb-0">Mevcut Paketler</h4>
                    </div>
                    <div class="card-body">
                        @if(isset($paketler) && count($paketler) > 0)
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Paket ID</th>
                                            <th>Paket Adı</th>
                                            <th>Dakika</th>
                                            <th>İnternet</th>
                                            <th>SMS</th>
                                            <th>Fiyat</th>
                                            <th>Süre</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($paketler as $paket)
                                            <tr>
                                                <td>{{ $paket->id }}</td>
                                                <td>{{ $paket->paket_adi }}</td>
                                                <td>{{ $paket->dakika }} DK</td>
                                                <td>{{ $paket->internet }} GB</td>
                                                <td>{{ $paket->sms }} SMS</td>
                                                <td>{{ number_format($paket->fiyat, 2) }} TL</td>
                                                <td>{{ $paket->sure }} Gün</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @else
                            <div class="alert alert-info">
                                Henüz paket bulunmamaktadır.
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>
