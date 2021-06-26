# Software Developer - Coding challenge

## How to participate

1. Read the instructions carefully and do not hesitate to check the **Links and resources** section before you start.
2. When you're ready to start the test, make sure you clone this Github repository, follow Laravel installation guide and make a commit with the name **Coding Challenge Software Developer application**, it'll be considered as the time your started working on the challenge.
3. Once you're done with the test, reply again by email to notify us you're done with it.
4. Make sure you spare an **average of 4 hours**, and a **maximum of 2 days** to work on the challenge.

## Context
**Adminpanel to manage companies**
- Basically, project to manage companies and their employees. Mini-CRM.

### Company definition

- name (string, required)
- email (string, required)
- logo (string, nullable)

### Employee definition

- name (string, required)
- last_name (string, required)
- company_id (foreign key to Companies)
- email (string, nullable)
- phone (string, required)

### Features

- Basic Laravel Auth: ability to log in as administrator. You must implement an authentication system so that the APP knows which of the users is making the request. All requests should ensure that an authorized user is making the request. In the event of an unauthorized user, an error should be thrown.
- Use database seeds to create first user with email admin@admin.com and password “password”
- Use database migrations to create those schemas above (Company, Employee)
- Ability to preform CRUD actions on a company and an employee
- Store companies logos in storage/app/public folder and make them accessible from public
- Use basic Laravel resource controllers with default methods – index, create, store etc
- Use Repository Design patterns for the entities.
- Use Laravel’s validation function, using Request classes
- Use Laravel’s pagination for showing Companies/Employees list, 10 entries per page
- Use Laravel make:auth as default Bootstrap-based design theme, but remove ability to register
- List down all the employees and companies in separated viewa with ability to filter by name

#### Notes

- You should build a small and concise app the right way.
- CSS & colors are not evaluated.
- Feel free include any assumptions or notes that you have.
- Please include any instructions or guides that you have in order for us to test the work that you have done.
- We like tests, include tests in your code will be advantageous.

## Technologies to use

- Laravel / MySql / VueJs (Optional)

## Evaluation criteria 🚨

- use of MVC
- use of Auth
- use of CRUD and Resource Controllers
- use of Eloquent and Relationships
- use of Database migrations and seeds
- use of Form Validation and Requests
- use of File management
- use of Basic Bootstrap front-end
- use of Pagination
- Accuracy to follow instructions.
- Respect of software engineering principles : DRY, KISS, YAGNI, SOLID.
- Features are less important than code quality. So please put more focus on code quality and less on speed and number of features implemented.
- Your code will be evaluated based on: code structure, programming best practices, legibility (PSR).
- Clean commit history in git making code review easy, push progressively instead of pushing the whole project in a single commit. how good versioning control practices (The commits will be evaluated)
- Quality of documentation (The readme should be short and concise, like open source projects readme).
- Bonus points for advanced coding techniques.

## Instructions

- Put more focus on code quality and less on speed.
- Don't hack something quickly, take your time and craft something clean, with layers and separation of concerns.
- Write a readable and maintainable code.

The goal of this test is more to evaluate the way of thinking, design and quality of code.

## Questions?

If you have any questions, ask directly via email

## Links & resources

### Mandatory to know

#### PSR & coding style

- PSR-1: https://www.php-fig.org/psr/psr-1/
- PSR-2: https://www.php-fig.org/psr/psr-2/
- PSR: https://www.php-fig.org/psr/

#### Code design principles

- DRY: [Don't repeat your self](https://deviq.com/don-t-repeat-yourself/), [Is your code dry or wet?](https://www.softwareyoga.com/is-your-code-dry-or-wet/)
- [Single responsibility principle](https://deviq.com/single-responsibility-principle/)
- [SOLID](https://deviq.com/solid/)
- [KISS, DRY, TDA, YAGNI](https://medium.com/@derodu/design-patterns-kiss-dry-tda-yagni-soc-828c112b89ee)

### Best practices

- [PHP best practices](https://phpbestpractices.org/)
- [PHP the right way](https://phptherightway.com/)
- [Awesome PHP](https://github.com/ziadoz/awesome-php)

### Laravel & VueJs

- [Laravel](https://laravel.com)
- [VueJs](https://vuejs.org/v2/guide/)
- [Laravel Vue Single file component](https://medium.com/plint-sites/javascript-in-laravel-vue-single-file-components-69be12033d98)
- [Introduction to VueJs in Laravel](https://medium.com/justlaravel/introduction-to-vue-js-in-laravel-e8757174e58e)
- [Awesome Laravel](https://github.com/TimothyDJones/awesome-laravel)
- [Awesome Laravel 2](https://github.com/chiraggude/awesome-laravel)

### PHP / Laravel / Symfony

- https://laravel.com
- https://github.com/ziadoz/awesome-php
- https://github.com/TimothyDJones/awesome-laravel
- https://github.com/chiraggude/awesome-laravel

