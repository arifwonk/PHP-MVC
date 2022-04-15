$(function() {

    $('.tombolTambahData').on('click', function(){

        $('#formModalLabel').html('Insert data saprepart');
        $('.modal-footer button[type=submit]').html('Insert data');
        $('#kode').val('');
        $('#deskrip').val('');
        $('#detail').val('');
        $('#qty').val('');
        $('#mrp').val('');
       
    });

    $('.tampilModalUbah').on('click', function() {

        $('#formModalLabel').html('Edit data saprepart');
        $('.modal-footer button[type=submit]').html('Edit data')
        $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/sparepart/ubah');

        const id = $(this).data('id');
        
        $.ajax({
            url: 'http://localhost/phpmvc/public/sparepart/getubah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#kode').val(data.kode);
                $('#deskrip').val(data.deskrip);
                $('#detail').val(data.detail);
                $('#qty').val(data.qty);
                $('#mrp').val(data.mrp);
                $('#id').val(data.id);
            }
        });

    });

});