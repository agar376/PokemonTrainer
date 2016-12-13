Trainer Pokemon Club
Developed by: Shobhit Agarwal
USC ID: 6473476393

CSCI 577A Homework 2

The project was built on Laravel framework of PHP. Being new to both the language and the framework, I learnt both the languages and the framework. The tutorial was very helpful to understand the framework and then implemented the project.

The project was built using the MVC (Model View Controller) model in mind. All business functionality was defined in the controller, UI in th eviews and the model to use both Controller and view was defined in Model.

Features:
- Register/Login using Laravel Auth Scaffolding
- Ability to edit the profile of a user - profile includes hometown
- Define whether the user is admin or not while registering
- Trainer and Admin are two roles
- Trainer can add / drop pokemon from his account
- If a pokemon is added twice, an error us shown.
- Admin can add / delete / edit pokemons from the system
- Admin can edit user profile
- If a pokemon is added twice by admin, an error is shown
- Trainer can view other trainers profile 
- Trainer can see pokemon owned by a user, and who all trainers own a particular pokemon
- pokemon can be searched by name


Assumptions:
- Once a pokemon is added to the system, it can be captured by all the trainers. There is no limit on the number of available pokemons in the system.
- Once a pokemon is deleted from the system, all the trainers lose that pokemon. Its a cascading effect on the foreign/primary key relationship.
- Pokemon names are case insensitive
- There can be more than one admins, and multiple trainers
- Admins are also trainers


Design decisions:
- A basic design structure was used from one of my old projects developed in undergrad (MVC)
- I enhanced the design to suit this project

UI
- Used an old UI design from one of the old undergrad projects
- Enhanced on the UI to suit the project

External dependencies:
- None

References:
- Database, design and MVC framework: my past work experience and undergraduate studies
- Laravel: Tutorial provided in the homework, and https://laravel.com/

