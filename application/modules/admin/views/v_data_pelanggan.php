  <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Data Pelanggan</strong>
                        </div>
                        <div class="card-body">
                          <div class="table-responsive">
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                      <th>No.</th>
                                      <th>Nama Pelanggan</th>
                                      <th>Username</th>
                                      <th>Password</th>
                                      <th>Alamat</th>
                                      <th>Nomor Kwh</th>
                                      <th>Tarif</th>
                                      <th>Aksi</th>
                                  </tr>
                                 
                              </thead>
                              <tbody>
                                <?php
                                  $no=0;
                                  foreach ($data_pel as $dp) {
                                    $no++;
                                    echo '<tr>
                                            <td>'.$no.'</td>
                                            <td>'.$dp->nama_pelanggan.'</td>
                                            <td>'.$dp->username.'</td>
                                            <td>'.$dp->password.'</td>
                                            <td>'.$dp->alamat.'</td>
                                            <td>'.$dp->nomor_kwh.'</td>
                                            <td></td>
                                            <td>
                                                <a href="C_data_pelanggan/hapus_pel/'.$dp->id_pelanggan.'" class="btn btn-danger btn-sm" onclick="return confirm(\'anda yakin ?\')">Hapus</a></td>
                                          </tr>';
                                  }
                                ?>  
                              </tbody>
                        </table>
                          </div>
                            
                    
                    </div>
                </div>
            </div>
