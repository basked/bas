{{-- @dd( $statuses ?? ''  )--}}

<table border="1px">
    <thead bgcolor="#26e0da">
    <td>
        <strong>Statuses</strong>
    </td>
    @foreach ($statuses as $status)
        <td>
            {{$status->name}}
        </td>
    @endforeach
    </thead>
    <tbody bgcolor="#26e0da">
    @foreach ($statuses as $status)
        <tr>
            <td>{{$status->name}}</td>
            @foreach($status->statuses as $pivot_status)
                <td>
                    <input type="checkbox"
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


{{--    <strong>{{$status->name}}</strong>--}}
{{-- --}}
{{-- --}}
{{--<strong>{{$status->name}}</strong>--}}
{{--@foreach ($status->statuses  as $pstatus)--}}

{{--    [ {{$pstatus->name}}  -  {{$pstatus->pivot->access}}]--}}

{{--    @endforeach--}}
{{--    </br>--}}

{{--@endforeach--}}
