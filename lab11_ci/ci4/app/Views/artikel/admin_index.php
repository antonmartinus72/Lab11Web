<?= $this->include('template/admin_header'); ?>

<section id="wrapper">
    <section id="main">
        <form method="get" class="form-search">
            <input type="text" name="q" value="<?= $q; ?>" placeholder="Cari data">
            <input type="submit" value="Cari" class="btn btn-primary">
        </form>
        <table class="table table-bordered">
            <thead class="bg-info">
                <tr>
                    <th>ID</th>
                    <th>Judul</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($artikel) : foreach ($artikel as $row) : ?>
                        <tr>
                            <td><?= $row['id']; ?></td>
                            <td>
                                <b><?= $row['judul']; ?></b>
                                <p><small><?= substr($row['isi'], 0, 50); ?></small></p>
                            </td>
                            <td><?= $row['status']; ?></td>
                            <td>
                                <a class="btn btn-sm btn-primary" href="<?= base_url('/admin/artikel/edit/' . $row['id']); ?>">Ubah</a>
                                <a class="btn btn-sm btn-danger" onclick="return confirm('Yakin menghapus data?');" href="<?= base_url('/admin/artikel/delete/' . $row['id']); ?>">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach;
                else : ?>
                    <tr>
                        <td colspan="4">Belum ada data.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
            <tfoot class="bg-info">
                <tr>
                    <th>ID</th>
                    <th>Judul</th>
                    <th>Status</th>
                    <th>AKsi</th>
                </tr>
            </tfoot>
        </table>
        <?= $pager->links(); ?>
        <?= $this->include('template/admin_footer'); ?>