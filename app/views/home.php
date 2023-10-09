<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JCrd</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #494847;
            color: #fff;
            text-align: center;
            padding: 10px;
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body style="background-color: #efdecd;">
<div class="container mt-4">
<div class="card p-4" style="background-color: #c0beb9">
<div class="container mt-4">
<div class="center">
<div class="col-md-12">
<div class="row">
<div class="col-md-6 mb-3">
    <header>
        <h3>Student Management</h3>
    </header>
    <div class="container mt-4">
        <form action="/<?= (isset($edit['id'])) ? "submitedit/" . $edit['id'] : "submit" ?>" method="post">
            <div class="container mt-4">
            <div class="card p-4">
            <div class="center">
            <div class="col-md-6 mb-3">
            <label>Name:&nbsp;&nbsp;</label>
            <input type="text" name="Name" required 
            value="<?= (isset($edit['id'])) ? $edit['Name'] : "" ?>">
            </div>
            <div class="col-md-6 mb-3">
            <label>Age:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="text" name="Age" required
            value="<?= (isset($edit['id'])) ? $edit['Age'] : "" ?>">
            </div>
            <div class="mb-3">
            <label>Address:</label>
            <input type="text" name="Address" required
            value="<?= (isset($edit['id'])) ? $edit['Address'] : "" ?>">
            </div>
            <input class="btn btn-primary" style="background-color: #cc6666" type="submit" value="<?= (isset($edit['id'])) ? "Update" : "Submit" ?>">
</div>
</div>
</div>
</div>
</div>
       
        </form>
        <header>
        <h5>Scholars Listing</h5>
        </header>
        <table class="table table-striped mt-3">
            <tr>
                <th>Student Name</th>
                <th>Age</th>
                <th>Address</th>
                <th></th>
            </tr>
            <?php foreach ($student_info as $pr): ?>
                <tr>
                    <td>
                        <?= $pr['Name'] ?>
                    </td>
                    <td>
                        <?= $pr['Age'] ?>
                    </td>
                    <td>
                        <?= $pr['Address'] ?>
                    </td>
                    <td class="action-buttons">
                        <a href="/delete/<?= $pr['id'] ?>" class="btn btn-primary" style="background-color: #0892d0">Delete</a>
                        <a href="/edit/<?= $pr['id'] ?>" class="btn btn-danger" style="background-color: #ff355e">Edit</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </table>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script></div>
</div>
</div>
</div>
</div>
</body>

</html>