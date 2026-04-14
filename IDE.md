# IDE

## VS Code

### Recommended Extensions

`.vscode/extensions.json`

```json
{
    "recommendations": [
        "bmewburn.vscode-intelephense-client",
        "onecentlin.laravel-blade",
        "amiralizadeh9480.laravel-extra-intellisense",
        "ryannaddy.laravel-artisan",
        "shufo.vscode-blade-formatter",
        "mehedidracula.php-namespace-resolver",
        "xdebug.php-debug",
        "mikestead.dotenv",
        "editorconfig.editorconfig",
        "open-southeners.laravel-pint"
    ]
}
```

### Settings

`.vscode/settings.json`

```json
{
    "editor.formatOnSave": true,
    "editor.defaultFormatter": "shufo.vscode-blade-formatter",
    "files.associations": {
        "*.blade.php": "blade"
    },
    "intelephense.files.exclude": [
        "**/.git/**",
        "**/node_modules/**",
        "**/vendor/**"
    ]
}
```
