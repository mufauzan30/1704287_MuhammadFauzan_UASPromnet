<div class="container">
    <h1 class="mt-5">Motor</h1>
    <table class="table mt-4">
        <thead>
            <tr>
                <th scope="col">ID Motor</th>
                <th scope="col">Tipe Motor</th>
                <th scope="col">Harga Motor</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cicil as $m) : ?>
                <tr>
                    <th scope="row"><?= $m['id_cicil']; ?></th>
                    <td><?= $m['tenor']; ?></td>
                    <td><?= $m['bunga']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>