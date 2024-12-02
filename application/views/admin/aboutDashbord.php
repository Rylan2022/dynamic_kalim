<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .dashboard-title {
            margin-top: 100px;
            color: #007bff;
            text-align: center;
        }

        .table-container {
            background: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 30px;
        }

        .table th {
            background-color: #007bff;
            color: #fff;
            text-transform: uppercase;
        }

        .table td,
        .table th {
            vertical-align: middle;
        }

        .btn {
            border-radius: 30px;
            font-size: 0.9rem;
        }

        .btn:hover {
            transform: scale(1.05);
        }

        .btn-save {
            background-color: #28a745;
            color: #fff;
        }

        .btn-save:hover {
            background-color: #218838;
        }

        .btn-edit {
            background-color: #ffc107;
            color: #000;
        }

        .btn-edit:hover {
            background-color: #e0a800;
            color: #fff;
        }

        .btn-danger {
            background-color: #dc3545;
            color: #fff;
        }

        .btn-danger:hover {
            background-color: #c82333;
        }

        .no-data {
            text-align: center;
            font-weight: bold;
        }

        h2 {
            color: #007bff;
        }
    </style>
</head>

<body>
    <div class="container my-5">
        <!-- Page Title -->
        <h1 class="dashboard-title">About Us Dashboard</h1>

        <!-- Tables 1 -->
        <div class="table-container">
            <h2 class="text-center">Table 1</h2>
            <div class="table-responsive">
                <table class="table table-hover text-center">
                    <thead>
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
                                        <td><input type="text" class="form-control" name="title_1"
                                                value="<?= htmlspecialchars($row['title_1']) ?>" disabled></td>
                                        <td><input type="text" class="form-control" name="description_1"
                                                value="<?= htmlspecialchars($row['description_1']) ?>" disabled></td>
                                        <td>
                                            <input type="hidden" name="id" value="<?= htmlspecialchars($row['id']) ?>">
                                            <button type="button" class="btn btn-edit" onclick="toggleEdit(this)">Edit</button>
                                            <button type="submit" class="btn btn-save" disabled>Save</button>
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
        <!-- Tables 2 -->
        <div class="table-container">
            <h2 class="text-center">Table 2</h2>
            <div class="table-responsive">
                <table class="table table-hover text-center">
                    <thead>
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
                                                value="<?= htmlspecialchars($row['title_2']) ?>" disabled>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" name="description_2"
                                                value="<?= htmlspecialchars($row['description_2']) ?>" disabled>
                                        </td>
                                        <td>
                                            <input type="hidden" name="id" value="<?= htmlspecialchars($row['id']) ?>">
                                            <button type="button" class="btn btn-edit" onclick="toggleEdit(this)">Edit</button>
                                            <button type="submit" class="btn btn-save" disabled>Save</button>
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
        <!-- Tables 3 -->
        <div class="table-container">
            <h2 class="text-center">Table 3</h2>
            <div class="table-responsive">
                <table class="table table-hover text-center">
                    <thead>
                        <tr>
                            <th>Number-1</th>
                            <th>Title-4</th>
                            <th>Description-3</th>
                            <th>Action</th>
                    </thead>
                    <tbody>
                        <?php if (!empty($table3)): ?>
                            <?php foreach ($table3 as $row): ?>
                                <tr>
                                    <form method="POST" action="<?= base_url('aboutDasCon/updateTable3') ?>">
                                        <td>
                                            <input type="number" class="form-control" name="number_1"
                                                value="<?= htmlspecialchars($row['number_1']) ?>" disabled>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" name="title_4"
                                                value="<?= htmlspecialchars($row['title_4']) ?>" disabled>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" name="description_3"
                                                value="<?= htmlspecialchars($row['description_3']) ?>" disabled>
                                        </td>
                                        <td>
                                            <input type="hidden" name="id" value="<?= htmlspecialchars($row['id']) ?>">
                                            <button type="button" class="btn btn-edit" onclick="toggleEdit(this)">Edit</button>
                                            <button type="submit" class="btn btn-save" disabled>Save</button>
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
        <!-- Tables 4 -->
        <div class="table-container">
            <h2 class="text-center">Table 4</h2>
            <div class="table-responsive">
                <table class="table table-hover text-center">
                    <thead>
                        <tr>
                            <th>Title-5</th>
                            <th>Title-6</th>
                            <th>Description-4</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($table4)): ?>
                            <?php foreach ($table4 as $row): ?>
                                <tr>
                                    <form method="POST" action="<?= base_url('aboutDasCon/updateTable4') ?>"
                                        enctype="multipart/form-data">
                                        <td>
                                            <input type="text" class="form-control" name="title_5"
                                                value="<?= htmlspecialchars($row['title_5']) ?>" disabled>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" name="title_6"
                                                value="<?= htmlspecialchars($row['title_6']) ?>" disabled>
                                        </td>
                                        <td>
                                            <textarea class="form-control" name="description_4" rows="4"
                                                disabled><?= htmlspecialchars($row['description_4']) ?></textarea>
                                        </td>
                                        <td>
                                            <!-- Display the existing image -->
                                            <img src="<?= base_url($row['image_path']) ?>" alt="Image" width="100">
                                            <br>
                                            <input type="file" name="image" class="form-control" style="display: none;">
                                            <input type="hidden" name="image_path"
                                                value="<?= htmlspecialchars($row['image_path']) ?>">
                                        </td>
                                        <td>
                                            <input type="hidden" name="id" value="<?= htmlspecialchars($row['id']) ?>">
                                            <button type="button" class="btn btn-edit" onclick="toggleEdit(this)">Edit</button>
                                            <button type="submit" class="btn btn-save" disabled>Save</button>
                                        </td>
                                    </form>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="5" class="no-data">No data available</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Tables 5 -->
        <div class="table-container">
            <h2 class="text-center">Table 5</h2>
            <div class="table-responsive">
                <table class="table table-hover text-center">
                    <thead>
                        <tr>
                            <th>Title-6</th>
                            <th>Title-7</th>
                            <th>Description-5</th>
                            <th>Image</th>
                            <th>Title-8</th>
                            <th>Description-6</th>
                            <th>Title-9</th>
                            <th>Description-7</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($table5)): ?>
                            <?php foreach ($table5 as $row): ?>
                                <tr>
                                    <form method="POST" action="<?= base_url('aboutDasCon/updateTable5') ?>"
                                        enctype="multipart/form-data">
                                        <td>
                                            <input type="text" class="form-control" name="title_6"
                                                value="<?= htmlspecialchars($row['title_6']) ?>" disabled>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" name="title_7"
                                                value="<?= htmlspecialchars($row['title_7']) ?>" disabled>
                                        </td>
                                        <td>
                                            <textarea class="form-control" name="description_5" rows="6"
                                                disabled><?= htmlspecialchars($row['description_5']) ?></textarea>
                                        </td>
                                        <td>
                                            <!-- Display the existing image -->
                                            <img src="<?= base_url($row['Image_path']) ?>" alt="Image" width="100">
                                            <br>
                                            <input type="file" name="image" class="form-control" style="display: none;">
                                            <input type="hidden" name="image_path"
                                                value="<?= htmlspecialchars($row['Image_path']) ?>">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" name="title_8"
                                                value="<?= htmlspecialchars($row['title_8']) ?>" disabled>
                                        </td>
                                        <td>
                                            <textarea class="form-control" name="description_6" rows="6"
                                                disabled><?= htmlspecialchars($row['description_6']) ?></textarea>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" name="title_9"
                                                value="<?= htmlspecialchars($row['title_9']) ?>" disabled>
                                        </td>
                                        <td>
                                            <textarea class="form-control" name="description_7" rows="6"
                                                disabled><?= htmlspecialchars($row['description_7']) ?></textarea>
                                        </td>
                                        <td>
                                            <input type="hidden" name="id" value="<?= htmlspecialchars($row['id']) ?>">
                                            <button type="button" class="btn btn-edit" onclick="toggleEdit(this)">Edit</button>
                                            <button type="submit" class="btn btn-save" disabled>Save</button>
                                        </td>
                                    </form>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="5" class="no-data">No data available</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Tables 6.1 -->
        <div class="table-container">
            <h2 class="text-center">Table 6.1</h2>
            <div class="table-responsive">
                <table class="table table-hover text-center">
                    <thead>
                        <tr>
                            <th>Title-9</th>
                            <th>Title-10</th>
                            <th>Title-11</th>
                            <th>Title-12</th>
                            <th>Description-8</th>
                            <th>Title-13</th>
                            <th>Title-14</th>
                            <th>Description-9</th>
                            <th>Title-15</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($table6)): ?>
                            <?php foreach ($table6 as $row): ?>
                                <tr>
                                    <form method="POST" action="<?= base_url('aboutDasCon/updateTable6') ?>"
                                        enctype="multipart/form-data">
                                        <td>
                                            <input type="text" class="form-control" name="title_9"
                                                value="<?= htmlspecialchars($row['title_9']) ?>" disabled>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" name="title_10"
                                                value="<?= htmlspecialchars($row['title_10']) ?>" disabled>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" name="title_11"
                                                value="<?= htmlspecialchars($row['title_11']) ?>" disabled>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" name="title_12"
                                                value="<?= htmlspecialchars($row['title_12']) ?>" disabled>
                                        </td>
                                        <td>
                                            <textarea class="form-control" name="description_8" rows="4"
                                                disabled><?= htmlspecialchars($row['description_8']) ?></textarea>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" name="title_13"
                                                value="<?= htmlspecialchars($row['title_13']) ?>" disabled>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" name="title_14"
                                                value="<?= htmlspecialchars($row['title_14']) ?>" disabled>
                                        </td>
                                        <td>
                                            <textarea class="form-control" name="description_9" rows="4"
                                                disabled><?= htmlspecialchars($row['description_9']) ?></textarea>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" name="title_15"
                                                value="<?= htmlspecialchars($row['title_15']) ?>" disabled>
                                        </td>
                                        <td>
                                            <input type="hidden" name="id" value="<?= htmlspecialchars($row['id']) ?>">
                                            <button type="button" class="btn btn-edit" onclick="toggleEdit(this)">Edit</button>
                                            <button type="submit" class="btn btn-save" disabled>Save</button>
                                        </td>
                                    </form>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="5" class="no-data">No data available</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Tables 6.2 -->
        <div class="table-container">
            <h2 class="text-center">Table 6.2</h2>
            <div class="table-responsive">
                <table class="table table-hover text-center">
                    <thead>
                        <tr>
                            <th>Title-16</th>
                            <th>Description-10</th>
                            <th>Title-17</th>
                            <th>Percentage-1</th>
                            <th>Title-18</th>
                            <th>Percentage-2</th>
                            <th>Title-19</th>
                            <th>Percentage-3</th>
                            <th>Title-20</th>
                            <th>Percentage-4</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($table6)): ?>
                            <?php foreach ($table6 as $row): ?>
                                <tr>
                                    <form method="POST" action="<?= base_url('aboutDasCon/updateTable6') ?>"
                                        enctype="multipart/form-data">
                                        <td>
                                            <input type="text" class="form-control" name="title_16"
                                                value="<?= htmlspecialchars($row['title_16']) ?>" disabled>
                                        </td>
                                        <td>
                                            <textarea class="form-control" name="description_10" rows="4"
                                                disabled><?= htmlspecialchars($row['description_10']) ?></textarea>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" name="title_17"
                                                value="<?= htmlspecialchars($row['title_17']) ?>" disabled>
                                        </td>
                                        <td>
                                            <input type="number" class="form-control" name="percentage_1"
                                                value="<?= htmlspecialchars($row['percentage_1']) ?>" disabled>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" name="title_18"
                                                value="<?= htmlspecialchars($row['title_18']) ?>" disabled>
                                        </td>
                                        <td>
                                            <input type="number" class="form-control" name="percentage_2"
                                                value="<?= htmlspecialchars($row['percentage_2']) ?>" disabled>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" name="title_19"
                                                value="<?= htmlspecialchars($row['title_19']) ?>" disabled>
                                        </td>
                                        <td>
                                            <input type="number" class="form-control" name="percentage_3"
                                                value="<?= htmlspecialchars($row['percentage_3']) ?>" disabled>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" name="title_20"
                                                value="<?= htmlspecialchars($row['title_20']) ?>" disabled>
                                        </td>
                                        <td>
                                            <input type="number" class="form-control" name="percentage_4"
                                                value="<?= htmlspecialchars($row['percentage_4']) ?>" disabled>
                                        </td>
                                        <td>
                                            <input type="hidden" name="id" value="<?= htmlspecialchars($row['id']) ?>">
                                            <button type="button" class="btn btn-edit" onclick="toggleEdit(this)">Edit</button>
                                            <button type="submit" class="btn btn-save" disabled>Save</button>
                                        </td>
                                    </form>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="5" class="no-data">No data available</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function toggleEdit(button) {
            const row = button.closest('tr'); // Get the closest table row
            const textInputs = row.querySelectorAll('textarea, input[type="text"]'); // Find text and textarea inputs
            const fileInput = row.querySelector('input[type="file"]'); // Find file input
            const saveButton = row.querySelector('.btn-save'); // Find Save button

            if (button.textContent.trim() === 'Edit') {
                // Enable text inputs and display file input
                textInputs.forEach(input => input.disabled = false);
                if (fileInput) fileInput.style.display = 'block';
                saveButton.disabled = false;

                // Change button state to 'Cancel'
                button.textContent = 'Cancel';
                button.classList.replace('btn-edit', 'btn-danger');
            } else {
                // Disable text inputs and hide file input
                textInputs.forEach(input => input.disabled = true);
                if (fileInput) fileInput.style.display = 'none';
                saveButton.disabled = true;

                // Reset button state to 'Edit'
                button.textContent = 'Edit';
                button.classList.replace('btn-danger', 'btn-edit');
            }
        }
    </script>

</body>

</html>