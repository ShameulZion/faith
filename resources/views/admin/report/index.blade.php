@extends('layouts.admin.master')

@section('title','Project')

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
                <div>{{ __('All Report') }}</div>
            </div>
            <div class="page-title-actions">
                <div class="d-inline-block dropdown">
                    <a href="{{ route('admin.report.create') }}" class="btn-shadow btn btn-info">
                        <span class="btn-icon-wrapper pr-2 opacity-7">
                            <i class="fas fa-plus-circle fa-w-20"></i>
                        </span>
                        {{ __('Create Report Page') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="table-responsive">
                    <table id="datatable" class="align-middle mb-0 table table-borderless table-striped table-hover">
                        <thead>
                        <tr>
                            <th class="text-left">#</th>
                            <th class="text-left">Title</th>
                            <th class="text-left">Status</th>
                            <th class="text-left">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($reports as $key=>$report)
                                <tr>
                                    <td class="text-left text-muted">{{ $loop->iteration }}</td>
                                    <td>
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left mr-3">
                                                    <div class="widget-content-left">
                                                        @foreach($report->media as $attachment)
                                                            @if($attachment->mime_type == "video/mp4")
                                                                <video width="80" src="{{ isset($report) ? $report->getFirstMediaUrl('attach') : ''  }}"></video>
                                                            @elseif($attachment->mime_type == "application/pdf")
                                                                <iframe src="{{ isset($report) ? $report->getFirstMediaUrl('attach') : ''  }}" style="width:80px; height:80px;" frameborder="0"></iframe>
                                                            @else
                                                                <img width="80" src="{{ isset($report) ? $report->getFirstMediaUrl('attach') : ''  }}" alt="{{ $report->title }}">
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <div class="widget-content-left flex2">
                                                    <div class="widget-heading">{{ $report->title }}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-left">
                                        @if ($report->status)
                                            <div class="badge badge-success">Enable</div>
                                        @else
                                            <div class="badge badge-danger">Disable</div>
                                        @endif
                                    </td>
                                    <td class="text-left">
                                        <a class="btn btn-info btn-sm" href="{{ route('admin.report.edit',$report->id) }}"><i
                                                class="fas fa-edit"></i>
                                            <span>Edit</span>
                                        </a>
                                        <button type="button" class="btn btn-danger btn-sm"
                                                onclick="deleteData({{$report->id}})">
                                            <i class="fas fa-trash-alt"></i>
                                            <span>Delete</span>
                                        </button>
                                        <form id="delete-form-{{ $report->id }}"
                                              action="{{ route('admin.report.destroy',$report->id) }}" method="POST"
                                              style="display: none;">
                                            @csrf()
                                            @method('DELETE')
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
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