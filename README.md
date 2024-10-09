# Bike API

## Overview
The Bike API is a Laravel-based backend service designed to manage and serve bike-related data. It integrates with the Strava API to fetch ride information and provides this data to the main website at jordanpartridge.us.

## Tech Stack
- **Framework**: Laravel 11
- **Database**: MySQL
- **Authentication**: Laravel Sanctum
- **External API**: Strava API
- **Storage**: Amazon S3 (for ride maps)

## Features
- Integration with Strava API to fetch ride data
- Secure authentication using Laravel Sanctum
- Storage and retrieval of ride maps using Amazon S3
- RESTful API endpoints for accessing bike-related data

## Installation

1. Clone the repository:
   ```
   git clone https://github.com/yourusername/bike-api.git
   cd bike-api
   ```

2. Install dependencies:
   ```
   composer install
   ```

3. Set up environment variables:
   ```
   cp .env.example .env
   ```
   Edit the `.env` file with your database and Strava API credentials.

4. Generate application key:
   ```
   php artisan key:generate
   ```

5. Run migrations:
   ```
   php artisan migrate
   ```

6. Start the development server:
   ```
   php artisan serve
   ```

## Configuration

### Strava API
To configure the Strava API integration:
1. Create a Strava API application at https://www.strava.com/settings/api
2. Add your Strava API credentials to the `.env` file:
   ```
   STRAVA_CLIENT_ID=your_client_id
   STRAVA_CLIENT_SECRET=your_client_secret
   STRAVA_REDIRECT_URI=your_redirect_uri
   ```

### Amazon S3
To set up S3 for storing ride maps:
1. Create an S3 bucket in your AWS account
2. Add your AWS credentials to the `.env` file:
   ```
   AWS_ACCESS_KEY_ID=your_access_key
   AWS_SECRET_ACCESS_KEY=your_secret_key
   AWS_DEFAULT_REGION=your_bucket_region
   AWS_BUCKET=your_bucket_name
   ```

## API Documentation
(Add details about your API endpoints, request/response formats, and any authentication requirements)

## Development

### Running Tests
```
php artisan test
```

### Code Style
This project follows the PSR-12 coding standard. To check your code style:
```
./vendor/bin/phpcs
```

## Deployment
The API is hosted at bikes.jordanpartridge.us. (Add specific deployment instructions or links to deployment documentation)

## Contributing
(Add guidelines for contributing to the project, if applicable)

## License
(Specify the license under which this project is released)
