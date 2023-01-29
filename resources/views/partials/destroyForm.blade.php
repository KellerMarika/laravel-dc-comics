<form action="{{ route('comics.destroy', $element->id) }}" method="POST" class="delete-form d-inline-block">
    @csrf()
    @method('delete')

    <button class="btn btn-link p-1">
        <i class="fas fa-trash"></i>
    </button>
</form>
