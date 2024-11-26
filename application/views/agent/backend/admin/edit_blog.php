<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .form-container {
            max-width: 700px;
            background: #fff;
            padding: 25px;
            margin: 50px auto;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        .form-container h1 {
            font-size: 2rem;
            font-weight: bold;
            color: #007bff;
            margin-bottom: 20px;
            text-align: center;
        }
        .btn-update {
            background-color: #007bff;
            color: #fff;
            border-radius: 30px;
            padding: 10px 20px;
            font-size: 1rem;
            transition: transform 0.2s;
        }
        .btn-update:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }
        .btn-cancel {
            background-color: #dc3545;
            color: #fff;
            border-radius: 30px;
            padding: 10px 20px;
            font-size: 1rem;
            transition: transform 0.2s;
        }
        .btn-cancel:hover {
            background-color: #c82333;
            transform: scale(1.05);
        }
    </style>
</head>
<body>
<div class="container">
    <div class="form-container">
        <h1>Edit Blog</h1>
        <form method="post" action="<?= base_url('admincontroller/edit/' . $blog['id']); ?>">
            <div class="mb-3">
                <label for="title" class="form-label">Blog Title</label>
                <input type="text" name="title" class="form-control" id="title" value="<?= $blog['title']; ?>" placeholder="Enter blog title" required>
            </div>
            <div class="mb-3">
                <label for="text" class="form-label">Blog Content</label>
                <textarea name="text" class="form-control" id="text" rows="6" placeholder="Enter blog content" required><?= $blog['text']; ?></textarea>
            </div>
            <div class="d-flex justify-content-between mt-4">
                <button type="submit" class="btn btn-update">Update Blog</button>
                <a href="<?= base_url('homecontroller'); ?>" class="btn btn-cancel">Cancel</a>
            </div>
        </form>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
