---
extends: _layouts.post
title: Advent of Code 2021
author: Gerben Veenhof
date: 2021-12-27
section: content
link: https://github.com/nlxdodge/Advent-Of-Code
---

This year I had the ambition to actually use Java for advent of code. And needless to say, I got pritty far before falling down because of time issues and trying to solve it in a good way. Where I should have used the dirty way where possible.

I also switched to Java 17 for this year to try it out ahead of time and with it some newer features.

I wrote down most things I learned in the README.md file of the project, but some quick gists are:

You can make stream of Integers without collector to a List with:

```java
List<String> cookiesToBuy = groceries.filter(g -> g.name.includes("Cookies")).toList();
```

instead of using:

```java
List<String> cookiesToBuy = groceries.filter(g -> g.name.includes("Cookies")).collect(Collectors.toList());
```

Which is a lot nicer to read. I also learned that you can make 3D arrays in Java. I just didn't knew the option existed, so I was making my own data structure before with classes which uses a lot more memmory. This way when loading thousands of objects is going to take a toll on my 16GB computer.

```java
int size = 10;
String[][][] = new String[size][size][size];
```
