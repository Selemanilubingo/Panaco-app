@extends('layouts.app')

@section('content')
    <div class="container-fluid p-0">
        <div class="mb-3">
            <h1 class="h3 d-inline align-middle">Form Layouts</h1>
            <a class="badge bg-primary ms-2" href="pricing/index.htm" target="_blank">Pro Component <i
                    class="fas fa-fw fa-external-link-alt"></i></a>
        </div>

        <div class="row">
            <div class="col-12 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Basic form</h5>
                        <h6 class="card-subtitle text-muted">
                            Default Bootstrap form layout.
                        </h6>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('categories.store') }}" method="POST">
                            @csrf
                            @method('POST')
                            <div class="mb-3">
                                <label class="form-label">Designation</label>
                                <input type="text" class="form-control" placeholder="Designation"
                                    name="designation_categorie" />
                            </div>
                            {{-- <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" placeholder="Password" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Textarea</label>
                                <textarea class="form-control" placeholder="Textarea" rows="1"></textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label w-100">File input</label>
                                <input type="file" />
                                <small class="form-text text-muted">Example block-level help text here.</small>
                            </div>
                            <div class="mb-3">
                                <label class="form-check m-0">
                                    <input type="checkbox" class="form-check-input" />
                                    <span class="form-check-label">Check me out</span>
                                </label>
                            </div> --}}
                            <button type="submit" class="btn btn-primary">
                                Enregistrer
                            </button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection()
