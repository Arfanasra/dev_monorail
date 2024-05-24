# Dev Monorail

Dev Monorail is a comprehensive web application designed to manage monorail ticket purchases and guest information efficiently.

## Table of Contents

- [Features](#features)
- [Installation](#installation)
  - [Prerequisites](#prerequisites)
  - [Steps](#steps)
- [Usage](#usage)
- [File Structure](#file-structure)
- [Contributing](#contributing)
- [License](#license)
- [Contact](#contact)

## Features

- User registration and authentication
- Ticket purchasing and confirmation system
- Guest information management
- Responsive design for seamless user experience across devices
- Dockerized setup for easy deployment

## Installation

### Prerequisites

- Docker
- Docker Compose

### Steps

1. **Clone the repository:**

    ```sh
    git clone https://github.com/yourusername/dev_monorail.git
    cd dev_monorail
    ```

2. **Start the application using Docker Compose:**

    ```sh
    docker-compose up
    ```

3. **Access the application:**

    Open your web browser and go to `http://localhost:80/dev_monorail`.

4. **Stop and remove using Docker Compose:**

    ```sh
    docker-compose down
    ```
   
## Usage

### User Registration

1. Navigate to the registration page.
2. Fill in the required details.
3. Submit the form to create a new account.

### User Login

1. Navigate to the login page.
2. Enter your credentials.
3. Submit the form to log in.

### Purchasing Tickets

1. After logging in, navigate to the ticket purchasing section.
2. Select the desired ticket type and quantity.
3. Proceed to payment and confirm the purchase.

### Managing Guests

1. Navigate to the guest management section.
2. View, add, or remove guest information as needed.
