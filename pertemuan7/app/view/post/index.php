<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="row my-3">
        <div class="col-lg-12">
            <?php Flasher::flash(); ?>
        </div>
    </div>
    <div class="d-flex mb-3 justify-content-between">
        <h3>Data postingan</h3>
        <button class="btn btn-primary">+ Tambah</button>
    </div>
    <table class="table table-hover">
    <thead>
        <tr class="table-dark">
        <th scope="col">No</th>
        <th scope="col">Judul</th>
        <th scope="col">Kategori</th>
        <th scope="col">Tanggal dibuat</th>
        <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Postingan 1</td>
            <td>Hiburan</td>
            <td>08 Oktober 2022</td>
            <td>
                <div class="d-flex gap-2">
                    <button class="btn btn-success">Edit</button>
                    <button class="btn btn-danger">Delete</button>
                </div>
            </td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Postingan 2</td>
            <td>Teknologi</td>
            <td>10 Oktober 2022</td>
            <td>
                <div class="d-flex gap-2">
                    <button class="btn btn-success">Edit</button>
                    <button class="btn btn-danger">Delete</button>
                </div>
            </td>
        </tr>
        <tr>
        </tr>
    </tbody>
    </table>
</main>