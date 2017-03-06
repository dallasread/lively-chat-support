<div class="wrap" style="padding-top: 10px;">
    <div id="remetric-admin">
        <p>Loading Remetric...</p>
    </div>
</div>

<script type="text/javascript">
    window.afterRemetricRegister = function(user) {
        jQuery.post(window.ajaxurl, {
            action: 'remetric_save_keys',
            remetric_access_token: user.access_token,
            remetric_publishable_key: user.publishable_key,
        });
    }
</script>

<script type="text/javascript">
    (function(m, a, r, k, e, t, i, n, g) {
        g = document.createElement('script');
        g.type = 'text/javascript';
        g.async = true;
        g.setAttribute('data-publishable-key', m);
        g.setAttribute('data-access-token', a);
        g.src = r;
        g.setAttribute('data-base-url', k);
        g.setAttribute('data-css', e);
        n = document.getElementsByTagName('script')[0];
        n.parentNode.insertBefore(g, n);
    })(
        '<?php echo $remetric_publishable_key; ?>',
        '<?php echo $remetric_access_token; ?>',
        '<?php echo $remetric_admin_url; ?>',
        '<?php echo $remetric_api_url; ?>',
        '<?php echo str_replace('.js', '.css', $remetric_admin_url); ?>'
    );
</script>

<script type="text/javascript">
    (function(m, a, r, k, e, t, i, n, g) {
        g = document.createElement('script'); g.type = 'text/javascript'; g.async = true;
        g.setAttribute('data-remetric', m);
        g.setAttribute('data-css', 'http://cdn.remetric.com/marketing.css');
        g.setAttribute('data-base-url', 'http://remetric.unstories.com/api');
        g.src = 'http://cdn.remetric.com/remetric.js';
        n = document.getElementsByTagName('script')[0];
        n.parentNode.insertBefore(g, n);
    })('remetric');
</script>

