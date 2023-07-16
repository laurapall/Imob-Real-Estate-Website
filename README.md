# Imob - Real Estate Agency Website

## Description:
Imob is a real estate agency website that allows users to browse and search for properties, view property details, contact agents, and read testimonials. The website is built using HTML, CSS, Bootstrap, JavaScript, and PHP with MySQL database integration via phpMyAdmin on localhost.

## Database Tables:
- agenti: Contains information about real estate agents, such as their names, contact details, etc.
- baie: Stores data related to bathroom features of properties.
- camere: Stores data related to the number of rooms in properties.
- garaj: Contains information about the garage features of properties.
- imobil: Contains information about the properties, such as property ID, title, description, price, etc.
- judet: Stores data about regions or states.
- localitate: Contains information about specific localities or areas.
- mesaje: Stores user contact messages sent via the contact form on the website.
- statut: Stores status information about properties (e.g., available, sold, etc.).
- testimoniale: Contains customer testimonials about their experiences with the agency.

## Pages:
1. **index.php**: The landing page of the website, showcasing featured properties and some introductory content.
2. **proprietati.html**: A page displaying a list of available properties. Users can click on individual properties to view more details.
3. **detalii.php**: Fetches and displays detailed information about a selected property based on the property ID passed in the URL.
4. **agenti.php**: A page listing the real estate agents with their contact information.
5. **contact.php**: A page with a contact form where users can send messages to the agency.
8. **bootstrap.min.css**: Bootstrap library to enhance the website's responsiveness and design.
9. **search.php**: Implements the search functionality to fetch properties from the database based on user input.
10. **conectare.php**: Includes PHP code for connecting to the MySQL database.
11. **mesaje.php**: Handles form submissions and stores messages in the `mesaje` table.

## Installation:
1. Set up a web server environment with PHP and MySQL support (e.g., XAMPP, WAMP, or MAMP).
2. Create a new database in phpMyAdmin named `imob`.
3. Import the database tables structure and initial data from the provided SQL file into the `imob` database.
4. Place all the website files (HTML, CSS, JavaScript, PHP) in the web server's root directory (e.g., `htdocs`).
5. Access the website by navigating to `http://localhost` in your web browser.

## License:
This project is licensed under the MIT License - see the `LICENSE` file for details.

## Note:
Please ensure that the website and database are adequately secured before deploying the project to a live server, as this README only provides an overview of the project and not comprehensive security measures.

