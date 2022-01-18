@extends("layouts.app")


@section('content')

    </br>
    <div class="third">
    </div>
    <div class="third blackback">
        <h1>Enter Details</h1>
        <form action="record_added.php" method="POST">
            <label for="fname">Firstname</label>
            <input name ="fname" type="text" placeholder="e.g. John" class="form form-control" required/>
            </br>
            <label for="sname">Surname</label>
            <input name ="sname" type="text" placeholder="e.g. Smith" class="form form-control" required/>
            </br>
            <label for="age">Age</label>
            <input name ="age" type="number" max="100" min="1" placeholder="e.g. 42" class="form form-control" required/>
            </br>
            <button type="submit" class="btn btn-primary" style="float:right;">Submit</button>
        </form>
    </div>
    </br>

@endsection