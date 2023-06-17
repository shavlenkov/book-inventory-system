@if(Session::get('message'))

    <div class="bg-teal-100 border-l-4 border-teal-500 text-teal-700 p-4" role="alert">
        <p>{{Session::get('message')}}</p>
    </div>
    <br/>

@endif

@if ($errors->any())

    <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    <br/>

@endif
