<div>
    <div>
        <div class="col-md-12 mb-2">
            @if(session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{ session()->get('success') }}
                </div>
            @endif

            @if(session()->has('error'))
                <div class="alert alert-danger" role="alert">
                    {{ session()->get('error') }}
                </div>
            @endif

            @if($addPost)
                @include('livewire.create')
            @endif

            @if($updatePost)
                @include('livewire.update')
            @endif
        </div>

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    @if(!$addPost)
                        <button wire:click="create()" class="btn btn-primary btn-sm float-end">Tambahkan Bimbingan Baru</button>
                    @endif
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Judul</th>
                                <th>Topik</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse ($posts as $post)
                                <tr>
                                    <td>
                                        {{$post->title}}
                                    </td>
                                    <td>
                                        {{$post->content}}
                                    </td>
                                    <td>{{ $post->status == 1 ? 'Draft':'Publish' }}</td>
                                    <td>
                                        <button wire:click="edit({{$post->id}})"
                                                class="btn btn-primary btn-sm">Edit</button>
                                        <button wire:click="destroy({{ $post->id }})"
                                                class="btn btn-danger btn-sm">Delete</button>
                                        <a href="http://127.0.0.1:8000/Chat"
                                                class="btn btn-secondary btn-sm">Join</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" align="center">
                                        Tidak Ada Bimbingan Karir.
                                    </td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
