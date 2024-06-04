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
- [Contributing](#contributing)
- [Contact](#contact)

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
### Running the Pipeline

- Commit changes to your repository to trigger the Jenkins pipeline.
- Use Jenkins to build and deploy by clicking ‘Build Now’.
- Monitor the deployment through the Jenkins console output.

### Monitoring and Alerts

- Access Prometheus at (http://<prometheus-server>:9090) to view metrics.
- Grafana can also be configured to visualize the metrics collected by Prometheus.

### Important Reminders

- Update IP Addresses in dev.inv: Ensure you modify the IP addresses in the dev.inv file to match your deployment environment.
- Customize prometheus.yml: Update the target addresses in the prometheus.yml file to match the specific use case of the website you want to scrape. Replace the sample addresses with your actual blackbox addresses.
- Ansible Installation: Ensure that Ansible is installed on the Master VM where Jenkins is installed.
- SSH Configuration: Confirm that the root user on the Master VM can SSH into the root accounts of the Slave and Prometheus VMs without requiring password input (e.g., via SSH keys).

### Troubleshooting

- Check Jenkins logs for errors during the build or deployment stages.
- Verify Docker and Ansible logs on the deployment servers if there are issues during the deployment.

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
