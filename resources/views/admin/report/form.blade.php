@extends('layouts.admin.master')

@section('title','Report')

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
                <div>{{ __((isset($report) ? 'Edit' : 'Create New') . ' Report') }}</div>
            </div>
            <div class="page-title-actions">
                <div class="d-inline-block dropdown">
                    <a href="{{ route('admin.report.index') }}" class="btn-shadow btn btn-danger">
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
            <form role="form" id="NewsFrom" method="POST" action="{{ isset($report) ? route('admin.report.update',$report->id) : route('admin.report.store') }}" enctype="multipart/form-data">
                @csrf
                @if (isset($report))
                    @method('PUT')
                @endif
                <div class="row">
                    <div class="col-md-8">
                        <div class="main-card mb-3 card">
                            <div class="card-body">
                                <h5 class="card-title">News Info</h5>

                                <div class="form-group">
                                    <label for="">Title <small class="text-danger"><strong>*</strong></small></label>
                                    <input type="text" name="title" value="{{ $report->title ?? old('title')  }}" class="form-control @error('title') is-invalid @enderror" field-attributes="required autofocus" placeholder="Enter Name" >
                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <!-- <div class="form-group">
                                    <label for="">Introduction Text</label>
                                    <textarea name="blurb" id="editor" placeholder="Introduction Text" class="form-control @error('blurb') is-invalid @enderror">{{ $report->blurb ?? old('blurb')  }}</textarea>
                                    @error('blurb')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div> -->

                                <div class="form-group">
                                    <label for="">Description</label>
                                    <textarea name="content" id="editor1" placeholder="Description" class="form-control @error('content') is-invalid @enderror">{{ $report->content ?? old('content')  }}</textarea>
                                    @error('content')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <div class="col-md-4">
                        <div class="main-card mb-3 card">
                            <div class="card-body">
                                <h5 class="card-title">Video, Image and Status</h5>
                                
                                <div class="form-group">
                                    <label for="">Image Or Video <small>(Max size: 10mb)</small></label>
                                    <input type="file" class="dropify @error('attach') is-invalid @enderror" name="attach"  data-default-file="{{ isset($report) ? $report->getFirstMediaUrl('attach') : old('attach')  }}" />
                                    @error('attach')
                                        <span class="text-danger font-12" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select name="status" class="form-control">
                                        <option value="0" @isset($report) @if($report->status = 0) selected  @endif @endisset>Disable</option>
                                        <option value="1" @isset($report) @if($report->status = 1) selected  @endif @endisset>Enable</option>
                                    </select>
                                </div>

                                <button type="button" class="btn btn-danger"  on-click="resetForm('NewsFrom')"><i class="fas fa-redo"></i></button>

                                @isset($report)
                                    <button type="submit" class="btn btn-primary"><i class="fas fa-arrow-circle-up"></i> Update</button>
                                @else
                                    <button type="submit" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Create</button>
                                @endisset
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
</script>
@endpush