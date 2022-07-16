@extends('layouts.admin.master')

@section('title','Settings')

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
                <div>{{ __('Settings') }}</div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-header">
                    <ul class="nav nav-justified">
                        <li class="nav-item"><a data-toggle="tab" href="#tab-eg7-0" class="active nav-link">General</a></li>
                        <li class="nav-item"><a data-toggle="tab" href="#tab-eg7-3" class="nav-link">Social Url</a></li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab-eg7-0" role="tabpanel">
                            <form id="settingsFrom" autocomplete="off" role="form" method="POST" action="{{ route('admin.setting.appearance.update') }}" enctype="multipart/form-data" class="row">
                                @csrf
                                @method('PATCH')
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Store Name</label>
                                        <input type="text" class="form-control @error('site_title') is-invalid @enderror" name="site_title" value="{{ setting('site_title') ?? old('site_title') }}" placeholder="Store Name">
                                        @error('site_title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ setting('email') ?? old('email') }}">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Meta Title</label>
                                        <input type="text" class="form-control @error('meta_title') is-invalid @enderror" name="meta_title" placeholder="Meta Title" value="{{ setting('meta_title') ?? old('meta_title') }}" />
                                        @error('meta_title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Address</label>
                                        <textarea name="address" class="form-control @error('address') is-invalid @enderror" placeholder="Address">{{ setting('address') ?? old('address') }}</textarea>
                                        @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Logo</label>
                                        <input type="file" class="dropify @error('site_logo') is-invalid @enderror" name="site_logo"  data-default-file="{{ setting('site_logo') != null ?  Storage::disk('media')->url(setting('site_logo')) : '' }}" />
                                        @error('site_logo')
                                            <span class="text-danger font-12" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Store Owner</label>
                                        <input type="text" class="form-control @error('store_owner') is-invalid @enderror" name="store_owner" placeholder="Store Owner" value="{{ setting('store_owner') ?? old('store_owner') }}">
                                        @error('store_owner')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Telephone Or Mobile</label>
                                        <input type="text" class="form-control @error('telephone') is-invalid @enderror" name="telephone" placeholder="Telephone Or Mobile" value="{{ setting('telephone') ?? old('telephone') }}">
                                        @error('telephone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Meta Keyword</label>
                                        <input type="text" class="form-control @error('meta_keyword') is-invalid @enderror" name="meta_keyword" placeholder="Meta Keyword" value="{{ setting('meta_keyword') ?? old('meta_keyword') }}">
                                        @error('meta_keyword')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Meta Description</label>
                                        <textarea name="meta_description" class="form-control @error('meta_description') is-invalid @enderror">{{ setting('meta_description') ?? old('meta_description') }}</textarea>
                                        @error('meta_description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Favicon</label>
                                        <input type="file" class="dropify @error('site_favicon') is-invalid @enderror" name="site_favicon"  data-default-file="{{ setting('site_favicon') != null ?  Storage::disk('media')->url(setting('site_favicon')) : '' }}" />
                                        @error('site_favicon')
                                            <span class="text-danger font-12" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button type="button" class="btn btn-danger" onClick="resetForm('settingsFrom')">
                                            <i class="fas fa-redo"></i>
                                            <span>Reset</span>
                                        </button>

                                        <button type="submit" class="btn btn-primary">
                                            <i class="fas fa-arrow-circle-up"></i>
                                            <span>Update</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>>
                        
                        <div class="tab-pane" id="tab-eg7-3" role="tabpanel">
                            <form id="settingsFrom" autocomplete="off" role="form" method="POST" action="{{ route('admin.setting.social.update') }}" enctype="multipart/form-data" class="row">
                                @csrf
                                @method('PATCH')
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Facebook</label>
                                        <input type="text" class="form-control @error('facebook') is-invalid @enderror" name="facebook" placeholder="Facebook Url" value="{{ setting('facebook') ?? old('facebook') }}" />
                                        @error('facebook')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">LinkedIn</label>
                                        <input type="text" class="form-control @error('linkedin') is-invalid @enderror" name="linkedin" placeholder="LinkedIn Url" value="{{ setting('linkedin') ?? old('linkedin') }}" />
                                        
                                        @error('linkedin')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Youtube</label>
                                        <input type="text" class="form-control @error('youtube') is-invalid @enderror" name="youtube" placeholder="Youtube Url" value="{{ setting('youtube') ?? old('youtube') }}" />
                                        
                                        @error('youtube')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Reddit</label>
                                        <input type="text" class="form-control @error('reddit') is-invalid @enderror" name="reddit" placeholder="Reddit Url" value="{{ setting('reddit') ?? old('reddit') }}" />
                                        
                                        @error('reddit')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Twitter</label>
                                        <input type="text" class="form-control @error('twitter') is-invalid @enderror" name="twitter" placeholder="Twitter Url" value="{{ setting('twitter') ?? old('twitter') }}" />
                                        
                                        @error('twitter')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Instagram</label>
                                        <input type="text" class="form-control @error('instagram') is-invalid @enderror" name="instagram" placeholder="Instagram Url" value="{{ setting('instagram') ?? old('instagram') }}" />
                                        
                                        @error('instagram')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Pinterest</label>
                                        <input type="text" class="form-control @error('pinterest') is-invalid @enderror" name="pinterest" placeholder="Pinterest Url" value="{{ setting('pinterest') ?? old('pinterest') }}" />
                                        
                                        @error('pinterest')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Quora</label>
                                        <input type="text" class="form-control @error('quora') is-invalid @enderror" name="quora" placeholder="Quora Url" value="{{ setting('quora') ?? old('quora') }}" />
                                        
                                        @error('quora')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <button type="button" class="btn btn-danger" onClick="resetForm('settingsFrom')">
                                            <i class="fas fa-redo"></i>
                                            <span>Reset</span>
                                        </button>

                                        <button type="submit" class="btn btn-primary">
                                            <i class="fas fa-arrow-circle-up"></i>
                                            <span>Update</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        $(document).ready(function() {
            // Datatable
            $("#datatable").DataTable();
        });
    </script>
@endpush