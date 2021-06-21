<?php
  include '../../config/db.php';
  $id2 = $_SESSION["login"];
  $perintah2 = "SELECT * FROM tb_user WHERE id = '$id2'";
  $query2 = mysqli_query($conn,$perintah2);
  while ($user2 = mysqli_fetch_array($query2)) {
      $level = $user2['level'];
      if ($level == 0){
          ?>
          <div class="col-lg-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                  Data Agen 
                  
              </div>
              <div class="panel-body">
                  <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                      <thead>
                          <tr>
                              <th>No</th>
                              <th>Nama Agen</th>
                              <th>Alamat Agen</th>
                              <th>Gender</th>
                              <th>Nomer HP</th>
                              <th>Deskripsi</th>
                              <th>Aksi</th>
                          </tr>
                      </thead>
                      <tbody>
                        <?php
                            $no=1;
                            include("../../config/db.php");
                            $perintah = "SELECT * FROM tb_user where level = '1'";
                            $dataw = mysqli_query($conn, $perintah);
                            while ($data = mysqli_fetch_array($dataw)) {
                          ?>
                          <tr class="odd gradeX">
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $data['nama'] ?></td>
                              <td><?php echo $data['alamat'] ?></td>
                              <td><?php echo $data['gender'] ?></td>
                              <td><?php echo $data['no_tlp'] ?></td>
                              <td><?php echo $data['deskripsi'] ?>'</td>
                              <td>
                                <a href="?page=agen&aksi=rincian&id=<?php echo $data['id'] ?>" class="btn btn-warning"><span class="fa fa-bars"></span></a>
                                <a href="?page=agen&aksi=edit&id=<?php echo $data['id'] ?>" class="btn btn-success"><span class="fa fa-pencil"></span></a>
                                <a href="?page=agen&aksi=delete&id=<?php echo $data['id'] ?>" class="btn btn-danger" onClick="myFunction()"><span class="fa fa-trash"></span></a>
                              </td>
                          </tr>
                        <?php } ?>
                        </tbody>
                    </table>
              </div>
          </div>
        </div>
          <?php 
      } 
      else{
          ?>
          <div class="col-lg-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                  Data Agen 
                  
              </div>
              <div class="panel-body">
                  <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                      <thead>
                          <tr>
                              <th>No</th>
                              <th>Nama Agen</th>
                              <th>Alamat Agen</th>
                              <th>Gender</th>
                              <th>Nomer HP</th>
                              <th>Deskripsi</th>
                              <th>Aksi</th>
                          </tr>
                      </thead>
                      <tbody>
                        <?php
                            $no=1;
                            include("../../config/db.php");
                            $perintah = "SELECT * FROM tb_user where level = '1'";
                            $dataw = mysqli_query($conn, $perintah);
                            while ($data = mysqli_fetch_array($dataw)) {
                          ?>
                          <tr class="odd gradeX">
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $data['nama'] ?></td>
                              <td><?php echo $data['alamat'] ?></td>
                              <td><?php echo $data['gender'] ?></td>
                              <td><?php echo $data['no_tlp'] ?></td>
                              <td><?php echo $data['deskripsi'] ?>'</td>
                              <td>
                                <a href="?page=agen&aksi=edit&id=<?php echo $data['id'] ?>" class="btn btn-success"><span class="fa fa-pencil"></span></a>
                                <a href="?page=agen&aksi=detail&id=<?php echo $data['id'] ?>" class="btn btn-warning"><span class="fa fa-bars"></span></a>
                                <a href="?page=agen&aksi=delete&id=<?php echo $data['id'] ?>" class="btn btn-danger"><span class="fa fa-trash"></span></a>
                              </td>
                          </tr>
                        <?php } ?>
                        </tbody>
                    </table>
              </div>
          </div>
        </div>
          <?php
          echo '
          <div class="col-lg-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                  Data Agen 
                  
              </div>
                                <!-- /.panel-heading -->
              <div class="panel-body">
                  <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                      <thead>
                          <tr>
                              <th>No</th>
                              <th>Nama Agen</th>
                              <th>Alamat Agen</th>
                              <th>Gender</th>
                              <th>Nomer HP</th>
                              <th>Deskripsi</th>
                              <th>Aksi</th>
                          </tr>
                      </thead>
                      <tbody>
                        <?php
                            include("../../config/db.php");
                            $perintah = "SELECT * FROM tb_user where id=1";
                            $dataw = mysqli_query($conn, $perintah);
                            while ($data = mysqli_fetch_array($dataw)) {
                          ?>
                          <tr class="odd gradeX">
                            <td>'.$no++.'</td>
                            <td>'.$data['nama'].'</td>
                              <td>'.$data['alamat'].'</td>
                              <td>'.$data['gender'].'</td>
                              <td>'.$data['no_tlp'].'</td>
                              <td>'.$data['deskripsi'].'</td>
                              <td>
                                <a href="?page=agen&aksi=edit&id='.$data['id'].'" class="btn btn-success"><span class="fa fa-pencil"></span></a>
                                <a href="?page=agen&aksi=detail&id='.$data['id'].'" class="btn btn-warning"><span class="fa fa-bars"></span></a>
                                <a href="?page=agen&aksi=delete&id='.$data['id'].'" class="btn btn-danger"><span class="fa fa-trash"></span></a>
                              </td>
                          </tr>
                        <?php } ?>
                        </tbody>
                    </table>
              </div>
          </div>
        </div>';
      }
  }
?>
