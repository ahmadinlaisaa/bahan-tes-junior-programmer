<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= base_url('/tailwind/output.css') ?>" rel="stylesheet">
    
    <title>Tes Junior Programmer</title>
</head>
<body>
    <input type="hidden" id="api-password" value="<?= md5("bisacoding-12-06-23") ?>">

    <nav class="bg-cyan-600 border-gray-200 dark:bg-gray-900">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <p class="text-2xl font-bold text-white">Tes Junior Programmer</p>
        </div>
    </nav>

    <div class="p-3">
        <?= $this->renderSection('content') ?>
    </div>

    <!-- Modal untuk delete -->
    <?= $this->include('partials/deleteModal') ?>

    <!-- Modal untuk update -->
    <?= $this->include('partials/updateModal') ?>

    <!-- Modal untuk loading -->
    <?= $this->include('partials/loadingmodal') ?>
    
    <script src="<?= base_url('\jquery\jquery.min.js') ?>"></script>
    <script src="<?= base_url('\js\md5.min.js') ?>"></script>
    <script src="<?= base_url('\js\script.js') ?>"></script>
    <script src="<?= base_url('\js\flowbite.min.js') ?>"></script>
    <!-- jQuery Modal -->
    <script src="<?= base_url('\jquery\jquery_modal.js') ?>"></script>
    
    <link rel="stylesheet" href="<?= base_url('\css\jquery_modal.min.css') ?>" />
</body>
</html>