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