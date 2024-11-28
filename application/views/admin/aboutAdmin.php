<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .dashboard-title {
            margin-top: 100px;
        }

        .table-container {
            margin-bottom: 30px;
        }

        .no-data {
            text-align: center;
            font-weight: bold;
        }

        .btn-save {
            background-color: #007bff;
            color: white;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <!-- Page Title -->
        <h1 class="text-center dashboard-title">About Us Dashboard</h1>

        <!--  -->


        <div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        DataTable Example
    </div>
    <div class="card-body">
        <!-- Table 1 -->
        <div class="row table-container">
            <div class="col-12">
                <h2 class="my-3 text-center">Table 1</h2>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th>Title-1</th>
                                <th>Description-1</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($table1)): ?>
                                <?php foreach ($table1 as $row): ?>
                                    <tr>
                                        <form method="POST" action="<?= base_url('aboutDasCon/updateTable1') ?>">
                                            <td>
                                                <input type="text" class="form-control" name="title_1"
                                                    value="<?= htmlspecialchars($row['title_1']) ?>"disabled>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="description_1"
                                                    value="<?= htmlspecialchars($row['description_1']) ?>"disabled>
                                            </td>
                                            <td>
                                                <input type="hidden" name="id" value="<?= htmlspecialchars($row['id']) ?>">
                                                <button type="button" class="btn btn-edit" onclick="toggleEdit(this)">Edit</button>
                                                <button type="submit" class="btn btn-save"disabled>Save</button>
                                            </td>
                                        </form>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="3" class="no-data">No data available</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Table 2 -->
        <div class="row table-container">
            <div class="col-12">
                <h2 class="my-3 text-center">Table 2</h2>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th>Title-2</th>
                                <th>Description-2</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($table2)): ?>
                                <?php foreach ($table2 as $row): ?>
                                    <tr>
                                        <form method="POST" action="<?= base_url('aboutDasCon/updateTable2') ?>">
                                            <td>
                                                <input type="text" class="form-control" name="title_2"
                                                    value="<?= htmlspecialchars($row['title_2']) ?>"disabled>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="description_2"
                                                    value="<?= htmlspecialchars($row['description_2']) ?>"disabled>
                                            </td>
                                            <td>
                                                <input type="hidden" name="id" value="<?= htmlspecialchars($row['id']) ?>">
                                                <button type="button" class="btn btn-edit"onclick="toggleEdit(this)">Edit</button>
                                                <button type="submit" class="btn btn-save"disabled>Save</button>
                                            </td>
                                        </form>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="3" class="no-data">No data available</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Table 3 -->
        <div class="row table-container">
            <div class="col-12">
                <h2 class="my-3 text-center">Table 3</h2>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th>Number-1</th>
                                <th>Title-4</th>
                                <th>Description-3</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($table3)): ?>
                                <?php foreach ($table3 as $row): ?>
                                    <tr>
                                        <form method="POST" action="<?= base_url('aboutDasCon/updateTable3') ?>">
                                            <td>
                                                <input type="number" class="form-control" name="number_1"
                                                    value="<?= htmlspecialchars($row['number_1']) ?>"disabled>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="title_4"
                                                    value="<?= htmlspecialchars($row['title_4']) ?>"disabled>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="description_3"
                                                    value="<?= htmlspecialchars($row['description_3']) ?>"disabled>
                                            </td>
                                            <td>
                                                <input type="hidden" name="id" value="<?= htmlspecialchars($row['id']) ?>">
                                                <button type="button" class="btn btn-edit"onclick="toggleEdit(this)">Edit</button>
                                                <button type="submit" class="btn btn-save">Save</button>
                                            </td>
                                        </form>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="4" class="no-data">No data available</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

                <!-- Table 24-->
                <div class="row table-container">
            <div class="col-12">
                <h2 class="my-3 text-center">Table 4</h2>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th>Title-5</th>
                                <th>Title-6</th>
                                <th>Description-4</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($table4)): ?>
                                <?php foreach ($table4 as $row): ?>
                                    <tr>
                                        <form method="POST" action="<?= base_url('aboutDasCon/updateTable4') ?>">
                                            <td>
                                                <input type="text" class="form-control" name="title_5"
                                                    value="<?= htmlspecialchars($row['title_5']) ?>"disabled>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="title_6"
                                                    value="<?= htmlspecialchars($row['title_6']) ?>"disabled>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="description_4"
                                                    value="<?= htmlspecialchars($row['description_4']) ?>"disabled>
                                            </td>
                                            <td>
                                                <input type="hidden" name="id" value="<?= htmlspecialchars($row['id']) ?>">
                                                <button type="button" class="btn btn-edit"onclick="toggleEdit(this)">Edit</button>
                                                <button type="submit" class="btn btn-save"disabled>Save</button>
                                            </td>
                                        </form>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="3" class="no-data">No data available</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function toggleEdit(button) {
            const row = button.closest('tr');
            const inputs = row.querySelectorAll('input[type="text"]');
            const saveButton = row.querySelector('.btn-save');

            if (button.textContent === 'Edit') {
                // Enable editing
                inputs.forEach(input => input.disabled = false);
                saveButton.disabled = false;
                button.textContent = 'Cancel';
                button.classList.replace('btn-edit', 'btn-danger');
            } else {
                // Cancel editing
                inputs.forEach(input => input.disabled = true);
                saveButton.disabled = true;
                button.textContent = 'Edit';
                button.classList.replace('btn-danger', 'btn-edit');
            }
        }
    </script>
</body>

</html>