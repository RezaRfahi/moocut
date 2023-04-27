# Moocut

Moocut is a web application that allows users to rate barbershops and beauty salons. The application is built using the Laravel PHP framework and React JavaScript library.

## Table of Contents

- [Installation](#installation)
- [Usage](#usage)
- [Contributing](#contributing)
- [License](#license)

## Installation

To install Moocut, follow these steps:

1. Clone the repository:
git clone https://github.com/your-username/moocut.git

2. Navigate to the project directory:
cd moocut3

3. Install the project dependencies:
composer install
npm install

4. Create a new `.env` file by copying the `.env.example` file:
cp .env.example .env

5. Generate a new application key:
php artisan key:generate

6. Create a new SQLite database:
touch database/database.sqlite

7. Migrate the database schema:
php artisan migrate

8. Seed the database with sample data (optional):
php artisan db:seed

9. Start the development server:
php artisan serve

10. Navigate to http://localhost:8000 in your web browser to view the application.

## Usage

Moocut allows users to search for and rate barbershops and beauty salons. Users can also leave comments and reviews on each location's profile page. The application includes a search feature that allows users to filter results by location, rating, and service type.

## Contributing

If you'd like to contribute to Moocut, please follow these steps:

1. Fork the repository.

2. Create a new branch for your feature or bugfix:
git checkout -b my-feature-branch

3. Make your changes.

4. Write tests for your changes (optional).

5. Run the tests:
phpunit

6. Commit your changes:
git commit -am "Added my feature"

7. Push your changes to your fork:
git push origin my-feature-branch

8. Open a pull request.

## License

Moocut is open source software licensed under the MIT license.

## Design

### Color Scheme

The color scheme for Moocut is a modern and sleek palette of blue and gray.

- ![#1976d2](https://placehold.it/15/1976d2/000000?text=+) `#1976d2` - Primary blue
- ![#1e88e5](https://placehold.it/15/1e88e5/000000?text=+) `#1e88e5` - Darker blue
- ![#e0e0e0](https://placehold.it/15/e0e0e0/000000?text=+) `#e0e0e0` - Light gray
- ![#fafafa](https://placehold.it/15/fafafa/000000?text=+) `#fafafa` - White

### Logo

The logo for Moocut features a stylized pair of scissors, symbolizing the barbershop and beauty salon focus of the application. The logo uses a blue and gray color scheme and modern font for the text. The logo can be seen at the top of the application's home page and on any marketing materials associated with the project.

### Contributors
- [Reza Refahi](https://github.com/RezaRfahi).
- [Reza Bahri](https://github.com/Rezabahri80).

Acknowledgements
Moocut was inspired by similar rating applications such as Yelp and TripAdvisor. The Laravel and React frameworks were instrumental in the development of this project.
