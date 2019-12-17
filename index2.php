<?php
$day = "Rabu";
$date = "Dua Belas";
$month = "Desember";
$year = "Dua Ribu Sembilan Belas";

$no_transaction = "SO1234";
$date_transaction = "12/12/2019";
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style/index2.css">

    <title>BAST</title>
</head>

<body>
    <div id="invoice">
        <div class="invoice overvflow-auto">
            <div style="min-width: 600px">
                <header>
                    <div class="row">
                        <div class="col" id="logoladang">
                            <img src="img/logoladang.png" alt="logo" style="width: 200px">
                        </div>
                        <div class="col" id="logosiplah">
                            <img src="img/siplah.png" alt="logo" style="width: 200px">
                        </div>
                    </div>

                </header>
                <main>
                    <div class="judul" id="judul">
                        <h1>BERITA ACARA SERAH TERIMA</h1>
                    </div>
                    <div class="mt-10">
                        <p>Pada hari ini <b><?php echo $day; ?></b>, tanggal <b><?php echo $date; ?></b> bulan <b><?php echo $month; ?></b> tahun <b><?php echo $year; ?></b>, sesuai dengan: </p>
                    </div>
                    <div class="nomor" id="nomortransaksi">
                        <div><span>Nomor Tagihan</span>: <?php echo $no_transaction; ?></div>
                        <div><span>Tanggal Transaksi</span>: <?php echo $date_transaction; ?> </div>
                    </div>
                    <br><br><br>
                    <p>Yang bertandatangan di bawah ini:</p>
                    <div>
                        <table class="tab2">
                            <tr>
                                <td>1.</td>
                                <td>Nama</td>
                                <td>:</td>
                                <td class="rowvalue">Tri cahyo</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Jabatan</td>
                                <td>:</td>
                                <td class="rowvalue">Direktur</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Nama Mitra Toko/ Penjual</td>
                                <td>:</td>
                                <td class="rowvalue">Punggawa</td>
                            </tr>
                            <tr>
                                <td colspan="4">
                                    <p>Sebagai pihak yang menyerahkan, selanjutnya disebut <b>PIHAK PERTAMA</b></p>
                                </td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>Nama</td>
                                <td>:</td>
                                <td class="rowvalue">Agus</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Jabatan</td>
                                <td>:</td>
                                <td class="rowvalue">Kepala Sekolah</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>NIP</td>
                                <td>:</td>
                                <td class="rowvalue">0882312312</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Nama Sekolah</td>
                                <td>:</td>
                                <td class="rowvalue">SMKN 1 Subuh</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Alamat Sekolah</td>
                                <td>:</td>
                                <td class="rowvalue">Jl. dadadadad</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>No. Telp</td>
                                <td>:</td>
                                <td class="rowvalue">081231132</td>
                            </tr>
                            <tr>
                                <td colspan="4">
                                    <p>Sebagai pihak yang menyerahkan, selanjutnya disebut <b>PIHAK KEDUA</b></p>
                                </td>
                            </tr>
                        </table>
                        <div>
                            <p>
                                PIHAK PERTAMA menyerahkan hasil pekerjaan <b>Transaksi Online Melalui SIPLah Toko Ladang</b> kepada PIHAK KEDUA, dan PIHAK KEDUA telah menerima hasil pekerjaan tersebut dalam jumlah yang lengkap dan kondisi yang baik sesuai dengan rincian berikut:
                            </p>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover table-striped" border="1">
                                <thead id="headertable">
                                    <td>Number</td>
                                    <td>Description</td>
                                    <td>Quantity</td>
                                    <td>Kondisi</td>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="row">1</td>
                                        <td>Samsung 9</td>
                                        <td>132</td>
                                        <td>Baik</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">2</td>
                                        <td>Samsung 1</td>
                                        <td>132</td>
                                        <td>Baik</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">3</td>
                                        <td>Samsung 9</td>
                                        <td>132</td>
                                        <td>Baik</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">4</td>
                                        <td>Samsung 1</td>
                                        <td>132</td>
                                        <td>Baik</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">3</td>
                                        <td>Samsung 9</td>
                                        <td>132</td>
                                        <td>Baik</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">4</td>
                                        <td>Samsung 1</td>
                                        <td>132</td>
                                        <td>Baik</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">3</td>
                                        <td>Samsung 9</td>
                                        <td>132</td>
                                        <td>Baik</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">4</td>
                                        <td>Samsung 1</td>
                                        <td>132</td>
                                        <td>Baik</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div>
                        <p>Dengan diterimanya Berita Acara Serah Terima ini PIHAK KEDUA akan melunasi pembayaran pada:</p>
                        <div>
                            <table class="tab2">
                                <tr>
                                    <td>Hari</td>
                                    <td>:</td>
                                    <td class="rowvalue">Rabu</td>
                                </tr>
                                <tr>
                                    <td>Tanggal</td>
                                    <td>:</td>
                                    <td class="rowvalue">12/12/2019</td>
                                </tr>
                            </table>
                        </div>
                        <br>
                        <div>
                            <p>Berita Acara Serah Terima ini berfungsi sebagai bukti serah terima hasil pekerjaan kepada PIHAK KEDUA, untuk selanjutnya dicatat pada buku penerimaan barang sekolah.</p>
                            <p>Demikian Berita Acara Serah Terima ini dibuat dengan sebenarnya untuk dipergunakan sebagaimana seharusnya.</p>
                        </div>
                    </div>
                    <div class="tandatangan">
                        <table class="table">
                            <tr>
                                <td>
                                    <div class="col text-center">
                                        <h6 class="font-weight-bold">PIHAK KEDUA</h6>
                                        <p>SMKN 1 Subuh</p>
                                        <div class="mt-18">
                                            <u class="font-weight-bold">agus</u>
                                            <p>NIP. .............................</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="col text-center">
                                        <h6 class="font-weight-bold">PIHAK KEDUA</h6>
                                        <p>Mitra Toko Punggawa</p>
                                        <div class="mt-18">
                                            <u class="font-weight-bold">Tri Cahyo</u>
                                            <p>Direktur</p>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div class="col text-center">
                                        <h6 class="font-weight-bold">TEAM PEMERIKSA</h6>
                                        <div class="mt-18">
                                            <u class="font-weight-bold">..................................</u>
                                            <p>NIP. .............................</p>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                </td>
                            </tr>
                        </table>
                    </div>
                </main>
            </div>
        </div>
    </div>




















    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>