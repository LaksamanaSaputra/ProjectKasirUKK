<div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Daftar User</h4>
                    <p class="card-description">
                    <!-- Add class <code>.table</code> -->
                        <?php 
                            if ($level == "Administrator") {
                                
                            
                        ?>
                        <a href="?page=tambah-user" title="Tambah Produk" 
                            class="btn btn-primary btn-icon-split btn-sm">
                                <span class="icon text-white-50"><i class="fas fa-plus"></i></span>
                                <span class="text">Tambah User</span>
                        </a>
                        <?php } ?>
                    </p>

                    <div class="table-responsive">
                        <table class="table" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Nama User</th>
                                    <th class="text-center">Password</th>
                                    <?php
                                        if ($level == "Administrator") {
                                    ?>
                                    <th class="text-center">Pilihan</th>
                                    <?php
                                        }
                                    ?>
                                    
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                $no = 1;
                                $sql = $con->query("SELECT * FROM user");
                                while ($data= $sql->fetch_assoc()) {
                            ?>
                            <tr>
                                <td class="text-center"><?php echo $no++ ?></td>
                                <td class="text-center"><?php echo $data['nama_user']?></td>
                                <td class="text-center"><?php echo $data['password']?></td>
                                <?php 
                                    if ($level == "Administrator") {
                                ?>
                                <td class="text-center" align="center" width="12%"><a href="?page=edit-user&UserID=<?= $data['id_user']; ?>" class="badge badge-primary p-2" title="Edit"><i class="fas fa-edit">Edit</i></a> | <a href="?page=hapus-user&id_user=<?= $data['id_user']; ?>" class="badge badge-danger p-2 delete-data" title='Delete'><i class="">Hapus</i></a> </td>
                                <?php } ?>
                            </tr>
                            <?php } ?>
                        
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
