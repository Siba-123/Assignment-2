# **Feedback Form Application**

This project is a simple feedback form application containerized using Docker. It includes a web interface built with HTML and PHP, and it is designed to be easily deployable using Docker.

---

## **Table of Contents**
1. [Features](#features)
2. [Prerequisites](#prerequisites)
3. [Getting Started](#getting-started)
   - [Clone the Repository](#clone-the-repository)
   - [Run with Docker](#run-with-docker)
4. [Project Structure](#project-structure)
5. [Technologies Used](#technologies-used)
6. [Contributing](#contributing)
7. [License](#license)

---

## **Features**
- User-friendly feedback form interface.
- Containerized using Docker for easy deployment.
- Lightweight and simple to set up.

---

## **Prerequisites**
Before running this project, ensure you have the following installed:
- [Docker](https://docs.docker.com/get-docker/)
- [Docker Compose](https://docs.docker.com/compose/install/)
- [Git](https://git-scm.com/)

---

## **Getting Started**

### **Clone the Repository**
To get started, clone this repository to your local machine:
```sh
git clone https://github.com/Siba-123/Assignment-2.git
cd Assignment-2
```

---

### **Run with Docker**
This project is containerized using Docker. Follow these steps to run the application:

1. **Build and Start the Containers**:
   Run the following command to build and start the application:
   ```sh
   docker-compose up
   ```

2. **Access the Application**:
   Once the containers are running, open your browser and navigate to:
   ```
   http://localhost:80
   ```

3. **Stop the Containers**:
   To stop the application, press `Ctrl+C` in the terminal or run:
   ```sh
   docker-compose down
   ```

---

## **Project Structure**
```
Assignment-2/
├── feedback.php          # PHP script for handling feedback form submissions
├── index.html           # Main HTML file for the feedback form
├── Dockerfile           # Dockerfile for building the application image
├── compose.yaml         # Docker Compose configuration file
├── README.md            # Project documentation (you are here!)
└── .gitignore           # Specifies files to ignore in Git
```

---

## **Technologies Used**
- **Frontend**: HTML
- **Backend**: PHP
- **Containerization**: Docker, Docker Compose
- **Version Control**: Git

---

## **Contributing**
Contributions are welcome! If you'd like to contribute to this project, please follow these steps:
1. Fork the repository.
2. Create a new branch (`git checkout -b feature/YourFeatureName`).
3. Commit your changes (`git commit -m 'Add some feature'`).
4. Push to the branch (`git push origin feature/YourFeatureName`).
5. Open a pull request.

---

## **Acknowledgments**
- Thanks to [Docker](https://www.docker.com/) for making containerization easy.
- Inspired by simple web form projects for learning purposes.



This `README.md` provides a clear and professional overview of your project. You can customize it further to include additional details specific to your application. Let me know if you need help with anything else! 😊
