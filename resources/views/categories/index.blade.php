<x-layout>
    <x-slot name="title">Halaman Tipe Mobil</x-slot>
    @if (session('success'))
        <div class="alert alert-primary mb-3" role="alert">
            <strong>Yesss</strong> Data Berhasil ditambahkan ke dalam sistem.
        </div>
    @elseif ($errors->any())
        <div class="alert alert-danger mb-3" role="alert">
            <strong>Nooo</strong> Terdapat kesalahan dalam penginputan data, farap periksa kembali.
        </div>
    @endif
    <div class="card">
        <div class="card-header">
            @include('categories.store')
        </div>
        <div class="card-body pt-5">
            <table id="example" class="display responsive nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Tipe</th>
                        <th>Keterangan</th>
                        <th>Pilihan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $no => $item)
                        <tr>
                            <td>{{ ++$no }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->description }}</td>
                            <td>
                                <div class="d-flex">
                                    <a name="" id="" class="mx-1 btn btn-info" href="#"
                                        role="button">Button</a>
                                    <a name="" id="" class="mx-1 btn btn-danger" href="#"
                                        role="button">Button</a>
                                </div>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @section('css')
        @include('datatables.tablecss')
    @endsection
    @section('script')
        @include('datatables.tablescript')
    @endsection
</x-layout>
