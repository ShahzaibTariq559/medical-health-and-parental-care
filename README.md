# Online Charity Website

This project is a static online charity website that serves as the digital presence of a charity organization. The site allows users to learn about the charity, its mission, and contribute through online donations. It showcases the charity's work and provides an easy way for people to support the cause.

## Features

- **Static Website**: Simple, clean design representing the charity's mission and activities.
- **Donation Integration**: Users can donate online through the website.
- **Information Display**: Highlights the charity's projects, goals, and community impact.

## Installation

To set up and run the project locally, follow these steps:

1. Clone the repository:

    ```bash
    git clone https://github.com/ShahzaibTariq559/online-charity-platform.git
    ```

2. Navigate to the project directory:

    ```bash
    cd your-project-directory
    ```

3. Install the required dependencies:

    ```bash
    composer install
    composer update
    ```

4. Configure the database settings in the `.env` file. Update the following fields:

    ```
    DB_DATABASE=your_database_name
    DB_USERNAME=your_database_username
    DB_PASSWORD=your_database_password
    ```

5. Generate the application key:

    ```bash
    php artisan key:generate
    ```

6. Run the migrations to set up the database:

    ```bash
    php artisan migrate
    ```

7. Start the local development server:

    ```bash
    php artisan serve
    ```

8. Access the project at [http://localhost:8000](http://localhost:8000).

## License

This project is open-source and available under the [MIT License](LICENSE).

## Support

If you encounter any issues, feel free to open an issue or reach out to the project maintainers.
