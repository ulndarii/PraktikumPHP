<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Daftar Dosen</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Title</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
        <h1 style="color: blue;">Daftar Dosen</h1>
<table border="1" width="100%">
    <thead style="background-color: rgb(184, 184, 244)">
        <tr>
            <th>No</th>
            <th>NIDN</th>
            <th>Nama Dosen</th>
            <th>Pendidikan</th>
            <th>Gender</th>
        </tr>
    </thead>
    <tbody style="text-align: center;background-color: rgb(156, 241, 248)">
    <?php
    $nomor = 1;
    foreach($list_dsn as $obj){
        ?>
        <tr>
            <td><?=$nomor?></td>
            <td><?=$obj->nidn?></td>
            <td><?=$obj->nama?></td>
            <td><?=$obj->pendidikan?></td>
            <td><?=$obj->gender?></td>
        </tr>
    <?php
    $nomor++;
    }?>  
    </tbody>
</table>
<br>
<a href="<?php echo base_url('index.php/dosen/create')?>" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Create Dosen</a>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>