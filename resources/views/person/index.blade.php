@extends('app')

@section('content')
    @if(Session::has('message'))
        <div class="alert alert-success">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <em> {!! session('message') !!}</em>
        </div>
    @endif

    <a class="btn btn-primary" href=" {{ route('cadastro.create') }}" role="button">Inscri&ccedil;&otilde;es</a><br><br>
    <table class="table table-bordered" id="users-table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Telefone</th>
                <th >Sexo</th>
                <th>Idade</th>
                <th>Cidade</th>
                <th>UF</th>
                <th style="width: 5%;">ACÃO</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Sexo</th>
                <th>Idade</th>
                <th>Cidade</th>
                <th>UF</th>
            </tr>
        </tfoot>
    </table>
@stop

@push('scripts')
<script>
    $(function() {
        $('#users-table tfoot th').each( function () {
            var title = $(this).text();
            $(this).html( '<input style="width: 100%;" type="text" placeholder="Pesquisar '+title+'" />' );
        } );

        var table = $('#users-table').DataTable({
            processing: true,
            serverSide: true,
            iDisplayLength: 300,
            dom: 'Bfrtip',
            buttons: ['copy', 'csv', 'excel', 'pdf'],
            ajax: '{!! route('datatables.data') !!}',
            columns: [
                { data: 'name', name: 'name' },
                { data: 'phone', name: 'phone' },
                { data: 'sex', name: 'sex' },
                { data: 'age', name: 'age' },
                { data: 'city', name: 'city' },
                { data: 'uf', name: 'uf' },
                {data: 'action', name: 'action', orderable: false, searchable: false}
            ]
        });

        table.columns().every( function () {
            var that = this;

            $( 'input', this.footer() ).on( 'keyup change', function () {
                if ( that.search() !== this.value ) {
                    that
                            .search( this.value )
                            .draw();
                }
            } );
        } );
    });
</script>
@endpush
