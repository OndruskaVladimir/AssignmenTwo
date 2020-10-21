<form method="GET" action="{{action('StudentController@getAddUserView')}}">
    <input type="submit" value="Add user"/>
</form>

<table>
    @foreach($students as $student)
        <tr>
            <td>{{$student -> name}} {{$student -> GPA}}</td>
            <td>{{$student -> age}}</td>
            <td>|</td>
            <td><a href="{{action('StudentController@show', ['id' => $student -> id])}}">Update</a></td>
            <td>|</td>
            <td><a href="{{action('StudentController@delete', ['id' => $student -> id])}}">Delete</a></td>
            <td>|</td>
        </tr>
    @endforeach
</table>
