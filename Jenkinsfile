pipeline {
    agent any
    stages {
        stage('Checkout') {
            steps {
                git branch: 'main', url: 'https://github.com/LaiaPerez15/portfolio-backend.git'
            }
        }
        stage('List files') {
            steps {
                sh 'pwd'
                sh 'ls -la'
                sh 'ls -la backend/ || echo "backend directory not found"'
            }
        }
        stage('Validate PHP') {
            steps {
                sh 'php -l backend/index.php'
            }
        }
        stage('Deploy to Apache') {
            steps {
                sh '''
                    sudo rm -rf /var/www/html/backend
                    sudo mkdir -p /var/www/html
                    sudo cp -r backend /var/www/html/
                    sudo chown -R www-data:www-data /var/www/html/backend
                '''
            }
        }
    }
}
