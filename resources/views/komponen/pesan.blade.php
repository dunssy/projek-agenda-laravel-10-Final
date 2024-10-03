<div class="container pt-4">
@if ($errors->any())
        <div class="alert alert-danger" role="alert">
            @foreach ($errors->all() as $item)    
            <ul>
                <li>{{$item}}</li>
            </ul>
            @endforeach
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>
 @endif 
         
         
@if (Session::get('success'))
    <div class="alert alert-success" role="alert">
             {{Session::get('success')}}
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
     </div>
 @endif

@if (Session::get('warning'))
    <div class="alert alert-warning" role="alert">
             {{Session::get('warning')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
     </div>
 @endif
</div>