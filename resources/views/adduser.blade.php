<form method="GET" action="{{action('StudentController@showAll')}}">
    <input type="submit" value="Show All"/>
</form>

<form method="post" action="{{ action('StudentController@insert') }}">
    Meno:<br>
    <input type="text" name="name" placeholder="Meno" value="" required autofocus/><br>

    GPA:<br>
    <input type="number" name="GPA" placeholder="GPA" value="" required/><br>

    Age:<br>
    <input type="number" name="age" placeholder="age" value="" required/><br><br>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="submit" value="Submit"/>
</form>
