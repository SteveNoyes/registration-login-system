Since you didn't tell us about the features of the site, I'm going to invent my specification. Let's say we want to create a simple raffle website with two main features:

A user system that registers and identifies each user with one admin account that has control over creating/editing/deleting the website content and its users.

A raffle system. Let's say it works like this:

1. The admin can create a raffle and assign prizes to each of the raffles.
2. Each user can sign one or more times for the raffle depending on the settings. Maybe we would like to enable more chances to register for a raffle if a user performs some action, for example if they give us a like on Facebook, follow us on Twitter, etc. Each of those actions would give the user a chance in the raffle.
3. A system that randomly selects users in a raffle and based on the random selection, assigns a prize for a user.

The development process would roughly go like this:

1. Define database entities: user, raffle instance, prize, raffle draw, raffle settings, etc.
2. Write the raffle module: creating raffles, assigning prizes, work out the details of the random selection, write the tests for the software. The business logic would be stored in services part of the application so it can be potentially componentized later and would be served by controllers.
3. Write the authentication system. Thankully, there are many ready-made solutions for this so it should take the least time.
4. Create the frontends that will support the backend logic we created in steps 1, 2 and 3. The backend would serve as an API so we could potentially make multiple raffle sites with changing the frontend part only.

This is just a rough outline - if I were to start work on this project, I would make sure that the specification is developed further. We would probably use a framework like Symfony to get common programming tasks out of the way, which would speed up the development process. The fun part of the project would be programming the randomness. While PHP can generate pseudo-random values by itself, we could also consider utilizing True Random Number Service for selecting the raffle winners for us.