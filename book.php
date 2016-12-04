<head>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-NV34FFS');
    </script>
    <!-- End Google Tag Manager -->
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NV34FFS"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <a href="book.php">jump</a>
<?php

$qs = http_build_query($_GET);
print(<<<EOL
<script type="text/javascript">
var originalUrl = 'https://rbhdsnowpq.localtunnel.me/index2.html';
dataLayer.push({
    event: 'asdf',
    eventCallback: function() {
        console.log('redirecting')
        document.location.replace(originalUrl);
    }
});
</script>
EOL
);

?>
redirecting
</body>
