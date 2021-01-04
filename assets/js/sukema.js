
// Alert Success
const flashdata = $('.flash-data').data('flashdata');
console.log(flashdata);
if (flashdata) {
    Swal.fire({
      title:  flashdata,
      icon:  'success'
    })
}

// Alert Error
const flashdataerr = $('.flash-data-err').data('flashdata');
console.log(flashdataerr);
if(flashdataerr){
    Swal.fire({
        title:  flashdataerr,
        icon:  'error'
      })
}

// Alert Hapus
$(document).on('click', '.btn-hapus', function(e) {
    e.preventDefault();
    const href = $(this).attr('href');
    Swal.fire({
        title: 'Hapus data?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Hapus'
    }).then((result) => {
        if (result.isConfirmed) {
            document.location.href = href;
        }
      })
});