@if(count($perms))
    @foreach($perms as $perm)
        <div class="col-sm-3 permission">
            <div class="col-xs-8">
                <strong>{{ $perm->display_name }}</strong>
            </div>
            <div class="col-xs-4">
                <input type="radio" name="{{$perm->name}}" id="{{$perm->name}}-oui" value="true" {{ $user->can($perm->name) ? 'checked' : '' }}>
                <input type="radio" name="{{$perm->name}}" id="{{$perm->name}}-non" value="false" {{ $user->can($perm->name) ? '' : 'checked' }}>
            </div>
        </div>
    @endforeach
@endif