@extends('admin.layout.layout')

@section('title', 'Data Gempa')

@section('title-bar', 'Data Gempa')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data Gempa</h4>
                </div>
                <div class="text-end m-2">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#Add" class="btn btn-success shadow btn-xs sharp me-1"><i class="fa fa-add"></i></a>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#Import" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fa fa-box"></i></a>
                </div>
                <div class="card-body">
                    @if($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show mt-2">



                        <?php

                $nomer = 1;

                ?>

                        @foreach($errors->all() as $error)
                        <li>{{ $nomer++ }}. {{ $error }}</li>
                        @endforeach
                    </div>
                    @endif
                    <div class="table-responsive">
                        <table id="test" class="display min-w850">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Tanggal</th>
                                    <th>Latitude</th>
                                    <th>Longitude</th>
                                    <th>Radius</th>
                                    <th>Korban</th>
                                    <th>Deskripsi</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($gempa as $data )
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $data->nama }}</td>
                                    <td>{{ $data->tanggal }}</td>
                                    <td>{{ $data->latitude }}</td>
                                    <td>{{ $data->longitude }}</td>
                                    <td>{{ $data->radius }} KM</td>
                                    <td>{{ $data->korban }}</td>
                                    <td>{{ $data->deskripsi }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#Edit{{ $data->id }}" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fa fa-pencil"></i></a>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#Delete{{ $data->id }}" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <!-- edit -->
                                <div class="modal fade" id="Edit{{ $data->id }}">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Edit</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal">
                                                </button>
                                            </div>
                                            <form action="/gempa/{{ $data->id }}" method="post">
                                                @csrf
                                                @method('put')
                                                <div class="modal-body">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label>Nama</label>
                                                            <input type="text" value="{{ $data->nama }}" name="nama" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label>Tanggal</label>
                                                            <input type="date" value="{{ $data->tanggal }}" name="tanggal" class="form-control">
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label>Latitude</label>
                                                            <input id="lat{{ $data->id }}" type="text" value="{{ $data->latitude }}" name="latitude" class="form-control">
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label>Longitude</label>
                                                            <input id="long{{ $data->id }}" type="text" value="{{ $data->longitude }}" name="longitude" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label>Radius</label>
                                                            <input id="long{{ $data->id }}" type="text" value="{{ $data->radius }}" name="radius" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label>Korban</label>
                                                            <input id="long{{ $data->id }}" type="text" value="{{ $data->korban }}" name="korban" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label>Deskripsi</label>
                                                            <input id="long{{ $data->id }}" type="text-area" value="{{ $data->deskripsi }}" name="deskripsi" class="form-control">
                                                        </div>
                                                    </div>


                                                    <div class="map2" id="map2{{ $data->id }}" style="height: 300px; width: 100%;"></div>


                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- edit -->
                                <!-- delete -->
                                <div class="modal fade" id="Delete{{ $data->id }}">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Delete</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal">
                                                </button>
                                            </div>
                                            <div class="modal-body">Anda Yakin Akan Menghapus {{ $data->nama }} ?</div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                                                <form action="/gempa/{{ $data->id }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-primary">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- delete -->
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- add -->
    <div class="modal fade" id="Add">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                    </button>
                </div>
                <form action="/gempa" method="post">
                    @csrf
                    @method('post')
                    <div class="modal-body">
                        @csrf
                        <div class="row">
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="nama" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label>Tanggal</label>
                                <input type="date" name="tanggal" class="form-control">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group">
                                <label>Latitude</label>
                                <input id="lat" type="text" name="latitude" class="form-control">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group">
                                <label>Longitude</label>
                                <input id="long" type="text" name="longitude" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                       <div class="form-group">
                       <label>Radius (km)</label>
                       <input type="number" name="radius" class="form-control" required>
                       </div>
                       </div>
                       <div class="row">
                       <div class="form-group">
                       <label>Korban</label>
                       <input type="number" name="korban" class="form-control" required>
                       </div>
                       </div>
                       <div class="row">
    <div class="form-group">
        <label for="deskripsi">Deskripsi</label>
        <textarea id="deskripsi" name="deskripsi" class="form-control" rows="5" required></textarea>
    </div>
</div>


                        <div class="map2">
                            <div id="map2"></div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- add -->
    <!-- import -->
    <div class="modal fade" id="Import">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                    </button>
                </div>
                <form action="/gempa-import" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('post')
                    <div class="modal-body">
                        @csrf
                        <div class="row">
                            <div class="mb-3">
                                <label for="formFileSm" class="form-label">Pilih FIle Excel</label>
                                <input class="form-control form-control-sm" name="file" id="formFileSm" type="file">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- import -->
</div>
@endsection
@section('script')

<script>
    document.addEventListener("DOMContentLoaded", function() {
        @foreach($gempa as $data)
        var map{{ $data->id }};
        var marker{{ $data->id }};

        $('#Edit{{ $data->id }}').on('shown.bs.modal', function() {
            if (!map{{ $data->id }}) {
                map{{ $data->id }} = L.map('map2{{ $data->id }}').setView([{{ $data->latitude }}, {{ $data->longitude }}], 10);
                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    maxZoom: 19
                }).addTo(map{{ $data->id }});

                marker{{ $data->id }} = L.circleMarker([{{ $data->latitude }}, {{ $data->longitude }}], {draggable: true}).addTo(map{{ $data->id }});

                map{{ $data->id }}.on('click', function(e) {
                    var lat = e.latlng.lat;
                    var long = e.latlng.lng;

                    document.getElementById('lat{{ $data->id }}').value = lat;
                    document.getElementById('long{{ $data->id }}').value = long;

                    marker{{ $data->id }}.setLatLng([lat, long]);
                });

                marker{{ $data->id }}.on('dragend', function(e) {
                    var lat = e.target.getLatLng().lat;
                    var long = e.target.getLatLng().lng;

                    document.getElementById('lat{{ $data->id }}').value = lat;
                    document.getElementById('long{{ $data->id }}').value = long;
                });
            }
            setTimeout(function() {
                map{{ $data->id }}.invalidateSize();
            }, 500);
        });
        @endforeach
    });
