@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">{{ $income_category->name }}</div>

                <div class="card-body">
                    <label>{{ $income_category->add_info }}</label><br>
                    <label>{{ $income_category->church->name }}</label><br>
                    <hr>
                    <a href="{{ route('dashboard.income_categories.index') }}">
                        <button type="button" class="btn btn-light float-right">Voltar</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
