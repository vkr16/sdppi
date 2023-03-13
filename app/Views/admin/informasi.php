<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publikasi Informasi</title>

    <link rel="shortcut icon" href="<?= HOST_URL ?>/public/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?= ASSETS_URL ?>/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= ASSETS_URL ?>/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?= ASSETS_URL ?>/datatables/datatables.min.css">
    <link rel="stylesheet" href="<?= ASSETS_URL ?>/css/custom.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700&family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">


    <!-- TinyMCE -->
    <script src="https://cdn.tiny.cloud/1/km3sdmlku0n9xru0vaxju7k3ogjsllhts6ji37vo4qs63ay3/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea#content',
            plugins: [
                'autolink',
                'lists', 'link', 'image', 'charmap', 'preview', 'anchor', 'searchreplace', 'visualblocks',
                'fullscreen', 'insertdatetime', 'media', 'table', 'help', 'wordcount'
            ],
            toolbar: 'undo redo | a11ycheck casechange blocks | bold italic backcolor | alignleft aligncenter alignright alignjustify |' +
                'bullist numlist checklist outdent indent | removeformat | code table help'
        })
    </script>
</head>

<body>
    <div class="d-flex">
        <?= $this->include('layout_components/sidebar'); ?>
        <section class="vh-100 w-100 scrollable-y" id="main-panel">
            <?= $this->include('layout_components/topbar-admin'); ?>
            <div class="w-100">
                <div class="container-fluid">
                    <div class="col-md-12 row ps-3 py-3 my-2">
                        <span class="col-md-7">
                            <p class="fs-3 fw-normal m-0">Manajemen Data Penyelenggara Pos</p>
                        </span>
                        <nav aria-label="breadcrumb" class="m-0 col-md-5 d-flex align-items-center justify-content-end">
                            <ol class="breadcrumb m-0 ">
                                <li class="breadcrumb-item">Admin</li>
                                <li class="breadcrumb-item active" aria-current="page">Manajemen Informasi</li>
                            </ol>
                        </nav>
                    </div>


                    <!-- Card Panels -->
                    <div class="container-fluid mt-3">
                        <div class="col-12 mb-4">
                            <div class="card">
                                <div class="card-header bg-light-kominfo">
                                    <i class="fa-solid fa-clipboard-list fa-fw"></i> &nbsp; Regulasi Penyelenggaraan
                                </div>
                                <div class="card-body table-responsive" style="min-height: 30vh">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th>Pos</th>
                                                <td id="regulasi-pos"><?= $regulasiData[0]['content']; ?></td>
                                                <td><button class="btn btn-kominfo" onclick="editRegulasi('pos')"><i class="fa-solid fa-pencil"></i></button></td>
                                            </tr>
                                            <tr>
                                                <th>Telekomunikasi</th>
                                                <td id="regulasi-telekomunikasi"><?= $regulasiData[1]['content']; ?></td>
                                                <td><button class="btn btn-kominfo" onclick="editRegulasi('telekomunikasi')"><i class="fa-solid fa-pencil"></i></button></td>

                                            </tr>
                                            <tr>
                                                <th>Penyiaran</th>
                                                <td id="regulasi-penyiaran"><?= $regulasiData[2]['content']; ?></td>
                                                <td><button class="btn btn-kominfo" onclick="editRegulasi('penyiaran')"><i class="fa-solid fa-pencil"></i></button></td>

                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mb-4" style="display: none" id="editRegulasiPanel">
                                <div class="card">
                                    <div class="card-header bg-light-kominfo">
                                        <i class="fa-solid fa-clipboard-list fa-fw"></i> &nbsp; Text Editor - Ubah Informasi Regulasi
                                    </div>
                                    <div class="card-body">
                                        <h2 class="mb-4">Sedang menyunting regulasi : <span class="regtitle" style="text-transform: capitalize"></span></h2>
                                        <form action="<?= HOST_URL ?>/admin/informasi/updateRegulasi" method="POST">
                                            <input type="text" name="title" id="title" hidden>
                                            <textarea name="content" id="content" class="form-control" rows="10"></textarea>
                                            <span class="btn btn-secondary mt-3" onclick="dismissEditor()">Batal</span>
                                            <button type="submit" class="btn btn-kominfo mt-3"><i class="fa-solid fa-floppy-disk"></i> &nbsp; Simpan</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?= $this->include('layout_components/footer-admin'); ?>
        </section>

        <!-- <div class="modal modal-lg fade" id="editRegulasiModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editRegulasiModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="<?= HOST_URL ?>/admin/informasi/updateRegulasi" method="POST">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editRegulasiModalLabel">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <input type="text" name="title" id="title" hidden>
                            <textarea name="content" id="content" class="form-control" rows="10"></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-kominfo"><i class="fa-solid fa-floppy-disk"></i> &nbsp; Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div> -->

    </div>


    <script src="<?= ASSETS_URL ?>/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= ASSETS_URL ?>/js/jquery-3.6.0.min.js"></script>
    <script src="<?= ASSETS_URL ?>/js/notiflix-aio-3.2.5.min.js"></script>
    <script src="<?= ASSETS_URL ?>/datatables/datatables.min.js"></script>
    <script src="<?= ASSETS_URL ?>/js/custom.js"></script>

    <script>
        // Activate the sidebar item
        $('#sidebar-item-informasi').addClass('sidebar-active').removeClass('sidebar-item');
        // $('#management-collapse').addClass('show');
        // $('#management-collapse-toggle').attr('aria-expanded', 'true');

        function editRegulasi(title) {
            $('#editRegulasiPanel').show();
            $('#main-panel').animate({
                scrollTop: $("#editRegulasiPanel").offset().top
            }, 1000);
            $('#title').val(title);
            $('.regtitle').html(title);
            // $('#content').val($('#regulasi-' + title).html());
            tinymce.activeEditor.setContent($('#regulasi-' + title).html());
        }

        function dismissEditor() {
            $('#editRegulasiPanel').hide();
            $('#title').val('');
            tinymce.activeEditor.setContent('');
        }
    </script>

</body>

</html>