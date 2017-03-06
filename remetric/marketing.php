<script type="text/javascript">
    (function(m, a, r, k, e, t, i, n, g) {
        g = document.createElement('script');
        g.type = 'text/javascript';
        g.async = true;
        g.setAttribute('data-remetric', m);
        g.src = a;
        g.setAttribute('data-base-url', r);
        g.setAttribute('data-css', k);
        n = document.getElementsByTagName('script')[0];
        n.parentNode.insertBefore(g, n);
    })(
        '<?php echo $marketing_publishable_key; ?>',
        '<?php echo $marketing_url; ?>',
        '<?php echo $marketing_api_url; ?>',
        '<?php echo str_replace('.js', '.css', $marketing_url); ?>'
    );
</script>
