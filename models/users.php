<?php
  class Users {
    // DB stuff
    private $conn;
    private $table = 'users';
    // Post Properties
    public $Id;
    public $Username;
    public $Password;
    public $Email;
    public $Firstname;
    public $Lastname;
    public $ImgUrl;
    public $Role;
    public $CretedBy;
    public $CreatedDate;
    // Constructor with DB
    public function __construct($db) {
      $this->conn = $db;
    }
    // Get Posts
    public function read() {
      // Create query
      $query = 'SELECT * FROM ' . $this->table . ' p
                                ORDER BY
                                  p.CreatedDate DESC';

      // Prepare statement
      $stmt = $this->conn->prepare($query);
      // Execute query
      $stmt->execute();
      return $stmt;
    }
    // Get Single Post
    public function read_single() {
          // Create query
          $query = 'SELECT p.Id, p.Username, p.Email, p.Firstname, p.Lastname, p.ImgUrl, p.Role, p.CreatedBy, p.CreatedDate FROM ' . $this->table . ' p
                                    WHERE
                                      p.Id = ?
                                    LIMIT 0,1';
          // Prepare statement
          $stmt = $this->conn->prepare($query);
          // Bind ID
          $stmt->bindParam(1, $this->Id);
          // Execute query
          $stmt->execute();
          $row = $stmt->fetch(PDO::FETCH_ASSOC);
          // Set properties
          $this->Id = $row['Id'];
          $this->Username = $row['Username'];
          $this->Email = $row['Email'];
          $this->Firstname = $row['Firstname'];
          $this->Lastname = $row['Lastname'];
          $this->ImgUrl = $row['ImgUrl'];
          $this->Role = $row['Role'];
          $this->CreatedBy = $row['CreatedBy'];
          $this->CreatedDate = $row['CreatedDate'];
    }
    // Create Post
    public function create() {
          // Create query
          $query = 'INSERT INTO ' . $this->table . ' SET Username = :Username, Password = :Password, Email = :Email, Firstname = :Firstname, Lastname = :Lastname, ImgUrl = :ImgUrl, Role = :Role';
          // Prepare statement
          $stmt = $this->conn->prepare($query);
          // Clean data
          $this->Username = htmlspecialchars(strip_tags($this->Username));
          $this->Password = htmlspecialchars(strip_tags($this->Password));
          $this->Email = htmlspecialchars(strip_tags($this->Email));
          $this->Firstname = htmlspecialchars(strip_tags($this->Firstname));
          $this->Lastname = htmlspecialchars(strip_tags($this->Lastname));
          $this->ImgUrl = htmlspecialchars(strip_tags($this->ImgUrl));
          $this->Role = htmlspecialchars(strip_tags($this->Role));
          // Bind data
          $stmt->bindParam(':Username', $this->Username);
          $stmt->bindParam(':Password', $this->Password);
          $stmt->bindParam(':Email', $this->Email);
          $stmt->bindParam(':Firstname', $this->Firstname);
          $stmt->bindParam(':Lastname', $this->Lastname);
          $stmt->bindParam(':ImgUrl', $this->ImgUrl);
          $stmt->bindParam(':Role', $this->Role);
          // Execute query
          if($stmt->execute()) {
            return true;
      }
      // Print error if something goes wrong
      printf("Error: %s.\n", $stmt->error);
      return false;
    }
    // Update Post
    public function update() {
          // Create query
          $query = 'UPDATE ' . $this->table . '
                                SET Password = :Password, Email = :Email, Firstname = :Firstname, Lastname = :Lastname, ImgUrl = :ImgUrl, Role = :Role
                                WHERE Id = :Id';
          // Prepare statement
          $stmt = $this->conn->prepare($query);
          // Clean data
          $this->Password = htmlspecialchars(strip_tags($this->Password));
          $this->Email = htmlspecialchars(strip_tags($this->Email));
          $this->Firstname = htmlspecialchars(strip_tags($this->Firstname));
          $this->Lastname = htmlspecialchars(strip_tags($this->Lastname));
          $this->ImgUrl = htmlspecialchars(strip_tags($this->ImgUrl));
          $this->Role = htmlspecialchars(strip_tags($this->Role));
          $this->Id = htmlspecialchars(strip_tags($this->Id));
          // Bind data
          $stmt->bindParam(':Password', $this->Password);
          $stmt->bindParam(':Email', $this->Email);
          $stmt->bindParam(':Firstname', $this->Firstname);
          $stmt->bindParam(':Lastname', $this->Lastname);
          $stmt->bindParam(':ImgUrl', $this->ImgUrl);
          $stmt->bindParam(':Role', $this->Role);
          $stmt->bindParam(':Id', $this->Id);
          // Execute query
          if($stmt->execute()) {
            return true;
          }
          // Print error if something goes wrong
          printf("Error: %s.\n", $stmt->error);
          return false;
    }
    // Delete Post
    public function delete() {
          // Create query
          $query = 'DELETE FROM ' . $this->table . ' WHERE Id = :Id';
          // Prepare statement
          $stmt = $this->conn->prepare($query);
          // Clean data
          $this->Id = htmlspecialchars(strip_tags($this->Id));
          // Bind data
          $stmt->bindParam(':Id', $this->Id);
          // Execute query
          if($stmt->execute()) {
            return true;
          }
          // Print error if something goes wrong
          printf("Error: %s.\n", $stmt->error);
          return false;
    }

  }
