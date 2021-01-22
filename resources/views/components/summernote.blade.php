@section('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection
    <label for="{{$id}}">To'liq matn</label>
    <textarea class="form-control" id="{{$id}}" rows="8" name='{{$name}}'
              placeholder="{{$placeholder ?? ''}}" required>{{$text ?? ''}}</textarea>


@section('js')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $({{$id}}).summernote({
                height: 200,
                callbacks: {
                    onImageUpload: function(files, editor) {
                        let  data = new FormData();
                        data.append("image", files[0]);
                        let url = '/admin/upl';
                        $.ajax({
                            data: data,
                            type: "POST",
                            url: url,
                            cache: false,
                            contentType: false,
                            processData: false,
                            success: function(url) {
                                const img = document.createElement('img');
                                img.setAttribute('src', '/uploads/' + url);
                                $({{$id}}).summernote('insertNode', img);
                            }
                        });
                    }
                }
            });
        });
    </script>
@endsection
