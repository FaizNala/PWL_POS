{{-- resources/views/profile/show_ajax.blade.php --}}
<div class="modal-header">
    <h5 class="modal-title">Detail Profile</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <div class="row">
        <div class="col-md-4">
            @if($user->avatar)
                <img src="{{ Storage::url('avatars/' . $user->avatar) }}"
                     alt="Profile Avatar"
                     class="img-thumbnail mb-3">
            @endif
        </div>
        <div class="col-md-8">
            <table class="table">
                <tr>
                    <th width="200">Username</th>
                    <td>{{ $user->username }}</td>
                </tr>
                <tr>
                    <th>Nama</th>
                    <td>{{ $user->nama }}</td>
                </tr>
                <tr>
                    <th>Level</th>
                    <td>{{ $user->level->level_nama }}</td>
                </tr>
            </table>
        </div>
    </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
</div>
