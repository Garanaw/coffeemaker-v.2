
@extends('layout')


@section('content')

<div class="container-fluid">
    
    <form class="panel panel-default" method="post" action="{{ url('coffee/processOrder') }}">
        {!! csrf_field() !!}
        <div class="panel-heading">
            Your order:
        </div>
        <div class="panel-body">
            <table class="table">
                <tr>
                    <td>{{ $order['coffee']->name }}</td>
                    <td>{{ $order['coffee']->price }}</td>
                </tr>
                @if(isset($order['milk']) && intval($order['milk']) > 0)
                <tr>
                    <td>Extra Milk</td>
                    <td>0.00</td>
                </tr>
                @endif
                @if(isset($order['sugar']) && intval($order['sugar']) > 0)
                <tr>
                    <td>Sugar: {{ $order['sugar'] }}</td>
                    <td>0.00</td>
                </tr>
                @endif
            </table>
        </div>
	<input type="hidden" name="coffee" value="{{ $order['coffee']->id }}">
	<input type="hidden" name="milk" value="{{ $order['milk'] }}">
	<input type="hidden" name="sugar" value="{{ $order['sugar'] }}">
        
        <div class="panel-footer">
            <table class="table">
                <tr>
                    <td>Total</td>
                    <td>{{ $order['coffee']->price }}</td>
                </tr>
            </table>
        </div>
        <input type="submit" class="btn btn-default" value="Proceed">
    </form>
    
</div>

@endsection
