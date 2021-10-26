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
        <div class="row">

            <div class="col-md-8 col-md-offset-2">

                <h1 class="mt-4">Create New Destination</h1>

                <form action="/create-destination" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title">Country <span class="require">*</span></label>
                        <input type="text" class="form-control" name="country" />
                    </div>
                    <div class="form-group">
                        <label for="title">Title <span class="require">*</span></label>
                        <input type="text" class="form-control" name="title" />
                    </div>

                    <div class="form-group">
                        <label for="body">Description</label>
                        <textarea rows="5" class="form-control" name="body" id="mytextarea"></textarea>
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
                        <a class="btn btn-sm btn-danger" href="{{ url('/createDestination') }}">
                            Cancel
                        </a>
                    </div>

                </form>
            </div>

        </div>
    </div>
    <div class="row" style="margin-top:4rem; ">
        <div class="col-sm-12">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Actions</th>
                        <th scope="col"></th>
                        {{-- <th scope="col">Terms & Conditions</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @forelse ($destinations as $destination)
                        <tr>
                            <th scope="row">{{ $destination->id }}</th>
                            <td>{{ $destination->title }}</td>
                            {{-- <td>{{ $safari->overview }}</td>
                            <td>{{ $safari->itenerary }}</td>
                            <td>{{ $safari->terms }}</td> --}}

                            <td><span class="btn btn-sm bg-info"><a class="text-white"
                                        href="{{ url('view-edit-blog/' . $destination->id) }}">Change Image <i
                                            class="fa fa-user"></i></a></span>
                                <span class="btn btn-sm bg-warning"><a class="text-white"
                                        href="{{ url('view-edit-destination/' . $destination->id) }}">Edit <i
                                            class="fa fa-pen"></i></a></span>
                                <span class="btn btn-sm bg-danger"> <a class="text-white"
                                        href="{{ url('delete-destination/' . $destination->id) }}">
                                        delete <i class="fa fa-trash"></i></a></span>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <th scope="row">#</th>
                            <td colspan="3" class="text-secondary">No records found !</td>
                        </tr>

                    @endforelse
                </tbody>
            </table>
            {{ $destinations->links() }}
        </div>
    </div>



@endsection
