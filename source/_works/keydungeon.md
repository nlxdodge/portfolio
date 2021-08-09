---
extends: _layouts.work
title: KeyDungeon
author: Gerben Veenhof
date: 2021-08-09
section: content
header_image: /assets/images/works/keydungeon_c.webp
category: PHP/JS
site: https://key.gerbenveenhof.nl/
code: 
---

Keydungeon was one of my first finished projects, it's a password manager that I wrote myself. So it's not as secure as possible. But I wanted to give it a try anyways.

This project was also made in the second year of internship I have ever done at an IT-company. And the language and implementation shows is age. Because it was written in PHP and SCSS.

While SCSS/SASS is somewhat old now. It was already in the time I used it for my internship. However, the company just switched to using SCSS. So I got to learn it as well. Which was quite the experience, programming in CSS.

Here is a short example of the code I have written in SCSS (Most people that used SCSS would already know what I did here, but I'ill explain it anyways).

First I have split most of the CSS in smaller components, such as fonts in this example.

```scss
@import "_font.scss";

$template-color-dark: #242424;
$template-color-light: #f2f2f2;
$template-color: #F1C40F;
```

I also added variables for the main colors of the website, so the light, dark and orange colors can be changed on one location for the whole application. Which saves time and errors.

## Increase in price

My host [Cloudbear](https://cloudbear.nl) thought that increasing the price from €0.50 to €7.50 a month was needed. But that is a price increase of 1400%. That's bonkers, going from €6,- a year to €90,- is just too much. That made me take action immediately, I started looking for a cheap alternative for PHP hosting. I did found another host which had the same price, but no e-mail or added domain.

So I choose to create another Vue app and connect everything in the back-end with IBM. As IBM is the only one that doesn't require a credit card when signing up for their services. I do have time till next year before they will increase the price. So I am also currently working on revising this project.
