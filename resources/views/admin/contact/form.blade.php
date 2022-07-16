@extends('layouts.admin.master')

@section('title','Enquiry')

@push('css')

@endpush

@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-pages icon-gradient bg-mean-fruit">
                    </i>
                </div>
                <div>{{ __((isset($contact) ? 'Edit' : 'Create New') . ' Enquiry') }}</div>
            </div>
            <div class="page-title-actions">
                <div class="d-inline-block dropdown">
                    <a href="{{ route('admin.contact.index') }}" class="btn-shadow btn btn-danger">
                        <span class="btn-icon-wrapper pr-2 opacity-7">
                            <i class="fas fa-arrow-circle-left fa-w-20"></i>
                        </span>
                        {{ __('Back to list') }}
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <!-- form start -->
            <form role="form" id="NewsFrom" method="POST" action="{{ route('admin.contact.update',$contact->id) }}" enctype="multipart/form-data">
                @csrf
                @if (isset($contact))
                    @method('PUT')
                @endif
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-card mb-3 card">
                            <div class="card-body">
                                <h5 class="card-title">Contact Info</h5>

                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="">Name <small class="text-danger"><strong>*</strong></small></label>
                                        <input type="text" name="name" value="{{ $contact->name ?? old('name')  }}" class="form-control @error('name') is-invalid @enderror" field-attributes="required autofocus" placeholder="Enter Name" >
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Email <small class="text-danger"><strong>*</strong></small></label>
                                        <input type="email" name="email" value="{{ $contact->email ?? old('email')  }}" class="form-control @error('email') is-invalid @enderror" field-attributes="required autofocus" placeholder="Enter Email" >
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <label for="">Subject <small class="text-danger"><strong>*</strong></small></label>
                                        <input type="text" name="subject" value="{{ $contact->subject ?? old('subject')  }}" class="form-control @error('subject') is-invalid @enderror" field-attributes="required autofocus" placeholder="Enter Subject" >
                                        @error('subject')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-12 mt-2">
                                        <label for="">Description</label>
                                        <textarea name="message" id="editor1" placeholder="Message" class="form-control @error('message') is-invalid @enderror">{{ $contact->message ?? old('message')  }}</textarea>
                                        @error('message')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-12 mt-4">
                                        <label for="">Reply</label>
                                        <textarea name="reply" id="editor2" placeholder="Reply" class="form-control @error('reply') is-invalid @enderror">{{ $contact->reply ?? old('reply')  }}</textarea>
                                        @error('reply')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group text-right">
                                    <input type="submit" class="btn btn-primary" value="Save">
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('js')
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
  tinymce.init({
    selector: 'textarea#editor1',
    menubar: true
  });
  tinymce.init({
    selector: 'textarea#editor2',
    menubar: true
  });
</script>
@endpush