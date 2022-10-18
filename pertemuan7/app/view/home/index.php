<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="row mt-3">
        <div class="col-lg-12">
            <?php Flasher::flash(); ?>
        </div>
    </div>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Selamat Datang, <?= $_SESSION['first_name'] . ' ' . $_SESSION['last_name'] ?></h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
            </div>
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar" class="align-text-bottom"></span>
                This week
            </button>
        </div>
    </div>

    <canvas class="my-5 w-100" id="myChart" width="900" height="380"></canvas>

    <h4 class="fw-semibold mb-4">Data Pengguna</h2>
    <div class="table-responsive text-center">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($data['name'] as $user): ?>
                <tr>
                    <td><?= $user['id'] ?></td>
                    <td><?= $user['first_name'] . " " . $user['last_name'] ?></td>
                    <td><?= $user['username'] ?></td>
                    <td><?= $user['email'] ?></td>
                    <td>
                        <div class="d-flex gap-2 justify-content-center">
                            <button class="btn btn-success">Edit</button>
                            <button class="btn btn-danger">Delete</button>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>        
            </tbody>
        </table>
    </div>
</main>