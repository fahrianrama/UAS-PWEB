$(function(){
    $('.tampilModalUbah').on('click', function(){

    const id = $(this).data('id');
    $.ajax({
        url: 'https://localhost/greenify/public/management/cekkegiatan',
        data: {id : id},
        method: 'POST',
        dataType: 'json',
        success: function(data){
            $('#nama').val(data.nama);
            $('#dana').val(data.dana);
            $('#progress2').val(data.progress);
            $('#dokumentasi2').val(data.dokumentasi);
            $('#id').val(data.idkegiatan);
        }
    })

    });
});