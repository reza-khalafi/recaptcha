<input type="hidden" name="{{ $name }}" {!! $attributes !!}>

<script>
    grecaptcha.ready(function() {
        grecaptcha.execute('{{ $siteKey }}', {action: '{{ $action }}'}).then(function(token) {
            document.getElementById('{{ $id }}').value = token;

            {{ $callback ? "$callback(token);" : '' }}
        });
    });
</script>
