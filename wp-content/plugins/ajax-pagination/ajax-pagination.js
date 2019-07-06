// chắc chắn là đang sử dụng chế độ No Conflict của jQuery, sử dụng jQuery() thay vì $()
jQuery.noConflict();
// load sau khi website được tải xong
jQuery(document).ready(function($) {
    $(document).on('click', '.nav-pagination li a', function(event) {
            event.preventDefault();
            // AJAX
            $.ajax({
                url: ajax_object.ajax_url,
                type: 'post',
                data: { action: 'ajax_pagination_data' },
                success: function(ketqua) {
                    // Thử nghiệm
                    var ketqua = "AJAX working";
                    alert(ketqua);
                }
            })
        }) // end event
});