</script>


<script>

    var mymap = L.map('map2').setView([-7.276, 112.791], 10);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19
    }).addTo(mymap);

    var marker = L.circleMarker([-7.276, 112.791]).addTo(mymap);

    mymap.on('click', function(e) {
        var lat = e.latlng.lat;
        var long = e.latlng.lng;

        document.getElementById('lat').value = lat;
        document.getElementById('long').value = long;

        marker.setLatLng([lat, long]);
    });

    marker.on('dragend', function(e) {
        var lat = e.target.getLatLng().lat;
        var long = e.target.getLatLng().lng;

        document.getElementById('lat').value = lat;
        document.getElementById('long').value = long;
    });

    // Event listener untuk modal
    $('#Add').on('shown.bs.modal', function() {
        setTimeout(function() {
            mymap.invalidateSize();
        }, 500);
    });

</script>

@if(Session::get('store'))
<script>
    toastr.success("Data Berhasil Ditambahkan", "Info", {
        timeOut: 5000
        , closeButton: !0
        , debug: !1
        , newestOnTop: !0
        , progressBar: !0
        , positionClass: "toast-top-right"
        , preventDuplicates: !0
        , onclick: null
        , showDuration: "300"
        , hideDuration: "1000"
        , extendedTimeOut: "1000"
        , showEasing: "swing"
        , hideEasing: "linear"
        , showMethod: "fadeIn"
        , hideMethod: "fadeOut"
        , tapToDismiss: !1
    })

</script>
@endif

@if(Session::get('update'))
<script>
    toastr.success("Data Berhasil Diubah", "Info", {
        timeOut: 5000
        , closeButton: !0
        , debug: !1
        , newestOnTop: !0
        , progressBar: !0
        , positionClass: "toast-top-right"
        , preventDuplicates: !0
        , onclick: null
        , showDuration: "300"
        , hideDuration: "1000"
        , extendedTimeOut: "1000"
        , showEasing: "swing"
        , hideEasing: "linear"
        , showMethod: "fadeIn"
        , hideMethod: "fadeOut"
        , tapToDismiss: !1
    })

</script>
@endif

@if(Session::get('delete'))
<script>
    toastr.success("Data Berhasil Dihapus", "Info", {
        timeOut: 5000
        , closeButton: !0
        , debug: !1
        , newestOnTop: !0
        , progressBar: !0
        , positionClass: "toast-top-right"
        , preventDuplicates: !0
        , onclick: null
        , showDuration: "300"
        , hideDuration: "1000"
        , extendedTimeOut: "1000"
        , showEasing: "swing"
        , hideEasing: "linear"
        , showMethod: "fadeIn"
        , hideMethod: "fadeOut"
        , tapToDismiss: !1
    })

</script>
@endif

<script>
    $('#test').DataTable({
        autoWidth: true,
        // "lengthMenu": [
        //     [16, 32, 64, -1],
        //     [16, 32, 64, "All"]
        // ]
        dom: 'Bfrtip',


        lengthMenu: [
            [10, 25, 50, -1]
            , ['10 rows', '25 rows', '50 rows', 'Show all']
        ],

        buttons: [{
                extend: 'colvis'
                , className: 'btn btn-primary btn-sm'
                , text: 'Column Visibility',
                // columns: ':gt(0)'


            },

            {

                extend: 'pageLength'
                , className: 'btn btn-primary btn-sm'
                , text: 'Page Length',
                // columns: ':gt(0)'
            },


            // 'colvis', 'pageLength',

            {
                extend: 'excel'
                , className: 'btn btn-primary btn-sm'
                , exportOptions: {
                    columns: [0, ':visible']
                }
            },

            // {
            //     extend: 'csv',
            //     className: 'btn btn-primary btn-sm',
            //     exportOptions: {
            //         columns: [0, ':visible']
            //     }
            // },
            {
                extend: 'pdf'
                , className: 'btn btn-primary btn-sm'
                , exportOptions: {
                    columns: [0, ':visible']
                }
            },

            {
                extend: 'print'
                , className: 'btn btn-primary btn-sm'
                , exportOptions: {
                    columns: [0, ':visible']
                }
            },

            // 'pageLength', 'colvis',
            // 'copy', 'csv', 'excel', 'print'

        ]
    , });

</script>

@endsection
