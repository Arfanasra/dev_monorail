# Dev Monorail Web App Deployment via Jenkins Pipeline

Dev Monorail is a comprehensive web application designed to manage monorail ticket purchases and guest information efficiently. This README includes instructions for setting up an automated Jenkins pipeline to build and deploy this application, along with important reminders for customization and infrastructure requirements.

## Table of Contents

- [Prerequisites](#prerequisites)
- [Infrastructure Requirements](#infrastructure-requirements)
- [Jenkins Pipeline Setup](#jenkins-pipeline-setup)
- [Running the Pipeline](#running-the-pipeline)
- [Monitoring and Alerts](#monitoring-and-alerts)
- [Important Reminders](#important-reminders)
- [Troubleshooting](#troubleshooting)

## Prerequisites

- Jenkins server with necessary plugins installed (Pipeline, Git, Docker Pipeline, Ansible)
- Source code repository access
- Docker and Docker Compose installed on target servers
- Prometheus and Grafana for monitoring

## Infrastructure Requirements

- **Three Virtual Machines (VMs):** This project requires three VMs to function correctly:
  - **Master VM:** Hosts Jenkins and Ansible.
  - **Slave VM:** Target deployment server for the application.
  - **Prometheus VM:** Hosts Prometheus and optionally Grafana for monitoring.
- Ensure that these VMs are properly configured and networked to communicate with each other.

## Jenkins Pipeline Setup

### 1. Install Necessary Jenkins Plugins

Ensure the following plugins are installed:
- Pipeline
- Git
- Docker Pipeline
- Ansible

### 2. Configure Source Code Management (SCM)

- Go to Jenkins Dashboard > New Item.
- Name your project (e.g., Dev Monorail) and select 'Pipeline', then click OK.
- In the Pipeline configuration, select 'Pipeline script from SCM'.
- Choose Git as SCM, provide your repository URL, and credentials.

### 3. Define the Jenkinsfile

Include steps in your `Jenkinsfile` to check out the code, build the Docker images, and deploy using Docker Compose. Optionally use Ansible for configuration management across servers.

```groovy
pipeline {
    agent any
    stages {
        stage('Checkout') {
            steps {
                git 'https://github.com/yourusername/dev_monorail.git'
            }
        }
        stage('Build and Deploy') {
            steps {
                sh 'ansible-playbook -i inventory/prod deploy-docker.yml'
            }
        }
    }
}
```

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

    Open your web browser and go to (http://localhost:80/dev_monorail).
   
5. **Access the application:**

    To access PHPMyAdmin go to (http://localhost:8001/).
    
6. **Stop and remove using Docker Compose:**

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


## Contributing

Contributions are welcome! Please follow these steps to contribute:

1. Fork the repository.
2. Create a new branch (`git checkout -b feature/YourFeature`).
3. Make your changes.
4. Commit your changes (`git commit -m 'Add some feature'`).
5. Push to the branch (`git push origin feature/YourFeature`).
6. Open a pull request.

Please ensure your code adheres to the project's coding standards and includes appropriate tests.

## Contact

If you have any questions or suggestions, feel free to reach out:

- **Email**: adlaniq20@example.com
- **GitHub**: [Adlaniq](https://github.com/Adlaniq)

Thank you for using Dev Monorail!

## Additional Information

This project utilizes Apache, PHP, and phpMyAdmin. phpMyAdmin can be accessed on port 8001.
