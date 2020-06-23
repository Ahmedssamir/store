<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>sound</title>
</head>
<body>
<div class="row">

<div class="col-lg-12 margin-tb">

    <div class="pull-left">

        <h2>scheduler</h2>

    </div>

    <div class="pull-right">

        <a class="btn btn-success" href="{{ route('apps.create') }}"> Create New time</a>

    </div>

</div>

</div>



@if ($message = Session::get('success'))

<div class="alert alert-success">

    <p>{{ $message }}</p>

</div>

@endif



<table class="table table-bordered">

<tr>

    <th>id</th>

    <th>days</th>

    <th>time</th>
    <th>price</th>

    <th width="280px">Action</th>

</tr>

@foreach ($apps as $app)

<tr>

    <td>{{ $app->id }}</td>
    <td>{{ $app->day }}</td>
    <td>{{ $app->time }}pm</td>
    <td>{{ $app->price }}$</td>
    <td>

        <form action="{{ route('apps.destroy',$app->id) }}" method="POST">



            <a class="btn btn-info" href="{{ route('apps.show',$app->id) }}">Show</a>



            <a class="btn btn-primary" href="{{ route('apps.edit',$app->id) }}">Edit</a>



            @csrf

            @method('DELETE')



            <button type="submit" class="btn btn-danger">Delete</button>

<li><a class="nav-link active" href="{{('/')}}">Home</a></li>
        </form>

    </td>

</tr>

@endforeach

</table>



{!! $apps->links() !!}
</body>
</html>
