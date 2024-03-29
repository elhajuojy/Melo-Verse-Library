# MeloVerse

MeloVerse is an online music library application that allows users to search and listen to music, add tracks to their playlists, and leave comments and ratings. Admin users have the ability to add, archive, and modify music tracks, as well as manage user comments.

## ScreenShoots 


![Screenshot 2023-02-27 at 20 52 47](https://user-images.githubusercontent.com/86893073/221669362-e2c5e8e7-48da-4b46-9710-c06237c5c232.png)

![Screenshot 2023-02-27 at 20 52 55](https://user-images.githubusercontent.com/86893073/221669432-bc461e51-c77f-4816-a067-14320d3bafc9.png)
![Screenshot 2023-02-27 at 20 53 04](https://user-images.githubusercontent.com/86893073/221669439-301416a5-12f1-420e-b2c7-1373c3046607.png)


![Screenshot 2023-02-27 at 20 53 45](https://user-images.githubusercontent.com/86893073/221669444-02a1627f-3f54-4cf2-8902-1c48e60c750b.png)
![Screenshot 2023-02-27 at 20 54 19](https://user-images.githubusercontent.com/86893073/221669448-1a151695-2ba6-42a0-8329-b8045648a6a0.png)
![Screenshot 2023-02-27 at 20 54 34](https://user-images.githubusercontent.com/86893073/221669452-23c2692d-f3a0-4e5e-b27f-bae253ed8e27.png)
![Screenshot 2023-02-27 at 20 54 48](https://user-images.githubusercontent.com/86893073/221669459-b1531132-b6de-40fa-908e-3cc42031e6bb.png)


## Features

- User authentication system with two roles (client and admin)
- User can search and listen to music tracks
- User can add tracks to their playlists
- User can leave comments and ratings on tracks
- User can share tracks on social media
- User can search for tracks by title, artist, genre, and keywords
- Admin can add, archive, and modify music tracks
- Admin can manage user comments

## Entities

- A music track is defined by its cover image, title, artist(s) or group(s), writer(s), language(s), release date, lyrics, and duration.
- An artist is defined by their image, name, country, and date of birth.
- A band is defined by its name, image, members, country, and date of formation.



## Technologies

- Laravel framework
- Blade templating engine
- Tailwind CSS framework
- APIs (optional) and AJAX (optional) to enhance user experience

## Bonus Features

- Retrieve the user's last played track
- Music recommendations based on user preferences and listening history
- Monthly music track ranking
- Option to receive notifications for newly added music tracks



## User Flow

1. User logs in to their account
2. User searches for a track using the search bar
3. User listens to the track and adds it to their playlist if desired
4. User rates the track and leaves a comment if desired
5. User shares the track on social media if desired
6. Admin logs in to their account
7. Admin adds, archives, or modifies a music track as desired
8. Admin manages user comments as desired

![admin flow chart](https://raw.githubusercontent.com/elhajuojy/Melo-Verse-Library/09e5c103ed1bde5d5ae5e8e369d741c9b9e250dd/connecption/flowChart/glowGuru%20flowchart%20Admin.svg)


![client flow chart](https://raw.githubusercontent.com/elhajuojy/Melo-Verse-Library/09e5c103ed1bde5d5ae5e8e369d741c9b9e250dd/connecption/flowChart/glowGuru%20flowchart%20Client.svg)


![client flow chart](https://raw.githubusercontent.com/elhajuojy/Melo-Verse-Library/09e5c103ed1bde5d5ae5e8e369d741c9b9e250dd/connecption/flowChart/glowGuru%20flowchart%20Guest.svg)


## Diagrams 

![database diagram ](https://raw.githubusercontent.com/elhajuojy/Melo-Verse-Library/main/connecption/database_diagram.png)

![Use Case Diagram For The MaloVerse-Lib](https://user-images.githubusercontent.com/86893073/219063617-88686ac7-d100-44f2-8c18-f980b20901c5.svg)

![Class Diagram ](https://user-images.githubusercontent.com/86893073/219109677-ca185b13-7693-4702-8a6e-df423948b235.png)

Trello ✅
[Trello Link](https://trello.com/invite/b/AhNq7dIK/ATTI7c871a031fc698dee88fa330cc5fa78d0041AE4E/maloverse-library)

## Installation

1. Clone the repository to your local machine
2. Install the necessary dependencies using Composer
3. Create a new database for the application
4. Copy the `.env.example` file to a new file named `.env` and update the file with your database credentials and other necessary settings
5. Run the migrations to create the necessary database tables
6. Seed the database with initial data if desired
7. Start the application using `php artisan serve`

## License

This project is licensed under the [MIT license](https://opensource.org/licenses/MIT).
