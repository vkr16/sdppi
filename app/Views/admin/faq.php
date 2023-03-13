<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertanyaan Umum</title>

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
            selector: 'textarea#newanswer',
            plugins: [
                'autolink',
                'lists', 'link', 'image', 'charmap', 'preview', 'anchor', 'searchreplace', 'visualblocks',
                'fullscreen', 'insertdatetime', 'media', 'table', 'help', 'wordcount'
            ],
            toolbar: 'undo redo | a11ycheck casechange blocks | bold italic backcolor | alignleft aligncenter alignright alignjustify |' +
                'bullist numlist checklist outdent indent | removeformat | code table help'
        })
        tinymce.init({
            selector: 'textarea#editanswer',
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
            <div class="w-100" style="min-height: 80vh">
                <div class="container-fluid">
                    <div class="col-md-12 row ps-3 py-3 my-2">
                        <span class="col-md-7">
                            <p class="fs-3 fw-normal m-0">Manajemen Pertanyaan Umum</p>
                        </span>
                        <nav aria-label="breadcrumb" class="m-0 col-md-5 d-flex align-items-center justify-content-end">
                            <ol class="breadcrumb m-0 ">
                                <li class="breadcrumb-item">Admin</li>
                                <li class="breadcrumb-item active" aria-current="page">FAQ</li>
                            </ol>
                        </nav>
                    </div>


                    <!-- Card Panels -->
                    <div class="container-fluid mt-3">
                        <div class="col-12 mb-4">
                            <div class="card">
                                <div class="card-header bg-light-kominfo d-flex justify-content-between align-items-center">
                                    <span> <i class="fa-solid fa-clipboard-question fa-fw"></i> &nbsp; FAQ</span>
                                    <span> <button class="btn btn-sm btn-success" onclick="openNewPanel()"> <i class="fa-solid fa-plus"></i> &nbsp; New</button></span>
                                </div>
                                <div class="card-body" style="min-height: 30vh">
                                    <div class="accordion" id="accordionExample">
                                        <?php if ($faqDataArray == []) {
                                            echo "Belum ada data";
                                        };
                                        foreach ($faqDataArray as $index => $faq) { ?>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingOne">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $faq['id']; ?>" aria-controls="collapse<?= $faq['id']; ?>">
                                                        <?= $faq['question']; ?>
                                                    </button>
                                                </h2>
                                                <div id="collapse<?= $faq['id']; ?>" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <div>
                                                            <button class="btn btn-sm btn-danger" onclick="deleteQuestion(<?= $faq['id']; ?>)"><i class="fa-solid fa-trash-can fa-fw"></i> Hapus</button>
                                                            <button class="btn btn-sm btn-success" onclick="openEditPanel(<?= $faq['id']; ?>)"><i class="fa-solid fa-pen-to-square"></i> Ubah</button>
                                                        </div>
                                                        <hr>

                                                        <?= $faq['answer']; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12" style="display: none" id="newQuestionPanel">
                            <div class="card">
                                <div class="card-header bg-light-kominfo d-flex justify-content-between align-items-center">
                                    <span> <i class="fa-solid fa-clipboard-question fa-fw"></i> &nbsp; Tambahkan Pertanyaan Dan Jawaban</span>
                                </div>
                                <div class="card-body" style="min-height: 30vh">
                                    <form action="faq/newQuestion" method="POST">
                                        <label for="newquestion">Pertanyaan Baru</label>
                                        <input required type="text" class="form-control mb-4 mt-1" id="newquestion" name="newquestion">
                                        <label for="newanswer" class="mb-1">Buat Jawaban Pertanyaan</label>
                                        <textarea name="newanswer" id="newanswer" class="form-control" cols="30" rows="10"></textarea>
                                        <span class="btn btn-secondary mt-4 me-2" onclick="closeNewPanel()">Batal</span>
                                        <button class="btn btn-kominfo mt-4"><i class="fa-solid fa-floppy-disk fa-fw"></i>&nbsp; Simpan</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-12" id="editPanel" style="display: none">
                            <div class="card">
                                <div class="card-header bg-light-kominfo d-flex justify-content-between">
                                    <span> <i class="fa-solid fa-clipboard-question fa-fw"></i> &nbsp; Ubah Pertanyaan & Jawaban</span>
                                </div>
                                <div class="card-body" style="min-height: 30vh">
                                    <form action="faq/editQuestion" method="POST">
                                        <input type="text" hidden id="updateid" name="id">
                                        <label for="editquestion">Pertanyaan</label>
                                        <input required type="text" class="form-control mb-4 mt-1" id="editquestion" name="editquestion">
                                        <label for="editanswer" class="mb-1">Jawaban</label>
                                        <textarea name="editanswer" id="editanswer" class="form-control" cols="30" rows="10"></textarea>
                                        <span class="btn btn-secondary mt-4 me-2" onclick="closeEditPanel()">Batal</span>
                                        <button class="btn btn-kominfo mt-4" type="submit"><i class="fa-solid fa-floppy-disk fa-fw"></i>&nbsp; Simpan Perubahan</button>
                                    </form>
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
    <script src="<?= ASSETS_URL ?>/js/notiflix-aio-3.2.5.min.js"></script>
    <script src="<?= ASSETS_URL ?>/datatables/datatables.min.js"></script>
    <script src="<?= ASSETS_URL ?>/js/custom.js"></script>

    <script>
        // Activate the sidebar item
        $('#sidebar-item-faq').addClass('sidebar-active').removeClass('sidebar-item');

        function openNewPanel() {
            $('#newQuestionPanel').show();
            closeEditPanel()
        }

        function closeNewPanel() {
            $('#newQuestionPanel').hide();
            $('#newquestion').val('')
        }

        function deleteQuestion(id) {
            Notiflix.Confirm.show(
                'Konfirmasi Penghapusan',
                'Hapus pertanyaan dari daftar FAQ',
                'Ya',
                'Tidak',
                () => {
                    $.post("faq/deleteQuestion", {
                            id: id,
                        })
                        .done(function(data) {
                            if (data == "deleted") {
                                Notiflix.Notify.success("Pertanyaan berhasil dihapus")
                                setTimeout(() => {
                                    location.replace('<?= HOST_URL ?>/admin/faq');
                                }, "300")
                            }
                        });
                },
                () => {}, {},
            )
        }

        function openEditPanel(id) {
            $.post("faq/getQuestion", {
                    id: id,
                })
                .done(function(data) {
                    var parsed = JSON.parse(data)
                    var question = parsed[0].question
                    var answer = parsed[0].answer
                    $('#editquestion').val(question)
                    tinymce.get("editanswer").setContent(answer);
                });

            $('#editPanel').show();
            $('#updateid').val(id)
            closeNewPanel();
        }

        function closeEditPanel(id) {
            $('#editPanel').hide();
        }
    </script>

    <?php
    if (isset($_COOKIE['newquestion']) && $_COOKIE['newquestion'] == 'success') {
        echo ' <script>
                Notiflix.Notify.success("Berhasil tersimpan")
            </script>';
    } else if (isset($_COOKIE['newquestion']) && $_COOKIE['newquestion'] == 'failed') {
        echo ' <script>
                Notiflix.Notify.failure("Terjadi kesalahan, silahkan coba lagi, jika gangguan berlanjut periksa koneksi server database")
            </script>';
    }
    if (isset($_COOKIE['editquestion']) && $_COOKIE['editquestion'] == 'success') {
        echo ' <script>
                Notiflix.Notify.success("Berhasil diubah")
            </script>';
    } else if (isset($_COOKIE['editquestion']) && $_COOKIE['editquestion'] == 'failed') {
        echo ' <script>
                Notiflix.Notify.failure("Terjadi kesalahan, silahkan coba lagi, jika gangguan berlanjut periksa koneksi server database")
            </script>';
    }
    setcookie("newquestion", "", time() - 3600);
    setcookie("editquestion", "", time() - 3600);
    ?>

</body>

</html>