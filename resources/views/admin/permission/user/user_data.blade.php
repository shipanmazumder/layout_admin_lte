@isset($users)
    @foreach($users as $key=>$value)
        <tr>
            <td class="text-center">{{++$key}}</td>
            <td >{{$value->name}}</td>
            <td >{{$value->role->name}}</td>
            <td >{{$value->email}}</td>
            <td >{{$value->phone}}</td>
            <td >{{($value->status==1)?"Enable":"Disable"}}</td>
            <td class="text-center" >
                @if(hasPermission("manage_user",EDIT))
                <a  href="{{url("user/user-edit/".$value->id)}}"  class="text-white btn btn-primary btn-xs  waves-effect tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Edit" id=""><i class="fa fa-edit"></i></a>
                @endif
                @if(hasPermission("manage_user",PUBLISH))
                <a onclick="return confirm('Are You Sure?')" href="{{url("user/control/".$value->id)}}" title="{{($value->status==1)?"Enable":"Disable"}}" class="btn btn-{{($value->status==1)?"success":"danger"}}   btn-xs  waves-effect tooltips" data-placement="top" data-toggle="tooltip" data-original-title="View" id=""><i class="fa fa-check-circle"></i></a>
                @endif
            </td>
        </tr>
    @endforeach
@endisset
