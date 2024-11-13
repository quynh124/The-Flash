<div class="row clearfix"> 
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Editable Tables <small>You can edit any columns except header/footer</small></h2>
                <ul class="header-dropdown dropdown">

                    <li><a href="javascript:void(0);" class="full-screen"><i class="fa fa-expand"></i></a></li>
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-haspopup="true" aria-expanded="false"></a>
                        <ul class="dropdown-menu theme-bg gradient">
                            <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-eye"></i> View
                                    Details</a>
                            </li>
                            <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-share-alt"></i>
                                    Share</a>
                            </li>
                            <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-copy"></i> Copy to</a>
                            </li>
                            <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-folder"></i> Move to</a>
                            </li>
                            <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-edit"></i> Rename</a>
                            </li>
                            <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-trash"></i> Delete</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body">
                <table id="mainTable" class="table table-hover">
                    <thead>
                        <tr>
                            @foreach ($columnsName as $column)
                                <th>{{ $column }}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($records as $record)
                            <tr>
                                @foreach ($columnsName as $column)
                                    <td>{{ $record[$column] }}</td>
                                @endforeach
                            </tr>
                        @endforeach
                    </tbody>
                    {{-- <tfoot>
                        <tr>
                            <th><strong>TOTAL</strong></th>
                            <th>1290</th>
                            <th>1420</th>
                            <th>5</th>
                        </tr>
                    </tfoot> --}}
                </table>
            </div>
        </div>
    </div>
</div>
