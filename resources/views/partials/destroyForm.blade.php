

<form method="POST"
  class="delete-form d-inline-block">
  @csrf()
  @method('delete')

  <button class="btn">
      <i class="fas fa-trash"></i>
  </button>
</form>

