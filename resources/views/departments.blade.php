@foreach ($departments as $department)
<h3>
   <b>name: </b>{{$department->name}}
</h3>
<div>
   <b>code: </b>{{$department->code}}
</div>
    
@endforeach