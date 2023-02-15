# MeloVerse

MeloVerse is an online music library application that allows users to search and listen to music, add tracks to their playlists, and leave comments and ratings. Admin users have the ability to add, archive, and modify music tracks, as well as manage user comments.

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
- Bootstrap CSS framework
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

## Diagrams 

![Use Case Diagram For The MaloVerse-Lib](https://user-images.githubusercontent.com/86893073/219063617-88686ac7-d100-44f2-8c18-f980b20901c5.svg)



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
