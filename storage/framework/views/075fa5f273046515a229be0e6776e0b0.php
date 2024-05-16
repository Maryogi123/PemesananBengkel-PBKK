<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tampil User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: white">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">Detail Data Komputer</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <div class="card-body">
                            <h3><?php echo e($pegawai->nama_pegawai); ?></h3>
                            <p><?php echo e($pegawai->alamat); ?></p>
                            <p><?php echo e($pegawai->jenis_kelamin); ?></p>
                            <p><?php echo e($pegawai->jabatan); ?></p>
                            <p><?php echo e($pegawai->status); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html><?php /**PATH C:\Users\User\PemesananBengkel\resources\views/pegawai/show.blade.php ENDPATH**/ ?>