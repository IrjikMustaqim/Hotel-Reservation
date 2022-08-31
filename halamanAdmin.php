<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.dataTables.min.css">
    
    <style>
        body{
            background-color: #e8dfdf;
        }
        a{
            text-decoration: none;
            color: white;
        }
        a:hover{
            color: white;
        }
    </style>
    <title>Halaman Admin</title>
</head>
<body>
    <button class="btn btn-primary mt-4"><a href="index.php">Kembali ke halaman utama</a></button>
    <br><br><br>
    <table id="tabel" width="100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Country</th>
                <th>Type Room</th>
                <th>Bed</th>
                <th>Room</th>
                <th>Check-In</th>
                <th>Check-Out</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include 'db.php';
                $rb = mysqli_query($con, "SELECT * FROM  roombook");
                    while($row = mysqli_fetch_array($rb)){
                        echo "<tr>
                        <td>".$row['id']."</td>
                        <td>".$row['FName']."</td>
                        <td>".$row['LName']."</td>
                        <td>".$row['Email']."</td>
                        <td>".$row['Country']."</td>
                        <td>".$row['TRoom']."</td>
                        <td>".$row['Bed']."</td>
                        <td>".$row['NRoom']."</td>
                        <td>".$row['cin']."</td>
                        <td>".$row['cout']."</td>
                        <td>
                        <button class='btn btn-danger'><a href='delete.php?id=$row[id]' style='color: white; text-decoration: none'>Hapus</a></button>
                        </td>
                        </tr>";
                                        }
            ?>
        </tbody>
    </table>               
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.js"></script>
        <script>
            $(document).ready(function() {
                $('#tabel').DataTable({
                    "responsive": true
                });
            } );
        </script>
</body>
</html>