# Goparity Challenge

Hello developer! Thank you for taking the time to try out this challenge.
This is the repository of a fictional (and very simplified) Goparity. A few things you should know before you start

### User

-   A user can have many payments
-   A user can be a promoter (not mandatory)

### Promoter

-   A promoter can have many projects

### Project

-   A project can have many amortizations

### Amortizations

-   An amortization can have many payments
-   The amortizations are the sum of all payments that a promoter should pay

### Payments

-   A payment is related to a user (investor)
-   A payment belongs to an amortization

This is going to be an API that will integrate with the frontend part of your challenge. You should then start with this part.

## Before you start

Before starting the challenge please familiarize yourself with the source code as much as possible.
You should start with the backend part of the challenge before moving to the frontend part.
Duplicate the .env.example as .env and make sure you have all the necessary configurations to create a mySQL database - goparity can be a good name 😉
(please also make sure you check the config files).

Install the dependencies

```sh
composer install
```

Migrate the database

```sh
php artisan migrate:fresh --seed
```

> 🤚 This might take a while! (Especially on the payments)

Run the server

```sh
php artisan serve
```

Are you ready? Eveything's good? Great! Let's start 🧑‍💻

### Task 1 - Relationships and Rules 🔗

Your first task is to look at the database and define the **necessary relationships between the models**.

We also want you to define a few rules:

1. Projects

-   A project name is required and it should not have more than 30 characters. No special characters should be allowed.
-   A project description is required and it should not have more than 400 characters. No special characters should be allowed.

2. Amortizations

-   The columns promoter_id and project_id are not editable

### Task 2 - Endpoints 🔺

Your task is create the following endpoints (without authentication).
Each response should come with the appropriate relationship attached.
Please use [Eloquent Api Resources](https://laravel.com/docs/10.x/eloquent-resources) for the responses

-   GET amortizations (index)
    Should be able to filter the amortizations by state and/or amount. Make sure the project wallet_balance and project name are included.

-   GET amortization (show)
    Make sure the project wallet_balance and project name are included.

-   GET payments (index)
    Should be able to filter the payments by state and/or amount and/or user. Include the user id and name.

### Task 3 - Create a command 📢

Your task is to create a Laravel function that pays all the payments individually that belong to amortizations with a schedule date equal to or before a given date. You should then update the amortization's state to paid. The function should efficiently handle a large amount of data, with thousands of amortizations and millions of payments. Think of scalability ✋

Each amortization should be paid using the corresponding project’s wallet balance. Additionally, if an amortization is delayed (i.e., the current date is later than the schedule date), an email should be sent to the promoter associated with the project and to every profile that was supposed to receive that payment.

You should use a service like Mailtrap (https://mailtrap.io/email-sandbox/) to send the emails in your development stage. Update the config files as needed.

Add this command as the following route in your endpoints. This endpoint should be able to receive a date. Make sure you validate all the inputs.

### Extra Credit 💳

Adapt the Factories and the seeders to take into account the current relationships you have. You should create 1000 payments per amortization (make sure the payments have different values and their sum equals the amortization sum). The payment state should be the amortization's state.

Write feature tests for your Amortization Payment command.
