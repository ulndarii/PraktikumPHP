<h1  style="color: blue;">Daftar Mahasiswa</h1>
<table border="1" width="100%">
    <thead style="background-color: rgb(184, 184, 244)">
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama Mahasiswa</th>
            <th>Gender</th>
            <th>IPK</th>
            <th>Predikat</th>
        </tr>
    </thead>
    <tbody style="text-align: center; background-color: rgb(156, 241, 248)">
    <?php
    $nomor = 1;
    foreach($list_mhs as $obj){
        ?>
        <tr>
            <td><?=$nomor?></td>
            <td><?=$obj->nim?></td>
            <td><?=$obj->nama?></td>
            <td><?=$obj->gender?></td>
            <td><?=$obj->ipk?></td>
            <td><?=$obj->predikat()?></td>
        </tr>
        <?php
        $nomor++;
    }?>
    </tbody>
</table>