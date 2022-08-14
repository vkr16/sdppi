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
                                            <?php foreach ($usersDataArray as $index => $user) {
                                                if (base64_encode($user['email']) != $_SESSION['sdppi_session']) {
                                            ?>
                                                    <tr>
                                                        <td></td>
                                                        <td><?= $user['name']; ?></td>
                                                        <td><?= $user['email']; ?></td>
                                                        <td><?= ($user['status'] == 'active') ? "Aktif" : 'Ditangguhkan'; ?></td>
                                                        <td>
                                                            <div class="d-flex flex-wrap gap-2 justify-content-around">
                                                                <button class="btn btn-danger btn-sm" onclick="showDeletePrompt('<?= $user['id']; ?>','<?= $user['name']; ?>')"><i class="fa-solid fa-trash-can fa-fw"></i></button>
                                                                <button class="btn btn-primary btn-sm" onclick="showEditModal('<?= $user['id'] ?>')"><i class="fa-solid fa-pen-to-square fa-fw"></i></button>
                                                                <button class="btn btn-success btn-sm" onclick="showResetModal('<?= $user['id']; ?>','<?= $user['name']; ?>')"><i class="fa-solid fa-unlock-keyhole fa-fw"></i></button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                            <?php }
                                            } ?>


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

            <!-- Modal Update User-->
            <div class="modal fade" id="editUser" tabindex="-1" data-bs-backdrop="static" aria-labelledby="editUserLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editUserLabel"><i class="fa-solid fa-file-pen fa-fw"></i></i> &nbsp; Update Data Pengguna</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body" id="editUserBody">
                            <form action="">
                                <div class="mb-3">
                                    <label for="updatenamapengguna" class="form-label">Nama</label>
                                    <input required type="text" class="form-control" id="updatenamapengguna" placeholder="Nama">
                                </div>
                                <div class="mb-3">
                                    <label for="updateemailpengguna" class="form-label">Email</label>
                                    <input required type="text" class="form-control" id="updateemailpengguna" placeholder="Email">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="updatestatuspengguna">Status</label>
                                    <select class="form-select" id="updatestatuspengguna">
                                        <option value="active">Aktif</option>
                                        <option value="suspended">Tangguhkan</option>
                                    </select>
                                </div>
                                <input type="text" hidden id="updateid">
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button class="btn btn-kominfo" onclick="updateUser()"><i class="fa-solid fa-floppy-disk fa-fw"></i> &nbsp;Simpan Perubahan</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Reset Password-->
            <div class="modal fade" id="resetPassUser" tabindex="-1" data-bs-backdrop="static" aria-labelledby="resetPassUserLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="resetPassUserLabel"><i class="fa-solid fa-file-pen fa-fw"></i></i> &nbsp; Reset Password Pengguna</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body" id="resetPassUserBody">
                            <p class="fs-4 px-2 py-1 bg-light-kominfo rounded">Reset Password :
                                <span id="target-reset"></span>
                            </p>
                            <form action="">
                                <div class="mb-3">
                                    <label for="newpassword" class="form-label">Password Baru</label>
                                    <input required type="password" class="form-control" id="newpassword" placeholder="Password Baru">
                                </div>
                                <div class="mb-3">
                                    <label for="newpassword2" class="form-label">Ulangi Password Baru</label>
                                    <input required type="password" class="form-control" id="newpassword2" placeholder="Ulangi Password Baru">
                                </div>
                                <input type="text" hidden id="resetid">
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button class="btn btn-kominfo" onclick="resetPassword()"><i class="fa-solid fa-floppy-disk fa-fw"></i> &nbsp;Simpan Perubahan</button>
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

        function showEditModal(id) {
            Notiflix.Block.standard('#editUserBody', 'Mendapatkan Data....', {
                backgroundColor: 'rgba(0,0,0,1)',
                messageColor: 'rgba(255,255,255,1)',
            });

            $.post("pengguna/getUser", {
                    userid: id
                })
                .done(function(data) {
                    var userdata = JSON.parse(data)
                    Notiflix.Block.remove('#editUserBody');
                    $('#updatenamapengguna').val(userdata[0].name)
                    $('#updateemailpengguna').val(userdata[0].email)
                    $("#updatestatuspengguna").val(userdata[0].status).change();
                    $('#updateid').val(userdata[0].id)

                });
            $('#editUser').modal('show');
        }

        function updateUser() {
            var id = $('#updateid').val()
            var name = $('#updatenamapengguna').val()
            var email = $('#updateemailpengguna').val()
            var status = $("#updatestatuspengguna").val()
            $.post("pengguna/updateUser", {
                    id: id,
                    name: name,
                    email: email,
                    status: status,
                })
                .done(function(data) {
                    if (data == 'empty field') {
                        Notiflix.Notify.warning("Harap lengkapi semua kolom informasi pengguna")
                    } else if (data == 'email already used') {
                        Notiflix.Notify.warning("Email sudah digunakan")
                    } else if (data == 'updated') {
                        Notiflix.Notify.success("Berhasil memperbarui data pengguna")
                        setTimeout(() => {
                            location.replace('<?= HOST_URL ?>/admin/pengguna');
                        }, "1000")
                    }
                });
        }

        function showDeletePrompt(id, name) {
            Notiflix.Confirm.show(
                'Konfirmasi Penghapusan',
                'Apakah anda ingin menghapus ' + name + ' dari daftar pengguna?',
                'Ya',
                'Tidak',
                () => {
                    Notiflix.Block.dots('body', 'Syncronizing....')
                    $.post("pengguna/deleteUser", {
                            id: id,
                        })
                        .done(function(data) {
                            if (data == 'deleted') {
                                Notiflix.Block.remove('body')
                                Notiflix.Notify.success("Pengguna berhasil dihapus")
                                Notiflix.Block.dots('.table-responsive')
                                location.replace('<?= HOST_URL ?>/admin/pengguna');
                            }
                        });
                },
                () => {}, {},
            );
        }

        function showResetModal(id, name) {
            $('#resetPassUser').modal('show');
            $('#target-reset').html(name);
            $('#resetid').val(id);
        }

        function resetPassword() {
            var name = $('#target-reset').html()
            var id = $('#resetid').val()
            var npass = $('#newpassword').val()
            var cnpass = $('#newpassword2').val()

            if (npass == '' || cnpass == '') {
                Notiflix.Notify.warning("Password tidak boleh kosong")
            } else {
                if (npass == cnpass) {
                    $.post("pengguna/resetPassUser", {
                            id: id,
                            password: npass
                        })
                        .done(function(data) {
                            if (data == "reset") {
                                $('#resetPassUser').modal('hide');
                                $('#newpassword').val('')
                                $('#newpassword2').val('')
                                Notiflix.Notify.success("Password untuk " + name + " telah diatur ulang")
                            }
                        });
                } else {
                    Notiflix.Notify.warning("Password konfirmasi tidak cocok")
                }
            }
        }
    </script>
    <script src="<?= ASSETS_URL ?>/js/custom.js"></script>

</body>

</html>