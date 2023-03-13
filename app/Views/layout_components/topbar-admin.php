<div class="bg-light text-dark d-flex justify-content-between align-items-center w-100" style="height: 62px">
    <span type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarPanelOffCanvas" aria-controls="sidebarPanelOffCanvas" class="text-decoration-none text-dark h2 m-0 ms-3 d-lg-none">
        <i class="fa-solid fa-bars"></i>
    </span>
    <div class="ms-auto me-4 dropdown-center ">
        <span class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" role="button">
            <i class="fa-solid fa-user-tie me-1"></i> <?= $userDataArray['name']; ?>
        </span>
        <ul class="dropdown-menu bg-light mt-2 border-0">
            <li><a class="dropdown-item text-dark" href="#change-password" role="button" data-bs-toggle="modal" data-bs-target="#changePassword"><i class="fa-solid fa-user-gear"></i> &nbsp; Ubah Password</a></li>
            <li><a class="dropdown-item text-dark" href="<?= base_url() ?>/logout"><i class="fa-solid fa-arrow-right-from-bracket"></i> &nbsp; Logout </a></li>
        </ul>
    </div>
</div>


<!-- Modal My Account Reset Password-->
<div class="modal fade" id="changePassword" tabindex="-1" data-bs-backdrop="static" aria-labelledby="changePasswordLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="changePasswordLabel"><i class="fa-solid fa-lock fa-fw"></i></i> &nbsp; Ubah Password</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="changePasswordBody">
                <div class="mb-3">
                    <label for="newuserpass" class="form-label">Password Baru</label>
                    <input autocomplete="new-password" required type="password" class="form-control" id="newuserpass" placeholder="Password Baru">
                </div>
                <div class="mb-3">
                    <label for="newuserpass2" class="form-label">Ulangi Password Baru</label>
                    <input autocomplete="new-password" required type="password" class="form-control" id="newuserpass2" placeholder="Ulangi Password Baru">
                </div>
                <input type="text" hidden id="useridonsession" value="<?= $userDataArray['id'] ?>">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button class="btn btn-kominfo" onclick="changePassword('<?= base_url() ?>')"><i class="fa-solid fa-floppy-disk fa-fw"></i> &nbsp;Simpan Perubahan</button>
            </div>
        </div>
    </div>
</div>