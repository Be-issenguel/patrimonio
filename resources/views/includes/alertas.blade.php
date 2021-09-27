<!-- Mensagens de erro para validação de formulários -->
@if ($errors->any())
    @foreach ($errors->all() as $message)
        <script>
            new PNotify({
                title: 'Erro!',
                text: "{{ $message }}",
                type: 'error'
            });
        </script>
    @endforeach
@endif
<!-- Mensagem para qualquer acção bem sucedida -->
@if (session()->has('msg_success'))
    <script>
        new PNotify({
            title: 'Sucesso!',
            text: "{{ session('msg_success') }}",
            type: 'success'
        });
    </script>
@endif
