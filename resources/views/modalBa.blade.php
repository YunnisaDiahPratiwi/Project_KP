<!-- Modal -->
<div class="modal fade" id="deleteModal{{$beritaAcara->id}}" tabindex="-1" aria-labelledby="deleteModalLabel{{$beritaAcara->id}}" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title" id="deleteModalLabel{{$beritaAcara->id}}">Hapus Berita Acara {{$beritaAcara->it_asset}}?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="text-white">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Apakah Anda yakin ingin menghapus <strong>{{$beritaAcara->it_asset}}</strong>?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">
            <i class="fas fa-times"></i> Tutup
        </button>
        <form action="{{ route('deleteBa', $beritaAcara->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-sm btn-danger">
                <i class="fas fa-trash"></i> Hapus
            </button>
        </form>
      </div>
    </div>
  </div>
