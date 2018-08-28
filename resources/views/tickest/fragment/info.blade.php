@if(Session::has('info'))
    <div class="alert alert-info">
        <button type="button" class="clase" data-dismiss="alert"></button>
            &times;
        </button>
        {{ Session::get('info') }}
    </div>

@endif