@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Editar Receita - {{ $income->name }}</div>

                <div class="card-body">
                  <form action="{{ route('dashboard.incomes.update', $income) }}" method="post">
                    @csrf
                    {{ method_field('put') }}

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Nome</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $income->name }}" required autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="income_category" class="col-md-4 col-form-label text-md-right">Categoria</label>

                        <select id="income_category" class="col-md-4 offset-md-1 form-control" name="income_category_id" required autofocus>
                            @foreach ($income_categories as $key => $value)
                                <option value="{{ $key }}">{{ $value }}</option>
                            @endforeach
                        </select>

                    </div>

                    <div class="form-group row">
                        <label for="value" class="col-md-4 col-form-label text-md-right">Valor</label>

                        <div class="col-md-6">
                        <input id="value" type="number" step="0.01" class="form-control @error('value') is-invalid @enderror" name="value" value="{{ number_format($income->value/100, 2, ',', '.') }}" required autofocus>

                            @error('value')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="ref_date" class="col-md-4 col-form-label text-md-right">Data</label>

                        <div class="col-md-6">
                        <input id="ref_date" type="date" class="form-control @error('ref_date') is-invalid @enderror" name="ref_date" value="{{ $income->ref_date }}" required autofocus>

                            @error('ref_date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="member" class="col-md-4 col-form-label text-md-right">Membro</label>

                        <select id="member" class="col-md-4 offset-md-1 form-control" name="member_id" required autofocus>
                            @foreach ($members as $key => $value)
                                <option value="{{ $key }}">{{ $value }}</option>
                            @endforeach
                        </select>

                    </div>

                    <div class="form-group row">
                        <label for="account" class="col-md-4 col-form-label text-md-right">Conta</label>

                        <select id="account" class="col-md-4 offset-md-1 form-control" name="account_id" required autofocus>
                            @foreach ($accounts as $key => $value)
                                <option value="{{ $key }}">{{ $value }}</option>
                            @endforeach
                        </select>

                    </div>

                    <div class="form-group row">
                        <label for="add_info" class="col-md-4 col-form-label text-md-right">Informações Adicionais</label>

                        <div class="col-md-6">
                            <textarea id="add_info" type="add_info" class="form-control @error('add_info') is-invalid @enderror" name="add_info">{{ $income->add_info }}</textarea>

                            @error('add_info')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">
                        Atualizar
                    </button>
                    <a href="{{ route('dashboard.incomes.index') }}">
                        <button type="button" class="btn btn-light">Cancelar</button>
                    </a>

                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection