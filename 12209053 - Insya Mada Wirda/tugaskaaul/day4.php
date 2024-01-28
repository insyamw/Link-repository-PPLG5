<?php 
// soal no1 
// $sekolah = "wikrama";
// echo substr($sekolah, -2,1);

// soal no 2
// $i = 1;
// while ($i <= 10) {
//   echo $i;
//   echo "<br>";
//   $i = $i + 1;
// }

// soal no 3
// for ($i = 10;
// $i >= 1; $i--) {
//   echo $i;
// }

// soal no 4
// for ($i =1 ;$i <= 6; $i++){
//     echo "<h$i >tag $i </h$i>";
// }

// soal no 5
// $number = 20;
// for($i = 1;  $i <=30; $i++){
//     if ($i %  4 == 0){
//         echo "$i, ";
//     }
// }

// soal no 6
// $hasil = 0;
// for ($i = 5 ; $i <= 25; $i += 5){
//     if (225 % $i == 0){
//         $hasil++;
//     }
// }
// echo $hasil;


// soal no 7
// $student = [
    //     [
    //         "nama" => "Andi",
    //         "rombel" => "PPLG XI - 1",
    //         "rayon" => "Ciawi 4",
    //         "jk" => "L"
    //     ], 
    //     [
    //         "nama" => "Sasa",
    //         "rombel" => "PPLG XI - 6",
    //         "rayon" => "Sukasari 1",
    //         "jk" => "P"
    //     ],
    //     [
    //         "nama" => "Lala",
    //         "rombel" => "PPLG XI - 3",
    //         "rayon" => "Cisarua 3",
    //         "jk" => "P"
    //     ],
    //     [
    //         "nama" => "Beni",
    //         "rombel" => "PPLG XI - 2",
    //         "rayon" => "Cicurug 2",
    //         "jk" => "L"
    //     ],
       
    // ]

    // foreach( $student as $std) :
    // <br>   <b>Nama = </b><?= $std["nama"]
    // <br>   <b>Rombel = </b><?= $std ["rombel"]; 
    // <br>   <b>Rayon = </b><?= $std ["rayon"]; 
    // <br>   <b>Jk = </b><?= $std ["jk"]; 
    // <br>
    //  endforeach ;
       

// soal no 8
// $kumpulanAngka = [75,77,87,70,90,81,69,87,66];
// $angkaKompeten = [];
// $angkaBk = [];
// $kriteria_kompeten = 75;

// foreach ($kumpulanAngka as $nilai) {
//     if ($nilai >= $kriteria_kompeten) {
//         $angkaKompeten[] = $nilai;
//     } else {
//         $angkaBk[] = $nilai;
//     }
// // }
// echo "kompeten : " . implode(', ', $angkaKompeten) . "<br>";
// echo "tidak kompeten : " . implode(', ', $angkaBk) . "<br>";


// soal no 9
// for ($i = 1; $i <= 3;$i++){
//     for ($j =1; $j <=10; $j++){
//         $hasil = $i * $j;
//         echo "$i x$j = $hasil <br>";
//     }
// // };
 

// soal no 10
$barang = [
    [
        'nama_barang'=>'pasta gigi',
        'harga_barang'=>'18000 ',
        'jumlah_beli'=>'1 ',
    ],
    [
    
        'nama_barang'=>'sabun mandi',
        'harga_barang'=>'5000 ',
        'jumlah_beli'=>'3 ',
    ],
    [
    
        'nama_barang'=>'aloe vera sheet mask ',
        'harga_barang'=>'15000 ',
        'jumlah_beli'=>'5 ',
    ],
];

$totalbayar = 0;

foreach($barang as $bayar){
    $harga = $bayar['harga_barang'];
    $jumlah = $bayar['jumlah_beli'];
    $totalbayar += $harga * $jumlah;
}
echo " total yang perlu oleh beni : Rp." . number_format($totalbayar,0,',',',');

// soal no 11
// $bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
// $bil2 = [77, 99, 55, 81, 45, 90, 91, 98];
// foreach ($bil1 as $b1) {
//     if (in_array($b1, $bil2)) {
//         $bil_sama[] = $b1;
//     }
// }
// $bil_sama_string = implode(", ", $bil_sama);

// foreach ($bil2 as $b2) {
//     if (!in_array($b2, $bil_sama)) {
//         $bil_beda[] = $b2;
//     }
// }
// $bil_beda_string = implode(", ", $bil_beda);

// echo "bilangansama : $bil_sama_string";
// echo "<br>";
// echo "bilangan yang beda: $bil_beda_string";


// soal no 12
// $barang = [
//     [
//         'nama' => 'Ban', 'diskon' => '10'
//     ],
//     [
//         'nama' => 'oli mesin'
//     ],
//     [
//         'nama' => 'kampas rem'
//     ],
//     [
//         'nama' => 'busi', 'diskon' => '9'
//     ],
//     [
//         'nama' => 'akumulator', 'diskon' => '7'
//         ]
// ];

// foreach ($barang as $item) {
//     if (isset($item['diskon'])) {
//         echo "Nama Barang : " . $item['nama'] . ", Diskon: " . $item['diskon'] . "<br>";
//     }
// }

// soal no 13
// $data = [
//     ['nama' => 'andi', 'tahun' => '2008'],
//     ['nama' => 'beni', 'tahun' => '2001'],
//     ['nama' => 'dani', 'tahun' => '2004'],
//     ['nama' => 'eko', 'tahun' => '2006']
// ];

// foreach ($data as $person) {
//     $tahun = intval($person['tahun']); // Mengonversi tahun menjadi integer

//     if (($tahun % 4 == 0 && $tahun % 100 != 0) || ($tahun % 400 == 0)) {
//         echo "Nama: " . $person['nama'] . ", Tahun Lahir: " . $person['tahun'] . " (Tahun Kabisat)<br>";
//     }
// }

// soal no 14
$students = [
    [
        'nama' => 'Andi',
        'nilai' => [80, 78, 82, 78, 88],
    ],
    [
        'nama' => 'Beni',
        'nilai' => [86, 70, 80, 85, 81],
    ],
    [
        'nama' => 'Danii',
        'nilai' => [83, 91, 70, 73, 81],
    ],
    [
        'nama' => 'Eko',
        'nilai' => [89, 85, 84, 86, 88],
    ],
];

foreach ($students as $student) {
    $nama = $student['nama'];
    $nilai = $student['nilai'];
    
    $totalNilai = array_sum($nilai);

    echo "Nama: $nama, Jumlah Nilai: $totalNilai<br>";
}