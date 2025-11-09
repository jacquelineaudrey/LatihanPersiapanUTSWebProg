@php
    use Illuminate\Support\Str;
@endphp

<div class="my-5">
    <h4 class="mb-4 mt-4">
        @yield('heading', 'All Articles')
    </h4>
    @foreach($articles as $a)
        <div class="card mb-4 p-3">
            <div class="d-flex flex-column flex-md-row">
                {{-- image artikel  --}}
                <div class="flex-shrink-0">
                    <img src="{{ asset ($a->image) }}" alt="{{ $a->title }}" class="img-fluid rounded" style="width: 300px; height: 200px; object-fit: cover;">
                </div>

                {{-- deskripsi artikel --}}
                <div class="grow ms-md-3 mt-3 mt-md-0 d-flex flex-column">
                    <div>
                        <h5 class="mb-3">{{ $a->title }}</h5>
                        <p class="text-muted mb-1 d-flex align-items-center gap-5">
                            <span><i class="bi bi-calendar me-2"></i> {{ $a->created_at->format('d M Y') }}</span>
                            <span><i class="bi bi-person me-2"></i> {{ $a->writer->name }}</span>
                        </p>
                        <p class="mt-2">{{ Str::limit($a->content, 300) }}</p>

                        @if(!empty($showViews))
                            <p class="text-muted"><small>Views: {{ $a->views }}</small></p>
                        @endif
                    </div>
                    <a href="{{ route('article', ['id' => $a->id]) }}" class="btn btn-edu-primary btn-md mt-auto align-self-end">
                        Read More
                    </a>
                </div>
            </div>
        </div>
    @endforeach
</div>
