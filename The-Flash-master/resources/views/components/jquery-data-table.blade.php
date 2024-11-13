<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>{{ $title }} <small>{{ $subTitle }}</small></h2>
                <div style="margin-top: 12px;">
                    <x-button type="primary" text="icon:/svg/basic-icons/Add.svg" data-toggle="modal" data-target=".launch-pricing-modal"></x-button>
                </div>

                <ul class="header-dropdown dropdown">
                    
                    <li><a href="javascript:void(0);" class="full-screen"><i class="fa fa-expand"></i></a></li>
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                        <ul class="dropdown-menu theme-bg gradient">
                            <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-eye"></i> View Details</a></li>
                            <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-share-alt"></i> Share</a></li>
                            <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-copy"></i> Copy to</a></li>
                            <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-folder"></i> Move to</a></li>
                            <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-edit"></i> Rename</a></li>
                            <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-trash"></i> Delete</a></li>
                        </ul>
                    </li> 
                </ul>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table js-basic-example dataTable spacing5" id="data-table">
                        <thead>
                            <tr>
                                @foreach ($columnsName as $column)
                                    @if (!in_array($column, $ignoreColumns))
                                        <th>{{ $column }}</th>
                                    @endif
                                @endforeach
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                @foreach ($columnsName as $column)
                                    @if (!in_array($column, $ignoreColumns))
                                        <th>{{ $column }}</th>
                                    @endif
                                @endforeach
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                        <tbody id="jquery-dt-tbody">
                            @foreach ($records as $record)
                                <tr data-id="{{$record->id}}">
                                    @foreach ($columnsName as $column)
                                        @if (!in_array($column, $ignoreColumns))
                                            @if (in_array($column, $imageColumns))
                                                <td>
                                                    <img 
                                                        src="/images/file-uploads/{{ $record[$column] }}" 
                                                        alt="Image"
                                                        width="60px"
                                                    >
                                                </td>
                                            @else
                                                <td>{{ $record[$column] }}</td>
                                            @endif
                                        @else
                                        @endif
                                    @endforeach
                                    <td>
                                        <x-button onclick="changeID({{$record->id}})" data-toggle="modal" data-target=".edit-form-modal" type="warning" text="icon:/svg/basic-icons/Pencil.svg" alt="SVG Icon"></x-button>
                                        <x-button onclick="deleteWithID({{$record->id}})" data-toggle="modal" data-target="#deleteModal" type="danger" text="icon:/svg/basic-icons/Trash.svg" alt="SVG Icon"></x-button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

