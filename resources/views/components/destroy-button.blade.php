<form action="{{ url($url)}}"
      method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-outline-danger btn-sm delete-confirmation" data-toggle="tooltip"
            title="{{$message}}"><i class="fa fa-trash"></i>
    </button>
</form>

<script>
    var elems = document.getElementsByClassName('delete-confirmation');
    var confirmIt = function (e) {
        if (!confirm(
            "O'chirmoqchimisiz !\nAgar o'chirsanggiz unga tegishli bo'lgan hamma malumotlar ham o'chiriladi !\nDavom etmoqchi bo'lsanggiz OK aks holda Cancel."
        )) e.preventDefault();
    };
    for (var i = 0, l = elems.length; i < l; i++) {
        elems[i].addEventListener('click', confirmIt, false);
    }
</script>
