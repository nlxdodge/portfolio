---
extends: _layouts.work
title: C.A.T.E Discord Bot
author: Gerben Veenhof
date: 2020-11-26
section: content
header_image: /assets/images/works/aq3d_bot
category: Java
links:
- https://github.com/nlxdodge/C.A.T.E
---

![Discord Bot](/assets/images/works/aq3d_bot.webp)

[AQ3D](https://aq3d.com/) is the latest game from [Artix Entertainment](https://www.artix.com/).
I was playing the game and also switching between a lot of different servers for some area's in the game. But not knowing which server had the most people, the Discord bot came in for the rescue.

The Discord bot had a command that could retrieve all the server information with the actual amount of people on it. But sadly the bot was removed by the owner of the bot.

So this was an oppurtunity for me to get my own skills up again. So I grabbed the latest version of [Discord4J](https://discord4j.com/) and coded away. Getting the url for the data with [WireShark](https://www.wireshark.org/), and making a good looking message and image for the bot.

Here is a preview of the written code. Which maps on the MessageCreateEvent, checks if the message is not from the bot itself, then checks the command.

If that all checks out it starts the creation of the message and getting the required info from AQ3D servers to return it to Discord.

```java
client.getEventDispatcher().on(MessageCreateEvent.class).map(MessageCreateEvent::getMessage)
        .filter(message -> message.getAuthor().map(user -> !user.isBot()).orElse(false))
        .filter(message -> message.getContent().equalsIgnoreCase("-servers")).flatMap(Message::getChannel)
        .flatMap(channel -> channel.createEmbed(spec -> spec.setAuthor("🤖 C.A.T.E", null, LOGO)
            .setTitle("⚔ Adventure Quest 3D Servers ⚔").setDescription(api.getServerInfo())))
        .subscribe();
```

For the current state of the project, check out Github with the Link button.
