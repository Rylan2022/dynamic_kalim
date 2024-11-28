<div class="container">
    <h2>Manage Data</h2>

    <!-- Table 1 -->
    <h3>Table 1</h3>
    <form action="<?= base_url('aboutDasCon/updateTable1'); ?>" method="post">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($table1 as $row): ?>
                <tr>
                    <td><?= $row['id']; ?></td>
                    <td>
                        <input type="text" name="name" value="<?= $row['name']; ?>" class="form-control">
                        <input type="hidden" name="id" value="<?= $row['id']; ?>">
                    </td>
                    <td>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </form>

    <!-- Table 2 -->
    <h3>Table 2</h3>
    <form action="<?= base_url('aboutDasCon/updateTable2'); ?>" method="post">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($table2 as $row): ?>
                <tr>
                    <td><?= $row['id']; ?></td>
                    <td>
                        <input type="text" name="description" value="<?= $row['description']; ?>" class="form-control">
                        <input type="hidden" name="id" value="<?= $row['id']; ?>">
                    </td>
                    <td>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </form>

    <!-- Table 3 -->
    <h3>Table 3</h3>
    <form action="<?= base_url('aboutDasCon/updateTable3'); ?>" method="post">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Details</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($table3 as $row): ?>
                <tr>
                    <td><?= $row['id']; ?></td>
                    <td>
                        <input type="text" name="details" value="<?= $row['details']; ?>" class="form-control">
                        <input type="hidden" name="id" value="<?= $row['id']; ?>">
                    </td>
                    <td>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </form>
</div>
