<?php 
include '../connect.php';
include 'headerpetugas.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container" style="margin-top:20px">
        <h2>Data petugas</h2>
        <hr>
        <table class="table table-striped table-hover table-sm table-bordered">
            <thead style="background-color: #dee3e2">
                <tr>
                    <th>NO.</th>
                    <th>NAMA LENGKAP</th>
                    <th>USIA</th>
                    <th>ALAMAT</th>
                    <th>NO.TELP</th>
                    <th>USERNAME</th>
                    <th>STATUS</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                <?php
				$sql = mysqli_query($koneksi, "SELECT * FROM `user` WHERE id_level='petugas' ORDER BY id DESC") or die(mysqli_error($koneksi));
				//jika query diatas menghasilkan nilai > 0 maka menjalankan script di bawah if...
				if(mysqli_num_rows($sql) > 0){
					//membuat variabel $no untuk menyimpan nomor urut
					$no = 1;
					//melakukan perulangan while dengan dari dari query $sql
                    while($data = mysqli_fetch_array($sql)){
                        ?>
                <!--menampilkan data perulangan -->

                <tr>
                    <td><?php echo $no; ?></td>

                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['usia']; ?></td>
                    <td><?php echo $data['alamat']; ?></td>
                    <td><?php echo $data['telp']; ?></td>
                    <td><?php echo $data['username']; ?></td>
                    <td><?php echo $data['id_level']; ?></td>
                    <td>
                        <a href="#edit<?php echo $data['id']; ?>" data-toggle="modal" class="btn btn-warning"><span
                                class="glyphicon glyphicon-edit"></span> Edit</a>
                        <a href="#del<?php echo $data['id']; ?>" data-toggle="modal" class="btn btn-danger"><span
                                class="glyphicon glyphicon-trash"></span> Delete</a>
                        <?php include('modal_formpetugas.php'); ?>

                    </td>
                </tr>

                <?php
						$no++;
					}
				//jika query menghasilkan nilai 0
				}else{
					echo '
					<tr>
						<td colspan="6">Tidak ada data.</td>
					</tr>
					';
				}
				?>
            <tbody>
        </table>

        <div>
            <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#myModal"
                data-title="tambahBuku">Tambah petugas</button>
        </div>

        <div id="myModal" class="modal fade" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="tambah_petugas.php" method="post">
                        <div class="modal-header">
                            <h5 class="modal-title">Tambahkan ke Tabel</h5>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="control-label">Status:</label>
                                <select name="level" class="form-control">
                                    <option value="petugas">Petugas</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Nama Lengkap:</label>
                                <input type="text" name="nama" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Usia:</label>
                                <input type="text" name="usia" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Alamat:</label>
                                <input type="text" name="alamat" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="control-label">No.Telp:</label>
                                <input type="number" name="telp" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Username:</label>
                                <input type="text" name="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Password:</label>
                                <input type="text" name="password" class="form-control">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
</body>

</html>
</body>
</html>