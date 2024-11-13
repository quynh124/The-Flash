<div class="modal fade edit-form-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" style="display: none;" aria-modal="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="padding-top: 12px;">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="header">
                        <h2>{{ $title }}</h2>
                    </div>
                    <div class="body">
                        <form id="edit-form" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            {{-- <input type="hidden" name="{{$clnName}}" class="edit-form-input"> --}}
                            @foreach ($columnsName as $clnName)
                                @if (!in_array($clnName, $ignoreColumns))
                                    <div class="input-group input-group-sm mb-3">
                                        @if ($clnName == 'password')
                                            <input name="{{$clnName}}" placeholder="Enter {{$clnName}}" type="password" class="form-control edit-form-input" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                        @else
                                            @if ($clnName == 'id')
                                                <input type="hidden" name="{{$clnName}}" class="edit-form-input" id="editFormInputID">
                                            @else
                                                @if (in_array($clnName, $fileColumnsName))
                                                    <input name="{{$clnName}}" placeholder="Enter {{$clnName}}" type="file" class="form-control create-form-input" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                                @else
                                                    <input name="{{$clnName}}" placeholder="Enter {{$clnName}}" type="text" class="form-control edit-form-input" aria-label="Small" aria-describedby="inputGroup-sizing-sm" autocomplete="off">
                                                @endif
                                            @endif
                                        @endif
                                    </div>
                                @endif
                            @endforeach
                            
                            {{-- <x-select2-dropdown></x-select2-dropdown> --}}
                            
                            <div style="display: flex; justify-content: right; align-items: center; margin-top: 12px;">
                                <x-button classes="edit-form-submit-button" type="warning" text="Edit"></x-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



{{-- <script>
    $(document).ready(function() {
        $('.select2').select2();
    });
</script> --}}