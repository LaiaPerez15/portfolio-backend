pipeline {
    agent any
    stages {
        stage('Checkout') {
            steps {
                git branch: 'main', url: 'https://github.com/LaiaPerez15/portfolio-backend.git'
            }
        }
        stage('Validate PHP') {
            steps {
                sh 'php -l index.php'
            }
        }
        stage('Deploy to Apache') {
            steps {
                sh 'cp index.php /var/www/html/'
            }
        }
    }
}
