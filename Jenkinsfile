pipeline{
    agent any
    tools{
        maven 'maven3'
    }
    environment {
      DOCKER_TAG = getVersion()
    }

    stages{
        stage('SCM'){
            steps{
                git credentialsId: 'Github',
                    url: 'https://github.com/Adlaniq/dockeransiblejenkins.git'
            }
        }
        
        stage('Maven Build'){
            steps{
                sh "mvn clean package"
            }
        }
        
        stage('Docker Build'){
            steps{
                sh "docker build . -t adlaniq/ikan:${DOCKER_TAG} "
            }
        }
        stage('Docker Push'){
            steps{
                withCredentials([string(credentialsId: 'docker-hub', variable: 'dockerHubPwd')]) {
                    sh "docker login -u adlaniq -p ${dockerHubPwd}"
                }

                sh "docker push adlaniq/ikan:${DOCKER_TAG} "
            }
        }
            stage('Docker Deploy'){
                steps{
                    ansiblePlaybook credentialsId: 'slave-server', disableHostKeyChecking: true, installation: 'ansible', inventory: 'dev.inv', playbook: 'deploy-docker.yml', vaultTmpPath: ''

                }
            }
    }
}

def getVersion(){
    def commitHash = sh label: '', returnStdout: true, script: 'git rev-parse --short HEAD'
    return commitHash
}