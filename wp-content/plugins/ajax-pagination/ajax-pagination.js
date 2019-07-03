// chắc chắn là đang sử dụng chế độ No Conflict của jQuery, sử dụng jQuery() thay vì $()
jQuery.noConflict();
// load sau khi website được tải xong
jQuery(document).ready(function($) {
    $(document).on('click', '.nav-pagination li a', function(event) {
            event.preventDefault();
        }) // end event
});