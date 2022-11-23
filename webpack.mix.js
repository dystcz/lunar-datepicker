const mix = require("laravel-mix")

mix.setPublicPath("dist")

if (mix.inProduction()) {
	mix.version()
}

mix.disableSuccessNotifications()
