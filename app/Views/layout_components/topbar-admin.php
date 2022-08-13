<div class="bg-light text-dark d-flex justify-content-between align-items-center w-100" style="height: 62px">
    <span type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarPanelOffCanvas" aria-controls="sidebarPanelOffCanvas" class="text-decoration-none text-dark h2 m-0 ms-3 d-lg-none">
        <i class="fa-solid fa-bars"></i>
    </span>
    <div class="ms-auto me-4 dropdown-center ">
        <span class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" role="button">
            <i class="fa-solid fa-user-tie me-1"></i> <?= $userDataArray['name']; ?>
        </span>
        <ul class="dropdown-menu bg-light mt-2 border-0">
            <li><a class="dropdown-item text-dark" href="#"><i class="fa-solid fa-user-gear"></i> &nbsp; My Account</a></li>
            <li><a class="dropdown-item text-dark" href="<?= HOST_URL ?>/logout"><i class="fa-solid fa-arrow-right-from-bracket"></i> &nbsp; Logout </a></li>
        </ul>
    </div>
</div>