@forelse ($data as $item)
    <div class="card mb-4 text-left">
        <div class="card-body">
            <div class="card-title d-flex justify-content-between mb-2">
                <h5>{{ $item->project_name }}</h5>
            </div>
            <hr>
            <h6>Tanggal : </h6>
            <p> {{ $item->project_date }}</p>
            <h6>Photo : </h6>
            <p>{{ $item->photo }}</p>
        </div>
        <div class="card-footer text-right d-flex justify-content-end gap-2">
            <a href="{{ route('project.edit', $item->id) }}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
            <form action="{{ route('project.destroy', $item->id) }}" method="post">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
            </form>
        </div>
    </div>
@empty
    <p>Siswa belum memiliki project</p>
@endforelse
