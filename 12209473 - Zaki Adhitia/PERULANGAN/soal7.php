<?php 

$data = [
[
    'nama' => 'Zaki adhitia',
    'rombel' => 'PPLG XI-2',
    'rayon' =>  'Wikrama 2',
    'jk' => 'laki-laki'
],
[
    'nama' => 'Agus adhitia',
    'rombel' => 'PPLG XI-2',
    'rayon' =>  'Wikrama 5',
    'jk' => 'laki-laki'
],
[
    'nama' => 'Edun adhitia',
    'rombel' => 'PPLG XI-2',
    'rayon' =>  'Wikrama 1',
    'jk' => 'laki-laki'
] 
];


foreach ($data as $date) {
    echo "Nama siswa" . $date['nama'];
    echo "Rayon" . $date['nama'];
    echo "Rombel" . $date['nama'];
    echo "Nama siswa" . $date['nama'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php foreach ($data as $date) : ?><br>
        <li><?= "Nama : " . $date['nama'] ?></li>
        <li><?= "Rombel : " . $date['rombel'] ?></li>
        <li><?= "Rayon : " . $date['rayon'] ?></li>
        <li><?= "Jenis Kelamin : " . $date['jk'] ?></li>
        <?php endforeach ?>

</body>
</html>