<div class="modal fade launch-pricing-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" style="display: none;" aria-modal="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="padding-top: 12px;">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="header">
                        <h2>{{ $title }}</h2>
                    </div>
                    <div class="body">
                        <form id="create-form" method="POST" enctype="multipart/form-data">
                            @foreach ($columnsName as $clnName)
                                @if (!in_array($clnName, $ignoreColumns))
                                    <div class="input-group input-group-sm mb-3">
                                        @if ($clnName == 'password')
                                            <input name="{{$clnName}}" placeholder="Enter {{$clnName}}" type="password" class="form-control create-form-input" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                        @else
                                            @if (in_array($clnName, $fileColumnsName))
                                                <input name="{{$clnName}}" placeholder="Enter {{$clnName}}" type="file" class="form-control create-form-input" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                            @else
                                                @if (substr($clnName, -2) == 'ID')
                                                    <?php
                                                        $options;
                                                        $nameColumn;
                                                        switch ($clnName) {
                                                            case 'MatchID':
                                                                $options = App\Models\MyMatch::all();
                                                                $nameColumn = "Stadium";
                                                                break;
                                                            case 'ClubID':
                                                            case 'TeamAID':
                                                            case 'TeamBID':
                                                                $options = App\Models\Club::all();
                                                                $nameColumn = "ClubName";
                                                                break;
                                                            case 'ContactID':
                                                                $options = App\Models\Contact::all();
                                                                $nameColumn = "Subject";
                                                                break;
                                                            case 'FeedbackID':
                                                                $options = App\Models\Feedback::all();
                                                                $nameColumn = "Subject";
                                                                break;
                                                            case 'GoalID':
                                                                $options = App\Models\Goal::all();
                                                                $nameColumn = "ScoringPlayerID";
                                                                break;
                                                            case 'PlayerID':
                                                            case 'ScoringPlayerID':
                                                            case 'AssistingPlayerID':
                                                                $options = App\Models\Player::all();
                                                                $nameColumn = "Name";
                                                                break;
                                                            case 'PositionID':
                                                                $options = App\Models\Position::all();
                                                                $nameColumn = "PositionInMatch";
                                                                break;
                                                            case 'TournamentID':
                                                                $options = App\Models\Tournament::all();
                                                                $nameColumn = "TournamentName";
                                                                break;
                                                            case 'UserID':
                                                                $options = App\Models\User::all();
                                                                $nameColumn = "name";
                                                                break;
                                                            default:
                                                                $options = App\Models\MyMatch::all();
                                                                $nameColumn = "MatchID";
                                                                break;
                                                        }
                                                    ?>
                                                    <x-select2-dropdown nameColumn="{{$nameColumn}}" name="{{$clnName}}" :options="$options"></x-select2-dropdown>
                                                @else
                                                    <input name="{{$clnName}}" placeholder="Enter {{$clnName}}" type="text" class="form-control create-form-input" aria-label="Small" aria-describedby="inputGroup-sizing-sm" autocomplete="off">
                                                @endif
                                            @endif
                                        @endif
                                    </div>
                                @endif
                            @endforeach
                
                            {{-- <x-select2-dropdown></x-select2-dropdown> --}}
                            
                            <div style="display: flex; justify-content: right; align-items: center; margin-top: 12px;">
                                <x-button classes="create-form-submit-button" type="primary" text="Create"></x-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<script>
    $(document).ready(function() {
        $('.select2').select2();
    });
</script>