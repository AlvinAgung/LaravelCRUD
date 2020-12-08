<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <center> <h1>Pegawai ICT</h1> </center>

                <a class="btn btn-primary mb-4" href="/insert">Tambah Data</a>
                <table id="example" class="table table-striped table-dark">
                    <thead>
                      <tr>
                        <th> No </th>
                        <th scope="col">Nama Pegawai</th>
                        <th scope="col">No Handphone</th>
                        <th scope="col">Email</th>
                        <th>Action </th>
                      </tr>
                    </thead>
                    <?php $no=1; ?>
                    <tbody>
                        @foreach ($pegawai as $pgw)
                            <tr>
                            <td>{{ $no++ }}</td>
                                <td> {{ $pgw->nama_pegawai }} </td>
                                <td> {{ $pgw->no_telp }} </td>
                                <td> {{ $pgw->email }} </td>
                                <td>
                                <a class="btn btn-warning" href="{{ URL::to('pegawai/' . $pgw->id . '/edit') }}">Edit</a>    
                                <a class="btn btn-danger" href="{{ URL::to('pegawai/' . $pgw->id . '/delete') }}">Delete</a> 
                                </td>
                            </tr>
                        @endforeach 
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</body>
</html>