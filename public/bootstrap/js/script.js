$(document).ready(function() {
    $('#table-buku').DataTable({
        "language": {
            "decimal": "",
            "emptyTable": "Tidak ada data tersedia di tabel",
            "info": "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
            "infoEmpty": "Menampilkan 0 sampai 0 dari 0 data",
            "infoFiltered": "(difilter dari _MAX_ total data)",
            "infoPostFix": "",
            "thousands": ",",
            "lengthMenu": "Tampilkan _MENU_ data per halaman",
            "loadingRecords": "Memuat...",
            "processing": "Sedang diproses...",
            "search": "Cari:",
            "zeroRecords": "Tidak ada data yang cocok",
            "paginate": {
                "first": "Pertama",
                "last": "Terakhir",
                "next": ">",
                "previous": "<"
            },
            "aria": {
                "sortAscending": ": aktifkan untuk mengurutkan kolom secara menaik",
                "sortDescending": ": aktifkan untuk mengurutkan kolom secara menurun"
            }
        }
    });
});