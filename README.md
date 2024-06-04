# Dev Monorail Web App Deployment via Jenkins Pipeline

Dev Monorail is a comprehensive web application designed to manage monorail ticket purchases and guest information efficiently. This README includes instructions for setting up an automated Jenkins pipeline to build and deploy this application, along with important reminders for customization and infrastructure requirements.

## Table of Contents

- [Prerequisites](#prerequisites)
- [Infrastructure Requirements](#infrastructure-requirements)
- [Important Reminders](#important-reminders)
- [Jenkins Pipeline Setup](#jenkins-pipeline-setup)
- [Running the Pipeline](#running-the-pipeline)
- [Accessing the Application and Monitoring Tools](#Accessing-the-Application-and-Monitoring-Tools)
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

### Important Reminders

- Update IP Addresses in dev.inv: Ensure you modify the IP addresses in the dev.inv file to match your deployment environment.
- Customize prometheus.yml: Update the target addresses in the prometheus.yml file to match the specific use case of the website you want to scrape. Replace the sample addresses with your actual blackbox addresses. File is located in [Prometheus/prometheus.yml](https://github.com/Adlaniq/dev_monorail/blob/main/Prometheus/prometheus.yml).
```
  - job_name: 'blackbox'
    metrics_path: /probe
    params:
      module: [http_2xx]  # Look for a HTTP 200 response.
    static_configs:
      - targets:
        - http://prometheus.io    # Target to probe with http.
        - https://prometheus.io   # Target to probe with https.
        - http://example.com:8080 # Target to probe with http on port 8080.
        - http://52.220.48.251/dev_monorail/  # Add your own website lists here
    relabel_configs:
      - source_labels: [__address__]
        target_label: __param_target
      - source_labels: [__param_target]
        target_label: instance
      - target_label: __address__
        replacement: 52.76.29.39:9115  # The blackbox exporter's real hostname:port.
  - job_name: 'blackbox_exporter'  # collect blackbox exporter's operational metrics.
    static_configs:
      - targets: ['52.76.29.39:9115']  # The blackbox exporter's real hostname:port
```
- Ansible Installation: Ensure that Ansible is installed on the Master VM where Jenkins is installed.
- SSH Configuration: Confirm that the root user on the Master VM can SSH into the root accounts of the Slave and Prometheus VMs without requiring password input (e.g., via SSH keys).

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

Include steps in your [Jenkinsfile](https://github.com/Adlaniq/dev_monorail/blob/main/Jenkinsfile) to check out the code, build the Docker images, and deploy using Docker Compose. Optionally use Ansible for configuration management across servers.

```groovy
pipeline {
    agent any
    
    stages {
        stage('SCM') {
            steps {
                git branch: 'main',
                    credentialsId: 'Github',
                    url: 'https://github.com/your_username/dev_monorail.git'
            }
        }
        
        stage('Docker Deploy'){
            steps{
                ansiblePlaybook credentialsId: 'slave-server', disableHostKeyChecking: true, installation: 'ansible', inventory: 'dev.inv', playbook: 'deploy-docker.yml', vaultTmpPath: ''
            }
        }
    }
    
    post {
        success {
            echo 'Pipeline completed successfully'
        }
        failure {
            echo 'Pipeline failed'
        }
    }
}
```

<div align="center">
    <img src="https://drive.google.com/uc?export=view&id=13WWE9F22DvoEyFmBofVGI1MP6GUNYR1E" alt="Description of image" width="400">
</div>

### Running the Pipeline

- Commit changes to your repository to trigger the Jenkins pipeline.
- Use Jenkins to build and deploy by clicking ‘Build Now’.
- Monitor the deployment through the Jenkins console output.

### Accessing the Application and Monitoring Tools

Once the containers are up and running, you can access the web application and monitoring tools as follows:

- **Dev Monorail Web Application:** Access the main application interface at `http://<vm_ip>/dev_monorail/`.
- **phpMyAdmin:** Manage your database via phpMyAdmin at `http://<vm_ip>:8001`.
- **Prometheus:** View application metrics by navigating to `http://<vm_ip>:9090`.
- **Grafana:** Visualize the metrics collected by Prometheus at `http://<vm_ip>:3000`.
- **Blackbox Exporter:** Monitor various endpoints using Blackbox Exporter at `http://<vm_ip>:9115`.

Ensure that your firewall and network settings allow access to these ports to interact with the application, database management interface, and monitoring tools.

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
