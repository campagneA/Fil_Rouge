<?php

class UserModel
{

  private $id;
  private $pseudo;
  private $nom;
  private $prenom;
  private $mail;
  private $adresse;
  private $motDePasse;
  private $telephone;

  public function getId(): int
  {
    return $this->id;
  }

  public function setId(int $id): self
  {
    $this->id = $id;
    return $this;
  }

  public function getTelephone(): int
  {
    return $this->telephone;
  }

  public function setTelephone(int $telephone): self
  {
    $this->telephone = $telephone;
    return $this;
  }

  public function getNom(): string
  {
    return $this->nom;
  }

  public function setNom(string $nom): self
  {
    $this->nom = $nom;
    return $this;
  }

  public function getPrenom(): string
  {
    return $this->prenom;
  }

  public function setPrenom(string $prenom): self
  {
    $this->prenom = $prenom;
    return $this;
  }

  public function getMail(): string
  {
    return $this->mail;
  }

  public function setMail(string $mail): self
  {
    $this->mail = $mail;
    return $this;
  }

  public function getAdresse(): ?string
  {
    return $this->adresse;
  }

  public function setAdresse(?string $adresse): self
  {
    $this->adresse = $adresse;
    return $this;
  }

  public function getMotDePasse(): string
  {
    return $this->motDePasse;
  }

  public function setMotDePasse(string $motDePasse): self
  {
    $this->motDePasse = $motDePasse;
    return $this;
  }

  /**
   * Get the value of pseudo
   */
  public function getPseudo()
  {
    return $this->pseudo;
  }

  /**
   * Set the value of pseudo
   *
   * @return  self
   */
  public function setPseudo($pseudo)
  {
    $this->pseudo = $pseudo;

    return $this;
  }
}
