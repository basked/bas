<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
             Statuses
            </div>
            <div class="card-body">

                <table class="table">
                    <thead>
                    <td>
                        <strong>Statuses</strong>
                    </td>
                    @foreach ($statuses as $status)
                        <td>
                            {{$status->name}}
                        </td>
                    @endforeach
                    </thead>
                    <tbody>
                    @foreach ($statuses as $status)
                        <tr>
                            <td>{{$status->name}}</td>
                            @foreach($status->statuses as $pivot_status)
                                <td>
                                    <input type="checkbox"
                                           wire:click="check_status({{$pivot_status->pivot->id}})"                           value="{{$pivot_status->pivot->id}}"
                                           @if ($pivot_status->pivot->access)
                                           checked
                                        @endif
                                    />
                                </td>
                            @endforeach
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
