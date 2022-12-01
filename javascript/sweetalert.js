// uso de alertas sweetalert ........ funcion no utilizada 
//no hay validaciones
//alertas no definidas .. no funcionna...
$("").click(function(){
e.preventDefault();
var url=e.currentTarget.getAttribute('href');
Swal.fire({
     title: 'Are you sure?',
     text: "You won't be able to revert this!",
     icon: 'warning',
     showCancelButton: true,
     confirmButtonColor: '#3085d6',
     cancelButtonColor: '#d33',
     confirmButtonText: 'Yes, delete it!'
}).then((result) => {
if (result.isConfirmed) {
    window.location.href=url;
    Swal.fire(
         'Deleted!',
         'Your file has been deleted.',
         'success'
       )
     }
   })
});

