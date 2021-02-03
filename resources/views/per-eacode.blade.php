
@extends('main')

@section('content') 

    <div class="card p-4 shadow-sm">
        <h2 class="mb-4">Per eacode selected 🏘️ Please fill out the form below 👇</h2>

        @include('inc.messages')
        @include('inc.loader')
        
        <form method="post" action="{{ route('send.eacode')}}">
            @csrf
            <div class="form-group">
                <label for="full_name">FULL NAME</label>
                <select class="form-control"  name="full_name" id="full_name">
                    <option selected="true" disabled>PLEASE SELECT YOUR NAME</option>
                    @foreach ($encoders as $encoder)
                    <option value="{{$encoder['first_name'].' '.$encoder['last_name']}}" {{ (old("full_name") == $encoder['first_name'].' '.$encoder['last_name'] ? 'selected' : '') }}>{{$encoder['first_name'].' '.$encoder['last_name']}}</option>
                    @endforeach                                         
                </select>
                    @if ($errors->has('full_name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('full_name') }}</strong>
                        </span>
                    @endif
            </div>

            <div class="form-group">
                <label for="eacode">EACODE</label>
                <input class="form-control" type="number" step="any" name="eacode" id="eacode" value="{{ old('eacode') }}" placeholder="143201002000">
                    @if ($errors->has('eacode'))
                        <span class="help-block">
                            <strong>{{ $errors->first('eacode') }}</strong>
                        </span>
                    @endif
            </div>

            <button type="submit" class="btn btn-lg btn-success mt-4" id="send">Send</button>
        </form>

    </div>
            
@endsection