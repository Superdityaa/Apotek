<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <!-- MODAL -->
        <div class="modal fade" id="editproduk" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Data Obat</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form action="/updateObat/{{$data->id}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Nama Obat</label>
                        <br />
                        <input type="text" class="form-control" name="nama_obat"  value="{{$data->nama_obat}}"/>

                        <div class="form-group mt-4">
                            <label>Jenis Obat</label>
                            <br />
                            <input type="text" class="form-control" name="jenis_obat" value="{{$data->jenis_obat}}"/>
                        </div>

                        <div class="form-group mt-4">
                            <label>Harga Obat</label>
                            <br />
                            <input type="text" class="form-control" name="harga_obat"  value="{{$data->harga_obat}}"/>
                        </div>

                        <div class="form-group mt-4">
                            <label>Khasiat Obat</label>
                            <br />
                            <input type="text" class="form-control" name="khasiat_obat"  value="{{$data->khasiat_obat}}"/>
                        </div>
                    </div>
                </form>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                    <button type="button" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </div>
    <!-- END MODAL -->    

</body>
</html>