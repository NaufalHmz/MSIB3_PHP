<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Data Pegawai</title>
  </head>
  <body>
    <h1 align='center'>Data Pegawai</h1>

    <div class="container px-5 my-5">
    <form id="contactForm" data-sb-form-api-token="API_TOKEN">
        <div class="form-floating mb-3">
            <label for="namaPegawai">Nama Pegawai</label>
            <input class="form-control" nama="namaPegawai" type="text" placeholder="Nama Pegawai" data-sb-validations="required" />
            <div class="invalid-feedback" data-sb-feedback="namaPegawai:required">Nama Pegawai is required.</div>
        </div>
        <div class="form-floating mb-3">
        <label for="agama">Agama</label>
            <select class="form-select" nama="agama" aria-label="Agama">
                <option value="--Pilih Agama--">--Pilih Agama--</option>
                <option value="Islam">Islam</option>
                <option value="Protestan">Protestan</option>
                <option value="Katolik">Katolik</option>
                <option value="Hindu">Hindu</option>
                <option value="Buddha">Buddha</option>
                <option value="Konghucu">Konghucu</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label d-block">Jabatan</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" nama="manager" type="radio" name="jabatan" data-sb-validations="" />
                <label class="form-check-label" for="manager">Manager</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" nama="asisten" type="radio" name="jabatan" data-sb-validations="" />
                <label class="form-check-label" for="asisten">Asisten</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" nama="kabag" type="radio" name="jabatan" data-sb-validations="" />
                <label class="form-check-label" for="kabag">Kabag</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" nama="staff" type="radio" name="jabatan" data-sb-validations="" />
                <label class="form-check-label" for="staff">Staff</label>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label d-block">Status</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" nama="menikah" type="radio" nama="status" data-sb-validations="" />
                <label class="form-check-label" for="menikah">Menikah</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" nama="belum" type="radio" name="status" data-sb-validations="" />
                <label class="form-check-label" for="belum">Belum</label>
            </div>
        </div>
        <div class="form-floating mb-3">
            <label for="jumlahAnak">Jumlah Anak</label>
            <input class="form-control" nama="jumlahAnak" type="text" placeholder="Jumlah Anak" data-sb-validations="required" />
        </div>
        <button class="btn btn-info btn-block my-4" nama="proses" type="submit">Simpan</button>
    </form>
</div>


<?php 
        $nama = $_post['namaPegawai'];
        $agama = $_post['agama'];
        $jabatan = $_post['jabatan'];
        $status = $post_['status'];
        $jumlahanak = $_post['jumlahanak'];
        $tombol = $_post['proses'];

        //tentukan gaji jabatan
        switch ($jabatan) {
            case 'manager' : $gajipokok = 20000000; break;
            case 'asisten' : $gajipokok = 15000000; break;
            case 'kabag' : $gajipokok = 1000000; break;
            case 'staff' : $gajipokok = 4000000; break;
            default: $gajipokok = '';
        }

        echo $tunjanganjabatan = 0.20 * $gajipokok;
        echo $gajikotor = $tunjangankeluarga + $tunjanganjabatan + $gajipokok;

        if($jumlahanak >= 2) $tunjangankeluarga = 0.05 * $gapok  ;
        else if($jumlahanak >= 3 && $jumlahanak < 5) $tunjangankeluarga = 0.10 * $gapok ;
        else if($jumlahanak <= 5 ) $tunjangankeluarga = 0.15 * $gajipokok ;
        else $tunjangankeluarga = '';

        echo $gajikotor = $tunjangankeluarga + $tunjanganjabatan + $gajipokok;
        //tenary
        $zakatprofesi($Islam <= 6000000  )? $gajikotor - 0.025 : 0;  ; 


        
        echo $takehomepay = $gajikotor - $zakatprofesi;
        if(isset($tombol)){ ?>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Nama Pegawai</th>
                    <th scope="col">Jabatan</th>
                    <th scope="col">Agama</th>
                    <th scope="col">Status</th>
                    <th scope="col">Jumlah Anak</th>
                    <th scope="col">Gaji Pokok</th>
                    <th scope="col">Gaji Kotor</th>
                    <th scope="col">Tunjangan Keluarga</th>
                    <th scope="col">Tunjangan Jabatan</th>
                    <th scope="col">Zakat Profesi</th>
                    <th scope="col">Take Home Pay</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td> <?= $nama ?></td>
                    <td> <?= $jabatan ?></td>
                    <td> <?= $agama ?></td>
                    <td> <?= $status ?></td>
                    <td> <?= $jumlahanak ?></td>
                    <td> <?= $gajipokok ?></td>
                    <td> <?= $gajikotor ?></td>
                    <td> <?= $tunjangankeluarga ?></td>
                    <td> <?= $tunjanganjabatan ?></td>
                    <td> <?= $zakatprofesi ?></td>
                    <td> <?= $takehomepay ?></td>
                    </tr>
                </tbody>
            </table>
        <?php }?>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>