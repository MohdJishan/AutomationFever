function ShowToast(userTitle,userStatus)
{
        const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
        });

        
        if(userStatus=='success'){
            toastr.success(userTitle);
        } else if(userStatus=='error'){
            toastr.error(userTitle);
        } else if(userStatus=='info'){
            toastr.info(userTitle);
        } else if(userStatus=='warning'){
            toastr.warning(userTitle);
        }
        
}