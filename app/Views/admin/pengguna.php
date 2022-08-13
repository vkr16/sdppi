<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Akun Pengguna</title>

    <link rel="shortcut icon" href="<?= HOST_URL ?>/public/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?= ASSETS_URL ?>/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= ASSETS_URL ?>/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?= ASSETS_URL ?>/datatables/datatables.min.css">
    <link rel="stylesheet" href="<?= ASSETS_URL ?>/css/custom.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700&family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>

<body>
    <div class="d-flex">
        <?= $this->include('layout_components/sidebar'); ?>
        <section class="vh-100 w-100 scrollable-y">
            <?= $this->include('layout_components/topbar-admin'); ?>
            <div class="w-100">
                <div class="container-fluid">
                    <div class="col-md-12 row ps-3 py-3 my-2">
                        <span class="col-md-7">
                            <p class="fs-3 fw-normal m-0">Manajemen Data Akun Pengguna</p>
                        </span>
                        <nav aria-label="breadcrumb" class="m-0 col-md-5 d-flex align-items-center justify-content-end">
                            <ol class="breadcrumb m-0 ">
                                <li class="breadcrumb-item">Admin</li>
                                <li class="breadcrumb-item active" aria-current="page">Manajemen Pengguna</li>
                            </ol>
                        </nav>
                    </div>


                    <!-- Card Panels -->
                    <div class="container-fluid mt-3">
                        <div class="col-12 mb-4">
                            <div class="card">
                                <div class="card-header bg-light-kominfo">
                                    <i class="fa-solid fa-users fa-fw"></i> &nbsp; Data Akun Pengguna
                                </div>
                                <div class="card-body table-responsive" style="min-height: 30vh">
                                    <table id="pengguna-table" class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th style="width: 10px">No</th>
                                                <th>Nama</th>
                                                <th>Email</th>
                                                <th>Status Akun</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($usersDataArray as $index => $user) { ?>
                                                <tr>
                                                    <td></td>
                                                    <td><?= $user['name']; ?></td>
                                                    <td><?= $user['email']; ?></td>
                                                    <td><?= ($user['status'] == 'active') ? "Aktif" : 'Ditangguhkan'; ?></td>
                                                    <td>
                                                        <div class="d-flex flex-wrap gap-2 justify-content-around">
                                                            <button class="btn btn-danger btn-sm"><i class="fa-solid fa-trash-can fa-fw"></i></button>
                                                            <button class="btn btn-primary btn-sm"><i class="fa-solid fa-pen-to-square fa-fw"></i></button>
                                                            <button class="btn btn-success btn-sm"><i class="fa-solid fa-unlock-keyhole fa-fw"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php } ?>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="card">
                                    <div class="card-header bg-light-kominfo">
                                        <i class="fa-solid fa-user-plus fa-fw"></i> &nbsp; Tambah Pengguna Baru
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label for="inputnamapengguna" class="form-label">Nama</label>
                                            <input required type="text" class="form-control" id="inputnamapengguna" placeholder="Nama ">
                                        </div>
                                        <div class="mb-3">
                                            <label for="inputemailpengguna" class="form-label">Alamat Email</label>
                                            <input required type="email" class="form-control" id="inputemailpengguna" placeholder="Alamat Email">
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 mb-3">
                                                <label for="inputpasswordpengguna" class="form-label">Password</label>
                                                <input required type="password" class="form-control" id="inputpasswordpengguna" placeholder="Password">
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <label for="inputpasswordpengguna2" class="form-label">Ulangi Password</label>
                                                <input required type="password" class="form-control" id="inputpasswordpengguna2" placeholder="Ulangi Password">
                                            </div>
                                        </div>
                                        <button class="btn btn-kominfo" id="btn-register" onclick="registerUser()"><i class="fa-solid fa-floppy-disk"></i> &nbsp;Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Launch demo modal
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" data-bs-backdrop="static" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><i class="fa-solid fa-file-pen fa-fw"></i></i> &nbsp; Update Data Penyelenggara</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="">
                                <div class="mb-3">
                                    <label for="updatenamapenyelenggara" class="form-label">Nama Penyelenggara</label>
                                    <input required type="text" class="form-control" id="updatenamapenyelenggara" placeholder="Nama Penyelenggara">
                                </div>
                                <div class="mb-3">
                                    <label for="updatejenislayanan" class="form-label">Jenis Layanan</label>
                                    <input required type="text" class="form-control" id="updatejenislayanan" placeholder="Jenis Layanan">
                                </div>
                                <div class="mb-3">
                                    <label for="updatelokasi" class="form-label">Domisili Penyelenggara</label>
                                    <input required type="text" class="form-control" id="updatelokasi" placeholder="Domisili Penyelenggara">
                                </div>
                                <div class="mb-3">
                                    <label for="updatestatus" class="form-label">Status</label>
                                    <input required type="text" class="form-control" id="updatestatus" placeholder="Status">
                                </div>
                                <div class="mb-3">
                                    <label for="updatewebsite" class="form-label">Website</label>
                                    <input required type="text" class="form-control" id="updatewebsite" placeholder="Website">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer d-flex justify-content-between">
                            <button class="btn btn-danger"> <i class="fa-solid fa-trash-can fa-fw"></i>&nbsp; Delete</button>
                            <div>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <button class="btn btn-kominfo"><i class="fa-solid fa-floppy-disk fa-fw"></i> &nbsp;Simpan Perubahan</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <?= $this->include('layout_components/footer-admin'); ?>
        </section>

    </div>


    <script src="<?= ASSETS_URL ?>/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= ASSETS_URL ?>/js/jquery-3.6.0.min.js"></script>
    <script src="<?= ASSETS_URL ?>/js/notiflix-aio-3.2.5.min.js"></script>
    <script src="<?= ASSETS_URL ?>/datatables/datatables.min.js"></script>

    <script>
        // Activate the sidebar item
        $('#sidebar-item-pengguna').addClass('sidebar-active').removeClass('sidebar-item');
        // $('#management-collapse').addClass('show');
        // $('#management-collapse-toggle').attr('aria-expanded', 'true');

        Notiflix.Notify.init({
            width: '300px',
            position: 'center-top',
            closeButton: false,
            fontSize: '14px',
            distance: '30px',
            cssAnimationStyle: 'from-top',
        });

        $(document).ready(function() {
            var t = $('#pengguna-table').DataTable({
                "language": {
                    "search": "Cari : ",
                    "lengthMenu": "Tampilkan _MENU_ data per halaman",
                    "zeroRecords": "Tidak ada data yang cocok ditemukan.",
                    "info": "Menampilkan halaman _PAGE_ dari _PAGES_",
                    "infoEmpty": "Data tidak tersedia",
                    "infoFiltered": "(Difilter dari _MAX_ total data)",
                    "paginate": {
                        "first": "Pertama",
                        "last": "Terakhir",
                        "next": '<i class="fa-solid fa-angle-right"></i>',
                        "previous": '<i class="fa-solid fa-angle-left"></i>'
                    },
                },
                "columnDefs": [{
                    "orderable": false,
                    "targets": 0,
                }, ],
                "order": [
                    [1, 'asc']
                ],
            });

            t.on('order.dt search.dt', function() {
                let i = 1;

                t.cells(null, 0, {
                    search: 'applied',
                    order: 'applied'
                }).every(function(cell) {
                    this.data(i++);
                });
            }).draw();
        });


        $('#inputpasswordpengguna2').on('keypress', function(e) {
            if (e.which == 13) {
                registerUser();
            }
        });

        function registerUser() {
            var name = $('#inputnamapengguna').val();
            var email = $('#inputemailpengguna').val();
            var password = $('#inputpasswordpengguna').val();
            var password2 = $('#inputpasswordpengguna2').val();

            if (password !== password2) {
                Notiflix.Notify.failure("Password Tidak Cocok")
            } else {
                $.post("<?= HOST_URL ?>/register", {
                        name: name,
                        email: email,
                        password: password,
                    })
                    .done(function(data) {
                        if (data == 'empty field') {
                            Notiflix.Notify.warning("Harap lengkapi semua kolom pendaftaran")
                        } else if (data == 'account already exist') {
                            Notiflix.Notify.warning("Email sudah digunakan")
                        } else if (data == 'registered') {
                            Notiflix.Notify.success("Berhasil didaftarkan")
                            setTimeout(() => {
                                location.replace('<?= HOST_URL ?>/admin/pengguna');
                            }, "1000")
                        }
                    })
            }
        }
    </script>

</body>

</html>