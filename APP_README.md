# Test Application

## Problem Statement

1. Create CRUD operation in Laravel or Core PHP and also need to create download excel functionality for the listing page and download pdf functionality for each user on top of the edit page.
   1. proper client-side and server-side validation require.
   2. PSR standard should be followed.
   3. Proper data structure for a database is required.
   4. All masters should come from database like state, city

2. Rest API:
   1. show personal details: all the above information should be sent in API and if user pass the mobile number then only matching data should be sent
   2. Update personal details: base on   email id or mobile no. (after updating mail should be a trigger to the given email id.)

### Database Fields

1. Name:- (Textbox)
2. Birthday:- (DatePicker)
3. Gender: (Radio)
4. State :-(DropDown)
5. City:- City should be base on  State
6. Education and Year_Of_Completion :-(should able to add  and remove these two fields functionality. user can add any number o. detail )
7. Profile Photo. (single image)  require preview when uploading an image
8. Skill:- (need to use select2 plugin with the user can able to select multiple skill)
9. upload certificates:- (It should be multi-upload and require preview when uploading)
10. profession: - Salaried, Self-employed (radio button)
11. company name(text box) show if he is salaried 
12. job started from : (date) if he is salaried
13. business name:- (text) show if he selects self-employed
14. location:- (text) show if he selects self-employed
15. Email id:-(text)
16. mobile no:-(text)

## Setting Up Instructions

1. Create the Environment file: `cp ./.env.example ./.env`
2. Change the Database Settings in `.env` File.
3. Generate the Application Key: `php artisan key:generate`
4. Create the Database: `php artisan migrate`
5. Seed the Database: `php artisan db:seed`: It will Seed data in States Table, Cities Table and a dummy row in Users Table.
6. Merge the CSS and JS Files: `yarn run dev` or `npm run dev`
7. [Optional] Run the Application: `php artisan serve` or you may use Laravel Valet, Nginx or Any other Application Server.

## Routes

### API Routes

#### User Routes

- User Details: [GET] http://localhost:8000/api/users/mobile/{mobile_number}
- User Details: [GET] http://localhost:8000/api/users/email/{email}

### Web Routes

- Get Users Details: [GET]           http://localhost:8000/users
- Create User:       [GET|POST]      http://localhost:8000/users/create
- Edit User:         [GET|PUT|PATCH] http://localhost:8000/users/{user_id}/edit
- Delete User:       [DELETE]        http://localhost:8000/users/4