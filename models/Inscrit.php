<?php
  class Inscrit{

      private $prenom;
      private $nom;
      private $dateDeNaissance;
      private $lieuDeNaissance;
      private $email;
      private $password;
      private $pieces;

      /**
       * Inscrit constructor.
       * @param $prenom
       * @param $nom
       * @param $dateDeNaissance
       * @param $lieuDeNaissance
       * @param $email
       * @param $password
       * @param $pieces
       */
      public function __construct($prenom, $nom, $dateDeNaissance, $lieuDeNaissance, $email, $password, $pieces)
      {
          $this->prenom = $prenom;
          $this->nom = $nom;
          $this->dateDeNaissance = $dateDeNaissance;
          $this->lieuDeNaissance = $lieuDeNaissance;
          $this->email = $email;
          $this->password = $password;
          $this->pieces = $pieces;
      }


      /**
       * @return mixed
       */
      public function getPrenom()
      {
          return $this->prenom;
      }

      /**
       * @param mixed $prenom
       */
      public function setPrenom($prenom)
      {
          $this->prenom = $prenom;
      }

      /**
       * @return mixed
       */
      public function getNom()
      {
          return $this->nom;
      }

      /**
       * @param mixed $nom
       */
      public function setNom($nom)
      {
          $this->nom = $nom;
      }

      /**
       * @return mixed
       */
      public function getDateDeNaissance()
      {
          return $this->dateDeNaissance;
      }

      /**
       * @param mixed $dateDeNaissance
       */
      public function setDateDeNaissance($dateDeNaissance)
      {
          $this->dateDeNaissance = $dateDeNaissance;
      }

      /**
       * @return mixed
       */
      public function getLieuDeNaissance()
      {
          return $this->lieuDeNaissance;
      }

      /**
       * @param mixed $lieuDeNaissance
       */
      public function setLieuDeNaissance($lieuDeNaissance)
      {
          $this->lieuDeNaissance = $lieuDeNaissance;
      }

      /**
       * @return mixed
       */
      public function getEmail()
      {
          return $this->email;
      }

      /**
       * @param mixed $email
       */
      public function setEmail($email)
      {
          $this->email = $email;
      }

      /**
       * @return mixed
       */
      public function getPassword()
      {
          return $this->password;
      }

      /**
       * @param mixed $password
       */
      public function setPassword($password)
      {
          $this->password = $password;
      }

      /**
       * @return mixed
       */
      public function getPieces()
      {
          return $this->pieces;
      }

      /**
       * @param mixed $pieces
       */
      public function setPieces($pieces)
      {
          $this->pieces = $pieces;
      }


  }
?>