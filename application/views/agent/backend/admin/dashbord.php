<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .table-container {
            background: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }
        .table th {
            background-color: #007bff;
            color: #fff;
            text-transform: uppercase;
        }
        .table td, .table th {
            vertical-align: middle;
        }
        .btn {
            border-radius: 30px;
            font-size: 0.9rem;
        }
        .btn:hover {
            transform: scale(1.05);
        }
        .actions {
            display: flex;
            gap: 10px;
            justify-content: center;
        }
        .btn-add {
            background-color: #28a745;
            color: #fff;
        }
        .btn-edit {
            background-color: #ffc107;
            color: #000;
        }
        .btn-delete {
            background-color: #dc3545;
            color: #fff;
        }
        .btn-add:hover {
            background-color: #218838;
        }
        .btn-edit:hover {
            background-color: #e0a800;
            color: #fff;
        }
        .btn-delete:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
<div class="container my-5">
    <div class="text-center mb-4">
        <h1 class="text-primary">Dashboard</h1>
        <p class="text-muted">Manage your items with ease</p>
    </div>
    <div class="mb-3 text-end">
        <a href="<?= base_url('admincontroller/add_blog'); ?>" class="btn btn-add btn-sm">Add New Item</a>
    </div>
    <div class="table-container p-3">
        <table class="table table-hover text-center">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Text</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($items as $item): ?>
                <tr>
                    <td><?= $item['id']; ?></td>
                    <td><?= $item['title']; ?></td>
                    <td><?= $item['text']; ?></td>
                    <td class="actions">
                        <a href="<?= base_url('admincontroller/edit/'.$item['id']); ?>" class="btn btn-edit btn-sm">Edit</a>
                        <a href="<?= base_url('admincontroller/delete/'.$item['id']); ?>" class="btn btn-delete btn-sm" onclick="return confirm('Are you sure?');">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
