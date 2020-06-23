<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  < <tbody>
 @if(isset($hos) && $hos->count()>0)
 @foreach($hos as $doc)
    <tr>
      <th scope="row">{{$doc->id}}</th>
      <td>{{$doc->name}}</td>
      <td>{{$doc->title}}</td>
      
    </tr>
   
    @endforeach
    @endif
  </tbody>
</table>