<table  id="{{$tableID}}" class="table table-hover {{$class or ""}}">
    <thead>
    @if(isset($head))
        <tr>
            {{$head}}
        </tr>
      @endif
    </thead>
    <tbody>
    @if(isset($body))
            {{$body}}
     @endif

    </tbody>

</table>