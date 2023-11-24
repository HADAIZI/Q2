<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Ecommerce</title>
    <?= $this->include("mdashboard/bootstrap") ?>
    <link rel="stylesheet" href="<?= base_url() ?>css/main.css">
</head>
<body>
    <?= $this->include("mdashboard/navbar") ?>
    <?= $this->renderSection('content') ?>
</body>
</html>
<script src="<?= base_url() ?>js/main.js"></script>
