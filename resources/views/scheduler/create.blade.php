<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Add New time</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('apps.index') }}"> Back</a>

        </div>

    </div>

</div>

   


@if ($errors->any())

<div class="alert alert-danger">

    <strong>sorry!</strong> There were some problems with your input.<br><br>

    <ul>

        @foreach ($errors->all() as $error)

            <li>{{ $error }}</li>

        @endforeach

    </ul>

</div>

@endif


<form action="{{ route('apps.store') }}" method="POST">

    @csrf

 
     <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>days:</strong>

                <input type="text" name="day" class="form-control" placeholder="day">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>time:</strong>

                <input type="text" name="time" class="form-control" placeholder="time">

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>price:</strong>

                <input type="text" name="price" class="form-control" placeholder="price">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                <button type="submit" class="btn btn-primary">Submit</button>
                <li><a class="nav-link active" href="{{('/')}}">Home</a></li>
        </div>

    </div>

   

</form>
 