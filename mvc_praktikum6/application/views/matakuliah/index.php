<h1  style="color: blue;">Daftar Matakuliah</h1>
<table border="1" width="100%">
    <thead style="background-color: rgb(184, 184, 244)">
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Nama Matakuliah</th>
            <th>Jumlah SKS</th>
        </tr>
    </thead>
    <tbody style="text-align: center;background-color: rgb(156, 241, 248)">
    <?php
    $nomor = 1;
    foreach($list_matkul as $obj){
        ?>
        <tr>
            <td><?=$nomor?></td>
            <td><?=$obj->kode?></td>
            <td><?=$obj->nama?></td>
            <td><?=$obj->sks?></td>
    <?php
    $nomor++;
    }?>
    </tbody>
</table>
