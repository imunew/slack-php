# imunew/slack-php
This is the repository fork from [palanik/slack-php](https://github.com/palanik/slack-php).

## The additional feature from `palanik/slack-php`.
I added `users.admin.invite` API.  
This API is undocumented by Slack.  
But it's an available.

```json
	"users.admin.invite": {
		"method": "GET",
		"path": "users.admin.invite"
	}
```

## References
- [outsideris/slack-invite-automation: A tiny web application to invite a user into your slack team.](https://github.com/outsideris/slack-invite-automation#oauth-tokens)
