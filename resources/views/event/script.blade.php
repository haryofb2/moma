<!-- JAVASCRIPT -->
<script>
    //CSRF TOKEN PADA HEADER
    //Script ini wajib krn kita butuh csrf token setiap kali mengirim request post, patch, put dan delete ke server
    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    });

    $('body').on('click', '#add-user', function () {
            $.get('admin/event/new-event', function (data) {
                $('#modal-judul').html("add company");
                $('#tombol-simpan').val("add-post");
                $('#tombol-simpan').attr("hidden",false);

                $('#tambah-edit-event').modal('show');
                $('input','textarea').val('');
                $('input').attr('readonly',false);
                $('textarea').attr('readonly',false);
                $("#kd_kota").prop("disabled", false);
                //set value masing-masing id berdasarkan data yg diperoleh dari ajax get request diatas
            })
        }
    );



</script>

<!-- JAVASCRIPT -->