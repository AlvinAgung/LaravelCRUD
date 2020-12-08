<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <center> <h1>Input Pegawai ICT</h1> </center> <br>
            <form action="{{ URL::to('/simpanpegawai') }}" method="post" >
                    @csrf
                <div class="col-md-6">
                    <label for="">Nama Pegawai</label> <br>
                    <input type="text" name="nama_pegawai" class="form-control" placeholder="Nama Pegawai" > <br>
                     <label for="">No Telp</label> <br>
                    <input type="number" name="no_telp" class="form-control " placeholder="No Telp" > <br>
                    <label for="">Email</label> <br>
                    <input type="email" name="email" class="form-control " placeholder="email"> <br>
                    <label for="">Jabatan</label> <br>
                    <select name="id_jabatan" class="form-control"> <br>
                        @foreach ($jabatan as $jbt) 
                            <option value="{{ $jbt->id }}"> {{ $jbt->nama_jabatan }} </option>
                        @endforeach
                    </select>
                    <input type="submit" value="Add" class="btn btn-success mt-3">
                </div>
            </form>
            </div>
        </div>
    </div>
</body>
</html>