<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<div class="row">

<div class="col-lg-12 margin-tb">

    <div class="pull-left">

        <h2> Show times</h2>

    </div>

    <div class="pull-right">

        <a class="btn btn-primary" href="{{ route('apps.index') }}"> Back</a>
        <li><a class="nav-link active" href="{{('/')}}">Home</a></li>

    </div>

</div>

</div>



<div class="row">

<div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-group">

        <strong>days:</strong>

        {{$dd->name}}

    </div>

</div>

<div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-group">

        <strong>times:</strong>

        {{$dd->day}}

    </div>

</div>
<div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-group">

        <strong>price:</strong>

        {{ $dd->name }}

    </div>

</div>

</div>
