<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Penyelenggara Pos</title>

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
            <div class="bg-light text-dark d-flex justify-content-between align-items-center w-100" style="height: 62px">
                <span type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarPanelOffCanvas" aria-controls="sidebarPanelOffCanvas" class="text-decoration-none text-dark h2 m-0 ms-3 d-lg-none">
                    <i class="fa-solid fa-bars"></i>
                </span>
                <div class="ms-auto me-4 dropdown-center ">
                    <span class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" role="button">
                        <i class="fa-solid fa-user-tie me-1"></i> Fikri Miftah Akmaludin
                    </span>
                    <ul class="dropdown-menu bg-light mt-2 border-0">
                        <li><a class="dropdown-item text-dark" href="#"><i class="fa-solid fa-user-gear"></i> &nbsp; My Account</a></li>
                        <li><a class="dropdown-item text-dark" href="#"><i class="fa-solid fa-arrow-right-from-bracket"></i> &nbsp; Logout </a></li>
                    </ul>
                </div>
            </div>
            <div class="w-100">
                <div class="container-fluid">
                    <div class="col-md-12 row ps-3 py-3 my-2">
                        <span class="col-md-7">
                            <p class="fs-3 fw-normal m-0">Manajemen Data Penyelenggara Pos</p>
                        </span>
                        <nav aria-label="breadcrumb" class="m-0 col-md-5 d-flex align-items-center justify-content-end">
                            <ol class="breadcrumb m-0 ">
                                <li class="breadcrumb-item">Admin</li>
                                <li class="breadcrumb-item">Manajemen Data</li>
                                <li class="breadcrumb-item active" aria-current="page">Pos</li>
                            </ol>
                        </nav>
                    </div>


                    <!-- Card Panels -->
                    <div class="container-fluid mt-3">
                        <div class="col-12 mb-4">
                            <div class="card">
                                <div class="card-header bg-light-kominfo">
                                    <i class="fa-solid fa-truck-fast fa-fw"></i> &nbsp; Data Penyelenggara Pos
                                </div>
                                <div class="card-body table-responsive" style="min-height: 30vh">
                                    <table id="pos-table" class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th style="width: 10px">No</th>
                                                <th>Nama</th>
                                                <th>Jenis Layanan</th>
                                                <th>Domisili</th>
                                                <th>Status</th>
                                                <th>Website</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td>Agung Gemilang perkasa</td>
                                                <td>Jarberstrunk</td>
                                                <td>KOTA ADM. JAKARTA UTARA, DKI JAKARTA</td>
                                                <td>Aktif</td>
                                                <td>agpradio.com</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>AJN Solusindo</td>
                                                <td>Jartaptup, NAP</td>
                                                <td>KOTA ADM. JAKARTA SELATAN, DKI JAKARTA</td>
                                                <td>Rekomendasi Pencabutan Izin</td>
                                                <td>ajn.co.id</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Alita Prayamitra</td>
                                                <td>Jartaptup</td>
                                                <td>KOTA ADM. JAKARTA SELATAN, DKI JAKARTA</td>
                                                <td>Aktif</td>
                                                <td>alita.id</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Alssa Corporindo</td>
                                                <td>Jarberstrunk</td>
                                                <td>KOTA ADM. JAKARTA TIMUR, DKI JAKARTA</td>
                                                <td>Aktif</td>
                                                <td>alssacorp.co.id</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Amron Citinet</td>
                                                <td>Jartaplok PS</td>
                                                <td>KOTA ADM. JAKARTA SELATAN, DKI JAKARTA</td>
                                                <td>Aktif</td>
                                                <td>citinet.co.id</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Angkasa Komunikasi Global Utama</td>
                                                <td>ISP, Jartaptup</td>
                                                <td>KOTA ADM. JAKARTA PUSAT, DKI JAKARTA</td>
                                                <td>Aktif</td>
                                                <td>angkasa.net.id</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Agung Gemilang perkasa</td>
                                                <td>Jarberstrunk</td>
                                                <td>KOTA ADM. JAKARTA UTARA, DKI JAKARTA</td>
                                                <td>Aktif</td>
                                                <td>agpradio.com</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Alita Prayamitra</td>
                                                <td>Jartaptup</td>
                                                <td>KOTA ADM. JAKARTA SELATAN, DKI JAKARTA</td>
                                                <td>Aktif</td>
                                                <td>alita.id</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Amron Citinet</td>
                                                <td>Jartaplok PS</td>
                                                <td>KOTA ADM. JAKARTA SELATAN, DKI JAKARTA</td>
                                                <td>Aktif</td>
                                                <td>citinet.co.id</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Angkasa Komunikasi Global Utama</td>
                                                <td>ISP, Jartaptup</td>
                                                <td>KOTA ADM. JAKARTA PUSAT, DKI JAKARTA</td>
                                                <td>Aktif</td>
                                                <td>angkasa.net.id</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="card">
                                    <div class="card-header bg-light-kominfo">
                                        <i class="fa-solid fa-clipboard-list fa-fw"></i> &nbsp; Input Data Penyelenggara
                                    </div>
                                    <div class="card-body">
                                        <form action="">
                                            <div class="mb-3">
                                                <label for="inputnamapenyelenggara" class="form-label">Nama Penyelenggara</label>
                                                <input required type="text" class="form-control" id="inputnamapenyelenggara" placeholder="Nama Penyelenggara">
                                            </div>
                                            <div class="mb-3">
                                                <label for="inputjenislayanan" class="form-label">Jenis Layanan</label>
                                                <input required type="text" class="form-control" id="inputjenislayanan" placeholder="Jenis Layanan">
                                            </div>
                                            <div class="mb-3">
                                                <label for="inputlokasi" class="form-label">Domisili Penyelenggara</label>
                                                <input required type="text" class="form-control" id="inputlokasi" placeholder="Domisili Penyelenggara">
                                            </div>
                                            <div class="mb-3">
                                                <label for="inputstatus" class="form-label">Status</label>
                                                <input required type="text" class="form-control" id="inputstatus" placeholder="Status">
                                            </div>
                                            <div class="mb-3">
                                                <label for="inputwebsite" class="form-label">Website</label>
                                                <input required type="text" class="form-control" id="inputwebsite" placeholder="Website">
                                            </div>
                                            <button class="btn btn-kominfo">Simpan</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header bg-light-kominfo">
                                        <i class="fa-solid fa-circle-info fa-fw"></i> &nbsp; Header of Panel 3
                                    </div>
                                    <div class="card-body">
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat excepturi unde in quas rem dicta minima a officia animi, modi consequatur, quibusdam recusandae eaque, vitae rerum eum ratione! Cupiditate voluptates ut totam, porro, molestiae sed temporibus quibusdam blanditiis sapiente exercitationem voluptas a sint aliquid illo dolorum iste commodi, dolor est quas quisquam vel minima eum culpa. Nulla doloribus accusamus, unde reprehenderit magni recusandae saepe laudantium aut est hic, alias necessitatibus at iste quae, vitae modi. Dolore modi odit ducimus similique ad incidunt cupiditate quisquam non nisi obcaecati quae optio numquam architecto iste eveniet fugit accusamus minima, corporis est facilis laudantium fugiat? Illo eius voluptatibus exercitationem eaque hic vel autem eveniet nihil, laudantium numquam sint voluptas, odit obcaecati expedita similique rerum.
                                    </div>
                                </div>
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
    <script src="<?= ASSETS_URL ?>/datatables/datatables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
    <script>
        // Activate the sidebar item
        $('#sidebar-item-pos').addClass('sidebar-active').removeClass('sidebar-item');
        $('#management-collapse').addClass('show');
        $('#management-collapse-toggle').attr('aria-expanded', 'true');

        $(document).ready(function() {
            var t = $('#pos-table').DataTable({
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
    </script>
</body>

</html>