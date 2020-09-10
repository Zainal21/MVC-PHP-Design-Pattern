<div class="container">
        <div class="card shadow">
          <div class="card-header">
              <h4 class="text-muted">
                <strong>Daftar Buku</strong>
              </h4>
          </div>
            <div class="card-body ">
              <div class="table-responsive">
              <table border="1" cellpadding="10" cellspacing="0" class="table table-bordered">
              <thead class="thead thead-dark">
              <tr>
                  <th>#</th>
                  <th>Judul</th>
                  <th>Penulis</th>
                  <th>Jenis</th>
                </tr>
              </thead>
							<?php $i = 1; ?>
                <?php foreach($data as $item){?>
                <tr>
                  <td><?= $i++?></td>
                  <td><?=$item['judul']?></td>
                  <td><?=$item['Penulis']?></td>
                  <td><?=$item['Jenis']?></td>
                 </tr>
                <?php } ?>
              <tbody>
              </tbody>
              </table>
              </div>
            </div>
        </div>
    </div>
