
@extends('layout')


@section('content')

<div class="container-fluid">
    <form method="post" action="{{ url('coffee/summary') }}" class="row" id="coffeeorder">
        
        <div class="col-md-4">
            <div class="form-group">
                <label for="coffee">Choose a coffee</label>

                <select name="coffee" id="coffee" class="form-control">
                    <option value="0">Select your coffee</option>
		    @foreach ( $coffees as $coffee )
                    <option value="{{ $coffee->id }}">{{ $coffee->name }}</option>
		    @endforeach
                </select>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="form-group">
                <label>
                    <input type="checkbox" name="milk" value="1">
                    Want to add extra milk?
                </label>
                
                
            </div>
        </div>
        
        <div class="col-md-4">
            <h3>Sugar on your coffee?</h3>
            <div class="radio">
                <label>
                    <input name="sugar" type="radio" value="0"> No, thanks
                </label>
            </div>
            <div class="radio">
                <label>
                    <input name="sugar" type="radio" value="1"> 1
                </label>
            </div>
            <div class="radio">
                <label>
                    <input name="sugar" type="radio" value="2"> 2
                </label>
            </div>
            <div class="radio">
                <label>
                    <input name="sugar" type="radio" value="3"> 3
                </label>
            </div>
        </div>
        
        <button type="submit" class="btn btn-default">Let's order it!</button>
        
    </form>
</div>

@endsection
