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
6. **bootstrap.min.css**: Bootstrap library to enhance the website's responsiveness and design.
7. **search.php**: Implements the search functionality to fetch properties from the database based on user input.
8. **conectare.php**: Includes PHP code for connecting to the MySQL database.
9. **mesaje.php**: Handles form submissions and stores messages in the `mesaje` table.

## Screenshots:

<br><br>
<img width="2048" alt="Screenshot 2023-07-16 at 22 38 35" src="https://github.com/laurapall/Imob-Real-Estate-Website/assets/48211193/ed9a7f4b-dfb4-431d-a6b6-c89fd1ec0aac">

<br><br>

<img width="2048" alt="Screenshot 2023-07-16 at 22 38 42" src="https://github.com/laurapall/Imob-Real-Estate-Website/assets/48211193/cdde6022-1603-402b-a447-5f8f6acf049e">

<br><br>

<img width="2048" alt="Screenshot 2023-07-16 at 22 38 47" src="https://github.com/laurapall/Imob-Real-Estate-Website/assets/48211193/1ff42a33-5e43-40bb-822a-8f7f0ecc4d86">

<br><br>

<img width="2048" alt="Screenshot 2023-07-16 at 22 39 03" src="https://github.com/laurapall/Imob-Real-Estate-Website/assets/48211193/115af549-1146-4330-b8c1-f884876c00ed">

<br><br>

<img width="2048" alt="Screenshot 2023-07-16 at 22 39 13" src="https://github.com/laurapall/Imob-Real-Estate-Website/assets/48211193/1ae299d8-6b72-41a9-b26a-0b5692da387f">

<br><br>

<img width="2048" alt="Screenshot 2023-07-16 at 22 39 34" src="https://github.com/laurapall/Imob-Real-Estate-Website/assets/48211193/b9301535-9333-4749-8fc0-b4f9be0b9d8f">

<br><br>

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

