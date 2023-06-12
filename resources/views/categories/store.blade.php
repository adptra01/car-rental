<button type="button" class="btn mb-2 btn-primary" data-toggle="modal" data-target="#verticalModal"> Tambah Data</button>

<div class="modal fade" id="verticalModal" tabindex="-1" role="dialog" aria-labelledby="verticalModalTitle"
    aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="alert alert-primary" role="alert">
                    <strong>Peringatan</strong>
                    <p>Mohon diperhatikan agar memasukkan data mobil dengan memperhatikan kondisi mobil secara seksama.
                    </p>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="{{ Route('categories.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label class="@error('name') text-danger @enderror" for="inputname">Nama tipe mobil</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="inputname"
                            name="name" placeholder="...">
                        @error('name')
                            <small class="text-danger font-weight-bold">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="@error('description') text-danger @enderror" class="text-danger"
                            for="inputdescription">Keterangan</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="inputdescription"
                            rows="3" placeholder="..."></textarea>
                        @error('description')
                            @error('name')
                                <small class="text-danger font-weight-bold">{{ $message }}</small>
                            @enderror
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn mb-2 btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn mb-2 btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
