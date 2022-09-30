<?php
// array scalar
$m1 = ['nim'=>'01102201', 'nama'=>'Naufal Hamiz', 'nilai'=>98];
$m2 = ['nim'=>'01102202', 'nama'=>'Boy Junior', 'nilai'=>78];
$m3 = ['nim'=>'01102203', 'nama'=>'Mamad Jaka', 'nilai'=>80];
$m4 = ['nim'=>'01102204', 'nama'=>'Danang Eko', 'nilai'=>75];
$m5 = ['nim'=>'01102205', 'nama'=>'Mawar', 'nilai'=>60];
$m6 = ['nim'=>'01102206', 'nama'=>'Santoso', 'nilai'=>87];
$m7 = ['nim'=>'01102207', 'nama'=>'Sri maryati', 'nilai'=>46];
$m8 = ['nim'=>'01102208', 'nama'=>'Ahmad Budi', 'nilai'=>88];
$m9 = ['nim'=>'01102209', 'nama'=>'Nadia', 'nilai'=>94];
$m10 = ['nim'=>'01102210', 'nama'=>'Joko', 'nilai'=>58];

$ar_judul = ['No', 'Nim', 'Nama', 'Nilai', 'Keterangan', 'Grade', 'Predikat'];
// Array Assosiative
$mahasiswa = [$m1, $m2, $m3, $m4, $m5, $m6, $m7, $m8, $m9, $m10];
// agregate function
$jml = count($mahasiswa);
$jml_nilai = array_column($mahasiswa,'nilai');
$total_nilai = array_sum($jml_nilai); 
$max = max($jml_nilai);
$min = min($jml_nilai);
$rata2 = $total_nilai / $jml;
// keterangan
$keterangan = [
  'Jumlah Mahasiswa'=>$jml,
  'Nilai Tertinggi'=>$max,
  'Nilai Terendah'=>$min,
  'Nilai Rata-rata'=>$rata2
]


?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas 3 PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <h3 class="text-center">Daftar Mahasiswa</h3>
    <table class="table table-striped table-primary">
        <thead>
            <tr class="table-danger"">
                <?php
                foreach($ar_judul as $jdl){
                ?>
                <th><?= $jdl ?></th>
                <?php } ?>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach($mahasiswa as $mahasiswa){
              //ternary
              $ket = ($mahasiswa['nilai'] >=60)?"Lulus" : "Gagal";

              // Grade
            if ($mahasiswa['nilai'] >= 85 && $mahasiswa['nilai'] <= 100)$grade = 'A';
            else if($mahasiswa['nilai'] >= 75 && $mahasiswa['nilai'] < 85) $grade = 'B';
            else if($mahasiswa['nilai'] >= 60 && $mahasiswa['nilai'] < 75) $grade = 'C';
            else if($mahasiswa['nilai'] >= 30 && $mahasiswa['nilai'] < 60) $grade = 'D';
            else if($mahasiswa['nilai'] >= 0 && $mahasiswa['nilai'] < 30) $grade = 'E';
            else $grade = '';
            // Predikat
            switch ($grade) {
                case 'A': $predikat = 'Memuaskan'; break;
                case 'B': $predikat = 'Bagus'; break;
                case 'C': $predikat = 'Cukup'; break;
                case 'D': $predikat = 'Kurang'; break;
                case 'E': $predikat = 'Buruk'; break;
                default: $predikat = '';
            }
                          
            ?>
            <tr>
                <td><?= $no ?></td>
                <td><?= $mahasiswa['nim'] ?></td>
                <td><?= $mahasiswa['nama']?></td>
                <td><?= $mahasiswa['nilai']?></td>
                <td><?= $ket ?></td>
                <td><?= $grade?></td>
                <td><?= $predikat?></td>
                
            </tr>
            <?php $no++; } ?>
        </tbody>
        <tfoot>
          <?php
          foreach ($keterangan as $kt => $hasil) {
          ?>
          <tr class="table-info">
            <th colspan="6"><?= $kt ?></th>
            <th><?= $hasil ?></th>
          </tr>
          <?php } ?>
        </tfoot>
    </table>
  </body>
</html>