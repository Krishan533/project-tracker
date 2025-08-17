$(function () {
  const tbl = $('#projects-table').DataTable({
    pageLength: 10,
    order: [[0, 'desc']]
  });

  $('.btn-delete').on('click', function(e){
    e.preventDefault();
    const url = $(this).attr('href');
    Swal.fire({
      title: 'Delete this project?',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Yes, delete'
    }).then((res)=>{ if(res.isConfirmed) window.location = url; });
  });
});