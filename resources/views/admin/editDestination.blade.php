@extends('admin.layouts.dashboard')

@section('scripts')
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
            toolbar_mode: 'floating',
        });
    </script>
@endsection

@section('content')

    <div class="container">

        @forelse($destinations as $destination)

        <div class="row">

            <div class="col-md-8 col-md-offset-2">

                <h1 class="mt-4">Edit Destination</h1>

                <form action="{{ url('/edit-destination/'.$destination->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title <span class="require">*</span></label>
                        <input type="text" class="form-control" name="title" value="{{ $destination->title }}" />
                    </div>

                    <div class="form-group">
                        <label for="body">Description</label>
                        <textarea rows="5" class="form-control" name="body" id="mytextarea">{{ $destination->description }}</textarea>
                    </div>
                    {{-- <div class="form-group">
                    <label for="title">Category <span class="require">*</span></label>
                    <input type="text" class="form-control" name="category" />
                </div>
                <div class="form-group">
                    <label for="title">Author <span class="require">*</span></label>
                    <input type="text" class="form-control" name="author" />
                </div> --}}

                    <div class="form-group">
                        <label for="image">Choose Image</label>
                        <input id="image" type="file" name="image">
                    </div>

                    <div class="form-group d-flex flex-row-reverse">
                        <button type="submit" class="btn btn-sm btn-primary ml-2">
                            Publish
                        </button>
                        <a class="btn btn-sm btn-danger" href="{{ url('/create-destination') }}">
                            Cancel
                        </a>
                    </div>

                </form>
            </div>
        </div>
        @empty
            <p>Unfortunately, there are no destinations associated with this title, id or
                category.</p>
        @endforelse
    </div>
@endsection
