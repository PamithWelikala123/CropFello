var script = document.createElement('script');
script.src = 'https://cdn.jsdelivr.net/npm/sweetalert2@11.1.5/dist/sweetalert2.all.min.js';
document.getElementsByTagName('head')[0].appendChild(script);


function done(){

Swal.fire({
  title: 'Success!',
  text: 'Your request has been processed.',
  icon: 'success',
  confirmButtonText: 'OK'
});

}