@extends('layouts.mainlayout')
@section('title', 'Setting Edit')
@section('content')
    <div class="d-flex align-items-center justify-content-between">
        <div class="pagetitle">
            <h1>Setting Page</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('homepage') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('delivery') }}">Setting</a></li>
                </ol>
            </nav>
        </div>
        <a href="{{ route('settings') }}" class="d-flex align-items-center btn btn-primary">
            <i class="bi bi-arrow-left-circle"></i> &nbsp; Back
        </a>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit Setting (<span
                                style="text-transform: capitalize">{{ $setting->key }}</span>) </h5>

                        <form action="{{ route('settings.update', ['key' => $setting->key]) }}" method="POST" novalidate
                            enctype="multipart/form-data" class="needs-validation">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                {{-- <div class="col-md-12 mb-3">
                                    <label for="key" style="font-weight: 700">Key:</label>
                                    <input type="text" name="key"
                                        class="@error('key') is-invalid @enderror form-control py-1"
                                        value="{{ $setting->key }}">
                                    @error('key')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div> --}}
                                @if ($setting->key == 'exchange_rate')
                                    <div class="col-md-12  mb-3">
                                        <label for="value" style="font-weight: 700">Value:</label>
                                        <textarea class="form-control" name="value">{{ $setting->value }}</textarea>
                                    </div>
                                @else
                                    <div class="col-md-12  mb-3">
                                        <label for="value" style="font-weight: 700">Value:</label>
                                        <textarea class="tinymce-editor" name="value">{{ $setting->value }}</textarea>
                                    </div>
                                @endif
                            </div>
                            <div class="row my-3">
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary"><i class="bi bi-check-circle"></i>
                                        &nbsp;Save</button>
                                </div>
                            </div>
                    </div>

                    </form>


                </div>
            </div>

        </div>
        </div>
    </section>
    <script>
        $('#summernote').summernote({
            placeholder: 'Hello stand alone ui',
            tabsize: 2,
            height: 200,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
            ]
        });
    </script>
    <script>
        profile_img.onchange = evt => {
            const [file] = profile_img.files
            if (file) {
                blah.src = URL.createObjectURL(file)
            }
        }
    </script>

@endsection
