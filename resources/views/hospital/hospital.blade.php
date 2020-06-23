<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
 <tbody>
 @method('delete')
 @if(isset($hos)&&$hos->count()>0)
 @foreach($hos as $ho)
    <tr>
      <th scope="row">{{$ho->id}}</th>
      <td>{{$ho->name}}</td>
      <td>{{$ho->email}}</td>
      <td> <a href="{{route('hoss', $ho->id)}}">show</a>                                                           ow</a> 
      <form action="{{ route('hospital',$ho->id) }}" method="POST">

      @csrf

@method('DELETE')



<button type="submit" class="btn btn-danger">Delete</button>
      </td>
    </tr>
   
    @endforeach
    @endif
  </tbody>
</table>