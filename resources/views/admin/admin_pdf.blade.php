<!DOCTYPE html>
<html>

    <head>
        <title>Laporan Data Admin</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">	
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
    </head>

    <body>
            <font face="Maiandra GD" style="text-align:center"><h1>DATA ADMIN</h1></font>

            <br></br><br>

            <table class="table table-sm table-bordered">
                <thead class="thead-light">
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>No.HP</th>
                    <th>Alamat</th>
                </tr>
                </thead>

                @foreach($admin as $a)
                <tr>
                    <td>{{ $a->NAMA_ADMIN }}</td>
                    <td>{{ $a->EMAIL_ADMIN }}</td>
                    <td>{{ $a->PASSWORD_ADMIN }}</td>
                    <td>{{ $a->NO_HP_ADMIN }}</td>
                    <td>{{ $a->ALAMAT_ADMIN }}</td>
                </tr>
                @endforeach
            </table>
    <body>
</html>