## Table of contents

- [Overview](#overview)
  - [Screenshot](#screenshot)
  - [Links](#links)
- [My process](#my-process)
  - [Built with](#built-with)
  - [Featured Section](#featured-section)
  - [Useful resources](#useful-resources)
- [Author](#author)

## Overview
registration login system

### Screenshot

![](./screenshot.jpg)

![](./screenshot.jpg)

![](./screenshot.jpg)

### Links

- Solution URL: [GitHub Repo](https://your-solution-url.com)
- Live Site URL: [GitHub Pages](https://pages.github.com/)

## My process

### Built with

- HTML5 markup
- CSS  
- Flexbox
- Vanilla JavaScript
- Mobile-first workflow

### Featured Section


```html
```

```css
```

```js
```

### Useful resources

- [Title](https://www.site.com) - Lorem ipsum dolor sit amet consectetur, adipisicing elit.

- [Title](https://www.site.com) - Lorem ipsum dolor sit amet consectetur, adipisicing elit.

- [Title](https://www.site.com) - Lorem ipsum dolor sit amet consectetur, adipisicing elit. 

## Author

- Website - [Portfolio](https://www.stevenmnoyes.com)
- GitHub - [SteveNoyes](https://github.com/SteveNoyes)


<!-- Login System
https://codeshack.io/secure-login-system-php-mysql/

Secure Registration System
https://codeshack.io/secure-registration-system-php-mysql/ -->

~400 Users ( test limit 800)

How to register users:
  Are we going to have everyone's work email or will the registration not check.
  We need a check. Make sure they're employees. 

Users Story 

  Users register and login.
  They navigate to raffle prize selection page. 
  They make selections using their tickets. 
  There is one submit button. Once all tickets are used they can submit. They can submit only once. 
  After submiting their account is sent to a page that shows all prizes and will display the winners' name and the picture of the prize as they're picked...(maybe).


'Prize' admin account has access to a display of all tickets in any given prize database. There is also the select winner feature on each database that will select a random winner from the list once. 

1 user 
14 'tickets'
  each ticket 'code' is the USERSFULLNAME-(17 - 20digit)

27 - prizes
  each prize would have a database that will hold ticket/ticketholder number 
  onSubmitPhp() generates ticket with a prefix that is there name in Uppercase with a - and a 17 - 20 digit number randomly generated at the end





draw() function draws each prize separatly. First assigns ticket/ticketholder number (1 - ...) and draws randomly from those numbers.


Winner selection page will pull in winner name and 


You 'can', or you should be able to dynamically add prize databases. 
You can add an image of the prize and it will add it to a card that has an add function for the database. 

<!-- Then a 'lookup' function returns corresponding ticketholder based on the ticket/ticketholder number. -->



Design Notes:

  Most users, if not all, will be using this from their phones. Mobile needs to be the default with moderate tablet or laptop adjustments. 
  So, design needs to be simple. Sign in, select prizes, submit, view results. Each Prize Card is a picture of the prize, a description and a ticket selection feature.