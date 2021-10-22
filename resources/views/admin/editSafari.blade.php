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
        @forelse($safaris as $safari)
            <div class="row">
                <div class="col-md-8 col-md-offset-2">

                    <h1 class="mt-4">Create Safari</h1>

                    <form action="{{ url('/edit-safari/'. $safari->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title big">Safari Title <span class="require">*</span></label>
                            <input type="text" class="form-control" name="title" value="{{ $safari->title }}" />
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea rows="5" class="form-control" name="body" id="mytextarea">{{ $safari->description }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="overview">Overview</label>
                            <textarea rows="5" class="form-control" name="overview" id="mytextarea">{{ $safari->overview }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="itenerary">Full itenenary</label>
                            <textarea rows="5" class="form-control" name="itenerary" id="mytextarea">{{ $safari->itenerary }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="terms">Terms & Conditions </label>
                            <textarea rows="5" class="form-control" name="terms" id="mytextarea">{{ $safari->terms }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="image">Choose Image</label>
                            <input id="image" type="file" name="image">
                        </div>

                        <div class="form-group d-flex flex-row-reverse">
                            <button type="submit" class="btn btn-sm btn-primary ml-2">
                                Publish
                            </button>
                            <a class="btn btn-sm btn-danger" href="{{ url('/create-safari') }}">
                                Cancel
                            </a>
                        </div>

                    </form>
                </div>

            </div>
        @empty
            <p>Unfortunately, there are no safaris associated with this title, id or
                category.</p>
        @endforelse
    </div>
@endsection
