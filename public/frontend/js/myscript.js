$(function () {
    toastr.options = {
        "closeButton": true,
        "positionClass": "toast-top-center",
        "timeOut": "10000",
    }
     //--------- Send Mail ---------//
     $('#submit').click(function () {
        $('#submit').html('Please wait');
        $('#submit').attr('disabled', true);
        var _that = $(this);
        //---------- Prepare Data Send To Ajax: URL, Data(optional) -----------//
        var _url = _that.data('action');
        $.ajax({
            url: _url,
            data: $('#frmContactus').serialize(),
            method: 'POST',
            success: function (d) {
                if (d.status == 'success') {

                    $('#submit').html('Send Message');
                    $('#submit').attr('disabled', false);
                    toastr.success(d.msg);
                    $('#frmContactus')[0].reset();
                } else {
                    $('#submit').html('Send Message');
                    $('#submit').attr('disabled', false);
                    toastr.error(d.msg);
                }

            },
            error: function (d) {
                $('#submit').html('Send Message');
                $('#submit').attr('disabled', false);
                toastr.error(d.msg);
            }
        });
    });
});
