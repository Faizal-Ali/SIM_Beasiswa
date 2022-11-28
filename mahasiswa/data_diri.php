<?php
    include('header.php');
    if (!empty($_POST['aksi'])) {
        if($_POST['aksi'] == 'edit'){
            $nrp = $_POST['nrp'];
            $nama = $_POST['nama'];
            $prodi = $_POST['prodi'];
            $semester = $_POST['semester'];
            $ipk = $_POST['ipk'];
            $pendapatan = $_POST['pendapatan'];
            $username = $_POST['username'];
            $password = $_POST['password'];
        
            $queryEdit = "UPDATE tb_mahasiswa SET 
                            NRP = '$nrp',
                            NAMA = '$nama',
                            PRODI = '$prodi',
                            SEMESTER = '$semester',
                            IPK = $ipk,
                            PENDAPATAN = $pendapatan,
                            USERNAME = '$username',
                            PASSWORD = '$password'";

            
            $stmt = oci_parse($con, $queryEdit);
            oci_execute($stmt);

            header('location: http://localhost/beasiswa/mahasiswa/data_diri.php');
        }
    }

    $query_data = "select * from tb_mahasiswa where ID like ".$_SESSION['data-mahasiswa']['ID'];
    $parse = oci_parse($con, $query_data);
    oci_execute($parse);
    $d = oci_fetch_array($parse,OCI_ASSOC);
?>

<div class="col-md-10 mx-auto p-4">
    <h4>Data Diri</h4>
    <form action="" method="post">
    <div class="row border p-4 rounded">
        <div class="col-md-6">
            <span>Nama</span>
            <input type="text" name="nama" value="<?=$d['NAMA']?>" class="col-md-12 form-control">
        </div>
        <div class="col-md-6">
            <span>NRP</span>
            <input type="text" name="nrp" value="<?=$d['NRP']?>" class="col-md-12 form-control">
        </div>
        <div class="col-md-6">
            <span>Prodi</span>
            <input type="text" name="prodi" value="<?=$d['PRODI']?>" class="col-md-12 form-control">
        </div>
        <div class="col-md-6">
            <span>Semester</span>
            <input type="text" name="semester" value="<?=$d['SEMESTER']?>" class="col-md-12 form-control">
        </div>
        <div class="col-md-6">
            <span>IPK Terakhir</span>
            <input type="text" name="ipk" value="<?=$d['IPK']?>" class="col-md-12 form-control">
        </div>
        <div class="col-md-6">
            <span>Pendapatan perbulan</span>
            <input type="text" name="pendapatan" value="<?=$d['PENDAPATAN']?>" class="col-md-12 form-control">
        </div>
        <div class="col-md-6">
            <span>Username</span>
            <input type="username" name="username" value="<?=$d['USERNAME']?>" class="col-md-12 form-control">
        </div>
        <div class="col-md-6">
            <span>Password</span>
            <input type="password" name="password" value="<?=$d['PASSWORD']?>" class="col-md-12 form-control">
        </div>
        <input type="hidden" name="aksi" value="edit">

        <div class="col-md-12 mt-2">
            <button type="submit" class="btn btn-primary col-md-12">Simpan</button>
        </div>
        </form>
    </div>

</div>

<?php
    include('footer.php');
?>