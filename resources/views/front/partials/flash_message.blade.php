@if(Session::has('message'))
@php $message = Session::get('message') @endphp
<div class="row">
<div class="alert {{ $message['flag'] }}">
<a href="#" class="close" data-dismiss="alert">&times;</a>
{{ $message['message'] }}
</div>
</div>
@endif

@if($errors->any())
	<div class="row">
    	<div class="alert alert-danger">    		
            <ul class="pad-0">
                @foreach ($errors->all() as $error)
                    <li class="list-style-none">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif 