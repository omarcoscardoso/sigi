<x-app-layout>
    <x-slot name="header">
        {{ __('New Appointment') }}
    </x-slot>

    <div class="card-body">
        <form action="{{ route('dashboard.appointments.store') }}" method="post">
        @csrf

        <div class="form-group row">
            <label for="name" class="col-md-2 col-form-label text-md-right">Nome</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control" name="name" required autofocus>
            </div>
        </div>

        <div class="form-group row">
            <label for="happens_at" class="col-md-2 col-form-label text-md-right">Data e Hora</label>

            <div class="col-md-4">
                <input id="happens_at" type="datetime-local" class="form-control" name="happens_at" required autofocus>
            </div>
        </div>

        <div class="form-group row">
            <label for="add_info" class="col-md-2 col-form-label text-md-right">Outras Informações</label>

            <div class="col-md-6">
                <textarea id="add_info" type="text" class="form-control" name="add_info"></textarea>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">
            Cadastrar
        </button>
        <a href="{{ route('dashboard.appointments.index') }}">
            <button type="button" class="btn btn-light">Cancelar</button>
        </a>

        </form>
    </div>

</x-app-layout>