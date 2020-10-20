<form method="post" action="{{ action('StudentController@update', ['id' => $student->id]) }}}">
    Meno:<br>
    <input type="text" name="name" value="{{$student -> name}}" required autofocus/><br>

    GPA:<br>
    <input type="number" name="GPA" value="{{$student -> GPA}}" required/><br>

    Age:<br>
    <input type="number" name="age" value="{{$student -> age}}" required/><br><br>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="submit" value="Submit"/>
</form>
