---
extends: _layouts.work
title: KeyDungeon
author: Gerben Veenhof
date: 2020-06-26
section: content
header_image: /assets/images/works/keydungeon_c.webp
category: PHP/JS
order: 2
---

Keydungeon was one of my first finnished projects, it's a password manager that I wrote myself. So it's not as secure as possible. But I wanted to give it a try anyways.

This project was also made in the second year of internship I have ever done at an IT company. And the language and implementation shows is age. Because it was written in PHP and SCSS.

While SCSS/SASS is somewhat old now. It was already in the time I used it for my internship. However, the company just switched to using SCSS. So I got to learn it as well. Which was quite the experience, programming in css.

Here is a short example of the code I have written in scss (Most people that used scss would already know what I did here, but I'ill explain it anyways).

First I have split most of the css in smaller components, such as fonts in this example.

```scss
@import "_font.scss";

$template-color-dark: #242424;
$template-color-light: #f2f2f2;
$template-color: #F1C40F;
```

I also added variables for the main colors of the website, so the light, dark and orange colors can be changed on one location for the whole application. Which saves time and errors.
