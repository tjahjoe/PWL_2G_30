<form action="{{ url('/poto') }}" method="POST" id="form-ubah" enctype="multipart/form-data">
    @csrf
    <div id="modal-master" class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ubah Poto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <div class="form-group d-flex align-items-center">
                    <div class="mr-3">
                        <img id="preview-image" src="{{ asset('/storage/poto/profil/poto.png') }}" alt="Preview"
                            style="width: 100px; height: 100px; object-fit: cover; border: 1px solid #ccc;">
                    </div>
                    <div style="flex: 1;">
                        <label for="poto">Pilih File</label>
                        <input type="file" name="poto" id="poto" class="form-control" accept="image/*" required>
                        <small id="error-poto" class="error-text form-text text-danger"></small>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn btn-warning">Batal</button>
                <button type="submit" class="btn btn-primary">Upload</button>
            </div>
        </div>
    </div>
</form>
<script>
    $(document).ready(function () {
        $("#poto").on("change", function () {
            const file = this.files[0];
            if (file && file.type.match('image.*')) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    $("#preview-image").attr("src", e.target.result);
                }
                reader.readAsDataURL(file);
            } else {
                $("#preview-image").attr("src", "{{ asset('/storage/poto/profil/poto.png') }}");
            }
        });

        // Validasi form
        $("#form-ubah").validate({
            rules: {
                poto: {
                    required: true,
                    extension: "jpg|jpeg|png"
                }
            },
            messages: {
                poto: {
                    extension: "Format file harus .jpg, .jpeg, atau .png"
                }
            },
            submitHandler: function (form) {
                var formData = new FormData(form);
                $.ajax({
                    url: form.action,
                    type: form.method,
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function (response) {
                        if (response.status) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Berhasil',
                                text: response.message,
                            }).then(function () {
                                window.location = response.redirect;
                            });
                        } else {
                            $('.error-text').text('');
                            $.each(response.msgField, function (prefix, val) {
                                $('#error-' + prefix).text(val[0]);
                            });
                            Swal.fire({
                                icon: 'error',
                                title: 'Terjadi Kesalahan',
                                text: response.message
                            });
                        }
                    }
                });
                return false;
            },
            errorElement: 'span',
            errorPlacement: function (error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function (element) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function (element) {
                $(element).removeClass('is-invalid');
            }
        });
    });
</script>
