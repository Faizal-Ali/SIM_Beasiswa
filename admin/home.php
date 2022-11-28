<?php
    include('header.php');

    if(!empty($_POST['aksi']) && !empty($_POST['judul'])){
        if($_POST['aksi'] == 'tambah'){
            $query_insert = "INSERT INTO tb_beasiswa FIELD (JUDUL,SYARAT) VALUES ('".$_POST['judul']."','".$_POST['syarat']."')";
            $stmt = oci_parse($con, $query_insert);
            oci_execute($stmt);

            header('location: http://localhost/beasiswa/admin/home.php');
        }else if($_POST['aksi'] == 'ubah'){
            $query_update = "UPDATE tb_beasiswa SET SYARAT = '".$_POST['syarat']."', JUDUL = '".$_POST['judul']."' WHERE ID = ".$_POST['id'];
            $stmt = oci_parse($con, $query_update);
            oci_execute($stmt);

            header('location: http://localhost/beasiswa/admin/home.php');
        }
    }

    if(!empty($_GET['hapus_id'])){
        $query_delete = "DELETE FROM tb_beasiswa WHERE id = ".$_GET['hapus_id']."";
        $stmt = oci_parse($con, $query_delete);
        oci_execute($stmt);

        header('location: http://localhost/beasiswa/admin/home.php');
    }

    $query_beasiswa = "select * from tb_beasiswa";
    $parse = oci_parse($con, $query_beasiswa);
    oci_execute($parse);
?>

<div class="col-md-10 mx-auto p-4">
    <h4>Daftar Beasiswa <button data-toggle="modal" data-target="#modal_tambah" class="btn btn-success float-right">Tambah</button></h4>
    <br>
    <div class="row border p-4 rounded col-md-12 m-0">
        <?php
        
        
        while ($d = oci_fetch_array($parse,OCI_ASSOC)) {
                $arr_syarat = explode(',',$d['SYARAT']);
        ?>
            <div class="col-md-4 mt-2">
                <div class="card p-0">
                    <div class="card-header">
                        <h5><?=$d['JUDUL']?></h5>
                    </div>
                    <div class="card-body">
                        Syarat
                        <ul>
                            <?php
                                foreach ($arr_syarat as $s) {
                            ?>
                                <li><?=$s?></li>
                            <?php
                                }
                            ?>
                        </ul>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <button data-id="<?=$d['ID']?>" data-judul="<?=$d['JUDUL']?>" data-syarat="<?=$d['SYARAT']?>" onclick="buka_edit(this)" class="btn btn-warning col-md-5">Edit</button>
                            <a class="btn btn-danger col-md-5 ml-auto" href="?hapus_id=<?=$d['ID']?>">Hapus</a>
                            <a href="" class="btn btn-primary col-md-12 mt-2">Detail Pengajuan</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php
            }
        ?>
        
    </div>
</div>

<!-- modal -->

<div class="modal fade" id="modal_tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="">Modal Tambah</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="post">
            <span>Judul</span>
            <input type="text" name="judul" class="form-control">
            <span>Syarat</span>
            <input type="text" name="syarat" class="form-control">
            <input type="hidden" name="aksi" value="tambah">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal_ubah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="jdl_modal_ubah">Edit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="post">
            <span>Judul</span>
            <input type="text" name="judul" class="form-control" id="judul_ubah">
            <span>Syarat</span>
            <input type="text" name="syarat" class="form-control" id="syarat_ubah">
            <input type="hidden" name="id" class="form-control" id="id_ubah">
            <input type="hidden" name="aksi" value="ubah">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>

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