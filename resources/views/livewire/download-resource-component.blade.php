<div>
    <div class="container py-3 py-md-5 py-xl-8">
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="card card1">
                    <div class="card-body">
{{--                        <div class="fm-search">--}}
{{--                            <div class="mb-0">--}}
{{--                                <div class="input-group input-group-lg">--}}
{{--                                    <input type="text" wire:model="search" class="form-control" placeholder="Search the files">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <div class="d-flex align-items-center">
                            <div class="mt-3">
                                <h5 class="mb-0">Recent Files</h5>
                            </div>
                        </div>
                        <div class="table-responsive mt-3">
                            <table class="table table-striped table-hover table-sm mb-0">
                                <thead>
                                <tr>
                                    <th>Name <i class="bx bx-up-arrow-alt ms-2"></i>
                                    </th>
                                    <th>Uploaded</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @if(count($resources) > 0)
                                        @foreach($resources as $resource)
                                            <tr>
                                                <td>
                                                    <a href="{{asset('storage/ResourceFiles/'.$resource->filename)}}" download="{{$resource->file_descript}}">
                                                        <div class="d-flex align-items-center">
                                                            <div><i class="bx bxs-file-blank me-2 font-24"></i>
                                                            </div>
                                                            <div class="font-weight-bold text-black">{{$resource->file_descript}}</div>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td>{{$resource->created_at->format('d / m / Y')}}</td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                            <div class="my-4">
                                {{$resources->links('pagination::bootstrap-5')}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
