@extends('admin.layout.layout')

@section('title', 'Visualisasi Gempa')

@section('title-bar', 'Visualisasi Gempa')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Visualisasi Gempa</h4>
                </div>

                <div class="card-body">
                    <div class="maps" id="maps"></div>
                </div>

                <style>
                    .maps {
                        height: 500px;
                        width: 100%;
                    }

                </style>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')

<script>
    var map = L.map('maps').setView([-0.789275, 113.921327], 5);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 18
        , attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
            '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>'
    }).addTo(map);

    var data = @json($data);

    data.forEach(function(gempa) {
        // Ensure latitude, longitude, and radius are valid numbers
        var latitude = parseFloat(gempa.latitude);
        var longitude = parseFloat(gempa.longitude);
        var radius = parseFloat(gempa.radius) * 1000; // Convert km to meters

        if (isNaN(latitude) || isNaN(longitude) || isNaN(radius)) {
            console.error("Invalid data for gempa:", gempa);
            return; // Skip this gempa if any value is not a number
        }

        var circle = L.circle([latitude, longitude], {
            radius: radius
            , color: '#ff0000', // Outline color
            fillColor: '#ff0000', // Fill color
            fillOpacity: 0.5 // Opacity of the fill color
        }).addTo(map);

        // Bind popup to the circle
        circle.bindPopup("<b>" + gempa.nama + "</b><br>" + gempa.tanggal + "<br>Latitude: " + latitude + "<br>Longitude: " + longitude + "<br>Radius: " + radius + " m");
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
