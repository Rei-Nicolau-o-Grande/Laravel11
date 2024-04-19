
@if(session()->has('info'))
    <div class="alert alert-info" role="alert">
        {{ session('info') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if(session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if(session()->has('error'))
    <div class="alert alert-danger" role="alert">
        {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if (session()->has('message'))
    <div class="alert alert-info" role="alert">
        {{ session('message') }}
    </div>

@endif

@if($errors->any())
    <div class="alert alert-danger" role="alert">
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const alert = document.getElementById('alert');
        setTimeout(function() {
            // Encontra o botão de fechar dentro do alerta
            const closeButton = alert.querySelector('.btn-close');
            // Simula um clique no botão de fechar
            closeButton.click();
        }, 5000);
    });
</script>