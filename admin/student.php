<?php
    include('header.php');
    if (isset($_POST['student_save'])) {
        $nrp = $_POST['nrp'];
        $nama = $_POST['nama'];
        $prodi = $_POST['prodi'];
        $semester = $_POST['semester'];
        $ipk = $_POST['ipk'];
        $pendapatan = $_POST['pendapatan'];
        $username = $_POST['username'];
        $password = $_POST['password'];
    
        //query
        $querytambah = "INSERT INTO tb_mahasiswa FIELD (USERNAME,PASSWORD,NAMA,NRP,PRODI,SEMESTER,IPK,PENDAPATAN)
                         VALUES('$username' , '$password' , '$nama' , '$nrp' , '$prodi' , '$semester' , $ipk , $pendapatan)";
        
        $stmt = oci_parse($con, $querytambah);
        oci_execute($stmt);

        header('location: http://localhost/beasiswa/admin/student.php');
    }

    if(!empty($_GET['hapus_id'])){
        $query = "DELETE FROM tb_mahasiswa WHERE id = ".$_GET['hapus_id']."";
        $stmt = oci_parse($con, $query);
        oci_execute($stmt);

        header('location: http://localhost/beasiswa/admin/student.php');
    }

    $query_mahasiswa = "select * from tb_mahasiswa";
    $parse = oci_parse($con, $query_mahasiswa);
    oci_execute($parse);
?>

<div class="col-md-10 mx-auto p-4">
    <h4>Daftar Mahasiswa <button data-toggle="modal" data-target="#tambahuser" class="btn btn-success float-right">Tambah</button></h4>
    <br>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">NRP</th>
            <th scope="col">Nama</th>
            <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i=1;
            while ($d = oci_fetch_array($parse,OCI_ASSOC)) {
            ?>
                <tr>
                    <td><?=$i?></td>
                    <td><?= $d['NRP']?></td>
                    <td><?= $d['NAMA']?></td>
                    <td>
                        <a class="btn btn-danger col-md-5 ml-auto" href="?hapus_id=<?=$d['ID']?>">Hapus</a>
                    </td>
                </tr>
            <?php 
            $i++;
            }
            ?>
        </tbody>
    </table>
</div>

<!-- modal -->
    <!-- modal insert -->
    <div class="example-modal">
        <div id="tambahuser" class="modal fade bd-example-modal-lg" role="dialog" style="display:none;">
            <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                <form action="" method="post" role="form">
                    <div class="form-group">
                    <div class="row">
                    <label class="col-sm-3 control-label text-right">NRP <span class="text-red">*</span></label>
                    <div class="col-sm-8"><input type="text" class="form-control" name="nrp" placeholder="NRP" value=""></div>
                    </div>
                    </div>
                    <div class="form-group">
                    <div class="row">
                    <label class="col-sm-3 control-label text-right">Nama <span class="text-red">*</span></label>
                    <div class="col-sm-8"><input type="text" class="form-control" name="nama" placeholder="Nama" value=""></div>
                    </div>
                    </div>
                    <div class="form-group">
                    <div class="row">
                    <label class="col-sm-3 control-label text-right">Prodi <span class="text-red">*</span></label>
                    <div class="col-sm-8"><input type="text" class="form-control" name="prodi" placeholder="Prodi" value=""></div>
                    </div>
                    </div>
                    <div class="form-group">
                    <div class="row">
                    <label class="col-sm-3 control-label text-right">Semester <span class="text-red">*</span></label>
                    <div class="col-sm-8"><input type="number" class="form-control" name="semester" placeholder="Semester" value=""></div>
                    </div>
                    </div>
                    <div class="form-group">
                    <div class="row">
                    <label class="col-sm-3 control-label text-right">IPK <span class="text-red">*</span></label>
                    <div class="col-sm-8"><input type="number" step=".01" class="form-control" name="ipk" placeholder="IPK" value=""></div>
                    </div>
                    </div>
                    <div class="form-group">
                    <div class="row">
                    <label class="col-sm-3 control-label text-right">Pendapatan <span class="text-red">*</span></label>
                    <div class="col-sm-8"><input type="number" class="form-control" name="pendapatan" placeholder="Pendapatan" value=""></div>
                    </div>
                    </div>
                    <div class="form-group">
                    <div class="row">
                    <label class="col-sm-3 control-label text-right">Username <span class="text-red">*</span></label>         
                    <div class="col-sm-8"><input type="username" class="form-control" name="username" placeholder="username" value=""></div>
                    </div>
                    </div>
                    <div class="form-group">
                    <div class="row">
                    <label class="col-sm-3 control-label text-right">Password <span class="text-red">*</span></label>
                    <div class="col-sm-8"><input type="password" class="form-control" name="password" placeholder="Password" id="myPassword" value="">
                    </div>
                    </div>
                    </div>
                    <div class="modal-footer">
                    <button id="nosave" type="button" class="btn btn-danger pull-left" data-dismiss="modal">Batal</button>
                    <input type="submit" name="student_save" class="btn btn-primary" value="Simpan">
                    </div>
                </form>
                </div>
            </div>
            </div>
        </div>
    </div><!-- modal insert close -->
<?php
    include('footer.php');
?>

<script>
    function buka_edit(e){
        var judul = $(e).attr("data-judul")
        var syarat = $(e).attr('data-syarat')
        var id = $(e).attr('data-id')

        $('#judul_ubah').val(judul);
        $('#syarat_ubah').val(syarat);
        $('#id_ubah').val(id);
        $('#modal_ubah').modal('show')
        // console.log(judul_ubah+" => "+syarat_ubah);
    }
</script>