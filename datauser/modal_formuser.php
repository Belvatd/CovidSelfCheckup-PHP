<?php include('../connect.php'); ?>
<!-- Delete -->
<div class="modal fade" id="del<?php echo $data['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Hapus Data</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <?php
					$del=mysqli_query($koneksi,"SELECT * FROM user WHERE id='".$data['id']."'");
					$deleteData=mysqli_fetch_array($del);
				?>
                <div class="container-fluid">
                    <h5>
                        <center>Username: <strong><?php echo $deleteData['username']; ?></strong></center>
                    </h5>
                    <h5>
                        <center>Nama Lengkap: <strong><?php echo $deleteData['nama']; ?></strong></center>
                    </h5>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span
                        class="glyphicon glyphicon-remove"></span> Cancel</button>
                <a href="proses_delete_user.php?id=<?php echo $data['id']; ?>" class="btn btn-danger"><span
                        class="glyphicon glyphicon-trash"></span> Delete</a>
            </div>

        </div>
    </div>
</div>
<!-- /EndmodalDelete -->

<!-- Edit -->
<div class="modal fade" id="edit<?php echo $data['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <?php
					$edit=mysqli_query($koneksi,"SELECT * FROM user WHERE id='".$data['id']."'");
					$editData=mysqli_fetch_array($edit);
				?>
                <div class="container-fluid">
                    <form method="POST" action="proses_edit_user.php?id=<?php echo $editData['id']; ?>">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Data</h5>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="control-label">Status:</label>
                                <select name="level" class="form-control">
                                    <option value="user">user</option>
                                    <option value="petugas">Petugas</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Nama Lengkap:</label>
                                <input type="text" name="nama" class="form-control"
                                    value="<?php echo $editData['nama']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Usia:</label>
                                <input type="text" name="usia" class="form-control"
                                    value="<?php echo $editData['usia']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Alamat:</label>
                                <input type="text" name="alamat" class="form-control"
                                    value="<?php echo $editData['alamat']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label">No.Telp:</label>
                                <input type="number" name="telp" class="form-control"
                                    value="<?php echo $editData['telp']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Username:</label>
                                <input type="text" name="username" class="form-control"
                                    value="<?php echo $editData['username']; ?>" required>
                            </div>
                            <div class="form-group">Password:</label>
                                <input type="text" name="password" class="form-control"
                                    value="<?php echo $editData['password']; ?>" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal"><span
                                    class="glyphicon glyphicon-remove"></span> Cancel</button>
                            <button type="submit" class="btn btn-warning"><span
                                    class="glyphicon glyphicon-check"></span> Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /EndmodalEdit -->