-- Delete the existing database if it exists
DROP DATABASE IF EXISTS Az2024;

-- Create a new database
CREATE DATABASE Az2024;

-- Use the newly created database
USE Az2024;

-- Create UserRoles table
CREATE TABLE UserRoles (
    RoleID INT PRIMARY KEY,
    RoleName VARCHAR(255) NOT NULL
);

-- Create Users table
CREATE TABLE Users (
    UserID INT PRIMARY KEY,
    Username VARCHAR(2) NOT NULL,
    Email VARCHAR(255) NOT NULL,
    Password VARCHAR(255) NOT NULL,
    RoleID INT,
    FOREIGN KEY (RoleID) REFERENCES UserRoles(RoleID)
);

-- Create Courses table
CREATE TABLE Courses (
    CourseID INT PRIMARY KEY,
    CourseName VARCHAR(255) NOT NULL,
    Description TEXT,
    Duration INT
);

-- Create Lessons table
CREATE TABLE Lessons (
    LessonID INT PRIMARY KEY,
    CourseID INT,
    Title VARCHAR(255) NOT NULL,
    Content TEXT,
    Multimedia VARCHAR(255),
    FOREIGN KEY (CourseID) REFERENCES Courses(CourseID)
);

-- Create Enrollments table
CREATE TABLE Enrollments (
    EnrollmentID INT PRIMARY KEY,
    UserID INT,
    CourseID INT,
    Timestamp TIMESTAMP,
    FOREIGN KEY (UserID) REFERENCES Users(UserID),
    FOREIGN KEY (CourseID) REFERENCES Courses(CourseID)
);

-- Create QuizzesExams table
CREATE TABLE QuizzesExams (
    QuizID INT PRIMARY KEY,
    CourseID INT,
    Questions TEXT,
    Results TEXT,
    FOREIGN KEY (CourseID) REFERENCES Courses(CourseID)
);

-- Create DiscussionForum table
CREATE TABLE DiscussionForum (
    PostID INT PRIMARY KEY,
    UserID INT,
    CourseID INT,
    Content TEXT,
    Timestamp TIMESTAMP,
    FOREIGN KEY (UserID) REFERENCES Users(UserID),
    FOREIGN KEY (CourseID) REFERENCES Courses(CourseID)
);

-- Create UserProgress table
CREATE TABLE UserProgress (
    ProgressID INT PRIMARY KEY,
    UserID INT,
    CourseID INT,
    LessonID INT,
    QuizID INT,
    CompletionStatus BOOLEAN,
    FOREIGN KEY (UserID) REFERENCES Users(UserID),
    FOREIGN KEY (CourseID) REFERENCES Courses(CourseID),
    FOREIGN KEY (LessonID) REFERENCES Lessons(LessonID),
    FOREIGN KEY (QuizID) REFERENCES QuizzesExams(QuizID)
);
