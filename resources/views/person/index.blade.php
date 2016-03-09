@extends('app')

@section('content')
    <a class="btn btn-primary" href=" {{ route('cadastro.create') }}" role="button">Inscri&ccedil;&otilde;es</a><br><br>
    <table class="table table-bordered" id="users-table">
        <thead>
        <tr>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Endereço</th>
            <th>Cidade</th>
            <th>UF</th>
        </tr>
        </thead>
    </table>
@stop

@push('scripts')
<script>
    $(function() {
        $('#users-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('datatables.data') !!}',
            columns: [
                { data: 'name', name: 'name' },
                { data: 'phone', name: 'phone' },
                { data: 'address', name: 'address' },
                { data: 'city', name: 'city' },
                { data: 'uf', name: 'uf' }
            ]
        });
    });
</script>
@endpush
