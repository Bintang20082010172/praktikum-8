<?php
    include 'koneksi.php';

    if(isset($_POST['submit'])){
        
        //proses insert data kedatabase
        $insert = mysqli_query($conn, "INSERT INTO pendaftaran VALUES(
            '".$_POST['JP']."',
            '".$_POST['Tgl_msk']."',
            '".$_POST['NIS']."',
            '".$_POST['Nmr_psrt']."',
            '".$_POST['Paud']."',
            '".$_POST['TK']."',
            '".$_POST['No_seri_SKHUN']."',
            '".$_POST['No_seri_Ijazah']."',
            '".$_POST['Hoby']."',
            '".$_POST['Cita-cita']."',
            '".$_POST['Nama']."',
            '".$_POST['Jns_klm']."',
            '".$_POST['NISN']."',
            '".$_POST['NIK']."',
            '".$_POST['tmp_lhr']."',
            '".$_POST['tgl']."',
            '".$_POST['agama']."',
            '".$_POST['bth_khusus']."',
            '".$_POST['alm_jln']."',
            '".$_POST['RT']."',
            '".$_POST['RW']."',
            '".$_POST['nm_dusun']."',
            '".$_POST['nm_klr']."',
            '".$_POST['nm_kcm']."',
            '".$_POST['kd_pos']."',
            '".$_POST['tmp_tinggal']."',
            '".$_POST['Transportasi']."',
            '".$_POST['nmr_tlp']."',
            '".$_POST['no_hp']."',
            '".$_POST['email']."',
            '".$_POST['kps/pkh/kip']."',
            '".$_POST['no_kps/pkh/kip']."',
            '".$_POST['kwn']."',
            '".$_POST['nm_ayh']."',
            '".$_POST['thn_lhr_ayh']."',
            '".$_POST['pendidikan_ayh']."',
            '".$_POST['pekerjaan_ayah']."',
            '".$_POST['penghasilan_ayh']."',
            '".$_POST['bth_khs_ayh']."',
            '".$_POST['nm_ibu']."',
            '".$_POST['thn_lhr_ibu']."',
            '".$_POST['pendidikan_ibu']."',
            '".$_POST['pekerjaan_ibu']."',
            '".$_POST['penghasilan_ibu']."',
            '".$_POST['bth_khs_ibu']."'     
        )");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Siswa Baru</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- formulir pendaftaran -->
    <section class="box-formulir">
        <h2><center>Formulir Peserta Didik</center></h2>
        <br>
        <h3>Registrasi Peserta Didik</h3>
    
        <!-- bagian form -->
        <form action="" method="post">
            <div class="box">
                <table border="0" class="table-form">
                    <tr>
                        <td>Jenis Pendaftaran</td>
                        <td>:</td>
                        <td>
                            <select class="input-control" name="JP">
                               <option value="Siswa_Baru">Siswa baru</option>
                               <option value="Pindahan">Pindahan</option> 
                            </select>    
                        </td>
                    </tr>

                    <tr>
                        <td>Tanggal Masuk Sekolah</td>
                        <td>:</td>
                        <td>
                           <input type="date" name="Tgl_msk" class="input-control">
                        </td>
                    </tr>

                    <tr>
                        <td>NIS</td>
                        <td>:</td>
                        <td>
                           <input type="text" name="NIS" class="input-control">
                        </td>
                    </tr>

                    <tr>
                        <td>Nomor Peserta Ujian</td>
                        <td>:</td>
                        <td>
                           <input type="text" name="Nmr_psrt" class="input-control">
                        </td>
                    </tr>

                    <tr>
                        <td>Apakah pernah PAUD</td>
                        <td>:</td>
                        <td>
                           <input type="radio" name="Paud" class="input-control" value="ya">Ya &emsp;
                           <input type="radio" name="Paud" class="input-control" value="tidak">Tidak
                        </td>
                    </tr>
                    
                    <tr>
                        <td>Apakah pernah TK</td>
                        <td>:</td>
                        <td>
                           <input type="radio" name="TK" class="input-control" value="ya">Ya &emsp;
                           <input type="radio" name="TK" class="input-control" value="tidak">Tidak
                        </td>
                    </tr>
                    
                    <tr>
                        <td>No.Seri SKHUN </td>
                        <td>:</td>
                        <td>
                        <input type="text" name="No_seri_SKHUN" class="input-control">
                        </td>
                    </tr>

                    <tr>
                        <td>No.Seri Ijazah</td>
                        <td>:</td>
                        <td>
                        <input type="text" name="No_seri_Ijazah" class="input-control">
                        </td>
                    </tr>

                    <tr>
                        <td>Hobby</td>
                        <td>:</td>
                        <td>
                            <select class="input-control" name="Hoby">
                               <option value="Olah_raga">Olah_raga</option>
                               <option value="Kesenian">Kesenian</option>
                               <option value="Membaca">Membaca</option>
                               <option value="Menulis">Menulis</option> 
                               <option value="Travelin">Travelin</option>  
                            </select>    
                        </td>
                    </tr>

                    <tr>
                        <td>Cita-cita</td>
                        <td>:</td>
                        <td>
                            <select class="input-control" name="Cita-cita">
                               <option value="PNS">PNS</option>
                               <option value="TNI/POLRI">TNI/POLRI</option>
                               <option value="Guru">Guru</option>
                               <option value="Dokter">Dokter</option> 
                               <option value="Politikus">Politikus</option>  
                               <option value="Wiraswasta">Wiraswasta</option>
                            </select>    
                        </td>
                    </tr>
                
                </table>
            </div>
        <h3>Data Pribadi</h3>
            <div class="box">
                <table border="0" class="table-form">
                    <tr>
                        <td>Nama Lengkap</td>
                        <td>:</td>
                        <td>
                        <input type="text" name="Nama" class="input-control">
                        </td>
                    </tr>

                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td>
                           <input type="radio" name="Jns_klm" class="input-control" value="laki-laki">laki-laki &emsp;
                           <input type="radio" name="Jns_klm" class="input-control" value="perempuan">perempuan
                        </td>
                    </tr>

                    <tr>
                        <td>NISN</td>
                        <td>:</td>
                        <td>
                        <input type="text" name="NISN" class="input-control">
                        </td>
                    </tr>

                    <tr>
                        <td>NIK</td>
                        <td>:</td>
                        <td>
                        <input type="text" name="NIK" class="input-control">
                        </td>
                    </tr>

                    <tr>
                        <td>Tempat Lahir</td>
                        <td>:</td>
                        <td>
                        <input type="text" name="tmp_lhr" class="input-control">
                        </td>
                    </tr>

                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>:</td>
                        <td>
                           <input type="date" name="tgl" class="input-control">
                        </td>
                    </tr>

                    <tr>
                        <td>Agama</td>
                        <td>:</td>
                        <td>
                            <select class="input-control" name="agama">
                               <option value="Islam">Islam</option>
                               <option value="Kristen">Kristen</option>
                               <option value="Khatolik">Khatolik</option>
                               <option value="Hindu">Hindu</option> 
                               <option value="Buddha">Buddha</option>
                               <option value="Khong Hu Chu">Khong Hu Chun</option>  
                            </select>    
                        </td>
                    </tr>

                    <tr>
                        <td>Berkebutuhan Khusus</td>
                        <td>:</td>
                        <td>
                            <select class="input-control" name="bth_khusus">
                               <option value="tidak">Tidak</option>
                               <option value="netra">Netra</option>
                               <option value="Rungu">Rungu</option>
                               <option value="Grahita_ringan">Grahita ringan</option> 
                               <option value="Grahita_sedang">Grahita_sedang</option>
                               <option value="Daksa_ringan">Daksa_ringan</option>
                               <option value="Daksa_sedang">Daksa_sedang</option>  
                               <option value="Laras">Laras</option>  
                               <option value="Wicara">Wicara</option>  
                               <option value="Tuna_ganda">Tuna_ganda</option>    
                               <option value="Hiper_aktif">Hiper_aktif</option> 
                               <option value="Cerdas_istimewa">Cerdas_istimewa</option>  
                               <option value="Bakat_istimewa">Bakat_istimewa</option>  
                               <option value="Kesulitan_belajar">Kesulitan_belajar</option>   
                               <option value="Narkoba">Narkoba</option>  
                               <option value="Indigo">Indigo</option>  
                               <option value="Down_sindrom">Down_sindrom</option>  
                               <option value="Autis">Autis</option>  
                            </select>    
                        </td>
                    </tr>                    

                    <tr>
                        <td>Alamat jalan</td>
                        <td>:</td>
                        <td>
                        <input type="text" name="alm_jln" class="input-control">
                        </td>
                    </tr>

                    <tr>
                        <td>RT</td>
                        <td>:</td>
                        <td>
                        <input type="text" name="RT" class="input-control">
                        </td>
                    </tr>

                    <tr>
                        <td>RW</td>
                        <td>:</td>
                        <td>
                        <input type="text" name="RW" class="input-control">
                        </td>
                    </tr>

                    <tr>
                        <td>Nama Dusun</td>
                        <td>:</td>
                        <td>
                        <input type="text" name="nm_dusun" class="input-control">
                        </td>
                    </tr>

                    <tr>
                        <td>Nama Kelurahan</td>
                        <td>:</td>
                        <td>
                        <input type="text" name="nm_klr" class="input-control">
                        </td>
                    </tr>

                    <tr>
                        <td>Nama Kecamatan</td>
                        <td>:</td>
                        <td>
                        <input type="text" name="nm_kcm" class="input-control">
                        </td>
                    </tr>

                    <tr>
                        <td>Kode Pos</td>
                        <td>:</td>
                        <td>
                        <input type="text" name="kd_pos" class="input-control">
                        </td>
                    </tr>
                    
                    <tr>
                        <td>Tempat tinggal</td>
                        <td>:</td>
                        <td>
                            <select class="input-control" name="tmp_tinggal">
                               <option value="Bersama_ortu">Bersama Orang tua</option>
                               <option value="Wali">Wali</option>
                               <option value="Kos">Kos</option>
                               <option value="Asrama">Asrama</option> 
                               <option value="Panti_asuhan">Panti Asuhan</option>
                            </select>    
                        </td>
                    </tr>

                    <tr>
                        <td>Moda Transportasi</td>
                        <td>:</td>
                        <td>
                            <select class="input-control" name="Transportasi">
                               <option value="Jalan_kaki">Jalan_kaki</option>
                               <option value="Kendaraan_pribadi">Kendaraan_pribadi</option>
                               <option value="Kendaraan_umum">Kendaraan_umum</option>
                               <option value="Jemputan_sekolah">Jemputan_sekolah</option> 
                               <option value="kereta_api">kereta_api</option>
                               <option value="Ojek">Ojek</option>  
                            </select>    
                        </td>
                    </tr>

                    <tr>
                        <td>Nomor Telepon</td>
                        <td>:</td>
                        <td>
                        <input type="text" name="nmr_tlp" class="input-control">
                        </td>
                    </tr>

                    <tr>
                        <td>Nomor HP</td>
                        <td>:</td>
                        <td>
                        <input type="text" name="no_hp" class="input-control">
                        </td>
                    </tr>

                    <tr>
                        <td>Email Pribadi</td>
                        <td>:</td>
                        <td>
                        <input type="text" name="email" class="input-control">
                        </td>
                    </tr>

                    <tr>
                        <td>Penerima KPS/PKH/KIP</td>
                        <td>:</td>
                        <td>
                           <input type="radio" name="kps/pkh/kip" class="input-control" value="ya">Ya &emsp;
                           <input type="radio" name="kps/pkh/kip" class="input-control" value="tidak">Tidak
                        </td>
                    </tr>

                    <tr>
                        <td>No. KPS/PKH/KIP</td>
                        <td>:</td>
                        <td>
                        <input type="text" name="no_kps/pkh/kip" class="input-control">
                        </td>
                    </tr>

                    <tr>
                        <td>Kewarganegaraan</td>
                        <td>:</td>
                        <td>
                        <input type="text" name="kwn" class="input-control">
                        </td>
                    </tr>
                </table>
            </div>

        <h3>Data Ayah Kandung</h3>
        <div class="box">
                <table border="0" class="table-form">
                    <tr>
                        <td>Nama Ayah</td>
                        <td>:</td>
                        <td>
                        <input type="text" name="nm_ayh" class="input-control">
                        </td>
                    </tr>

                    <tr>
                        <td>Tahun Lahir</td>
                        <td>:</td>
                        <td>
                        <input type="text" name="thn_lhr_ayh" class="input-control">
                        </td>
                    </tr>

                    <tr>
                        <td>Pendidikan</td>
                        <td>:</td>
                        <td>
                            <select class="input-control" name="pendidikan_ayh">
                               <option value="tidak sekolah">tidak_sekolah</option>
                               <option value="putus sd">Putus SD</option>
                               <option value="sd sederajat">SD sederajat</option>
                               <option value="smp sederajat">SMP sederajat</option> 
                               <option value="sma sederajat">SMA sederajat</option>
                               <option value="d1">D1</option>  
                               <option value="d2">D2</option>  
                               <option value="d3">D3</option>  
                               <option value="s1">D4/S1</option>  
                               <option value="s2">S2</option>  
                               <option value="s3">S3</option>  
                            </select>    
                        </td>
                    </tr>

                    <tr>
                        <td>Pekerjaan</td>
                        <td>:</td>
                        <td>
                            <select class="input-control" name="pekerjaan_ayah">
                               <option value="tidak bekerja">tidak_bekerja</option>
                               <option value="nelayan">nelayan</option>
                               <option value="petani">petani</option>
                               <option value="peternak">peternak</option> 
                               <option value="PNS">PNS</option>
                               <option value="Karyawan swasta">Karyawan_swasta</option>  
                               <option value="Pedagang kecil">Pedagang_kecil</option>  
                               <option value="Pedagang besar">Pedagang_besar</option>  
                               <option value="Wiraswasta">Wiraswasta</option>  
                               <option value="Wirausaha">Wirausaha</option>  
                               <option value="Buruh">Buruh</option>  
                               <option value="Pensiun">Pensiun</option>  
                            </select>    
                        </td>
                    </tr>

                    <tr>
                        <td>Penghasilan bulanan</td>
                        <td>:</td>
                        <td>
                            <select class="input-control" name="penghasilan_ayh">
                               <option value="kurang_dari_500ribu">kurang_dari_500ribu</option>
                               <option value="2 juta">2.5juta-2.9juta</option>
                               <option value="3 juta">3.1juta-3.9juta</option>
                               <option value="4 juta">4.2juta-4.9juta</option> 
                               <option value="5 juta">5.5juta-20juta</option>
                               <option value="6 juta lebih">6juta-lebih_dari_20juta</option>  
                            </select>    
                        </td>
                    </tr>

                    <tr>
                        <td>Berkebutuhan Khusus</td>
                        <td>:</td>
                        <td>
                            <select class="input-control" name="bth_khs_ayh">
                               <option value="tidak">Tidak</option>
                               <option value="netra">Netra</option>
                               <option value="Rungu">Rungu</option>
                               <option value="Grahita ringan">Grahita ringan</option> 
                               <option value="Grahita sedang">Grahita_sedang</option>
                               <option value="Daksa ringan">Daksa_ringan</option>
                               <option value="Daksa sedang">Daksa_sedang</option>  
                               <option value="Laras">Laras</option>  
                               <option value="Wicara">Wicara</option>  
                               <option value="Tuna ganda">Tuna_ganda</option>    
                               <option value="Hiper aktif">Hiper_aktif</option> 
                               <option value="Cerdas istimewa">Cerdas_istimewa</option>  
                               <option value="Bakat istimewa">Bakat_istimewa</option>  
                               <option value="Kesulitan belajar">Kesulitan_belajar</option>   
                               <option value="Narkoba">Narkoba</option>  
                               <option value="Indigo">Indigo</option>  
                               <option value="Down sindrom">Down_sindrom</option>  
                               <option value="Autis">Autis</option>  
                            </select>    
                        </td>
                    </tr>                  
                </table>
            </div>

        <h3>Data Ibu Kandung</h3>
        <div class="box">
                <table border="0" class="table-form">
                    <tr>
                        <td>Nama Ibu</td>
                        <td>:</td>
                        <td>
                        <input type="text" name="nm_ibu" class="input-control">
                        </td>
                    </tr>

                    <tr>
                        <td>Tahun Lahir</td>
                        <td>:</td>
                        <td>
                        <input type="text" name="thn_lhr_ibu" class="input-control">
                        </td>
                    </tr>

                    <tr>
                        <td>Pendidikan</td>
                        <td>:</td>
                        <td>
                            <select class="input-control" name="pendidikan_ibu">
                               <option value="tidak sekolah">tidak_sekolah</option>
                               <option value="putus sd">Putus SD</option>
                               <option value="sd sederajat">SD sederajat</option>
                               <option value="smp sederajat">SMP sederajat</option> 
                               <option value="sma sederajat">SMA sederajat</option>
                               <option value="d1">D1</option>  
                               <option value="d2">D2</option>  
                               <option value="d3">D3</option>  
                               <option value="s1">D4/S1</option>  
                               <option value="s2">S2</option>  
                               <option value="s3">S3</option>  
                            </select>    
                        </td>
                    </tr>

                    <tr>
                        <td>Pekerjaan</td>
                        <td>:</td>
                        <td>
                            <select class="input-control" name="pekerjaan_ibu">
                               <option value="tidak bekerja">tidak_bekerja</option>
                               <option value="nelayan">nelayan</option>
                               <option value="petani">petani</option>
                               <option value="peternak">peternak</option> 
                               <option value="pns">PNS</option>
                               <option value="Karyawan swasta">Karyawan_swasta</option>  
                               <option value="Pedagang kecil">Pedagang_kecil</option>  
                               <option value="Pedagang besar">Pedagang_besar</option>  
                               <option value="Wiraswasta">Wiraswasta</option>  
                               <option value="Wirausaha">Wirausaha</option>  
                               <option value="Buruh">Buruh</option>  
                               <option value="Pensiun">Pensiun</option>  
                            </select>    
                        </td>
                    </tr>

                    <tr>
                        <td>Penghasilan bulanan</td>
                        <td>:</td>
                        <td>
                            <select class="input-control" name="penghasilan_ibu">
                               <option value="kurang_dari_500ribu">kurang_dari_500ribu</option>
                               <option value="2.5juta">2.5juta-2.9juta</option>
                               <option value="3.1juta">3.1juta-3.9juta</option>
                               <option value="4.2juta">4.2juta-4.9juta</option> 
                               <option value="5.5juta">5.5juta-20juta</option>
                               <option value="6juta lebih">6juta-lebih_dari_20juta</option>  
                            </select>    
                        </td>
                    </tr>

                    <tr>
                        <td>Berkebutuhan Khusus</td>
                        <td>:</td>
                        <td>
                            <select class="input-control" name="bth_khs_ibu">
                               <option value="tidak">Tidak</option>
                               <option value="netra">Netra</option>
                               <option value="Rungu">Rungu</option>
                               <option value="Grahita ringan">Grahita ringan</option> 
                               <option value="Grahita sedang">Grahita_sedang</option>
                               <option value="Daksa ringan">Daksa_ringan</option>
                               <option value="Daksa sedang">Daksa_sedang</option>  
                               <option value="Laras">Laras</option>  
                               <option value="Wicara">Wicara</option>  
                               <option value="Tuna ganda">Tuna_ganda</option>    
                               <option value="Hiper aktif">Hiper_aktif</option> 
                               <option value="Cerdas istimewa">Cerdas_istimewa</option>  
                               <option value="Bakat istimewa">Bakat_istimewa</option>  
                               <option value="Kesulitan belajar">Kesulitan_belajar</option>   
                               <option value="Narkoba">Narkoba</option>  
                               <option value="Indigo">Indigo</option>  
                               <option value="Down sindrom">Down_sindrom</option>  
                               <option value="Autis">Autis</option>  
                            </select>    
                        </td>
                    </tr>

                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                             <!-- button untuk submit data ke database -->
                             <input type="submit" name="submit" class="btn-submit" value="Submit">
                            
                        </td>
                    </tr>
                  
                </table>
            </div>
        </form>
    </section>
      
</body>
</html>


