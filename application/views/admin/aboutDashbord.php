<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEJ+K+0oQ3L/dHqkDAry5RQf2Fcfq19XubN2TYw5M0ZnJ93fg0A1cB+arNx2n" crossorigin="anonymous">
    <style>
        body {
            padding-top: 70px; /* Space for fixed navbar */
        }

        .no-data {
            text-align: center;
            color: red;
            font-weight: bold;
        }

        .table th, .table td {
            vertical-align: middle;
        }

        .btn-save {
            background-color: #4CAF50;
            color: white;
            border-radius: 5px;
        }

        .btn-save:hover {
            background-color: #45a049;
        }

        .table-container {
            margin-bottom: 30px; /* Consistent spacing between tables */
        }

        .dashboard-title {
            margin-bottom: 30px;
            font-size: 2rem;
            font-weight: bold;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Dashboard</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav> -->

<div class="container mt-5">
    <h1 class="text-center dashboard-title">About Us Dashboard</h1>

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
                                            <input type="text" class="form-control" name="title_1" value="<?= htmlspecialchars($row['title_1']) ?>">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" name="description_1" value="<?= htmlspecialchars($row['description_1']) ?>">
                                        </td>
                                        <td>
                                            <input type="hidden" name="id" value="<?= htmlspecialchars($row['id']) ?>">
                                            <button type="submit" class="btn btn-save">Save</button>
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
                                            <input type="text" class="form-control" name="title_2" value="<?= htmlspecialchars($row['title_2']) ?>">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" name="description_2" value="<?= htmlspecialchars($row['description_2']) ?>">
                                        </td>
                                        <td>
                                            <input type="hidden" name="id" value="<?= htmlspecialchars($row['id']) ?>">
                                            <button type="submit" class="btn btn-save">Save</button>
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
                                            <input type="number" class="form-control" name="number_1" value="<?= htmlspecialchars($row['number_1']) ?>">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" name="title_4" value="<?= htmlspecialchars($row['title_4']) ?>">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" name="description_3" value="<?= htmlspecialchars($row['description_3']) ?>">
                                        </td>
                                        <td>
                                            <input type="hidden" name="id" value="<?= htmlspecialchars($row['id']) ?>">
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
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybpbYpU5t9ghG62YbFfX2Vt6tpMk3Imv3wT6qay0XtyWE3+No" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0FbFzDiB1OSr6K8trltnX46tuR4XtrVvHH5tM5l6MZJp4Gn6e" crossorigin="anonymous"></script>
</body>
</html>
