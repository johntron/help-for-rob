# Installing

1. Install [nodejs](https://nodejs.org/en/) version 6.*. This should include npm
2. Install [PHP](http://www.php.net): `brew install homebrew/php/php71`
2. Install [PM2](http://pm2.keymetrics.io/): `npm install -g pm2`
3. Install [localtunnel](https://localtunnel.github.io/www/): `npm install -g localtunnel`

# Running

1. Launch everything: `pm2 start processes.json`.
2. Load in browser: [https://yetfpxglpl.localtunnel.me](https://yetfpxglpl.localtunnel.me) and click on the link to test navigation – use Chrome's devtools to confirm data is being sent (network tab with "preserve log").
3. Login to Google Analytics and check tracking info for "yetfpxglpl.localtunnel.me".

# Troubleshooting

Problem: I get `no active client for 'yetfpxglpl'`

> Solution: Restart "tunnel-a" service: `pm2 restart tunnel-a`


Problem: I get `no active client for 'rbhdsnowpq'`

> Solution: Restart "tunnel-b" service: `pm2 restart tunnel-b`


Problem: The yetfpxglpl.localtunnel.me page fails to load.

> Solution: Restart "server-a" service: `pm2 restart server-a`


Problem: The rbhdsnowpq.localtunnel.me/index2.html page fails to load.

> Solution: Restart "server-b" service: `pm2 restart server-b`