<?php
// Contoh data
$title = "Selamat Datang di Web2";
$description = "Ini adalah contoh tampilan PHP sederhana dengan HTML dan CSS.";
$menu = ["Beranda", "Tentang", "Kontak"];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f4f4f4; }
        header { background-color: #4CAF50; color: white; padding: 1rem; text-align: center; }
        nav { background-color: #333; }
        nav ul { list-style: none; margin: 0; padding: 0; display: flex; justify-content: center; }
        nav ul li { margin: 0 1rem; }
        nav ul li a { color: white; text-decoration: none; padding: 0.5rem; }
        nav ul li a:hover { background-color: #575757; border-radius: 4px; }
        main { padding: 2rem; text-align: center; }
        footer { background-color: #333; color: white; text-align: center; padding: 1rem; margin-top: 2rem; }
    </style>
</head>
<body>
    <header>
        <h1><?= $title ?></h1>
    </header>
    <nav>
        <ul>
            <?php foreach ($menu as $item): ?>
                <li><a href="#"><?= $item ?></a></li>
            <?php endforeach; ?>
        </ul>
    </nav>
    <main>
        <p><?= $description ?></p>
        <p>Ini adalah konten utama dari halaman.</p>
    </main>
    <footer>
        &copy; <?= date('Y') ?> Web1. All rights reserved.
    </footer>
</body>
</html>
