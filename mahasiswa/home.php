<?php
    include('header.php');

    if(!empty($_GET['aksi'])){
        if($_GET['aksi'] == 'pengajuan'){
            $query_insert = "INSERT INTO tb_pengajuan_beasiswa FIELD (ID_BEASISWA,ID_MAHASISWA) VALUES ('".$_GET['id_beasiswa']."','".$_SESSION['data-mahasiswa']['ID']."')";
            // $con->query($query_insert);
            $stmt = oci_parse($con, $query_insert);
            oci_execute($stmt);
            header('location: http://localhost/beasiswa/mahasiswa/home.php');
        }
    }
    $query_beasiswa = "select * from tb_beasiswa";
    $parse = oci_parse($con, $query_beasiswa);
    oci_execute($parse);
?>

<div class="col-md-10 p-4 mx-auto">
    <h4>Daftar Beasiswa</h4>
    <div class="row">
    <br>
    <div class="row border p-4 rounded col-md-12 m-0">
        <?php
            while ($d = oci_fetch_array($parse,OCI_ASSOC)) {
                $arr_syarat = explode(',',$d['SYARAT']);

                $query_cek = "select * from tb_pengajuan_beasiswa where id_beasiswa like '".$d['ID']."' and id_mahasiswa = '".$_SESSION['data-mahasiswa']['ID']."'";
                $stid = oci_parse($con, $query_cek);
                oci_execute($stid);
                $result_query_cek = oci_fetch_all($stid,$res);                
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
                            <?php
                                if($result_query_cek < 1){
                            ?>
                                <a href="?aksi=pengajuan&id_beasiswa=<?=$d['ID']?>" class="btn btn-primary col-md-12 mt-2">Buat Pengajuan</a>
                            <?php
                                }else{
                            ?>
                                <button class="btn btn-dark col-md-12" disabled>Pengajuan telah dibuat</button>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php
            }
        ?>
        
    </div>
    </div>
</div>

<?php
    include('footer.php');
?>