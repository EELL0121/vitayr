<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
<script src="https://recaptcha.net/recaptcha/api.js" async defer></script>
<title>{{$title}}</title>
<script>
      window.settings = {
        version: '{{$version}}',
        logo: '{{$theme_config['logo']}}',
        title: '{{$title}}',
        description: '{{$description}}',
        theme_path: '{{$theme_path}}',
        theme:{
            via:'{{$theme_config['theme_via']}}',
            color:'{{$theme_config['theme_color']}}',
            default_i18n:'{{$theme_config['theme_default_i18n']}}',
            plan_custom_html:``,
            nodes_custom_html:``,
            ticket_custom_html:``,
        }
      }
    </script>
<script type="module" crossorigin src="/theme/vitayr/assets/index.c94482b2.js"></script>
<script src="/theme/vitayr/assets/main.js"></script>
<link rel="stylesheet" href="/theme/vitayr/assets/index.b7e66be0.css">
</head>
<body>
<div id="root"></div>
</body>
</html>
