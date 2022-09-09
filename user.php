<?php
$aksi = isset($_GET['aksi']) ? $_GET['aksi'] : "";
if ($aksi == "import") {
    include "user_import.php";
}
if ($aksi == "") {
?>

    <h3 align="center">Manajemen Data user</h3>
    <hr>
    <a href="index.php?menu=user&aksi=import">
        <button>Import CSV</button>
    </a>
    <a href="user_truncate.php" class="btn btn-biru">
        <button>Clear Data</button>
    </a>

    <hr style="clear: both;">
    <form action="index.php" method="get">
        <input type="hidden" name="menu" value="user">
        <input type="text" name="cari" required placeholder="Cari ID atau first name">
        <input type="submit" value="Cari Data">
    </form>
    <hr>
    <table id="tabel-data" width="100%" cellspacing="1" cellpadding="4" class="tabel">
        <tr>
            <th width="50">No</th>
            <th width="75">ID</th>
            <th width="100">First Name</th>
            <th width="100">Last Name</th>
            <th width="75">Address</th>
        </tr>
        <?php

        $cari  = isset($_GET['cari']) ? $_GET['cari'] : "";
        $where = "";
        if (!empty($cari)) {
            $where = " WHERE id LIKE '%$cari%' OR 
      firstname LIKE '%$cari%'";
        }
        //ambil data dari database dengan sql
        $sql = "SELECT * FROM mdl_coba $where ORDER BY id DESC";
        $query = mysqli_query($koneksi, $sql);
        $no = 1;
        while ($data = mysqli_fetch_array($query)) {
            $linkdelete = "user_querydelete.php?id=$data[id]";
            $linkedit   = "index.php?menu=user&aksi=edit&id=$data[id]";
        ?>
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $data['id']; ?></td>
                <td><?php echo $data['firstname']; ?></td>
                <td><?php echo $data['lastname']; ?></td>
                <td><?php echo $data['address']; ?></td>
            </tr>
        <?php
            $no++;
        }
        ?>
        <script>
            $(document).ready(function() {
                $('#tabel-data').DataTable();
            });
        </script>
    </table>
<?php
} //jika aksi kosong
?>