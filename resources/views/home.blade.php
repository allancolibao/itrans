
@extends('main')

@section('content') 

    <div class="card p-4 shadow-sm">
        <h2 class="mb-4">Please enter a valid value</h2>

        @include('inc.messages')
        @include('inc.loader')

        <form method="post" action="{{ route('send')}}">
            @csrf
            <div class="form-group">
                <label for="full_name">FULL NAME</label>
                <input class="form-control" list="encoders" type="text" name="full_name" id="full_name" value="{{ old('full_name') }}" placeholder="JUAN DELA CRUZ" autocomplete="off">
                    @if ($errors->has('full_name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('full_name') }}</strong>
                        </span>
                    @endif
                <datalist id="encoders" >
                    @foreach ($encoders as $encoder)
                    <option>{{$encoder['first_name'].' '.$encoder['last_name']}}</option>
                    @endforeach                                         
                </datalist>
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

            <div class="form-group">
                <label for="hcn">HCN</label>
                <input class="form-control" type="number" step="any" name="hcn" id="hcn" value="{{ old('hcn') }}" placeholder="0001">
                    @if ($errors->has('hcn'))
                        <span class="help-block">
                            <strong>{{ $errors->first('hcn') }}</strong>
                        </span>
                    @endif
            </div>

            <div class="form-group">
                <label for="shsn">SHSN</label>
                <input class="form-control" type="number" step="any" name="shsn" id="shsn" value="{{ old('shsn') }}" placeholder="0001">
                    @if ($errors->has('shsn'))
                        <span class="help-block">
                            <strong>{{ $errors->first('shsn') }}</strong>
                        </span>
                    @endif
            </div>

            <button type="submit" class="btn btn-lg btn-success mt-4" id="send">Send</button>
        </form>

    </div>
            
@endsection